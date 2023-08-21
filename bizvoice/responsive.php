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
        
        html {
  scroll-behavior: smooth;
}
        body {
            background-color: black;
         
         
        }
        h3{
            color: white;
            font-family: "Times New Roman", Times, serif;   
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

        .img1 {
            width: 100%;
            height: 90%;
        }

        .img2 {
            width: 100%;
            height: 70%;
        }
        .img3 {
            width: 100%;
            height: 80%;
        }
        .container{
            margin: 0;
        }

        @media only screen and (max-width: 820px) {
            .container{
            margin: 0;
            padding: 0;
        } 
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
        .container{
        
        margin: 0;
        padding: -2px;
        padding-right: 3px;
     
     }
        
}
    </style>
</head>

<body style="background-color:black">
    

    <div class="container" style="margin-left: 5%;" >
        <button class="shadow__btn" id="h12" style="margin-left:36%;margin-top:120px;">
            Responsive Web Design
        </button>
        <div class="row" style="margin-top:3%;">
            <div class="col-7" style="font-size:23px;">

            <h3>Welcome to our responsive web design service! In today's digital age, it's crucial for businesses to have websites that adapt seamlessly to different devices and screen sizes. At Bizvoice Technologies Solutions, we specialize in creating visually stunning and user-friendly websites that provide an optimal browsing experience across desktops, tablets, and smartphones.Your website should deliver a consistent experience across various web browsers.</h3>
        </div>
        <div class="col-5">
                <img src="responsive.png" alt="" class="img1">

            </div>
        </div>
        <button class="shadow__btn" id="h13 " style="margin-left:9%;">
            We deliver top-class web design and application development solutions
        </button>
        <div class="row" style="margin-top:3%;">
            <div class="col-5">
                <img src="res2.png" alt="" class="img2">

            </div>
            <div class="col-7" style="font-size:23px;">
               <h3> Welcome to our premier web design and application development solutions! At Bizvoice Technologies Solutions, we pride ourselves on delivering top-class services that empower businesses to succeed in the digital landscape. Our experienced team of designers and developers are committed to creating stunning, user-friendly websites and robust applications that align with your unique goals and requirements.</h3>
            </div>


        </div>
        <button class="shadow__btn" id="h13" style="margin-left:35%;">
        Adaptive Web Design
        </button>
        <div class="row" style="margin-top:3%;">
            
            <div class="col-7" style="font-size:23px;">
               <h3> Adaptive web design refers to a web design approach that aims to create a consistent user experience across various devices and screen sizes. In the case of a static website, the content typically remains the same regardless of the device being used to access it. However, the design and layout of the website can adapt to provide an optimal viewing experience on different devices, such as desktop computers, tablets, and mobile phones.</h3>
            </div>
            <div class="col-5">
                <img src="awd.png" alt="" class="img2">

            </div>


        </div>
        <button class="shadow__btn" id="h13" style="margin-left:35%;margin-top:30px;">
        qualities of a great website
        </button>
        <div class="row" style="margin-top:3%;">
        <div class="col-5">
                <img src="elements.png" alt="" class="img3">

            </div>
            
            <div class="col-7" style="font-size:23px;">
               <h3 style="margin-top:30px;"> A great website is intuitive and easy to navigate. Users should be able to find information quickly and effortlessly.It utilizes a visually pleasing color scheme, high-quality images, and well-organized layouts to create a visually engaging experience.sharing buttons, social media profile links, and embedding social media feeds to encourage user interaction and sharing of content.</h3>
            </div>
            


        </div>
    </div>

    <?php include('float.php'); ?>
</body>

</html>
<?php
include('footer.php');
?>