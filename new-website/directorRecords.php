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

        function selectDefault(id, value) {
            var target = document.getElementById(id);
            for (var i=0; i<target.length; i++) {
                if (target.options[i].value == value) {
                    target.selectedIndex = i;
                    return;
                }
            }
        }
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

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type" value="doctor">&nbsp;Doctor</label>

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="technician">&nbsp;Technician</label>

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="nurse">&nbsp;Nurse</label>

        </div>

        <div id="result" style="color: #333333; text-align: left; float: left; width: 20%; margin-top: 45px;margin-left: 41px;top:0px; position: absolute; z-index: 10;">
        </div>
        <div id="header" class="clearfix" >
            <nav id="nav" class="clearfix" style="margin-top: 5px; margin-left: 0px; text-align: left;">
                <div id="nav-container" >
                    <ul id="nav-main" >
                        <li><a href="director.php">Personal Info</a></li>
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
                        </li>
                        <li><a href="directorSurgeries.php">Surgeries</a></li>
                        <li><a href="#" style="font-weight: bold; color: #494949;">Records</a>
                            <ul>
                                <li><a href="directorRecords.php?fac=1">Palliative</a></li>
                                <li><a href="directorRecords.php?fac=2">Childrens Unit</a></li>
                                <li><a href="directorRecords.php?fac=3">Surgical Unit</a></li>
                                <li><a href="directorRecords.php?surg=1">Surgeries</a></li>
                            </ul>
                        </li>
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

            include 'database.php';

            function set_default_select($name, $stored_value, $default_value) {
                $write_value = (empty($stored_value)) ? $default_value : $stored_value;
                echo '<script>selectDefault("'.$name.'", "'.$write_value.'")</script>';
            }

            $date = $_POST['year-month'];
            $year = date("Y", strtotime($date));
            $month = date("m",strtotime($date));

            if (isset($_POST['submit']) && isset($_GET['fac'])) { // dealing with purchases
                $facility = $_GET['fac'];
                $storage_id = $_POST['storage_id'];

                print_r($_POST);
                $query = "SELECT date, supply_name, quantity, cost
                          FROM orders NATURAL JOIN supplies
                          WHERE facility_id=$facility
                          AND storage_id='$storage_id'
                          AND YEAR(date)=$year
                          AND MONTH(date)=$month
                          ORDER BY date";

//                echo $query;

                $attributes = array('date', 'supply_name', 'quantity', 'cost');
                $orders = get_table_w_sum($query, $attributes);

            } else if (isset($_POST['submit']) && isset($_GET['surg'])) { // dealing with surgeries
                $query = "SELECT service_name,
                            patient_name,
                            services_per_visit.start_date,
                            services_per_visit.end_date,
                            floor_number
                          FROM services_per_visit, services, visits, patients
                          WHERE service_complexity='surgery'
                          AND YEAR(services_per_visit.start_date)=$year
                          AND MONTH(services_per_visit.start_date)=$month
                          AND services_per_visit.service_id=services.service_id
                          AND services_per_visit.visits_id=visits.visits_id
                          AND visits.patient_id = patients.patient_id
                          ORDER BY services_per_visit.start_date";
                $result = mysqli_query($con, $query) or die('Unable to execute get table query <br/>' . $query);

                $surgeries = '<table>';
                $surgeries .= '<tr>';
                $surgeries .= "<th class='output h'>Surgery</th>";
                $surgeries .= "<th class='output h'>Patient</th>";
                $surgeries .= "<th class='output h'>Begins</th>";
                $surgeries .= "<th class='output h'>Ends</th>";
                $surgeries .= "<th class='output h'>Floor</th>";
                $surgeries .= '</tr>';

                while ($row = mysqli_fetch_assoc($result)) {
                    $surgeries .= '<tr>';
                    $surgeries .= '<td class="output">'.$row['service_name'].'</td>';
                    $surgeries .= '<td class="output">'.$row['patient_name'].'</td>';
                    $surgeries .= '<td class="output">'.$row['start_date'].'</td>';
                    $surgeries .= '<td class="output">'.$row['end_date'].'</td>';
                    $surgeries .= '<td class="output">'.$row['floor_number'].'</td>';
                    $surgeries .= '</tr>';
                }
                $surgeries .= '</table>';
            }
        ?>

        <div style="text-align:center">

            <!-- ######################################### Style ##############################################-->
            <style scoped>
                a { float: left; color: white; margin: 5px; font-size: 20pt; text-decoration: none; }
                h3 { font-weight: bold; font-size: 16pt; }
                h4 { font-weight: bold }
                label { float: left; }
                .nav { margin: 0 auto; padding: 40px; margin-bottom: 35px; width: 139px; height: 40px; background-color: #5B94AB; color:white; }
                .form { background-color: #5B94AB; color: white; text-shadow: 1px 1px 1px black; margin-top: 30px; margin-bottom: 50px; padding: 50px; border: 4px double white; width: 1070px; clear: both; }
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
            <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] . "?fac=$facility" ?>">
                <h3>Records</h3><br/>

                <hr/>

                <div class="row">
                    <div class="col left">
                        <h4>Record</h4><br/>
                        <?php
                            echo $surgeries;
                        ?>
                    </div>

                    <div class="col right">
                        <h4>Select Criteria</h4><br/><br/>

                        <label for="year-month">Year-Month: </label>
                        <input id="year-month" name="year-month" type="month" value="<?php echo $date ?>"/><br/><br/><br/>

                        <input type="submit" name="submit" value="View Record"/>
                    </div><br/>
                </div>
            </form>
        </div>
</body>
</html>
