@extends('layout.app', ["current" => "corretoras"])

@section('body')

    <div class="card border">
        <div class="card-body">
        <h5 class="card-title">Editar Corretora</h5>
        <form class="needs-validation" action="/administradoras/{{$administradora->id}}" method="POST" novalidate>
                @csrf
                <div class="form-group">
                    <label for="nomeAdmin">Nome</label>
                    <input type="text" class="form-control" name="nomeAdmin" id="nomeAdmin"
                    value="{{$administradora->nome}}" required>
                    <div class="invalid-feedback">
                        O campo é obrigatório.
                    </div>
                </div>
                <div class="form-group">
                    <label for=cnpjAdmin">CNPJ</label>
                    <input type="text" class="form-control" name="cnpjAdmin" id="cnpjAdmin"
                    value="{{$administradora->cnpj}}" required>
                    <div class="invalid-feedback">
                        O campo é obrigatório.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>