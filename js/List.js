function List(district_id) {
    var tableData;
    var deleteUserID;

    $.post("../views/commenSettingView.php", {farmer: 'select', type: district_id}, function (tableData) {
        if (tableData === undefined || tableData.length === 0 || tableData === null) {
            $('.farmer_save_Table tbody').html(' -- No Data Found -- ');
        } else {

            $.each(tableData, function (index, tblValue) {
                tableData += '<tr>';

                tableData += '<td><b>' + tblValue.f_id + '</b></td>';
                tableData += '<td><b>' + tblValue.l_id + '</b></td>';


                tableData += '<td><div class="btn-group"><button class="btn btn-info updateFarmer" value="' + tblValue.l_id +":"+tblValue.f_id+ '"><i class="glyphicon glyphicon-th-list"></i></button></div></td>';
                tableData += '<td><div class="btn-group"><button class="btn btn-success requestFarmer" value="' + tblValue.l_id +":"+tblValue.f_id+ '"><i class="glyphicon glyphicon-question-sign"></i></button></div></td>';
                tableData += '</tr>';
            });
            $('.farmer_save_Table tbody').html('').append(tableData);

            $('.updateFarmer').click(function () {
                var delete_f_ID = $(this).val();

                var myarr = delete_f_ID.split(":");
               
                var res1 = myarr[0];
                var res2 = myarr[1];
                var res3 = district_id;
                    alertify.confirm("View this record ?", function (e) {
                    if (e) {
                          pub_selectbyId(res1,res2,res3);

                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
            
            $('.requestFarmer').click(function () {
                var delete_f_ID1 = $(this).val();

                var myarr = delete_f_ID1.split(":");
               
                var res3 = myarr[0];
                var res4 = myarr[1];
                    alertify.confirm("Requet to Register this farmer as a 'Commercial Farmer' ?", function (e) {
                    if (e) {
                          //farmerUpdate(res3,res4);
                      $.post("../views/commenSettingView.php", {farmer: 'update', dacs_f_id: res3, del: res4}, function (e1) {
                          List(district_id);
                            //cropTable();
                           
                            //alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                        }, "json");
                    } else {
                        alertify.log("Cancel process", "Done", 1000);
                        //clearAcsReg();
                    }
                });
            });
        }
    }, "json");
    
     
}

function pub_selectbyId(res1, res2, res3) {


    var tableDataCont = '';
    $.post("../views/commenSettingView.php", {farmer: 'select1', dacs_f_id: res1, del: res2, del1: res3}, function (tableData) {

        $('#contact_dialog').modal('show');
        $('#contact_dialog').on('shown.bs.modal', function () {
            
            //$("#txtname").focus();
            if (tableData === undefined || tableData.length === 0 || tableData === null) {
                $('.farmer_save_Table111 tbody').html(' -- No Data Found -- ');

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


                    //tableDataCont += '<td><div class="btn-group"><button class="btn btn-success accept" value="' + tblValue.id + '"><i class="glyphicon glyphicon-ok"></i></button></div></td>';
                    tableDataCont += '</tr>';
                });
                
                $('.farmer_save_Table111 tbody').html('').append(tableDataCont);


//                        $('.accept').click(function () {
//
//                            //pub_selectbyId($(this).val());
//                            var view1 = $(this).val();
//
//                            alertify.confirm("Certify this record ?", function (e) {
//                                if (e) {
//                                      accept_rec(view1,res1,res2);
//                                      pub_selectbyId(res1, res2);
//                                } else {
//                                      alertify.log("Cancel process", "Done", 1000);
//                                    //clearAcsReg();
//                                }
//                            });
//                        });
            }

        });
        //--------------------------------------------------table with accepted records--------------------------------------------------------------------------------        
    }, "json");

}
