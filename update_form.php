<?php
	require_once 'conn.php';
 
	if($_GET['id'] != ""){
		$task_id = $_GET['id'];
        $query = $conn->query("SELECT * FROM `sem` WHERE `id` = $task_id") or die(mysqli_errno($conn));
        $fetch = $query->fetch_array();
        
        //print all the data
        echo $fetch['id']."<br>";
        echo $fetch['sn_num']."<br>";
        echo $fetch['gprs_date']."<br>";
    }  
       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/normalize.css">
    <link rel="stylesheet" href="view/css/main.css">
    <script defer src="view/js/index.js"></script>
    <title><?= isset($title) ? $title : 'Shortinooo' ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    
<div class="container box">
    <br />
    <h2 align="center"></h2><br />
    <!--TABS-->
    <form action="grps.php" method="post">
    <div class="tab-pane active" id="gprs_details">
        <div class="panel panel-default">
            <div class="panel-heading">GPRS Details</div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Sem Serial Number</label>
                    <input type="text" name="gprs_sn_number" id="gprs_sn_number" class="form-control" />
                    <span id="error_sn" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Sem PO Number</label>
                    <input type="text" name="gprs_po_number" id="gprs_po_number" class="form-control" />
                </div>
                <div class="form-group">
                    <label>GPRS Description</label>
                    <input type="text" name="gprs_description" id="gprs_description" class="form-control" />
                </div>
                <div class="form-group">
                    <label>GPRS Date</label>
                    <input type="date" name="gprs_gprs_date" id="gprs_gprs_date" class="form-control" />
                    <span id="error_gprs_gprs_date" class="text-danger"></span>
                </div>
                <br />
                <div align="center">
                    <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                    <button type="button" name="next" id="btn_gprs_details_next" class="btn btn-info btn-lg">Next</button>
                </div>
                <br />
            </div>
        </div>
    </div>
</form>
</div>

</body>
</html>