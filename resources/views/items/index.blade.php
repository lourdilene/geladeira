@extends('layouts.default')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

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

@endsection