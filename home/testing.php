<?php
if (isset($_POST['submit'])) {

    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";


    //testing
    $testing_fail_desc = "";
    $testing_date = "";
    if (!empty($_POST['testing_fail_desc'])) {
        $testing_date = $_POST['testing_testing_date'];
    }
    if (!empty($_POST['testing_fail_description'])) {
        $testing_fail_desc = $_POST['testing_fail_description'];
    }


    $po_number = "";
    if (!empty($_POST['testing_po_number'])) {
        $po_number = $_POST['testing_po_number'];
    }

    //check if the sn_num is already in the database

    $result = $conn->query($sql);


    if ($result) {
        //check if po number is not empty
        //update 
        $sql = "";
        if (empty($po_number)) {
            $sql = "UPDATE `sem` SET 
            `testing_fail_desc`='$testing_fail_desc',
            `testing_date`='$testing_date' WHERE `sn_num` = '$sn_num'";
        } else {
            $sql = "UPDATE `sem` SET 
            `po_number`='$po_number',
            `testing_fail_desc`='$testing_fail_desc',
            `testing_date`='$testing_date' WHERE `sn_num` = '$sn_num'";
        }

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


?>

<div class="tab-pane fade" id="testing_details">
    <div class="panel panel-default">
        <div class="panel-heading">Testing Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="testing_sn_number" id="testing_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="testing_po_number" id="testing_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="testing_description" id="testing_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                
                <input type="date" name="testing_gprs_date" id="testing_gprs_date" class="form-control" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                
                <input type="date" name="testing_marlog_date" id="testing_marlog_date" class="form-control" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Date</label>
                
                <input type="date" name="testing_testing_date" id="testing_testing_date" class="form-control" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Failed</label>
                <input type="checkbox" id="myCheck1" onclick="myFunction1()">
                <input type="text" name="testing_fail_description" class="form-control" id="testing_fail_description" style="display:none" />
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_testing_details" id="previous_btn_testing_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" name="btn_testing_details_next" id="btn_testing_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>