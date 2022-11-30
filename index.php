<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <style>
    input{
      width: 200px;
      height: 20px;
      margin: 10px 0;
    }
  </style>

</head>
<body>
  <form action="./pagina-di-atterraggio.php" method="POST">
  <textarea name="paragraph" cols="40" rows="5" placeholder="Inserisci un paragrafo"></textarea>
  <br>
  <input type="text" name="badword" placeholder="Inserisci la parola da censurare">
  <br>
  <button type="submit">Invia</button>
  </form>
  
  
</body>
</html>