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

				<ul>
					<li>

						<div>
							<h3 class="blog">Gallery</h3>
							<p class="blog">This is a simple gallery to display things I have printed with my 3D Printer. Enjoy!</p>

							<?php 
								$IMAGE = 1;
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
									$IMAGES = scandir($BASEDIR);
									unset($IMAGES[0]);//get rid of the . and ..
									unset($IMAGES[1]);
									$NUMIMAGES=sizeof($IMAGES);
									
									if($IMAGE <= $NUMIMAGES)
									{ 
										print_r($IMAGES);
										echo '<img src="Images/3DPrints/'.$IMAGES[$IMAGE + 1].'"/>';
									}
									else
									{
										echo 'Image Not found!';
									}
								}

							?>
						</div>
					</li>


				</ul>
			</div>

			<?php include 'footer.php'; footer();?>
		</div>
	</body>
</html>