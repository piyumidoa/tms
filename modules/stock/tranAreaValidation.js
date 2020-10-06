// JavaScript Document
function validate()
{


var trArea = document.getElementById("trArea").value;
var loca = document.getElementById("loca").value;


var trArearule  =/^[A-Z\a-z\s]+$/; 
	if(!trArea.match(trArearule))
	{
		alert("Please enter a correct Training Area");
		document.getElementById("trArea").value = "";
		document.getElementById("trArea").focus();
		return false;
	}
var locarule  =/^[A-Z\a-z\s]+$/; 

	if(!loca.match(locarule))
	{
		alert("Please enter a correct location");
		document.getElementById("loca").value = "";
		document.getElementById("loca").focus();
		return false;
	}	

}