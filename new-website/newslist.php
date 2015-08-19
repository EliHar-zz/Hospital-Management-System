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
        $('#tabs-service').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
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
                            <li class="current-menu-item"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="newslist.php">News List</a></li>
                                    <li><a href="newsdetail.php">News Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Other</a>
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
        <header id="title-content" class="clearfix" style="background:url(images/img-8.jpg) no-repeat 50% 0 fixed">
            <h1><span>Latest Blog</span></h1>
            <aside>
                <a href="#content-side-title" class="link-side-title"><span></span><span></span><span></span></a>
                <div id="content-side-title" class="title-testimonial">
                    <div class="side-title">
                        <h3>Patient Testimonial</h3>
                        <img src="images/img-21.jpg" data-retina="images/img-21-retina.jpg" alt="John Doe" />
                        <article>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et neque eget metus volutpat mollis volutpat sit amet est. Nullam at tellus diam. Cras porttitor</p>
                            <h4>- Jane Doe</h4>
                        </article>
                    </div>
                </div>
            </aside>
        </header>
        <div id="main-content">
            <article class="post type-post status-publish format-standard hentry news static-page clearfix sticky">
                <header class="clearfix">
                    <h2 class="title-news"><a href="#">This is sample of sticky Post</a></h2>
                </header>
                <figure><img src="images/img-23.jpg" data-retina="images/img-23-retina.jpg" alt="We are closed our first Restaurant" /></figure>				
                <div class="news-wrapper">
                    <p>Pellentesque imperdiet est turpis, et dictum turpis tempor et. Donec sit amet erat ut sapien ultricies consequat vel quis nisi. Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                    <p>Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                </div>
                <div class="news-info-bar clearfix">
                    <time datetime="2013-10-04">October 4, 2013</time>
                    <a href="#" class="link-comment">Comments (3)</a>
                    <strong class="news-info">
                        <a href="#" title="Health Tips" >Health Tips</a>, <a href="#" title="Medical" >Medical</a>
                    </strong>
                    <a href="#" class="more-link">Read More</a>
                </div>
            </article>
            <article class="post type-post status-publish format-standard hentry news static-page clearfix">
                <header class="clearfix">
                    <h2 class="title-news"><a href="#">Blog title sample post is here</a></h2>
                </header>
                <figure><img src="images/img-23.jpg" data-retina="images/img-23-retina.jpg" alt="We are closed our first Restaurant" /></figure>				
                <div class="news-wrapper">
                    <p>Pellentesque imperdiet est turpis, et dictum turpis tempor et. Donec sit amet erat ut sapien ultricies consequat vel quis nisi. Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                    <p>Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                </div>
                <div class="news-info-bar clearfix">
                    <time datetime="2013-10-04">October 4, 2013</time>
                    <a href="#" class="link-comment">Comments (3)</a>
                    <strong class="news-info">
                        <a href="#" title="Health Tips" >Health Tips</a>, <a href="#" title="Medical" >Medical</a>
                    </strong>
                    <a href="#" class="more-link">Read More</a>
                </div>
            </article>
            <article class="post type-post status-publish format-standard hentry news static-page clearfix">
                <header class="clearfix">
                    <h2 class="title-news"><a href="#">Blog title sample post is here</a></h2>
                </header>
                <figure><img src="images/img-23.jpg" data-retina="images/img-23-retina.jpg" alt="We are closed our first Restaurant" /></figure>				
                <div class="news-wrapper">
                    <p>Pellentesque imperdiet est turpis, et dictum turpis tempor et. Donec sit amet erat ut sapien ultricies consequat vel quis nisi. Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                    <p>Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                </div>
                <div class="news-info-bar clearfix">
                    <time datetime="2013-10-04">October 4, 2013</time>
                    <a href="#" class="link-comment">Comments (3)</a>
                    <strong class="news-info">
                        <a href="#" title="Health Tips" >Health Tips</a>, <a href="#" title="Medical" >Medical</a>
                    </strong>
                    <a href="#" class="more-link">Read More</a>
                </div>
            </article>
            <article class="post type-post status-publish format-standard hentry news static-page clearfix">
                <header class="clearfix">
                    <h2 class="title-news"><a href="#">Blog Post without Featured Image</a></h2>
                </header>			
                <div class="news-wrapper full">
                    <p>Pellentesque imperdiet est turpis, et dictum turpis tempor et. Donec sit amet erat ut sapien ultricies consequat vel quis nisi. Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus. Nullam sit amet nulla tristique, fringilla augue ut, mattis nisi. Nullam fermentum ultrices eros.</p>
                    <p>Morbi tincidunt lacus eget mi congue bibendum. Praesent viverra lacinia varius. Curabitur posuere id risus id tempus.</p>
                </div>
                <div class="news-info-bar clearfix">
                    <time datetime="2013-10-04">October 4, 2013</time>
                    <a href="#" class="link-comment">Comments (3)</a>
                    <strong class="news-info">
                        <a href="#" title="Health Tips" >Health Tips</a>, <a href="#" title="Medical" >Medical</a>
                    </strong>
                    <a href="#" class="more-link">Read More</a>
                </div>
            </article>
        </div>
        <div id="sidebar">
            <aside class="widget-container">
                <div class="widget-wrapper clearfix">
				    <h3 class="widget-title">About Happy Health</h3>
				    <article class="text-widget ">
					   <img src="images/img-24.jpg" alt="About Us" class="imgframe" />
				        <p>We make amazing design &amp; application with our professional team.</p>
                        <p>Integer adipiscing, elit vel malesuada pharetra, nunc sem placerat erat, sed consequat lectus diam vel nunc. Sed pulvinar est non neque porttitor mollis. Aenean placerat, dui laoreet posuere accumsan</p>
                        <ul>
				            <li><strong>Address:</strong> P Sherman, 42 Wallaby Way, Sydney, Australia</li>
				            <li><strong>Email:</strong> hello@cubicthemes.com</li>
				            <li><strong>Phone:</strong> +62 8 45 6868</li>
							</ul>	
					<iframe class="map-area" src="http://maps.google.com/?ie=UTF8&amp;ll=37.055177,-95.668945&amp;spn=11.79095,12.150879&amp;t=m&amp;z=6&amp;output=embed"></iframe>
		</article>		<a href="http://cubicthemes.com/develop/veteranfood/about-us/" class="button-more">More About Us</a>

				</div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
            <aside class="widget-container">
				<div class="widget-wrapper clearfix">
				    <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('#tabs-widget').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 500 } });
                    });
                    </script>
                    <div id="tabs-widget">
                    <ul class="tabs-widget">
                        <li class="first-tabs"><a href="#panel1">Testimonial</a></li>
                        <li class="last-tabs"><a href="#panel2">Flickr</a></li>
                    </ul>
                    <div class="ui-tabs-panel" id="panel1">
                        <article class="text-widget">
                            <img src="images/img-28.jpg" data-retina="images/img-28-retina.jpg" alt="Susi Blondeabis" class="imgframe alignleft testimonial" />				
                            <div class="testimonial-header">
                                <h4>Susi Blondeabis</h4>
                                <h5>Cubicthemes</h5>
                            </div>
                            <blockquote><p>Cras posuere pulvinar faucibus. Vivamus ut ullamcorper augue. Praesent vel odio non lorem iaculis interdum in volutpat lorem. Maecenas facilisis turpis nec faucibus venenatis. Phasellus dolor nulla, fringilla sed dui vitae, dignissim fermentum justo. Proin et vestibulum felis. Donec dictum est est, eu tempor mi tincidunt a.</p>
                            </blockquote>
                        </article>			
                    </div>
                    <div class="ui-tabs-panel" id="panel2">
                        <div class="flickr">
				        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;&amp;layout=h&amp;source=user&amp;user=71168470@N08&amp;size=t"></script> 
				        </div>
				    </div>
                    </div>
                </div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
        </div>
    </div>
    <div id="content-footer" class="clearfix">
        <p id="sub-title">Check some of our services, <a href="#">click here</a> to get more information about all the services</p>
        <div id="tabs-service" class="clearfix">
            <ul id="nav-tabs-service" class="clearfix">
                <li><strong><span></span><a href="#panel-service-1"><img src="images/icon-services-1-retina.png" alt="General Checkup" /><em>General Checkup</em></a></strong></li>
                <li><strong><span></span><a href="#panel-service-2"><img src="images/icon-services-2-retina.png" alt="Dentist" /><em>Dentist</em></a></strong></li>
                <li><strong><span></span><a href="#panel-service-3"><img src="images/icon-services-3-retina.png" alt="Pharmacy" /><em>Pharmacy</em></a></strong></li>
                <li><strong><span></span><a href="#panel-service-4"><img src="images/icon-services-4-retina.png" alt="Nuersery" /><em>Nursery &amp; Ward</em></a></strong></li>
                <li><strong><span></span><a href="#panel-service-5"><img src="images/icon-services-5-retina.png" alt="Heart Attack" /><em>Heart Attack</em></a></strong></li>
                <li><strong><span></span><a href="#panel-service-6"><img src="images/icon-services-6-retina.png" alt="Diagnostic Center" /><em>Diagnostic Center</em></a></strong></li>
            </ul>
            <div id="panel-tabs-service">
                <div class="tabs-ui-panel" id="panel-service-1">
                    <article class="static-page clearfix">
                        <header>
                            <h4 class="title-tabs-service">General Checkup</h4>
                            <figure><img src="images/img-25.jpg" data-retina="images/img-25-retina.jpg" alt="General Checkup" /></figure>
                        </header>
                        <div class="content-tabs-service">
                            <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Vivamus risus elit, mattis in pulvinar vitae, porttitor at magna.</p>
                            <p>Fusce sit amet hendrerit mi. In porttitor ut elit non tempus. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim.</p>
                            <a href="#" class="button-more">More Info</a>
                        </div>
                    </article>
                </div>
                <div class="tabs-ui-panel" id="panel-service-2">
                    <article class="static-page clearfix">
                        <header>
                            <h4 class="title-tabs-service">Dentist</h4>
                            <figure><img src="images/img-26.jpg" data-retina="images/img-26-retina.jpg" alt="Dentist" /></figure>
                        </header>
                        <div class="content-tabs-service">
                            <p>Fusce sit amet hendrerit mi. In porttitor ut elit non tempus. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim.</p>
                            <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus.</p>
                            <a href="#" class="button-more">More Info</a>
                        </div>
                    </article>
                </div>
                <div class="tabs-ui-panel" id="panel-service-3">
                    <article class="static-page clearfix">
                        <header>
                            <h4 class="title-tabs-service">Pharmacy</h4>
                            <figure><img src="images/img-27.jpg" data-retina="images/img-27-retina.jpg" alt="Pharmacy" /></figure>
                        </header>
                        <div class="content-tabs-service">
                            <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Vivamus risus elit, mattis in pulvinar vitae, porttitor at magna.</p>
                            <p>Fusce sit amet hendrerit mi. In porttitor ut elit non tempus. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim.</p>
                            <a href="#" class="button-more">More Info</a>
                        </div>
                    </article>
                </div>
                <div class="tabs-ui-panel" id="panel-service-4">
                    <article class="static-page clearfix">
                        <header>
                            <h4 class="title-tabs-service">Nursery &amp; Ward</h4>
                            <figure><img src="images/img-26.jpg" data-retina="images/img-26-retina.jpg" alt="Dentist" /></figure>
                        </header>
                        <div class="content-tabs-service">
                            <p>Fusce sit amet hendrerit mi. In porttitor ut elit non tempus. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim.</p>
                            <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus.</p>
                            <a href="#" class="button-more">More Info</a>
                        </div>
                    </article>
                </div>
                <div class="tabs-ui-panel" id="panel-service-5">
                    <article class="static-page clearfix">
                        <header>
                            <h4 class="title-tabs-service">Heart Attack</h4>
                            <figure><img src="images/img-26.jpg" data-retina="images/img-26-retina.jpg" alt="Dentist" /></figure>
                        </header>
                        <div class="content-tabs-service">
                            <p>Fusce sit amet hendrerit mi. In porttitor ut elit non tempus. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim.</p>
                            <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus.</p>
                            <a href="#" class="button-more">More Info</a>
                        </div>
                    </article>
                </div>
                <div class="tabs-ui-panel" id="panel-service-6">
                    <article class="static-page clearfix">
                        <header>
                            <h4 class="title-tabs-service">Diagnostic Center</h4>
                            <figure><img src="images/img-27.jpg" data-retina="images/img-27-retina.jpg" alt="Pharmacy" /></figure>
                        </header>
                        <div class="content-tabs-service">
                            <p>Sed vel condimentum augue, in rutrum mi. Curabitur lacinia dolor tellus, ac ullamcorper est pharetra quis. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Vivamus risus elit, mattis in pulvinar vitae, porttitor at magna.</p>
                            <p>Fusce sit amet hendrerit mi. In porttitor ut elit non tempus. Pellentesque et suscipit ligula, sed condimentum lectus. Pellentesque non cursus nisl. Nam fermentum nibh vitae quam luctus vulputate. Vestibulum posuere libero a adipiscing dignissim.</p>
                            <a href="#" class="button-more">More Info</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
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