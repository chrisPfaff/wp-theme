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
  <h1><?php blogInfo('name');?></h1>
  <!-- <p>Students</p>
  <ul>
  <?php
  //! wordpress uses while loops;
  $students = array("chris", "greg", "rosie", "cori", "copper");
  $count = 0;
  while($count < count($students)) {
    echo "<li> My name is $students[$count] </li>";
    $count++;
  }
  ?> -->
  </ul>
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a> </h2>
      <?php the_content(); ?>
      <hr>
    <?php }
  ?>
</body>
</html>