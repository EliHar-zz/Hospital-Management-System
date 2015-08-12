
package views.html

import play.twirl.api._
import play.twirl.api.TemplateMagic._


     object login_Scope0 {
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

class login extends BaseScalaTemplate[play.twirl.api.HtmlFormat.Appendable,Format[play.twirl.api.HtmlFormat.Appendable]](play.twirl.api.HtmlFormat) with play.twirl.api.Template1[Form[models.Employees],play.twirl.api.HtmlFormat.Appendable] {

  /**/
  def apply/*1.2*/(form: Form[models.Employees]):play.twirl.api.HtmlFormat.Appendable = {
    _display_ {
      {


Seq[Any](format.raw/*1.32*/("""

"""),format.raw/*3.1*/("""<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" media="screen" href=""""),_display_(/*7.50*/routes/*7.56*/.Assets.versioned("stylesheets/main.css")),format.raw/*7.97*/("""">
    <link rel="stylesheet" type="text/css" media="screen" href=""""),_display_(/*8.66*/routes/*8.72*/.Assets.versioned("stylesheets/bootstrap.min.css")),format.raw/*8.122*/("""">
    <link rel="shortcut icon" type="image/png" href=""""),_display_(/*9.55*/routes/*9.61*/.Assets.versioned("images/favicon.png")),format.raw/*9.100*/("""">
    <script src=""""),_display_(/*10.19*/routes/*10.25*/.Assets.versioned("javascripts/hello.js")),format.raw/*10.66*/("""" type="text/javascript"></script>
  </head>
  <body>
    <h1>Welcome to Shitty's Login Page</h1>
    <p>Please enter your credentials</p>

      <form id= "myForm" name="myForm" class="box" style="width : 320 px" id="login" method="POST" action="">

        <div style="width : 220 px ; float : left">
          <p>Are you an employee or patient?</p>
        </div>
        <br/>
        <input type="radio" name="userType" value="employee" id="employee"
        style="float : none"/>Employee <br/>
        <input type="radio" name="userType" value="patient" id="patient"
        style="float : none"/>Patient <br/><br/>

        """),_display_(/*27.10*/helper/*27.16*/.form(routes.Application.authenticate)/*27.54*/ {_display_(Seq[Any](format.raw/*27.56*/("""

          """),format.raw/*29.11*/("""<label for="username">Username: </label>
          <input type="text" name="username" id="username"/> <br/> <br/>

          <label for="password">Password: </label>
          <input type="password" name="password" id="password"/> <br/> <br/> <br/>

          <input type="submit" value="Login"/>
        """)))}),format.raw/*36.10*/("""

      """),format.raw/*38.7*/("""</form>
  </body>
</html>
"""))
      }
    }
  }

  def render(form:Form[models.Employees]): play.twirl.api.HtmlFormat.Appendable = apply(form)

  def f:((Form[models.Employees]) => play.twirl.api.HtmlFormat.Appendable) = (form) => apply(form)

  def ref: this.type = this

}


}

/**/
object login extends login_Scope0.login
              /*
                  -- GENERATED --
                  DATE: Wed Aug 12 11:15:14 EDT 2015
                  SOURCE: /Users/Pargol/Documents/dev/Hospital-Management-System/website/app/views/login.scala.html
                  HASH: 1bf59eb5c0b7c4750f714aa3bc9e1546c0adda96
                  MATRIX: 761->1|886->31|914->33|1051->144|1065->150|1126->191|1220->259|1234->265|1305->315|1388->372|1402->378|1462->417|1510->438|1525->444|1587->485|2247->1118|2262->1124|2309->1162|2349->1164|2389->1176|2726->1482|2761->1490
                  LINES: 27->1|32->1|34->3|38->7|38->7|38->7|39->8|39->8|39->8|40->9|40->9|40->9|41->10|41->10|41->10|58->27|58->27|58->27|58->27|60->29|67->36|69->38
                  -- GENERATED --
              */
          