<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      //HTML forms
      <form action="site.php" method="get">
          Name: <input type="text" name = "name">
          <br>
          Age : <input type="number" name = "age">
          <br>
          <input type="submit">
      </form>
      Your name is <?php echo $_GET["name"]?>
      <br>
      Your age is  <?php echo $_GET["age"]?>
  </body>
</html>
