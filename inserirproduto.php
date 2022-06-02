<?php

function executaInclusao() {

    require_once ("core/Query.php");
    $oQuery = new Query();

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];

    $sql_insert = "INSERT INTO public.usuario (nome, senha, email, sexo)
        VALUES('$usuario', '$senha', '$email', '$sexo');";

    $oQuery->executaQuery($sql_insert);

    $sql_create = "CREATE TABLE public.$usuario (
        amigos varchar(100) NOT NULL,
        publicacoesPessoais varchar(275) NOT NULL
        );";

    $oQuery->executaQuery($sql_create);

    require_once("log.html");
    
}
if(isset($_POST["acao"])){
    $acao = $_POST["acao"];
    if($acao === "EXECUTA_INCLUSAO"){
        executaInclusao();
    }
} else {
    echo 'Parametros invalidos!';
}









