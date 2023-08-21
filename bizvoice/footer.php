
<head>
  <title>Bootstrap 4 Footer with Social icons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
  footer {
    background: orangered;
    
    color: white;
    margin-top:10px;
  }
  
  footer a {
    color: #fff;
    font-size: 14px;
    transition-duration: 0.2s;
  }
  
  footer a:hover {
    color: black;
    text-decoration: none;
  }
  
  .copy {
    font-size: 12px;
    padding: 10px;
    border-top: 1px solid #FFFFFF;
  }
  
  .footer-middle {
    padding-top: 2em;
    color: white;
  }
  
  
  /*SOCİAL İCONS*/
  
  /* footer social icons */
  
  ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0;
  }
  
  ul.social-network li {
    display: inline;
    margin: 0 5px;
  }
  
  
  /* footer social icons */
  
  .social-network a.icoFacebook:hover {
    background-color: #3B5998;
  }
  
  .social-network a.icoLinkedin:hover {
    background-color: #007bb7;
  }
  
  .social-network a.icoFacebook:hover i,
  .social-network a.icoLinkedin:hover i {
    color: #fff;
  }
  
  .social-network a.socialIcon:hover,
  .socialHoverClass {
    color: #44BCDD;
  }
  
  .social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    text-align: center;
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
  
  .social-circle li i {
    margin: 0;
    line-height: 30px;
    text-align: center;
  }
  
  .social-circle li a:hover i,
  .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
  }
  
  .social-circle i {
    color: #595959;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
  }
  
  .social-network a {
    background-color: #F9F9F9;
  }
  ul li a{
    text-decoration: none;
  }
  
</style>

</head>


<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 ">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Reach us</h4>
          <ul class="list-unstyled">
            <li><a href="#">Chennai Office</a></li>
            <li><a href="#"><i class="fa fa-location-arrow mr-2"></i>No 41,Anna Salai ,Teynampet , Chennai-600018</a></li>
            <li><a href="https://www.google.com/maps/place/Bizvoice+Technologies+Solutions+pvt+Ltd/@12.9924604,80.1990154,19.17z/data=!4m6!3m5!1s0x3a5267f870d81e99:0x7b83c52e8af8a7cc!8m2!3d12.9924024!4d80.1990164!16s%2Fg%2F11sjrj6q_4?entry=ttu" target="_blank"><i class="fa fa-location-arrow mr-2"></i>No 48,Vallalar St, (Inside PMG Acadamy)Adambakkam , Chennai-600033
</a></li>
            <li><a href="https://www.google.com/maps/place/Bizvoice+Technologies+Solutions/@13.038434,80.2225225,17z/data=!3m1!4b1!4m6!3m5!1s0x3a5266fc47e80c83:0xc152b0a7a3abba17!8m2!3d13.0384288!4d80.2250974!16s%2Fg%2F11ll4zdfkm?entry=ttu" target="_blank"><i class="fa fa-location-arrow mr-2"></i>No 31,Second Floor, Lake View Road ,West Mambalam , Chennai-600033</a></li>
            <li><a href="#"><i class="fa fa-location-arrow mr-2"></i>Branches at:  <br>Pondicherry | Mayiladuthurai <br><i class="fa fa-location-arrow mr-2"></i>Other Countries: <br> USA | Mumbai | Delhi | Australia.</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-md-3 ">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Site links</h4>
          <ul class="list-unstyled" >
            <li ><a href="homecan.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="team.php">Team</a></li>
            
            
          </ul>
        </div>
      </div>
      <div class="col-md-3 ">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Quick links</h4>
          <ul class="list-unstyled">
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    	<div class="col-md-3">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
            <li><a href="https://www.facebook.com/profile.php?id=100073117354868" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="https://twitter.com/_Bizvoice" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
             <li><a href="mailto:bizvoice.india@gmail.com" class="icoWhatsapp" title="Mail"><i class="fa fa-envelope"></i></a></li>
             <li><a href="https://api.whatsapp.com/send?phone=918610525424" class="icoFacebook" title="Whatsapp"><i class="fa fa-whatsapp"></i></a></li>
             <li><a href="https://www.facebook.com/profile.php?id=100073117354868" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">© All Rights Reserved 2021 Bizvoice Technologies Solutions Private Limited</p>
		</div>
	</div>


  </div>
  </div>
</footer>
