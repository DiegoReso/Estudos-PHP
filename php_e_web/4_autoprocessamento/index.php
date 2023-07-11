<?php 

$method =  $_SERVER['REQUEST_METHOD'];
$nome = $_POST['nome'];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AutoProcessamento</title>
</head>

<body>

  <?php if($method == 'GET'):?>

  <form action="index.php" method="POST">

    <input type="text" name="nome" placeholder="Digite seu nome">
    <div>
      <input type="submit" value="Enviar">
    </div>

  </form>

  <?php else:?>
  <h1>Ola meu amigue <?= $nome?><h1>
      <?php endif;?>
</body>

</html>