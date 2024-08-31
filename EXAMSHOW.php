<?php include 'header.php'; 
 session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
<!--        <link href="stylesheet.css" rel="stylesheet">-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <title> </title>
        <!--        stylesheet start-->
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rubik&display=swap");
            
            body{
                padding: 0;
                margin: 0;
                width: 100%;
                height: 100vh;
                font-family: sans-serif;
                
            }
            .back{
                background: #55a;
                width: 100%;
                height: 100%;
                clip-path: polygon(0 0, 100% 0%,100% 40%, 0 100%);
                position: absolute;
                top: 0;
                left: 0;
            }
            main{
                margin-top: 60px;
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
            main1{
                display: flex;
                flex-direction: row;
                justify-content: center;
                
            }
            .box{
                width: 300px;
                height: 420px;
                background-color:#fff;
                position: relative;
                left:50px;
                top: 10px;
                z-index: 1;
                box-shadow: 18px 16px 46px -8px rgba(21,21,21,0.65);
                border-radius: 5px;
                transition: 1s;
/*                margin: 20px;*/
            }
            .box1{
                width: 300px;
                height: 430px;
                background-color:#fff;
/*                position: realtive;*/
                left:50px;
                top: 20px;
                z-index: 1;
                box-shadow: 18px 16px 46px -8px rgba(21,21,21,0.65);
                border-radius: 5px;
                transition: 1s;
                margin: 20px;
            }
            .box:hover{
               
                transform: scale(1.2);
            }
            .box1:hover{
               
                transform: scale(1.2);
            }
            .box hr{
                border: 4px solid rgb(0,255,106);
    
             }
             .box1 hr{
                border: 4px solid rgb(0,255,106);
    
             }
            .box:nth-child(2){
                margin: 0 20px;
            }
            .box:nth-child(3){
                margin: 0 20px;
            }
            .box1:nth-child(2) hr{
                border: 4px solid rgb(0,0,255);
            }
            .box:nth-child(2) hr{
                border: 4px solid rgb(0,0,255);
            }
            .box:nth-child(3) hr{
                border: 4px solid rgb(255,0,0);
            }
            .box1:nth-child(2) hr{
                border: 4px solid rgb(0,0,255);
            }
            .box1:nth-child(3) hr{
                border: 4px solid rgb(255,0,0);
            }
            .content{
                padding: 0 30px;
                text-align: center;
            }
            .content i{
                font-size: 60px;
                margin-top: 30px;
                color: rgb(49,49,49);
            }
            .content h2{
                font-size: 20px;
                margin-top: 20px;
                text-transform: uppercase;
                color: rgb(73,73,73)
            }
            .text{
                margin-top: 30px;
            }
            h5{
                 font-size: 10px;
            }
            .content h5{
               
                color: #999;
                font-weight: lighter;
                letter-spacing: 2px;
            }
            .content h5 span{
                color: rgb(73,73,73);
                font-weight: 600;
        
            }
            .content button{
                text-transform: uppercase;
                border: none;
                padding: 10px 35px;
                border-radius: 50px;
                background-color: #55a;
                color: #fff;
                cursor: pointer;
                margin-top: 30px;
   
            }
            @media screen and ( max-width:1024px){
                main{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    margin-left: 120px;
        
                }
                .box:nth-child(2){
                    margin: 80px 0;
                }
                .box:nth-child(3){
                    margin-bottom: 60px;
                }
                .box:nth-child(3){
                    margin: 80px ;
                }
                main1{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    margin-left: 120px;
        
                }
                .box1:nth-child(2){
                    margin: 80px 0;
                }
                .box1:nth-child(3){
                    margin-bottom: 60px;
                }
                .box1:nth-child(3){
                    margin: 80px ;
                }
                
                
            }
    
        </style>
        
<!--        stylesheet end-->
    </head>
    <body>
        
        
        <div class="back">
        </div>
        
        <main>
<div class="row mt-4">
<?php
include 'db.php';
$query = "SELECT * FROM online_exam_table where exam_type='MCQ'";
$rdata = mysqli_query($con, $query);
while($rresult = mysqli_fetch_assoc($rdata)){
?>
        
            <div class="col-md-4">

            <div class="box">
                <hr>
                <div class="content">
                    <i class="fas fa-pen-fancy"></i>
                     
                     <h2><?php echo $rresult['exam_title']; ?></h2>
                     <h5> <span><b>Intermediate</b></span></h5>
                     <div class="text">
                         <h5> <span> Time: <?php echo $rresult['exam_duration']; ?></span></h5>
                         <h5> <span>Qestions <?php echo $rresult['total_question']; ?></span></h5>
                         <h5> <span>Marks Per Right Answer <?php echo $rresult['marks_per_right_answer']; ?></span></h5>
                        <h5> <span>Marks Per Wrong Answer <?php echo $rresult['marks_per_wrong_answer']; ?></span></h5>
                         <h5> <span><b>Type</b>: MCQ</span></h5>
                     </div>
                     <button><?php if(!isset($_SESSION['email'])){ ?><a style=" text-decoration: none; color: #fff;" <?php echo "href='index.php'"?>> Go To Exam</a><?php }else{ ?><a style=" text-decoration: none; color: #fff;" <?php echo "href='EXAM.php?e_id=$rresult[exam_id]&e_duration=$rresult[exam_duration]&e_title=$rresult[exam_title]&marks=$rresult[marks_per_right_answer]&wmarks=$rresult[marks_per_wrong_answer]'"?>> Go To Exam</a><?php } ?></button>
                </div>
            </div>
                
            </div>
            <?php        
}
?>
        </div>
        </main>
        <main1>    
<div class="row mt-4">
<?php
include 'db.php';
$query = "SELECT * FROM online_exam_table where exam_type='Subjective'";
$rdata = mysqli_query($con, $query);
while($rresult = mysqli_fetch_assoc($rdata)){
?>

            <div class="col-md-4">

        <div class="box1">
            <hr>
            <div class="content">
                <i class="fas fa-pencil-ruler"></i>
                <h2><?php echo $rresult['exam_title']; ?></h2>
                <h5> <span><b> Medium</b></span></h5>
                <div class="text">
                    <h5> <span> Time: <?php echo $rresult['exam_duration']; ?></span></h5>
                    <h5> <span>Questions <?php echo $rresult['total_question']; ?></span></h5>
                   <h5> <span>Marks Per Right Answer <?php echo $rresult['marks_per_right_answer']; ?></span></h5>
                        <h5> <span>Marks Per Wrong Answer <?php echo $rresult['marks_per_wrong_answer']; ?></span></h5>
                    <h5> <span><b>Type</b>: Subjective</span></h5>
                </div>
                <button><?php if(!isset($_SESSION['email'])){ ?><a style=" text-decoration: none; color: #fff;" <?php echo "href='index.php'"?>> Go To Exam</a><?php }else{ ?><a style=" text-decoration: none; color: #fff;"<?php echo "href='EXAM_SUB.php?e_id=$rresult[exam_id]&e_duration=$rresult[exam_duration]&e_title=$rresult[exam_title]&marks=$rresult[marks_per_right_answer]&wmarks=$rresult[marks_per_wrong_answer]'"?>> Go To Exam</a><?php }?></button>
            </div>
        </div>
                
            </div>
            <?php        
}
?>
    
        </div>
    </main1>    
    </body>
</html>

