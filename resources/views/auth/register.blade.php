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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nome Completo</label>
                <input id="name" type="text" class="form-control" name="name" required autofocus value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input id="email" type="email" class="form-control" name="email" required value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirmar Senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input id="cep" maxlength="8" type="text" class="form-control" name="cep" required onblur="buscarCep(this.value)" value="{{ old('cep') }}">
            </div>
            <div class="form-group">
                <label for="rua">Rua</label>
                <input id="rua" type="text" class="form-control" name="rua" required value="{{ old('rua') }}" readonly>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input id="bairro" type="text" class="form-control" name="bairro" required value="{{ old('bairro') }}" readonly>
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input id="numero" type="text" class="form-control" name="numero" required value="{{ old('numero') }}">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input id="cidade" type="text" class="form-control" name="cidade" required value="{{ old('cidade') }}" readonly>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input id="estado" type="text" class="form-control" name="estado" required value="{{ old('estado') }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>


    function buscarCep(cep) {
        cep = cep.replace(/\D/g, '');
        cep = cep.replace('-','')
        if (cep.length != 8) {
            alert('CEP inválido');
            return;
        }
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                if (data.erro) {
                    alert('CEP não encontrado');
                    return;
                }
                document.getElementById('rua').value = data.logradouro;
                document.getElementById('bairro').value = data.bairro;
                document.getElementById('cidade').value = data.localidade;
                document.getElementById('estado').value = data.uf;
            })
            .catch(error => {
                alert('Erro ao buscar CEP');
                console.log(error);
            });
    }
</script>
