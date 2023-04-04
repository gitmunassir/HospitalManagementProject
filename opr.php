<!-- created by Mohd Munassir Alam -->
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Patient Online Registration</title>
       <link rel="stylesheet" href="opr.css">
       <link rel="stylesheet" href="footer.css">
       <link rel="stylesheet" href="Bootstrap kit/css/font-awesome.min.css">
        <link rel="stylesheet" href="Bootstrap kit/css/bootstrap.min.css">
       <link rel="stylesheet" href="Bootstrap kit/css/animate.min.css">
       <link rel="stylesheet" href="Bootstrap kit/css/aos.css">
       <link rel="stylesheet" href="Bootstrap kit/css/hover-min.css">
       <link rel="stylesheet" href="Bootstrap kit/css/bootstrap.min.css">
       <script src="Bootstrap kit/js/jquery.js"></script>
       <script src="Bootstrap kit/js/bootstrap.min.js"></script>
       <script src="Bootstrap kit/js/jquery.min.js"></script>
       <script src="Bootstrap kit/js/counterup.min.js"></script>
       <script src="Bootstrap kit/js/owl.carousel.js"></script>
       <script src="Bootstrap kit/js/owl.carousel.min.js"></script>
       <script src="Bootstrap kit/js/aos.js"></script>
       <script src="Bootstrap kit/js/main.js"></script> 
</head>
<body data-aos="zoom-in"> 
<div class="container-fluid">    <!-- container star -->
         <div class="row head" style="background:#504242;">
           <div class="col-sm-3 head" style="background: rgb(228, 169, 8);" ><center><i class="fa fa-heartbeat hvr hvr-pulse" style="font-size: 30px; margin-top: 15px; color: antiquewhite;"></i></center>
  <center><h3 style=" color: antiquewhite; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">HEALTH CARE</h3></center></div>
        <div class="col-sm-5" style="background:#504242;"><h3 style="color: antiquewhite; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">A DIGITAL INDIA INITIATIVE</h3></div>  
      <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-6" ><a href="#" ><h3 style="color: antiquewhite; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top:10px;">FAQs</h3></a></div>
          <div class="col-sm-6"><a href="#" ><h3 style="color: antiquewhite; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top:10px;">Feedback</h3></a></div>
        </div>
      </div>  
      </div>
      <div class="row">
        <div class="col-sm-3">
          <img src="mainlogo.png" alt="" class="img img-responsive hvr hvr-pop">
        </div>
        <div class="col-sm-1"><img src="ors.png" alt="" class="img img-responsive hvr hvr-pop"></div>
        <div class="col-sm-3"><img src="ministry.png" alt="" class="img img-responsive hvr hvr-pop"></div>
 <div class="col-sm-3"><center><img src="images/digitalindia.png" alt="" class="img img-responsive hvr hvr-pop"></center></div>
    </div>
    <nav class="navbar navbar-inverse">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hvr hvr-pop" href="#" style="color:white;"><i class="fa fa-heartbeat hvr hvr-pulse"></i> Health Care </a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="opr.php"><i class="fa fa-home" style=" font-size:25px;"></i></a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="service.php">Services</a></li>
                      <li><a href="#"  data-target="#monis2" data-toggle="modal">Who Can register here?</a></li>
                      <li><a href="contact.php">Contact</a></li>

                      <button  type="button" style="margin-top: 6px;" class="btn btn-danger glyphicon glyphicon-log-in btn-flat btn-lg mt-3" data-target="#monis" data-toggle="modal"></button></li>
                      
                        </ul>
</div>
    <div class="modal fade" id="monis" >
        <div class="modal-dialog modal-dialog-centered" role="dialog" style="background: #0000; opacity:.9;" >
          <div class="modal-content">
                 <div >
                      <div class="modal-body" >
                        <form action="logincode.php" method="post">

                           <center>  <i class="fa fa-lock" style="color:white; font-size:30px;"></i></center>
                             <input type="email" class="form-control" placeholder="Username" name="email">
                              <input type="password" class="form-control" placeholder="Password" name="pass">
                             <input type="submit"  class=" btn btn-primary">

                             </form>
 <div><h4 style="color:black;"> New User <span class="fa fa-user"></span> ? </h4> <a href="registration.php"> Register Here</a></div><hr>
 <a href="forgot-password.php"><center><h4 style="color:black;">Forgot Password</h4></center></a>
                            </div>
                      <div class="modal-footer">
                             <button class="btn btn-danger" data-dismiss="modal"> Close</button>
                      </div>
               </div>
             
        </div>
      </div>
 </div>

 <div class="modal fade" id="monis2" role="dialog" >
        <div class="modal-dialog modal-dialog-centered"  style="background: #0000; opacity:.9;">
          <div class="modal-content">
                 <div style="background: black;">
                      <div class="modal-body" style="align-item:centre;" >
                           <center> <h1 style="color:white;">Who can Register Here?</h1></center><hr>
                           
                           <ul style="color:white; text-align:justify;">
                          <li>Collection of patient demographic information, including personal and contact information</li>
                          <li>Patient referral or appointment scheduling</li>
                        <li>Collection of patient health history</li>
                        <li>Checking of health payer coverage</li>
                        <li>Patient orientation</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                             <button class="btn btn-danger" data-dismiss="modal"> Close</button>
                      </div>
               </div>
             
        </div>
      </div>
 </div>
                  
                      <li>
                       <button class="btn btn-danger" style="margin-top:8px; margin-left:5px;  "><a  style="color:black; text-decoration:none; font-weight:30px;"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a></button> 
                      </li>
                    </ul>
                    <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
                      <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </form>
                    </div>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
              </nav><!-- /.navbar -->
       <div class="row"  style="margin-top: 20px;">
              
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/slidernw.png" alt="..." height="400px">
              <div class="carousel-caption">
          
 </h1>   
           </div>

            </div>
            <div class="item">
              <img src="images/slider2.jpg" alt="..." width="100%" height="400px">
              <div class="carousel-caption">
                
              </div>
            
            </div>
            <div class="item">
              <img src="images/slider3.jpg" alt="..." width="100%" height="400px">
              <div class="carousel-caption">
                
              </div>
            
            </div>
           
          </div>
        
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="row butn">
 <div class="col-sm-2"></div>
 <div class="col-sm-2">        <button class="btn btn-primary hvr hvr-pop"><a href="#" style="color: aliceblue;  border-radius: 15px; text-decoration:none;">Book Appointment Now</a></button>
 </div>
 <div class="col-sm-2"></div>
 <div class="col-sm-2">        <button class="btn btn-danger hvr hvr-pop"><a href="#" style="color: aliceblue;  border-radius: 15px; text-decoration:none;">Blood Availability</a></button>
 </div>
 <div class="col-sm-1"></div>
 <div class="col-sm-2">        <button class="btn btn-success hvr hvr-pop"><a href="#" style="color: aliceblue;  border-radius: 15px; text-decoration:none;">Lab Report</a></button>
 </div>
      </div>
      <div class="row">
        <center><h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Stay Home Stay Safe, Stop COVID-19</h1></center>
      </div>
      <div class="row"><div class="col-sm-12"><center><button class="btn btn-success hvr hvr-pop"><a href="#" style="color: aliceblue;  border-radius: 15px; text-decoration:none;">Book Teleconsultant Appointment</a></button></center></div></div>
   <div class="row slider2">  <!-- second slider -->
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/pm.jpg" alt="..." height="400px">
            <div class="carousel-caption">
  
         </div>
  
          </div>
          <div class="item">
            <img src="images/arog.jpg" alt="..." width="100%" height="400px">
            <div class="carousel-caption">
              
            </div>
          
          </div>
        
         
        </div>
      
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" style="color:black;" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"  style="color:black; aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
   </div>  
   <div class="row">
     <marquee behavior="" direction="left"><h1><a href="#" style="font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif; color: teal;">Links</a></h1></marquee>
   </div>
   <div class="row">
     <div class="col-sm-3"></div>
     <div class="col-sm-6"><center><h1 style="color: rgb(83, 124, 126);">Features</h1></center><hr></div>
   </div>
   <div class="row"><center><img src="doc_ico.png" alt="" height="50px"></center></div>
   <div class="row footer" data-aos="zoom-in">
    <div class="col-sm-4">
      <center>
        <p style="color:cadetblue ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align:justify;">Online Registration System (ORS) is a framework to link various hospitals across the country for Aadhaar based online registration and appointment system, where counter based OPD registration and appointment system through Hospital Management Information System (HMIS) has been digitalized. The application has been hosted on the cloud services of NIC. Portal facilitates online appointments with various departments of different Hospitals using eKYC data of Aadhaar number, if patient's mobile number is registered with UIDAI. And in case mobile number is not registered with UIDAI it uses patient's name. New Patient will get appointment as well as Unique Health Identification (UHID) number. If Aadhaar number is already linked
           with UHID number, then appointment number will be given and UHID will remain same.</p>
      </center>
    </div>
    <div class="col-sm-4">
      <center><h1 style="color: cadetblue; font-weight: 300;"> Simple appointment process</h1></center>
      <p style="color:cadetblue ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align:justify;">For your first visit to hospital, registration and appointment with doctor is made simpler. All you have to do is verify yourself using Aadhaar Number, Select Hospital and Department, Select date of Appointment and receive SMS for Appointment.</p>
      <center><h1 style="color: cadetblue; font-weight: 300;"> Dashboard Reports</h1></center>
      <p style="color:cadetblue ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align:justify;">For your first visit to hospital, registration and appointment with doctor is made simpler. All you have to do is verify yourself using Aadhaar Number, Select Hospital and Department, Select date of Appointment and receive SMS for Appointment.</p>

    </div>
    <div class="col-sm-4">
      <center><h1 style="color: cadetblue; font-weight: 300;"> Hospital On Boarding</h1></center>
      <p style="color:cadetblue ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align:justify;">Hospitals can come on board this platform and provide their appointment slots for online booking by patients. The system facilitates Hospitals to easily manage their registration and appointment process and monitor the flow of patients.</p>

    </div>
   </div>
 

 
 <!-- Footer -->
 <section id="footer">
		<div class="container ">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
									</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><a href="#">Health Care System</a></p><hr>
					<p class="h3" style="color:white;">© All right Reversed.<a class="text-green ml-2" href="https://www.mecatredztechnology.org" target="_blank">Mecatredz Techonology</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->

</div>
</body>
</html>