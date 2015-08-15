<?php
$conn = new mysqli("eliasharoun.com", "appmo489_root", "comp353", "appmo489_hospital");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>