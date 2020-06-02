@extends('layout.app', ["current" => "corretoras"])

@section('body')

    <div class="card border">
        <div class="card-body">
        <h5 class="card-title">Editar Corretora</h5>
        <form action="/administradoras/{{$administradora->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeAdmin">Nome</label>
                    <input type="text" class="form-control" name="nomeAdmin" id="nomeAdmin"
                    placeholder="Nome" value="{{$administradora->nome}}">
                </div>
                <div class="form-group">
                    <label for=cnpjAdmin">CNPJ</label>
                    <input type="text" class="form-control" name="cnpjAdmin" id="cnpjAdmin"
                    placeholder="CNPJ" value="{{$administradora->cnpj}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection