<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<!--        <link rel="stylesheet" href="stylesheet.css">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <title> Footer</title>
<!--        stylesheet start-->
        <style>
            body{
/*                min-height: cal(100vh-100px);*/
            }
            
            footer{
             position: absolute;
                top: 100%;
                background-color: black;
                color: white;
                margin-top: 10%;
                padding: 2rem;
                left: 0;
                right:0; 
                    
               
                
                
                
/*               position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                
                background-color: black;
                margin-top: auto;
                padding: 3rem;
                color: white;
                
                height: auto;
                width: 100vw;
                font-family: "open sans";
                padding-top: 40px;
                color: white;*/
                
               
                
            }
            .footer-content{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .footer-content h3{
                font-size: 1.8rem;
                font-weight: 400;
                text-transform: capitalize;
                line-height: 2rem;
                
            }
            .social{
               
                list-style: none;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 ;
            }
           .social li{
                margin: 0 15px;
                
            }
           .social a{
               text-decoration: none;
               color: white;
              
                
            }
            .social a li{
                font-size: 1.1rem;
                transition: color .4s ease;
                
            }
            .social a:hover {
                color: aqua;
                
            }
            .footer-button{
                background: black;
                width: 100vw;
                padding: 20px 0;
                text-align: center;
            }
             .footer-button p{
                font-size: 14px;
                word-spacing: 2px;
                text-transform: capitalize;
            }
            .admin a{
                background-color: black;
                text-transform: uppercase;
                opacity: .4;
                font-weight: 200;
                color: white;
                text-decoration: none;
                
                
            }
            .footer-button a:hover{
                color: aqua;
            }
            
        
        </style>
<!--        stylesheet end-->
    </head>
    <body>
        
        <footer>
            <div class="footer-content">
                <h3> Exampedia</h3>
                <ul class="social">
                    <li><a href="about_us.php">About us</a> </li>
                    <li><a href="feedback.php">Feedback</a> </li>
                        <li><a href="#">Contact us</a> </li>
                </ul>
                
                <p> Copyright &copy;2021 exampedia.designed by <button type="submit" class="btn btn-success"><a style=" text-decoration: none; color: #fff;" href="admin/admin_login.php" class="admin">Admin</a></button></p>
               
            </div>
<!--            <div class="footer-button">-->
                
<!--            </div>-->
        </footer>
        
    </body>
</html>
