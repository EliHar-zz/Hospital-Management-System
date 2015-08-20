<?php
session_start();

include("connect.php");// connect to DB

$employee_id = $_POST['employee_id'];
$password = $_POST['password'];

$sql = "SELECT employee_id, facility_name, employee_type_id, start_date, end_date, password, employee_name FROM employees, facilities WHERE employee_id ='".$employee_id."' and password = '".$password."' and employees.facility_id = facilities.facility_id";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['employee_id']) {

    #start session
    $_SESSION = $row;

    switch ($_SESSION['employee_type_id']) {
        case 1:
            $_SESSION['employee_type'] = 'Director';
            $_SESSION ['user']='admin';

            $sql2 = "select pay_frequency, yearly_increase, base_yearly_salary from directors";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['pay_frequency'] = $row2['pay_frequency'];
            $_SESSION['yearly_increase'] = $row2['yearly_increase'];
            $_SESSION['base_yearly_salary'] = $row2['base_yearly_salary'];


            header("Location: ../director.php");

            die();
            break;
        case 2:
            $_SESSION['employee_type'] = 'Administrator';
            $_SESSION ['user']='admin';

            header("Location: ../director.php");
            die();
            break;
        case 3:
            $_SESSION['employee_type'] = 'Regular Nurse';
            $_SESSION ['user']='nurse';

            $sql2 = "select hours_per_shift, raise_amount, overtime_rate, base_hourly_rate, shifts_per_week, years_to_raise from nurses where employee_types_id = 3";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['hours_per_shift'] = $row2['hours_per_shift'];
            $_SESSION['shifts_per_week'] = $row2['shifts_per_week'];
            $_SESSION['years_to_raise'] = $row2['years_to_raise'];
            $_SESSION['base_hourly_rate'] = $row2['base_hourly_rate'];
            $_SESSION['overtime_rate'] = $row2['overtime_rate'];
            $_SESSION['raise_amount'] = $row2['raise_amount'];
            

            header("Location: ../nurse.php");
            die();
            break;
        case 4:
            $_SESSION['employee_type'] = 'Junior Doctor';
            $_SESSION ['user']='doctor2';

            $sql2 = "select junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from junior_doctors, attending_of_junior, employees where attending_id = employee_id and junior_doctors.employee_types_id = 4 and attending_of_junior.junior_id = '".$employee_id."'";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['maximum_hours'] = $row2['maximum_hours'];
            $_SESSION['supervisor'] = $row2['supervisor'];
            $_SESSION['pay_frequency'] = $row2['pay_frequency'];

            header("Location: ../doctor2.php");
            die();
            break;
        case 6:
            $_SESSION['employee_type'] = 'Doctor';
            $_SESSION ['user']='doctor';

            $sql2 = "SELECT maximum_hours, pay_frequency FROM doctors";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);


            $_SESSION['maximum_hours'] = $row2['maximum_hours'];
            $_SESSION['pay_frequency'] = $row2['pay_frequency'];


            header("Location: ../doctor.php");
            die();
            break;
        case 7:
            $_SESSION['employee_type'] = 'Childcare Nurse';
            $_SESSION ['user']='nurse';

            $sql2 = "select hours_per_shift, shifts_per_week, years_to_raise from nurses where employee_types_id = 7";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['hours_per_shift'] = $row2['hours_per_shift'];
            $_SESSION['shifts_per_week'] = $row2['shifts_per_week'];
            $_SESSION['years_to_raise'] = $row2['years_to_raise'];

            header("Location: ../nurse.php");
            die();
            break;
        case 8:
            $_SESSION['employee_type'] = 'Surgery Nurse';
            $_SESSION ['user']='nurse';

            $sql2 = "select hours_per_shift, shifts_per_week, years_to_raise from nurses where employee_types_id = 8";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['hours_per_shift'] = $row2['hours_per_shift'];
            $_SESSION['shifts_per_week'] = $row2['shifts_per_week'];
            $_SESSION['years_to_raise'] = $row2['years_to_raise'];

            header("Location: ../nurse.php");
            die();
            break;
        case 9:
            $_SESSION['employee_type'] = 'Shift Supervisor Nurse';
            $_SESSION ['user']='chief-nurse';

            $sql2 = "select hours_per_shift, shifts_per_week, years_to_raise from nurses where employee_types_id = 9";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['hours_per_shift'] = $row2['hours_per_shift'];
            $_SESSION['shifts_per_week'] = $row2['shifts_per_week'];
            $_SESSION['years_to_raise'] = $row2['years_to_raise'];

            header("Location: ../chief-nurse.php");
            die();
            break;
        case 10:
            $_SESSION['employee_type'] = 'Senior Administrator';
            $_SESSION ['user']='admin';

            header("Location: ../director.php");
            die();
            break;
        case 11:
            $_SESSION['employee_type'] = 'Medical Intern';
            $_SESSION ['user']='doctor2';


            $sql2 = "select junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from junior_doctors, attending_of_junior, employees where attending_id = employee_id and junior_doctors.employee_types_id = 11 and attending_of_junior.junior_id = '".$employee_id."'";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['maximum_hours'] = $row2['maximum_hours'];
            $_SESSION['supervisor'] = $row2['supervisor'];
            $_SESSION['pay_frequency'] = $row2['pay_frequency'];


            header("Location: ../doctor2.php");
            die();
            break;
        case 12:
            $_SESSION['employee_type'] = 'Medical Resident 1-yr';
            $_SESSION ['user']='doctor2';

            $sql2 = "select junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from junior_doctors, attending_of_junior, employees where attending_id = employee_id and junior_doctors.employee_types_id = 12 and attending_of_junior.junior_id = '".$employee_id."'";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['maximum_hours'] = $row2['maximum_hours'];
            $_SESSION['supervisor'] = $row2['supervisor'];
            $_SESSION['pay_frequency'] = $row2['pay_frequency'];

            header("Location: ../doctor2.php");
            die();
            break;
        case 13:
            $_SESSION['employee_type'] = 'Medical Resident 2-yr';
            $_SESSION ['user']='doctor2';

            $sql2 = "select junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from junior_doctors, attending_of_junior, employees where attending_id = employee_id and junior_doctors.employee_types_id = 13 and attending_of_junior.junior_id = '".$employee_id."'";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['maximum_hours'] = $row2['maximum_hours'];
            $_SESSION['supervisor'] = $row2['supervisor'];
            $_SESSION['pay_frequency'] = $row2['pay_frequency'];

            header("Location: ../doctor2.php");
            die();
            break;
        case 14:
            $_SESSION['employee_type'] = 'Medical Resident 3';
            $_SESSION ['user']='doctor2';

            $sql2 = "select junior_doctors.maximum_hours, employee_name supervisor, junior_doctors.pay_frequency from junior_doctors, attending_of_junior, employees where attending_id = employee_id and junior_doctors.employee_types_id = 14 and attending_of_junior.junior_id = '".$employee_id."'";

            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $_SESSION['maximum_hours'] = $row2['maximum_hours'];
            $_SESSION['supervisor'] = $row2['supervisor'];
            $_SESSION['pay_frequency'] = $row2['pay_frequency'];

            header("Location: ../doctor2.php");
            die();
            break;
    }

} else {
    echo $conn->error;
    header("Location: http://eliasharoun.com/error/");

}

$conn->close();
?>