<?php

namespace App\Http\Controllers;

use App\Models\Alternativa;
use App\Models\Enquete;
use Illuminate\Http\Request;

class VotationController extends Controller
{
    public function show($id) {
        date_default_timezone_set('America/Recife');     

        $enquetes = Enquete::where('id', $id)->get();
        $alternativas = Alternativa::where('enquete_id', $id)->get();

        foreach ($enquetes as $enquete) {
            $data_atual = date('Y-m-d H:i:s');

            if (strtotime($enquete->data_inicio) > strtotime($data_atual) && strtotime($enquete->data_final) > strtotime($data_atual)) {
                $enquete->type = 'future';
            } else if (strtotime($enquete->data_inicio) < strtotime($data_atual) && strtotime($enquete->data_final) < strtotime($data_atual)) {
                $enquete->type = 'closed';
            }
        }

        return view('votation', compact('enquetes', 'alternativas'));
    }

    public function update(Request $request) {

        $votos = Alternativa::select('votos')->where('id', $request->alternativa)->get();

        foreach ($votos as $voto) {
            $voto_atual = $voto->votos;
        }

        $voto_total = $voto_atual + 1;

        Alternativa::where('id', $request->alternativa)->update(['votos' => $voto_total]);

        return redirect('enquetes')->with('success', 'Voto computado com sucesso!');
    }
}
