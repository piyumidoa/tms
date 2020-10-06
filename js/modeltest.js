function farmerTable(district_id) {
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
            //$('#modal').modal({backdrop: 'static', keyboard: false})  
            ///////////// DELETE customer /////////////////
//            $('.deleteFarmer').click(function () {
//                var deletefarmerID = $(this).val();
//                alertify.confirm("Are you sure want to detele this record?", function (e) {
//                    if (e) {
//                        $.post("views/commenSettingView.php", {farmer: 'delete', dfrm_reg_id: deletefarmerID}, function (e) {
//                            farmerTable();
//                            alertifyMsgDisplay(e, 2000);
//                        }, "json");
//                    } else {
//                        alertify.log("Cancel process", "Done", 1000);
//                    }
//                });
//            });
            ///////////// UPDATE customer ///////////////
//            $('.updateFarmer').click(function () {
//
//                //farmerUpdate(($(this).val()));
//                var delete_f_ID = $(this).val();
//                var myarr = delete_f_ID.split(":");
//                var res1 = myarr[0];
//                var res2 = myarr[1];
//            });
            
            
            
            $('.updateFarmer').click(function () {
                var delete_f_ID = $(this).val();

                var myarr = delete_f_ID.split(":");
               
                var res1 = myarr[0];
                var res2 = myarr[1];
                var res3 = district_id;
                    alertify.confirm("View this record ?", function (e) {
                    if (e) {
                          farmerUpdate(res1,res2,res3);
                       // $.post("../views/commenSettingView.php", {farmer: 'select1', dacs_f_id: res1, del: res2}, function (e1) {
                        
                            //cropTable();
                           
                            //alertifyMsgDisplay(e, 200);
                            //clearAcsReg();
                     //   }, "json");
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
                          farmerTable(district_id);
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


function farmerUpdate(res1,res2,res3) {//-------------------------------------------------------------------------------------------------------------- 
 
    var Actionmodel = $('<div class="modal fade panel">' +
            '<div class="modal-dialog scrollable" style="overflow-y: auto; overflow-x: auto; width:100%">' +
            '<div class="modal-dialog">'+
            '<div class="modal-conten">' +
            '<div class="modal-header">' +
            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' +
            '<h4 class="modal-title">Crop Details</h4>' +
            '<table class="table table-responsive table-hover crop_save_Table bg-success" id="crop_Table body">' +
            '</div>' +
            

            
            '<div class="modal-body">' +
            '<thead>'+
            '<tr class="bg-danger">'+
            '<th>'+"ID"+'</th>'+
            '<th>'+"Land ID"+'</th>'+
            '<th>'+"Crop"+'</th>'+
            '<th>'+"Variety"+'</th>'+
            '<th>'+"Extent (Hect)"+'</th>'+
            '<th>'+"Planting Date"+'</th>'+
            '<th>'+"Harvesting Date"+'</th>'+
            '<th>'+"Qty (Kg)"+'</th>'+
            '<th>'+"Target Market"+'</th>'+
            '</tr>'+
            '</thead>'+
            
            '<tbody>' +
            
//            '<tr>' +
//            
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control f_id"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control l_id"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control crop"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control variety"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control extent"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control planting"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control harvesting"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" disabled class="form-control yield"/>' +
//            '</td>' +
//            
//            '<td>' +
//            '<input type="text" style="width:500px" disabled class="form-control market"/>' +
//            '</td>' +
//            
//            '</tr>' +
         

            '</tbody>' +
            '</table>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>');


  var tableData1;
 Actionmodel.modal('show');
 
 $.post("../views/commenSettingView.php", {farmer: 'select1', dacs_f_id: res1, del: res2, del1: res3}, function (Data) {
   // $.post("../views/commenSettingView.php", {farmer: 'select_by_Id', dfrm_reg_id: tID}, function (Data) {
        if (Data === undefined || Data.length === 0 || Data === null) {
            alertify.error("Internal Error Occured", 2000);
        } else {
 modalShowEventCallBack(Actionmodel, function () {
        
             $.each(Data, function (index, tblValue) {
                tableData1 += '<tr>';

                tableData1 += '<td>' + tblValue.f_id + '</td>';
                tableData1 += '<td>' + tblValue.l_id + '</td>';
                tableData1 += '<td>' + tblValue.crop + '</td>';
                tableData1 += '<td>' + tblValue.variety + '</td>';
                tableData1 += '<td>' + tblValue.extent + '</td>';
                tableData1 += '<td>' + tblValue.planting + '</td>';
                tableData1 += '<td>' + tblValue.harvesting + '</td>';
                tableData1 += '<td>' + tblValue.yield + '</td>';
                tableData1 += '<td>' + tblValue.market + '</td>';


                //tableData1 += '<td><div class="btn-group"><button class="btn btn-info updateFarmer" value="' + tblValue.id + '"><i class="glyphicon glyphicon-eye-open"></i></button></div></td>';
                tableData1 += '</tr>';
            });
            $('.crop_save_Table tbody').html('').append(tableData1);
        } );  
        }


    }, "json");
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//    function cropTable() {
//    var tableData1;
//    //var deleteUserID;
//
//    $.post("../views/commenSettingView.php", {crop: 'select'}, function (tableData1) {
//        if (tableData1 === undefined || tableData1.length === 0 || tableData1 === null) {
//            $('.crop_save_Table tbody').html(' -- No Data Found -- ');
//        } else {
//
//            $.each(tableData1, function (index, tblValue) {
//                tableData1 += '<tr>';
//
//                tableData1 += '<td>' + tblValue.f_id + '</td>';
//                tableData1 += '<td>' + tblValue.l_id + '</td>';
//                tableData1 += '<td>' + tblValue.crop + '</td>';
//                tableData1 += '<td>' + tblValue.extent + '</td>';
//                tableData1 += '<td>' + tblValue.planting + '</td>';
//                tableData1 += '<td>' + tblValue.harvesting + '</td>';
//                tableData1 += '<td>' + tblValue.yield + '</td>';
//                tableData1 += '<td>' + tblValue.market + '</td>';
//
//
//                //tableData1 += '<td><div class="btn-group"><button class="btn btn-info updateFarmer" value="' + tblValue.id + '"><i class="glyphicon glyphicon-eye-open"></i></button></div></td>';
//                tableData1 += '</tr>';
//            });
//            $('.crop_save_Table tbody').html('').append(tableData1);
//            ///////////// DELETE customer /////////////////
////            $('.deleteFarmer').click(function () {
////                var deletefarmerID = $(this).val();
////                alertify.confirm("Are you sure want to detele this record?", function (e) {
////                    if (e) {
////                        $.post("views/commenSettingView.php", {farmer: 'delete', dfrm_reg_id: deletefarmerID}, function (e) {
////                            farmerTable();
////                            alertifyMsgDisplay(e, 2000);
////                        }, "json");
////                    } else {
////                        alertify.log("Cancel process", "Done", 1000);
////                    }
////                });
////            });
//            ///////////// UPDATE customer ///////////////
////            $('.updateFarmer').click(function () {
////
////                farmerUpdate(($(this).val()));
////            });
//        }
//    }, "json");
//}
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
}//------------------------------------------------------------------------------------------------------------------------------------------------------
function modalShowEventCallBack(modalData, callback) {
    modalData.modal("show").on('shown.bs.modal', function() {
        callback();
    });
}