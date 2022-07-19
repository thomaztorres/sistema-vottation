@extends('app')
@section('content')
    <main>
        <div class="box">
            <div class="box-content">
                <form action="{{ route('votation.update', 0)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="box-header">
                        @foreach ($enquetes as $enquete)
                            <h1>{{ $enquete->nome }}</h1>
                            <p>{{ date('d/m/Y H:i', strtotime($enquete->data_inicio)) }} - {{ date('d/m/Y H:i', strtotime($enquete->data_final)) }}</p>
                        @endforeach
                    </div>
                    <div class="box-body">
                        <table>
                            <tr>
                                <th></th>
                                <th>Votos</th>
                            </tr>
                            @foreach ($alternativas as $alternativa)
                                <tr>
                                    <td class="alternatives">
                                        @foreach ($enquetes as $enquete)
                                            @if ($enquete->type == 'closed' || $enquete->type == 'future')
                                                <input disabled type="radio" style="cursor: default;" id="first" value="{{ $alternativa->id }}" name="alternativa">
                                                <label for="first">{{ $alternativa->descricao }}</label>
                                            @else 
                                                <input type="radio" class="radio-inputs" id="radio-input" value="{{ $alternativa->id }}" name="alternativa">
                                                <label for="radio-input">{{ $alternativa->descricao }}</label>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="votes-number">{{ $alternativa->votos }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="button-back">
                            <a href="{{route('enquetes.index')}}"><img src="{{ URL::asset('img/icons/arrow-back.svg') }}" alt="Voltar"></a>
                        </div>
                        @foreach ($enquetes as $enquete)
                            @if ($enquete->type == 'closed')
                                <input disabled type="submit" style="background-color: #551111; cursor:default;" value="Enquete Fechada">
                            @elseif ($enquete->type == 'future')
                                <input disabled type="submit" style="background-color: #111155; cursor:default;" value="Abrirá em {{ date('d/m/Y H:i', strtotime($enquete->data_inicio)) }}">
                            @else
                                <input type="submit" value="Votar">
                            @endif
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
        @include('modals/create')
    </main>
@endsection