<?php
session_start();

include("connect.php");// connect to DB

$employee_id = $_POST['employee_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM employees WHERE employee_id ='".$employee_id."' AND password ='".$password."'";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);


if ($row['employee_id']) {

    #start session
    $_SESSION = $row;
    $_SESSION ['user']='employee';

    switch ($_SESSION['employee_type_id']) {
        case 1:
            $_SESSION['employee_type'] = 'director';

            header("Location: ../director.php");

            die();
            break;
        case 2:
            $_SESSION['employee_type'] = 'basic administration';

            header("Location: ../director.php");
            die();
            break;
        case 3:
            $_SESSION['employee_type'] = 'regular nurse';

            header("Location: ../nurse.php");
            die();
            break;
        case 4:
            $_SESSION['employee_type'] = 'junior doctor';

            header("Location: ../doctor2.php");
            die();
            break;
        case 5:
            $_SESSION['employee_type'] = 'technician';
            header("Location: ../technician.php");
            die();
            break;
        case 6:
            $_SESSION['employee_type'] = 'doctor';
            header("Location: ../doctor.php");
            die();
            break;
        case 7:
            $_SESSION['employee_type'] = 'childcare nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 8:
            $_SESSION['employee_type'] = 'surgery nurse';
            header("Location: ../nurse.php");
            die();
            break;
        case 9:
            $_SESSION['employee_type'] = 'shift supervisor nurse';
            header("Location: ../chief-nurse.php");
            die();
            break;
        case 10:
            $_SESSION['employee_type'] = 'senior administrator';
            header("Location: ../director.php");
            die();
            break;
        case 11:
            $_SESSION['employee_type'] = 'intern';
            header("Location: ../doctor2.php");
            die();
            break;
        case 12:
            $_SESSION['employee_type'] = 'resident 1';
            header("Location: ../doctor2.php");
            die();
            break;
        case 13:
            $_SESSION['employee_type'] = 'resident 2';
            header("Location: ../doctor2.php");
            die();
            break;
        case 14:
            $_SESSION['employee_type'] = 'resident 3';
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