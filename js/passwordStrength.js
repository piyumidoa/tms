var pass_strength;

function IsEnoughLength(str,length)
{
	if ((str == null) || isNaN(length))
		return false;
	else if (str.length < length)
		return false;
	return true;
	
}

function HasMixedCase(passwd)
{
	if(passwd.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
		return true;
	else
		return false;
}

function HasNumeral(passwd)
{
	if(passwd.match(/[0-9]/))
		return true;
	else
		return false;
}

function HasSpecialChars(passwd)
{
	if(passwd.match(/.[!,@,#,$,%,^,&,*,?,_,~]/))
		return true;
	else
		return false;
}


function CheckPasswordStrength(txtusr_pass)
{
	if (IsEnoughLength(txtusr_pass,14) && HasMixedCase(txtusr_pass) && HasNumeral(txtusr_pass) && HasSpecialChars(txtusr_pass))
		pass_strength = "<b><font style='color:olive'>Very Strong</font></b>";
	else if (IsEnoughLength(txtusr_pass,8) && HasMixedCase(txtusr_pass) && (HasNumeral(txtusr_pass) || HasSpecialChars(txtusr_pass)))
		pass_strength = "<b><font style='color:Blue'>Strong</font></b>";
	else if (IsEnoughLength(txtusr_pass,8) && HasNumeral(txtusr_pass))
		pass_strength = "<b><font style='color:Green'>Good</font></b>";
	else
		pass_strength = "<b><font style='color:red'>Weak</font></b>";

	document.getElementById('strength').innerHTML = pass_strength;
}
document.onload ="ctck()";

//    <script language="javascript">
       /*
function passwordChanged() {
var strength = document.getElementById(‘strength’);
var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
var enoughRegex = new RegExp("(?=.{6,}).*", "g");
var pwd = document.getElementById("password");
if (pwd.value.length==0) {
strength.innerHTML = ‘Type Password’;
} else if (false == enoughRegex.test(pwd.value)) {
strength.innerHTML = ‘More Characters’;
} else if (strongRegex.test(pwd.value)) {
strength.innerHTML = ‘<span style="color:green">Strong!</span>’;
} else if (mediumRegex.test(pwd.value)) {
strength.innerHTML = ‘<span style="color:orange">Medium!</span>’;
} else {
strength.innerHTML = ‘<span style="color:red">Weak!</span>’;
}
}
*/
//</script>
