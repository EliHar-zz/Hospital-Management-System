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
                            <li><a href="patients.html">Patients</a></li>
                            <li><a href="staff.html">Staff</a></li>
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
    <!-- ############################################################################## my code begins here -->
    <div style="text-align:center">
        <style scoped>
            a { float: left; color: white; margin: 5px; font-size: 20pt; text-decoration: none; }
            h3 { font-weight: bold; font-size: 16pt; }
            h4 { font-weight: bold }
            label { float: left; }
            .nav { margin: 0 auto; padding: 40px; margin-bottom: 35px; width: 139px; height: 40px; background-color: #5B94AB; color:white; }
            .form { margin: 30px; padding: 50px; border: 4px double black; width: 1000px; clear: both; }
            .row { display: flex; }
            .col { flex: 1; width: 300px; min-height: 250px; }
            .col.left { padding-right: 30px; border-right: 1px solid black; }
            .col.right { padding-left: 30px; }
        </style>
        <header id="main-header" class="clearfix">
            <div id="header-full">
                <div id="header" class="clearfix">
                    <nav id="nav" class="clearfix">
                        <div id="nav-container">
                            <ul id="nav-main">
                                <li><a href="director.php">Personal Info</a></li>
                                <li><a href="directorServices.php">Services</a></li>
                                <li><a href="#">Supplies</a>
                                    <ul>
                                        <li><a href="directorStorage.php">Storage Units</a></li>
                                        <li><a href="directorSupplies.php">Supply Rooms</a></li>
                                        <li><a href="directorKitchen.php">Kitchens</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">tbd</a>
                                    <ul>
                                        <li><a href="#">tbd</a>
                                            <ul>
                                                <li><a href="index.html">tbd</a></li>
                                                <li><a href="../red/index.html">tbd</a></li>
                                                <li><a href="../orange/index.html">tbd</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">tbd</a></li>
                                        <li><a href="faq.html">tbd</a></li>
                                        <li><a href="fullpage.html">tbd</a></li>
                                        <li><a href="typography.html">tbd</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">tbd</a></li>
                                <li><a href="patients.html">tbd</a></li>
                                <li><a href="staff.html">tbd</a></li>
                                <li><a href="contact.html">tbd</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <form class="form" id="" method="POST" action="">
            <h3>Supply Room</h3><br/>

            <script>document.write(chooseFacility())</script>
            <label for="floor" style="font-weight:bold">Floor: </label>
            <select>
                <script>populateSelect(1,21,1)</script>
            </select><br/><br/>
            
            <hr/>

            <div class="row">
                <div class="col first">
                    <h4>Storage Unit</h4><br/>
                    <p class="todo">Must echo supplies in facility's storage_unit</p><br/>
                </div>

                <div class="col last">
                    <h4>Add To Storage Unit</h4><br/>
                    <p class="todo">Must echo supplies from vendor_has_supplies with checkbox for each</p><br/>
                    <button type="button">Add Supplies</button>
                </div><br/>
            </div>

            <hr>
        </form>

    </div>
</body>
</html>
