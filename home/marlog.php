<?php
if (isset($_POST['submit'])) {

    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";

    //marlog
    $marlog_date = "";
    $po_number = "";
    if (!empty($_POST['marlog_po_number'])) {
        $po_number = $_POST['marlog_po_number'];
    }
    if (!empty($_POST['marlog_marlog_date'])) {
        $marlog_date = $_POST['marlog_marlog_date'];
    }
    //check if the sn_num is already in the database

    $result = $conn->query($sql);


    if ($result) {
        //check if po number is not empty
        //update 
        $sql = "";
        if (empty($po_number)) {
            $sql = "UPDATE `sem` SET 
            `marlog_date`='$marlog_date' WHERE `sn_num` = '$sn_num'";
        } else {
            $sql = "UPDATE `sem` SET 
            `po_number`='$po_number',
            `marlog_date`='$marlog_date' WHERE `sn_num` = '$sn_num'";
        }

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


?>



<div class="tab-pane fade" id="marlog_details">
    <div class="panel panel-default">
        <div class="panel-heading">MARLOG Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="marlog_sn_number" id="marlog_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="marlog_po_number" id="marlog_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="marlog_gprs_description" id="marlog_gprs_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                <input type="date" name="marlog_gprs_date" id="marlog_gprs_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                <input type="date" name="marlog_marlog_date" id="marlog_marlog_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_marlog_details" id="previous_btn_marlog_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" name="btn_marlog_details_next" id="btn_marlog_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>