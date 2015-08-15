<?php
// Start the session
session_start();
if(!isset($_SESSION['employee_id']))
    header("location: ../staff-login.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
</html>