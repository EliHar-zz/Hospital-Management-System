<?php
$conn = new mysqli("eliasharoun.com", username, password, "appmo489_hospital");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>
