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

<?php
if (isset($_POST['submit'])) {

    //get all the values from the form
    $sn_num = $_POST['sn_num'];
    $gprs_date = $_POST['gprs_date'];
    $is_complete = $_POST['is_complete'];
    $id = $_POST['id'];
    
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
    <form action="update_form.php" method="post">
   
<div class="tab-pane active" >
    <div class="panel panel-default">
        <div class="panel-heading">USR Repair Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="sn_num"  class="form-control" value="<?php echo $fetch['sn_num']?>"/>
             
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="po_number"  class="form-control" value="<?php echo $fetch['po_number']?>"/>
             
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input value="<?php echo $fetch['gprs_description']?>" type="text" name="gprs_description" class="form-control" />
               
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                
                <input value="<?php echo $fetch['gprs_date']?>" type="date" name="gprs_date"  class="form-control"  />
           
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                
                <input value="<?php echo $fetch['marlog_date']?>" type="date" name="marlog_date"  class="form-control"  />
            
            </div>
            <div class="form-group">
                <label>SCAT Date</label>
                
                <input value="<?php echo $fetch['scat_date']?>"  type="date" name="scat_date"  class="form-control" />
             
            </div>

            <div class="form-group">
                <label>SCAT SCRAP</label>
                <input value="<?php echo $fetch['scat_scrap_desc']?>" type="text"  name="scat_scrap_desc" class="form-control"   />
            </div>
            <div class="form-group">
                <label>Testing Date</label>
                
                <input value="<?php echo $fetch['testing_date']?>" type="date" name="testing_date" i class="form-control"  />
        
            </div>
            <div class="form-group">
                <label>Testing Failed</label>

                <input value="<?php echo $fetch['testing_fail_desc']?>" disabled="disabled" type="text" name="testing_fail_desc" class="form-control" />
            </div>
            <div class="form-group">
                <label>Marlog 2 Date Fail</label>
                
                <input value="<?php echo $fetch['marlog2_fail_date']?>" type="date" name="marlog2_fail_date"  class="form-control"  />

            </div>
            <div class="form-group">
                <label>GPRS 2 Date</label>
                <input value="<?php echo $fetch['grps2_date']?>" type="date" name="grps2_date"  class="form-control"  />
               
            </div>
            <div class="form-group">
                <label>Marlog 2 Date Pass</label>
                
                <input value="<?php echo $fetch['marlog2_pass_date']?>" type="date" name="marlog2_pass_date"  class="form-control"  />
               
            </div>
            <div class="form-group">
                <label>USR Date</label>
                
                <input value="<?php echo $fetch['usr_date']?>" type="date" name="usr_date" class="form-control"  />
      
            </div>
            <div class="form-group">
                <label>USR Repair Date</label>
                
                <input value="<?php echo $fetch['usr_repair_date']?>" type="date" name="usr_repair_date"  class="form-control"  />
         
            </div>
            <div class="form-group">
                <label>Is Repaired?</label>
                <input value="<?php echo $fetch['usr_repair_desc']?>" type="text" name="usr_repair_desc" class="form-control"  />
            </div>
            <br />
            <div align="center">
                <input type="submit" name="submit"  class="btn btn-success btn-lg" value="Complete" />
            </div>
            <br />
        </div>
    </div>
</div>
</form>
</div>

</body>
</html>