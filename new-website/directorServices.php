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
    <header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <img src="images/logo.png" data-retina="images/logo-retina.png" >
                <nav id="nav" class="clearfix">
                    <div id="nav-container">
                        <ul id="nav-main">
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
                                            <li><a href="#">Palliative First Floor</a></li>
                                            <li><a href="#">Palliative Second Floor</a></li>
                                            <li><a href="#">Palliative Third Floor</a></li>
                                            <li><a href="#">Childrens Unit First Floor</a></li>
                                            <li><a href="#">Childrens Unit Second Floor</a></li>
                                            <li><a href="#">Childrens Unit Third Floor</a></li>
                                            <li><a href="#">Surgical Unit First Floor</a></li>
                                            <li><a href="#">Surgical Unit Second Floor</a></li>
                                            <li><a href="#">Surgical Unit Third Floor</a></li>
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
                            <li><a href="#">Records</a>
                                <ul>
                                    <li><a href="#">tbd</a>
                                        <ul>
                                            <li><a href="">tbd</a></li>
                                            <li><a href="">tbd</a></li>
                                            <li><a href="">tbd</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">tbd</a></li>
                                    <li><a href="">tbd</a></li>
                                    <li><a href="">tbd</a></li>
                                    <li><a href="">tbd</a></li>
                                </ul>
                            </li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <!-- ######################################### Main Image ##############################################-->
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
            <h1><span style="color:red; font-weight: bold">Username</span></h1>
        </header>

    <!-- ######################################### PHP ##############################################-->
    <?php
        require 'database.php';

        //$query = '';
        //$attributes = array();
        //$table = get_table($query, $attributes);

        if (isset($_POST['submit'])) {
            // insert(array(), table)
        }

        mysqli_close($con);
    ?>


    <div>
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
        </style>

         <!-- ######################################### Form ##############################################-->
        <form class="form" method="POST" action="" style="margin-top: 50px">
            <h3 style="text-align: center">Services</h3>

            <hr/>
            
            <div class="row">
                <div class="col left">
                    <h4>Current Services</h4><br/>
                    <?php 
                        echo '<p style="color:red">I will echo table here</p>';
                    ?>
                </div>

                <div class="col right">
                    <h4>Add Service</h4><br/>
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name"/><br/><br/>
                    <label for="cost">Cost: </label>
                    <input type="text" name="cost" id="cost"/><br/><br/><br/>
                    <input type="submit" name="submit" value="Add Service"/><br/><br/>
                </div>
            </div>
        </form><br/><br/>
    </div>
</body>
</html>
