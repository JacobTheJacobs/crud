<?php
if (isset($_POST['submit'])) {
}
?>

<div class="tab-pane fade" id="marlog3_scrap_details">
    <div class="panel panel-default">
        <div class="panel-heading">USR Repair Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="marlog3_scrap_sn_number" id="marlog3_scrap_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="marlog3_scrap_po_number" id="marlog3_scrap_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="marlog3_scrap_description" id="marlog3_scrap_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_gprs_date" id="marlog3_scrap_gprs_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_marlog_date" id="marlog3_scrap_marlog_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_scat_date" id="marlog3_scrap_scat_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_testing_date" id="marlog3_scrap_testing_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Failed</label>
                <input type="checkbox" id="marlog3_scrap_check_failed" disabled="disabled">
                <input disabled="disabled" type="text" name="marlog3_scrap_description" class="form-control" id="usr_repair_testing_fail_description" />
            </div>
            <div class="form-group">
                <label>Marlog 2 Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_marlog2_date" id="marlog3_scrap_marlog2_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>USR Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_usr_date" id="marlog3_scrap_usr_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>USR Repair Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_usr_repair_date" id="marlog3_scrap_usr_repair_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Error</label>
                <input type="text" name="marlog3_scrap_repair_description" class="form-control" id="marlog3_scrap_repair_description" />
            </div>
            <div class="form-group">
                <label>SCRAP Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog3_scrap_marlog3_scrap_repair_date" id="marlog3_scrap_usr_repair_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_marlog3_scrap_details" id="previous_btn_marlog3_scrap_details" name="previous_btn_marlog3_scrap_details" id="previous_btn_usr_repair_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
            </div>
            <br />
        </div>
    </div>
</div>