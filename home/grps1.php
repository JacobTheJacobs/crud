<?php
if (isset($_POST['submit'])) {
    //grps
    $error = true;
    $po_number = "";
    $gprs_description = "";
    $error = true;
    $sn_num = "";
    $gprs_date = "";

    //check if not null then get the values
    if (!empty($_POST['gprs_po_number'])) {
        $po_number = $_POST['gprs_po_number'];
    }
    if (!empty($_POST['gprs_description'])) {
        $gprs_description = $_POST['gprs_description'];
    }
     //check if not null then get the values
     if (empty($_POST['gprs_sn_number'])) {
        $error = false;
    }

    if (empty($_POST['gprs_gprs_date'])) {
        $error = false;
     
    }

    if (!$error) {
        echo "SEM NUMBER AND DATE REQUIRED";
        return;
      } else {
        $sn_num = $_POST['gprs_sn_number'];
        $gprs_date = $_POST['gprs_gprs_date'];
      }


      $conn = new mysqli('localhost', 'root', '');
      // create new databse and table if not exists
      $sql = "CREATE DATABASE IF NOT EXISTS ge";
      if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
      } else {
          echo "Error creating database: " . $conn->error;
      }
      $conn->close();
  
      //connect to the database
      $conn = new mysqli('localhost', 'root', '', 'ge');
      //create table if not exists
      $sql = "CREATE TABLE IF NOT EXISTS `sem` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `sn_num` varchar(255) NOT NULL,
        `po_number` varchar(255),
        `gprs_date` date NOT NULL,
        `gprs_description` varchar(255) ,
        `marlog_date` date,
        `scat_scrap_desc` varchar(255),
        `scat_date` date,
        `testing_fail_desc` varchar(255),
        `testing_date` date,
        `marlog2_fail_date` date,
        `marlog2_fail_desc` varchar(255),
        `marlog2_pass_date` date,
        `grps2_date` date,
        `usr_date` date,
        `usr_desc` varchar(255),
        `usr_repair_date` date,
        `usr_repair_desc` varchar(255),
        `is_complete` boolean NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`)
        )";
  
      if ($conn->query($sql) === TRUE) {
          echo "Table created successfully";
      } else {
          echo "Error creating table: " . $conn->error;
      }
      
  
      //insert data into table
      
     
      $sql = "INSERT INTO `sem`(`sn_num`, `gprs_date`, `po_number`, `gprs_description`) VALUES ('$sn_num','$gprs_date','$po_number','$gprs_description')";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();

      
}

?>
<form action="grps1.php" method="post">
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
                <div align="center">
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                  <button type="button" name="next" id="btn_gprs_details_next" class="btn btn-info btn-lg">Next</button>
                </div>
                <br />
            </div>
        </div>
    </div>
</form>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>