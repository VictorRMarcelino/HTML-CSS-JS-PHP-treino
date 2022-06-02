<?php
function executaLogin(){
    require_once ("core/Query.php");

    $oQuery = new Query();

    $usuario = $_POST["usuario"];
    $senha = $_POST["password"];

    $sql = "select * from public.usuario where usuario = $usuario" AND senha = $senha;

    $oQuery->executaQuery($sql_senha);

    $quantidade = $oQuery->num_rows;


    if($quantidade == 1){
        require_once("PaginaInicial.html");
    } else {
        echo 'Parametros invalidos!';
    }
}
?>