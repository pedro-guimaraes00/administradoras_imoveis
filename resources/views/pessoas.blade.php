@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form class="form-inline my-2 my-lg-0" action="/clientes/search" method="GET">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Digite algo...">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-sm">
                    <button class="btn btn-success btn-lg" role="button" onclick="newPessoa()">
                        <img src="{{ asset('icons/plus-circle-fill.svg')}}" width="20px" height="20px"> Novo Item
                    </button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-ordered table-striped" id="tableADM">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $cli)
                    <tr>
                        <td>{{ $cli->id}}</td>
                        <td>{{ $cli->cpf }}</td>
                        <td>{{ $cli->nome }}</td>
                        <td>{{ $cli->telefone}}</td>
                        <td>
                            <a href="/clientes/edit/{{$cli->id}}" class="btn btn-sm btn-primary">
                                <img src="{{ asset('icons/pencil.svg') }}" width="20px" height="20px">
                            </a>
                            <a href="/clientes/delete/{{$cli->id}}" class="btn btn-sm btn-danger">
                                <img src="{{ asset('icons/trash-fill.svg') }}" width="20px" height="20px">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>
    <div class="card-footer">
        {{ $pessoas->links() }}
    </div>
</div>
    
@include('newPessoa')

@endsection

@section('javascript')

<script type="text/javascript">
    
    function newPessoa() {
        $('#dlgPessoa').modal('show');
    }

</script>

@endsection