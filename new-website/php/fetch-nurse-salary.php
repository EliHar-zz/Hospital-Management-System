<?php
session_start();

include("connect.php");// connect to DB

$start = $_REQUEST['start'];
$end = $_REQUEST['end'];

$sql = "SELECT start_time, end_time FROM nurse_schedules WHERE nurse_id = '".$_SESSION['employee_id']."' and start_time between '".$start."' and '".$end."'";
$result = $conn->query($sql);

$start_date_string = $_SESSION['start_date'];
$start_date_date = date('Y/m/d', strtotime($start_date_string));
$years_of_service = (date('Y/m/d') - $start_date_date);

$hourly_rate = $_SESSION['base_hourly_rate'] + floor($years_of_service / $_SESSION['years_to_raise']) * $_SESSION['raise_amount'];

$hours = 0;
$otHours = 0;

while($row = mysqli_fetch_assoc($result)){
	$hours += 12;
	$endTime = strtotime($row['end_time']);
	$startTime = strtotime($row['start_time']);
	$otHours += ($endTime - $startTime)/3600 - 12;
	}
	
$salary = $hours * $hourly_rate + $otHours * $hourly_rate * $_SESSION['overtime_rate'];
echo $salary;

$conn->close();
?>