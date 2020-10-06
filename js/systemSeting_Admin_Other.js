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
//function loadAsc(selected, callBack) {
//    var disreict = $('#combo_district').val();
////var disreict=$().val();
//    var comboData = '<option value="0" selected>Select ACS</option>';
//    $.post("../views/loadcombox.php", {comboBox: 'asc', k_district: disreict}, function (e) {
//        if (e === undefined || e.length === 0 || e === null) {
//            comboData += '<option value="0"> -- No Data Found -- </option>';
//            $('.item_asc').html('').append(comboData);
//            chosenRefresh();
//        } else {
//            $.each(e, function (index, qData) {
//                if (selected !== undefined || e !== null || e.length !== 0) {
//                    if (parseInt(selected) === parseInt(qData.ascid)) {
//                        comboData += '<option value="' + qData.ascid + '" selected>' + qData.ascname + '</option>';
//                    } else {
//                        comboData += '<option value="' + qData.ascid + '">' + qData.ascname + '</option>';
//                    }
//                } else {
//                    comboData += '<option value="' + qData.ascid + '">' + qData.ascname + '</option>';
//                }
//            });
//        }
//
//        $('.item_asc').html('').append(comboData);
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


//function loadGs(selected, callBack) {
//    var disreict = $('#combo_district').val();
////var disreict=$().val();
//    var comboData = '<option value="0" selected>Select GS</option>';
//    $.post("../views/loadcombox.php", {comboBox: 'gs', k_district: disreict}, function (e) {
//        if (e === undefined || e.length === 0 || e === null) {
//            comboData += '<option value="0"> -- No Data Found -- </option>';
//            $('.item_gs').html('').append(comboData);
//            chosenRefresh();
//        } else {
//            $.each(e, function (index, qData) {
//                if (selected !== undefined || e !== null || e.length !== 0) {
//                    if (parseInt(selected) === parseInt(qData.gsid)) {
//                        comboData += '<option value="' + qData.gsid + '" selected>' + qData.gsname + '</option>';
//                    } else {
//                        comboData += '<option value="' + qData.gsid + '">' + qData.gsname + '</option>';
//                    }
//                } else {
//                    comboData += '<option value="' + qData.gsid + '">' + qData.gsname + '</option>';
//                }
//            });
//        }
//
//        $('.item_gs').html('').append(comboData);
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
// save



function saveAcs_crop() {

    
    var id = $('#id').val();
    var c_name = $('#c_name').val();
    var c_type = $('#c_type').val();//later convert to md5
    var c_no = $('#c_no').val();
    
    
    //var combo_asc = $('#combo_asc').val();
    //var combo_gs = $('#combo_gs').val();
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
    if (id == '') {
        $.post("../views/view_Admin_Other.php", {action: 'insert', key1: c_name, key2: c_type, key3: c_no},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable();
                    clearAcsReg();
                }, "json");
    } else {
        $.post("../views/view_Admin_Other.php", {action: 'update', key1: c_name, key2: c_type, key3: c_no, key4: id},
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

    $.post("../views/view_Admin_Other.php", {action: 'select'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.name + '</td>';
                tableData += '<td>' + tblValue.type + '</td>';
                tableData += '<td>' + tblValue.no + '</td>';


                //tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                
                tableData += '<td><div class="btn-group"><button class="btn btn-info updateACS" value="' + tblValue.id + '"><i class="glyphicon glyphicon-pencil"></i></button><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';

                tableData += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                alertify.confirm("Are you sure, you want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Admin_Other.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
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

    $.post("../views/view_Admin_Other.php", {action: 'select_by_Id', dacs_f_id: ff_id}, function (Data) {
        if (Data === undefined || Data.length === 0 || Data === null) {
            alertify.error("Internal Error Occured", 2000);
        } else {

            $.each(Data, function (index, DataView) { //$.each == for each in php
                $('#id').val(DataView.id);
                $('#c_no').val(DataView.no);
                $('#c_name').val(DataView.name);
                $('#c_type').val(DataView.type);

                //$('#doa_Tel').val(DataView.DOA_tel);



            });
        }
    }, "json");
}
function clearAcsReg() {
    $('#id').val('');
    $('#c_name').val('');
    $('#c_type').val('');
    $('#c_no').val('');
    $('#id').val('');
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