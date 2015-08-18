<?php
session_start();

include("connect.php");// connect to DB

$typeOption = $_REQUEST['typeOption'];
$name = $_REQUEST['name'];

$sql = '';
    switch($typeOption){
        case 'patient':
            $sql = "SELECT patient_id as id, patient_name as person_name FROM patients WHERE  patients.patient_name LIKE '%".$_REQUEST['name']."%'";
            break;
        case 'junior_doctor':
            $sql = "select employee_id as id, employee_type_id as type_id, employee_name as person_name from employees where (employee_type_id = 11 or employee_type_id = 12 or employee_type_id = 13 or employee_type_id = 14) AND employee_name LIKE '%".$_REQUEST['name']."%'";
            break;
        case 'nurse':
            $sql = "select employee_id as id, employee_type_id as type_id, employee_name as person_name from employees where (employee_type_id = 3 or employee_type_id = 7 or employee_type_id = 8 or employee_type_id = 9) AND employee_name LIKE '%".$_REQUEST['name']."%'";
            break;
    }

$result = $conn->query($sql);
$conn->close();

echo'<table style="border: solid 1px lightgray"; top:0px;>';
$rowIndex = 0;
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>'.
        '<td style="font-size:small;font-weight:lighter;text-align:left;padding-left:5px;" id="searchRow'.$rowIndex.'" onmouseover="changeBGcolor(\'searchRow'.$rowIndex.'\')" onmouseout="changeBGcolor2(\'searchRow'.$rowIndex.'\')" onclick="goToSearchResultPage(\''.$row['type_id'].'\',\''.$row['person_name'].'\',\''.$row['id'].'\',\''.$typeOption.'\')">'.$row['person_name'].'</td>'.
        '</tr>';
    $rowIndex++;
}
echo'</table>';


?>