<?php
// Start the session
session_start();
if(isset($_SESSION['employee_id']))
    switch ($_SESSION['employee_type_id']) {
        case 1:
            $_SESSION['employee_type'] = 'Director';

            header("Location: ../director.php");

            die();
            break;
        case 2:
            $_SESSION['employee_type'] = 'Administrator';

            header("Location: ../director.php");
            die();
            break;
        case 3:
            $_SESSION['employee_type'] = 'Regular Nurse';

            header("Location: ../nurse.php");
            die();
            break;
        case 4:
            $_SESSION['employee_type'] = 'Junior Doctor';

            header("Location: ../doctor2.php");
            die();
            break;
        case 6:
            $_SESSION['employee_type'] = 'Doctor';
            header("Location: ../doctor.php");
            die();
            break;
        case 7:
            $_SESSION['employee_type'] = 'Childcare Nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 8:
            $_SESSION['employee_type'] = 'Surgery Nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 9:
            $_SESSION['employee_type'] = 'Shift Supervisor Nurse';
            header("Location: ../chief-nurse.php");
            die();
            break;
        case 10:
            $_SESSION['employee_type'] = 'Senior Administrator';
            header("Location: director.php");
            die();
            break;
        case 11:
            $_SESSION['employee_type'] = 'Medical Intern';
            header("Location: ../doctor2.php");
            die();
            break;
        case 12:
            $_SESSION['employee_type'] = 'Medical Resident 1-yr';
            header("Location: ../doctor2.php");
            die();
            break;
        case 13:
            $_SESSION['employee_type'] = 'Medical Resident 2-yr';
            header("Location: ../doctor2.php");
            die();
            break;
        case 14:
            $_SESSION['employee_type'] = 'Medical Resident 3-yr';
            header("Location: ../doctor2.php");
            die();
            break;
    }?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>OAMC-patient-login</title>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Facilities</a></li>
                            <?php if (isset($_SESSION['user']))                                 echo '<li><a href="login.php">My Account</a></li>';                             else                                 echo '<li><a href="login.php">Login</a></li>';                             ?></li>
                            <?php if (isset($_SESSION['user']))
                                echo '<li><a href="php/logout.php">Logout</a></li>';
                            else
                                echo '<li><a href="contact.php">Contact</a></li>';
                            ?>                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div id="content" class="clearfix" style="overflow: hidden;">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
        </header>
        <div class="login" style="float: left;">
            <h1 style="margin-bottom: 20px;font-size: larger;color: cadetblue; font-weight: bolder;">Staff Login</h1>
            <form class="box" style="width:320px" id="login" method="POST" action="php/employee_login.php">

                <p>Please enter your credentials</p>
                <br/>
                <label for="employee_id">Employee ID: </label>
                <input type="text" name="employee_id" id="employee_id"/><br/><br/>

                <label for="password">Password: </label>
                <input type="password" name="password" id="password"/><br/><br/><br/>

                <input type="submit" class="submitButton" style="border: 1px; float: right; background-color:cadetblue; color: honeydew; " value="Login"/>
            </form>
        </div>
        <div class="login" style="float: right;">
            <h1 style="margin-bottom: 20px;font-size: larger;color: cadetblue; font-weight: bolder;">Patients Login</h1>
            <form class="box" style="width:320px" id="login" method="POST" action="/php/patient_login.php">

                <p>Please enter your credentials</p>
                <br/>
                <label for="patient_id">Patient ID: </label>
                <input type="text" name="patient_id" id="patient_id"/><br/><br/>

                <label for="password">Password: </label>
                <input type="password" name="password" id="password"/><br/><br/><br/>

                <input type="submit" class="submitButton" style="border: 1px; float: right; background-color:cadetblue; color: honeydew; " value="Login"/>
            </form>
        </div>
</body>
</html>
