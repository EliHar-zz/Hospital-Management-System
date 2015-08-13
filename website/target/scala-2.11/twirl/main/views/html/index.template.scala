
package views.html

import play.twirl.api._
import play.twirl.api.TemplateMagic._


     object index_Scope0 {
import models._
import controllers._
import play.api.i18n._
import views.html._
import play.api.templates.PlayMagic._
import java.lang._
import java.util._
import scala.collection.JavaConversions._
import scala.collection.JavaConverters._
import play.core.j.PlayMagicForJava._
import play.mvc._
import play.data._
import play.api.data.Field
import play.mvc.Http.Context.Implicit._

class index extends BaseScalaTemplate[play.twirl.api.HtmlFormat.Appendable,Format[play.twirl.api.HtmlFormat.Appendable]](play.twirl.api.HtmlFormat) with play.twirl.api.Template0[play.twirl.api.HtmlFormat.Appendable] {

  /**/
  def apply():play.twirl.api.HtmlFormat.Appendable = {
    _display_ {
      {


Seq[Any](format.raw/*1.1*/("""<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Happyhealth - Stay Healthy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href=""""),_display_(/*9.60*/routes/*9.66*/.Assets.versioned("stylesheets/style.css")),format.raw/*9.108*/("""" />
	<link rel="stylesheet" type="text/css" media="all" href=""""),_display_(/*10.60*/routes/*10.66*/.Assets.versioned("stylesheets/prettyPhoto.css")),format.raw/*10.114*/("""" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href=""""),_display_(/*14.60*/routes/*14.66*/.Assets.versioned("stylesheets/stylemobile.css")),format.raw/*14.114*/("""" />
	<!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
	<script src=""""),_display_(/*16.16*/routes/*16.22*/.Assets.versioned("javascripts/modernizr.js")),format.raw/*16.67*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*17.16*/routes/*17.22*/.Assets.versioned("javascripts/jquery.js")),format.raw/*17.64*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*18.19*/routes/*18.25*/.Assets.versioned("javascripts/jquery-ui.js")),format.raw/*18.70*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*19.19*/routes/*19.25*/.Assets.versioned("javascripts/jquery.parallax-1.1.3.js")),format.raw/*19.82*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*20.19*/routes/*20.25*/.Assets.versioned("javascripts/jquery.localscroll-1.2.7-min.js")),format.raw/*20.89*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*21.19*/routes/*21.25*/.Assets.versioned("javascripts/jquery.scrollTo-1.4.2-min.html")),format.raw/*21.88*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*22.16*/routes/*22.22*/.Assets.versioned("javascripts/jquery.flexslider.js")),format.raw/*22.75*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*23.16*/routes/*23.22*/.Assets.versioned("javascripts/jquery.prettyPhoto.js")),format.raw/*23.76*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*24.16*/routes/*24.22*/.Assets.versioned("javascripts/jquery.retina.js")),format.raw/*24.71*/("""" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function ()"""),format.raw/*26.31*/("""{"""),format.raw/*26.32*/("""
        """),format.raw/*27.9*/("""$("a[data-rel^='prettyPhoto']").prettyPhoto("""),format.raw/*27.53*/("""{"""),format.raw/*27.54*/("""
			"""),format.raw/*28.4*/("""default_width: 600,
			default_height: 420,
			social_tools: false
		"""),format.raw/*31.3*/("""}"""),format.raw/*31.4*/(""");
        $('#slideshow-tabs').tabs("""),format.raw/*32.35*/("""{"""),format.raw/*32.36*/(""" """),format.raw/*32.37*/("""show: """),format.raw/*32.43*/("""{"""),format.raw/*32.44*/(""" """),format.raw/*32.45*/("""effect: "fade", duration: 200 """),format.raw/*32.75*/("""}"""),format.raw/*32.76*/(""", hide: """),format.raw/*32.84*/("""{"""),format.raw/*32.85*/(""" """),format.raw/*32.86*/("""effect: "fade", duration: 300 """),format.raw/*32.116*/("""}"""),format.raw/*32.117*/(""" """),format.raw/*32.118*/("""}"""),format.raw/*32.119*/(""");
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) || ($(window).width() < 1024) ) """),format.raw/*33.135*/("""{"""),format.raw/*33.136*/("""	
		"""),format.raw/*34.3*/("""}"""),format.raw/*34.4*/(""" """),format.raw/*34.5*/("""else """),format.raw/*34.10*/("""{"""),format.raw/*34.11*/("""
            """),format.raw/*35.13*/("""$('#slideshow-tabs .ui-tabs-panel').parallax("50%", 0.5);
            $('.content-home-1').parallax("0", 0.5);
            $('.content-home-2').parallax("100%", 0.5);
            $('.content-home-3').parallax("0", 0.5);
        """),format.raw/*39.9*/("""}"""),format.raw/*39.10*/("""
		"""),format.raw/*40.3*/("""$('a[data-rel]').each(function() """),format.raw/*40.36*/("""{"""),format.raw/*40.37*/("""
			"""),format.raw/*41.4*/("""$(this).attr('rel', $(this).data('rel'));
		"""),format.raw/*42.3*/("""}"""),format.raw/*42.4*/(""");
		$('img[data-retina]').retina("""),format.raw/*43.32*/("""{"""),format.raw/*43.33*/("""checkIfImageExists: true"""),format.raw/*43.57*/("""}"""),format.raw/*43.58*/(""");
		$(".open-menu").click(function()"""),format.raw/*44.35*/("""{"""),format.raw/*44.36*/("""
		    """),format.raw/*45.7*/("""$("body").addClass("no-move");
		"""),format.raw/*46.3*/("""}"""),format.raw/*46.4*/(""");
		$(".close-menu, .close-menu-big").click(function()"""),format.raw/*47.53*/("""{"""),format.raw/*47.54*/("""
		    """),format.raw/*48.7*/("""$("body").removeClass("no-move");
		"""),format.raw/*49.3*/("""}"""),format.raw/*49.4*/(""");
	"""),format.raw/*50.2*/("""}"""),format.raw/*50.3*/(""");
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
                <a href="#" id="logo"><img src=""""),_display_(/*62.50*/routes/*62.56*/.Assets.versioned("images/logo.png")),format.raw/*62.92*/("""" data-retina=""""),_display_(/*62.108*/routes/*62.114*/.Assets.versioned("images/logo-retina.png")),format.raw/*62.157*/("""" alt="Happy Health - All Your Health Need" /></a>
                <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li class="current-menu-item"><a href="index.scala.html">Home</a></li>
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
                                            <li><a href="http://designeek.com/template/happyhealth/blue/">Blue</a></li>
                                            <li><a href="index-2.html">Red</a></li>
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
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="team.html">Doctor</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
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
                <a href="#panel-4"><strong>Happy Health near You</strong><br />
                <span>100 Branch in 5 Country, it's easy to find us</span>
                </a>
            </li>
		</ul>
		<div class="ui-tabs-panel" id="panel-1" style="background:url("""),_display_(/*128.66*/routes/*128.72*/.Assets.versioned("images/slide-1.jpg")),format.raw/*128.111*/(""") no-repeat 50% 0 fixed">
            <div class="tabs-container">
                <article>
                    <h2>Our Commitment to make you healthy</h2>
                    <div class="content-tabs clearfix">
                        <figure>
                            <img src=""""),_display_(/*134.40*/routes/*134.46*/.Assets.versioned("images/img-1.jpg")),format.raw/*134.83*/("""" data-retina=""""),_display_(/*134.99*/routes/*134.105*/.Assets.versioned("images/img-1-retina.jpg")),format.raw/*134.149*/("""" alt="" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Pallentesque lobortus et tellus.</p>
                        <a href="#" class="button-more-slide">Read More</a>
                    </div>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-2" style="background:url("""),_display_(/*142.72*/routes/*142.78*/.Assets.versioned("images/slide-2.jpg")),format.raw/*142.117*/(""") no-repeat 50% 0 fixed">
            <div class="tabs-container">
                <article>
                    <h2>Professional Doctor</h2>
                    <div class="content-tabs clearfix">
                        <iframe src="http://www.youtube.com/embed/LrUvu1mlWco" allowfullscreen></iframe>
                        <p>Vivamus pretium justo dui, nec tincidunt libero aliquet et. Integer nec tortor nisi. Aliquam erat volutpat. Integer lectus neque, malesuada condimentum dolor sed, tincidunt viverra massa. Etiam varius at neque ac iaculis. Duis diam turpis, mollis at aliquam quis, adipiscing quis magna.</p>
                        <a href="#" class="button-more-slide">More Doctor</a>
                    </div>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-3" style="background:url("""),_display_(/*154.72*/routes/*154.78*/.Assets.versioned("images/slide-3.jpg")),format.raw/*154.117*/(""") no-repeat 50% 0 fixed">
        </div>
        <div class="ui-tabs-panel" id="panel-4" style="background:url("""),_display_(/*156.72*/routes/*156.78*/.Assets.versioned("images/slide-4.jpg")),format.raw/*156.117*/(""") no-repeat 50% 0 fixed">
            <div class="tabs-container">
                <article>
                    <h2>More than 100 Branch in 5 Country</h2>
                </article>
            </div>
        </div>
        <div id="widget-slider-container">
            <div id="widget-slider">
                <aside class="widget-container">
                    <h3 class="widget-title">Opening Hour</h3>
                    <ul class="nav-schedule">
                        <li class="clearfix"><strong>Mon</strong> <span>7am - 11am</span></li>
				        <li class="clearfix"><strong>Tue - Wed</strong> <span>11am - 10pm</span></li>
                        <li class="clearfix"><strong>Thu</strong> <span>10am - 9pm</span></li>
				        <li class="clearfix"><strong>Fri</strong> <span>11am - 8pm</span></li>
                        <li class="clearfix"><strong>Sat</strong> <span>9am - 3pm</span></li>
                        <li class="clearfix"><strong>Sun</strong> <span>9am - 4pm</span></li>
				        <li class="clearfix"><strong>Public Holiday</strong> <span>8am - 5pm</span></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <article id="intro" class="clearfix">
        <a href="#" id="button-more-intro">Contact Us Now</a>
        <h1>Hello!! and Welcome to <strong>Healthy Health</strong>, a number one place to take care you and your family health. Browse our website to find all cool information.</h1>       
    </article>
    <div class="content-home content-home-1" style="background:url("""),_display_(/*184.69*/routes/*184.75*/.Assets.versioned("images/img-2.jpg")),format.raw/*184.112*/(""") no-repeat 0 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>Buka Sithik Joss</span></h2>
            <h3>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <ul>
                <li>Cras erat augue, congue sed egestas in</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li> 
                <li>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus.</li> 
                <li>Cras erat augue, congue sed egestas in, tincidunt sed odio.</li>
            </ul>
            <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <a href="#" class="button-more">About Us</a>
        </article>
    </div>
    <div class="content-home content-home-2 odd right" style="background:url("""),_display_(/*199.79*/routes/*199.85*/.Assets.versioned("images/img-3.jpg")),format.raw/*199.122*/(""") no-repeat 100% 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>We Have Tons of Doctor and Professor</span></h2>
            <h3>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus.</p>
            <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <a href="#" class="button-more">Our Doctor</a>
        </article>
    </div>
    <div class="content-home content-home-3" style="background:url("""),_display_(/*208.69*/routes/*208.75*/.Assets.versioned("images/img-4.jpg")),format.raw/*208.112*/(""") no-repeat 0 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>From Dentist to Orthopedy we have everything</span></h2>
            <h3>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <a href="#" class="button-more">About Us</a>
        </article>
    </div>
    <div id="box-homepage-container" style="background:url("""),_display_(/*217.61*/routes/*217.67*/.Assets.versioned("images/img-5.jpg")),format.raw/*217.104*/(""") no-repeat 50% 0 fixed">
        <div id="box-homepage" class="clearfix">
            <article>
                <figure>
                    <img src=""""),_display_(/*221.32*/routes/*221.38*/.Assets.versioned("images/img-6.jpg")),format.raw/*221.75*/("""" data-retina=""""),_display_(/*221.91*/routes/*221.97*/.Assets.versioned("images/img-6-retina.jpg")),format.raw/*221.141*/("""" alt="Professional Doctor and Nurse" />
                </figure>
                <h3>Professional Doctor and Nurse</h3>
                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit.</p>
                <a href="#" class="more-info">More Info About Our Doctor</a>
            </article>
            <article>
                <figure>
                    <img src=""""),_display_(/*229.32*/routes/*229.38*/.Assets.versioned("images/img-7.jpg")),format.raw/*229.75*/("""" data-retina=""""),_display_(/*229.91*/routes/*229.97*/.Assets.versioned("images/img-7-retina.jpg")),format.raw/*229.141*/("""" alt="Find Us Everywhere" />
                </figure>
                <h3>Find Us Everywhere</h3>
                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit.</p>
                <a href="#" class="more-info">Find Our Clinic</a>
            </article>
            <article class="last">
                <figure>
                    <img src=""""),_display_(/*237.32*/routes/*237.38*/.Assets.versioned("images/img-6.jpg")),format.raw/*237.75*/("""" data-retina=""""),_display_(/*237.91*/routes/*237.97*/.Assets.versioned("images/img-6-retina.jpg")),format.raw/*237.141*/("""" alt="Professional Doctor and Nurse" />
                </figure>
                <h3>Blog</h3>
                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit.</p>
                <a href="#" class="more-info">Visit Our Blog</a>
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
</html>"""))
      }
    }
  }

  def render(): play.twirl.api.HtmlFormat.Appendable = apply()

  def f:(() => play.twirl.api.HtmlFormat.Appendable) = () => apply()

  def ref: this.type = this

}


}

/**/
object index extends index_Scope0.index
              /*
                  -- GENERATED --
                  DATE: Tue Aug 11 17:08:52 EDT 2015
                  SOURCE: /home/matthew/Hospital-Management-System/website/app/views/index.scala.html
                  HASH: cb1c52a1ae2cfa170bb4a0fba040c502629f3b02
                  MATRIX: 827->0|1217->364|1231->370|1294->412|1386->477|1401->483|1471->531|1957->990|1972->996|2042->1044|2189->1164|2204->1170|2270->1215|2348->1266|2363->1272|2426->1314|2507->1368|2522->1374|2588->1419|2669->1473|2684->1479|2762->1536|2843->1590|2858->1596|2943->1660|3024->1714|3039->1720|3123->1783|3201->1834|3216->1840|3290->1893|3368->1944|3383->1950|3458->2004|3536->2055|3551->2061|3621->2110|3749->2210|3778->2211|3815->2221|3887->2265|3916->2266|3948->2271|4047->2343|4075->2344|4141->2382|4170->2383|4199->2384|4233->2390|4262->2391|4291->2392|4349->2422|4378->2423|4414->2431|4443->2432|4472->2433|4531->2463|4561->2464|4591->2465|4621->2466|4788->2604|4818->2605|4850->2610|4878->2611|4906->2612|4939->2617|4968->2618|5010->2632|5269->2864|5298->2865|5329->2869|5390->2902|5419->2903|5451->2908|5523->2953|5551->2954|5614->2989|5643->2990|5695->3014|5724->3015|5790->3053|5819->3054|5854->3062|5915->3096|5943->3097|6027->3153|6056->3154|6091->3162|6155->3199|6183->3200|6215->3205|6243->3206|6665->3601|6680->3607|6737->3643|6781->3659|6797->3665|6862->3708|10334->7152|10350->7158|10412->7197|10731->7488|10747->7494|10806->7531|10850->7547|10867->7553|10934->7597|11503->8138|11519->8144|11581->8183|12479->9053|12495->9059|12557->9098|12699->9212|12715->9218|12777->9257|14404->10856|14420->10862|14480->10899|16186->12577|16202->12583|16262->12620|17365->13695|17381->13701|17441->13738|18787->15056|18803->15062|18863->15099|19048->15256|19064->15262|19123->15299|19167->15315|19183->15321|19250->15365|19763->15850|19779->15856|19838->15893|19882->15909|19898->15915|19965->15959|20458->16424|20474->16430|20533->16467|20577->16483|20593->16489|20660->16533
                  LINES: 32->1|40->9|40->9|40->9|41->10|41->10|41->10|45->14|45->14|45->14|47->16|47->16|47->16|48->17|48->17|48->17|49->18|49->18|49->18|50->19|50->19|50->19|51->20|51->20|51->20|52->21|52->21|52->21|53->22|53->22|53->22|54->23|54->23|54->23|55->24|55->24|55->24|57->26|57->26|58->27|58->27|58->27|59->28|62->31|62->31|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|63->32|64->33|64->33|65->34|65->34|65->34|65->34|65->34|66->35|70->39|70->39|71->40|71->40|71->40|72->41|73->42|73->42|74->43|74->43|74->43|74->43|75->44|75->44|76->45|77->46|77->46|78->47|78->47|79->48|80->49|80->49|81->50|81->50|93->62|93->62|93->62|93->62|93->62|93->62|159->128|159->128|159->128|165->134|165->134|165->134|165->134|165->134|165->134|173->142|173->142|173->142|185->154|185->154|185->154|187->156|187->156|187->156|215->184|215->184|215->184|230->199|230->199|230->199|239->208|239->208|239->208|248->217|248->217|248->217|252->221|252->221|252->221|252->221|252->221|252->221|260->229|260->229|260->229|260->229|260->229|260->229|268->237|268->237|268->237|268->237|268->237|268->237
                  -- GENERATED --
              */
          