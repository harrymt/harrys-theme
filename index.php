<!DOCTYPE html>
<html>
<head>
  <title>Harry's Theme</title>
</head>
<body>
  <?php get_header(); ?>

  <h1>Hello Everyone</h1>
  <p>This is Harry's theme</p>

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      ?>
      <ul>
        <li><?php the_title(); ?></li>
      </ul>
      <?php
    } // end while
  } // end if
  ?>

  <?php get_footer(); ?>
</body>
</html>
