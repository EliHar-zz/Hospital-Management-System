<?php
// Start the session
session_start();
if(!isset($_SESSION['patient_id'])) {
    if (isset($_SESSION['searched']) && $_SESSION['searched_person_type'] != 'patient') {
        header("location: ../login.php");
    }
}
?>

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
    <script src="script/helper.js" type="text/javascript"></script>
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
                        <?php if (isset($_SESSION['employee_id']))
                            echo '<li><a href="php/logout.php">Logout</a></li>';
                        else
                            echo '<li><a href="contact.php">Contact</a></li>';
                        ?>                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <?php

    if ($_SESSION['user']!=='patient'){
        echo'
    <div id="header-full" style="height: 50px; width: 100%;">

        <div style="float: left; margin-top: 10px; margin-left: 40px; color:white;">
                <input onkeyup="searchPeople()" class="inputField" style="float: left;font-size: small;" type="text" id="searchBox" placeholder="     Search for " name="patient_search">

            <label style=" float: left; margin-left: 10px; margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="patient">&nbsp;Patient</label>';

    if ($_SESSION['user']==='admin' || $_SESSION['user']==='doctor')
        echo'
            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()"  type="radio" name="person_type" value="junior_doctor">&nbsp;Junior Doctor</label>';

    if ($_SESSION['user']!=='patient' && $_SESSION['user']!=='nurse')
        echo'
            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()"  type="radio" name="person_type"  value="nurse">&nbsp;Nurse</label>';

       echo'</div>

        <div id="result" style="color: #333333; text-align: left; float: left; width: 20%; margin-top: 45px;margin-left: 41px;top:0px; position: absolute; z-index: 10;">
        </div>

        <div id="header" class="clearfix" >
            <nav id="nav" class="clearfix" style="margin-top: 5px; margin-left: 0px; text-align: left;">
                <div id="nav-container" >
                    <ul id="nav-main" >
                    </ul>
                </div>
            </nav>
        </div>
    </div>';
}?>
</header>
<div id="content" class="clearfix">
    <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
        <h1><span><?php
                if ($_SESSION['patient_name'])
                    echo $_SESSION['patient_name'];
                elseif ($_SESSION['searched'])
                echo $_SESSION['searched']['patient_name']?></span></h1>
    </header>
    <div class="box user_info">
        <h1 style="text-align: center; font-size: larger; font-family: Georgia; text-decoration: underline">Patient's Information</h1></br>
        <h2>Medicare Insurance Number: <span style="color: #d7fca8; font-family: Georgia;"><?php
                if ($_SESSION['medicare'])
                    echo $_SESSION['medicare'];
                elseif ($_SESSION['searched'])
                    echo $_SESSION['searched']['medicare']?></span></h2></br>

        <h2>Hospital Card Number: <span style="color: #d7fca8; font-family: Georgia;"><?php
                if ($_SESSION['hospital_card'])
                    echo $_SESSION['hospital_card'];
                elseif ($_SESSION['searched'])
                    echo $_SESSION['searched']['hospital_card']?></span></h2>
        </br></br></br>
        <button class="historyButton" onclick="showPatientHistory()">Show Visits History</button>
    </div>

    <div id="patient_history_records">
            <!-----   Load table  ----->
    </div>
</body>
</html>