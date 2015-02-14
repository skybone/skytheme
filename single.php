<?php include 'header.php'; ?>

<body>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php include 'menu.php';?>

<div id="main3">
  
  <h2 class="cent"><?php wp_title();?></h2>

  <p><?php the_content();?></p>
  

  <?php endwhile; endif;?>

<?php include 'footer.php'; ?>