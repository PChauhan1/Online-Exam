<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <script type="text/javascript" src="inc/TimeCircles.js"></script>
        <link rel="stylesheet" href="inc/TimeCircles.css" />
  </head>
  <body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="container" style="margin-top: 50px; ">
    <div class="card">
        <div class="card-body">
            <h3 style="text-align: left;"><?php echo $_GET['e_title'] ?> EXAM</h3>
        </div>
    </div>
    <div style="margin-top: 25px; margin-left: 10px;  width: 60%; float: left;">
<?php
$E_id=$_GET['e_id'];
$wmarks=$_GET['wmarks'];
$E_title=$_GET['e_title'];
$E_marks=$_GET['marks'];
$E_duration=$_GET['e_duration'];
$time = 60*$E_duration;
session_start();
$_SESSION['exam_id'] = $E_id;
$_SESSION['wmarks'] = $wmarks;
$_SESSION['exam_title'] = $E_title;
$_SESSION['exam_marks'] = $E_marks;
$email = $_SESSION['email'];
include 'db.php';
$n=3;
$query = "SELECT * FROM question_table where exam_id='$E_id'";
$rdata = mysqli_query($con, $query);
while($rresult = mysqli_fetch_assoc($rdata)){
?>
        <form method="post" enctype="multipart/form-data">
        <table style="margin: 25px;">
            
            <tr><td><h2><?php echo "Q".$rresult['question_no'];?></h2></td><td><h2><?php echo $rresult['question_title']; ?></h2></td></tr>     
<?php
}
?>
            <tr><td></td><td><input type="file" name="file" id="file"></td></tr><br>
            <tr><td></td><td></td><td><button class="btn btn-success" type="submit" name="esubmit">submit</button></td></tr>
        </table>
            </form>
   </div>
    <?php 
include 'db.php';
error_reporting(0);
    if(isset($_POST['esubmit'])){
    $fn = $_FILES['file']['name'];
    $tm = $_FILES['file']['tmp_name'];
    move_uploaded_file($tm, "ans_file/".$fn);
    $ins = "INSERT INTO `file_check` (`exam_id`, `exam_title`, `email`, `FILE`) "
            . "VALUES ('$E_id', '$E_title', '$email', '$fn')";
    $iq = mysqli_query($con,$ins);
            if($iq){
                $query = "SELECT * FROM online_exam_table where exam_type='subjective' and exam_id='$E_id'";
$edata = mysqli_query($con, $query);
$eresult = mysqli_fetch_assoc($edata);
$total_q = $eresult['total_question'];
$total_m =$total_q*$E_marks;

$qq = "SELECT * FROM `users` where email='$email'";
        $data = mysqli_query($con, $qq);
        $uresult = mysqli_fetch_assoc($data);
                $name = $uresult['fname']." ".$uresult['lname'];
$finalresult = "INSERT INTO `result` (`exam_id`, `name`, `email`, `exam_type`, `exam_title` ,`marks`, `total marks`, `date`)"
        . " VALUES('$E_id', '$name', '$email', 'subjective', '$E_title', 'announced soon', '$total_m',current_timestamp())";                
$check = mysqli_query($con, $finalresult);
if ($check) {
    ?><script> 
        alert("exam submited");
        window.location.replace("http://localhost/ONLINE_EXAM2/home.php");
            </script><?php
            }
    }
    }
    ?>
    <div style="width: 30%; float: left;">
        <h2>TIME LEFT</h2>
            <div id="CountDownTimer" data-timer="<?php echo $time; ?>" style="width: 400px; height:  120px;"></div>
    </div>
    <script>
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            setInterval(function(){
                var remaining_second = $('#CountDownTimer').TimeCircles().getTime();
                if(remaining_second < 1){
                    alert('exam time out');
                }
            },1000);
            </script>
</div>
  </body>
</html>