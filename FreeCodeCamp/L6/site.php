<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      //Basic calculator
      <form action="site.php" method="get">
        Color : <input type="text" name="color">
        PluralNoun : <input type="text" name="pluralNoun">
        Celebrity: <input type="text" name="celebrity">
        <br>
        <input type="submit">
      </form>
      <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
       ?>
  </body>
</html>
