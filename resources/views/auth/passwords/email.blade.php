@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input id="email" type="email" class="form-control" name="email" required value="{{ old('email') }}">
            </div>
            <button type="submit" class="btn btn-primary">Enviar Link de Recuperação</button>
        </form>
    </div>
@endsection
