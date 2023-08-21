<?php
include('h.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> 

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    html {
        scroll-behavior: smooth;
    }

    body {
        background-color: black;

    }
    

    h3 {
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
    #h12{
        margin-left:36%;
        
        margin-top:8%;
    }
    .shadow__btn:hover {
        box-shadow: 0 0 5px rgb(255, 69, 0),
            0 0 25px rgb(255, 69, 0),
            0 0 50px rgb(255, 69, 0),
            0 0 100px rgb(255, 69, 0);
    }
    .im1{
        width: 500px;
        height: 280px;
    }
    .im2{
        width: 500px;
        height: 280px;
    }
    .im3{
        width: 500px;
        height: 280px;
    }
    
    @media only screen and (max-width: 770px) {
        h3{
            font-size: 29px;
        }
       .row{
        width: 100%; 
  display: flex; 
  flex-wrap: wrap;
       }
        .col-7{
            width: 100%;
        }
        .im1{
            width: 100%;
            height: 300px;
        }
        #h12{
            margin-top: 15%;
            margin-left: 24%;
        }
    
    }
    @media only screen and (max-width: 400px) {
        h3{
            font-size: 19px;
        }
       .row{
        width: 100%; 
  display: block; 
  
       }
        .col-7{

            width: 100%;
        }
        .im1{
            width: 100%;
            height: 300px;
        }
        #h12{
            margin-top: 15%;
            margin-left: 24%;
        }
    
    }

</style>

</head>
<body style="background-color:black">
    <div class="container">

        <div class="row">
        <button class="shadow__btn" id="h12" >
            Responsive Web Design
        </button>
        </div>
        <br>
        <div class="row">
            <div class="col-7">
                <h3>A content management system (CMS) is a software application that allows users to create, manage, and publish digital content on the internet without requiring technical expertise in programming or web development. CMS platforms provide an intuitive and user-friendly interface that enables individuals and organizations to efficiently manage their website content.</h3>
            </div>
            <div class="col-5">
            <img src="cms.png" alt="" class="im1">
            </div>
        </div>
        <div class="row">
        <button class="shadow__btn" id="h12" style="margin-left:36%;">
            Media Management
        </button>
        </div>
        <br>
        <div class="row">
            <div class="col-7">
                <h3>
            Media management in a CMS refers to the functionality that allows users to upload, organize, and manage media files such as images, videos, audio files, and documents within the content management system. It provides a central repository for storing and accessing media assets, making it easier to use them in various parts of the website or content</h3>
            </div>
            <div class="col-5">
            <img src="cms2.png" alt="" class="im1">
            </div>
        </div>
        <div class="row">
        <button class="shadow__btn" id="h12" style="margin-left:36%;">
            Digital Strategy
        </button>
        </div>
        <br>
        <div class="row">
            <div class="col-7">
                <h3>
                Clearly define the website's mission and specific objectives. Identify and understand your target audience.Incorporate search engine optimization (SEO) into your digital strategy content.Consider the user experience when designing your website.Determine how you will integrate social media into your digital strategy.Research and analyze your competitors' websites and digital strategies. Identify areas where you can differentiate yourself and capitalize on opportunities in the market.
                </h3>
            </div>
            <div class="col-5">
            <img src="cms3.png" alt="" class="im1">
            </div>
        </div>

    </div>
</body>

</html>
<?php
include('footer.php');
?>
    <?php include('float.php'); ?>