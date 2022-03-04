<?php
error_reporting(0);
    $db = mysql_connect("localhost", "root", "");
if(!$db ){
    echo "<h1>Erro de conexão</h1>";
}else{
    echo "<h1>Conectado</h1>";
}

mysql_select_db("sistema_5s", $db);
    $id1 = $_POST['id'];
    $descricao1 = $_POST['descricao'];

    $inserir = mysql_query("INSERT INTO cod_ocup (id, descricao)
                            VALUES ('$id1', '$descricao1')")
                            or die(mysql_error);
?>