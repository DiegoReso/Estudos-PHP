<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>

<body>

  <form action="cadastro.php" method="POST">
    <div>
      <label for="marca">Marca</label>
    </div>
    <div>
      <input type="text" name="marca" placeholder="Digite a marca">
    </div>

    <div>
      <label for="preco">Preco</label>
    </div>
    <div>
      <input type="text" name="preco" placeholder="Digite o preco">
    </div>

    <div>
      <input type="checkbox" name="opcional[]" value="teto solar"> Teto Sola
    </div>

    <div>
      <input type="checkbox" name="opcional[]" value="insulflex"> Insulflex
    </div>

    <div>
      <input type="checkbox" name="opcional[]" value="blindado"> Blindado
    </div>

    <input type="submit" value="Enviar">

  </form>


</body>

</html>