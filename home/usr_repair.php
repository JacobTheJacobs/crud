<?php
if (isset($_POST['submit'])) {

    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";



    //usr_repair
    $usr_repair_date = "";
    $usr_repair_desc = "";
    if (!empty($_POST['usr_repair_date'])) {
        $usr_repair_date = $_POST['usr_repair_date'];
    }
    if (!empty($_POST['usr_repair_description'])) {
        $usr_repair_desc = $_POST['usr_repair_description'];
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
            `usr_repair_date`='$usr_repair_date',
            `usr_repair_desc`='$usr_repair_desc' WHERE `sn_num` = '$sn_num'";
        } else {
            $sql = "UPDATE `sem` SET 
            `po_number`='$po_number',
            `usr_repair_date`='$usr_repair_date',
            `usr_repair_desc`='$usr_repair_desc' WHERE `sn_num` = '$sn_num'";
        }

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


?>

<div class="tab-pane fade" id="usr_repair_details">
    <div class="panel panel-default">
        <div class="panel-heading">USR Repair Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="usr_repair_sn_number" id="usr_repair_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="usr_repair_po_number" id="usr_repair_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="usr_repair_description" id="usr_repair_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                
                <input type="date" name="usr_repair_gprs_date" id="usr_repair_gprs_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                
                <input type="date" name="usr_repair_marlog_date" id="usr_repair_marlog_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label>Testing Date</label>
                
                <input type="date" name="usr_repair_testing_date" id="usr_repair_testing_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Failed</label>

                <input disabled="disabled" type="text" name="usr_repair_testing_fail_description" class="form-control" id="usr_repair_testing_fail_description" />
            </div>
            <div class="form-group">
                <label>Marlog 2 Date</label>
                
                <input type="date" name="usr_repair_marlog2_date" id="usr_repair_marlog2_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>USR Date</label>
                
                <input type="date" name="usr_repair_usr_date" id="usr_repair_usr_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>USR Repair Date</label>
                
                <input type="date" name="usr_repair_date" id="usr_repair_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Is Repaired?</label>
                <input type="checkbox" id="check_repair" onclick="myFunction2()">
                <input type="text" name="usr_repair_description" class="form-control" id="usr_repair_description" />
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_usr_repair_details" id="previous_btn_usr_repair_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button style="display:inline" type="button" name="btn_usr_repair_details_next" id="btn_usr_repair_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>