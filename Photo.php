<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Henry Sebastian Lovett</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery.cycle.lite.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#myslides').cycle({
		fit: 1, pause: 1, timeout: 4000
	});
});
</script>


		</head>
	<body>
		<div class="page">
			<div class="header">
            	<h1>Henry Lovett</h1>
			  <ul>
              
		    <li><a href="index.html">Home</a></li>
					<li><a href="awards.html">Awards and Achievements</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li class="selected"><a href="misc.html">Other Things</a></li>
				</ul>
			  <h3>&nbsp;</h3>
			</div>
			<div class="body">
				<div id="featured">
					<h3>Some Photos</h3>
<?php
$directory = 'Images/slideshow'; 	
try {    	
	// Styling for images	
	echo '<div id="myslides">';	
	foreach ( new DirectoryIterator($directory) as $item ) {			
		if ($item->isFile()) {
			$path = $directory . '/' . $item;	
			echo '<img src="' . $path . '"/>';	
		}
	}	
	echo '</div>';
}	
catch(Exception $e) {
	echo 'No images found for this slideshow.<br />';	
}
?>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p><p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>Here are some photos of mine</p>
				</div>
</div>
			<div class="footer">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="services.html">Gallery</a></li>
				</ul>
				<p>&nbsp;          	</p>
				<div class="connect">
					<a href="http://www.facebook.com/hslovett" id="facebook">facebook</a>
				</div>
			</div>
		</div>
	</body>
</html>  