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

            .shelf-life-expired {
                color: red;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <h1>ITENS DA GELADEIRA</h1>

            @foreach ($itens as $item)
                @if ($item->shelf_life < now())
                    <p class="shelf-life-expired">{{ $item->name }} | {{ $item->quantity }} (produto vencido)</p>
                @else
                    <p>{{ $item->name }} | {{ $item->quantity }}</p>
                @endif
            @endforeach

        </div>
    </body>
</html>
