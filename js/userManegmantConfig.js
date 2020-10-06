

function login(userName, password, remember) {

    $.post("./lib/loginhandle.php", {logSystem: 'login', userName: userName, password: password, remember: remember}, function(e) {
        if (e === undefined || e.length === 0 || e === null) {
            alertify.error("System Error Occured", 2000);
        } else {
            $.each(e, function(index, msgData) {
                if (msgData.msgType === 0) {                    
                    
                    if(msgData.ms_u_level==="AIS"){
                        timelyRedirect("./AIS/DashBoard.php", 500);
                    }if(msgData.ms_u_level==="AI"){
                        timelyRedirect("./AI/DashBoard.php", 500);
                    }if(msgData.ms_u_level==="Administrator"){
                        timelyRedirect("./Admin/Usr_Mng.php", 500);
                    }if(msgData.ms_u_level==="Certify"){
                        timelyRedirect("./Certify/DashBoard.php", 500);
                    }if(msgData.ms_u_level==="Spr"){
                        timelyRedirect("./class/dum_page_01.php", 500);
                    }
                    access_log(userName,msgData.sess);
                    
                    
                } else if (msgData.msgType === 1) {
                    alertify.error(msgData.msg, 2000);
                } else if (msgData.msgType === 2) {
                    alertify.error(msgData.msg, 2000);
                } else if (msgData.msgType === 3) {
                    alertify.error(msgData.msg, 2000);
                }
                
            });
        }
        
        //-------------------------------------access log--------------------------------------------
//                $date = date("Y-m-d H:i:s");
//                var userName = userName;
//                var date = $date;
//                $.post("./views/view_Admin_Other.php", {action: 'log', key1: userName, key2: date},
//                    function (e) {
//                }, "json");
        //-----------------------------------------------------------------------------------------------
    }, "json");
}
//------------------------------------------------------------------------------------------
        function access_log(userName,sess) {

    
                var userName = userName;
                var sess = sess;

                    $.post("./views/view_Admin_Other.php", {action: 'log', key1: userName, key2: sess},
                            function (e) {
                                alertifyMsgDisplay(e, 200);
                                acsRegistrationTable();
                                clearAcsReg();
                            }, "json");
            }
//------------------------------------------------------------------------------------------
function timelyRedirect(url, delay) {
    setTimeout(function() {
        window.location = url;
    }, delay);
}

function logout(sess_id) {
   
    alertify.confirm("Are you sure want to log out the system", function(e) {
        if (e) {
            $.post("../views/checkUsersAndPrivilages.php", {logout: 'logout'}, function(e) {
                if (e == 1) {
                    sess_edit(sess_id);
                    timelyRedirect("../index.php", 250);
                    
                }
            });
        }
    });
}
function sess_edit(sess_id){
    //alert(sess_id);
    $.post("../views/view_Admin_Other.php", {action: 'log_unset', key1: sess_id}, function (e) {
        //pub_selectbyId(res1, res2);
    }, "json");
}

function checkUsername(data) {
    $.post("views/userManegmentView.php", {action: 'checkUname', typeUname: data}, function(e) {
        if (e > 0) {
            $('#unameMsg').html("Username Currently Exist");
            $('#useerAdsavesection').addClass("hidden");
        } else {
            $('#unameMsg').html("");
            $('#useerAdsavesection').removeClass("hidden");
        }
    });
}

function pageProtect() {
    $.post("../views/checkUsersAndPrivilages.php", {pageProtect: 'data'}, function (e) {
        if (e == 1) {
           // timelyRedirect("index.php", 0);
           window.location.replace("../index.php");
        }

        $(document).ready(function ()
        {
            $(document).bind("contextmenu", function (e) {
                return false;
            });
        });

        document.onkeypress = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-12');
                return false;
            }
        }
        document.onmousedown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-keys');
                return false;
            }
        }
        document.onkeydown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-keys');
                return false;
            }
        }
    });
}

