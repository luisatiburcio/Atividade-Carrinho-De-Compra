<?php

    if(!isset($_SESSION))
       session_start();

    if(isset($_SESSION['todos_produtos'])){
       $todos_produtos = $_SESSION['todos_produtos'];

   }       

   else{

    $todos_produtos = array(
        array("id"=>"p01", "descricao" => "Norton AntiVirus Plus","qt"=>10, "preco"=>49.00), //item 1
        array("id"=>"p02", "descricao" => "AVG Internet Security","qt"=>20, "preco"=>69.00), //item 2
        array("id"=>"p03", "descricao" => "Kaspersky","qt"=>20, "preco"=>59.90), //item 3
        array("id"=>"p04", "descricao" => "McAfee Total Protection","qt"=>50, "preco"=>59.00)//item 4
    );
    $_SESSION['todos_produtos'] = $todos_produtos;
}

?>