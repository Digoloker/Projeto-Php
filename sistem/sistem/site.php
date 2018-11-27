<html>
  <head>
     <meta http-equiv="Content-Language" content="pt-br">  
     <title>Formulario</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <link href="css/navbar_sticky-footer-navbar.css" rel="stylesheet">
  </head>
    <body>
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
              <span class="text-muted">R$30</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo produto</h6>
                <small class="text-muted">Descrição Breve</small>
              </div>
              <span class="text-muted">R$16</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Terceiro produto</h6>
                <small class="text-muted">Descricao Breve</small>
              </div>
              <span class="text-muted">R$10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Codigo Promocional</h6>
                <small>Exemplo</small>
              </div>
              <span class="text-success">-R$10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$46</strong>
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
          <h4 class="mb-3">Endereco de Cobranca</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="PrimeiroNome">Primeiro Nome</label>
                <input type="text" class="form-control" id="PrimeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  E preciso um nome valido .
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="ultimoNome">Ultimo Nome</label>
                <input type="text" class="form-control" id="ultimoNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  O ultimo nome deve Ser Valido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="nomeDeUsuario">Nome De Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="nomeDeUsuario" placeholder="Nome de Usuario" required>
                <div class="invalid-feedback" style="width: 100%;">
                  E preciso um Nome de Usuario.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="seu@email.com">
              <div class="invalid-feedback">
                Por favor coloque um email valido para atualizações futuras de suas compras.
               </div>
            </div>

            <div class="mb-3">
              <label for="endereco">Endereco</label>
              <input type="text" class="form-control" id="address" placeholder="Av. Fotografia com raca negra" required>
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
                <label for="pais">Pais</label>
                <select class="custom-select d-block w-100" id="Pais" required>
                  <option value="">escolha...</option>
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Por favor Selecione um Pais valido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="estado">Estado</label>
                <select class="custom-select d-block w-100" id="estado" required>
                  <option value="">escolha...</option>
                  <option>Curitiba</option>
                </select>
                <div class="invalid-feedback">
                 Por favor, Selecione um Estado Valido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="Cep">Cep</label>
                <input type="text" class="form-control" id="Cep" placeholder="" required>
                <div class="invalid-feedback">
                  Insira um Cep valido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
              <label class="custom-control-label" for="mesmo-endereco">O endereço de envio e o mesmo que o meu endereço de Cobranca</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="salvar-informacao">
              <label class="custom-control-label" for="salvar-informacao">Guarde esta informação para a próxima compra</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="metodoPagamento" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Cartao de Debito </label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debito" name="metodoPagamento" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Cartao de Debito </label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="papagamentoMetodo" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cartao-nome">Nome no cartao</label>
                <input type="text" class="form-control" id="cartao-nome" placeholder="" required>
                <small class="text-muted">Nome completo conforme exibido no cartão</small>
                <div class="invalid-feedback">
                   E requerido o nome do cartao.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cartao-nome">Numero do cartao do cartao</label>
                <input type="text" class="form-control" id="cartao-nome" placeholder="" required>
                <div class="invalid-feedback">
                  Um numero de cartao e requerido.
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
                  Codigo de seguranca requerido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar com a verificacao</button>
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

    </body>
</html>