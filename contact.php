<?php 
$response='';
if(isset($_POST['submit'])){
   $message=$_POST['message'];
   $subject=$_POST['subject'];
   $email=$_POST['email'];
   $full_name=$_POST['full_name'];
   
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; 		      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ankushmyankush@gmail.com';                 // SMTP username
$mail->Password = '@tlanta123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom($email, $full_name);
$mail->addAddress('avinash.atlt@gmail.com', 'Admin');     // Add a recipient
  
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message.'<b> <br><br>'.$full_name.'<br>'.$email.'</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	
		if(!$mail->send()) {
    $response = 'Message could not be sent.'.'Mailer Error: ' . $mail->ErrorInfo;
	
} else {
    $response = 'Message has been sent';
	
}
}
?>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

   <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwzdOOcTXTvtPGVL8FkzqAwgBaTuZkZuc&callback"></script>
    <script src="js/google-map-init.js"></script>


    <script src="js/main.js"></script>


  </head>
  <body>
    <!-- Header Start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- header Nav Start -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="home.html">
                    <img src="img/logo.png" alt="Logo">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="nav">
		<li><a href="home.html">Home</a></li>
            	<li><a href="services.html">Services</a>
                <ul>
                    <li><a href="jasper-report.html">JasperReport</a></li>
                    <li><a href="pentaho.html">Pentaho</a></li>
                </ul>
            </li>
            <li><a href="client.html">Client</a>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
		<script src="js/script.js"></script>

                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        </header><!-- header close -->
        
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>Drop Us A Note</h1>
                  <p>Don’t just take our word for it. Check out some of our latest work.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form action="" method="post">
                  <?php 
				  echo  $response;
				  ?>
				  <br>
                    <div class="form-group">
					
                      <input type="text" class="form-control" name="full_name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                                 
                    <div class="form-group">
                      <textarea class="form-control" rows="3" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit" name="submit">Send Message</button>
                 
			 </form> 
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                
                 <img src="img/contact-us.gif" alt="Img">
                </div>
              </div>
            </div>
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Stop By For A visit</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>Street No:1-B Circular Road Near Sabzi Mandi Abohar, Punjab (India)                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>Email: atlantasoftechindia@gmail.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Phone:+91 1634 501 819
                    </li>
                  </ul>

                  <ul class="social-icons" style="display:none">
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>We Also Count In Google Map</h2>
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2>We design delightful digital experiences.</h2>
                  <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
                  <a class="btn btn-default btn-call-to-action" href="contact.php" >Tell Us Your Story</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- footer Start -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="footer-manu">
                  <ul>
                    <li><a href="home.html">About Us</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </div>
                <p>Copyright &copy; Design by <a href="home.html">Atlanta Softech</a>.</p>
              </div>
            </div>
          </div>
        </footer>
        
        
        
      </body>
    </html>