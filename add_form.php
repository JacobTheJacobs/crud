
<div class="container box">
    <br />
    <h2 align="center">MultiCutting Edge System For Inventory Mangment Of Sem Boards</h2><br />
    <!--TABS-->
    <form action="index.php" method="post" id="sems_form">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active_tab1" style="border:1px solid #ccc" id="gprs_details_tab">GPRS </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="marlog_details_tab" style="border:1px solid #ccc">MARLOG </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="scat_details_tab" style="border:1px solid #ccc">SCAT </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="testing_details_tab" style="border:1px solid #ccc">Testing </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="marlog2_details_tab" style="border:1px solid #ccc">MARLOG2 </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="gprsusr_details_tab" style="border:1px solid #ccc">GRPS2/USR </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="usr_repair_details_tab" style="border:1px solid #ccc">USR REPAIR </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active_tab1" id="marlog3_scrap_details_tab" style="border:1px solid #ccc">MARLOG3 </a>
            </li>
        </ul>
        <!--GPRS DETAILS-->
        <div class="tab-content" style="margin-top:16px;">
            <?php include 'home/grps1.php'; ?>
            <!--MARLOG-->
            <?php include 'home/marlog.php'; ?>
            <!--SCAT-->
            <?php include 'home/scat.php'; ?>
            <!--Testing-->
            <?php include 'home/testing.php'; ?>
            <!--Marlog 2-->
            <?php include 'home/marlog2_pass.php'; ?>
            <?php include 'home/marlog2_fail.php'; ?>
            <!--GRPS/USR-->
            <?php include 'home/grps2.php'; ?>
            <?php include 'home/usr.php'; ?>
            <!--USR REPAIR-->
            <?php include 'home/usr_repair.php'; ?>
            <!--MARLOG 3-->
            <?php include 'home/marlog3.php'; ?>

        </div>
    </form>
</div>




<script>














    var checIfFailedUsr = document.getElementById("usr_check_failed");
    var checIfFailed = document.getElementById("marlog2_check_failed");
    // Get the checkbox
    var checkBoxTesting = document.getElementById("myCheck1");
    // Get the output text
    var text = document.getElementById("testing_fail_description");


    var checkBoxRepair = document.getElementById("check_repair");
    var textRepair = document.getElementById("usr_repair_description");
    var btnRepair = document.getElementById("btn_usr_repair_details_next");

    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("scat_scrap_desc");
        var btn = document.getElementById("btn_scat_details_next");
        var s_d = document.getElementById("scat_scat_date");
        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
            btn.style.display = "none";
            s_d.style.display = "block";
            //check the checIfFailed checkbox 
        } else {
            text.style.display = "none";
            btn.style.display = "inline";
            s_d.style.display = "none";

        }
    }

    function myFunction1() {

        // If the checkbox is checked, display the output text
        if (checkBoxTesting.checked == true) {
            text.style.display = "block";
            checIfFailed.checked = true;
            checIfFailed.disabled = true;
            checIfFailedUsr.checked = true;
            checIfFailedUsr.disabled = true;
        } else {
            text.style.display = "none";
            checIfFailed.checked = false;
            checIfFailed.disabled = true;
            checIfFailedUsr.checked = false;
            checIfFailedUsr.disabled = true;
        }
    }

    function myFunction2() {


    }


    $(document).ready(function(e) {


 


        let sn_number;
        //------------------------------------------------------GPRS------------------------------------------------------
        $('#btn_gprs_details_next').click(function(e) {
            e.preventDefault();
            var error_sn = '';
            var error_date = '';


            if ($.trim($('#gprs_sn_number').val()).length == 0) {
                error_sn = 'Sem Number is required';
                $('#error_sn').text(error_sn);
                $('#gprs_sn_number').addClass('has-error');

            } else {
                    
   gprs_sn_number = $('#gprs_sn_number').val();
   $('#marlog_sn_number').val(gprs_sn_number);
   $('#scat_sn_number').val(gprs_sn_number);
   $('#testing_sn_number').val(gprs_sn_number);
   $('#marlog2_fail_sn_number').val(gprs_sn_number);
   $('#marlog2_pass_sn_number').val(gprs_sn_number);
   $('#gprs2_sn_number').val(gprs_sn_number);
   $('#usr_sn_number').val(gprs_sn_number);
   $('#usr_repair_sn_number').val(gprs_sn_number);

   gprs_gprs_date = $('#gprs_gprs_date').val();
    $('#marlog_gprs_date').val(gprs_gprs_date);
    $('#scat_gprs_date').val(gprs_gprs_date);
    $('#testing_gprs_date').val(gprs_gprs_date);
    $('#marlog2_fail_gprs_date').val(gprs_gprs_date);
    $('#marlog2_pass_gprs_date').val(gprs_gprs_date);
    $('#gprs2_gprs_date').val(gprs_gprs_date);
    $('#usr_gprs_date').val(gprs_gprs_date);
    $('#usr_repair_gprs_date').val(gprs_gprs_date);

    



            }

            var valueDate = document.getElementById('gprs_gprs_date').value;

            if (!Date.parse(valueDate)) {
                error_date = 'Date is required';
                $('#error_gprs_gprs_date').text(error_date);
                $('#gprs_gprs_date').addClass('has-error');
                return;
            }



            if (error_sn != '') {
                return false;
            } else {
                $('#gprs_details_tab').removeClass('active active_tab1');
                $('#gprs_details_tab').removeAttr('href data-toggle');
                $('#gprs_details').removeClass('active');
                $('#gprs_details_tab').addClass('inactive_tab1');
                $('#marlog_details_tab').removeClass('inactive_tab1');
                $('#marlog_details_tab').addClass('active_tab1 active');
                $('#marlog_details_tab').attr('href', '#marlog_details');
                $('#marlog_details_tab').attr('data-toggle', 'tab');
                $('#marlog_details').addClass('active in');
            }

        });


        //------------------------------------------------------MARLOG------------------------------------------------------
        $('#previous_btn_marlog_details').click(function() {
            $('#marlog_details_tab').removeClass('active active_tab1');
            $('#marlog_details_tab').removeAttr('href data-toggle');
            $('#marlog_details').removeClass('active in');
            $('#marlog_details_tab').addClass('inactive_tab1');
            $('#gprs_details_tab').removeClass('inactive_tab1');
            $('#gprs_details_tab').addClass('active_tab1 active');
            $('#gprs_details_tab').attr('href', '#gprs_details');
            $('#gprs_details_tab').attr('data-toggle', 'tab');
            $('#gprs_details').addClass('active in');
        });


        $('#btn_marlog_details_next').click(function(e) {
            e.preventDefault();
            $('#marlog_details_tab').removeClass('active active_tab1');
            $('#marlog_details_tab').removeAttr('href data-toggle');
            $('#marlog_details').removeClass('active');
            $('#marlog_details_tab').addClass('inactive_tab1');
            $('#scat_details_tab').removeClass('inactive_tab1');
            $('#scat_details_tab').addClass('active_tab1 active');
            $('#scat_details_tab').attr('href', '#scat_details');
            $('#scat_details_tab').attr('data-toggle', 'tab');
            $('#scat_details').addClass('active in');

            
    marlog_marlog_date = $('#marlog_marlog_date').val();
    $('#scat_marlog_date').val(marlog_marlog_date);
    $('#testing_marlog_date').val(marlog_marlog_date);
    $('#marlog2_fail_marlog_date').val(marlog_marlog_date);
    $('#marlog2_pass_marlog_date').val(marlog_marlog_date);
    $('#gprs2_marlog_date').val(marlog_marlog_date);
    $('#usr_marlog_date').val(marlog_marlog_date);
    $('#usr_repair_marlog_date').val(marlog_marlog_date);
        });


        //------------------------------------------------------SCAT------------------------------------------------------
        $('#previous_btn_scat_details').click(function() {
            $('#scat_details_tab').removeClass('active active_tab1');
            $('#scat_details_tab').removeAttr('href data-toggle');
            $('#scat_details').removeClass('active in');
            $('#scat_details_tab').addClass('inactive_tab1');
            $('#marlog_details_tab').removeClass('inactive_tab1');
            $('#marlog_details_tab').addClass('active_tab1 active');
            $('#marlog_details_tab').attr('href', '#marlog_details');
            $('#marlog_details_tab').attr('data-toggle', 'tab');
            $('#marlog_details').addClass('active in');
        });


        $('#btn_scat_details_next').click(function(e) {
            e.preventDefault();
            $('#scat_details_tab').removeClass('active active_tab1');
            $('#scat_details_tab').removeAttr('href data-toggle');
            $('#scat_details').removeClass('active');
            $('#scat_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#scat_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');

            marlog_marlog_date = $('#marlog_marlog_date').val();
    $('#scat_marlog_date').val(marlog_marlog_date);
    $('#testing_marlog_date').val(marlog_marlog_date);
    $('#marlog2_fail_marlog_date').val(marlog_marlog_date);
    $('#marlog2_pass_marlog_date').val(marlog_marlog_date);
    $('#gprs2_marlog_date').val(marlog_marlog_date);
    $('#usr_marlog_date').val(marlog_marlog_date);
    $('#usr_repair_marlog_date').val(marlog_marlog_date);
        });
        });



        //------------------------------------------------------TESTING------------------------------------------------------
        $('#previous_btn_testing_details').click(function() {
            $('#testing_details_tab').removeClass('active active_tab1');
            $('#testing_details_tab').removeAttr('href data-toggle');
            $('#testing_details').removeClass('active in');
            $('#testing_details_tab').addClass('inactive_tab1');
            $('#scat_details_tab').removeClass('inactive_tab1');
            $('#scat_details_tab').addClass('active_tab1 active');
            $('#scat_details_tab').attr('href', '#marlog_details');
            $('#scat_details_tab').attr('data-toggle', 'tab');
            $('#scat_details').addClass('active in');
        });

        $('#btn_testing_details_next').click(function(e) {
            e.preventDefault();
         


            if (checkBoxTesting.checked == true) {
                $('#testing_details_tab').removeClass('active active_tab1');
                $('#testing_details_tab').removeAttr('href data-toggle');
                $('#testing_details').removeClass('active');
                $('#testing_details_tab').addClass('inactive_tab1');
                $('#marlog2_details_tab').removeClass('inactive_tab1');
                $('#marlog2_details_tab').addClass('active_tab1 active');
                $('#marlog2_details_tab').attr('href', '#scat_details');
                $('#marlog2_details_tab').attr('data-toggle', 'tab');
                $('#marlog2_fail_details').addClass('active in');
            } else {
                $('#testing_details_tab').removeClass('active active_tab1');
                $('#testing_details_tab').removeAttr('href data-toggle');
                $('#testing_details').removeClass('active');
                $('#testing_details_tab').addClass('inactive_tab1');
                $('#marlog2_details_tab').removeClass('inactive_tab1');
                $('#marlog2_details_tab').addClass('active_tab1 active');
                $('#marlog2_details_tab').attr('href', '#scat_details');
                $('#marlog2_details_tab').attr('data-toggle', 'tab');
                $('#marlog2_pass_details').addClass('active in');
                
            }


            testing_testing_date = $('#testing_testing_date').val();
            $('#marlog2_pass_testing_date').val(testing_testing_date);
            $('#marlog2_fail_testing_date').val(testing_testing_date);
            $('#gprs2_testing_date').val(testing_testing_date);
            $('#usr_testing_date').val(testing_testing_date);
            $('#usr_repair_testing_date').val(testing_testing_date);
        });


        //------------------------------------------------------MARLOG2------------------------------------------------------
        $('#previous_btn_marlog2_fail_details').click(function() {
            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_fail_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#marlog_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');
        });

        $('#previous_btn_marlog2_pass_details').click(function() {
            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_pass_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#marlog_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');

          
       
        });


        $('#btn_marlog2_fail_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_fail_details').removeClass('active');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#grpsusr_details_tab').removeClass('inactive_tab1');
            $('#grpsusr_details_tab').addClass('active_tab1 active');
            $('#grpsusr_details_tab').attr('href', '#scat_details');
            $('#grpsusr_details_tab').attr('data-toggle', 'tab');
            $('#usr_details').addClass('active in');

            marlog2_fail_date = $('#marlog2_fail_date').val();
            $('#usr_marlog2_date').val(marlog2_fail_date);
            $('#usr_repair_marlog2_date').val(marlog2_fail_date);
        });


        $('#btn_marlog2_pass_details_next').click(function(e) {
            e.preventDefault();

            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_pass_details').removeClass('active');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#grpsusr_details_tab').removeClass('inactive_tab1');
            $('#grpsusr_details_tab').addClass('active_tab1 active');
            $('#grpsusr_details_tab').attr('href', '#scat_details');
            $('#grpsusr_details_tab').attr('data-toggle', 'tab');
            $('#gprs2_details').addClass('active in');

            marlog2_pass_marlog2_date = $('#marlog2_pass_marlog2_date').val();
            $('#gprs2_marlog2_date').val(marlog2_pass_marlog2_date);
        });

        //------------------------------------------------------GPRS2------------------------------------------------------
        $('#previous_btn_gprs2_details').click(function() {
            $('#gprs2_details_tab').removeClass('active active_tab1');
            $('#gprs2_details_tab').removeAttr('href data-toggle');
            $('#gprs2_details').removeClass('active in');
            $('#gprs2_details_tab').addClass('inactive_tab1');
            $('#marlog2_details_tab').removeClass('inactive_tab1');
            $('#marlog2_details_tab').addClass('active_tab1 active');
            $('#marlog2_details_tab').attr('href', '#marlog_details');
            $('#marlog2_details_tab').attr('data-toggle', 'tab');
            $('#marlog2_pass_details').addClass('active in');
        });
        //------------------------------------------------------USR------------------------------------------------------
        $('#previous_btn_usr_details').click(function() {
            $('#usr_details_tab').removeClass('active active_tab1');
            $('#usr_details_tab').removeAttr('href data-toggle');
            $('#usr_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#marlog2_details_tab').removeClass('inactive_tab1');
            $('#marlog2_details_tab').addClass('active_tab1 active');
            $('#marlog2_details_tab').attr('href', '#marlog_details');
            $('#marlog2_details_tab').attr('data-toggle', 'tab');
            $('#marlog2_fail_details').addClass('active in');
        });

        $('#btn_usr_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

            $('#usr_details_tab').removeClass('active active_tab1');
            $('#usr_details_tab').removeAttr('href data-toggle');
            $('#usr_details').removeClass('active');
            $('#usr_details_tab').addClass('inactive_tab1');
            $('#usr_repair_details_tab').removeClass('inactive_tab1');
            $('#usr_repair_details_tab').addClass('active_tab1 active');
            $('#usr_repair_details_tab').attr('href', '#scat_details');
            $('#usr_repair_details_tab').attr('data-toggle', 'tab');
            $('#usr_repair_details').addClass('active in');

            usr_usr_date = $('#usr_usr_date').val();
            $('#usr_repair_usr_date').val(usr_usr_date);
        });


        //------------------------------------------------------USR REPAIR------------------------------------------------------
        $('#previous_btn_usr_repair_details').click(function() {
            $('#usr_repair_details_tab').removeClass('active active_tab1');
            $('#usr_repair_details_tab').removeAttr('href data-toggle');
            $('#usr_repair_details').removeClass('active in');
            $('#usr_details_tab').addClass('inactive_tab1');
            $('#usr_details_tab').removeClass('inactive_tab1');
            $('#usr_details_tab').addClass('active_tab1 active');
            $('#usr_details_tab').attr('href', '#marlog_details');
            $('#usr_details_tab').attr('data-toggle', 'tab');
            $('#usr_details').addClass('active in');
        });

        $('#btn_usr_repair_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

            if (checkBoxRepair.checked == true) {


                $('#usr_repair_details_tab').removeClass('active active_tab1');
                $('#usr_repair_details_tab').removeAttr('href data-toggle');
                $('#usr_repair_details').removeClass('active');
                $('#usr_repair_details_tab').addClass('inactive_tab1');
                $('#gprs_details_tab').removeClass('inactive_tab1');
                $('#gprs_details_tab').addClass('active_tab1 active');
                $('#gprs_details_tab').attr('href', '#scat_details');
                $('#gprs_details_tab').attr('data-toggle', 'tab');
                $('#gprs_details').addClass('active in');
            } else {
                $('#usr_repair_details_tab').removeClass('active active_tab1');
                $('#usr_repair_details_tab').removeAttr('href data-toggle');
                $('#usr_repair_details').removeClass('active');
                $('#usr_repair_details_tab').addClass('inactive_tab1');
                $('#marlog3_scrap_details_tab').removeClass('inactive_tab1');
                $('#marlog3_scrap_details_tab').addClass('active_tab1 active');
                $('#marlog3_scrap_details_tab').attr('href', '#scat_details');
                $('#marlog3_scrap_details_tab').attr('data-toggle', 'tab');
                $('#marlog3_scrap_details').addClass('active in');
            }

        });

        //------------------------------------------------------MARLOG 3------------------------------------------------------

        $('#previous_btn_marlog3_scrap_details').click(function() {
            $('#marlog3_scrap_details_tab').removeClass('active active_tab1');
            $('#marlog3_scrap_details_tab').removeAttr('href data-toggle');
            $('#marlog3_scrap_details').removeClass('active in');
            $('#usr_repair_details_tab').addClass('inactive_tab1');
            $('#usr_repair_details_tab').removeClass('inactive_tab1');
            $('#usr_repair_details_tab').addClass('active_tab1 active');
            $('#usr_repair_details_tab').attr('href', '#marlog_details');
            $('#usr_repair_details_tab').attr('data-toggle', 'tab');
            $('#usr_repair_details').addClass('active in');
        });
  
</script>