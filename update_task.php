<?php
	require_once 'conn.php';
 
	if($_GET['id'] != ""){
		$task_id = $_GET['id'];
       
        //get the sem from database
        $query = $conn->query("SELECT * FROM `sem` WHERE `id` = '$task_id'") or die(mysqli_error());
        $fetch = $query->fetch_array();


        
        //put id in the url and redirect
        header("location: update_form.php?id=$task_id");
    
    }
?>