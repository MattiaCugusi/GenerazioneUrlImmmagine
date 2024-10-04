<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera Url Immagine</title>
</head>
<body>
    <?php
      
      function generaUrlImmagine($larg, $alt){

       $url = "https://picsum.photos/" . $larg . "/" . $alt;


       return $url;

      }

      $foto = generaUrlImmagine(700, 500);

      echo "<img src= '" . $foto . "'></img>";

    ?>
    
</body>
</html>