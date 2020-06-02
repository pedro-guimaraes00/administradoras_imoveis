@extends('layout.app')

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Corretoras Cadastradas</h5>
        <div class="table-responsive">
            <table class="table table-ordered table-hover" id="tableADM">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($administradora as $adm)
                    <tr>
                        <td>{{ $adm->id }}</td>
                        <td>{{ $adm->nome }}</td>
                        <td>{{ $adm->cnpj}}</td>
                        <td>
                            <a href="/administradoras/edit/{{$adm->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/administradoras/delete/{{$adm->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>
    <div class="card-footer">
        <a href="/products/new" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>
    
@endsection