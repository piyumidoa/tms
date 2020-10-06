// JavaScript Document
function validate()
{


var name = document.getElementById("name").value;
var description = document.getElementById("description").value;


var namerule  =/^[A-Z\a-z\0-9\d\#\/\-\,\.\s]+$/;
	if(!name.match(namerule))
	{
		alert("Please enter a correct name");
		document.getElementById("name").value = "";
		document.getElementById("name").focus();
		return false;
	}
var descriptionrule  =/^[A-Z\a-z\0-9\d\#\/\-\,\.\s]+$/;
	if(!description.match(descriptionrule))
	{
		alert("Please enter a correct description");
		document.getElementById("description").value = "";
		document.getElementById("description").focus();
		return false;
	}	

}