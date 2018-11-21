<?php
session_start();
if (empty($_SESSION['clientes'])) {
    $_SESSION['clientes'] = [];
}

if (empty($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

function salvarCliente($cliente)  {        
    if (!empty($cliente)) {
        $cont = count($_SESSION['clientes']);
        $cliente['id'] = $cont + 1;//$cont++;

        array_push($_SESSION['clientes'],$cliente);
    }
}

function listarClientes() {
    return $_SESSION['clientes'];
}


?>