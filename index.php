<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $data = $_GET;

    if (empty($data['name']) || empty($data['mail']) || empty($data['age'])) {

      echo "Errore inserire i dati";

    }elseif (strlen($data['name']) <= 2) {

      echo "Errore nome troppo corto";

    }elseif (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false) {

      echo "Errore indirizzo email non valido";

    }elseif (!is_numeric($data['age'])) {

      echo "Errore età non corretta";

    }else {
      
      echo "Accesso riuscito";
    }
    
  ?>
</body>
</html>
    


