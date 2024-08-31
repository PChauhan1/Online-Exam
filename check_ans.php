<?php
include 'db.php';
session_start();
$E_id = $_SESSION['exam_id'];
$E_title = $_SESSION['exam_title'];
$email = $_SESSION['email'];
$wmarks = $_SESSION['wmarks'];
$E_marks = $_SESSION['exam_marks'];

error_reporting(0);
$n=0;
$m=0;
$i=1;
$count=0;
if(isset($_POST['esubmit']))
{
    if(!empty($_POST['check'])){
        $count = count($_POST['check']);
        $selected = $_POST['check'];
        $q = "SELECT * FROM `question_table` where exam_id='$E_id'";
        $cdata = mysqli_query($con, $q);
        while($cresult = mysqli_fetch_assoc($cdata))
        {
            $checked = $cresult['answer'] == $selected[$i];
            if($checked)
            {
                $n=$n+$E_marks;
        }else{
            $n=$n-$wmarks;
        }
        $i++;
    }
}
}
$query = "SELECT * FROM online_exam_table where exam_type='MCQ' and exam_id='$E_id'";
$rdata = mysqli_query($con, $query);
$rresult = mysqli_fetch_assoc($rdata);
$total_q = $rresult['total_question'];
$total_m =($total_q)*($E_marks);

$qq = "SELECT * FROM `users` where email='$email'";
        $data = mysqli_query($con, $qq);
        $uresult = mysqli_fetch_assoc($data);
                $name = $uresult['fname']." ".$uresult['lname'];
$finalresult = "INSERT INTO `result` (`exam_id`, `name`,`email` , `exam_title`,`exam_type` ,`marks`, `total marks`, `date`)"
        . " VALUES('$E_id', '$name', '$email', '$E_title', 'MCQ', '$n', '$total_m' ,current_timestamp())";                
$check = mysqli_query($con, $finalresult);
if ($check) {
    ?><script> 
        alert("exam submited");
        window.location.replace("http://localhost/ONLINE_EXAM2/home.php");
            </script><?php
}
?>
