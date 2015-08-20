<?php
session_start();

include("connect.php");// connect to DB

$start = $_REQUEST['start'];
$end = $_REQUEST['end'];

$start_date_string = $_SESSION['start_date'];
$start_date_date = date('Y/m/d', strtotime($start_date_string));
$years_of_service = floor((date('Y/m/d') - $start_date_date));

$sql = "SELECT base_hourly_rate, raise_amount, years_to_raise, hours_per_week FROM technicians WHERE employee_types_id = '".$_SESSION['employee_type_id']."'";
$result = $conn->query($sql);
print_r($row);
$row = mysqli_fetch_assoc($result);

$hourly_rate = $row['base_hourly_rate'] + floor($years_of_service / $row['years_to_raise']) * $row['raise_amount'];
	
$salary = $row['hours_per_week'] * $hourly_rate;
$start_String = strtotime($start);
$end_String = strtotime($end);
$days = ($end_String - $start_String)/86400;

$proratedSalary = $salary * $days / 365;

echo number_format((float)$proratedSalary, 2, '.', '');

$conn->close();
?>