<?php
  include("header.php");
  $currentPage = 'about_us';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="aboutUs_CSS.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" type="image/png" href="OnlineTestLogoIcon.png"/> -->
    <title>About Us</title>
  </head>
  <body style="background: #e9e9e9;">
    
  <!-- Removed navbar from here -->
  <!-- Removed logo from here -->

  <div class="aboutUsHeading" id="absHeading">
    <h1 style="font-size: 35px; text-shadow: 4px 2px rgba(0, 0, 0, 0.255);">About Us</h1>
  </div>
  <div class="banner" style="top: 0%; bottom: 0%; height: fit-content; position: fixed;">
  <!--SlideShow:-->
    <!--<div class="container py-3">-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/about_us_images/img12.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="text-shadow: 2px 2px rgba(0, 0, 0, 0.295);">First slide label</h5>
            <p style="text-shadow: 2px 2px rgba(0, 0, 0, 0.295);">Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/about_us_images/img45.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="text-shadow: 2px 2px rgba(0, 0, 0, 0.295);">Second slide label</h5>
            <p style="text-shadow: 2px 2px rgba(0, 0, 0, 0.295);">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item"> 
          <img src="https://source.unsplash.com/1600x600/?exam" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="text-shadow: 2px 2px rgba(0, 0, 0, 0.295);">Third slide label</h5>
            <p style="text-shadow: 2px 2px rgba(0, 0, 0, 0.295);">Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!--Our Team Section:-->
  <div class="ourTeam" id="ourTEAM">
  <h2 style="text-align:center; margin-top: 40px; margin-bottom: 40px; font-size: 50px;">Our Team</h2>
  <div class="row" style="width: 100%;">
    <div class="column" style="float: left; width: 28%; margin-left: 70px; margin-bottom: 16px; padding: 0 8px;">
      <div class="card" style="border-radius: 25px;">
        <img src="Images/about_us_images/Poornima.jpg" alt="Poornima Chauhan" style="width:100%; border-top-left-radius: 25px; border-top-right-radius: 25px;">
        <div class="container">
          <h2 style="margin-top: 20px; font-size: 27px;">Poornima Chauhan</h2>
          <p class="title">CEO & Founder</p>
          <p style="margin-bottom: -3%;">Created the webpages and contents of all pages of the Website with the help of HTML5.</p>
          <a href = "mailto: chauhan01.tanu@gmail.com" style="color: rgb(0, 99, 247); text-decoration: none; line-height: 70px;">chauhan01.tanu@gmail.com</a>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column" style="float: left; width: 28%; margin-left: 50px; margin-bottom: 16px; padding: 0 8px;">
      <div class="card" style="border-radius: 25px;">
        <img src="Images/about_us_images/Gagandeep1.JPG" alt="Gagandeep Singh" style="width:100%; border-top-left-radius: 25px; border-top-right-radius: 25px;">
        <div class="container">
          <h2 style="margin-top: 20px; font-size: 27px;">Gagandeep Singh</h2>
          <p class="title">Creative Designer</p>
          <p style="margin-bottom: -3%;">Designed and styled the webpages using CSS and many scripting languages.</p>
          <a href = "mailto: gaggi.148@gmail.com" style="color: rgb(0, 99, 247); text-decoration: none; line-height: 70px;">gaggi.148@gmail.com</a>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
    
    <div class="column" style="float: left; width: 28%; margin-left: 50px; margin-bottom: 16px; padding: 0 8px;">
      <div class="card" style="border-radius: 25px;">
        <img src="Images/about_us_images/Sanjeev.PNG" alt="Sanjeev Panwar" style="width:100%; border-top-left-radius: 25px; border-top-right-radius: 25px;">
        <div class="container">
          <h2 style="margin-top: 20px; font-size: 27px;">Sanjeev Panwar</h2>
          <p class="title">Database Handler</p>
          <p style="margin-bottom: -3%;">Made and handles the back-end database with the help of SQL on phpMyAdmin platform.</p>
          <a href = "mailto: sanjeevpanwar217@gmail.com" style="color: rgb(0, 99, 247); text-decoration: none; line-height: 70px;">sanjeevpanwar217@gmail.com</a>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
  // When the user scrolls down 530px from the top of the document, slide up the navbar
  function myFunction(x) {
    if (x.matches) {
      window.onscroll = function() {scrollFunction()};  
      function scrollFunction() {
        if (document.body.scrollTop > 480 || document.documentElement.scrollTop > 480) {
          document.getElementById("navbar").style.top = "-80px";
          document.getElementById("absHeading").style.top = "-80px";
          document.getElementById("logoWhite").style.top = "-80px";
        } else {
          document.getElementById("navbar").style.top = "3px";
          document.getElementById("absHeading").style.top = "14px";
          document.getElementById("logoWhite").style.top = "8px";
        }
      }
      // document.getElementById("ourTEAM").style.overflow = "scroll";
    } else {
      // document.getElementById("ourTEAM").style.overflow = "scroll";
      window.onscroll = function() {scrollFunction()};  
      function scrollFunction() {
        if (document.body.scrollTop > 530 || document.documentElement.scrollTop > 530) {
          document.getElementById("navbar").style.top = "-80px";
          document.getElementById("absHeading").style.top = "-80px";
          document.getElementById("logoWhite").style.top = "-80px";
        } else {
          document.getElementById("navbar").style.top = "3px";
          document.getElementById("absHeading").style.top = "14px";
          document.getElementById("logoWhite").style.top = "8px";
        }
        //   if (document.getElementById("ourTEAM").scrollTop > 552 || document.documentElement.scrollTop > 552) {
        //     // document.body.style.overflow = "scroll";
        //     document.getElementById("ourTEAM").style.overflow = "scroll";
        //   } else {
        //     // document.body.style.overflow = "scroll";
        //     document.getElementById("ourTEAM").style.overflow = "hidden";
        //   }
      }
    }
  }

  var x = window.matchMedia("(max-width: 1280px)")
  myFunction(x)
  x.addListener(myFunction)

  function myFunction(y) {
    if (y.matches) {
      window.onscroll = function() {scrollFunction()};  
      function scrollFunction() {
        if (document.body.scrollTop > 420 || document.documentElement.scrollTop > 420) {
          document.getElementById("navbar").style.top = "-80px";
          document.getElementById("absHeading").style.top = "-80px";
          document.getElementById("logoWhite").style.top = "-80px";
        } else {
          document.getElementById("navbar").style.top = "3px";
          document.getElementById("absHeading").style.top = "14px";
          document.getElementById("logoWhite").style.top = "8px";
        }
      }
    } else {
      window.onscroll = function() {scrollFunction()};  
      function scrollFunction() {
        if (document.body.scrollTop > 530 || document.documentElement.scrollTop > 530) {
          document.getElementById("navbar").style.top = "-80px";
          document.getElementById("absHeading").style.top = "-80px";
          document.getElementById("logoWhite").style.top = "-80px";
        } else {
          document.getElementById("navbar").style.top = "3px";
          document.getElementById("absHeading").style.top = "14px";
          document.getElementById("logoWhite").style.top = "8px";
        }
      }
    }
  }

  var y = window.matchMedia("(max-width: 1175px)")
  myFunction(y)
  y.addListener(myFunction)

  function myFunction(z) {
    if (z.matches) {
      window.onscroll = function() {scrollFunction()};  
      function scrollFunction() {
        if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
          document.getElementById("navbar").style.top = "-80px";
          document.getElementById("absHeading").style.top = "-80px";
          document.getElementById("logoWhite").style.top = "-80px";
        } else {
          document.getElementById("navbar").style.top = "3px";
          document.getElementById("absHeading").style.top = "14px";
          document.getElementById("logoWhite").style.top = "8px";
        }
      }
    } else {
      window.onscroll = function() {scrollFunction()};  
      function scrollFunction() {
        if (document.body.scrollTop > 530 || document.documentElement.scrollTop > 530) {
          document.getElementById("navbar").style.top = "-80px";
          document.getElementById("absHeading").style.top = "-80px";
          document.getElementById("logoWhite").style.top = "-80px";
        } else {
          document.getElementById("navbar").style.top = "3px";
          document.getElementById("absHeading").style.top = "14px";
          document.getElementById("logoWhite").style.top = "8px";
        }
      }
    }
  }

  var z = window.matchMedia("(max-width: 958px)")
  myFunction(z)
  z.addListener(myFunction)

  </script>

  </body>
</html>