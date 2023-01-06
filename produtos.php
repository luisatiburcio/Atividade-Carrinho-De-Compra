<?php
  include_once "dados.php";

  if(!isset($_SESSION))
    session_start();

  $qt_carrinho = 0;


  if(isset($_SESSION['carrinho'])){
    foreach($_SESSION['carrinho'] as $item)
      $qt_carrinho += $item['qt'];

  }
  
  if($qt_carrinho == 1)
    $qt_carrinho .= " item no carrinho.";
  else 
    $qt_carrinho .= " itens no carrinho.";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Lojinha ds Luisa <3</title>
</head>

<body>
  <div class="jumbotron bg-transparent">
    <div class="container">

      <h1 class="display-4 text-secondary text-center">Lista de Produtos</h1>
    </div>
  </div>
  <div class="container">

    <table class="table table-hover">
      <thead class="thead-light">
        <tr class="text-center">
          <th scope="col">Código</th>
          <th scope="col">Descrição</th>
          <th scope="col">Estoque</th>
          <th scope="col">Preço</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($todos_produtos as $item){ 
          $link = "adicionar.php?id=".$item['id'];
          ?>
        <tr>
          <td><?php echo $item['id'];?></th>
          <td><?php echo $item['descricao'];?></td>
          <td><?php echo $item['qt'];?></td>
          <td><?php echo "R$ ". number_format($item['preco'],"2",",",""); ?></td>
          <td> <a class="btn btn-outline-primary" href=<?php echo $link;?> role="button">Adicionar ao carrinho</a> </td>
        </tr>
        <?php }  ?>
      </tbody>
    </table>
    <div class="container">
        <a class="btn btn-primary" href="carrinho.php" role="button">Ir para Carrinho</a>
        <p><?=$qt_carrinho?></p>                
      </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>