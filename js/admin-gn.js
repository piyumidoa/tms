function loadAsc_admin_district1(selected, callBack) {

    var comboData = '<option value="0" selected disabled hidden>Select District</option>';

    $.post("../views/loadcombox.php", {comboBox: 'dst'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.dist1').html('').append(comboData);
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

        $('.dist1').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//------------------------------------------------------------------------------------------------------
function loadAsc_admin_dsd(selected, callBack) {
    var district = $('#district1').val();
    //alert(district);
    var comboData = '<option value="0" selected disabled hidden>Select DS Division</option>';

    $.post("../views/loadcombox.php", {comboBox: 'dsd', district: district}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.dsd1').html('').append(comboData);
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

        $('.dsd1').html('').append(comboData);
        chosenRefresh();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//------------------------------------------------------------------------------------------------------
function admin_gnd() {
    var id = $('#h_id').val();
    var gnd_name = $('#gnd1').val();
    var dsd_ids = $('#dsd1').val();


        if (id == '') {
        $.post("../views/ds-gn.php", {action: 'insert_gn', key1: gnd_name, key2: dsd_ids},
                function (e) {
                    clear2();
                }, "json");
            }
        else {
        $.post("../views/ds-gn.php", {action: 'update_gn', key1: gnd_name, key2: id},
                function (e) {
                   // alertifyMsgDisplay(e, 200);
                    //acsRegistrationTable_ais_main(district_id);
                    //clearAcsReg_ais_main(eemail);
                    //------------------------------activity logger------------------------------------
                  //  $.each(e, function (index, data) {
                        //alert ("sdfrsd");
                        gn_table(dsd_ids);
                        
                        clear2();
                        

                    //});
                   //-----------------------------------------------------------------------------------
                }, "json");


        }
}
//-----------------------------------------------------------------------------------------------------
function gn_table(dsd_ids) {
    //var tableData;
    //var deleteUserID;

    $.post("../views/ds-gn.php", {action: 'select2', type: dsd_ids}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.gn_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData += '<td class="hidden">' + tblValue.gnd_id + '</td>';
                tableData += '<td>' + tblValue.gnd_name + '</td>';


                tableData += '<td><div class="btn-group"><button class="btn btn-danger updateACS" value="' + tblValue.gnd_id + '"><i class="glyphicon glyphicon-pencil"></i></button></div></td>';
                
                //tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';

                tableData += '</tr>';
            });
            $('.gn_Table tbody').html('').append(tableData);
            
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

    $.post("../views/ds-gn.php", {action: 'select_by_Id', dacs_f_id: ff_id}, function (Data) {
        if (Data === undefined || Data.length === 0 || Data === null) {
            alertify.error("Internal Error Occured", 2000);
        } else {

            $.each(Data, function (index, DataView) { //$.each == for each in php
                $('#h_id').val(DataView.gnd_id);
                $('#gnd1').val(DataView.gnd_name);
                



            });
        }
    }, "json");
}
//--------------------------------------------------------------------------------------------
function clear2() {
    $('#h_id').val('');
    $('#district1').val('');
    $('#gnd1').val('');
    $('#dsd1').val('');
    gn_table();
}