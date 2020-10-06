            function inputKeyUp(e) {
                e.which = e.which || e.keyCode;
                if (e.which === 13) {
                    var userName = $('#userName').val();
                    var password = $('#password').val();

                    if ($('#remember').prop('checked')) {
                        var remember = "r";
                    } else {
                        var remember = "nr";
                    }
                    login(userName, password, remember);
                }
            }
                              
            $(function () {
//                starterBgSlideTransition();
//                $('.showHidePwd').on('change', function () {
//                    $('#password').hideShowPassword($(this).prop('checked'));
//                });

                $('#logSystem').click(function () {
                    var userName = $('#userName').val();
                    var password = $('#password').val();

                    if ($('#remember').prop('checked')) {
                        var remember = "r";
                    } else {
                        var remember = "nr";
                    }
                    login(userName, password, remember);
                });
            });



