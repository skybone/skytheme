<?php include 'header.php'; ?>


<?php include 'menu.php';?>

	<div id="main1">
<h2 class="sec">About</h2>
  <p class="cont">  I am a full time student in the Interactive Media Design program at Algonquin College.
  </p>
  <p class="cont">
    I specialize in mobile web development with a focus on responsive and eyepleasing user experience design allowing full functionality across all devices. 
  </p>
</div><!--main1-->

<div id="main2">
  <h2 class="sec">Services</h2>
  <p class="pdent">
    
      HTML5 / CSS3<br>
      JavaScript / jQuery<br>
      PHP / mySQL<br>
      Wordpress / Blog software<br>
      Flash animation / ActionScript<br>
      Graphic design / Print media<br>
      Photography / Video<br>
      Motion Graphics
  
  </p>
</div><!--main2-->

<div id="main3">
  
  <h2 class="cent">Recent Projects</h2>

      <?php

        $project_count = 0;
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
            );
    
            $query = new WP_Query( $args );
            while($query->have_posts()) : $query->the_post();
            $date = get_the_date('l, F j, Y');
          
        if ($project_count == 0 || $project_count == 2 ) { ?>
        
        <div class="lefty">
            <div class="row-featurette">

              <div class="col-md-7">
                <h2 class="featurette-heading"><?php the_title();?> <span class="text-muted"><br><?php echo $date;?></span></h2>
                <?php the_excerpt();?>
              </div>
              <div class="col-md-5">
                <?php the_post_thumbnail('post-thumbnail', array( 'class' => "featurette-image img-responsive")); ?>
              </div>
            </div>
        </div>

      <hr class="featurette-divider">

      <?php } else { ?>

        <div class="righty">
            <div class="row-featurette">
                       
             <div class="col-md-5 pull-right">
                <?php the_post_thumbnail('post-thumbnail', array( 'class' => "featurette-image img-responsive")); ?>
              </div>
              <div class="col-md-7">
                <h2 class="featurette-heading"><?php the_title();?> <span class="text-muted"><br><?php echo $date;?></span></h2>
                <?php the_excerpt();?>
              </div>


            </div>
          </div>

      <hr class="featurette-divider">

  <?php  } ?>
  
  <?php $project_count++; endwhile; ?>

		<h2 class="cent2">Contact</h2>

	<p class="cont">
		Feel free to drop me a line sometime.</p>

</div><!--div3-->

<?php include 'footer.php'; ?>