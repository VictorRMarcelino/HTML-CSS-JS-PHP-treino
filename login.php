<?php
function executaLogin(){
    require_once ("core/Query.php");

    $oQuery = new Query();

    $usuario = $_POST["usuario"];
    $senha = $_POST["password"];

    $sql = "select * from public.usuario where nome = '$usuario' AND senha = '$senha'";

    $sql_query = $oQuery->executaQuery($sql);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
        require_once("PaginaInicial.html");
    } else {
        echo 'Parametros invalidos!';
    }
}
if(isset($_POST["acao"])){
    $acao = $_POST["acao"];
    if($acao === "EXECUTA_LOGIN"){
        executaLogin();
    }
} else {
    echo 'Parametros invalidos!';
}
?>