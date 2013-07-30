
<?php 
	function links($relpath = '')
	{
		echo '<li><a href="'.$relpath.'index.php">Home</a></li>';
		echo '<li><a href="'.$relpath.'awards.php">Awards and Achievements</a></li>';
		echo '<li><a href="'.$relpath.'projects.php">Projects</a></li>';
		echo '<li><a href="'.$relpath.'misc.php">Other Things</a></li>';
	}
?>
