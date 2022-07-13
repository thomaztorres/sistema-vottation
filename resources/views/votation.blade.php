<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-config.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/votation.css') }}">
    <title>Vottation</title>
</head>
    <body>
        <header>
                <div class="header-items">
                    <div class="logo">
                        <h1><a href="/home">Vottation</a></h1>
                    </div>
                    <div class="links">
                        <ul class="links-list">
                            <li id="active"><a href="/home">Enquetes</a></li>
                            <li><a href="#abrirModal">Nova Enquete</a></li>
                        </ul>
                    </div>
                </div>
        </header>
        <div class="new-survey">
            <a href="#abrirModal">
                <img src="{{ URL::asset('img/icons/new.svg') }}" alt="Nova Enquete">
            </a>       
        </div>
    </body>
    <main>
        <div class="box">
            <div class="box-content">
                <form action="" method="post">
                    <div class="box-header">
                        <h1>Lula x Bolsonaro</h1>
                        <p>11/07/22 - 31/07/22</p>
                    </div>
                    <div class="box-body">
                        <div class="radio-section">
                            <input type="radio" name="first" id="first-radio">
                            <label for="first">Lorem ipsum dolor sit amet consectetur adipisicing elit.</label>
                            <input type="radio" name="second" id="second-radio">
                            <label for="second">Lorem ipsum dolor sit amet consectetur adipisicing elit.</label>
                            <input type="radio" name="third" id="third-radio">
                            <label for="third">Lorem ipsum dolor sit amet consectetur adipisicing elit.</label>
                        </div>
                        <table>
                            <tr>
                                <th>Votos</th>
                            </tr>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                        </table>
                    </div>
                    <div class="box-footer">
                        <h3>Votos totais: 12</h3>
                        <input type="submit" value="Votar">
                    </div>
                </form>
            </div>
        </div>
    </main>
</html>