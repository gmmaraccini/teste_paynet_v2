@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Usuários Cadastrados</h1>
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }} - {{ $user->email }} - {{ $user->rua }}, {{ $user->bairro }}, {{ $user->numero }}, {{ $user->cidade }} - {{ $user->estado }}, CEP: {{ $user->cep }}</li>
            @endforeach
        </ul>
    </div>
@endsection
