@extends('layouts.default')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

	<a href="/items" class="button">Voltar</a>

	<form action="/items/{{ $item->id }}" method="POST">
		@csrf
		@method('PUT')

		<h1>Edição</h1>

		<input type="text" name="name" placeholder="Nome" value="{{ $item->name }}">

		<input type="date" name="shelf_life" placeholder="Validade" value="{{ date('Y-m-d', strtotime($item->shelf_life)) }}">

		<input type="text" name="quantity" placeholder="Quantidade" value="{{ $item->quantity }}">

		<input type="submit" value="Salvar altarações" class="button">
	</form>

</div>

@endsection