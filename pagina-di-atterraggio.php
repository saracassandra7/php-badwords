<?php
$paragrafo = $_POST['paragraph'];
$parola = $_POST['badword'];

$paragrafo_censurato = str_replace($parola,'***',$paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>
  <h3>Il tuo paragrafo, che è lungo <?php echo strlen($paragrafo) ?> caratteri </h3>
  <p><?php echo $paragrafo ?></p>

  <h3>Il tuo paragrafo censurato, che è lungo <?php echo strlen($paragrafo_censurato) ?> caratteri</h3>
  <p><?php echo $paragrafo_censurato ?></p>
  
</body>
</html>