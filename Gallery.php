<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->

<html>
	<head>
		<meta name="generator"
        content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>3D Prints</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!--[if IE 7]>
                        <link rel="stylesheet" href="css/ie7.css" type="text/css" />
                <![endif]-->

	</head>
	<body>
		<div class="page">
			<div class="header">
				<h1 id="title">3D Prints</h1>
				<ul>

					<?php include 'links.php'; 
						links();?>
				</ul>
			</div>
			<div class="body">
				<ul class="paging">
				<?php
				 	$IMAGE = 0;
					if (isset($_REQUEST['im']))
					{
					  // param was set in the query string
					   if(empty($_REQUEST['im']))
					   {
						 // query string had param set to nothing ie ?param=&param2=something
					   }
					   else
					   {
							$IMAGE =   $_GET['im'];
					   }
					}
					$BASEDIR = 'Images/3DPrints/';	
					$a= is_dir($BASEDIR);
					if($a != false)
					{
						if($IMAGE > 0)
						{
							$PREV = $IMAGE - 1;
							echo '<li><a href="Gallery.php?im='.$PREV.'">Previous</a></li>';
						}
						$IMAGES = glob('Images/3DPrints/*.{jpg,gif,png}', GLOB_BRACE);
						
						$NUMIMAGES=sizeof($IMAGES);
						
						if(0 < $NUMIMAGES)
						{ 
							for ($i = 0; $i < $NUMIMAGES; $i++) {
								echo '<li><a href="?im='.$i.'">'.$i.'</a></li>';
							}
						}
						if($IMAGE < $NUMIMAGES - 1)
						{
							$PREV = $IMAGE + 1;
							echo '<li><a href="Gallery.php?im='.$PREV.'">Next</a></li>';
						}
					}
				?>
				</ul>
				<ul>
					<li>

						<div>
							<h3 class="blog">Gallery</h3>
							<p class="blog">
						
							<?php 
								$IMAGE = 0;
								if (isset($_REQUEST['im']))
								{
								  // param was set in the query string
								   if(empty($_REQUEST['im']))
								   {
									 // query string had param set to nothing ie ?param=&param2=something
								   }
								   else
								   {
										$IMAGE =   $_GET['im'];
								   }
								}
								if (0 == $IMAGE)
								{
									echo 'This is a simple gallery to display things I have printed with my 3D Printer. Enjoy!<br/><br/>';
								}
								$BASEDIR = 'Images/3DPrints/';	
								$a= is_dir($BASEDIR);
								if($a != false)
								{
									$IMAGES = glob('Images/3DPrints/*.{jpg,gif,png}', GLOB_BRACE);
									
									$NUMIMAGES=sizeof($IMAGES);
									
									if($IMAGE < $NUMIMAGES)
									{ 

										//echo '</ul>';
										echo '<br/><br/>';
										$filename = preg_replace('"\.(jpg|png|gif)$"', '.info', $IMAGES[$IMAGE]);
										include $filename;
										echo '<img src="'.$IMAGES[$IMAGE].'" width="400"/>';
									}
									else
									{
										echo 'Error - Image Not found! If this persists, please contact me with details on the issue.<br/>';
										echo '<a href="Gallery.php">Please return here</a>';
										
									}
								}

							?>
							</p>
						</div>
					</li>


				</ul>
			</div>

			<?php include 'footer.php'; footer();?>
		</div>
	</body>
</html>