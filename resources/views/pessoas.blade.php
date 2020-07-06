@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <button class="btn btn-success btn-lg" role="button" onclick="newPessoa()">
            <img src="{{ asset('icons/plus-circle-fill.svg')}}" width="20px" height="20px"> Novo Item
        </button>
        <div class="table-responsive">
            <table class="table table-ordered table-striped" id="tableADM">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $cli)
                    <tr>
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