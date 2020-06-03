@extends('layout.app', ["current" => "corretoras"])

@section('body')

    <div class="card border">
        <div class="card-body">
        <h5 class="card-title">Nova Corretora</h5>
        <form action="/administradoras" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="nomeAdmin" id="nomeAdmin"
                    placeholder="Nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="cnpjAdmin" id="cnpjAdmin"
                    placeholder="CNPJ">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection