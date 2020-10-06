<?php
session_start();
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
$now = time();
$authed = isset($username, $password);
if( $authed == "0" ){
    header('Location:../../index.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:../../logout.php');
        }
} 
else {
    header('Location:../../index.php');
}

if(isset($_POST["composeLetter"]))
    {
    $sno = $_POST["txt_sno"];
    $pdate = $_POST["txt_date"];
    $prg = $_POST["txt_train"];
 	$unit_name = $_POST["unit_name"];
	$start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
	$time = $_POST["time"];
    }
?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Print Calling Letter | TMS for DOA</title>  
        <style type="">
            p, ol, li{
                font-size: 15px;
            }
        </style>
        <script type="text/javascript">
            function prnt(){
            document.getElementById("divpanel").style.display='none';
            window.print();
            }
</script>
</head>
<body>
    
    
    
    <h5>
        <?php 
            require_once '../../lib/connection.php';

            $dbobj = new dbConnection();
            $con = $dbobj->getCon();
                                                    
            $training_name = "SELECT * FROM `tbl_training` WHERE `train_name`= '$prg'";
            $training_name_result = mysqli_query($con,$training_name);
            $training_names = $training_name_result->num_rows;
            if($training_names == 1){
                while($rec = mysqli_fetch_assoc($training_name_result)){
                    $train_id = $rec["train_id"];
                }
            }


            $sql = "SELECT * FROM tbl_apply_training, tbl_employee, tbl_unit,tbl_post where tbl_apply_training.emp_id = tbl_employee.emp_id AND
            tbl_employee.unit_id = tbl_unit.unit_id AND tbl_employee.emp_post = tbl_post.post_id AND tbl_apply_training.emp_approve = 2 AND tbl_apply_training.train_id=$train_id";

            $result = mysqli_query($con,$sql);
 
            mysqli_close($con);
            $nor = $result->num_rows;
        //                                   explode();         
            if($nor>0){
                while($rec = mysqli_fetch_assoc($result)){
            $uname = $rec["unit_name"];
			    $title = $rec["emp_title"];
				if($title == 'Mr') {
					$sin_title="මයා";}
					else {
						$sin_title="මිය";
						}
				
            $emp_name = $rec["emp_name"];
            $post_name = $rec["post_name"];
			$start_date = $_POST["start_date"];
   			$end_date = $_POST["end_date"];
          //  $uname = explode(',',$uaddress); 
  //          $uaddr = substr($uaddress,, 1); 
            ?>
        <h5 align="right" style="  "><?php echo $sno;?></h5>
    <h5 align="right" style=" margin-top:-15px; ">කළමනාකරණ සංවර්ධන, පුහුණු හා ඵලදායීතා ප්‍රවර්ධන ශාඛාව,</h5>
    <h5 align="right" style=" margin-top:-15px; ">කෘෂිකර්ම දෙපාර්තමේන්තුව,</h5>
    <h5 align="right" style=" margin-top:-15px; ">පේරාදෙණිය.</h5>
    <h5 align="right" style=" margin-top:-15px; "><?php echo $pdate;?></h5>
    <?php
            echo $uname. " මඟින්,<br/>".$post_name.",<br/>".$emp_name." ".$sin_title.".<br/>";
            ?> <br/>
            </h5>
    <h3 align="center"><?php echo $prg;?></h3>
    <p>උක්ත මැයෙන් යුත් මාගේ සමාංක හා 2019.09.03 දිනැති ලිපිය හා  බැඳේ.</p>
    <p>
        02.	එම ලිපිය මගින් අයදුම්පත්‍ර කැඳවන ලද කාර්යාල කළමනාකරණය හා ගුණාත්මක වැඩ පරිසරයක් ගොඩනැගීම  පිළිබඳ  පුහුණු වැඩසටහන කළමනාකරණ සංවර්ධන, පුහුණු හා ඵලදායීතා ප්‍රවර්ධන ශාඛාවේ (පාලන 04) මෙහෙයවීම යටතේ <?php echo $start_date;?>  <?php if ($end_date == "") { echo "දින";} else { echo " සහ ".$end_date. "යන දිනවලදී"; }?>   <?php echo $time;?>  දක්වා <?php echo $unit_name;?> දී පැවැත්වේ.
    </p>
    <p>
        03.	මෙම වැඩසටහන සඳහා ඔබගේ ආයතන ප්‍රධානියා විසින් තෝරා එවන ලද අයෙකු වශයෙන් ඔබව සහභාගී කරවා ගැනීමට තීරණය කර ඇති බව සතුටින් දන්වමි. මෙම වැඩමුළුව සඳහා සහභාගී වන ඔබ පහත සඳහන් කරුණු පිළිබඳ අවධානය යොමු කළ යුතු බව කාරුණිකව දන්වා සිටිමි.
    </p>
    <p>
    <ol type="I">
        <li>මෙම ලිපිය අංශ භාර ප්‍රධානියා / ඒකක ප්‍රධානියා වෙත ඉදිරිපත් කර ඔබට අවශ්‍ය රාජකාරී නිවාඩු අනුමත කරවාගෙන පුහුණුව සඳහා සහභාගී විය යුතුය.</li>
        <li>වැඩමුළුව ආරම්භ කරන නියමිත වේලාවට පෙර පැමිණීම වඩාත් වැදගත් වන අතර, ලියාපදිංචි කිරීමේ කටයුතු නිම කර දේශන ශාලාවට වාර්තා කරන්න. එසේම පුහුණු වැඩමුළුවට සහභාගී වීමේදී රජයේ ආයතනයකට සුදුසු ඇඳුමකින් සැරසී පැමිණිය යුතුය.</li>
        <li>ආහාර පාන සඳහා අදාල ලේඛන හා පැමිණීමේ ලේඛන වල අත්සන් කිරීමටත්, ප්‍රතිපෝෂණ පත්‍රිකා (Feedback Form) නිවැරදිව සම්පූර්ණ කර ආපසු භාරදීමටත් කටයුතු කල යුතුවේ.</li>
        <li>වැඩමුළුවට සහභාගී වීම සඳහා දේශන ශාලාවට ඇතුළු වන අවස්ථාවේ දී ජංගම දුරකථන නිහඬ කිරීමට හෝ ක්‍රියා විරහිත කිරීම සහභාගීවන අනෙකුත් නිලධාරීන්ට පහසුවක් වනු ඇත.</li>
        <li>වැඩමුළුවට පෙර දින රාත්‍රී නවාතැන් ගැනීමට පැමිණෙන්නේ නම්, පසුපිටේ සඳහන් ඇමුණුම සම්පූර්ණ කර <?php echo $unit_name;?>යේ නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ වෙත ‍නොපමාව යොමු කිරීමට කටයුතු කරන්න. (ෆැක්ස්/ දුරකථන අංක : 081-2388042)</li>
        <li>පුහුණු වැඩසටහන සඳහා සහභාගීවන  ඔබ වෙනුවෙන් ආහාර පාන හා නවාතැන් පහසුකම්  සපයනු ලැබේ. 
(රාත්‍රී නවාතැන් පහසුකම් ලබාගන්නා අයට පමණක් උදෑසන ආහාර සපයනු ලැබේ) 
</li>
    </ol>
    </p>
    <p>04.	පුහුණු වැඩසටහන සංවිධානය කිරීම සඳහා දෙපාර්තමේන්තුව විසින් විශාල වැය බරක් දරනු ලබන හෙයින් ඒ සඳහා අයදුම්පත්‍ර ඉදිරිපත් කර කැඳවීම් ලිපියක් ලැබීමෙන් පසු පුහුණු වැඩසටහන සඳහා සහභාගී නොවුණහොත් එක් පුද්ගලයෙකු සඳහා වැය කරනු ලබන මුදල ඔබගේ වැටුපෙන් අය කිරීමට කටයුතු කරන බව වැඩිදුරටත් කාරුණිකව දන්වමි. </p>
    <p>05.	මෙම වැඩසටහන තුලින් ලබා ගන්නා දැනුම ඉදිරියේ දී වඩාත් කාර්යක්ෂමව හා ඵලදායීව රාජකාරී කටයුතු ඉටුකිරීම සඳහා ඉවහල් කරගනු ඇතැයි අපේක්ෂා කරමි. එමෙන්ම, පුහුණුව තුලින් ලබා ගන්නා දැනුම ආයතනයේ අනෙකුත් කාර්ය මණ්ඩලයට ද ලබා දීමට අවස්ථාව සලසා ගන්නා ලෙස වැඩිදුරටත් කාරුණිකව දන්වමි.</p>
    <p> <ul style="list-style: none;" align="right">
        <li>ආර්. තිලගේෂ්වරී </li>
            <li>සහකාර අධ්‍යක්ෂ (ආයතන II)</li>
            <li>කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් වෙනුවට</li>
        </ul></p>
        <p>පිටපත් :
        <ol><li> 
		 <?php
            echo $unit_name;"<br/>";
			?>
		</li>
	
            <li> 
           <?php echo $uname. "<br/>";?>
            </li>

            <li> ශාඛා ප්‍රධානී, පාලන 12                          	 -      කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල්ගේ පෞද්ගලික   
                අවධානයට යොමුකිරීම සඳහා </li>
</p>
           <?php
                }
            }            
        ?>
    <div id="divpanel" align="center">
<input type="button" value="Print" onClick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Close" onClick="window.close();" style="width: 80px; height: 30px" />
</div>
</body>
</html>