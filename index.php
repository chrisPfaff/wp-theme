<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <h1>This is our theme</h1>
  <?php
    function myFirstFunction($str, $var) {
      echo $str . $var;
    }

    myFirstFunction('<p>Hi, my name is chris and my fav color is</p>', "<p> red </p>");
    myFirstFunction('<p>Hi, my name is chris and my fav color is</p>', "<p> grey</p>");
  ?>
</body>
</html>