@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Usuários Cadastrados</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>CEP</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->rua }}</td>
                    <td>{{ $user->bairro }}</td>
                    <td>{{ $user->numero }}</td>
                    <td>{{ $user->cidade }}</td>
                    <td>{{ $user->estado }}</td>
                    <td>{{ $user->cep }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
