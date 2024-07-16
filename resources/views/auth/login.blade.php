@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input id="email" type="email" class="form-control" name="email" required value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="form-group mt-3">
                <a href="{{ route('password.request') }}">Esqueci minha senha</a>
            </div>
        </form>
    </div>
@endsection
