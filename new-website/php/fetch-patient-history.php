<?php
session_start();

include("connect.php");// connect to DB

if ($_SESSION['patient_id'])
    $patient_id = $_SESSION['patient_id'];
else
    $patient_id = $_SESSION['searched']['patient_id'];

    $sql = "SELECT visits.start_date, visits.end_date, employee_name, facility_name FROM visits, employees, facilities WHERE visits.patient_id ='".$patient_id."'  and visits.facility_id = facilities.facility_id and visits.doctor_id = employees.employee_id";

    $result = $conn->query($sql);

    $conn->close();

    echo'<table>
        <tr>
        <th>Start date</th>
        <th>End Date</th>
        <th>Doctor</th>
        <th>Facility</th>
        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>
        <td>'.$row['start_date'].'</td>'.
        '<td>'.$row['end_date'].'</td>'.
        '<td>'.$row['employee_name'].'</td>'.
        '<td>'.$row['facility_name'].'</td>'.
        '</tr>';
}
    echo'</table>';


?>