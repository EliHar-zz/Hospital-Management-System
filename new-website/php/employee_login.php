<?php

include("connect.php");// connect to DB

$employee_id = $_POST['employee_id'];
$password = $_POST['password'];

$sql = "SELECT FROM employees (employee_id, password) WHERE employee_id = '".$employee_id."' AND password = '".$password."'";


if ($conn->query($sql) === TRUE) {
    echo "Logged-in successfully";
} else {
    echo $conn->error;
}

$conn->close();
?>