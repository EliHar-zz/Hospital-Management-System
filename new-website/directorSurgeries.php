<?php
// Start the session
session_start();
if(!isset($_SESSION['employee_id']))
    header("location: ../login.php");
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

	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="script/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="script/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
	<script src="script/jquery.flexslider.js" type="text/javascript"></script>
	<script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="script/jquery.retina.js" type="text/javascript"></script>
    <script src="script/matt.js" type="text/javascript"></script>
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


<!-- ######################################### Nav Bar ##############################################-->
<header id="main-header" class="clearfix" >


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
                        <li><a href="services.php">Facilities</a></li>

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

    <div id="header-full" style="height: 50px; width: 100%;">
        <div style="float: left; margin-top: 10px; margin-left: 40px; color:white;">
            <input onkeyup="searchPeople()" class="inputField" style="float: left;width: 170px; font-size: small;" type="text" id="searchBox" placeholder="     Search for " name="patient_search">

            <label style=" float: left; margin-left: 10px; margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="patient">&nbsp;Patient</label>

            <?php if ($_SESSION['user']==='admin')
                echo '
            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type" value="doctor">&nbsp;Doctor</label>

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="technician">&nbsp;Technician</label>
                ';
            else
                echo '<label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="junior_doctor">&nbsp;Junior Doctor</label>
                '; ?>
            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="nurse">&nbsp;Nurse</label>

        </div>

        <div id="result" style="color: #333333; text-align: left; float: left; width: 20%; margin-top: 45px;margin-left: 41px;top:0px; position: absolute; z-index: 10;">
        </div>

        <div id="header" class="clearfix" >
            <nav id="nav" class="clearfix" style="margin-top: 5px; margin-left: 0px; text-align: left;">
                <div id="nav-container" >
                    <ul id="nav-main" >
                        <li><a href="login.php">Personal Info</a></li>
                        <?php

                        if ($_SESSION['user']==='admin')
                            echo'
                        <li><a href="#">Services</a>
                            <ul>
                                <li><a href="directorServices.php?fac=palliative">Palliative</a></li>
                                <li><a href="directorServices.php?fac=childrens_unit">Childrens Unit</a></li>
                                <li><a href="directorServices.php?fac=surgical_unit">Surgical Unit</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Supplies</a>
                            <ul>
                                <li><a href="#">Storage Units</a>
                                    <ul>
                                        <li><a href="directorStorage.php?fac=palliative">Palliative</a></li>
                                        <li><a href="directorStorage.php?fac=childrens_unit">Childrens Unit</a></li>
                                        <li><a href="directorStorage.php?fac=surgical_unit">Surgical Unit</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Supply Rooms</a>
                                    <ul>
                                        <li><a href="directorSupplies.php?fac=palliative&floor=first">Palliative First Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=palliative&floor=second">Palliative Second Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=palliative&floor=third">Palliative Third Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=childrens_unit&floor=first">Childrens Unit First Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=childrens_unit&floor=second">Childrens Unit Second Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=childrens_unit&floor=third">Childrens Unit Third Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=surgical_unit&floor=first">Surgical Unit Third Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=surgical_unit&floor=second">Surgical Unit Third Floor</a></li>
                                        <li><a href="directorSupplies.php?fac=surgical_unit&floor=third">Surgical Unit Third Floor</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kitchens</a>
                                    <ul>
                                        <li><a href="directorKitchen.php?fac=palliative">Palliative</a></li>
                                        <li><a href="directorKitchen.php?fac=childrens_unit">Childrens Unit</a></li>
                                        <li><a href="directorKitchen.php?fac=surgical_unit">Surgical Unit</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>'; ?>
                        <li><a style="font-weight: bold; color: #494949;">Surgeries</a></li>
                        <?php

                        if ($_SESSION['user']==='admin')
                            echo'
                        <li><a href="#">Records</a>
                            <ul>
                                <li><a href="directorRecords.php?fac=1">Palliative</a></li>
                                <li><a href="directorRecords.php?fac=2">Childrens Unit</a></li>
                                <li><a href="directorRecords.php?fac=3">Surgical Unit</a></li>
                                <li><a href="directorRecords.php?surg=1">Surgeries</a></li>
                            </ul>
                        </li>';


                        if($_SESSION['user']!== 'admin')
                        echo '<li><a href="schedule.php" style="font-weight: bold;">Schedule</a></li>';?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


    <!-- ######################################### Main Image ##############################################-->
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
            <h1><span><?php echo $_SESSION['employee_name'];?></span></h1>
        </header>

    <!-- ######################################### PHP ##############################################-->
        <?php
            require 'database.php';

            if (isset($_GET['del'])) {
                $id = $_GET['del'];
                $query = "";
                $result = mysqli_query($con, $query) or die('Unable to delete from DB <br/>'.$query);
            }

            if (isset($_POST['submit'])) {
                global $con;

                $query = "SELECT service_id FROM services WHERE service_name='".$_POST['surgeries']."'";
                $result = mysqli_query($con, $query) or die($query);
                $row = mysqli_fetch_assoc($result);
                $service_id = $row['service_id'];

                $query = "SELECT MAX(services_per_visit_id) AS max FROM services_per_visit";
                $result = mysqli_query($con, $query) or die("Unable to get max id");
                $arr = mysqli_fetch_assoc($result);
                $id = $arr['max'] + 1;

                $visits_id = $_POST['visits_id'];
                $start_date = $_POST['start_date'];
                $start_time = $_POST['start_time'];
                $end_date = $_POST['end_date'];
                $end_time = $_POST['end_time'];
                $floor = $_POST['floor'];
                $room_number = $_POST['room_number'];


                $start = strtotime(date("Y-m-d", strtotime($start_date)));

                $start = $start_date . ' ' . $start_time .':00';
                $end = $end_date . ' ' . $end_time .':00';

                $query = "INSERT INTO services_per_visit VALUES(
                            $id,
                            $visits_id,
                            $service_id,
                            '$start',
                            '$end',
                            3,
                            $floor,
                            $room_number
                          )";
                $result = mysqli_query($con, $query) or die("Unable to execute insert query<br/>$query");
            }

            $query = "SELECT service_name FROM services WHERE service_complexity='surgery'";
            $result = mysqli_query($con, $query)
                        or die("Unable to retrieve surgeries<br/>mysqli_error($con)<br/>$query");

            $surgeries .= '<label for="surgeries">Surgery:</label>';
            $surgeries .= '<select id="surgeries" name="surgeries">';
            while ($services = mysqli_fetch_assoc($result)) {
                $surgeries .= '<option>'.$services['service_name'].'</option>';
            }
            $surgeries .= '</select>';

            $query = "SELECT service_name,
                            patient_name,
                            services_per_visit.start_date,
                            services_per_visit.end_date,
                            floor_number
                          FROM services_per_visit, services, visits, patients
                          WHERE service_complexity='surgery'
                          AND services_per_visit.start_date > now()
                          AND services_per_visit.service_id=services.service_id
                          AND services_per_visit.visits_id=visits.visits_id
                          AND visits.patient_id = patients.patient_id
                          ORDER BY services_per_visit.start_date
                          LIMIT 50";
            $result = mysqli_query($con, $query) or die("Unable to retrieve upcoming surgeries<br/>$query");

            $upcoming_surgeries = '<table>';
            $upcoming_surgeries .= '<tr>';
            $upcoming_surgeries .= "<th class='output h'>Surgery</th>";
            $upcoming_surgeries .= "<th class='output h'>Patient</th>";
            $upcoming_surgeries .= "<th class='output h'>Begins</th>";
            $upcoming_surgeries .= "<th class='output h'>Ends</th>";
            $upcoming_surgeries .= "<th class='output h'>Floor</th>";
            $upcoming_surgeries .= '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                $upcoming_surgeries .= '<tr>';
                $upcoming_surgeries .= '<td class="output">'.$row['service_name'].'</td>';
                $upcoming_surgeries .= '<td class="output">'.$row['patient_name'].'</td>';
                $upcoming_surgeries .= '<td class="output">'.$row['start_date'].'</td>';
                $upcoming_surgeries .= '<td class="output">'.$row['end_date'].'</td>';
                $upcoming_surgeries .= '<td class="output">'.$row['floor_number'].'</td>';
                $upcoming_surgeries .= '</tr>';
            }
            $upcoming_surgeries .= '</table>';

            mysqli_close($con);
        ?>

    <div style="text-align:center">
        <!-- ######################################### Style ##############################################-->
        <style scoped>
            a { float: left; color: white; margin: 5px; font-size: 20pt; text-decoration: none; }
            h3 { font-weight: bold; font-size: 16pt; }
            h4 { font-weight: bold }
            label { float: left; }
            .nav { margin: 0 auto; padding: 40px; margin-bottom: 35px; width: 139px; height: 40px; background-color: #5B94AB; color:white; }
            .form { background-color: #5B94AB; color: white; text-shadow: 1px 1px 1px black; margin-top: 30px; padding: 50px; border: 4px double white; width: 1070px; clear: both; }
            .row { display: flex; }
            .col { flex: 1; width: 300px; min-height: 250px; }
            .col.left { padding-right: 30px; border-right: 1px solid white; }
            .col.right { padding-left: 30px; }
            input[type=text] { width: 300px; }
            .output { color: black; text-shadow: 1px 1px 1px white; border: 1px solid black; padding: 5px }
            .output.h { background-color: lightblue; border: 1px solid black; }
            .del { font-size: 12pt; color: black;  }
            .del:visited { color: black; }
            .del:hover { color: #5B94AB }
        </style>

        <!-- ######################################### Form ##############################################-->
        <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" style="margin-top: 50px">
            <h3 style="text-align: center">Surgeries</h3>

            <hr/>
            
            <div class="row">
                <div class="col left">
                    <?php

                    if ($_SESSION['user']==='admin')
                        echo'<h4>Current Surgeries</h4><br/>';

                    echo $upcoming_surgeries;
                    ?>
                </div>

                <?php

                if ($_SESSION['user']==='admin'){
                echo '
                <div class="col right">
                    <h4>Add Surgery</h4><br/>


                        ';
                    echo $surgeries;
                    echo'<br/><br/>

                    <label for="visit">Visits_id: </label>
                    <input style="width:100px" type="text" id="visit" name="visits_id"/><br/><br/>

                    <label for="start_date">Start date: </label>
                    <input type="date" id="start_date" name="start_date"/><br/><br/>

                    <label for="start_time">Start time: </label>
                    <input type="time" id="start_time" name="start_time"/><br/><br/>

                    <label for="end_date">End date: </label>
                    <input type="date" id="end_date" name="end_date"/><br/><br/>

                    <label for="end_time">End time: </label>
                    <input type="time" id="end_time" name="end_time"/><br/><br/>

                    <label for="floor">Floor: </label>
                    <select id="floor" name="floor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br/><br/>

                    <label for="room_number">Room: </label>
                    <input style="width:100px" type="text" name="room_number"/><br/><br/><br/>

                    <input type="submit" name="submit" value="Add Surgery"/>

                </div>';

                }?>
            </div>
        </form><br/><br/>
    </div>
</body>
</html>

