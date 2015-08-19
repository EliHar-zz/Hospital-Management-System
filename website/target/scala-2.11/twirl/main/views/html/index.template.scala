
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


Seq[Any](format.raw/*2.1*/("""<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Happyhealth - Stay Healthy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href=""""),_display_(/*10.60*/routes/*10.66*/.Assets.versioned("stylesheets/style.css")),format.raw/*10.108*/("""" />
	<link rel="stylesheet" type="text/css" media="all" href=""""),_display_(/*11.60*/routes/*11.66*/.Assets.versioned("stylesheets/prettyPhoto.css")),format.raw/*11.114*/("""" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href=""""),_display_(/*15.60*/routes/*15.66*/.Assets.versioned("stylesheets/stylemobile.css")),format.raw/*15.114*/("""" />
	<!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
	<script src=""""),_display_(/*17.16*/routes/*17.22*/.Assets.versioned("javascripts/modernizr.js")),format.raw/*17.67*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*18.16*/routes/*18.22*/.Assets.versioned("javascripts/jquery.js")),format.raw/*18.64*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*19.19*/routes/*19.25*/.Assets.versioned("javascripts/jquery-ui.js")),format.raw/*19.70*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*20.19*/routes/*20.25*/.Assets.versioned("javascripts/jquery.parallax-1.1.3.js")),format.raw/*20.82*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*21.19*/routes/*21.25*/.Assets.versioned("javascripts/jquery.localscroll-1.2.7-min.js")),format.raw/*21.89*/("""" type="text/javascript"></script>
    <script src=""""),_display_(/*22.19*/routes/*22.25*/.Assets.versioned("javascripts/jquery.scrollTo-1.4.2-min.html")),format.raw/*22.88*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*23.16*/routes/*23.22*/.Assets.versioned("javascripts/jquery.flexslider.js")),format.raw/*23.75*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*24.16*/routes/*24.22*/.Assets.versioned("javascripts/jquery.prettyPhoto.js")),format.raw/*24.76*/("""" type="text/javascript"></script>
	<script src=""""),_display_(/*25.16*/routes/*25.22*/.Assets.versioned("javascripts/jquery.retina.js")),format.raw/*25.71*/("""" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function ()"""),format.raw/*27.31*/("""{"""),format.raw/*27.32*/("""
        """),format.raw/*28.9*/("""$("a[data-rel^='prettyPhoto']").prettyPhoto("""),format.raw/*28.53*/("""{"""),format.raw/*28.54*/("""
			"""),format.raw/*29.4*/("""default_width: 600,
			default_height: 420,
			social_tools: false
		"""),format.raw/*32.3*/("""}"""),format.raw/*32.4*/(""");
        $('#slideshow-tabs').tabs("""),format.raw/*33.35*/("""{"""),format.raw/*33.36*/(""" """),format.raw/*33.37*/("""show: """),format.raw/*33.43*/("""{"""),format.raw/*33.44*/(""" """),format.raw/*33.45*/("""effect: "fade", duration: 200 """),format.raw/*33.75*/("""}"""),format.raw/*33.76*/(""", hide: """),format.raw/*33.84*/("""{"""),format.raw/*33.85*/(""" """),format.raw/*33.86*/("""effect: "fade", duration: 300 """),format.raw/*33.116*/("""}"""),format.raw/*33.117*/(""" """),format.raw/*33.118*/("""}"""),format.raw/*33.119*/(""");
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) || ($(window).width() < 1024) ) """),format.raw/*34.135*/("""{"""),format.raw/*34.136*/("""	
		"""),format.raw/*35.3*/("""}"""),format.raw/*35.4*/(""" """),format.raw/*35.5*/("""else """),format.raw/*35.10*/("""{"""),format.raw/*35.11*/("""
            """),format.raw/*36.13*/("""$('#slideshow-tabs .ui-tabs-panel').parallax("50%", 0.5);
            $('.content-home-1').parallax("0", 0.5);
            $('.content-home-2').parallax("100%", 0.5);
            $('.content-home-3').parallax("0", 0.5);
        """),format.raw/*40.9*/("""}"""),format.raw/*40.10*/("""
		"""),format.raw/*41.3*/("""$('a[data-rel]').each(function() """),format.raw/*41.36*/("""{"""),format.raw/*41.37*/("""
			"""),format.raw/*42.4*/("""$(this).attr('rel', $(this).data('rel'));
		"""),format.raw/*43.3*/("""}"""),format.raw/*43.4*/(""");
		$('img[data-retina]').retina("""),format.raw/*44.32*/("""{"""),format.raw/*44.33*/("""checkIfImageExists: true"""),format.raw/*44.57*/("""}"""),format.raw/*44.58*/(""");
		$(".open-menu").click(function()"""),format.raw/*45.35*/("""{"""),format.raw/*45.36*/("""
		    """),format.raw/*46.7*/("""$("body").addClass("no-move");
		"""),format.raw/*47.3*/("""}"""),format.raw/*47.4*/(""");
		$(".close-menu, .close-menu-big").click(function()"""),format.raw/*48.53*/("""{"""),format.raw/*48.54*/("""
		    """),format.raw/*49.7*/("""$("body").removeClass("no-move");
		"""),format.raw/*50.3*/("""}"""),format.raw/*50.4*/(""");
	"""),format.raw/*51.2*/("""}"""),format.raw/*51.3*/(""");
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
                <a href="#" id="logo"><img src=""""),_display_(/*63.50*/routes/*63.56*/.Assets.versioned("images/logo.png")),format.raw/*63.92*/("""" data-retina=""""),_display_(/*63.108*/routes/*63.114*/.Assets.versioned("images/logo-retina.png")),format.raw/*63.157*/("""" alt="Happy Health - All Your Health Need" /></a>
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
		<div class="ui-tabs-panel" id="panel-1" style="background:url("""),_display_(/*129.66*/routes/*129.72*/.Assets.versioned("images/slide-1.jpg")),format.raw/*129.111*/(""") no-repeat 50% 0 fixed">
            <div class="tabs-container">
                <article>
                    <h2>Our Commitment to make you healthy</h2>
                    <div class="content-tabs clearfix">
                        <figure>
                            <img src=""""),_display_(/*135.40*/routes/*135.46*/.Assets.versioned("images/img-1.jpg")),format.raw/*135.83*/("""" data-retina=""""),_display_(/*135.99*/routes/*135.105*/.Assets.versioned("images/img-1-retina.jpg")),format.raw/*135.149*/("""" alt="" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Pallentesque lobortus et tellus.</p>
                        <a href="#" class="button-more-slide">Read More</a>
                    </div>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-2" style="background:url("""),_display_(/*143.72*/routes/*143.78*/.Assets.versioned("images/slide-2.jpg")),format.raw/*143.117*/(""") no-repeat 50% 0 fixed">
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
        <div class="ui-tabs-panel" id="panel-3" style="background:url("""),_display_(/*155.72*/routes/*155.78*/.Assets.versioned("images/slide-3.jpg")),format.raw/*155.117*/(""") no-repeat 50% 0 fixed">
        </div>
        <div class="ui-tabs-panel" id="panel-4" style="background:url("""),_display_(/*157.72*/routes/*157.78*/.Assets.versioned("images/slide-4.jpg")),format.raw/*157.117*/(""") no-repeat 50% 0 fixed">
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
    <div class="content-home content-home-1" style="background:url("""),_display_(/*185.69*/routes/*185.75*/.Assets.versioned("images/img-2.jpg")),format.raw/*185.112*/(""") no-repeat 0 0 fixed">
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
    <div class="content-home content-home-2 odd right" style="background:url("""),_display_(/*200.79*/routes/*200.85*/.Assets.versioned("images/img-3.jpg")),format.raw/*200.122*/(""") no-repeat 100% 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>We Have Tons of Doctor and Professor</span></h2>
            <h3>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus.</p>
            <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <a href="#" class="button-more">Our Doctor</a>
        </article>
    </div>
    <div class="content-home content-home-3" style="background:url("""),_display_(/*209.69*/routes/*209.75*/.Assets.versioned("images/img-4.jpg")),format.raw/*209.112*/(""") no-repeat 0 0 fixed">
        <article class="static-page">
            <h2 class="title-home"><span>From Dentist to Orthopedy we have everything</span></h2>
            <h3>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio.</p>
            <a href="#" class="button-more">About Us</a>
        </article>
    </div>
    <div id="box-homepage-container" style="background:url("""),_display_(/*218.61*/routes/*218.67*/.Assets.versioned("images/img-5.jpg")),format.raw/*218.104*/(""") no-repeat 50% 0 fixed">
        <div id="box-homepage" class="clearfix">
            <article>
                <figure>
                    <img src=""""),_display_(/*222.32*/routes/*222.38*/.Assets.versioned("images/img-6.jpg")),format.raw/*222.75*/("""" data-retina=""""),_display_(/*222.91*/routes/*222.97*/.Assets.versioned("images/img-6-retina.jpg")),format.raw/*222.141*/("""" alt="Professional Doctor and Nurse" />
                </figure>
                <h3>Professional Doctor and Nurse</h3>
                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit.</p>
                <a href="#" class="more-info">More Info About Our Doctor</a>
            </article>
            <article>
                <figure>
                    <img src=""""),_display_(/*230.32*/routes/*230.38*/.Assets.versioned("images/img-7.jpg")),format.raw/*230.75*/("""" data-retina=""""),_display_(/*230.91*/routes/*230.97*/.Assets.versioned("images/img-7-retina.jpg")),format.raw/*230.141*/("""" alt="Find Us Everywhere" />
                </figure>
                <h3>Find Us Everywhere</h3>
                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit.</p>
                <a href="#" class="more-info">Find Our Clinic</a>
            </article>
            <article class="last">
                <figure>
                    <img src=""""),_display_(/*238.32*/routes/*238.38*/.Assets.versioned("images/img-6.jpg")),format.raw/*238.75*/("""" data-retina=""""),_display_(/*238.91*/routes/*238.97*/.Assets.versioned("images/img-6-retina.jpg")),format.raw/*238.141*/("""" alt="Professional Doctor and Nurse" />
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
</html>

"""))
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
                  DATE: Wed Aug 12 13:27:30 EDT 2015
                  SOURCE: C:/Users/Rich/PlayProjects/Hospital-Management-System/website/app/views/index.scala.html
                  HASH: 0bac41b3c0c93c9d331cb9147111bb051ec2064a
                  MATRIX: 827->2|1218->366|1233->372|1297->414|1389->479|1404->485|1474->533|1960->992|1975->998|2045->1046|2192->1166|2207->1172|2273->1217|2351->1268|2366->1274|2429->1316|2510->1370|2525->1376|2591->1421|2672->1475|2687->1481|2765->1538|2846->1592|2861->1598|2946->1662|3027->1716|3042->1722|3126->1785|3204->1836|3219->1842|3293->1895|3371->1946|3386->1952|3461->2006|3539->2057|3554->2063|3624->2112|3752->2212|3781->2213|3818->2223|3890->2267|3919->2268|3951->2273|4050->2345|4078->2346|4144->2384|4173->2385|4202->2386|4236->2392|4265->2393|4294->2394|4352->2424|4381->2425|4417->2433|4446->2434|4475->2435|4534->2465|4564->2466|4594->2467|4624->2468|4791->2606|4821->2607|4853->2612|4881->2613|4909->2614|4942->2619|4971->2620|5013->2634|5272->2866|5301->2867|5332->2871|5393->2904|5422->2905|5454->2910|5526->2955|5554->2956|5617->2991|5646->2992|5698->3016|5727->3017|5793->3055|5822->3056|5857->3064|5918->3098|5946->3099|6030->3155|6059->3156|6094->3164|6158->3201|6186->3202|6218->3207|6246->3208|6668->3603|6683->3609|6740->3645|6784->3661|6800->3667|6865->3710|10337->7154|10353->7160|10415->7199|10734->7490|10750->7496|10809->7533|10853->7549|10870->7555|10937->7599|11506->8140|11522->8146|11584->8185|12482->9055|12498->9061|12560->9100|12702->9214|12718->9220|12780->9259|14407->10858|14423->10864|14483->10901|16189->12579|16205->12585|16265->12622|17368->13697|17384->13703|17444->13740|18790->15058|18806->15064|18866->15101|19051->15258|19067->15264|19126->15301|19170->15317|19186->15323|19253->15367|19766->15852|19782->15858|19841->15895|19885->15911|19901->15917|19968->15961|20461->16426|20477->16432|20536->16469|20580->16485|20596->16491|20663->16535
                  LINES: 32->2|40->10|40->10|40->10|41->11|41->11|41->11|45->15|45->15|45->15|47->17|47->17|47->17|48->18|48->18|48->18|49->19|49->19|49->19|50->20|50->20|50->20|51->21|51->21|51->21|52->22|52->22|52->22|53->23|53->23|53->23|54->24|54->24|54->24|55->25|55->25|55->25|57->27|57->27|58->28|58->28|58->28|59->29|62->32|62->32|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|63->33|64->34|64->34|65->35|65->35|65->35|65->35|65->35|66->36|70->40|70->40|71->41|71->41|71->41|72->42|73->43|73->43|74->44|74->44|74->44|74->44|75->45|75->45|76->46|77->47|77->47|78->48|78->48|79->49|80->50|80->50|81->51|81->51|93->63|93->63|93->63|93->63|93->63|93->63|159->129|159->129|159->129|165->135|165->135|165->135|165->135|165->135|165->135|173->143|173->143|173->143|185->155|185->155|185->155|187->157|187->157|187->157|215->185|215->185|215->185|230->200|230->200|230->200|239->209|239->209|239->209|248->218|248->218|248->218|252->222|252->222|252->222|252->222|252->222|252->222|260->230|260->230|260->230|260->230|260->230|260->230|268->238|268->238|268->238|268->238|268->238|268->238
                  -- GENERATED --
              */
          