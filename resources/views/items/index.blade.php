<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Geladeira</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }

            .flex {
                display: flex;
                flex-direction: column;
                width: 400px;
            }

            table th,
            table td {
                padding: 4px 10px;
                border: solid 1px black;
            }

            .button {
                padding: 10px;
                background-color: #DDD;
                border-radius: 8px;
                text-decoration: none;
                border: 0;
                cursor: pointer;
                width: fit-content;
            }

            .mini-button {
                padding: 4px;
                background-color: #DDD;
                border-radius: 8px;
                text-decoration: none;
                border: 0;
                cursor: pointer;
                color: #000;
                font-size: 12px;
            }

            .red {
                background-color: #f44336;
                color: #fff;
            }
            .blue {
                background-color: #2196f3;
                color: #fff;
            }

            .button-group {
                display: flex;
            }

            .button-group > * {
                margin: 0 4px;
                transition: 300ms;
            }

            .button-group > *:hover {
                opacity: 0.8;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <h1>ITENS DA GELADEIRA</h1>

            <a href="/items/create" class="button">Cadastrar novo</a>

            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Quant</th>
                        <th>Data de compra</th>
                        <th>Data de validade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itens as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($item->shelf_life)) }}</td>
                            <td class="button-group">
                                <a href="/items/{{ $item->id }}/edit" class="mini-button blue">Editar</a>

                                <form action="/items/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mini-button red">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </body>
</html>
