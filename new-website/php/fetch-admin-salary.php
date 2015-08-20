<?php
session_start();

include("connect.php");// connect to DB

$start = $_REQUEST['start'];
$end = $_REQUEST['end'];

if($_SESSION['employee_type_id']=== '1')
{
		$sql = "SELECT base_yearly_salary, yearly_increase FROM directors";
} else
{
		$sql = "SELECT base_yearly_salary, yearly_increase_rate as yearly_increase FROM administrators WHERE employee_types_id = '".$_SESSION['employee_type_id']."'";
}

$result = $conn->query($sql);
print_r($row);

$start_date_string = $_SESSION['start_date'];
$start_date_date = date('Y/m/d', strtotime($start_date_string));
$years_of_service = (date('Y/m/d') - $start_date_date);
$start_String = strtotime($start);
$end_String = strtotime($end);
$days = ($end_String - $start_String)/86400;

$baseSalary = 0;
$yearly_increase = 0;
while($row = mysqli_fetch_assoc($result)){
	$baseSalary += $row['base_yearly_salary'];
	$yearly_increase += $row['yearly_increase'];
}


$salary = $baseSalary * (1 + $yearly_increase)**($years_of_service);

$proratedSalary = $salary * $days / 365;

echo number_format((float)$proratedSalary, 2, '.', '');

$conn->close();
?>