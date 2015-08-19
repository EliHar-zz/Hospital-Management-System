<?php
session_start();
//$_SESSION['searched_person_name'] = $_REQUEST['name'];
//$_SESSION['searched_person_id'] = $_REQUEST['id'];
$_SESSION['searched_person_type'] = $_REQUEST['typeOption'];


include("connect.php");// connect to DB

switch ($_REQUEST['typeOption']){

    case 'patient':

        $sql = "SELECT * FROM patients WHERE patient_id ='".$_REQUEST['id']."'";

        break;
    case 'junior_doctor':

        $sql = "SELECT * FROM patients WHERE employee_id ='".$_REQUEST['id']."'";

        break;
    case'nurse':

        $sql = "SELECT * FROM patients WHERE employee_id ='".$_REQUEST['id']."'";

        break;
}

$result = $conn->query($sql);
$_SESSION['searched'] = mysqli_fetch_assoc($result);

?>