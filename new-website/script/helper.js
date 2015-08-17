/**
 * Created by elias on 15-08-13.
 */

function searchClicked(){
console.log("we're in");
    document.getElementById("dashboard").innerHTML='<form style="float: left;" method="POST" action="#"> <label style="float: left; margin-right: 5px;" for="patient_search">Search for people <input style="float: right;" type="text" id="patient_search" placeholder="eg. John Doe" name="patient_search"> </label> <label style="float: left; margin-left: 10px;" for="patient_search">Patient <input type="radio" name="person_type" id="person_type" value="patient"> </label> <input style="float: right;" type="submit" value="&#x1f50d Search"> </form> <div id="result"> <?php #while $row=mysqli_fetch_assoc($result) #Populate tables ?> <table style="background: lightgray;"> <td> <td>---</td><td>---</td><td>---</td><td>---</td></td><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr></table> </div>';

}

function servicesClicked(){
    document.getElementById("dashboard").innerHTML='<h2>Services</h2><table style="background: lightgray;"> <td> <td>---</td><td>---</td><td>---</td><td>---</td></td><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr></table> </div>';
}

function scheduleClicked(){
    document.getElementById("dashboard").innerHTML='<h2>Shcedule</h2><table style="background: lightgray;"> <td> <td>---</td><td>---</td><td>---</td><td>---</td></td><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr></table> </div>';
}

function otherClicked(){
    document.getElementById("dashboard").innerHTML='<h2>Other</h2><table style="background: lightgray;"> <td> <td>---</td><td>---</td><td>---</td><td>---</td></td><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr><tr> <td>---</td><td>---</td><td>---</td><td>---</td></tr></table> </div>';
}



function showPatientHistory(){

    $.post("../php/patient-view.php", function(data, status){
        document.getElementById("result").innerHTML='<h1 style="text-align: left; font-size: larger; font-family: Georgia; text-decoration: underline">Visits History</h1></br></br>'+data;
    });
}