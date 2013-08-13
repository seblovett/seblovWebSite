<?php
	function footer($relpath='')
	{
		echo '<div class="footer">';
		echo '<ul>';
			echo '<li><a href="'.$relpath.'index.php">Home</a></li>';
			//echo '<li><a href="'.$relpath.'about.html">About</a></li>';
			echo '<li><a href="'.$relpath.'projects.php">Projects</a></li>';
			echo '<li><a href="'.$relpath.'misc.php">Portfolio</a></li>';
		echo '</ul>';
		echo '<p>&nbsp;          	</p>';
		echo '<div class="connect">';
			echo '<a href="http://www.facebook.com/hslovett" id="facebook">facebook</a>';
		echo '</div>';
		echo '</div>';
	}
?>