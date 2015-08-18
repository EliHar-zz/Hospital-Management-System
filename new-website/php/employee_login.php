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
    $_SESSION ['user']='employee';

    switch ($_SESSION['employee_type_id']) {
        case 1:
            $_SESSION['employee_type'] = 'Director';

            header("Location: ../director.php");

            die();
            break;
        case 2:
            $_SESSION['employee_type'] = 'Administrator';

            header("Location: ../director.php");
            die();
            break;
        case 3:
            $_SESSION['employee_type'] = 'Regular nurse';

            header("Location: ../nurse.php");
            die();
            break;
        case 4:
            $_SESSION['employee_type'] = 'Junior doctor';

            header("Location: ../doctor2.php");
            die();
            break;
        case 5:
            $_SESSION['employee_type'] = 'Technician';
            header("Location: ../technician.php");
            die();
            break;
        case 6:
            $_SESSION['employee_type'] = 'Doctor';

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
            header("Location: ../nurse.php");
            die();
            break;
        case 8:
            $_SESSION['employee_type'] = 'Surgery Nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 9:
            $_SESSION['employee_type'] = 'Shift Supervisor Nurse';
            header("Location: ../chief-nurse.php");
            die();
            break;
        case 10:
            $_SESSION['employee_type'] = 'Senior Administrator';
            header("Location: ../director.php");
            die();
            break;
        case 11:
            $_SESSION['employee_type'] = 'Medicine Intern';

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
            header("Location: ../doctor2.php");
            die();
            break;
        case 13:
            $_SESSION['employee_type'] = 'Medical Resident 2-yr';
            header("Location: ../doctor2.php");
            die();
            break;
        case 14:
            $_SESSION['employee_type'] = 'Medical Resident 3';
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