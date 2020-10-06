<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.error{
  color: #ff0000;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
#apDiv1 {
	position: absolute;
	width: 468px;
	height: 115px;
	z-index: 1;
	left: 354px;
	top: 65px;
}
</style>
</head>
<body>
<h2 align="center">Login Form</h2>
<div id="apDiv1">
<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <p><img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </p>
    <p><samp class="error">
        <?php
//Error Messages
if(isset($_GET["msg"]))
{
	$err = $_GET["msg"];
	if($err=="1"){
		echo 'Username can not be blank';
	}else if($err =="2"){
		echo 'Password can not be blank';
	}else if($err =="3")
		echo 'username or Password is invalid';
	else if($err =="4"){
		echo 'Your account has been deactivated, Please contact administrator';
	}
}
?>
      </samp></p>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
        
    <button type="submit">Login</button>
  </div>

</form>




</div>


</body>
</html>