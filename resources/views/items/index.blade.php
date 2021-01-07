<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }

            table th,
            table td {
                padding: 0 10px;
                border: solid 1px black;
            }

            .button {
                padding: 10px;
                background-color: #DDD;
                border-radius: 8px;
                text-decoration: none;
                border: 0;
                cursor: pointer;
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
                            <td>
                                <a href="/items/{{ $item->id }}/edit">Editar</a>

                                <form action="/items/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </body>
</html>
