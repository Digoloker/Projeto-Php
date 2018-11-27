<?php

    require_once "funcoes.php";

    salvarCliente($_POST);

    $clientes = listarClientes();

    print_r($clientes);

?>
<html>
<head>
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar_sticky-footer-navbar.css" rel="stylesheet">

</head>
<body >

<?php
//include_once("header.php");
?>

<main role="main" class="container">

<h1>Cadastro de Cliente</h1>
<form action="cadastro.php" method="POST">
<input type="hidden" name="id"/>

<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" 
    id="nome" placeholder="Digite seu nome"
    required >
</div>
<div class="form-group">
    <label for="idade">Idade</label>
    <input type="number" name="idade" class="form-control" 
    id="idade" placeholder="Digite sua idade"
    onkeydown="return event.keyCode >= 48 && event.keyCode <= 57 
    ? true : false;">
</div>
<div class="form-group">
    <label for="dtNascimento">Data de nascimento</label>
    <input type="date" name="dtNascimento" class="form-control" 
    id="dtNascimento" placeholder="Digite a data de nascimento">
</div>
<input type="submit" value="Salvar" class="btn btn-primary" />
</form>

<table class="table">
    <tr>
        <th>ID</th>        
        <th>NOME</th>        
        <th>&nbsp;</th>    
        <th>&nbsp;</th>    
    </tr>
    <?php

    foreach ($clientes as $cliente) {
    
    ?>
    <tr>
        <td><?=$cliente['id']?></td>        
        <td><?=$cliente['nome']?></td>        
        <td><button>Carregar</button></td>     
        <td><button onclick="return confirm('Você está certo disso?');">Excluir</button></td>     
    </tr>
    <?php
    }
    ?>

</table>


</main>

<footer class="footer">
<div class="container">
    <span class="text-muted">Sistema abc!!</span>
</div>
</footer>
    
</body>
</html>