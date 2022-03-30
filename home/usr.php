<?php
if (isset($_POST['submit'])) {

    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";


    //usr_repair
    $usr_date = "";
    if (!empty($_POST['usr_usr_date'])) {
        $usr_date = $_POST['usr_usr_date'];
    }


    $po_number = "";
    if (!empty($_POST['usr_po_number'])) {
        $po_number = $_POST['usr_po_number'];
    }

    //check if the sn_num is already in the database

    $result = $conn->query($sql);


    if ($result) {
        //check if po number is not empty
        //update 
        $sql = "";
        if (empty($po_number)) {
            $sql = "UPDATE `sem` SET 
            `usr_date`='$usr_date' WHERE `sn_num` = '$sn_num'";
        } else {
            $sql = "UPDATE `sem` SET 
            `po_number`='$po_number',
            `usr_date`='$usr_date' WHERE `sn_num` = '$sn_num'";
        }

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<div class="tab-pane fade" id="usr_details">
    <div class="panel panel-default">
        <div class="panel-heading">USR Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="usr_sn_number" id="usr_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="usr_po_number" id="usr_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="usr_description" id="usr_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                
                <input type="date" name="usr_gprs_date" id="usr_gprs_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                
                <input type="date" name="usr_marlog_date" id="usr_marlog_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
 
            <div class="form-group">
                <label>Testing Date</label>
                
                <input type="date" name="usr_testing_date" id="usr_testing_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Failed</label>
               
                <input type="text" name="marlog2_testing_fail_description" class="form-control" id="marlog2_testing_fail_description" />
            </div>
            <div class="form-group">
                <label>Marlog 2 Date</label>
                
                <input type="date" name="usr_marlog2_date" id="usr_marlog2_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>USR Date</label>
                
                <input type="date" name="usr_usr_date" id="usr_usr_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_usr_details" id="previous_btn_usr_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" name="btn_usr_details_next" id="btn_usr_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>