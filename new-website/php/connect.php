<?php
$conn = new mysqli("localhost", "appmo489_root", "comp353", "appmo489_hospital");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>