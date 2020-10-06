function loadAsc_ais_land_district(selected, callBack) {

    var comboData = '<option value="0" selected disabled hidden>Select District</option>';

    $.post("../views/loadcombox.php", {comboBox: 'dst'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.dist').html('').append(comboData);
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

        $('.dist').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//------------------------------------------------------------------------------------------------------
function loadAsc_ais_land_ds(selected, callBack) {
    var district = $('#district').val();
    //alert(district);
    var comboData = '<option value="0" selected disabled hidden>Select DS Division</option>';

    $.post("../views/loadcombox.php", {comboBox: 'dsd', district: district}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.dsd').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.dsd_id)) {
                        comboData += '<option value="' + qData.dsd_id + '" selected>' + qData.dsd_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.dsd_id + '">' + qData.dsd_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.dsd_id + '">' + qData.dsd_name + '</option>';
                }
            });
        }

        $('.dsd').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//------------------------------------------------------------------------------------------------------
function loadAsc_ais_land_gn(selected, callBack) {
    var dsdivi = $('#dsdivi').val();
    //alert(district);
    var comboData = '<option value="0" selected disabled hidden>Select GN Division</option>';

    $.post("../views/loadcombox.php", {comboBox: 'gnd', dsdivi: dsdivi}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.gnd').html('').append(comboData);
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

        $('.gnd').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//------------------------------------------------------------------------------------------------------
function loadCount_ais_land(selected) {    //load count
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
      $('#l_id').val(cou); 
     
        }, "json");

}
//function loadId(selected, callBack) {  // get f_id
//
//    var comboData = '<option value="0" selected disabled hidden>Select Fartmer ID </option>';
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

function loadId_ais_land(selected, callBack) {
    var comboData = '<option value="0" selected disabled hidden>Select Fartmer ID </option>';
    $.post("../views/loadcombox.php", {comboBox: 'fid'}, function (e) {
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
            $('.item_id').html('').append(comboData);
            chosenRefresh();
        }
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
    var comboData = '<option value="0" selected disabled hidden>Select Land</option>';
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

    var comboData = '<option value="0" selected disabled hidden>Select Crop ID </option>';
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

function saveLand_ais_land() {

    //alert("sdjaskldfhskd");
    var email = $('#email').val();
    var dis = $('#district_id').val();
    var id = $('#id').val();
    var f_id = $('#f_id').val();
    var l_id = $('#l_id').val();
    var district = $('#district').val();
    var dsdivi = $('#dsdivi').val();
    var gndivi = $('#gndivi').val();
    var l_address = $('#l_address').val();
    var l_ext = $('#l_ext').val();
    var l_type = $('#l_type').val();
    var l_owner = $('#l_owner').val();
    var plr_no = $('#plr_no').val();
    var s_type = $('#s_type').val();
    var s_done = $('#s_done').val();
    var s_date = $('#s_date').val();
    var w_test = $('#w_test').val();
    var w_date = $('#w_date').val();
    var w_res = $('#w_res').val();
    var irrigation = $('#irrigation').val();
    var flag_confirm = "1";
    var flag_no_change = "1";
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
    if (id == '') {
        var in_id;
        $.post("../views/view_Land.php", {action: 'insert', key1: f_id, key2: l_id, key3: l_ext, key4: l_type, key5: l_owner, key6: plr_no, key7: s_type, key8: s_done, key9: s_date, key10: w_test, key11: w_date, key12: w_res, key13: irrigation, key14: flag_confirm, key15: flag_no_change, key16: email, key17: l_address, key18: dis, key19: district, key20: dsdivi, key21: gndivi},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable_ais_land(dis,email)
                   clearAcsReg_ais_land();
                   loadCount_ais_land();
                    //------------------------------activity logger------------------------------------
                    $.each(e, function (index, data) {

                        in_id = data.inID;
                        
                        var action = "in";
                        var table = "lands";
                        access_log(email, in_id, action, table);

                    });
                   //-----------------------------------------------------------------------------------
                }, "json");
                
    } else {
        $.post("../views/view_Land.php", {action: 'update', key1: f_id, key2: l_id, key3: l_ext, key4: l_type, key5: l_owner, key6: plr_no, key7: s_type, key8: s_done, key9: s_date, key10: w_test, key11: w_date, key12: w_res, key13: irrigation, key14: flag_confirm, key15: flag_no_change, key16: id, key17: l_address, key18: district, key19: dsdivi, key20: gndivi},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable_ais_land(dis,email);
                    clearAcsReg_ais_land();
                    //------------------------------activity logger------------------------------------
                    $.each(e, function (index, data) {

                        in_id = data.inID;

                        var action = "ud";
                        var table = "lands";
                        access_log(email, id, action, table);

                    });
                   //-----------------------------------------------------------------------------------
                }, "json");

    }
}
function access_log(added_by, in_id, action, table) {
//    alert(added_by);
//    alert(in_id);
    var added_by = added_by;
    var in_id = in_id;
    var action = action;
    var table = table;
    //alert(added_by);

    $.post("../views/view_Admin_Other.php", {action: 'a_log', key1: added_by, key2: in_id, key3: action, key4: table},
            function (e) {
                alertifyMsgDisplay(e, 200);
            }, "json");
}

function acsRegistrationTable_ais_land(district_id,email) {
    //var tableData;
    //var deleteUserID;

    $.post("../views/view_Land.php", {action: 'select', del: district_id}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                //tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.l_id + '</td>';
                tableData += '<td>' + tblValue.l_address + '</td>';
                tableData += '<td>' + tblValue.l_ext + '</td>';
                tableData += '<td>'  + tblValue.l_type + '</td>';
                tableData += '<td>'  + tblValue.l_owner + '</td>';
                tableData += '<td>' + tblValue.plr_no + '</td>';
                tableData += '<td>' + tblValue.s_type + '</td>';
                tableData += '<td>' + tblValue.s_date + '</td>';
                tableData += '<td>' + tblValue.w_res + '</td>';

                tableData += '<td>' + tblValue.irrigation + '</td>';

                tableData += '<td><div class="btn-group"><button class="btn btn-info updateACS" value="' + tblValue.id + '"><i class="glyphicon glyphicon-pencil"></i></button><button class="btn btn-danger deleteAcs" value="' + tblValue.l_id +":"+tblValue.f_id+ '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                //var res1 = delete_f_ID.split(":", 2);
                //var res2 = delete_f_ID.split(":", 1);
                var myarr = delete_f_ID.split(":");
               
                var res1 = myarr[0];
                var res2 = myarr[1];
                    //alert(res1 +" "+ res2);
                    alertify.confirm("Are you sure want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Land.php", {action: 'delete', dacs_f_id: res1, del: res2}, function (e) {
                            acsRegistrationTable_ais_land(district_id,email);
                            alertifyMsgDisplay(e, 200);
                            clearAcsReg_ais_land();
                            //------------------------------activity logger------------------------------------
                            $.each(e, function (index, data) {


                            var action = "dl";
                            var table = "lands";
                            access_log(email, delete_f_ID, action, table);

                            });
                           //-----------------------------------------------------------------------------------
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        clearAcsReg_ais_land();
                    }
                });
            });
            ///////////// UPDATE acs ///////////////
            $('.updateACS').click(function () {
                
                acsUpdate($(this).val());
                clearAcsReg_ais_land();
            });
        }
    }, "json");
}
function  acsUpdate(res1) {//Update  ACS_registration

    $.post("../views/view_Land.php", {action: 'select_by_Id', dacs_f_id: res1}, function (Data) {
        if (Data === undefined || Data.length === 0 || Data === null) {
            alertify.error("Internal Error Occured", 2000);
        } else {

            $.each(Data, function (index, DataView) { //$.each == for each in php

                $('#id').val(DataView.id);
                $('#f_id').val(DataView.f_id);
                $('#l_id').val(DataView.l_id);
                $('#l_ext').val(DataView.l_ext);
                $('#l_address').val(DataView.l_address);
                $('#l_type').val(DataView.l_type);
                $('#l_owner').val(DataView.l_owner);
                $('#plr_no').val(DataView.plr_no);
                $('#s_type').val(DataView.s_type);
                $('#s_done').val(DataView.s_done);
                $('#s_date').val(DataView.s_date);
                $('#w_test').val(DataView.w_test);
                $('#w_date').val(DataView.w_date);
                $('#w_res').val(DataView.w_res);
                $('#irrigation').val(DataView.irrigation);



            });
        }
    }, "json");
}
function clearAcsReg_ais_land() {
    $('#id').val('');
    $('#f_id').val('');
    $('#l_id').val('');
    $('#l_ext').val('');
    $('#l_type').val('');
    $('#l_owner').val('');
    $('#plr_no').val('');
    $('#s_type').val('');
    $('#s_done').val('');
    $('#s_date').val('');
    $('#w_test').val('');
    $('#w_date').val('');
    $('#w_res').val('');
    $('#irrigation').val('');
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