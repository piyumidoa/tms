<?php 

require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();

/* calculate total estimated value */
if(isset($_GET["total"])){
	$total = $_GET["total"];
    
    echo $total;
	
}

/* print Estimation Letter */
if(isset($_POST["submitEstimation"]))
{

     $txt_train = $_POST["txt_train"];
     $district_id = $_POST["district_id"];
     $fuel_costs = $_POST["fuel_costs"];
     $training_aids = $_POST["training_aids"];
     $no_of_days = $_POST["no_of_days"];
     $vote = $_POST["vote"];
     $place = $_POST["place"];

          // count tbl_training_estimation rows
    $count_query = "SELECT COUNT(*) FROM `tbl_training_estimation`";

    $count_result = mysqli_query($con,$count_query);
    $rows = $count_result->num_rows;
    $id = "";                                       
    if($rows == 1){
        while($rec = mysqli_fetch_assoc($count_result)) {
            
            $id = $rec["COUNT(*)"];
        }
    } 
    $id = $id + 1; // generate new id

    // insert estimated cost for fuel_costs, training_aids
    $estimation_query = "INSERT INTO `tbl_training_estimation`
    ( id, train_id, district_id, fuel_costs, training_aids) VALUES
    ('$id', '$txt_train', '$district_id', '$fuel_costs', '$training_aids')";

    $insert_est = mysqli_query($con,$estimation_query);

    // insert estimated cost for resource_contribution_allowance for each date
    
    for ($x = 1; $x <= $no_of_days; $x++) {

        $training_date = $_POST["training_date".$x];
        $no_of_hours = $_POST["no_of_hours".$x];
        $payment_per_hour = $_POST["payment_per_hour".$x];        
        
        if( !empty(trim($training_date)) && !empty(trim($no_of_hours)) &&  !empty(trim($payment_per_hour)) ) {

            $resource_contribution_query = "INSERT INTO `tbl_resource_contribution_allowance`
            ( `training_estimation_id`, `training_date`, `no_of_hours`, `payment_per_hour`) VALUES 
            ('$id', '$training_date', '$no_of_hours', '$payment_per_hour' )";

            $insert_resource_contribution = mysqli_query($con,$resource_contribution_query);
        }
    }   

    // if db aupdate success print the letter 
    if( $insert_est > 0 && $insert_resource_contribution > 0 ) {
            
        /* Letter printing started */
        $select_training = "SELECT * FROM `tbl_training` WHERE `train_id`='$txt_train'";

        $training_name = mysqli_query($con,$select_training);
        $rows = $training_name->num_rows;
        $train_name = "";                                       
        if($rows == 1) {
            while($rec = mysqli_fetch_assoc($training_name)) {
                
                $train_name = $rec["train_name"];
            }
        } 
        $dates_text = "";
        if( $no_of_days > 0) {
            $training_date1 = strtotime($_POST["training_date1"]);            

            $table_text = "";
            $resource_person_contribution = 0;
            for ($x = 1; $x <= $no_of_days; $x++) {

                $training_date = $_POST["training_date".$x];
                $no_of_hours = $_POST["no_of_hours".$x];
                $payment_per_hour = $_POST["payment_per_hour".$x];        
                
                if( !empty(trim($training_date)) && !empty(trim($no_of_hours)) &&  !empty(trim($payment_per_hour)) ) {

                    $training_date_timestamp = strtotime($training_date);
                    if( $x == 1) {
                        $year = date("Y" ,$training_date_timestamp);
                        $month = date("m" ,$training_date_timestamp);
                        $month_name = "";
                        if( $month == "01") {
                            $month_name = "ජනවාරි ";
                        }
                        if( $month == "07") {
                            $month_name = "ජුලි  ";
                        }
                        $day = date("d" ,$training_date_timestamp); 
                        $dates_text = $dates_text."".$year." ".$month_name." මස  ".$day;
                    }
                    if( $x == $no_of_days && $no_of_days > 1 ) {
                        $dates_text = $dates_text." සහ  ".date("d" ,$training_date_timestamp);
                    }
                    if( $x > 1 && $x != $no_of_days) {                        
                        $dates_text = $dates_text.", ".date("d" ,$training_date_timestamp);
                    }
                                    
                    $table_text = $table_text.$training_date." ( පැයකට රු.".$payment_per_hour." X පැය ".$no_of_hours." )<br/>";
                    $resource_person_contribution = $resource_person_contribution + $no_of_hours * $payment_per_hour;
                }
            }  
        }
         

        $total = 0;
        $total = $resource_person_contribution + $fuel_costs + $training_aids;
        $letter_text = '
        <div id="divpanel" align="right">
        <input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
        </div>
        <div class="container-fluid"><div class="row">
                    <h3 align="center"><u>'.$train_name.' පිළිබඳ පුහුණු වැඩසටහන</u></h3>
                    <h3 align="center"><u>'.$place.'</u></h3>
                    <h3 align="center"><u>'.$dates_text.' </u></h3>
                    <h3 align="center"><u> වියදම් ඇස්තමේන්තුව </u></h3>
                    <table align="center">
                    <tr><td></td><td></td><td>රු. ශත</td></tr>
                    <tr><td>1. සම්පත් දායක දීමනා  <br/>'.$table_text.'<br/></td><td> = </td><td>'.$resource_person_contribution.'</td></tr>
                    <tr><td>2. ඉන්ධන වියදම<br/>(ප්‍රධාන කාර්යාලයේ සිට පුහුණුව පැවැත්වෙන ස්ථානය දක්වා ලිපිද්‍රව්‍ය ප්‍රවාහනය, සම්පත්දායකයින් ප්‍රවාහනය)<br/> <br/></td>
                        <td> = </td><td>'.$fuel_costs.'</td></tr>
                    <tr><td>3. පුහුණු ආධාරක<br/> (සම්පත් දායකයන්ගේ ඉල්ලීම අනුව ලබාදීම සඳහා)<br/> <br/></td><td> = </td><td>'.$training_aids.'</td></tr>
                    <tr><td><strong>එකතුව<br/><br/></strong></td><td> = </td><td><strong><u>'.$total.'</u></strong></td></tr>
                    </table>
                    <div align="center">ඉහත සඳහන් පුහුණු වැඩසටහන සඳහා සකස් කර ඇති ඇස්තුමේන්තු ගත රු.'.$total.' ක මුදල '.$vote.'
                    වැය විෂයෙන් වියදම් කිරීම සඳහා අනුමැතිය ලබා දෙන ලෙසට කාරුණිකව ඉල්ලමි.</div><br/>
                    <div align="right">ඩී.එම්. අංජලිකා අතපත්තු</div>
                    <div align="right">පරිපාලන නිලධාරී</div>
                    <div align="right">(පාලන 04)</div><br/>
                    <div align="center">ඉහත වැඩසටහන් සදහා ඇස්තමේන්තුගත මුදල නිර්දේශ කරමි.</div>
                    <div align="right">ආර්. තිලගේෂ්වරී</div>
                    <div align="right">සහකාර අධ්‍යක්ෂ</div>
                    <div align="right">(ආයතන II)</div><br/>
                    <div align="center">ඉහත සඳහන් ඇස්තමේන්තු ගත මුදල '.$vote.' වැය විෂයෙන් වියදම් කිරීම සඳහා අනුමැතිය ලබා දෙමි.</div>
                    <div align="right">පී.එම්.ඩී.ඩබ්ලිව්.ඩී. පල්ලාවල</div>
                    <div align="right">අධ්‍යක්ෂ (පාලන)</div>
                </div></div>
                <script type="text/javascript">
                    function prnt(){
                    document.getElementById("divpanel").style.display="none";
                    window.print();
                    }
            </script>';

        echo $letter_text;
        /* Letter printing ended */

    }
    else {
        header("Location:../modules/employee/training_estimation.php?msg=2");
    }
}
    
?>