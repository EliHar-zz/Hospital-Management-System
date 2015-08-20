<?php
session_start();

include("connect.php");// connect to DB

$start = $_REQUEST['start'];
$end = $_REQUEST['end'];
$id = $_REQUEST['id'];

switch($_SESSION['employee_type_id']){
    case 6:
        $sql = "select * from doctor_schedules where doctor_id = '".$id."' and start_time between '".$start."' and '".$end."'";
        break;
    case 3:
    case 7:
    case 8:
    case 9:
        $sql = "select * from nurse_schedules where nurse_id = '".$id."' and start_time between '".$start."' and '".$end."'";
        break;
    case 4:
    case 11:
    case 12:
    case 13:
    case 14:
        $sql = "select * from juniorDoctor_schedules where juniorDoctor_id = '".$id."' and start_time between '".$start."' and '".$end."'";
    break;
}

$result = $conn->query($sql);

echo'<table style="color: #494949; border: solid 2px; text-align: center;">
        <tr style="color: #494949; border: solid 2px; text-align: center;">
        <th colspan="2" style="color: #494949; border: solid 2px; text-align: center;">Start</th>
        <th colspan="2" style="color: #494949; border: solid 2px; text-align: center;">End</th>
        </tr>

        <tr style="color: #494949; border: solid 2px; text-align: center;">
        <th style="color: #494949; border: solid 2px; text-align: center;">Date</th>
        <th style="color: #494949; border: solid 2px; text-align: center;">Time</th>
        <th style="color: #494949; border: solid 2px; text-align: center;">Date</th>
        <th style="color: #494949; border: solid 2px; text-align: center;">Time</th>
        </tr>
        ';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr style="color: #494949; border: solid 2px; text-align: center;">
        <td style="color: #494949; border: solid 2px; text-align: center;">'.substr($row['start_time'],0,10).'</td>'.
        '<td style="color: #494949; border: solid 2px; text-align: center;">'.substr($row['start_time'],11,5).'</td>'.
        '<td style="color: #494949; border: solid 2px; text-align: center;">'.substr($row['end_time'],0,10).'</td>'.
        '<td style="color: #494949; border: solid 2px; text-align: center;">'.substr($row['end_time'],11,5).'</td>'.
        '</tr>';
}
echo'</table>';

$conn->close();
?>