<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>
<html>
    <head>
        <meta name="generator"
        content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Henry Sebastian Lovett</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!--[if IE 7]>
                        <link rel="stylesheet" href="css/ie7.css" type="text/css" />
                <![endif]-->
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL=&#39;<?php echo $page?>&#39;" />
    </head>
    <body>
        <div class="page">
            <div class="header">
                <h1 id="title">Henry Lovett</h1>
                <ul>
					
                    <?php include 'links.php'; 
						links();?>
                </ul>
            </div>
            <div class="body">
				
                <ul>
                    <li>
                        <div class="featured">
                            <img src="Images/Me.jpg" alt="Henry In Mexico" width="260px" height="260px" />
                        </div>
                        <div>
                            <h3 class="blog">Hello</h3>
                            <p class="blog">I am a fourth year Electronic Engineering student at the University of Southampton. I
                            began my interest in Electronics at GCSE level, building simple circuits and testing them. This
                            inspired me to take it to a higher level at University along with some hobbyist electronics along the
                            way. A large proportion of my interest is now in Embedded Systems, automation, robotics and
                            computers.<br/>
                            This website is a summary of me, my projects of both academic and hobbyist, my achievements and
                            maybe some other things. Feel free to browse the site and contact me if you have any queries. My
                            Curriculum Vitae is also availiable 
                            <a href="./Documents/HenryLovett_CV.pdf">here.</a></p>
                        </div>
                    </li>
                    
                        <h1>Recent News</h1>
                    
                    <li>
                        <div>
                            <h3 class="blog">Recent</h3>
                            <p class="blog">Some</p>
                        </div>
                    </li>
                </ul>
            </div><?php include 'footer.php'; footer();?>
        </div>
    </body>
</html>
