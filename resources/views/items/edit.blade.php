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

            h1 {
				font-size: 20px;
				font-family: sans-serif;
			}

			.button {
                padding: 10px;
                background-color: #DDD;
                border-radius: 8px;
				text-decoration: none;
				border: 0;
				cursor: pointer;
            }

			form {
				display: flex;
				flex-direction: column;
				width: 300px;
				margin: 0 auto;
			}

			form input {
				margin-bottom: 10px;
			}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

			<a href="/items" class="button">Voltar</a>

			<form action="/items/{{ $item->id }}" method="POST">
				@csrf
				@method('PUT')

				<h1>Cadastro de itens</h1>

				<input type="text" name="name" placeholder="Nome" value="{{ $item->name }}">

				<input type="date" name="shelf_life" placeholder="Validade" value="{{ date('Y-m-d', strtotime($item->shelf_life)) }}">

				<input type="text" name="quantity" placeholder="Quantidade" value="{{ $item->quantity }}">

				<input type="submit" value="Salvar altarações" class="button">
			</form>

		</div>
    </body>
</html>
