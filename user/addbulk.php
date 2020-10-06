 <html>
<head>
 <SCRIPT language="javascript">
        function addRow(tableID) {

            var table = document.getElementById(tableID);

            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var colCount = table.rows[0].cells.length;

            for(var i=0; i<colCount; i++) {

                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }


            }
            }catch(e) {
                alert(e);
            }
        }
</SCRIPT>
</head>
<body>
<form name="frmreg_emp" id="frmreg_post" action="addbulk.php"   method="post" enctype="multipart/form-data">
 <table width="97%" border="0" align="center" style="width:90%;" >
                        <INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
                        <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
 <tr><td width="4%" ></td>
        <td width="41%">Name with Initials</td>
        
                        </tr>
	<TABLE id="dataTable" border="0" style="width:90%">
		<TR>
			<TD><INPUT type="checkbox" name="chk"/></TD>
			<TD><INPUT type="text" name="txt_post_name[]" /></TD>					
		</TR>
	</TABLE>                                              
</table> 
<input type="submit" value="Add"  name="add" style="width: 80px; height: 30px"/> 
</form> 
</body>          
</html> 

<?php
if (isset($_POST["add"])){

require_once '../lib/connection.php';

$dbobj = new dbConnection();
$con = $dbobj->getCon();
    
 //   $chkbox = $_POST['chk'];
    $pname = $_POST['txt_post_name'];

    foreach($pname as $a => $b)
    {    
        if($pname[$a]!=""){
 $sql2 = "INSERT INTO tbl_dir_div(dir_div_name) VALUES ('$pname[$a]')";
 //   $sql2 ="UPDATE tbl_post SET dir_div_name='$pname[$a]' WHERE post_id=16;";
  $query_result2 = mysqli_query($con,$sql2);  
}else
{}
    }  
}
?>