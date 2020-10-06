function loadAsc_admin_district(selected, callBack) {

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
function admin_dsd() {
    var districts_id = $('#district').val();
    var dsd_name = $('#dsd').val();

        var in_id;
        $.post("../views/ds-gn.php", {action: 'insert_ds', key1: districts_id, key2: dsd_name},
                function (e) {
                    //alertifyMsgDisplay(e, 200);
                    clear1();
                }, "json");
}
//--------------------------------------------------------------------------------------------------------
function ds_table(district) {
    //var tableData;
    //var deleteUserID;

    $.post("../views/ds-gn.php", {action: 'select1', type: district}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.ds_Table tbody').html(' -- No Data Found -- ');
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';
                //tableData += '<td>' + index + '</td>';
                //tableData += '<td>' + tblValue.id + '</td>';
                tableData += '<td>' + tblValue.dsd_name + '</td>';


                //tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                
                //tableData += '<td><div class="btn-group"><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';

                tableData += '</tr>';
            });
            $('.ds_Table tbody').html('').append(tableData);
            
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
//--------------------------------------------------------------------------------------------
function clear1() {
    $('#district').val('');
    $('#dsd').val('');
    ds_table();
}

