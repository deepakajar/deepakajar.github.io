<?php
include 'h.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        h3{
            color: white;
            font-family: "Times New Roman", Times, serif;   
        }
        body{
            background-color: black;
            color: white;
          
        }
        .shadow__btn {
  padding: 10px 20px;
  border: none;
  font-size: 17px;
  color: #fff;
  border-radius: 7px;
  letter-spacing: 4px;
  font-weight: 700;
  text-transform: uppercase;
  transition: 0.5s;
  transition-property: box-shadow;
}

.shadow__btn {
  background: rgb(255, 69, 0);
  box-shadow: 0 0 25px rgb(255, 69, 0);
  margin-top: 5%;
  margin-left: 30%;
}

.shadow__btn:hover {
  box-shadow: 0 0 5px rgb(255, 69, 0),
              0 0 25px rgb(255, 69, 0),
              0 0 50px rgb(255, 69, 0),
              0 0 100px rgb(255, 69, 0);
}
.img1{
    width: 100%;
    height: 90%;
}
@media only screen and (max-width: 770px) {
  .row{
    display: block;

  }
  .col-5{
            width: 100%;
        }
  .img1 {
            width: 100%;
            height: 100%;
        }
        .col-7{
            width: 100%;
        }
        #h12{
            margin-right: 70%;
            
        }
        #h13{
            margin-right: 50%;
        }
        hh
        
}
    </style>
</head>

<body style="background-color:black">
    
<div class="container">
<button class="shadow__btn" id="h12" style="margin-top:120px;">
Ecommerce website Development
</button>
    <div class="row" style="margin-top:3%;">
        <div class="col-7" >
        <h3>
        Welcome to our ecommerce website development service! We specialize in creating robust, user-friendly, and visually appealing online stores that help businesses thrive in the digital marketplace. Ready to take your business online and start selling? Contact us today to discuss your ecommerce website development project. Our team of experts is excited to collaborate with you and create an online store that elevates your brand and drives your business forward.</h3>
        </div>
        <div class="col-5">
            <img src="r1.png" alt="" class="img1">

        </div>
    </div>
    <button class="shadow__btn" id="h12" style="margin-left:26%;">
    DESIGNING AN EFFECTIVE E-COMMERCE WEBSITE
</button>
    <div class="row" style="margin-top:3%;">
    <div class="col-5">
            <img src="devecom.png" alt="" class="img1">

        </div>
        <div class="col-7" >
            <h3>
        We understand the importance of a unique brand identity. Our team of skilled designers will create a visually stunning website that aligns with your brand's aesthetics.With the increasing number of users accessing the internet through mobile devices, it's crucial to have a website that adapts to different screen sizes. Our ecommerce websites are fully responsive, ensuring a consistent and enjoyable shopping experience across desktops, tablets, and smartphones.</h3>
        </div>
        
    </div>
</div>
<?php include('float.php'); ?>

</body>
</html>
<?php
include('footer.php');
?>