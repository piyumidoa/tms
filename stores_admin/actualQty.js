// JavaScript Document
function loadparticipant(nop) {

//	alert(nop);

	if(nop=="")
		return;
	 
			var fc=nop;
		
			var pen=nop;
			
			var hs=nop*3;
			
				
			document.getElementById("fc").value=fc;
			document.getElementById("pen").value=pen;
			document.getElementById("hs").value=hs;
				
			
		
        }

       function loadplace(pdate,type){
	//alert(pdate);
		if(pdate=="")
		return;
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(type=="1")
			//	alert(xmlhttp.responseText);
				document.getElementById("showplace").innerHTML = xmlhttp.responseText;
				else if(type=="2")
				document.getElementById("showplace").innerHTML=xmlhttp.responseText;
                        }
		  }
		  if(type=="1")
		 	var url = "usedStockAction.php?pdate="+pdate;
		else if(type=="2")
			alert(val);
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	


	 function loadprog(prgplace,type){
	//alert(prgplace);
		if(prgplace=="")
		return;
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(type=="1")
			//	alert(xmlhttp.responseText);
				document.getElementById("showprog").innerHTML = xmlhttp.responseText;
				else if(type=="2")
				document.getElementById("showprog").innerHTML=xmlhttp.responseText;
                        }
		  }
		  if(type=="1")
		 	var url = "usedStockAction.php?prgplace="+prgplace;
		else if(type=="2")
			alert(val);
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	

