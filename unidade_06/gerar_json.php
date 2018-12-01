<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 01/12/18
 * Time: 19:21
 */

$conecta = mysqli_connect("localhost","root","root","andes");

$selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
$produtos = mysqli_query($conecta,$selecao);

$retorno = array();
while($linha = mysqli_fetch_object($produtos)){
    $retorno[] = $linha;
}

echo json_encode($retorno);

    mysqli_close($conecta);

?>