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

		<div id="ctact"></div><h2 class="cent2">Contact</h2>
	<p class="cont">
		Feel free to drop me a line sometime.
     <section id="contact" class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact Form</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" data-toggle="validator" name="contactform" method="post" action="mail.php">
                         
                            <div class="form-group">
                                <label for="InputName">Your Name</label>
                                <input type="text" class="form-control" id="InputName" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Email address</label>
                                <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="InputMessage">Message Here</label>
                                <textarea cols="20" rows="5" class="form-control" id="InputMessage" name="message" placeholder="Your Message"></textarea>
                            </div>
                                <input type="hidden" name="_submit_check" value="1" />
                                <button type="submit" value="submit" class="btn btn-blue large">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><?php echo do_shortcode( '[contact-form-7 id="21" title="skycontact"]' ); ?>
</p>
</div><!--div3-->

<?php include 'footer.php'; ?>