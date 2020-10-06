<?php session_start(); ?> 
<html>
    <head>      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <?php   require_once '../../inc/js_files.php'; 
                include '../../inc/header_main.php';
        ?>
<script type="text/javascript" src="../../js/systemSeting_Admin.js"></script>

    </head>
    <body>
        <?php include '../../inc/main_menu.php';?>
        <div class="container-fluid">               
            <div class="row"> 
                 <div class="container-fluid">               
            <div class="row"> 
                <div class="col-md-16">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Add Training Programme</legend>
                        <div class="col-md-11">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="f_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="l_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="email">
                                        <h6 id="e_mail_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">User Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="u_name" onBlur="checkAvailability();"><span id="user-availability-status"></span>
                                        <h6 id="u_name_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" placeholder="" id="password_init">
                                        <h6 id="p_word_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Re-type Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" placeholder="" id="password">
                                        <h6 id="p_word_2" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                        <h6 id="p_word_3" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label  class="col-md-2 control-label">User Type</label>

                                    <div class="col-md-2">
                                        <select id="type" class="form-control chzn-select">
<!--                                            <select id="combo_district">-->
                                                <option disabled>Select User Type</option>
                                                <option value="AI">AI</option>
                                                <option value="AIS">Senior AI</option>     
                                              </select>
                                              <h6 id="u_type_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="" name="f_id" id="id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">DOB</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="dob">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Address</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">TP:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="tp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Mobile:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="mob">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label  class="col-md-2 control-label">DS Division</label>

                                    <div class="col-md-2">
<!--                                        <select id="combo_district" class="form-control chzn-select item_distric">-->
                                            <select id="combo_district" class="form-control chzn-select">
                                                <option disabled>Select District</option>
                                                <option value="1">Ampara</option>
                                                <option value="2">Anuradhapura</option>
                                                <option value="3">Badulla</option>
                                                <option value="4">Batticaloa</option>
                                                <option value="5">Colombo</option>
                                                <option value="6">Galle</option>
                                                <option value="7">Gampaha</option>
                                                <option value="8">Hambantota</option>
                                                <option value="9">Jaffna</option>
                                                <option value="10">Kalutara</option>
                                                <option value="11">Kandy</option>
                                                <option value="12">Kegalla</option>
                                                <option value="13">Killinochchi</option>
                                                <option value="14">Kurunegala</option>
                                                <option value="15">Mannar</option>
                                                <option value="16">Matale</option>
                                                <option value="17">Matara</option>
                                                <option value="18">Moneragala</option>
                                                <option value="19">Mullaitivu</option>
                                                <option value="20">Nuwara Eliya</option>
                                                <option value="21">Polonnaruwa</option>
                                                <option value="22">Puttalam</option>
                                                <option value="23">Rathnapura</option>
                                                <option value="24">Trincomalee</option>
                                                <option value="25">Vavunia</option>
                                                
                                                
                                              </select>
                                              <h6 id="d_division_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                        <!--</select>-->
                                    </div>
                                
<!--                                <label  class="col-md-2 control-label">ASC Division</label>
                                <div class="col-md-2">
                                        <select id="combo_asc" class="form-control item_asc" data-placeholder="select ASC Division">

                                        </select>
                                    </div>-->
                                
<!--                                <label  class="col-md-2 control-label">GS Division</label>
                                <div class="col-md-2">
                                        <select id="combo_gs" class="form-control item_gs" data-placeholder="select GS Division">

                                        </select>
                                    </div>-->
                            </div>
                                    <div class="results"></div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="saveAcs">Submit</button>
                                <button type="button" class="btn btn-default" id="canselAcs">Reset</button>
                            </div>
                        </div>
                        
<!--                        <div class="col-md-6">
                            <div class="form-horizontal">

                                <div class="form-group emailvalue">
                                    <label for="" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="acs_Mail" placeholder="Email">
                                        <h6 style="color: #ffff33; font-weight: bold; margin-left: 5px;" id="em_val"></h6>
                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="acs_Address" rows="3" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </fieldset>
                </div>
                
                <div class="col-md-12">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">AI Records</h3>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                        <table class="table farmer_details_save_Table">
                            <thead>
                                <tr class="filters">
<!--                                    <th><input type="text" class="form-control" placeholder="#" disabled></th>-->
                                    <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="User Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="User Type" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                                   
                                    <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                                    
                                    <th><input type="text" class="form-control" placeholder="NIC" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Tel" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Mobile" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="District" disabled></th>
<!--                                    <th><input type="text" class="form-control" placeholder="ASC" disabled></th>-->
                                    <!--<th><Label><b>Delete</b></label></th>-->
                                   
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
            </div>


        </div>
    </div>
</div>
</body>
<div class="footer">
<?php require_once '../../inc/Footer_1.php'; ?>
</div>

<script type="text/javascript">
                                                    function checkAvailability() {

                                                        jQuery.ajax({
                                                            url: "../views/check_availability.php",
                                                            data: 'u_name=' + $("#u_name").val(),
                                                            type: "POST",
                                                            success: function (data) {
                                                                 // alert(data);
                                                                   if (data > 0) {
                                                                       $('#saveAcs').addClass('hidden');
                                                                       $('#u_name_1').html("User Already Registered");
                                                                   }
                                                                   else{
                                                                       $('#saveAcs').removeClass('hidden');
                                                                       $('#u_name_1').html('');
                                                                   }
//                                                                $.each(data, function (index, msgData) {
// alert();
////                                                                    if (msgData.msgType > 0) {
////                                                                        alert(msgData.msgType);
////                                                                    }
//                                                                });

                                                            },
                                                            error: function () {

                                                            }
                                                        });
                                                    }

    //loadDistric();
  acsRegistrationTable();
    // $(function () {
//    $("#combo_district").change(function () {
//        loadAsc();
//    });
//
//    $("#combo_district").change(function () {
//        loadGs();
//    });
    
    $("#saveAcs").click(function () {
       
        saveAcs_ai_usr();
         
    });
    
//    $('#saveAcs').on('click', function () {
//            var a = ($("#combo_district").val());
//            //alert(a);
//            if (a !== null) {
//                $('#d_division_1').html('');
//                saveAcs();
//                $('#saveAcs').removeClass('hidden');
//            } else {
//                $('#d_division_1').html("Select the District");
//                $('#saveAcs').addClass('hidden');
//            }
//        });
        
        $('#combo_district').on('change', function () {

            if ($(this).val() !== null) {
                $('#d_division_1').html('');
                //$('#saveAcs').removeClass('hidden');
                } else {
                $('#d_division_1').html("Select the District");
                //$('#saveAcs').addClass('hidden');
                }
                });
                
        
    $("#canselAcs").click(function () {
       clearAcsReg();   
    });
                                                    $('#email').on('keyup', function () {
                                                        if ($(this).val() !== '') {
                                                            var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value) && this.value.length;
                                                            if (valid) {
                                                                $('#e_mail_1').html('');
                                                                //$('#saveAcs').removeClass('hidden');
                                                            } else {
                                                                $('#e_mail_1').html('<i class="glyphicon glyphicon-warning-sign"></i> E-Mail address is not valid.');
                                                                //$('#saveAcs').addClass('hidden');
                                                            }

                                                        } else {
                                                            $('#e_mail_1').html('<i class="glyphicon glyphicon-warning-sign"></i> E-Mail is Essential.');
                                                            //$('#saveAcs').addClass('hidden');
                                                        }
                                                    });
    
                                                    $('#u_name').on('keyup', function () {
                                                        if ($(this).val() !== '') {
                                                            $('#u_name_1').html('');
                                                            //$('#saveAcs').removeClass('hidden');

                                                        } else {
                                                            $('#u_name_1').html("User Name is Essential");
                                                            //$('#saveAcs').addClass('hidden');
                                                        }
                                                    });
                                                    
                                                    $('#password_init').on('keyup', function () {
                                                        if ($(this).val() !== '') {
                                                            $('#p_word_1').html('');
                                                            //$('#saveAcs').removeClass('hidden');

                                                        } else {
                                                            $('#p_word_1').html("Enter a password");
                                                            //$('#saveAcs').addClass('hidden');
                                                        }
                                                    });
                                                    
                                                    $('#password').on('keyup', function () {
                                                        var a = ($("#password_init").val());
                                                        var b = ($("#password").val());
                                                        if($(this).val() !== ''){
                                                            if (a != b) {
                                                                $('#p_word_2').html("Enter The Same Password");
                                                                $('#p_word_3').html('');
                                                                //$('#saveAcs').addClass('hidden');

                                                            } else {
                                                                $('#p_word_2').html('');
                                                                $('#p_word_3').html('');
                                                                //$('#saveAcs').removeClass('hidden');
                                                            }
                                                        } else{
                                                            $('#p_word_2').html('');
                                                            $('#p_word_3').html("Retype the Password");
                                                            //$('#saveAcs').addClass('hidden');
                                                        }
                                                    });
    //});

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        // Added to allow decimal, period, or delete
        if (charCode == 110 || charCode == 190 || charCode == 46)
            return true;

        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    } // isNumberKey


            
            $('#system_log').click(function () {
                var ab = $("#sess_id").val();
                logout(ab); v
            });
            $(window).on('load', function () {
            pageProtect();

        });
</script>

</html>


















