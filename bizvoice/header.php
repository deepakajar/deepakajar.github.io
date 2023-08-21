<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

   

    .menubar {
      background: orangered;
      text-align: right;
    }

    .menubar ul {
      list-style: none;
      display: inline-flex;
      color: whitesmoke;
    }

    .menubar ul li a:hover {
      color: darkblue;
    }

    .menubar ul li {
      width: 120px;
      margin: 15px;
      padding: 10px;
    }

    .menubar ul li a {
      text-decoration: none;
      color: azure;
    }

    .menubar ul li:hover {
      background: transparent;
      border-radius: 3px;
    }

    .menu1 {
      display: none;
    }

    .menubar ul li:hover .menu1 {
      display: block;
      position: absolute;
      background: transparent;
      margin-top: 15px;
      margin-left: -15px;


    }

    .menubar ul li:hover .menu1 ul {
      display: block;
      margin: 5px;
    }

    .menubar ul li:hover .menu1 ul li {
      width: 130px;
      padding: 10px;
      border-bottom: 1px dotted orangered;
      background: transparent;
      border-radius: 0;
      text-align: left;
    }

    .menubar ul li:hover .menu1 ul li:last-child {
      border-bottom: none;
    }

    .menubar ul li:hover .menu1 ul li a:hover {
      color: orangered;
    }
  </style>
</head>

<body>
  <div class="menubar">
    <ul>
      <li><a href="home.html"><i class='fa fa-home'></i>HOME</a></li>
      <li><a href="about.html"><i class="fa fa-user"></i>ABOUT US</a></li>
      <li><a href="pages.html"><i class="fa fa-"></i>PAGES</a>
        <div class="menu1">
          <ul>
            <li><a href="portfolio.html">PORTFOLIO</a< /li>
            <li><a href="pricing.html">PRICING</a< /li>
          </ul>
        </div>
      </li>
      <li><a href="#"><i class="fa fa-clone"></i>SERVICES</a>
        <div class="menu1">
          <ul>
            <li><a href="design.html">WEB DESIGN</a></li>
            <li><a href="commerce.html">E COMMERCE</a></li>
            <li><a href="development.html">APPLICATION DEVELOPMENT</a></li>
            <li><a href="cms.html">CMS</a></li>
          </ul>
        </div>
      </li>
      <li><a href="blog.html"><i class="fa fa-"></i>BLOG</a></li>
      <li><a href="contact.html"><i class='fa fa-phone'></i>CONTACT</a></li>
    </ul>
  </div>
</body>

</html>