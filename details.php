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
			  
			</div>
			<div class="body">
			<ul>			
                <?php
					$PROJECTID = 1;
					if (isset($_REQUEST['id']))
					{
					  // param was set in the query string
					   if(empty($_REQUEST['id']))
					   {
						 // query string had param set to nothing ie ?param=&param2=something
					   }
					   else
					   {
							$PROJECTID =   $_GET['id'];
					   }
					}
					//echo $PROJECTID;
					# LOAD XML FILE
					$XML = new DOMDocument();
					$XML->load('Projects.xml');
					
					# START XSLT
					$xslt = new XSLTProcessor();
					$XSL = new DOMDocument();
					$xslt->setParameter('', 'id', $PROJECTID);
					$XSL->load('xsl/details.xsl');
					$xslt->importStylesheet( $XSL );
					print $xslt->transformToXML( $XML );
				?>
                
        </ul>        
</div>

			<?php include 'footer.php'; footer();?>
		</div>
	</body>
</html>  