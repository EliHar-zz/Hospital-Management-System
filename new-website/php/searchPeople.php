<?php
session_start();

include("connect.php");// connect to DB

$type = $_REQUEST['type'];
$name = $_REQUEST['name'];

$sql = '';
    switch($type){
        case 'patient':
            $sql = "SELECT employee_type_id as type_id, patient_name as myName FROM patients WHERE  patients.patient_name LIKE '%".$_REQUEST['name']."%'";
            break;
        case 'junior_doctor':
            $sql = "select employee_type_id as type_id, employee_name as myName from employees where (employee_type_id = 11 or employee_type_id = 12 or employee_type_id = 13 or employee_type_id = 14) AND employee_name LIKE '%".$_REQUEST['name']."%'";
            break;
        case 'nurse':
            $sql = "select employee_type_id as type_id, employee_name as myName from employees where (employee_type_id = 3 or employee_type_id = 7 or employee_type_id = 8 or employee_type_id = 9) AND employee_name LIKE '%".$_REQUEST['name']."%'";
            break;
    }

$result = $conn->query($sql);

$conn->close();

echo'<table style="border: solid 1px lightgray"; top:0px;>';
$rowIndex = 0;
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>'.
        '<td style="font-size:small;font-weight:lighter;text-align:left;padding-left:5px;" id="searchRow'.$rowIndex.'" onmouseover="changeBGcolor(\'searchRow'.$rowIndex.'\')" onmouseout="changeBGcolor2(\'searchRow'.$rowIndex.'\')" onclick="goToSearchResultPage(\''.$row['type_id'].'\',\''.$row['myName'].'\')">'.$row['myName'].'</td>'.
        '</tr>';
    $rowIndex++;
}
echo'</table>';


?>