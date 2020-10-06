<html>
    <head>      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">               
            <div class="row"> 
                 <div class="container-fluid">               
            <div class="row"> 
                <input type="hidden" class="form-control" placeholder="" value="<?php echo session_id(); ?>" id="sess_id">
                <div class="col-md-16">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Add Training Programme</legend>
                        <div class="col-md-11">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Date</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="f_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Training Programme</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="l_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Place</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="email">
                                        <h6 id="e_mail_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">User Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="u_name" onBlur="checkAvailability();"><span id="user-availability-status"></span>
                                        <h6 id="u_name_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" placeholder="" id="password_init">
                                        <h6 id="p_word_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-md-2 control-label">Re-type Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" placeholder="" id="password">
                                        <h6 id="p_word_2" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                        <h6 id="p_word_3" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label  class="col-md-2 control-label">User Type</label>

                                    <div class="col-md-2">
                                        <select id="type" class="form-control chzn-select">
<!--                                            <select id="combo_district">-->
                                                <option disabled>Select User Type</option>
                                                <option value="AI">AI</option>
                                                <option value="AIS">Senior AI</option>     
                                              </select>
                                              <h6 id="u_type_1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="" name="f_id" id="id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">DOB</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="" id="dob">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
                 </div>
            </div>
        </div>
    </body>
</html>