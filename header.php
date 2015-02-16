<?php 

	$theme_path		= get_stylesheet_directory_uri();

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="skylyy.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>SkyLyy | UX Design Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
	
	<link rel='stylesheet' href="<?php echo $theme_path;?>/styles/sky_style.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo $theme_path;?>/styles/animate.css">
	
	<script src="<?php echo $theme_path;?>/js/jquery.min.js"></script>
	<script src="<?php echo $theme_path;?>/js/responsive-nav.js"></script>

</head>

<?php wp_head(); ?>
<body>

<div id="container">
    <header>
      <h1>Welcome, my name is <b>Skyler</b>. </h1>
  </header>