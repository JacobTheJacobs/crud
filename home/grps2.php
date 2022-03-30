<?php
if (isset($_POST['submit'])) {

    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";

    //marlog
    $gprs2_date = "";
    $po_number = "";
    if (!empty($_POST['gprs2_gprs2_date'])) {
        $gprs2_date = $_POST['gprs2_gprs2_date'];
    }
    if (!empty($_POST['gprs2_po_number'])) {
        $po_number = $_POST['gprs2_po_number'];
    }
    //check if the sn_num is already in the database

    $result = $conn->query($sql);

    if ($result) {
        //check if po number is not empty
        //update 
        $sql = "";
        if (empty($po_number)) {
            $sql = "UPDATE `sem` SET 
            `grps2_date`='$gprs2_date' WHERE `sn_num` = '$sn_num'";
        } else {
            $sql = "UPDATE `sem` SET 
            `po_number`='$po_number',
            `grps2_date`='$gprs2_date' WHERE `sn_num` = '$sn_num'";
        }

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>


<div class="tab-pane fade" id="gprs2_details">
    <div class="panel panel-default">
        <div class="panel-heading">GPRS-2 Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="gprs2_sn_number" id="gprs2_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="gprs2_po_number" id="gprs2_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="gprs2_description" id="gprs2_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                
                <input type="date" name="gprs2_gprs_date" id="gprs2_gprs_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                
                <input type="date" name="gprs2_marlog_date" id="gprs2_marlog_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
  
            <div class="form-group">
                <label>Testing Date</label>
                
                <input type="date" name="gprs2_testing_date" id="gprs2_testing_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Marlog 2 Date</label>
                
                <input type="date" name="gprs2_marlog2_date" id="gprs2_marlog2_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS 2 Date</label>
                
                <input type="date" name="gprs2_gprs2_date" id="gprs2_gprs2_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_gprs2_details" id="previous_btn_gprs2_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
            </div>
            <br />
        </div>
    </div>
</div>