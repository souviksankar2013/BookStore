<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-signup</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        
        <!-- for datepicker use these library file of js-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
        <?php
                   include('config.php'); 
             ?>
        1
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Logo $ header-->
			<div id="header">
				<div class="container">
			
						 <h1><a href="index.php" id="logo"><img src="images/logo.jpg" style="border-radius:40px;"> </a></h1>
		
				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
							
								<div class="row half">
									<section class="6u">
										<ul class="default">
											<li><a href="index.php">Home</a></li>
													
								<li><a href="login.php">Login</a></li>
								<li><a href="signup.php">Sign Up</a></li>
								<li><a href="gallary.php">Gallary</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
										</ul>
									</section>
									
								</div>
							</section>
							<section>
								<header class="major">
									<h2>Adds:--</h2>
								</header>
								<ul class="default" >
									<li><a href="#">Pellentesque lectus gravida blandit</a></li>
									<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue</a></li>
									<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
									<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue</a></li>
									<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								</ul>
							</section>
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
                            
                            <style>
							
								img:hover
								{
									padding:0;
									margin:0;
								}
							
							</style>
                            
                            
                            
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">-- Registration Form -- </h3>
                                    <h4 align="center">The fields with mark <img src="images/star.png"> are mandetory</h4>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        <img src="images/star.png">
											<input type="text" name="fname" id="name" value="" placeholder="First name :"  style="border-radius:40px;" />
										</div>
                                        
                                        <div class="6u 12u$" align="left">
                                        <img src="images/star.png">
											<input type="text" name="lname" id="name" value="" placeholder="Last name :" style="border-radius:40px;"/>
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br> <br>
										
                                        
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input data-provide="datepicker" placeholder="Date of Birth (mm-dd-yyyy)" style="-moz-appearance: none;
		                                                   -webkit-appearance: none;
		                                                      -o-appearance: none;
		                                                       -ms-appearance: none;
		                                                         appearance: none;
		                                                         background: none;
		                                                      border: solid 1px #888888;
		                                                           color: inherit;
		                                                          display: block;
		                                                            outline: 0;
		                                                          padding: 0.75em;
		                                                         text-decoration: none;
		                                                              width: 100%;
                                                                     border-radius:40px;"> 
										</div>
                                        
                                       									
										<div class="2u 12u$(small)">
                                        
											<input type="radio" id="priority-low" name="gen" value="Male" >
											<label for="priority-low">Male</label>
										</div>
                                        
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="gen" value="Female">
											<label for="priority-normal">Female</label>
										</div>
										
                                      	
                                        
                                        
                                        
                                        
                                        
										<!-- Break -->
                                        <br><br><br>
                                                    
                                        
                                       
                                        
									
                                        
                                        <div class="6u 12u$">
											<input type="text" name="hno" id="hno" value="" placeholder="House No. :" style="border-radius:40px;" />
										</div>
                                        <div class="6u 12u$">
											<input type="text" name="street" id="street" value="" placeholder="Street :" style="border-radius:40px;" />
										</div>
                                        
                                        
                                        <br><br><br>
                                        
										<!-- Break -->
                                        
                                        <div class="6u 12u$">
											<input type="text" name="land" id="land" value="" placeholder="Landmark :" style="border-radius:40px;" />
										</div>

                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="city" id="city" value="" placeholder=" City :" style="border-radius:40px;" />
										</div>
                                        
                                        
                                        
                                        <br><br><br>
                                        
                                        
                                        
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="state" id="state" value="" placeholder="State :" style="border-radius:40px;"/>
										</div>
                                        
                                        
                                         <div class="6u 12u$(xsmall)">
											<input type="text" name="pin" id="pin" value="" placeholder="Pincode :" style="border-radius:40px;" />
										</div>
                                       
                                         
                                        
                                        
                                        <br><br><br>
                                        
                                        
                                        
                                          <div class="6u 12u$(xsmall)" align="left">
                                          <img src="images/star.png">
											<input type="email" name="email" id="email" value="" placeholder="Email-id : " style="border-radius:40px;"  />
										</div>
                                        
                                        
                                        <div class="6u 12u$(xsmall)" align="left">
                                        <img src="images/star.png">
											<input type="text" name="mob" id="mob" value="" placeholder="Contact no : " style="border-radius:40px;" />
										</div>
                                        
                                        
                                        <br><br><br>
                                        
                                        
                                         <div class="6u 12u$(xsmall)" align="left">
                                         <img src="images/star.png">
											<input type="password" name="pass1" id="pass1" value="" placeholder="password :" style="border-radius:40px;" />
										</div>
                                       
                                         <div class="6u 12u$(xsmall)" align="left">
                                         <img src="images/star.png"> 
											<input type="password" name="pass2" id="pass2" value="" placeholder="Confirm Password : " style="border-radius:40px;"  />
										</div>
                                        
                                        <br><br><br><br>
                                        
                                        
                                        <div class="12u 12u$(xsmall)" align="left">Upload Your Photo Here:
											<input type="file" name="file" id="file" value="" />
										</div>
                                        </div>
                                        
                                        <!-- break --->
                                        <br><br><br>
										
											<div align="center">
									            
                                                <input type="submit" value="Register" name="submit"/>
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                
											
											
										</div>
											
									
									
								</form>
                                
                                
                                
                                
                                


                                 <?php
			if(isset($_POST['submit']))
			{
				
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$dob=$_POST['dob'];
				if(!empty($_POST['gen'])) {
				$gen=$_POST['gen'];
				}
				$hno=$_POST['hno'];
				$street=$_POST['street'];
				$land=$_POST['land'];
				$city=$_POST['city'];
				$state=$_POST['state'];
				$pin=$_POST['pin'];
				$mob=$_POST['mob'];
				$email=$_POST['email'];
				$pass1=$_POST['pass1'];
				$pass2=$_POST['pass2'];
				
				$name=$fname.' '.$lname;
				
				
				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];
				
				
				
	
					if(!empty($_POST['gen'])) {
					if($name!=0 || $email!=0 || $mob!=0 || $pass1!=0 || $pass2!=0 )
	{
		$check=mysqli_query($con,"SELECT * FROM user WHERE email like '$email'") or die(mysqli_error($con));
		$r=$check->num_rows;
		if($r==0)
		{	
			#insert into database
			
			if($pass1 == $pass2)
			{
				
				
				if($_FILES['file']['error'] == 0)
			
			{
				
				
			
				
				if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
				{
				$server_path = "upload_images/"."picture".rand(000,999).$name;
				$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
	
				if($up)
				{
$insert=mysqli_query($con,"INSERT INTO user values('','$name','$dob','$gen','$hno','$street','$land','$city','$state','$pin','$email','$mob','$pass1','$server_path')") or die(mysqli_error($con));
			if($insert)
			{	
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete!')
        		window.location.href="login.php";
                </script>
				<?php
			} 
			
			else
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,registration is not done ......')
        		</script>
				<?php
			}
			}
				}
			
			else
			{
				?><script>
				alert('Please Upload a JPG Photo')
        		</script>
				<?php
			}
			}
			
			else 
			{
				$insert1 = mysqli_query($con,"INSERT INTO user values('','$name','$dob','$gen','$hno','$street','$land','$city','$state','$pin','$email','$mob','$pass1','')") or die(mysqli_error($con));
			if($insert1)
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete.......')
        		window.location.href="login.php";
                </script>
				<?php
			}
			}
			}
			
			
			
			
			
			
			
			else
			{
				?><script>
				alert('Confirm password is not same with password  ......')
        		</script>
				<?php
				
			}
		}
		else
		{
			?><script>
			alert('Email is already registered.Please try again with another email......')
       	 </script>
			<?php
		}
	}
					}
	else
	{
		?><script>
		alert('Please fillup all the entries......')
       	</script>
		<?php
		
	}
				
			}
			
			?>                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
								</header>
								
							</section>
						</div>
					
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer">
				

					

					<!-- Copyright -->
						<?php
						require('footer.inc.php');
						?>
</div>
			
	</body>
</html>