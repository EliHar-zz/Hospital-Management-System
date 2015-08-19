
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

class login extends BaseScalaTemplate[play.twirl.api.HtmlFormat.Appendable,Format[play.twirl.api.HtmlFormat.Appendable]](play.twirl.api.HtmlFormat) with play.twirl.api.Template1[Form[Application.Login],play.twirl.api.HtmlFormat.Appendable] {

  /**/
  def apply/*1.2*/(form: Form[Application.Login]):play.twirl.api.HtmlFormat.Appendable = {
    _display_ {
      {


Seq[Any](format.raw/*1.33*/("""

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

      <form id= "myForm" class="box" style="width : 320 px" id="login" method="POST" action="">

        <div style="width : 220 px ; float : left">
          <p>Are you an employee or patient?</p>
        </div>
        <br/>
        <input type="radio" name="userType" value="employee" id="employee"
        style="float : none"/>Employee <br/>
        <input type="radio" name="userType" value="patient" id="patient"
        style="float : none"/>Patient <br/><br/>


          <label for="employee_id">Employee ID: </label>
          <input type="text" name="employee_id" id="employee_id"/><br/><br/>

          <label for="password">Password: </label>
          <input type="password" name="password" id="password"/><br/><br/><br/>

          <input type="submit" value="Login"/>


      </form>
  </body>
</html>
"""))
      }
    }
  }

  def render(form:Form[Application.Login]): play.twirl.api.HtmlFormat.Appendable = apply(form)

  def f:((Form[Application.Login]) => play.twirl.api.HtmlFormat.Appendable) = (form) => apply(form)

  def ref: this.type = this

}


}

/**/
object login extends login_Scope0.login
              /*
                  -- GENERATED --
                  DATE: Wed Aug 12 13:27:30 EDT 2015
                  SOURCE: C:/Users/Rich/PlayProjects/Hospital-Management-System/website/app/views/login.scala.html
                  HASH: 2508545703a40077886b5a1e4e3efe45fdbfbfa7
                  MATRIX: 762->1|888->32|918->36|1059->151|1073->157|1134->198|1229->267|1243->273|1314->323|1398->381|1412->387|1472->426|1521->448|1536->454|1598->495
                  LINES: 27->1|32->1|34->3|38->7|38->7|38->7|39->8|39->8|39->8|40->9|40->9|40->9|41->10|41->10|41->10
                  -- GENERATED --
              */
          