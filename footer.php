<footer>
	<div id="foot_content"><a href="#topp" class="scrollup"></a> 
	
	<a href="http://www.instagram.com/skyyskybone/">instagram</a> | <a href="https://www.twitter.com/Skyyskybone">twitter</a> 
</div><!--content-->
</footer>
</div><!--container-->

<script>
		var nav = responsiveNav(".nav-collapse");
	</script>

  <script src="<?php echo $theme_path;?>/js/vpc.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery('.lead').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
      offset: 100    
     });   
});      

jQuery(document).ready(function() {
  jQuery('.lefty').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
      offset: 100    
     });   
});     

jQuery(document).ready(function() {
  jQuery('.righty').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight', // Class to add to the elements when they are visible
      offset: 100    
     });   
});       
</script>

<script>
  $(document).ready(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.scrollup').fadeIn();
          } else {
              $('.scrollup').fadeOut();
          }
      });
      $('.scrollup').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });
      var el = $(".example"),
    bgWidth = 35,
    bgHeight = 35;
  });
</script>
</body>
<?php wp_footer(); ?>
</html>