function loadCount(selected) {    //load count
    //count=qry count+1
    var cou=1;
    var a=0;
    $.post("../views/count.php", {comboBox: selected}, function (e) {
        $.each(e, function (index, qData) {
        a=parseInt(qData.count); 
        if(a==0){
        cou=1;
        }
        else{
           cou=a+1; 
        }
         });
      $('#count').val(cou); 
     
        }, "json");

}
function loadId(selected, callBack) {  // get f_id

    var comboData = '<option value="0" selected>Select Fartmer ID </option>';
    $.post("../views/loadcombox.php", {comboBox: 'fid'}, function (e) { // destination of the func, argument sending, return value to this func
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_id').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.f_id)) {
                        comboData += '<option value="' + qData.f_id + '" selected>' + qData.f_id + '</option>';
                    } else {
                        comboData += '<option value="' + qData.f_id + '">' + qData.f_id + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.f_id + '">' + qData.f_id + '</option>';
                }
            });
        }

        $('.item_id').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//-----------------------------------------------------------------------------------------------------------------------------------------
//function loadId(selected, callBack) {  // get f_id
//
//    var comboData = '<option value="0" selected>Select Fartmer ID </option>';
//    $.post("../views/loadcombox.php", {comboBox: 'fid'}, function (e) { // destination of the func, argument sending, return value to this func
//        if (e === undefined || e.length === 0 || e === null) {
//            comboData += '<option value="0"> -- No Data Found -- </option>';
//            $('.item_id').html('').append(comboData);
//            chosenRefresh();
//        } else {
//            $.each(e, function (index, qData) {
//                if (selected !== undefined || e !== null || e.length !== 0) {
//                    if (parseInt(selected) === parseInt(qData.f_id)) {
//                        comboData += '<option value="' + qData.f_id + '" selected>' + qData.f_id + '</option>';
//                    } else {
//                        comboData += '<option value="' + qData.f_id + '">' + qData.f_id + '</option>';
//                    }
//                } else {
//                    comboData += '<option value="' + qData.f_id + '">' + qData.f_id + '</option>';
//                }
//            });
//        }
//
//        $('.item_id').html('').append(comboData);
//        chosenRefresh();
//        if (callBack !== undefined) {
//            if (typeof callBack === 'function') {
//                callBack();
//            }
//        }
//
//    }, "json");
//
//}
//-------------------------------------------------------------------------------------------------------------------------------------
function loadLand(selected, callBack) { // select land id list
    var f_id = $('#f_id').val();
//var disreict=$().val();
    var comboData = '<option value="0" selected>Select Land</option>';
    $.post("../views/loadcombox.php", {comboBox: 'lid', f_id: f_id}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_land').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.l_id)) {
                        comboData += '<option value="' + qData.l_id + '" selected>' + qData.l_id + '</option>';
                    } else {
                        comboData += '<option value="' + qData.l_id + '">' + qData.l_id + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.l_id + '">' + qData.l_id + '</option>';
                }
            });
        }

        $('.item_land').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//----------------------------------------------------------------------------------------------------------------------------------
function loadCrop(selected, callBack) {  // get f_id

    var comboData = '<option value="0" selected>Select Crop ID </option>';
    $.post("../views/loadcombox.php", {comboBox: 'crop'}, function (e) { // destination of the func, argument sending, return value to this func
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_crop').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.name)) {
                        comboData += '<option value="' + qData.name + '" selected>' + qData.name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.name + '">' + qData.name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.name + '">' + qData.name + '</option>';
                }
            });
        }

        $('.item_crop').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//-------------------------------------------------------------------------------------------------------------------------------

function loadDistric(selected, callBack) {

    var comboData = '<option value="0" selected>Select District </option>';
    $.post("../views/loadcombox.php", {comboBox: 'district'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_distric').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.districtid)) {
                        comboData += '<option value="' + qData.districtid + '" selected>' + qData.district + '</option>';
                    } else {
                        comboData += '<option value="' + qData.districtid + '">' + qData.district + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.districtid + '">' + qData.district + '</option>';
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
function loadAsc(selected, callBack) {
    var disreict = $('#combo_district').val();
//var disreict=$().val();
    var comboData = '<option value="0" selected>Select ACS</option>';
    $.post("../views/loadcombox.php", {comboBox: 'asc', k_district: disreict}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.item_asc').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.ascid)) {
                        comboData += '<option value="' + qData.ascid + '" selected>' + qData.ascname + '</option>';
                    } else {
                        comboData += '<option value="' + qData.ascid + '">' + qData.ascname + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.ascid + '">' + qData.ascname + '</option>';
                }
            });
        }

        $('.item_asc').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
// save



function saveAcs() {

    //alert("sdjaskldfhskd");
    var f_id = $('#f_id').val();
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var email = $('#email').val();
    var f_dob = $('#f_dob').val();
    var f_address = $('#f_address').val();
    var f_tp = $('#f_tp').val();
    var f_mob = $('#f_mob').val();
    var combo_district = $('#combo_district').val();
    var combo_asc = $('#combo_asc').val();
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
    if (f_id != '') {
        $.post("../views/view_Acs.php", {action: 'insert', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: combo_district, key10: combo_asc},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable();
                    clearAcsReg();
                }, "json");
    } else {
        $.post("../views/view_Acs.php", {action: 'update', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: combo_district, key10: combo_asc},
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

    $.post("../views/view_Acs.php", {action: 'select'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.f_name + '</td>';
                tableData += '<td>' + tblValue.l_name + '</td>';
                tableData += '<td>' + tblValue.email + '</td>';
                tableData += '<td>'  + tblValue.f_dob + '</td>';
                tableData += '<td>' + tblValue.f_address + '</td>';

                tableData += '<td>' + tblValue.f_tp + '</td>';

                tableData += '<td>' + tblValue.f_mob + '</td>';

                tableData += '<td>' + tblValue.district_id + '</td>';

                tableData += '<td>' + tblValue.asc_id + '</td>';

                //tableData += '<td><div class="btn-group"><button class="btn btn-warning updateACS" value="' + tblValue.f_id + '"><i class="glyphicon glyphicon-pencil"></i></button><button class="btn btn-danger deleteAcs" value="' + tblValue.f_id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData);
            ///////////// DELETE acs /////////////////
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                alertify.confirm("Are you sure want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Acs.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
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
                loadAsc(DataView.asc_id);
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
    $('#id').val('');
    $('#f_id').val('');
    $('#f_name').val('');
    $('#l_name').val('');
    //$('#combo_district').val();
    //$('#combo_asc').val();
    loadDistric();
    loadAsc(1);
    $('#email').val('');
    $('#f_dob').val('');
    $('#f_address').val('');
    $('#f_tp').val('');
    $('#f_mob').val('');
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