function loadDistric(selected, callBack) {

    var comboData = '<option value="0" selected desabled hidden>Select District </option>';
    $.post("../views/loadcombox.php", {comboBox: 'adm_district'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_distric').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.district_id)) {
                        comboData += '<option value="' + qData.district_id + '" selected>' + qData.district_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.district_id + '">' + qData.district_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.district_id + '">' + qData.district_name + '</option>';
                }
            });
        }

        $('.item_distric').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
function access_log() {


    $.post("../views/view_Admin_AI.php", {action: 'access'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table1 tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.user + '</td>';
                tableData += '<td>' + tblValue.date_time + '</td>';
                tableData += '<td>' + tblValue.logout_time + '</td>';
                tableData += '<td>'  + tblValue.email + '</td>';
                tableData += '<td>' + tblValue.tp + '</td>';
                tableData += '<td>' + tblValue.mob + '</td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table1 tbody').html('').append(tableData);
        }
    }, "json");
}

function activity_log() {


    $.post("../views/view_Admin_AI.php", {action: 'activity'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table1 tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.email + '</td>'
                tableData += '<td>' + tblValue.date_time + '</td>';;
                tableData += '<td>' + tblValue.action + '</td>';
                tableData += '<td>' + tblValue.table_name + '</td>';
                tableData += '<td>'  + tblValue.rec_no + '</td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table1 tbody').html('').append(tableData);
        }
    }, "json");
}

function saveAcs_ai_usr() {

    //alert("sdjaskldfhskd");
    //var f_id = $('#user_id').val();
    var f_u_name = $('#u_name').val();
    var f_password = $('#password').val();//later convert to md5
    var type = $('#type').val();
    var role = $('#type').val();
    var email = $('#email').val();
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var f_id = $('#id').val();
    var f_dob = $('#dob').val();
    var f_address = $('#address').val();
    var f_tp = $('#tp').val();
    var f_mob = $('#mob').val();
    var combo_district = $('#combo_district').val();
    
    //var combo_asc = $('#combo_asc').val();
    //var combo_gs = $('#combo_gs').val();
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
//    if (f_id == '') {
        $.post("../views/view_Admin_AI.php", {action: 'insert', key1: f_u_name, key2: f_password, key3: type, key4: email, key5: f_name, key6: l_name, key7: f_id, key8: f_dob, key9: f_address, key10: f_tp, key11: f_mob, key12: combo_district, key13: role},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable();
                    clearAcsReg();
                }, "json");
//    } 
//    else {
//        $.post("../views/view_Admin_AI.php", {action: 'update', key1: f_u_name, key2: f_password, key3: type, key4: email, key5: f_name, key6: l_name, key7: f_id, key8: f_dob, key9: f_address, key10: f_tp, key11: f_mob, key12: combo_district},
//                function (e) {
//                    alertifyMsgDisplay(e, 200);
//                    acsRegistrationTable();
//                    clearAcsReg();
//                }, "json");
//
//    }
}
function saveAcs_1() {

    //alert("sdjaskldfhskd");
    //var f_id = $('#user_id').val();
    var f_u_name = $('#u_name').val();
    var f_password = $('#password').val();//later convert to md5
    var type = "Certify";
    var role = "Certify";
    var email = $('#email').val();
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var f_id = $('#id').val();
    var f_dob = $('#dob').val();
    var f_address = $('#address').val();
    var f_tp = $('#tp').val();
    var f_mob = $('#mob').val();
    //var combo_district = $('#combo_district').val();
    
    //var combo_asc = $('#combo_asc').val();
    //var combo_gs = $('#combo_gs').val();
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
    if (f_id != '') {
        $.post("../views/view_Admin_AI.php", {action: 'insert_1', key1: f_u_name, key2: f_password, key3: type, key4: email, key5: f_name, key6: l_name, key7: f_id, key8: f_dob, key9: f_address, key10: f_tp, key11: f_mob, key12: role},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable_1();
                    clearAcsReg();
                }, "json");
    } else {
        $.post("../views/view_Admin_AI.php", {action: 'update', key1: f_u_name, key2: f_password, key3: type, key4: email, key5: f_name, key6: l_name, key7: f_id, key8: f_dob, key9: f_address, key10: f_tp, key11: f_mob},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable();
                    clearAcsReg();
                }, "json");

    }
}
function saveAcs_2() {

    //alert("sdjaskldfhskd");
    //var f_id = $('#user_id').val();
    var f_u_name = $('#u_name').val();
    var f_password = $('#password').val();//later convert to md5
    var type = "Administrator";
    var role = "Administrator";
    var email = $('#email').val();
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var f_id = $('#id').val();
    var f_dob = $('#dob').val();
    var f_address = $('#address').val();
    var f_tp = $('#tp').val();
    var f_mob = $('#mob').val();
    //var combo_district = $('#combo_district').val();
    
    //var combo_asc = $('#combo_asc').val();
    //var combo_gs = $('#combo_gs').val();
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
    if (f_id != '') {
        $.post("../views/view_Admin_AI.php", {action: 'insert_2', key1: f_u_name, key2: f_password, key3: type, key4: email, key5: f_name, key6: l_name, key7: f_id, key8: f_dob, key9: f_address, key10: f_tp, key11: f_mob, key12: role},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable_2();
                    clearAcsReg();
                }, "json");
    } else {
        $.post("../views/view_Admin_AI.php", {action: 'update', key1: f_u_name, key2: f_password, key3: type, key4: email, key5: f_name, key6: l_name, key7: f_id, key8: f_dob, key9: f_address, key10: f_tp, key11: f_mob},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable();
                    clearAcsReg();
                }, "json");

    }
}
function acsRegistrationTable() {
    //var tableData;
    //var deleteUserID;

    $.post("../views/view_Admin_AI.php", {action: 'select'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.username + '</td>';
                tableData += '<td>' + tblValue.type + '</td>';
                tableData += '<td>' + tblValue.email + '</td>';
                tableData += '<td>'  + tblValue.f_name +" "+tblValue.l_name + '</td>';
                
                tableData += '<td>' + tblValue.nic + '</td>';


                //tableData += '<td>' + tblValue.address + '</td>';

                tableData += '<td>' + tblValue.tp + '</td>';
                tableData += '<td>' + tblValue.mob + '</td>';
                tableData += '<td>' + tblValue.district_name + '</td>';

                tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                alertify.confirm("Are you sure, you want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Admin_AI.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
                            acsRegistrationTable();
                            alertifyMsgDisplay(e, 200);
                            clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        clearAcsReg();
                    }
                });
            });
            ///////////// UPDATE acs ///////////////
            $('.updateACS').click(function () {

                acsUpdate(($(this).val()));
            });
        }
    }, "json");
}
function acsRegistrationTable_1() {
    //var tableData;
    //var deleteUserID;

    $.post("../views/view_Admin_AI.php", {action: 'select_1'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table_1 tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.username + '</td>';
                tableData += '<td>' + tblValue.type + '</td>';
                tableData += '<td>' + tblValue.email + '</td>';
                tableData += '<td>'  + tblValue.f_name +" "+tblValue.l_name + '</td>';
                
                tableData += '<td>' + tblValue.nic + '</td>';


                //tableData += '<td>' + tblValue.address + '</td>';

                tableData += '<td>' + tblValue.tp + '</td>';
                tableData += '<td>' + tblValue.mob + '</td>';

                tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table_1 tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID_1 = $(this).val();
                alertify.confirm("Are you sure, you want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Admin_AI.php", {action: 'delete_1', dacs_f_id_1: delete_f_ID_1}, function (e) {
                            acsRegistrationTable_1();
                            alertifyMsgDisplay(e, 200);
                            clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        clearAcsReg();
                    }
                });
            });
            ///////////// UPDATE acs ///////////////
            $('.updateACS').click(function () {

                acsUpdate(($(this).val()));
            });
        }
    }, "json");
}
function acsRegistrationTable_2() {
    //var tableData;
    //var deleteUserID;

    $.post("../views/view_Admin_AI.php", {action: 'select_2'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table_2 tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.username + '</td>';
                tableData += '<td>' + tblValue.type + '</td>';
                tableData += '<td>' + tblValue.email + '</td>';
                tableData += '<td>'  + tblValue.f_name +" "+tblValue.l_name + '</td>';
                
                tableData += '<td>' + tblValue.nic + '</td>';


                //tableData += '<td>' + tblValue.address + '</td>';

                tableData += '<td>' + tblValue.tp + '</td>';
                tableData += '<td>' + tblValue.mob + '</td>';

                tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table_2 tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID_2 = $(this).val();
                alertify.confirm("Are you sure, you want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Admin_AI.php", {action: 'delete_2', dacs_f_id_2: delete_f_ID_2}, function (e) {
                            acsRegistrationTable_2();
                            alertifyMsgDisplay(e, 200);
                            clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        clearAcsReg();
                    }
                });
            });
            ///////////// UPDATE acs ///////////////
            $('.updateACS').click(function () {

                acsUpdate(($(this).val()));
            });
        }
    }, "json");
}
function  acsUpdate(ff_id) {//Update  ACS_registration

    $.post("../views/view_Acs.php", {action: 'select_by_Id', dacs_f_id: ff_id}, function (Data) {
        if (Data === undefined || Data.length === 0 || Data === null) {
            alertify.error("Internal Error Occured", 2000);
        } else {

            $.each(Data, function (index, DataView) { //$.each == for each in php

                $('#f_id').val(DataView.f_id);
                $('#f_name').val(DataView.f_name);
                $('#l_name').val(DataView.l_name);
                //  $('#combo_district').val(DataView.district_id).text();
                loadDistric(DataView.district_id);
                //$('#combo_asc').val(DataView.asc_id).text();
                //loadAsc(DataView.asc_id);
                //loadAsc(DataView.gs_id);
                $('#email').val(DataView.email);
                $('#f_dob').val(DataView.f_dob);
                $('#f_address').val(DataView.f_address);
                $('#f_tp').val(DataView.f_tp);
                $('#f_mob').val(DataView.f_mob);
                //$('#doa_Tel').val(DataView.DOA_tel);



            });
        }
    }, "json");
}
function clearAcsReg() {
    
    $('#f_name').val('');
    $('#l_name').val('');
    $('#email').val('');
    //$('#combo_district').val();
    //$('#combo_asc').val();
    //loadDistric();
    //loadAsc(1);
    $('#u_name').val('');
    $('#password_init').val('');
    $('#password').val('');
    $('#id').val('');
    $('#dob').val('');
    $('#address').val('');
    $('#tp').val('');
    $('#mob').val('');
    $('#combo_district').val('');
    //$('#doa_Tel').val('');
}
//====================Common functions===========================================
function alertifyMsgDisplay(jsonArray, msgTime) {//display aletify masseges
    $.each(jsonArray, function (index, msgData) {
        if (msgData.msgType === 1) {

            alertify
                    .alert(msgData.msg, function () {
                        alertify.success(msgData.msg, msgTime);
                    });

        } else if (msgData.msgType === 2) {
            alertify
                    .alert(msgData.qry, function () {
                        alertify.error(msgData.msg, msgTime);
                    });

        }
    });
}
function chosenRefresh() {
    $("select").trigger("chosen:updated");
}