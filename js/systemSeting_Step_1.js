function loadDistric(email) {

    var comboData = '<option value="0" selected disabled hidden>Select District </option>';
    $.post("../views/loadcombox.php", {comboBox: 'district', type: email}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.ds').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
               // alert(qData.district_id);
             //   $('#farm_district').val(qData.district_name);
//                if (selected !== undefined || e !== null || e.length !== 0) {
//                    if (parseInt(selected) === parseInt(qData.district_id)) {
//                        comboData += '<option value="' + qData.district_id + '" selected>' + qData.district_name + '</option>';
//                    } else {
//                        comboData += '<option value="' + qData.district_id + '">' + qData.district_name + '</option>';
//                    }
//                } else {
                    comboData += '<option value="' + qData.dsd_id + '">' + qData.dsd_name + '</option>';
//                }
            });
        }
       // alert(comboData);
        $('.ds').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
function loadAsc(selected, callBack) {
    var disreict = $('#farm_district').val();

    var comboData = '<option value="0" selected disabled hidden>Select ACS</option>';

    $.post("../views/loadcombox.php", {comboBox: 'asc', k_district: disreict}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.farm_asc123').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.gnd_id)) {
                        comboData += '<option value="' + qData.gnd_id + '" selected>' + qData.gnd_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.gnd_id + '">' + qData.gnd_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.gnd_id + '">' + qData.gnd_name + '</option>';
                }
            });
        }

        $('.farm_asc123').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}


function loadGs(selected, callBack) {
    var disreict = $('#combo_district').val();
//var disreict=$().val();
    var comboData = '<option value="0" selected disabled hidden>Select GS</option>';
    $.post("../views/loadcombox.php", {comboBox: 'gs', k_district: disreict}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_gs').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.gsid)) {
                        comboData += '<option value="' + qData.gsid + '" selected>' + qData.gsname + '</option>';
                    } else {
                        comboData += '<option value="' + qData.gsid + '">' + qData.gsname + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.gsid + '">' + qData.gsname + '</option>';
                }
            });
        }
        $('.item_gs').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
// save



//function saveAcs() {
//
//    //alert("sdjaskldfhskd");
//    var f_id = $('#f_id').val();
//    var f_name = $('#f_name').val();
//    var l_name = $('#l_name').val();
//    var email = $('#f_email').val();
//    var f_dob = $('#f_dob').val();
//    var f_address = $('#f_address').val();
//    var f_tp = $('#f_tp').val();
//    var f_mob = $('#f_mob').val();
//    var farm_district = $('#farm_district').val();
//    var farm_asc = $('#farm_asc').val();
//    //var combo_gs = $('#combo_gs').val();
//    var gender = $('#gender').val();
//    var f_fax = $('#f_fax').val();
//    var added_by = $('#email').val();
//    var flag_confirm = "1";
//    //var doa_Tel = $('#doa_Tel').val();
//    //alert("sdjaskldfhskd");
//    if (f_id != '') {
//        $.post("../views/view_Acs.php", {action: 'insert', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: farm_district, key10: farm_asc, key11: gender, key12: f_fax, key13: flag_confirm, key14: added_by},
//                function (e) {
//                    alertifyMsgDisplay(e, 200);
//                    acsRegistrationTable();
//                    clearAcsReg();
//                }, "json");
//    } else {
////        $.post("../views/view_Acs.php", {action: 'update', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: farm_district, key10: farm_asc, key11: gender, key12: f_fax, key13: flag_confirm},
////                function (e) {
////                    alertifyMsgDisplay(e, 200);
////                    acsRegistrationTable();
////                    clearAcsReg();
////                }, "json");
//                alert("No Data");
//
//    }
//}

function acsRegistrationTable() {
    //var tableData;
    //var deleteUserID;

    $.post("../views/view_step_1.php", {action: 'select'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
            alert("No Data");
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.l_id + '</td>';
                //tableData += '<td>' + tblValue.crop + '</td>';
                //tableData += '<td>' + tblValue.variety + '</td>';
                //tableData += '<td>' + tblValue.planting + '</td>';
                //tableData += '<td>' + tblValue.harvesting + '</td>';

//                tableData += '<td>' + tblValue.f_name +" "+ tblValue.l_name +'</td>';
//                
//                tableData += '<td>' + tblValue.email + '</td>';
//                tableData += '<td>' + tblValue.f_address + '</td>';
//
//                tableData += '<td>' + tblValue.f_tp + '</td>';
//                tableData += '<td>' + tblValue.f_mob + '</td>';
//
//
//                tableData += '<td>' + tblValue.dsd_name + '</td>';
//
//                tableData += '<td>' + tblValue.gnd_name + '</td>';

                tableData += '<td><div class="btn-group"><center><button class="btn btn-info updateACS" value="' + tblValue.f_id +":"+tblValue.l_id+ '"><i class="glyphicon glyphicon-hourglass"></i></center></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData);
            
//            $('.deleteAcs').click(function () {
//                var delete_f_ID = $(this).val();
//                alertify.confirm("Are you sure want to detele this record?", function (e) {
//                    if (e) {
//                        $.post("../views/view_Acs.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
//                            acsRegistrationTable();
//                            alertifyMsgDisplay(e, 200);
//                            clearAcsReg();
//                        }, "json");
//                    } else {
//                        alertify.log("Cancel process", "Done", 1000);
//                        clearAcsReg();
//                    }
//                });
//            });
//            ///////////// UPDATE acs ///////////////
//            $('.updateACS').click(function () {
//
//                acsUpdate(($(this).val()));
//            });
        }
    }, "json");
}
//function  acsUpdate(ff_id) {//Update  ACS_registration
//
//    $.post("../views/view_Acs.php", {action: 'select_by_Id', dacs_f_id: ff_id}, function (Data) {
//        if (Data === undefined || Data.length === 0 || Data === null) {
//            alertify.error("Internal Error Occured", 2000);
//        } else {
//
//            $.each(Data, function (index, DataView) { //$.each == for each in php
//                //$('#f_id').val(DataView.id);
//                $('#f_id').val(DataView.f_id);
//                $('#l_id').val(DataView.f_name);
//                //$('#l_name').val(DataView.l_name);
//                //  $('#combo_district').val(DataView.district_id).text();
////                loadDistric(DataView.district_id);
////                //$('#combo_asc').val(DataView.asc_id).text();
////                loadAsc(DataView.asc_id);
////                loadAsc(DataView.gs_id);
////                $('#f_email').val(DataView.email);
////                $('#f_dob').val(DataView.f_dob);
////                $('#f_address').val(DataView.f_address);
////                $('#f_tp').val(DataView.f_tp);
////                $('#f_mob').val(DataView.f_mob);
////                $('#gender').val(DataView.gender);
////                $('#f_fax').val(DataView.f_fax);
//                //$('#doa_Tel').val(DataView.DOA_tel);
//
//
//
//            });
//        }
//    }, "json");
//}
//function clearAcsReg() {
//    $('#f_id').val('');
//    $('#f_name').val('');
//    $('#l_name').val('');
//    //$('#combo_district').val();
//    //$('#combo_asc').val();
//    loadDistric();
//    loadAsc(1);
//    $('#f_email').val('');
//    $('#f_dob').val('');
//    $('#f_address').val('');
//    $('#f_tp').val('');
//    $('#f_mob').val('');
//    $('#gender').val('');
//    $('#f_fax').val('');
//    //$('#doa_Tel').val('');
//    
//}
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