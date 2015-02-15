<?php include 'header.php'; ?>


<?php include 'menu.php';?>

	<div id="main1">
<h2 class="sec">About</h2>
	<p class="cont">	I am a full time student in the Interactive Media Design program at Algonquin College.
	</p>
	<p class="cont">
		I specialize in mobile web development with focus on responsive and eyepleasing user interface design allowing full functionality across all device sizes. 
	</p>
</div><!--main1-->

<div id="main2">
	<h2 class="sec">Services</h2>
	<p class="pdent">
		
			HTML5 / CSS3<br>
			JavaScript<br>
			PHP / mySQL<br>
			Server hosting solutions<br>
			Wordpress / Blog software<br>
			Flash animation / ActionScript<br>
			Graphic design / Print media<br>
			Photography / Video
	
	</p>
</div><!--main2-->

<div id="main3">
  
  <h2 class="cent">Recent Projects</h2>

      <?php
          $args = array(
              'post_type' => 'project',
              'posts_per_page' => 3,
          );
  
          $query = new WP_Query( $args );
          while($query->have_posts()) : $query->the_post();
          $project_count = 0;
          $project_count++;
      ?>
  <div class="lefty">
      <div class="row-featurette">

        <div class="col-md-7">
          <h2 class="featurette-heading"><?php the_title();?> <span class="text-muted"><br>December, 2014</span></h2>
          <p class="lead"><?php the_excerpt();?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?php echo $theme_path; ?>/images/port_img/final_desk.png" alt="Final - Travel Site">
        </div>
      </div>
  </div>

      <hr class="featurette-divider">

<?php endwhile; ?>

		<h2 class="cent2">Contact</h2>

	<p class="cont">
		Feel free to drop me a line sometime.</p>

</div><!--div3-->

<?php include 'footer.php'; ?>