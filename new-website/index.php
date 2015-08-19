<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>OAMC - Stay Healthy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
	<!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="script/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="scripts/jquery.scrollTo-1.4.2-min.html" type="text/javascript"></script>
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
        }
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
<body class="home">
	<header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" ></a>
                <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li class="current-menu-item"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>

                            <?php if (isset($_SESSION['user']))                                 echo '<li><a href="login.php">My Account</a></li>';                             else                                 echo '<li><a href="login.php">Login</a></li>';                             ?></li>
                            <?php if (isset($_SESSION['employee_id']))
                                echo '<li><a href="php/logout.php">Logout</a></li>';
                            else
                                echo '<li><a href="contact.php">Contact</a></li>';
                            ?>                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div id="slideshow-tabs">
        <div id="panel-tabs"></div>
        <ul class="nav-tabs-slideshow">
			<li><a href="#panel-1"><strong>Our Commitment</strong><br />
                <span>Learn about our company commitment</span>
                </a>
            </li>
			<li>
                <a href="#panel-2"><strong>Professional Doctor</strong><br />
                <span>We have professional team &amp; Doctor</span>
                </a>
            </li>
            <li>
                <a href="#panel-3"><strong>Services</strong><br />
                <span>Medical Checkup, Dentist and many more</span>
                </a>
            </li>
            <li>
                <a href="#panel-4"><strong>Look at our center</strong><br />
                <span>it's easy to find us</span>
                </a>
            </li>
		</ul>
		<div class="ui-tabs-panel" id="panel-1" style="background:url(images/slide-1.jpg) no-repeat 50% 0 fixed">
            <div class="tabs-container">
                <article>
                    <h2>Our Commitment to make you healthy</h2>
                    <div class="content-tabs clearfix">
                        <figure>
                            <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="" />
                        </figure>
                        <p>Commandments come from the outside and they are things we have to do. Commitments come from the inside, stemming from what we want to do. Whether you are deeply invested in yourself or just starting your journey of self-development, there are certain decisions highly successful women commit to which make them whole, composed and successful.
                        </p>
                    </div>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-2" style="background:url(images/slide-2.jpg) no-repeat 50% 0 fixed">
            <div class="tabs-container">
                <article>
                    <h2>Professional Doctor</h2>
                    <div class="content-tabs clearfix">
                        <p>Your medical doctor will see you on a regular basis or, if unable to visit, he or she will arrange for another doctor to see you in his / her absence. Your doctor will determine what Care Plan you require, and will also direct others (through written orders) how to administer the plan.
                        Your doctor will work closely with this nurse to direct your care. S
                        These health care professionals will probably become the most familiar to you, as they will take care of your everyday needs; baths, assistance with eating and any other daily functions will all be overseen by your nurse. On admission, the nurse will ask you to designate one person for communication.The Personal Support Worker provides basic nursing care; assists patients with personal hygiene, food and fluid intake and elimination needs as outlined in the Nursing Care Plans specific to each patient.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-3" style="background:url(images/slide-3.jpg) no-repeat 50% 0 fixed">
        </div>
        <div class="ui-tabs-panel" id="panel-4" style="background:url(images/slide-4.jpg) no-repeat 50% 0 fixed">
            
        </div>
    </div>
    <article id="intro" class="clearfix">
        <h1>Hello!! and Welcome to <strong>OAMC</strong>, a number one place to take care you and your family health. Browse our website to find all cool information.</h1>       
    </article>
    <div class="content-home content-home-1" style="background:url(images/img-2.jpg) no-repeat 0 0 fixed">
        <article class="static-page">
            <h3>Welcome to your hospital…</h3>
            <p>Everyone who comes to OMAC will be treated with respect and understanding. We know that whether you are a patient or a visitor, being in a hospital can sometimes make you feel uncertain and nervous. Our staff, physicians and volunteers are always there to help you while you are at OMAC, so please ask if you need assistance - this is your hospital!!!
            </p>
            <p>We offer a full range of acute care programs and services, a number of which are considered provincial, national or international leaders.  </p>
        </article>
    </div>
    <div class="content-home content-home-2 odd right" style="background:url(images/img-3.jpg) no-repeat 100% 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>We Have Tons of Doctor and Professor</span></h2>
            <h3>Excellence in Teaching and Education</h3>
            <p>Medical students and professionals need facilities that let them interact in a way that is sensitive to the needs of patients and their families and that give students access to the latest medical methods, technologies and procedures.</p>
            <p>Our hospital all have Patient Resource Centres that provide patients and their families with the latest medical information, as well as support and community resources. Some of the material is bilingual (English/French)</p>
        </article>
    </div>
    <div class="content-home content-home-3" style="background:url(images/img-4.jpg) no-repeat 0 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>About Us</span></h2>
            <h3>To provide patient care of the highest quality in a humane and caring manner, with an emphasis on specialized and ultra-specialized care.</h3>
            <p>
                New technology adopted by the Segal Cancer Centre has profound effect on reducing patient wait times for chemotherapy
                When facing the stress and anxiety of undergoing chemotherapy, the last thing a patient needs to endure is the added frustration of a lengthy wait before receiving treatment. As part of its continuous efforts to improve care and the patient experience, the Segal Cancer Centre at the Jewish General Hospital has adopted an electronic scheduler to manage appointments.</p>
           
        </article>
    </div>
    <div id="box-homepage-container" style="background:url(images/img-5.jpg) no-repeat 50% 0 fixed">
        <div id="box-homepage" class="clearfix">
            <article>
                <figure>
                    <img src="images/img-6.jpg" data-retina="images/img-6-retina.jpg" alt="Professional Doctor and Nurse" />
                </figure>
                <h3>A Family Resource Library</h3>
                <p>The professional librarian on staff can guide you to the right resources, answer your questions about your medical conditions, assist with Internet searches.</p>
            </article>
            <article>
                <figure>
                    <img src="images/img-7.jpg" data-retina="images/img-7-retina.jpg" alt="Find Us Everywhere" />
                </figure>
                <h3>Automated Teller Machine</h3>
                <p>The ATM is located on the first floor near the main entrance of the hospital.  </p>
            </article>
            <article class="last">
                <figure>
                    <img src="images/img-100.jpg" data-retina="images/img-6-retina.jpg" alt="Professional Doctor and Nurse" />
                </figure>
                <h3>Careers</h3>
                <p>Looking to start your career as a healthcare professional? Consider the opportunities available at OUR Hospital.</p>
                
            </article>
        </div>
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