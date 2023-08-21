<?php
include('h.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    h3{
        font-size: 20px;
        margin: 20px;
        color: white;
    }
    h1{
      font-size: 30px;
      margin: 20px;
      text-align: center;
      color: orangered;


    }
    .img1{
      height: 90%;
      width: 100%;
      
    }
    #txto{
      margin-top:5%;
    }
    @media only screen and (max-width: 680px) {
      .row{
        display: block;
      }
      .col-5{
        width: 100%;
      }
      .col-7{
        width: 100%;
      }
    }
  </style>
</head>
<body style="background-color: black;">
    <div class="row" id="txto">
        <div class="col-7"  style="font-size:23px;" >
        <h1>Let’s build something great</h1>

        <h3>Welcome to our responsive web design service! In today's digital age, it's crucial for businesses to have websites that adapt seamlessly to different devices and screen sizes. At Bizvoice Technologies Solutions, we specialize in creating visually stunning and user-friendly websites that provide an optimal browsing experience across desktops, tablets, and smartphones.</h3>
    </div>
    <div class="col-5">
            <img src="blog1.png" alt="" class="img1">


        </div>
        </div>

<div class="row" id="txto">
  <div class="col-7"  style="font-size:23px;" >
    <img src="blog2.png" alt="" class="img1">

</div>
<div class="col-5">
  <h1>Designing Features</h1>

  <h3> Design features could include typography, colors, images, icons, spacing, and other elements that enhance the overall user experience. For example, when creating a website or a presentation, designers carefully choose the layout and visual elements to make the content more engaging and understandable.</h3>

  </div>
        </div>


</body>
</html>
<?php
include('footer.php');
?> 
    <?php include('float.php'); ?>