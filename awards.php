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
	</head>
	<body>
		<div class="page">
			<div class="header">
            	<h1>Awards and Achievements</h1>
			  <ul>
              
		    <?php include 'links.php'; ?>
				</ul>
			  <h3>&nbsp;</h3>
			</div>
			<div class="body">
				<div id="featured">
				 <?php
					$PAGE = 1;
					if (isset($_REQUEST['page']))
					{
					  // param was set in the query string
					   if(empty($_REQUEST['page']))
					   {
						 // query string had param set to nothing ie ?param=&param2=something
					   }
					   else
					   {
							$PAGE =   $_GET['page'];
					   }
					}
					//echo $PAGE;
					# LOAD XML FILE
					$XML = new DOMDocument();
					$XML->load('awards.xml');
					
					# START XSLT
					$xslt = new XSLTProcessor();
					$XSL = new DOMDocument();
					$xslt->setParameter('', 'page', $PAGE);
					$XSL->load('xsl/project.xsl');
					$xslt->importStylesheet( $XSL );
					print $xslt->transformToXML( $XML );
				?>
					
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