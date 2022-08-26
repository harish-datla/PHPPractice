<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Strings
      $phrase = "Giraffe Academy";
      echo "$phrase <br>";
      echo strtoupper($phrase);
      echo "<br>";
      echo strtolower($phrase);
      echo "<br>";
      echo strlen($phrase) ;
      echo "<br>";
      echo $phrase[0] ;
      echo "<br>";
      echo "Mike"[0] ;
      echo "<br>";
      $phrase[0] = "B" ;
      echo "<br>";
      echo $phrase ;
      echo "<br>";
      echo str_replace("Biraffe","Panda", $phrase);
      echo "<br>";
      echo substr($phrase, 8, 5) ;
      echo "<br>";
     ?>
  </body>
</html>
