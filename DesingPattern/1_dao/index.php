<?php 
include_once("db.php");

include_once("dao/CarDAO.php");


$carDao = new CarDAO($conn);

$cars = $carDao->findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form DAO</title>
</head>

<body>
  <h1>Insira um carro</h1>
  <form action="process.php" method="post">
    <div>
      <label for="brand">Marca do carro:</label>
      <input type="text" name="brand" placeholder="Insira a Marca">
    </div>
    <div>
      <label for="km">KM do carro:</label>
      <input type="text" name="km" placeholder="Insira a Kilometragem">
    </div>
    <div>
      <label for="color">Cor do carro:</label>
      <input type="text" name="color" placeholder="Insira a Marca">
    </div>
    <input type="submit" value="Salvar">
  </form>

  <ul>
    <?php foreach($cars as $car):?>
    <li><?= $car->getBrand()?> - <?= $car->getKm()?> - <?= $car->getColor()?></li>
    <?php endforeach;?>
  </ul>

</body>

</html>