@extends('layout.app', ["current" => "condominios"])

@section('body')

<div class="card border">
    <div class="card-body">
        <button class="btn btn-success btn-lg" role="button" onclick="newCondo()">
            <img src="{{ asset('icons/plus-circle-fill.svg')}}" width="20px" height="20px"> Novo Item
        </button>
        <div class="table-responsive">
            <table class="table table-ordered table-striped" id="tableADM">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Lote</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($condominios as $condo)
                    <tr>
                        <td>{{ $condo->id }}</td>
                        <td>{{ $condo->nome }}</td>
                        <td>{{ $condo->lote}}</td>
                        <td>
                            <a href="/condominios/edit/{{$condo->id}}" class="btn btn-sm btn-primary">
                                <img src="{{ asset('icons/pencil.svg') }}" width="20px" height="20px">
                            </a>
                            <a href="/condominios/delete/{{$condo->id}}" class="btn btn-sm btn-danger">
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

@include('newCondo')
    
@endsection

@section('javascript')

<script>

    function newCondo() {
        $('#dlgCondo').modal('show');
    }


</script>
    
@endsection