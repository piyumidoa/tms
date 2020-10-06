function loadUnit(dirid,type){
	//alert(empId);
		if(dirid=="")
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
				document.getElementById("unitget").innerHTML = xmlhttp.responseText;
				else if(type=="2")
				document.getElementById("unitget").innerHTML=xmlhttp.responseText;
                        }
		  }
		  if(type=="1")
		 	var url = "../../lib/emp_func.php?dirid="+dirid;
		else if(type=="2")
			alert(val);
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	

function loaddata_self(esid){
	//alert(empId);
		if(esid=="")
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
				//alert(xmlhttp.responseText);
				document.getElementById("txt_error").value = xmlhttp.responseText;
                        }
		  }
		  var url;
			url = "../../lib/emp_func.php?esid="+esid;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	

function loaddata(empId){
	//alert(empId);
		if(empId=="")
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
				//alert(xmlhttp.responseText);
				document.getElementById("txt_error").value = xmlhttp.responseText;
                        }
		  }
		  var url;
			url = "../../lib/emp_func.php?empId="+empId;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	
	
    function validate_emp(){  
    var id = document.frmreg_emp.txtemp_id.value;         
    var id_rule = /^[0-9]{12}$/;
	if(!id.match(id_rule))
	{
	//	alert("Please enter a correct ID");
		document.getElementById('error').innerHTML = "Please enter Employee ID";
        document.frmreg_emp.txtemp_id.focus();       
        return false;
	}	
        var terror = document.getElementById('txt_error').value;
        if(terror !== ''){
                document.getElementById("error").innerHTML = "Employee ID already exist";
                document.frmreg_emp.txtemp_id.focus();
        //        alert( "Employee ID already exist");
                return false;
        } 
		var etit = document.getElementById('txtemp_title').value;
		if(etit == ''){
			document.getElementById('error').innerHTML = "Please enter the Title";
			document.getElementById('txtemp_title').focus();
			return false;
		}
		var ename = document.getElementById('txtemp_name').value;
		if(ename == ''){
			document.getElementById('error').innerHTML = "Please enter the name with initials";
			document.getElementById('txtemp_name').focus();
			return false;
		}
		var fnam = document.getElementById('txtemp_initials').value;
		if(fnam == ''){
			document.getElementById('error').innerHTML = "Please enter the full name";
			document.getElementById('txtemp_initials').focus();
			return false;
		}        
		var edob = document.getElementById('txtemp_dob').value;	
		if(edob == ''){
			document.getElementById('error').innerHTML = "Please Select the date of birth";
			document.getElementById('txtemp_dob').focus();
			return false;
		} 
		var enic = document.getElementById('txtemp_nic').value;
        var nic_rule = /^[0-9]{9}[V|X]$/;
		    	
		if(!enic.match(nic_rule)){
			document.getElementById('error').innerHTML = "Please enter the NIC number following the format";
			document.getElementById('txtemp_nic').focus();
			return false;
		}
        var year=Number(edob.substr(0,4));
        var month=Number(edob.substr(5,2))-1;
        var day=Number(edob.substr(8,2));
        var today=new Date();
        var age=today.getFullYear()-year;
            if(today.getMonth()<month || (today.getMonth()==month && today.getDate()<day)){age--;}
        var eyear=Number(edob.substr(2,2));
        var nicyr=Number(enic.substr(0,2));
		if(age<18){
            document.getElementById('error').innerHTML = "Employee is less than 18 years.Please Select the correct date of birth";
			document.getElementById('txtemp_dob').focus();
			return false;
		}    
		var eaddr = document.getElementById('txtemp_address').value;    
		if(eaddr == ''){
			document.getElementById('error').innerHTML = "Please enter the Permenant Address";
			document.getElementById('txtemp_address').focus();
			return false;
		}
		var edsd= document.getElementById('cmbdsd').value;
		if(edsd == ''){
			document.getElementById('error').innerHTML = "Please Select the Divisional Secretariate Division";
			document.getElementById('cmbdsd').focus();
			return false;
		}    	
		var egnd= document.getElementById('cmbgnd').value;
		if(egnd == ''){
			document.getElementById('error').innerHTML = "Please Select the Grama Niladhri Division";
			document.getElementById('cmbgnd').focus();
			return false;
		}   
		var resinat= document.getElementById('resi_nat').value;
		if(resinat == ''){
			document.getElementById('error').innerHTML = "Please Select the Nature of the Residence";
			document.getElementById('resi_nat').focus();
			return false;
		}    
		var eserv= document.getElementById('cmbservice').value;
		if(eserv == ''){
			document.getElementById('error').innerHTML = "Please Select the Service";
			document.getElementById('cmbservice').focus();
			return false;
		}    		
		var cpst= document.getElementById('cmbpost').value;
		if(cpst == ''){
			document.getElementById('error').innerHTML = "Please Select the Post";
			document.getElementById('cmbpost').focus();
			return false;
		}         
		var cgrd = document.getElementById('cmbgrad').value;  
		if(cgrd == ''){
			document.getElementById('error').innerHTML = "Please select the Grade";
			document.getElementById('cmbgrad').focus();
			return false;
		}    
		var esal = document.getElementById('cmbsalary').value;  
		if(esal == ''){
			document.getElementById('error').innerHTML = "Please select the Salary Code";
			document.getElementById('cmbsalary').focus();
			return false;
		}   
		var ebsal = document.getElementById('txtsal_basic').value;  
		if(ebsal == ''){
			document.getElementById('error').innerHTML = "Please enter the Salary Scale";
			document.getElementById('txtsal_basic').focus();
			return false;
		}     
		var dirdiv = document.getElementById('cmbdir_div').value;  
		if(dirdiv == ''){
			document.getElementById('error').innerHTML = "Please select the Directorial Division";
			document.getElementById('cmbdir_div').focus();
			return false;
		}   
		var cunit = document.getElementById('cmbunit').value;  
		if(cunit == ''){
			document.getElementById('error').innerHTML = "Please select the Unit";
			document.getElementById('cmbunit').focus();
			return false;
		}     	
		var dist = document.getElementById('hdist').value;  
		if(dist == ''){
			document.getElementById('error').innerHTML = "Please select the Reasons & click the Show Marks Button";
			document.getElementById('txt_dist').focus();
			return false;
		}     	
		
		var htotal = document.getElementById('htotal').value;  
		if(htotal == ''){
			document.getElementById('error').innerHTML = "Please select the Reasons & click the Show Marks Button";
		//	document.getElementById('cmbunit').focus();
			return false;
		}     	

/*
	var emailrule = /^[\w\.]+\@[a-zA-Z\d\-\.]+\.[a-zA-Z]{2,4}$/;
	if(!email.match(emailrule))
	{
		alert("Please enter a correct email address");
		document.getElementById("email").value = "";
		document.getElementById("email").focus();
		return false;
	}
    else if(terror !== ''){
        document.getElementById("error").innerHTML = "Employee ID already exist";
        document.frmreg_emp.txtemp_id.focus();
     // alert( "Employee ID already exist");
        return false;
                
		///*/
			document.getElementById('frmreg_emp').submit();	
				}
