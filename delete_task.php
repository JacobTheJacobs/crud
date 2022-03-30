<?php
	require_once 'conn.php';
 
	if($_GET['id']){
		$task_id = $_GET['id'];
 
		$conn->query("DELETE FROM `sem` WHERE `id` = $task_id") or die(mysqli_errno($conn));
		header("location: index.php");
	}	
?>