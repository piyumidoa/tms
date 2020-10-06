function stat_ai(district_id) {

    var cou = 0;
    var a = 0;

    var cou1 = 0;
    var b = 0;

    var cou2 = 0;
    var c = 0;

    $.post("../views/view_Acs.php", {action: 'stat', type: district_id}, function (e) {
        $.each(e, function (index, qData) {
            a = parseInt(qData.count);
            if (a == 0) {
                cou = 0;
            } else {
                cou = a;
            }
        });


        //-------------------------------------------count 2
        //function stat2(district_id) {

        $.post("../views/view_Acs.php", {action: 'stat2', type: district_id}, function (q) {
            $.each(q, function (index, qData) {
                b = parseInt(qData.count);
                if (b == 0) {
                    cou1 = 0;
                } else {
                    cou1 = b;
                }
            });

            //---------------------------------------------------------

            $.post("../views/view_Acs.php", {action: 'stat3', type: district_id}, function (w) {
                $.each(w, function (index, qData) {
                    c = parseInt(qData.count);
                    if (c == 0) {
                        cou2 = 0;
                    } else {
                        cou2 = c;
                    }
                });
                $('#count3').val(cou2);

            }, "json");
            //---------------------------------------------------------
            $('#count2').val(cou1);

        }, "json");
        // }
        //-------------------------------------------

        $('#count').val(cou);

    }, "json");

}
//function stat2(district_id) {
//
//        
//
//}
function loadDistric1(selected, callBack) {

    var comboData = '<option value="0" selected disabled hidden>Select District </option>';
    $.post("../views/loadcombox.php", {comboBox: 'district1'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('.ds').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    // alert(parseInt(selected));
                    // alert(qData.dsd_id);
                    if (parseInt(selected) === parseInt(qData.dsd_id)) { // compare n see wiyh valid valuer if match show it
                        // alert("bvjbvjvc");
                        comboData += '<option value="' + qData.dsd_id + '" selected>' + qData.dsd_name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.dsd_id + '">' + qData.dsd_name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.dsd_id + '">' + qData.dsd_name + '</option>';
                }
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

function loadDistric_ais_main(email) {

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

function loadAsc1(selected, callBack) {
    var comboData = '<option value="0" selected disabled hidden>Select ACS</option>';

    $.post("../views/loadcombox.php", {comboBox: 'asc1'}, function (e) {
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

function loadAsc_ais_main(selected, callBack) {
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


function saveAcs_ais_main() {
    var district_id = $('#district_id').val();
    var eemail = $('#email').val();
    //alert("sdjaskldfhskd");
    var id = $('#id').val();
    var f_id = $('#f_id').val();
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var email = $('#f_email').val();
    var f_dob = $('#f_dob').val();
    var f_address = $('#f_address').val();
    var f_tp = $('#f_tp').val();
    var f_mob = $('#f_mob').val();
    var farm_district = $('#farm_district').val();
    var farm_asc = $('#farm_asc').val();
    //var combo_gs = $('#combo_gs').val();
    var gender = $('#gender').val();
    var f_fax = $('#f_fax').val();
    var added_by = $('#email').val();
    var gs_id = $('#district_id').val();
    var flag_confirm = "1";
    //var doa_Tel = $('#doa_Tel').val();
    //alert("sdjaskldfhskd");
    if (id == '') {
        var in_id;
        $.post("../views/view_Acs.php", {action: 'insert', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: farm_district, key10: farm_asc, key11: gender, key12: f_fax, key13: flag_confirm, key14: added_by, key15: gs_id},
               function (e) {
                  alertifyMsgDisplay(e, 200);
                  acsRegistrationTable_ais_main(district_id);
                    clearAcsReg_ais_main(eemail);
                    //------------------------------activity logger------------------------------------
                    $.each(e, function (index, data) {

                       in_id = data.inID;

                        var action = "in";
                        var table = "farmer_details";
                        access_log(added_by, in_id, action, table);

                    });
                   //-----------------------------------------------------------------------------------
               }, "json");
                
            //prasad 2018-02-21    
                
                
             //   $.ajax({
 // type: "POST",
 // url: "../views/view_Acs.php",
//data: {action: 'insert', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: farm_district, key10: farm_asc, key11: gender, key12: f_fax, key13: flag_confirm, key14: added_by, key15: gs_id},
 // contentType: "application/json;charset=utf-8",
 /// dataType: "jason",
 // success: function(msg){
    //    alert( "Data Saved: " + msg );
 // },
 // error: function(XMLHttpRequest, textStatus, errorThrown) {
     //alert("some error");
 //    alert(extStatus.responseText);
 //    alert(XMLHttpRequest.responseText);
 //    alert(errorThrown.responseText);
 // }
//});
                
                
                
                
                
                
                
           ///prasad     
    } else {
        $.post("../views/view_Acs.php", {action: 'update', key1: f_id, key2: f_name, key3: l_name, key4: email, key5: f_dob, key6: f_address, key7: f_tp, key8: f_mob, key9: farm_district, key10: farm_asc, key11: gender, key12: f_fax, key13: flag_confirm, key14: added_by, key15: id},
                function (e) {
                    alertifyMsgDisplay(e, 200);
                    acsRegistrationTable_ais_main(district_id);
                    clearAcsReg_ais_main(eemail);
                    //------------------------------activity logger------------------------------------
                    $.each(e, function (index, data) {

                        in_id = data.inID;

                        var action = "ud";
                        var table = "farmer_details";
                        access_log(added_by, id, action, table);

                    });
                   //-----------------------------------------------------------------------------------
                }, "json");
        //alert("No Data");

    }
}

function access_log(added_by, in_id, action, table) {

    //alert(in_id);
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

function acsRegistrationTable_ais_main(district_id,email) {
    var tableData1;
    //var deleteUserID;

    $.post("../views/view_Acs.php", {action: 'select', type: district_id}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_details_save_Table tbody').html(' -- No Data Found -- ');
            alert("No Data");
        } else {
            $.each(tableData, function (index, tblValue) {
                tableData1 += '<tr>';
                //tableData += '<td>' + index + '</td>';
                tableData1 += '<td>' + tblValue.id + '</td>';
                tableData1 += '<td>' + tblValue.f_id + '</td>';
                tableData1 += '<td>' + tblValue.f_name + " " + tblValue.l_name + '</td>';

                tableData1 += '<td>' + tblValue.email + '</td>';
                tableData1 += '<td>' + tblValue.f_address + '</td>';

                tableData1 += '<td>' + tblValue.f_tp + '</td>';
                tableData1 += '<td>' + tblValue.f_mob + '</td>';


                tableData1 += '<td>' + tblValue.dsd_name + '</td>';

                tableData1 += '<td>' + tblValue.gnd_name + '</td>';

                tableData1 += '<td><div class="btn-group"><button class="btn btn-info updateACS" value="' + tblValue.id + '"><i class="glyphicon glyphicon-pencil"></i></button><button class="btn btn-danger deleteAcs" value="' + tblValue.id + '"><i class="glyphicon glyphicon-trash"></i></button></div></td>';
                tableData1 += '</tr>';
            });
            $('.farmer_details_save_Table tbody').html('').append(tableData1);

            $('.deleteAcs').click(function () {
                var delete_f_ID = $(this).val();
                alertify.confirm("Are you sure want to detele this record?", function (e) {
                    if (e) {
                        $.post("../views/view_Acs.php", {action: 'delete', dacs_f_id: delete_f_ID}, function (e) {
                            acsRegistrationTable_ais_main(district_id);
                            alertifyMsgDisplay(e, 200);
                            clearAcsReg_ais_main();
                            //------------------------------activity logger------------------------------------
                            $.each(e, function (index, data) {


                            var action = "dl";
                            var table = "farmer_details";
                            access_log(email, delete_f_ID, action, table);

                            });
                           //-----------------------------------------------------------------------------------
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        clearAcsReg_ais_main();
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
                //$('#f_id').val(DataView.id);
                $('#id').val(DataView.id);
                $('#f_id').val(DataView.f_id);
                $('#f_name').val(DataView.f_name);
                $('#l_name').val(DataView.l_name);
                //$('#farm_district').val(DataView.gnd_name).text();
                //loadDistric1(DataView.gs_id);
                loadDistric1(DataView.district_id, loadAsc1(DataView.asc_id));
                //$('#farm_asc').val(DataView.dsd_name).text();

                //loadAsc(DataView.dsd_name);
                //loadAsc1(DataView.asc_id);
                $('#f_email').val(DataView.email);
                $('#f_dob').val(DataView.f_dob);
                $('#f_address').val(DataView.f_address);
                $('#f_tp').val(DataView.f_tp);
                $('#f_mob').val(DataView.f_mob);
                $('#gender').val(DataView.gender);
                $('#f_fax').val(DataView.f_fax);
                //$('#doa_Tel').val(DataView.DOA_tel);



            });
        }
    }, "json");
}
function clearAcsReg_ais_main(eemail) {
    $('#id').val('');
    $('#f_id').val('');
    $('#f_name').val('');
    $('#l_name').val('');
    //$('#combo_district').val();
    //$('#combo_asc').val();
    //loadDistric();
    //loadAsc(1);
    $('#f_email').val('');
    $('#f_dob').val('');
    $('#f_address').val('');
    $('#f_tp').val('');
    $('#f_mob').val('');
    $('#gender').val('');
    $('#f_fax').val('');
    //$('#farm_district').val('');
    //$('#farm_asc').val('');
    loadDistric1(DataView.district_id, loadAsc1(DataView.asc_id));

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