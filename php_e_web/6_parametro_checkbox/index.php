<?php 

if(isset($_POST['ingredientes'])){
  $ingredientes = $_POST['ingredientes'];

  print_r($ingredientes);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CheckBox</title>
</head>

<body>
  <form action="index.php" method="post">
    <div>
      <input type="checkbox" name="ingredientes[]" value="tomate"> tomate
    </div>

    <div>
      <input type="checkbox" name="ingredientes[]" value="melao"> melao
    </div>

    <div>
      <input type="checkbox" name="ingredientes[]" value="laranja"> laranja
    </div>

    <div>
      <input type="checkbox" name="ingredientes[]" value="mucuruja"> mucuruja
    </div>

    <input type="submit" value="Enviar">
  </form>
</body>

</html>