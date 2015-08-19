
package views.html

import play.twirl.api._
import play.twirl.api.TemplateMagic._


     object admin_Scope0 {
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

class admin extends BaseScalaTemplate[play.twirl.api.HtmlFormat.Appendable,Format[play.twirl.api.HtmlFormat.Appendable]](play.twirl.api.HtmlFormat) with play.twirl.api.Template0[play.twirl.api.HtmlFormat.Appendable] {

  /**/
  def apply():play.twirl.api.HtmlFormat.Appendable = {
    _display_ {
      {


Seq[Any](format.raw/*1.1*/("""<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" media="screen" href=""""),_display_(/*6.54*/routes/*6.60*/.Assets.versioned("stylesheets/main.css")),format.raw/*6.101*/("""">
        <link rel="shortcut icon" type="image/png" href=""""),_display_(/*7.59*/routes/*7.65*/.Assets.versioned("images/favicon.png")),format.raw/*7.104*/("""">
        <script src=""""),_display_(/*8.23*/routes/*8.29*/.Assets.versioned("javascripts/hello.js")),format.raw/*8.70*/("""" type="text/javascript"></script>
    </head>
    <body>
    <h1>Welcome <span class="todo">echo name</span></h1>
    <form class="box" id="" method="POST" action="">
        <h3>Services</h3>

        <script>document.write(chooseFacility())</script>

        <hr/>
        
        <div class="row">
            <div class="col first">
                <h4>Current Services</h4>
                <p class="todo">Must echo all services from services_provided
                    table here with delete button for each.</p><br/>
            </div>

            <div class="col last">
                <h4>Add Service</h4>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name"/><br/><br/>
                <label for="cost">Cost: </label>
                <input type="text" name="cost" id="cost"/><br/><br/><br/>
                <input type="submit" name="submit" value="Add Service"/><br/><br/>
            </div>
        </div>
    </form><br/><br/>

    <form class="box" id="" method="POST" action="">
        <h3>Supplies</h3>

        <script>document.write(chooseFacility())</script>
        <label for="floor" style="font-weight:bold">Floor: </label>
        <select>
            <script>populateSelect(1,21,1)</script>
        </select><br/><br/>
        
        <hr/>

        <div class="row">
            <div class="col first">
                <h4>Supply Room</h4>
                <p class="todo">Must echo supplies in this facility/floor supply_room</p><br/>
            </div>

            <div class="col last">
                <h4>Add To Supply Room</h4>
                <p class="todo">Must echo supplies from vendor_has_supplies with checkbox for each</p><br/>
                <button type="button">Add Supplies</button>
            </div><br/>
            
        </div>

        <hr/>

        <div class="row">
            <div class="col first">
                <h4>Storage Unit</h4>
                <p class="todo">Must echo supplies in facility's storage_unit</p><br/>
            </div>

            <div class="col last">
                <h4>Add To Storage Unit</h4>
                <p class="todo">Must echo supplies from vendor_has_supplies with checkbox for each</p><br/>
                <button type="button">Add Supplies</button>
            </div><br/>
        </div>

        <hr>

        <div class="row">
            <div class="col first">
                <h4>Kitchen</h4>
                <p class="todo">Must echo supplies in facility's nutritional_supplies</p><br/>
            </div>

            <div class="col last">
                <h4>Add to Kitchen</h4>
                <p class="todo">Must echo supplies from vendor_has_supplies with checkbox for each</p><br/>
                <button type="button">Add Supplies</button>
            </div><br/>
        </div>

    </form><br/><br/>
    </form>

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
object admin extends admin_Scope0.admin
              /*
                  -- GENERATED --
                  DATE: Wed Aug 12 13:27:29 EDT 2015
                  SOURCE: C:/Users/Rich/PlayProjects/Hospital-Management-System/website/app/views/admin.scala.html
                  HASH: da5d746d095faac7ac5e66d74ebdbb7d564a1f5e
                  MATRIX: 827->0|990->137|1004->143|1066->184|1154->246|1168->252|1228->291|1280->317|1294->323|1355->364
                  LINES: 32->1|37->6|37->6|37->6|38->7|38->7|38->7|39->8|39->8|39->8
                  -- GENERATED --
              */
          