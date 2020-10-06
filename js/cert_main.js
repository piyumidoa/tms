function comm_farmer_reg() {


    $.post("../views/comm_farmer_reg.php", {farmer: 'select'}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_save_Table tbody').html(' -- No Data Found -- ');
        } else {

            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';

                tableData += '<td><b>' + tblValue.f_id + '</b></td>';


                tableData += '<td><div class="btn-group"><button class="btn btn-info updateFarmer" value="' + tblValue.l_id + ":" + tblValue.f_id + '"><i class="glyphicon glyphicon-th-list"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_save_Table tbody').html('').append(tableData);


            $('.updateFarmer').click(function () {

                //pub_selectbyId($(this).val());
                var view = $(this).val();
                var myarr = view.split(":");
                var res1 = myarr[0];
                var res2 = myarr[1];
                alertify.confirm("View this record ?", function (e) {
                    if (e) {
                        pub_selectbyId(res1, res2);
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
        }
    }, "json");
}

function pub_selectbyId(res1, res2) {


    var tableDataCont = '';
    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_id', did1: res1, did2: res2}, function (tableData) {

       $('#contact_dialog').modal('show');
        $('#contact_dialog').on('shown.bs.modal', function () {
            
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
                                      accept_rec(view1,res1,res2);
                                      pub_selectbyId(res1, res2);
                                } else {
                                      alertify.log("Cancel process", "Done", 1000);
                                    //clearAcsReg();
                                }
                            });
                        });
            }

        });
        //--------------------------------------------------table with accepted records--------------------------------------------------------------------------------
    var tableDataCont1 = '';
    $.post("../views/comm_farmer_reg.php", {farmer: 'select_by_id_2', did3: res1, did4: res2}, function (tableData1) {

       $('#contact_dialog').modal('show');
        $('#contact_dialog').on('shown.bs.modal', function () {
            
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
                                      reject_rec(view2,res1,res2);
                                      pub_selectbyId(res1, res2);
                                } else {
                                      alertify.log("Cancel process", "Done", 1000);
                                    //clearAcsReg();
                                }
                            });
                        });
            }
        });         
    }, "json");
        //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
         
    }, "json");

}
function accept_rec(view1,res1,res2){
    $.post("../views/comm_farmer_reg.php", {farmer: 'accept_rec', view: view1}, function (e) {
        //pub_selectbyId(res1, res2);
        // add new table insert query here
    }, "json");
}
function reject_rec(view2,res1,res2){
    $.post("../views/comm_farmer_reg.php", {farmer: 'reject_rec', view: view2}, function (e) {
        //pub_selectbyId(res1, res2);
    }, "json");
}