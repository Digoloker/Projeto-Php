<html>
  <head>
     <meta http-equiv="Content-Language" content="pt-br">
     <title>Formulario</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="navbar.css" rel="stylesheet">
     <link href="css/navbar_sticky-footer-navbar.css" rel="stylesheet">
     <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="inicio.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="site.php">Compras <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </nav>


      <div class="container">
      <div class="py-5 text-center">
        </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Primeiro produto</h6>
                <small class="text-muted">Descrição breve</small>
              </div>
              <span class="text-muted">R$ 30</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo produto</h6>
                <small class="text-muted">Descrição Breve</small>
              </div>
              <span class="text-muted">R$ 16</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Terceiro produto</h6>
                <small class="text-muted">Descrição Breve</small>
              </div>
              <span class="text-muted">R$ 10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Codigo Promocional</h6>
                <small>Exemplo</small>
              </div>
              <span class="text-success">-R$ 10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$ 46</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Codigo Promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Resgatar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Cobrança</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="PrimeiroNome">Primeiro Nome</label>
                <input type="text" class="form-control" id="PrimeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É preciso um nome válido .
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="ultimoNome">Ultimo Nome</label>
                <input type="text" class="form-control" id="ultimoNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  O ultimo nome deve ser válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="nomeDeUsuario">Nome De Usuário</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" class="form-control" id="nomeDeUsuario" placeholder="Nome de Usuario" required>
                <div class="invalid-feedback" style="width: 100%;">
                  É preciso um Nome de Usuario.
                </div>
              </div>
            </div>

            
            <div class="mb-3">
              <label for="email">Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="for-alliance" required>
                <div class="invalid-feedback" style="width: 100%;">
                Por favor coloque um email válido para atualizações futuras.
                </div>
              </div>
            </div>

            
            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder=" Av.Fotografia com raça negra" required>
              <div class="invalid-feedback">
                Por favor Coloque um endereco de cobranca valida.
              </div>
            </div>

            <div class="mb-3">
              <label for="Complemento">Complemento <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="Complemento" placeholder="Apartamento ou Casa">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="pais">País</label>
                <select class="custom-select d-block w-100" id="Pais" required>
                  <option value="">escolha...</option>
                  <option>Brasil</option>
                  <option>Portugal</option>
                  <option>Outro</option>
                </select>
                <div class="invalid-feedback">
                  Por favor Selecione um País válido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="estado">Estado</label>
                <select class="custom-select d-block w-100" id="estado" required>
                  <option value="">escolha...</option>
                  <option> Paraná </option>
                  <option> Rio Grande do sul </option>
                  <option> Santa Catarina </option>
                  <option> Outro </option>
                </select>
                <div class="invalid-feedback">
                 Por favor, Selecione um Estado Valido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="Cep">Cep</label>
                <input type="text" class="form-control" id="Cep" placeholder="" required>
                <div class="invalid-feedback">
                  Insira um Cep válido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
              <label class="custom-control-label" for="mesmo-endereco"> O endereço de envio e o mesmo que o meu endereço de Cobrança</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="salvar-informacao">
              <label class="custom-control-label" for="salvar-informacao"> Guarde esta informação para a próxima compra</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="metodoPagamento" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credito">Cartão de Crédito </label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debito" name="metodoPagamento" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debito">Cartão de Débito </label>
              </div>
            <!-- <div class="custom-control custom-radio">
                <input id="paypal" name="metodoPagamento" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
              <div id="paypal-button"></div>  -->

<!--<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },
    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button'); 

</script> -->
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cartao-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cartao-nome" placeholder="" required>
                <small class="text-muted">Nome completo conforme exibido no cartão</small>
                <div class="invalid-feedback">
                   É requerido o nome do cartão.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cartao-nome">Numero do cartão</label>
                <input type="text" class="form-control" id="cartao-nome" placeholder="" required>
                <div class="invalid-feedback">
                  Um numero de cartão é requerido.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="Cartao-vencimento">Vencimento</label>
                <input type="text" class="form-control" id="Cartao-vencimento" placeholder="" required>
                <div class="invalid-feedback">
                  Data de vencimento requerida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cartao-seguranca">CDS</label>
                <input type="text" class="form-control" id="cartao-seguranca" placeholder="" required>
                <div class="invalid-feedback">
                  Codigo de segurança requerido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar com a verificação</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2018 For Alliance </p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
     </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          
          var forms = document.getElementsByClassName('needs-validation');

     
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
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>        
    <script src="js/bootstrap.min.js"></script>
    <script src="http://api.html5media.info/1.1.8/html5media.min.js"></script>
    
  </body>
</html>
