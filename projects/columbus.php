<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Henry Sebastian Lovett</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->
        
	</head>
	<body>
		<div class="page">
			<div class="header">
            
				<h1 id="title">Part III Project</h1>
				
			  	<ul>
					
		    		<?php include 'links.php'; ?>
						
				</ul>
			  <h3>&nbsp;</h3>
			</div>
            
            
			<div class="body"><a href="../index.php">home</a>
			<ul>
			<li>
				<div class="featured">
					<img src="../Images/columbus.jpg" alt="" width="260px" height="260px"/>
				</div>
			
				<div>
					<h3 class="blog">The Columbus</h3>
					<p class="blog">
					The Part III project is an individual project undertaken by <a href="http://ecs.soton.ac.uk">ECS</a> Students in their third year. It lasts about 7 months and the choice of project is down to the student and supervisor to decide.
					<br/><br/>
					For my project, I undertook an ambitious task to design, build and test a Stereoscopic Mapping robot. The idea was to build up a 2D floor plan of an unknown area by using two cameras to measure distance. <br/><br/>
					Though the end application was never acheived, all the basic functions were implemented. The image processing side of the project were all prototyped in Matlab. The cameras were deemed unsuitable for accurate depth measurement, but the system could easily perceive depth from the setup. <br/><br/>
					For my hard work over 7 months, I acheived a mark of 76% for my project. 
					
					<br/><br/>
					
                    </p>
				</div>
				
				<div class="featured">
					<img src="../Images/PCB_Top.jpg" alt="" width="260px" />
				</div>
				<div>
					<h3 class="blog">The Hardware</h3>
					<p class="blog">			
						The microcontroller used was a UC3C 32bit AVR. It controlled all aspects of the robot, including motor driving, data storage on to an SD card, image capturing, and also had 4MB of SDRAM on a DMA EBI interface (DMA - Direct Memory Access, EBI - External Bus Interface). The cameras were Omnivision OV7670's. The camera can deliver VGA format pictures. See <a href="ov7670.php">this project of mine</a> for more information on the camera.<br/><br/>
					The PCB was designed as a part of the project. It was a four layer board, with track sizes as small as 6mils. Only a few faults were found, none of which were fatal (only really footprint sizes and using incorrect interrupt pins on the MCU), and given that it was the first PCB I had designed, I ruled this a resounding success. It took an entire day to assemble by hand.<br/><br/>
					A four layer board was used for ease of design. The centre two layers were +3V3 and Ground Planes, meaning any device that needed power and ground did not need any tracks routing, only a via. <br/><br/>
					Creating this board was a new an interesting experience. Being my first PCB, it wasn't the easiest. I hope this won't be the last I design, but PCB manufacturing has been put well out of the hobbyist's reach. I hope to make a small PCB milling machine to create some at home. 
                    </p>
				</div>
				
				<div>
					<h3 class="blog">The Software</h3>
					<p class="blog">
						A large part of the software was for Image Processing. The main aspect looked at in the project was image matching in stereo pairs. This could then be used to determine the distance to an object in view. The Fourier Transform was also looked into in detail and a 2D FFT was implemented on the AVR. All image processing code was prototyped in Matlab. <br/><br/>
						The firmware on the AVR was a large portion of the project too. This controlled the camera, motors, SD card and RAM access. The Atmel Software framework provided drivers for the RAM and SD card. The images obtained from the camera were able to be written to the SD card as a bitmap image. Motor driving could be acheived to around 1cm accuracy. This system used an optosensor to detect movement of the wheels. 
					
					</p>
				</div>
				<div>
					<h3 class="blog">Conclusion</h3>
					<p class="blog">
						I learnt a lot from this project - from PCB design to not being too over ambitious. I felt a bit disapointed in myself not completing the task I set out to do, even though it was majorly ambitious. However, to the end of the project, I was offered a silver lining. The University was after projects to use an demonstrations. I was put forward for this opportunity and was given motivation to make my robot useful. The application decided on was to make my robot respond to movement. By subtracting sequential images, areas of movement can be seen. This is then translated to find the place of most movement and the robot will rotate towards the most movement. This was completed mid June 2013 and should be used in open days at Southampton University. <br/><br/>
						This final part, though nothing to do with my marks, gave me chance to finish what I started, of which otherwise I would never have done. My project was a tough experience, but something I can look back on with pride. <br/><br/>
					
					</p>
				</div>
			</li>
            </ul>
               
</div>
			<?php include 'footer.php'; ?>
			
		</div>
	</body>
</html>  