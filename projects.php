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
            	<h1  id="title">Projects</h1>
			  <ul>
              
		    		<?php 
						include 'links.php'; 
						links();
					?>
				</ul>
			  <h3>&nbsp;</h3>
			</div>
			<div class="body">
			<ul>			
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
					$XML->load('Projects.xml');
					
					# START XSLT
					$xslt = new XSLTProcessor();
					$XSL = new DOMDocument();
					$xslt->setParameter('', 'page', $PAGE);
					$XSL->load('xsl/project.xsl');
					$xslt->importStylesheet( $XSL );
					print $xslt->transformToXML( $XML );
				?>
                
        </ul>        
</div>

			<?php include 'footer.php'; footer();?>
		</div>
	</body>
</html>  