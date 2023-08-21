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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        html {
            scroll-behavior: smooth;
        }

        body{
            background-color: black;
        }

        .bch {
            width: 100%;
            height: 70vh;
        }

        .bsccolor {
            font-size: 190%;
            animation: neon 1s ease infinite;
            position: absolute;
            top: 18%;
            left: 6%;
        }

        @keyframes neon {

            0%,
            50% {
                text-shadow: 0 0 10px orangered, 0 0 20px orangered, 0 0 20px orangered, 0 0 20px orangered, 0 0 2px #fed128, 2px 2px 2px #806914;
                color: #f5efcb;
            }

            25% {
                text-shadow: 0 0 2px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 2px black, 4px 4px 2px #40340a;
                color: orangered;
            }
        }

        .bsccolor2 {

            position: absolute;
            top: 28%;
            left: 6%;
            color: whitesmoke;
        }

        .qc {
            position: absolute;
            top: 48%;
            left: 6%;
            color: whitesmoke;
        }

        .social-icons a i {

            font-size: 190%;
            color: whitesmoke;
            margin-right: 10px;
            transition: 1s ease;

        }

        .social-icons a:hover i {
            transform: scale(1.2);
            color: orangered;
        }

        #sicons {
            position: absolute;
            top: 57%;
            left: 6%;
        }
        .cl{
            margin-left: 6%;
            font-family: 'boxicons';
            color: orangered;
        }
        .serv{
            margin-left: 6%;
            margin-top: 2%;
            font-family: 'boxicons';
            color: orangered;
        }
        .mak{
            margin-left: 6%;
            font-family: 'boxicons';
            color: whitesmoke;
        }
        .par{
            margin-left: 6%;
            margin-top: 2%;
            font-family: 'boxicons';
            color: whitesmoke;
            font-size: 190%;
            
        }
        @media only screen and (max-width: 820px) {
            
        }
    </style>

</head>

<body>
    <div class="container-fluid" style="background-color:black;padding-bottom: 2%;">
        <div class="homehead">
            <img src="backg.webp" class="bch" alt="">
        </div>
        <div class="row">
            <h2 class="bsccolor">BEST SOFTWARE SOLUTION</h2>
        </div>
        <div class="row">
            <h2 class="bsccolor2">Lets Grow Your Business Together With Bizvoice</h2>
        </div>

        <div class="row">
            <h3 class="qc">QUICK CALLS</h3>
        </div>
        <div class="row">
            <div class="social-icons" id="sicons">
                <a href="https://api.whatsapp.com/send?phone=918610525424"><i class="fa fa-whatsapp"></i></a> &nbsp; &nbsp; &nbsp;
                <a href="https://www.facebook.com/profile.php?id=100073117354868"><i class="fa fa-instagram"></i></a>&nbsp; &nbsp; &nbsp;
                <a href="https://www.facebook.com/profile.php?id=100073117354868"><i class="fa fa-facebook"></i></a>&nbsp; &nbsp; &nbsp;
                <a href="https://twitter.com/_Bizvoice"><i class="fa fa-twitter"></i></a>&nbsp; &nbsp; &nbsp;
                <a href="mailto:bizvoice.india@gmail.com"><i class="fa fa-envelope"></i></a>&nbsp; &nbsp; &nbsp;
                <a href="tel:8610525424"><i class="fa fa-phone"></i></a>


            </div>
        </div>


    </div>
    <div class="container-fluid" style="background-color:white;padding-bottom:5%;">
        <div class="row">
        <h2 class="cl">OUR CLIENTS</h2>
        </div>
        <br>
        <div class="row">
            <marquee onmouseover="this.stop();" onmouseleave="this.start();" on  onmousedown="this.stop();"
           onmouseup="this.start();" behavior="scroll" width="100%" direction="left" height="60%" scrollamount="15">
                <img src="client/sree.png" height="200px">
                &nbsp;&nbsp;
                <img src="client/sunpo.png" height="150px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="client/john.png" height="150px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="client/pmg.png" height="210px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="client/quin.jpg" height="150px">
                <img src="client/truck.png" height="100px" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <img src="client/smc.png" height="210px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="client/kana.png" width="320px" height="100px">
            </marquee>
        </div>
    </div>
    <div class="container-fluid" style="background-color:black;">
    <div class="row">
    <h2 class="serv">BIZVOICE SERVICES</h2>
        
    </div>
    <div class="row">
    <span class="mak">Make your website a level-up</span>
    </div>
    <div class="row">
        <div class="col-10">
        <p class="par">Giving customer,s the best software service within time with affordable price in India and Globally. We are mainly focus our service to clients. Unique service, easy approach, unlimited ideas.</p>
        </div>
    
    </div>
        

    </div>
    <?php include('float.php'); ?>
</body>

</html>
<?php
include('footer.php');
?>