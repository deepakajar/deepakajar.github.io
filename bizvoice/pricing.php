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

        body {
            background-color: black;
        }

        .shadow__btn {
            padding: 10px 20px;
            border: none;
            font-size: 17px;
            color: #fff;
            width: fit-content;
            border-radius: 7px;
            letter-spacing: 4px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.5s;
            transition-property: box-shadow;


        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: white;
            font-family: "Times New Roman", Times, serif;
        }

        h3 a {
            color: white;
            font-family: "Times New Roman", Times, serif;
        }

        .shadow__btn {
            background: rgb(255, 69, 0);
            box-shadow: 0 0 25px rgb(255, 69, 0);
            margin-top: 5%;
            margin-left: 30%;
            margin-top: 70px;margin-left:42%;
        }

        .shadow__btn:hover {
            box-shadow: 0 0 5px rgb(255, 69, 0),
                0 0 25px rgb(255, 69, 0),
                0 0 50px rgb(255, 69, 0),
                0 0 100px rgb(255, 69, 0);
        }
        #h13{
            margin-left:32%;
        }
        #h11{
            width: 50%;
            margin-left:25%;
        }
        #h32{
            width: 50%;
            margin-left:27%;
        }
        @media only screen and (max-width: 570px) {
  .row{
    display: block;
    width: 100%;

  }
  .col-4{
            width: 100%;
           margin-top: 5%;
        }
  
        .col-7{
            width: 100%;
        }
       
        .container{
        
        margin: 0;
        padding: -2px;
        padding-right: 3px;
     
     }
    
        #h12{
           margin-left: 34%;
        }
        #h13{
            margin-left:5%;
        }
        #h11 {
    width: 76%;
    margin-left: 15%;
}
#h32
{
    width: 67%;
    margin-left: 20%;
    
}
}
    </style>
</head>

<body style="background-color:black">
    <div class="container" style="margin-left:5%;">
        <div class="row">
            <button class="shadow__btn" id="h12" >
                Pricing
            </button>
        </div>
        <br>
        <div class="row">
            <h3 id="h11" >We offer affordable price for website creation</h3>
            <h3 id="h32" ><a href="tel:+918610525424">For More Info, Contact Me: 8610525424</a></h3>
        </div>
        <div class="row">
            <button class="shadow__btn" id="h13" >
                Frequently Asked Question
            </button>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">How can i invest your startup?</div>
                    <div class="card-body">Be thoughtful, write clearly and concisely, and consider adding written as well as visual examples. Go over what you’ve written to make sure that if it was the first time you were visiting the site, you’d understand your answer.</div>
                    
                </div>

            </div>
            <div class="col-4">
            <div class="card">
                    <div class="card-header">Do you have intern position?</div>
                    <div class="card-body">Be thoughtful, write clearly and concisely, and consider adding written as well as visual examples. Go over what you’ve written to make sure that if it was the first time you were visiting the site, you’d understand your answer.</div>
                    
                </div>
            </div>
            <div class="col-4">
            <div class="card">
    <div class="card-header">How can i request a demo?</div>
    <div class="card-body">Be thoughtful, write clearly and concisely, and consider adding written as well as visual examples. Go over what you’ve written to make sure that if it was the first time you were visiting the site, you’d understand your answer.</div> 
    
  </div>
            </div>
        </div>



    </div>

</body>

</html>
<?php
include('footer.php');
?>
    <?php include('float.php'); ?>