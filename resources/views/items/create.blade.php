@extends('layouts.default')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

	<a href="/items" class="button">Voltar</a>

	<form action="/items" method="POST">
		@csrf

		<h1>Cadastro de itens</h1>

		<input type="text" name="name" placeholder="Nome">

		<input type="date" name="shelf_life" placeholder="Validade">

		<input type="text" name="quantity" placeholder="Quantidade">

		<input type="submit" value="Cadastrar" class="button">
	</form>

</div>

@endsection