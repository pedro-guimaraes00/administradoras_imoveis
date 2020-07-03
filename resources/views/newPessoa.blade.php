<div class="modal" tabindex="-1" role="dialog" id="dlgPessoa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="needs-validation" action="/clientes" method="POST" novalidate>
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Novo Cliente</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="cpfPessoa" id="cpfPessoa"
                        placeholder="CPF" required>
                        <div class="invalid-feedback">
                            O campo é obrigatório.
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomePessoa" id="nomePessoa"
                        placeholder="Nome" required>
                        <div class="invalid-feedback">
                            O campo é obrigatório.
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telPessoa" id="telPessoa"
                        placeholder="Telefone" required>
                        <div class="invalid-feedback">
                            O campo é obrigatório.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  
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