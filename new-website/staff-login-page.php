<?php
// Start the session
session_start();
if(isset($_SESSION['employee_id']))
    switch ($_SESSION['employee_type_id']) {
        case 1:
            $_SESSION['employee_type'] = 'director';

            header("Location: ../director.php");

            die();
            break;
        case 2:
            $_SESSION['employee_type'] = 'basic administration';

            header("Location: ../director.php");
            die();
            break;
        case 3:
            $_SESSION['employee_type'] = 'regular nurse';

            header("Location: ../nurse.php");
            die();
            break;
        case 4:
            $_SESSION['employee_type'] = 'junior doctor';

            header("Location: ../doctor2.php");
            die();
            break;
        case 5:
            $_SESSION['employee_type'] = 'technician';
            header("Location: ../technician.php");
            die();
            break;
        case 6:
            $_SESSION['employee_type'] = 'doctor';
            header("Location: ../doctor.php");
            die();
            break;
        case 7:
            $_SESSION['employee_type'] = 'childcare nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 8:
            $_SESSION['employee_type'] = 'surgery nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 9:
            $_SESSION['employee_type'] = 'shift supervisor nurse';
            header("Location: ../chief-nurse.php");
            die();
            break;
        case 10:
            $_SESSION['employee_type'] = 'senior administrator';
            header("Location: director.php");
            die();
            break;
        case 11:
            $_SESSION['employee_type'] = 'intern';
            header("Location: ../doctor2.php");
            die();
            break;
        case 12:
            $_SESSION['employee_type'] = 'resident 1';
            header("Location: ../doctor2.php");
            die();
            break;
        case 13:
            $_SESSION['employee_type'] = 'resident 2';
            header("Location: ../doctor2.php");
            die();
            break;
        case 14:
            $_SESSION['employee_type'] = 'resident 3';
            header("Location: ../doctor2.php");
            die();
            break;
    }?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Happyhealth - Stay Healthy</title>
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
        $('#tabs-service').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('#tabs-doctor').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="newslist.html">News List</a></li>
                                    <li><a href="newsdetail.html">News Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Other</a>
                                <ul>
                                    <li><a href="#">Color Variation</a>
                                        <ul>
                                            <li><a href="index.html">Blue</a></li>
                                            <li><a href="../red/index.html">Red</a></li>
                                            <li><a href="../orange/index.html">Orange</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="fullpage.html">Full Page no Sidebar</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="patient-login-page.php">Patients</a></li>
                            <li><a href="staff-login-page.php">Staff</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
            <h1><span>Staff Login</span></h1>
            <aside>
                <a href="#content-side-title" class="link-side-title"><span></span><span></span><span></span></a>
                <div id="content-side-title" class="title-testimonial">
                    <div class="side-title">
                        <h3></h3>
                        <article>
                            <p>The best way to keep track of work</p>
                        </article>
                    </div>
                </div>
            </aside>
        </header>
        <div class="login">
        <form class="box" style="width:320px" id="login" method="POST" action="php/employee_login.php">

            <p>Please enter your credentials</p>
            <br/>
            <label for="employee_id">Employee ID: </label>
            <input type="text" name="employee_id" id="employee_id"/><br/><br/>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password"/><br/><br/><br/>

            <input type="submit" value="Login"/>
        </form>
        </div>
    <footer id="main-footer">
        <aside>
            <h5 id="text-footer">P Sherman, 42 Wallaby Way, Sydney, Australia | Phone: +62834856, Fax: +62849684 | Email: hello@cubicthemes.com</h5>
            <div id="footer-copyright" class="clearfix">
                <p>Copyright &copy; 2013 Cubicthemes.com, All Rights Reserved</p>
                <a href="#" id="logo-footer"><img src="images/logo-footer.png" data-retina="images/logo-footer-retina.png" alt="Happy Health" /></a>
            </div>
        </aside>
    </footer>
</body>
</html>
