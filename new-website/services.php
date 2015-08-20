<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>OAMC - Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
	<!--<link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" />-->

	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="script/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="script/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
	<script src="script/jquery.flexslider.js" type="text/javascript"></script>
	<script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="script/jquery.retina.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
			default_width: 600,
			default_height: 420,
			social_tools: false
		});
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) || ($(window).width() < 1024) ) {	
		} else {
            $('#slideshow-tabs .ui-tabs-panel').parallax("50%", 0.5);
            $('.content-home-1').parallax("0", 0.5);
            $('.content-home-2').parallax("100%", 0.5);
            $('.content-home-3').parallax("0", 0.5);
            $('#title-content').parallax("50%", 0.5);
            $("#content-side-title").show();
            setTimeout(function() { $("#content-side-title").animate({width: 'toggle'}); },100);
        }
        $('.side-title .flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
        });
        $('.link-side-title').click(function() {
			$(this).next("#content-side-title").animate({width: 'toggle'});
		});
		$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		$('img[data-retina]').retina({checkIfImageExists: true});
		$(".open-menu").click(function(){
		    $("body").addClass("no-move");
		});
		$(".close-menu, .close-menu-big").click(function(){
		    $("body").removeClass("no-move");
		});
	});
	</script>
</head>
<body>
	<header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" alt="Happy Health - All Your Health Need" /></a>
                <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Facilities</a></li>

                            <?php if (isset($_SESSION['user']))                                 echo '<li><a href="login.php">My Account</a></li>';                             else                                 echo '<li><a href="login.php">Login</a></li>';                             ?></li>
                            <?php if (isset($_SESSION))
                                echo '<li><a href="php/logout.php">Logout</a></li>';
                            else
                                echo '<li><a href="contact.php">Contact</a></li>';
                            ?>                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-31.jpg) no-repeat 50% 0 fixed">
            <h1><span>Services &amp; Facilities</span></h1>
           
        </header>
        <div id="full-width">
            <article class="static-page">
                <p>OMAC offering service involving public health including: long-term care, primary care in 3 diffrent <b>Facilities</b></p>
            </article>
            <ul id="list-service" class="clearfix">
                <li class="clearfix"><a href="#"><strong><img src="images/icon-services-1-retina.png" alt="General Checkup" class="icon-service" /><span>Pallliative Care Unit</span></strong>
                <img src="images/img-32.jpg" data-retina="images/img-32-retina.jpg" alt="General Checkup" class="image-service" />    
                </a></li>
                <li class="clearfix"><a href="#"><strong><img src="images/icon-services-1-retina.png" alt="General Checkup" class="icon-service" /><span>the children's unit</span></strong>
                <img src="images/img-32.jpg" data-retina="images/img-32-retina.jpg" alt="General Checkup" class="image-service" />    
                </a></li>
                <li class="clearfix"><a href="#"><strong><img src="images/icon-services-1-retina.png" alt="General Checkup" class="icon-service" /><span>the surgical unit</span></strong>
                <img src="images/img-32.jpg" data-retina="images/img-32-retina.jpg" alt="General Checkup" class="image-service" />    
                </a></li>
            </ul>
        </div>
    </div>
    <div id="content-footer" class="clearfix">
        <h4 id="title-footer"><span>Our Doctor Specialist</span></h4>
        <ul id="list-doctor" class="clearfix">
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. Richard Grandmaison</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Matthew Davis</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Elias Haroun</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>sebouh steve bardakjian</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>Pargol Poshtareh</strong>
                <span>Anesthesiology</span>
                </a>
            </li>

            
           
            
        </ul>
    </div>
    <div id="three-footer" class="clearfix">
        <article class="clearfix">
            <em><img src="images/icon-footer-1.png" data-retina="images/icon-footer-1-retina.png" alt="" /></em>
            <strong>Call Us Now</strong>
            <span>+5145164787</span>
        </article>
        <article class="clearfix">
            <a href="#"><em><img src="images/icon-footer-2.png" data-retina="images/icon-footer-2-retina.png" alt="" /></em>
            <strong>Live Chat</strong>
            <span>Chat with our Specialist</span>
            </a>
        </article>
        <article class="last clearfix">
            <a href="#"><em><img src="images/icon-footer-3.png" data-retina="images/icon-footer-3-retina.png" alt="" /></em>
            <strong>Schedule</strong>
            <span>Make Appointment &amp; Check our Schedule</span>
            </a>
        </article>


    </div>
    <footer id="main-footer">
        <nav>
            <ul id="nav-footer">
                <li><a href="#">Home</a></li>        
                <li><a href="#">About</a></li> 
                <li><a href="#">Doctor</a></li> 
                <li><a href="#">Services</a></li> 
                <li><a href="#">Blog</a></li> 
                <li><a href="#">Photo</a></li> 
                <li><a href="#">Article</a></li> 
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>