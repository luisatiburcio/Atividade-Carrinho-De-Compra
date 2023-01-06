<?php
    include_once "dados.php";

    if(!isset($_SESSION))
        session_start();

   
    if(isset($_SESSION['carrinho'])){


        $qt_itens_qt_ok = 0;
        foreach($_SESSION['carrinho'] as $item){

            $qt_produtos = count($todos_produtos);

            $i = 0;

            while($i < $qt_produtos && $todos_produtos[$i]['id'] != $item['id'])
                 $i++;
            if($i < $qt_produtos){
                
                
                if($item['qt'] <= $todos_produtos[$i]['qt']){
                     $todos_produtos[$i]['qt'] -= $item['qt'];
                     $qt_itens_qt_ok++;
                } 
                if($qt_itens_qt_ok == count($_SESSION['carrinho'])){

                    $_SESSION['todos_produtos'] =  $todos_produtos;

                    unset($_SESSION['carrinho']);

                    $_SESSION['compra_efetuada'] = true;
                }
      
            }

        }
    }
    header("Location:mensagem.php");
?>