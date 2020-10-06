// JavaScript Document

// define the varibles
var number=0;
var prodId;	
var actual=0;	
var tot=0;


/////////////////////////////////////////////////////////////////////////
	function emptyFieldvalidate(){

var cusId=document.getElementById('cusID').value;
var prodId=document.getElementById('pID').value;

	
//check the cusId if selected "select cusId" or check the prodId if selected "select prodId"
if(cusId==0 || prodId==0){
alert("Select a Customer ID and Product ID");
	return false;
}

}	
//////////////////////////checks product is available in stock/////////////////////////

function checkAdd(prodId){	
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
	    

	   //check the qty >= requested qty
	  
if (parseInt(ajaxRequest.responseText) >= parseInt(document.getElementById('qty').value))
{ 

//run the addRow function
addRow();}
//else run the alert
else {alert ("Insufficient Stock");}
   }
 }
 
 // Now get the value from user and pass it to server script.

 ajaxRequest.open("GET", "chkqty.php?prodId="+ prodId, true);
 //nothing is being send to the server after the request
 ajaxRequest.send(null); 

}

///////////////////run the function addRow/////////////////////////////////////////////////////////////////
      
	  
	    function addRow() {
			
	
   			var table = document.getElementById("myTable")
			rowCount=table.rows.length;
 
			number=rowCount;
            actual=actual+1;
            var row = table.insertRow(rowCount);
			row.id=rowCount;
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chkbox["+ number+ "]";
			element1.id="chkbox["+ number+ "]";
			cell1.appendChild(element1);
 /////////////////////////// to add the details to the table/////////////////////////////////////////////////
			
			//product ID
            var cell2 = row.insertCell(1); //insert a cell 
            cell2.innerHTML= document.getElementById("pID").value; //value of a text box assign to the tag
			cell2.innerHTML += "<input type='hidden'  name='id["+ number+ "]' id='tblid["+ number+ "]' />";//put a hidden field to the tag
			document.getElementById("tblid["+ number+ "]").value=document.getElementById("pID").value; // value of a tblid =pID
			//product Name
			var cell3 = row.insertCell(2);
            cell3.innerHTML= document.getElementById("name").value;
		    cell3.innerHTML += "<input type='hidden'  name='name["+ number+ "]' id='tblname["+ number+ "]' />";	
			document.getElementById("tblname["+number+"]").value=document.getElementById("name").value;
			//price
 			var cell4 = row.insertCell(3);
            cell4.innerHTML= document.getElementById("price").value;
			cell4.innerHTML += "<input type='hidden'  name='price["+ number+ "]' id='tblprice["+ number+ "]' />";
			document.getElementById("tblprice["+number+"]").value=document.getElementById("price").value;
			//qty
			var cell5 = row.insertCell(4);
            cell5.innerHTML= document.getElementById("qty").value;
			cell5.innerHTML += "<input type='hidden'  name='qty["+ number+ "]' id='tblqty["+ number+ "]' />";
			document.getElementById("tblqty["+number+"]").value=document.getElementById("qty").value;
			//discount
			var total=document.getElementById("qty").value * document.getElementById("price").value;
			var discountval=(document.getElementById("pdiscount").value *total )/100;
			var cell6  = row.insertCell(5);
            cell6.innerHTML= discountval;
		
			cell6.innerHTML += "<input type='hidden'  name='discount["+ number+ "]' id='tbldiscount["+ number+ "]' />";
				
			document.getElementById("tbldiscount["+number+"]").value=discountval;
			
//////////////////////////////////Total Calculation//////////////////////////////////
			tamount=total-discountval;	 // calculate the discounted price of a product	
			var cell7 = row.insertCell(6);
		
			cell7.innerHTML= tamount; 
			cell7.innerHTML += "<input type='hidden'  name='total["+ number+ "]' id='tbltotal["+ number+ "]' />";
			document.getElementById("tbltotal["+number+"]").value=tamount;
			//retrieve the current total
			tot=parseInt(document.getElementById('ftot').value);
			tot=tot + tamount;
			

			document.getElementById("total").innerHTML += "<input type='hidden' name='total' id='ftot' />"; // full total without discount
			document.getElementById("total").innerHTML=tot; // assign a value total amount tag
			document.getElementById("ftot").value=tot; // set the total amount the hidden field
			document.getElementById("ntotal").value=tot; //value of the net total
			
        }
		
	////////////////////////////deleteRow function///////////////////////////////////////////////////////////////
 
        function deleteRow() {
					
					var b=document.getElementById('ftot').value;
					var c=document.getElementById('ntotal').value;
					
					isTable=document.getElementById('myTable');
			//loop through all the rows
			for (i=actual; i>=0; i--)
			{
			
				var ele=document.getElementById('chkbox['+i+']');

				if (ele!=null)
				{
					
				if (ele.checked==true){
					 //if check record
				//delete the record
			//substract the total
			var a=document.getElementById('tbltotal['+ i +']').value;

				b=b-a;
				c=c-a;

					var row=document.getElementById(i);
					
					row.parentNode.removeChild(row);
				
				}
				}
					document.getElementById('total').innerHTML=b;
					document.getElementById('ftot').value=b;
					document.getElementById('ntotal').value=c;}
			

        }
		

		
			

	
		 

	 
	 
	 
	 