<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP</title>
  </head>
  <body>
    <?php 
    $_POST["name"] . " " .$_POST["surname"] . $_POST["comment"];
    var_dump($_POST);
    ?>
    <br>
    <?php 
    $paragrafo = $_POST["comment"];"<br>";
      echo  $paragrafo;"<br>";
      echo "Lunghezza paragrafo originale: " . strlen($paragrafo) . "<br>";
    ?>
    <?php
    $string = $_POST['comment'];
    $patterns = array();
    $patterns[0] = '/dolor/';
    $patterns[1] = '/tempora/';
    $patterns[2] = '/elit/';
    $replacements = array();
    $replacements[2] = '***';
    $replacements[1] = '***';
    $replacements[0] = '***';
    echo preg_replace($patterns, $replacements, $string);
    ?> 

  </body>
</html>
