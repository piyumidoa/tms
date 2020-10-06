// JavaScript Document

//function generateBillNo(){
// var ajaxRequest;  // The variable that makes Ajax possible		
// try{
//   // Opera 8.0+, Firefox, Safari
//   ajaxRequest = new XMLHttpRequest();
// }catch (e){
//   // Internet Explorer Browsers
//   try{
//      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
//   }catch (e) {
//      try{
//         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
//      }catch (e){
//         // Something went wrong
//         alert("Your browser broke!");
//         return false;
//      }
//   }
// }
// // Create a function that will receive data 
// // sent from the server and will update
// // div section in the same page.
// ajaxRequest.onreadystatechange = function(){
//   if(ajaxRequest.readyState == 4){
//      var ajaxDisplay = document.getElementById('billno');
//	  
//      ajaxDisplay.value = ajaxRequest.responseText;
//   }
// }
// 
// // Now get the value from user and pass it to
// // server script.
//
// ajaxRequest.open("GET", "gbillno.php", true);
// ajaxRequest.send(null); 
//}

//////////////////////////////////////////////////////////////
	function productRetrieve(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser is broken!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('pname');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }

 // Now get the value from user and pass it to
 // server script.
 var id = document.getElementById('pID').value;

 var queryString = "?pID=" + id ;
 ajaxRequest.open("GET", "productr.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}

///////////////////////////////////////////////////////////////////////////////
		
 function cusnameRetrieve(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser is broken!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('pname');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }

 // Now get the value from user and pass it to
 // server script.
 var id = document.getElementById('cusID').value;

 var queryString = "?cusID=" + id ;
 ajaxRequest.open("GET", "cusNameRe.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
///////////////////////////////////////////////////////////////////////////////
		
 function discountRetrieve(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser is broken!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ddiscount');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  
	  
	  var a=document.getElementById('ftot').value;
	   var b=document.getElementById('dis').value ;
	  var c =a-[(a*b)/100];
	  document.getElementById('ntotal').value=c;
	  
   }
 }

 // Now get the value from user and pass it to
 // server script.
 var id = document.getElementById('disname').value;

 var queryString = "?disname=" + id ;
 ajaxRequest.open("GET", "disNameRe.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}