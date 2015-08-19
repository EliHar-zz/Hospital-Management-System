<?php
session_start();

	// write to file
	session_unset();
	session_destroy();
	
	header("location:../");
?>