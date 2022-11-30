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

  <style>
    body{
      font-family: Arial;
      margin-left: 20px;
    }

    h3:nth-of-type(2){
      margin-top: 60px;
    }
    
    p{
      color: blue;
    }
  </style>
</head>
<body>
  <h3>Il tuo paragrafo </h3>
  <p><?php echo $paragrafo ?></p>
  <h5>Lunghezza paragrafo: <?php echo strlen($paragrafo) ?> caratteri</h5>


  <h3>Il tuo paragrafo censurato </h3>
  <p><?php echo $paragrafo_censurato ?></p>
  <h5>Lunghezza paragrafo: <?php echo strlen($paragrafo_censurato) ?> caratteri</h5>
</body>
</html>