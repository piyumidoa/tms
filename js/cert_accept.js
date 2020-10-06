function loadId_cert_id(selected, callBack) {  // get f_id

    var comboData = '<option value="0" selected disabled hidden>Select Fartmer ID </option>';
    $.post("../views/loadcombox.php", {comboBox: 'cert_id'}, function (e) { // destination of the func, argument sending, return value to this func
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
        //request_list();
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }

    }, "json");

}
//-------------------------------------------------------------------------------------------------------
function loadId_cert_land(selected) {  // get f_id

    var comboData = '<option value="0" selected disabled hidden>Select Land </option>';
    $.post("../views/test_accept.php", {comboBox: selected}, function (e) { // destination of the func, argument sending, return value to this func
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
//-------------------------------------------------------------------------------------------------------------------
function show_info(f_id,l_id) {
    var a=f_id;
    var b=l_id;
    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_info', type1: f_id, type2: l_id}, function (e) {
        $('#contact_dialog').modal('show');
        $.each(e, function (index, queryDate) {
            //$('#id').val(queryDate.id);
            $('#f_name').val(queryDate.f_name+" "+queryDate.l_name);
            $('#email').val(queryDate.email);
            $('#d1').val(a);
            $('#address').val(queryDate.f_address);
            $('#f_tp').val(queryDate.f_tp);
            $('#f_mob').val(queryDate.f_mob);
            $('#d2').val(b);
            $('#l_address').val(queryDate.l_address);
            $('#l_ext').val(queryDate.l_ext);
//            $('#crop').val(queryDate.crop);
//            $('#variety').val(queryDate.variety);
//            $('#cultivation').val(queryDate.cultivation);
//            $('#cropping').val(queryDate.cropping);
//            $('#extent').val(queryDate.extent);
//            $('#planting').val(queryDate.planting);
//            $('#harvest_end').val(queryDate.harvest_end);
//            $('#weeks').val(queryDate.weeks);
//            $('#harvesting').val(queryDate.harvesting);
//            $('#yield').val(queryDate.yield);
//            $('#market').val(queryDate.market);
//            $('#added_by').val(queryDate.added_by);
            
        });
    }, "json");
}
//-------------------------------------------------------------------------------------------------------------------
function request_list(f_id, l_id) {


    var tableDataCont = '';
    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_id', did1: f_id, did2: l_id}, function (tableData) {

       //$('#contact_dialog').modal('show');
        //$('#contact_dialog').on('shown.bs.modal', function () {
            
            //$("#txtname").focus();
            if (tableData === undefined || tableData.length === 0 || tableData === null) {
                $('.farmer_save_Table1 tbody').html(' -- No Data Found -- ');

            } else {

                $.each(tableData, function (index, tblValue) {
                    tableDataCont += '<tr>';
                    tableDataCont += '<td><b>' + tblValue.id + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.crop + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.variety + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.cultivation + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.cropping + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.extent + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.planting + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.harvesting + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.yield + tblValue.unit + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.market + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.harvest_end + '</b></td>';


                    tableDataCont += '<td><div class="btn-group"><button class="btn btn-success accept" value="' + tblValue.id + '"><i class="glyphicon glyphicon-ok"></i></button></div></td>';
                    tableDataCont += '</tr>';
                });
                
                $('.farmer_save_Table1 tbody').html('').append(tableDataCont);


                        $('.accept').click(function () {

                            //pub_selectbyId($(this).val());
                            var view1 = $(this).val();

                            alertify.confirm("Certify this record ?", function (e) {
                                if (e) {
                                      accept_rec(view1,f_id,l_id);
                                      //request_list(f_id, l_id);
                                      loadId_cert_id();
                                } else {
                                      alertify.log("Cancel process", "Done", 1000);
                                    //clearAcsReg();
                                }
                            });
                        });
            }

        //});
        //--------------------------------------------------table with accepted records--------------------------------------------------------------------------------
    var tableDataCont1 = '';
    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_id_2', did3: f_id, did4: l_id}, function (tableData1) {

       //$('#contact_dialog').modal('show');
        //$('#contact_dialog').on('shown.bs.modal', function () {
            
            //$("#txtname").focus();
            if (tableData1 === undefined || tableData1.length === 0 || tableData1 === null) {
                $('.farmer_save_Table2 tbody').html(' -- No Data Found -- ');

            } else {

                $.each(tableData1, function (index, tblValue1) {
                    tableDataCont1 += '<tr>';
                    tableDataCont1 += '<td><b>' + tblValue1.id + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.crop + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.variety + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.cultivation + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.cropping + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.extent + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.planting + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.harvesting + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.yield + tblValue1.unit + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.market + '</b></td>';
                    tableDataCont1 += '<td><b>' + tblValue1.harvest_end + '</b></td>';


                    tableDataCont1 += '<td><div class="btn-group"><button class="btn btn-danger reject" value="' + tblValue1.id + '"><i class="glyphicon glyphicon-remove"></i></button></div></td>';
                    tableDataCont1 += '</tr>';
                });
                
                $('.farmer_save_Table2 tbody').html('').append(tableDataCont1);


                        $('.reject').click(function () {

                            //pub_selectbyId($(this).val());
                            var view2 = $(this).val();

                            alertify.confirm("Reject this crop ?", function (e) {
                                if (e) {
                                      reject_rec(view2,f_id,l_id);
                                      loadId_cert_id();
                                      //request_list(f_id, l_id);
                                } else {
                                      alertify.log("Cancel process", "Done", 1000);
                                    //clearAcsReg();
                                }
                            });
                        });
            }
        //});         
    }, "json");
        //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
         
    }, "json");

}
//--------------------------------------------------------------------------------------------------
function request_lista(f_id, l_id) {


    var tableDataCont = '';
    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_id_rem', did1: f_id, did2: l_id}, function (tableData) {

       //$('#contact_dialog').modal('show');
        //$('#contact_dialog').on('shown.bs.modal', function () {
            
            //$("#txtname").focus();
            if (tableData === undefined || tableData.length === 0 || tableData === null) {
                $('.farmer_save_Table4 tbody').html(' -- No Data Found -- ');

            } else {

                $.each(tableData, function (index, tblValue) {
                    tableDataCont += '<tr>';
                    tableDataCont += '<td><b>' + tblValue.id + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.crop + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.variety + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.cultivation + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.cropping + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.extent + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.planting + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.harvesting + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.yield + tblValue.unit + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.market + '</b></td>';
                    tableDataCont += '<td><b>' + tblValue.harvest_end + '</b></td>';


                    tableDataCont += '<td><div class="btn-group"><button class="btn btn-danger accept" value="' + tblValue.id + '"><i class="glyphicon glyphicon-remove"></i></button></div></td>';
                    tableDataCont += '</tr>';
                });
                
                $('.farmer_save_Table4 tbody').html('').append(tableDataCont);


                        $('.accept').click(function () {

                            //pub_selectbyId($(this).val());
                            var view2 = $(this).val();

                            alertify.confirm("Certify this record ?", function (e) {
                                if (e) {
                                      reject_rec(view2,f_id,l_id);
                                      //request_list(f_id, l_id);
                                      loadId_cert_id();
                                } else {
                                      alertify.log("Cancel process", "Done", 1000);
                                    //clearAcsReg();
                                }
                            });
                        });
            }

        //});
        //--------------------------------------------------table with accepted records--------------------------------------------------------------------------------
//    var tableDataCont1 = '';
//    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_id_rem_2', did3: f_id, did4: l_id}, function (tableData1) {
//
//       //$('#contact_dialog').modal('show');
//        //$('#contact_dialog').on('shown.bs.modal', function () {
//            
//            //$("#txtname").focus();
//            if (tableData1 === undefined || tableData1.length === 0 || tableData1 === null) {
//                $('.farmer_save_Table4 tbody').html(' -- No Data Found -- ');
//
//            } else {
//
//                $.each(tableData1, function (index, tblValue1) {
//                    tableDataCont1 += '<tr>';
//                    tableDataCont1 += '<td><b>' + tblValue1.id + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.crop + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.variety + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.cultivation + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.cropping + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.extent + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.planting + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.harvesting + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.yield + tblValue1.unit + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.market + '</b></td>';
//                    tableDataCont1 += '<td><b>' + tblValue1.harvest_end + '</b></td>';
//
//
//                    tableDataCont1 += '<td><div class="btn-group"><button class="btn btn-danger reject" value="' + tblValue1.id + '"><i class="glyphicon glyphicon-remove"></i></button></div></td>';
//                    tableDataCont1 += '</tr>';
//                });
//                
//                $('.farmer_save_Table4 tbody').html('').append(tableDataCont1);
//
//
//                        $('.reject').click(function () {
//
//                            //pub_selectbyId($(this).val());
//                            var view2 = $(this).val();
//
//                            alertify.confirm("Reject this crop ?", function (e) {
//                                if (e) {
//                                      accept_rec(view2,f_id,l_id);
//                                      loadId_cert_id();
//                                      //request_list(f_id, l_id);
//                                } else {
//                                      alertify.log("Cancel process", "Done", 1000);
//                                    //clearAcsReg();
//                                }
//                            });
//                        });
//            }
//        //});         
//    }, "json");
        //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
         
    }, "json");

}
//--------------------------------------------------------------------------------------------------
function accept_rec(view1,f_id,l_id){
    $.post("../views/comm_farmer_reg.php", {farmer: 'accept_rec', view: view1}, function (e) {
        //pub_selectbyId(res1, res2);
        request_list(f_id, l_id);
        request_list1(f_id, l_id);
        // add new table insert query here
    }, "json");
}
function reject_rec(view2,f_id,l_id){
    $.post("../views/comm_farmer_reg.php", {farmer: 'reject_rec', view: view2}, function (e) {
        //pub_selectbyId(res1, res2);
        request_list(f_id, l_id);
        request_list1(f_id, l_id);
    }, "json");
}