function loadCount(selected) {    //load count
    //count=qry count+1
    var cou = 1;
    var a = 0;
    $.post("../views/count.php", {comboBox: selected}, function (e) {
        $.each(e, function (index, qData) {
            a = parseInt(qData.count);
            if (a == 0) {
                cou = 1;
            } else {
                cou = a + 1;
            }
        });
        $('#l_id').val(cou);

    }, "json");

}
function loadId_ais_crop(selected, callBack) {  // get f_id

    var comboData = '<option value="0" selected disabled hidden>Select Fartmer ID </option>';
    $.post("../views/loadcombox.php", {comboBox: 'ffid'}, function (e) { // destination of the func, argument sending, return value to this func
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
function loadLand_ais_crop(selected, callBack) { // select land id list
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
function loadCrop_ais_crop(selected, callBack) {  // get f_id

    var comboData = '<option value="0" selected disabled hidden>Select Crop </option>';
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

function  saveCrops_ais_crop() {//inset  member_registration
    //var vmeb_no = $('#meb_no').val();
    //var vmeb_name = $('#meb_name').val();

    if (($('#f_id').val()) != "") {

        //$.post("../views/view_Crops.php", {member: 'insert'

        //}, function (e) {

        //$.each(e, function (index, msgData) {
        //if (msgData.msgType === 1) {
        //alert($('#f_id').val());
        var arr = [];
        //var id_i=msgData.c;
        var MyRows = $('table#myTable').find('tbody').find('tr');
        for (var i = 1; i < MyRows.length; i++) {
            //  var MyIndexValue = $(MyRows[i]).find('td:eq(0)').html();
            arr.push({
                //key: i,
                //id:id_i,
                
                f_id: $(MyRows[i]).find('.ff_id').val(),
                f_land: $(MyRows[i]).find('.fcombo_land').val(),
                crop: $(MyRows[i]).find('.crop').val(), 
                district_id: $(MyRows[i]).find('.fdistrict_id').val(), 
                variety: $(MyRows[i]).find('.variety').val(),
                cultivation: $(MyRows[i]).find('.cultivation').val(),
                cropping: $(MyRows[i]).find('.cropping').val(),
                extent: $(MyRows[i]).find('.extent').val(),
                planting: $(MyRows[i]).find('.planting').val(),
                harvesting: $(MyRows[i]).find('.harvesting').val(),
                period: $(MyRows[i]).find('.period').val(),
                yield: $(MyRows[i]).find('.yield').val(),
                unit: $(MyRows[i]).find('.unit').val(),
                market: $(MyRows[i]).find('.market').val(),
                email: $(MyRows[i]).find('.eemail').val()
                //flag: "1"

            });
            //delete(MyRows[i]);
//                $(MyRows[i]).find('.ff_id').val('');
//                $(MyRows[i]).find('.fcombo_land').val('');
//                $(MyRows[i]).find('.crop').val(''); 
//                $(MyRows[i]).find('.variety').val('');
//                $(MyRows[i]).find('.cultivation').val('');
//                $(MyRows[i]).find('.cropping').val('');
//                $(MyRows[i]).find('.extent').val('');
//                $(MyRows[i]).find('.planting').val('');
//                $(MyRows[i]).find('.harvesting').val('');
//                $(MyRows[i]).find('.yield').val('');
//                $(MyRows[i]).find('.unit').val('');
//                $(MyRows[i]).find('.market').val('');
                   
        }
//        for (var a = 1; a < MyRows.length; a++){
//            deleteRow(a);
//        }

        $.ajax({
            type: 'post',
            url: '../views/view_Crops.php',
            data: {myarray: arr},
            success: function (result) {
                //ur success handler OPTIONAL
            }
        });


        swal("Save Success!", msgData.msg, "success");
        clearAcsReg();


    } else if (msgData.msgType === 2) {
        swal("Save Error!", msgData.msg, "error");

    }
    //});
    //}, "json");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function acsRegistrationTable2(district_id,email) {
    //var tableData;
    //var deleteUserID;

    $.post("../views/crop_view.php", {action: 'select1', type: district_id, type1: email}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.l_id + '</td>';
                tableData += '<td>' + tblValue.crop + '</td>';
                tableData += '<td>'  + tblValue.variety + '</td>';
                tableData += '<td>' + tblValue.cultivation + '</td>';
                tableData += '<td>' + tblValue.cropping + '</td>';
                tableData += '<td>' + tblValue.extent + '</td>';
                tableData += '<td>' + tblValue.planting + '</td>';
                tableData += '<td>' + tblValue.harvesting + '</td>';
                tableData += '<td>' + tblValue.weeks + '</td>';
                tableData += '<td>' + tblValue.yield + " " + tblValue.unit + '</td>';
                tableData += '<td>' + tblValue.market + '</td>';
                tableData += '<td>' + tblValue.harvest_end + '</td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-success updateACS" value="' + tblValue.id + '"><i class="glyphicon glyphicon-ok"></i></button></div></td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-danger remove" value="' + tblValue.id + '"><i class="glyphicon glyphicon-remove-sign"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                
                    alertify.confirm("Are you sure want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/crop_view.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
                            acsRegistrationTable2(district_id,email);
                            alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            $('.updateACS').click(function () {
                var id = $(this).val();
                
                    alertify.confirm("Confirm Record ?", function (e) {
                    if (e) {
                        $.post("../views/crop_view.php", {action: 'update', key1: id}, function (e) {
                            acsRegistrationTable2(district_id,email);
                            alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            
            $('.remove').click(function () {
                var idd = $(this).val();
                
                alertify.confirm("Are you sure you want to Remove this record?", function (e) {
                    if (e) {
                        edit(idd);
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            
        }
    }, "json");
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function acsRegistrationTable11(district_id) {
    //var tableData;
    //var deleteUserID;

    $.post("../views/crop_view.php", {action: 'select', type: district_id}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table1 tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.l_id + '</td>';
                tableData += '<td>' + tblValue.crop + '</td>';
                tableData += '<td>'  + tblValue.variety + '</td>';
                tableData += '<td>' + tblValue.cultivation + '</td>';
                tableData += '<td>' + tblValue.cropping + '</td>';
                tableData += '<td>' + tblValue.extent + '</td>';
                tableData += '<td>' + tblValue.planting + '</td>';
                tableData += '<td>' + tblValue.harvesting + '</td>';
                tableData += '<td>' + tblValue.weeks + '</td>';
                tableData += '<td>' + tblValue.yield + " " + tblValue.unit + '</td>';
                tableData += '<td>' + tblValue.market + '</td>';
                tableData += '<td>' + tblValue.harvest_end + '</td>';
                //tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table1 tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                
                    alertify.confirm("Are you sure want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/crop_view.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
                            acsRegistrationTable();
                            alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function acsRegistrationTable1ais(district_id) {
    //var tableData;
    //var deleteUserID;

    $.post("../views/crop_view.php", {action: 'select2', type: district_id}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table1 tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.f_id + '</td>';
                tableData += '<td>' + tblValue.l_id + '</td>';
                tableData += '<td>' + tblValue.crop + '</td>';
                tableData += '<td>'  + tblValue.variety + '</td>';
                tableData += '<td>' + tblValue.cultivation + '</td>';
                tableData += '<td>' + tblValue.cropping + '</td>';
                tableData += '<td>' + tblValue.extent + '</td>';
                tableData += '<td>' + tblValue.planting + '</td>';
                tableData += '<td>' + tblValue.harvesting + '</td>';
                tableData += '<td>' + tblValue.weeks + '</td>';
                tableData += '<td>' + tblValue.yield + " " + tblValue.unit + '</td>';
                tableData += '<td>' + tblValue.market + '</td>';
                tableData += '<td>' + tblValue.harvest_end + '</td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                //tableData += '<td><div class="btn-group"><button class="btn btn-success updateACS" value="' + tblValue.id + district_id +'"><i class="glyphicon glyphicon-ok"></i></button></div></td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-success updateACS" value="' + tblValue.id + '"><i class="glyphicon glyphicon-ok"></i></button></div></td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-danger remove" value="' + tblValue.id + '"><i class="glyphicon glyphicon-remove-sign"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_details_save_Table1 tbody').html('').append(tableData);
            
            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                
                    alertify.confirm("Are you sure want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/crop_view.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
                            acsRegistrationTable1ais(district_id);
                            //alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            
            
            $('.updateACS').click(function () {
                var id = $(this).val();
                
                    alertify.confirm("Confirm Record ?", function (e) {
                    if (e) {
                        $.post("../views/crop_view.php", {action: 'update', key1: id}, function (e) {
                            acsRegistrationTable1ais(district_id);
                            alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            
            $('.remove').click(function () {
                var idd = $(this).val();
                
                alertify.confirm("Are you sure you want to Remove this record?", function (e) {
                    if (e) {
                        edit(idd);
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            ///////////// UPDATE acs ///////////////
//            $('.updateACS').click(function () {
//                var delete_f_ID = $(this).val();
//
////                var myarr = delete_f_ID.split(":");
////               
////                var id = myarr[0];
////                var district_id = myarr[1];
////                
////                acsUpdate(id);
//                  acsUpdate(($(this).val()));
//            });
        }
    }, "json");
}
function edit(idd) {
    $.post("../views/crop_view.php", {action: 'select_by_id', did: idd}, function (e) {
        $('#contact_dialog').modal('show');
        $.each(e, function (index, queryDate) {
            $('#id').val(queryDate.id);
            $('#f_id').val(queryDate.f_id);
            $('#l_id').val(queryDate.l_id);
            $('#crop').val(queryDate.crop);
            $('#extent_init').val(queryDate.extent);
            $('#yield_init').val(queryDate.yield);
            $('#harvest_end').val(queryDate.harvest_end);
        });
    }, "json");
}
function remove_crops(district_id) {
    var id = $('#id').val();
    var reason = $('#reason').val();
    var extent_drop = $('#extent').val();
    var yield_drop = $('#yield').val();
    var extent = $('#extent_init').val()-$('#extent').val();
    var yield = $('#yield_init').val()-$('#yield').val();
    var flag;
    if(yield==0){
        flag='1';
    }
    else{
        flag='0';
    }
    var description = $('#description').val();
    var removed_date = $('#removed_date').val();
    var removed_by = $('#email').val();
    $.post("../views/crop_view.php", {
        action: 'insert_remove',
        key1: id,
        key2: reason,
        key3: extent_drop,
        key4: yield_drop,
        key5: description,
        key6: removed_date,
        key7: removed_by
    }, function (e) {
        //-----------------------------------------------------------------------------------
            $.post("../views/crop_view.php", {action: 'update_remove', r_up: id, r_up2: extent, r_up3: yield, r_up4: flag}, function (e) {
                            //acsRegistrationTable1ais(district_id);
                            //alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
        //-----------------------------------------------------------------------------------
        acsRegistrationTable1ais(district_id);
        clear_modal();
        alertifyMsgDisplay(e, 200);
    }, "json");

}
function remove_crops_ai(district_id,email) {
    var id = $('#id').val();
    var reason = $('#reason').val();
    var extent_drop = $('#extent').val();
    var yield_drop = $('#yield').val();
    var extent = $('#extent_init').val()-$('#extent').val();
    var yield = $('#yield_init').val()-$('#yield').val();
    var flag;
    if(yield==0){
        flag='1';
    }
    else{
        flag='0';
    }
    var description = $('#description').val();
    var removed_date = $('#removed_date').val();
    var removed_by = $('#email').val();
    $.post("../views/crop_view.php", {
        action: 'insert_remove',
        key1: id,
        key2: reason,
        key3: extent_drop,
        key4: yield_drop,
        key5: description,
        key6: removed_date,
        key7: removed_by
    }, function (e) {
        //-----------------------------------------------------------------------------------
            $.post("../views/crop_view.php", {action: 'update_remove', r_up: id, r_up2: extent, r_up3: yield, r_up4: flag}, function (e) {
                            //acsRegistrationTable1ais(district_id);
                            //alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
        //-----------------------------------------------------------------------------------
        acsRegistrationTable2(district_id,email);
        clear_modal();
        alertifyMsgDisplay(e, 200);
    }, "json");

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//function  acsUpdate(id) {//Update  ACS_registration
//
//    $.post("../views/crop_view.php", {action: 'update', key1: id},
//                function (e) {
//                    alertifyMsgDisplay(e, 200);
//                    acsRegistrationTable1ais();
//                    clearAcsReg();
//                }, "json");
//}
//
//
//
//function  acsUpdate(ff_id) {//Update  ACS_registration
//
//    $.post("../views/view_Crops.php", {action: 'select_by_Id', dacs_f_id: ff_id}, function (Data) {
//        if (Data === undefined || Data.length === 0 || Data === null) {
//            alertify.error("Internal Error Occured", 2000);
//        } else {
//
//            $.each(Data, function (index, DataView) { //$.each == for each in php
//
//                $('#f_id').val(DataView.f_id);
//                $('#l_id').val(DataView.l_id);
//                $('#l_ext').val(DataView.l_ext);
//                $('#l_type').val(DataView.l_type);
//                $('#l_owner').val(DataView.l_owner);
//                $('#plr_no').val(DataView.plr_no);
//                $('#s_type').val(DataView.s_type);
//                $('#s_done').val(DataView.s_done);
//                $('#s_date').val(DataView.s_date);
//                $('#w_test').val(DataView.w_test);
//                $('#w_date').val(DataView.w_date);
//                $('#w_res').val(DataView.w_res);
//                $('#irrigation').val(DataView.irrigation);
//                //$('#doa_Tel').val(DataView.DOA_tel);
//
//
//
//            });
//        }
//    }, "json");
//}
function clearAcsReg() {
    $('#f_id').val('');
    $('#combo_land').val('');
    $('#combo_crop').val('');
    //$('#myTable').val('');
//    var table = $('#myTable');
//            table.refresh ();
//    $('#l_type').val('');
//    $('#l_owner').val('');
//    $('#plr_no').val('');
//    $('#s_type').val('');
//    $('#s_done').val('');
//    $('#s_date').val('');
//    $('#w_test').val('');
//    $('#w_date').val('');
//    $('#w_res').val('');
//    $('#irrigation').val('');
    //$('#doa_Tel').val('');

}
function clear_modal(){
    $('#id').val('');
    $('#f_id').val('');
    $('#l_id').val('');
    $('#crop').val('');
    $('#extent_init').val('');
    $('#yield_init').val('');
    $('#harvest_end').val('');
    $('#reason').val('');
    $('#extent').val('');
    $('#yield').val('');
    $('#description').val('');
    $('#removed_date').val('');
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