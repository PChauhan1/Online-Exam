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
include 'db.php';
$n=3;
$query = "SELECT * FROM question_table where exam_id='$E_id'";
$rdata = mysqli_query($con, $query);
while($rresult = mysqli_fetch_assoc($rdata)){
?>
        <form method="post" action="check_ans.php">
        <table style="margin: 25px;">
            
            <tr><td><h2><?php echo "Q".$rresult['question_no'];?></h2></td><td><h2><?php echo $rresult['question_title']; ?></h2></td></tr>
        <?php 
        $q = "SELECT * FROM option_table where exam_id='$E_id' AND question_no='$rresult[question_no]'";
        $data = mysqli_query($con, $q);
        while($result = mysqli_fetch_assoc($data)){
            ?><tr><td></td><td><h4><input type="radio" id="" name="check[<?php echo $result['question_no'];?>]" value="<?php echo $result['option_title'];?>"><?php echo " ".$result['option_title'];?></h4></td></tr>
        <?php }
        ?>
            
<?php        
}
?>
            <tr><td></td><td></td><td><button class="btn btn-success" type="submit" name="esubmit">submit</button></td></tr>
            
        </table>
            </form>
   </div>
    <?php 
error_reporting(0);
    if(isset($_POST['esubmit'])){
        ?>
    <script>
    alert("submited ");
    
  </script>
            <?php
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
