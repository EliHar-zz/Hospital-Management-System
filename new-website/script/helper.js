/**
 * Created by elias on 15-08-13.
 */

function searchClicked(){
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

    $.post("../php/fetch-patient-history.php", function(data, status){
        document.getElementById("patient_history_records").innerHTML='<h1 style="text-align: left; font-size: larger; font-family: Georgia; text-decoration: underline">Visits History</h1></br></br>'+data;
    });
}

function getDoctorSalary(){
    var start = document.getElementById("datepicker1").value;

    start = start.substring(6,10)+'-'+start.substring(0,2)+'-'+start.substring(3,5);

    var end = document.getElementById("datepicker2").value;

    end = end.substring(6,10)+'-'+end.substring(0,2)+'-'+end.substring(3,5);


    $.post("../php/fetch-doctor-salary.php",{start:start, end:end} ,function(data, status){
        document.getElementById("doctorSalary").innerHTML="$"+data;
    });

}

function searchPeople(){

    document.getElementById("result").style.visibility = "visible";

    nameQuery = document.getElementById('searchBox').value;
    typeOption = $('input[name="person_type"]:checked').val();

    if(nameQuery.length>=3 && typeOption!==undefined) {

        $.post("../php/searchPeople.php", {name: nameQuery, typeOption: typeOption}, function (data, status) {

            document.getElementById("result").innerHTML = data;
        });

    }else if (nameQuery.length==0){
        document.getElementById("result").innerHTML="";
        document.getElementById("result").style.visibility = "hidden";
    }
}

// mouse over search results
function changeBGcolor(someID){
    document.getElementById(someID).style.backgroundColor = "lightgray";
    document.body.style.cursor = 'default';
}

// mouse out of search result
function changeBGcolor2(someID){
    document.getElementById(someID).style.backgroundColor = "white";
}

function closeSearchBox(){
    document.getElementById("result").innerHTML="";
    document.getElementById("result").style.visibility = "hidden";
}

function goToSearchResultPage(type_id, name, searched_id, typeOption){
    document.getElementById('searchBox').value = name;

    $.post("../php/clickedSearchResult.php", {type_id:type_id, name: name, id: searched_id, typeOption: typeOption}, function (data, status) {

        switch (parseInt(type_id)) {

            case 3:
                location.href = "../nurse.php";
                break;
            case 7:
                location.href = "../nurse.php";
                break;
            case 8:
                location.href = "../nurse.php";
                break;
            case 9:
                location.href = "../chief-nurse.php";
                break;
            case 11:
                location.href = "../doctor2.php";
                break;
            case 12:
                location.href = "../doctor2.php";
                break;
            case 13:
                location.href = "../doctor2.php";
                break;
            case 14:
                location.href = "../doctor2.php";
                break;
            default :
                location.href = "../patient.php";
        }

    });

}