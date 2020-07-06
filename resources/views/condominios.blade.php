@extends('layout.app', ["current" => "condominios"])

@section('body')

<div class="card border">
    <div class="card-body">

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form class="form-inline my-2 my-lg-0" action="/condominios/search" method="GET">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Insira o nome">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-sm">
                    <button class="btn btn-success btn-lg" role="button" onclick="newCondo()">
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
    <div class="card-footer">
        {{ $condominios->links() }}
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