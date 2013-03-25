<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Slideshow</title><!-- -->

<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery.cycle.lite.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#myslides').cycle({
		fit: 1, pause: 1, timeout: 4000
	});
});
</script>
<link rel="stylesheet" href="styles/dynamicslides.css" type="text/css" media="screen" />
</head>
<body>

Download code: <a href="./slideshow.zip"> slideshow.zip </a>
<br><br>
To add your own images just replace the content of \images\slideshow with your own images.
<br><br>
To configure the slideshow options such as transition speed, pause on hover, etc.,<br>
Add or remove options from the highlighted section of index.php:<br><br>
<img src="./cycle-properties.jpg"><br><br>
See here for a complete listing of cycle options:<br>
<a href="http://jquery.malsup.com/cycle/options.html">http://jquery.malsup.com/cycle/options.html</a>
<br><br>
<?php
$directory = 'images/slideshow'; 	
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

<br /><br />
<a href="../multiple-slideshows/index.php">Multiple Slideshows</a>
<br /><br />

</body>
</html>