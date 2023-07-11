<?php 

  $usuario = [

    'nome'=> 'Diego',
    'idade'=> 29,
    'profissao'=> 'Programador'
  ];

  if($usuario){
    
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
    
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preenchimento Formulario</title>
</head>

<body>

  <form action="" method="post">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome?>">
    </div>

    <div>
      <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade?>">
    </div>

    <div>
      <input type="text" name="profissao" placeholder="Digite sua profissaoo" value="<?= $profissao?>">
    </div>

    <input type="submit" value="Enviar">
  </form>
</body>

</html>