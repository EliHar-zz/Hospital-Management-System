<?php
// Start the session
session_start();
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
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="newslist.php">News List</a></li>
                                    <li><a href="newsdetail.php">News Detail</a></li>
                                </ul>
                            </li>
                            <li class="current-menu-item"><a href="#">Other</a>
                                <ul>
                                    <li><a href="#">Color Variation</a>
                                        <ul>
                                            <li><a href="index.php">Blue</a></li>
                                            <li><a href="../red/index.html">Red</a></li>
                                            <li><a href="../orange/index.html">Orange</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="fullpage.php">Full Page no Sidebar</a></li>
                                    <li><a href="typography.php">Typography</a></li>
                                </ul>
                            </li>
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
    </header>
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-31.jpg) no-repeat 50% 0 fixed">
            <h1><span>Hospital Interior</span></h1>
            <aside>
                <a href="#content-side-title" class="link-side-title"><span></span><span></span><span></span></a>
                <div id="content-side-title" class="title-news">
                    <div class="side-title">
                        <h3>Latest News</h3>
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="slides-image">
                                        <img src="images/img-22.jpg" data-retina="images/img-22-retina.jpg" alt="" />
                                    </div>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                    <h5>18 August 2013</h5>
                                </li>
                                <li>
                                    <div class="slides-image">
                                        <img src="images/img-22.jpg" data-retina="images/img-22-retina.jpg" alt="" />
                                    </div>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                    <h5>18 August 2013</h5>
                                </li>
                                <li>
                                    <div class="slides-image">
                                        <img src="images/img-22.jpg" data-retina="images/img-22-retina.jpg" alt="" />
                                    </div>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                    <h5>18 August 2013</h5>
                                </li>
                                <li>
                                    <div class="slides-image">
                                        <img src="images/img-22.jpg" data-retina="images/img-22-retina.jpg" alt="" />
                                    </div>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                    <h5>18 August 2013</h5>
                                </li>
                                <li>
                                    <div class="slides-image">
                                        <img src="images/img-22.jpg" data-retina="images/img-22-retina.jpg" alt="" />
                                    </div>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                    <h5>18 August 2013</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </header>
        <div id="full-width">
            <article class="static-page">
                <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl.</p>
            </article>
            <ul id="list-gallery-detail">
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-51.jpg" data-retina="images/img-51-retina.jpg" alt="Operation Room with Patient inside" />
                    <br />
                    <strong>Operation Room with Patient inside</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-52.jpg" data-retina="images/img-52-retina.jpg" alt="Pharmacy Room" />
                    <br />
                    <strong>Pharmacy Room</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-51.jpg" data-retina="images/img-51-retina.jpg" alt="Some Green Tea" />
                    <br />
                    <strong>Some Green Tea</strong>
                    </a>
                </li>
                <li class="last">
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-52.jpg" data-retina="images/img-52-retina.jpg" alt="Pharmacy Room" />
                    <br />
                    <strong>Pharmacy Room</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-51.jpg" data-retina="images/img-51-retina.jpg" alt="Operation Room with Patient inside" />
                    <br />
                    <strong>Operation Room with Patient inside</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-52.jpg" data-retina="images/img-52-retina.jpg" alt="Pharmacy Room" />
                    <br />
                    <strong>Pharmacy Room</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-51.jpg" data-retina="images/img-51-retina.jpg" alt="Some Green Tea" />
                    <br />
                    <strong>Some Green Tea</strong>
                    </a>
                </li>
                <li class="last">
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-52.jpg" data-retina="images/img-52-retina.jpg" alt="Pharmacy Room" />
                    <br />
                    <strong>Pharmacy Room</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-51.jpg" data-retina="images/img-51-retina.jpg" alt="Operation Room with Patient inside" />
                    <br />
                    <strong>Operation Room with Patient inside</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-52.jpg" data-retina="images/img-52-retina.jpg" alt="Pharmacy Room" />
                    <br />
                    <strong>Pharmacy Room</strong>
                    </a>
                </li>
                <li>
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-51.jpg" data-retina="images/img-51-retina.jpg" alt="Some Green Tea" />
                    <br />
                    <strong>Some Green Tea</strong>
                    </a>
                </li>
                <li class="last">
                    <a href="images/slide-1.jpg" data-rel="prettyPhoto[gallery]">
                        <img src="images/img-52.jpg" data-retina="images/img-52-retina.jpg" alt="Pharmacy Room" />
                    <br />
                    <strong>Pharmacy Room</strong>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="content-footer" class="clearfix">
        <h4 id="title-footer"><span>Our Doctor Specialist</span></h4>
        <p id="sub-title">We handpicked <a href="#">our doctor to make sure</a> they are perfect with the jobdesk</p>
        <ul id="list-doctor" class="clearfix">
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. John Doe</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Jane Precise</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Robert Newton</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>Rebecca</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>John Staton</strong>
                <span>Anesthesiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-20.jpg" data-retina="images/img-20-retina.jpg" alt="" />
                <strong>Sumirah</strong>
                <span>General Doctor</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. John Doe</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Jane Precise</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Robert Newton</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>Rebecca</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>John Staton</strong>
                <span>Anesthesiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-20.jpg" data-retina="images/img-20-retina.jpg" alt="" />
                <strong>Sumirah</strong>
                <span>General Doctor</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. John Doe</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Jane Precise</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Robert Newton</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>Rebecca</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>John Staton</strong>
                <span>Anesthesiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-20.jpg" data-retina="images/img-20-retina.jpg" alt="" />
                <strong>Sumirah</strong>
                <span>General Doctor</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="three-footer" class="clearfix">
        <article class="clearfix">
            <em><img src="images/icon-footer-1.png" data-retina="images/icon-footer-1-retina.png" alt="" /></em>
            <strong>Call Us Now</strong>
            <span>+62-4056-6787 or +62-345-356</span>
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