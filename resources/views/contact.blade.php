
<!DOCTYPE html>
<html lang="en">
<head>
<title>iLabAfrica SOC</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Grade Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->

</head>
<link rel="shortcut icon" href="http://ilabafrica.ac.ke/wp-content/uploads/2015/06/favicon-12.png" />
<body>

<!-- header -->
<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.html">
				<span class="fab fa-asymmetrik"></span> SOC
			</a>
			<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="/">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="about">About</a>
					</li>
					<li class="nav-item dropdown mr-lg-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Trainings
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="single">CEH</a>
                <a class="dropdown-item" href="single">CHFI</a>
                <a class="dropdown-item" href="single">Malware Analysis</a>
              </ul>
            </li>
          <li class="nav-item  mr-lg-3">
            <a class="nav-link" href="blog">Blog</a>
          </li>
          <li class="nav-item dropdown mr-lg-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Services
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="single">Consulting</a>
                <a class="dropdown-item" href="single">Incident response</a>
                
            </ul>
          
          </li>
					<li class="nav-item active">
						<a class="nav-link" href="contact">contact</a>
					</li>
				</ul>
				<div class="buttons">
					<p><i class="fas mr-1 fa-phone"></i> iLabitsecurity@strathmore.edu</p>
				</div>
				
			</div>
		</nav>
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="inner-banner">
	<div class="banner-layer">
		<h1 class="text-center">Contact Page</h1>
	</div>
</section>
<!-- //banner -->

<!-- contact -->
<section class="contact py-5">
	<div class="container">
		<h2 class="heading mb-lg-5 mb-4">Contact Us</h2>
		<div class="row contact-grids w3-agile-grid">
			<div class="row col-md-4 col-sm-6 contact-grid1 w3-agile-grid">
				<div class="col-3 text-center">
					<i class="fas fa-envelope-open"></i>
				</div>
				<div class="col-9 p-0">
					<h4>Email</h4>
					<p><a href="mailto:info@example.com">iLabitsecurity@strathmore.edu</a></p>
				</div>
			</div>
			<div class="row col-md-4 col-sm-6 mt-sm-0 mt-4 contact-grid1 w3-agile-grid">
				<div class="col-3 text-center">
					<i class="fas fa-phone"></i>
				</div>
				<div class="col-9 p-0">
					<h4>Call Us</h4>
					<p>+254 703 034616</p>
				</div>
			</div>
			<div class="row col-md-4 col-sm-6 mt-md-0 mt-4 contact-grid1 w3-agile-grid">
				<div class="col-3 text-center">
					<i class="fas fa-laptop"></i>
				</div>
				<div class="col-9 p-0">
					<h4>Career</h4>
					<p><a href="mailto:example@career.com">example@career.com</a></p>
				</div>
			</div>
		</div>
		<div class="row contact_full w3-agile-grid">
			<div class="col-md-7 contact-us w3-agile-grid">
				<form action="{{route('contact.store')}}" method="post">
					@csrf
					@method('post')
					<div class="row">
						<div class="col-md-6 styled-input">
							<input type="text" name="Name" placeholder="Name" required="">
						</div>
						<div class="col-md-6 styled-input">
							<input type="email" name="Email" placeholder="Email" required=""> 
						</div> 
					</div>
					<div class="styled-input">
						<input type="text" name="Phone" placeholder="Phone Number" required="">
					</div>
					<div class="styled-input">
						<textarea name="Message" placeholder="Message" required=""></textarea>
					</div>
					<div class="click mt-3">
						<input type="submit" value="SEND">
					</div>
				</form>
			</div>
			<div class="col-md-5 map">
				 <iframe src="https://maps.google.com/maps?q=ilabafrica&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>
	</div>
</section>
<!-- //contact -->

<!-- footer -->	
<footer>

  <div class="row">
  <div class="column" style="background-color:#212529;">
   <h3 class="text-center mt-4 mb-3">Location</h3>
    <p class="text-center">Strath­more University</p>
    <p class="text-center">4thFloor Stu­dent Centre Build­ing,Keri Road, Madaraka Estate,
</p>
    <p class="text-center">P.O Box 59857,00200,Nairobi.
</p>
<p class="text-center"><i class="fas mr-1 fa-phone"></i>Timings 8:30 a.m to 5:30 p.m </p>

    <p class="text-center">Mobile: +254 703 034616/ 0703 034 617.


<p class="text-center">iLabitsecurity@strathmore.edu</p>
  </div>
    <div class="column" style="background-color:#212529;">
    <h3 class="text-capitalize mt-4 mb-3">Connect with Us </h3>
    <p class="text-center">
Twitter
</p>
<p class="text-center">FaceBook
</p>
<p class="text-center">Youtube
</p>
<p class="text-center">LinkedIn

</p>

  </div>
  <div class="column" style="background-color:#212529;">
     <h3 class="text-capitalize mt-4 mb-3">Newsletter</h3>
   <!--  <h3 class="text-capitalize mt-4 mb-3">Newsletter</h3> -->
        <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
        <form action="{{route('newsletter.store')}}" method="post">
          @csrf
          @method('post')
          <input type="email" name="Email" placeholder="Enter your email..." required="">
          <button class="btn1"><i class="far fa-paper-plane"></i></button>
          <div class="clearfix"> </div>
        </form>
 </div>
  <div class="column" style="background-color:#212529;">
  <h1 class="text-center"></h1>
  <br>
    <img src="images/SU.png" class="iLabAfrica">
  </div>
</div>

  
  <div class="copyright pb-sm-5 pb-4 text-center">
    <p>© 2020 iLabAfrica SOC. All Rights Reserved <a href="http://www.W3Layouts.com" target="_blank"></a></p>
  </div>
</footer>	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>