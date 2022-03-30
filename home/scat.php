<?php
if (isset($_POST['submit'])) {

    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";

    $scat_scrap_desc = "";
    $scat_date = "";
    if (!empty($_POST['scat_scrap_desc'])) {
        $scat_scrap_desc = $_POST['scat_scrap_desc'];
    }
    if (!empty($_POST['scat_po_number'])) {
        $po_number = $_POST['scat_po_number'];
    }
    if (!empty($_POST['scat_scat_date'])) {
        $scat_date = $_POST['scat_scat_date'];
    }

    $po_number = "";
    if (!empty($_POST['scat_po_number'])) {
        $po_number = $_POST['scat_po_number'];
    }

    //check if the sn_num is already in the database

    $result = $conn->query($sql);


    if ($result) {
        //check if po number is not empty
        //update 
        $sql = "";
        if (empty($po_number)) {
            $sql = "UPDATE `sem` SET 
            `scat_scrap_desc`='$scat_scrap_desc',
            `scat_date`='$scat_date' WHERE `sn_num` = '$sn_num'";
        } else {
            $sql = "UPDATE `sem` SET 
            `po_number`='$po_number',
            `scat_scrap_desc`='$scat_scrap_desc',
            `scat_date`='$scat_date' WHERE `sn_num` = '$sn_num'";
        }

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


?>

<div class="tab-pane fade" id="scat_details">
    <div class="panel panel-default">
        <div class="panel-heading">SCAT Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="scat_sn_number" id="scat_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="scat_po_number" id="scat_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="scat_gprs_description" id="gprs_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                
                <input type="date" name="scat_gprs_date" id="scat_gprs_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                
                <input type="date" name="scat_marlog_date" id="scat_marlog_date" class="form-control"  />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT Date</label>
                
                <input type="date" name="scat_scat_date" id="scat_scat_date" class="form-control"  style="display:none"/>
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT SCRAP</label>
                <input type="checkbox" id="myCheck" onclick="myFunction()">
                <input type="text" id="scat_scrap_desc" name="scat_scrap_desc" class="form-control" id="scat_scrap_desc" style="display:none" />
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_scat_details" id="previous_btn_scat_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" style="display:inline" name="btn_scat_details_next" id="btn_scat_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>