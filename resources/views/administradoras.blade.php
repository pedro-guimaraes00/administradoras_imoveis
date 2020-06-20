@extends('layout.app', ["current" => "corretoras"])

@section('body')

<div class="card border">
    <div class="card-body">
        <button class="btn btn-success btn-lg" role="button" onclick="newAdmin()">
            <img src="{{ asset('icons/plus-circle-fill.svg')}}" width="20px" height="20px"> Novo Item
        </button>
        <div class="table-responsive">
            <table class="table table-ordered table-striped" id="tableADM">
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
                            <a href="/administradoras/edit/{{$adm->id}}" class="btn btn-sm btn-primary">
                                <img src="{{ asset('icons/pencil.svg') }}" width="20px" height="20px">
                            </a>
                            <a href="/administradoras/delete/{{$adm->id}}" class="btn btn-sm btn-danger">
                                <img src="{{ asset('icons/trash-fill.svg') }}" width="20px" height="20px">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>
</div>

@include('newAdmin')
    
@endsection


@section('javascript')

<script type="text/javascript">

    function newAdmin() {
            $('#nomeAdmin').val('');
            $('#cnpjAdmin').val('');
            $('#dlgAdmin').modal('show');
        }

</script>
    
@endsection