<?php
session_start();

unset($_SESSION['searched']);

$_SESSION['searched_person_type'] = $_REQUEST['typeOption'];

$searched_id = $_REQUEST['id'];

include("connect.php");// connect to DB

switch ($_REQUEST['typeOption']){

    case 'patient':

        $sql = "SELECT * FROM patients WHERE patient_id ='".$searched_id."'";

        $result = $conn->query($sql);
        $_SESSION['searched'] = mysqli_fetch_assoc($result);

        break;
    case 'junior_doctor':

        $sql = "select distinct facility_name, employee_type, junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from facilities, junior_doctors, attending_of_junior, employees, employee_types where employees.facility_id = facilities.facility_id and attending_id = employee_id and attending_of_junior.junior_id = '".$searched_id."' and employee_types.employee_type_id = '".$_REQUEST['type_id']."'";

        $result = $conn->query($sql);
        $_SESSION['searched'] = mysqli_fetch_assoc($result);
        $_SESSION['searched']['employee_name'] = $_REQUEST['name'];

        break;
    case'nurse':

        $sql = "select distinct facility_name, employee_type, hours_per_shift, shifts_per_week, years_to_raise from employees, employee_types , facilities, nurses where nurses.employee_types_id = '".$_REQUEST['type_id']."' and employee_types.employee_type_id = '".$_REQUEST['type_id']."' and employees.facility_id = facilities.facility_id and employees.employee_id = '".$searched_id."'";

        $result = $conn->query($sql);
        $_SESSION['searched'] = mysqli_fetch_assoc($result);
        $_SESSION['searched']['employee_name'] = $_REQUEST['name'];

        break;
    case 'technician':

        $sql = "select facility_name, employee_type, base_hourly_rate, years_to_raise, raise_amount, overtime_rate, hours_per_week, pay_frequency from employees, technicians, employee_types, facilities where employee_types.employee_type_id = technicians.employee_types_id and facilities.facility_id = employees.facility_id  and technicians.employee_types_id = '".$_REQUEST['type_id']."' and employees.employee_id = '".$searched_id."'";

        $result = $conn->query($sql);
        $_SESSION['searched'] = mysqli_fetch_assoc($result);
        $_SESSION['searched']['employee_name'] = $_REQUEST['name'];
        $_SESSION['searched']['employee_type_id'] = $_REQUEST['type_id'];



        break;
    case 'doctor':

        if (intval($_REQUEST['type_id'])===6) {
            $sql = "select facility_name, employee_type, doctors.maximum_hours, doctors.pay_frequency from facilities, doctors, employees, employee_types  where employees.facility_id = facilities.facility_id  and employee_types.employee_type_id = 6 and employee_id = '" . $searched_id . "'";
        }else {
            $sql = "select distinct facility_name, employee_type, junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from facilities, junior_doctors, attending_of_junior, employees, employee_types where employees.facility_id = facilities.facility_id and attending_id = employee_id and attending_of_junior.junior_id = '" . $searched_id . "' and employee_types.employee_type_id = '" . $_REQUEST['type_id'] . "'";
        }

        $result = $conn->query($sql);
        $_SESSION['searched'] = mysqli_fetch_assoc($result);
        $_SESSION['searched']['employee_name'] = $_REQUEST['name'];

        break;
}


?>