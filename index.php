</head>
<body>
  <h1><?php blogInfo('name');?></h1>
  <p>Students</p>
  <ul>
  <?php
  //! wordpress uses while loops;
  $students = array("chris", "greg", "rosie", "cori", "copper");
  $count = 0;
  while($count < count($students)) {
    echo "<li> My name is $students[$count] </li>";
    $count++;
  }
  ?>
  </ul>
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h2><?php the_title(); ?></h2>
    <?php }
  ?>
</body>
</html>