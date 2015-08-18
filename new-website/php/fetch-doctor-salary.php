<?php
session_start();

include("connect.php");// connect to DB

$start = $_REQUEST['start'];
$end = $_REQUEST['end'];

$sql = "select count(services_per_visit.service_id) service_count, service_cost from visits, services_per_visit, services where doctor_id = '".$_SESSION['employee_id']."' and visits.start_date between '".$start."' and '".$end."' and services_per_visit.service_id = services.service_id and visits.visits_id = services_per_visit.visits_id group by services_per_visit.service_id";

$result = $conn->query($sql);
print_r($row);

$salary = 0;
while($row = mysqli_fetch_assoc($result)){
    $salary += ($row['service_count']* $row['service_cost']);
}
echo $salary;

$conn->close();
?>