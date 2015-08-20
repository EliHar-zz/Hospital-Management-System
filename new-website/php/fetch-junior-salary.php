<?php
session_start();

include("connect.php");// connect to DB

$start = $_REQUEST['start'];
$end = $_REQUEST['end'];

$sql = "SELECT yearly_salary FROM junior_doctors WHERE employee_types_id = '".$_SESSION['employee_type_id']."'";
$result = $conn->query($sql);


$start_String = strtotime($start);
$end_String = strtotime($end);
$days = ($end_String - $start_String)/86400;


$salary = 0;
while($row = mysqli_fetch_assoc($result)){
	$salary += $row['yearly_salary'];
}

$proratedSalary = $salary * $days / 365;
	
echo number_format((float)$proratedSalary, 2, '.', '');

$conn->close();
?>