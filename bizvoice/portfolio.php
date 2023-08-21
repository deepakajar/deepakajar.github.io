
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
        body {
            background-color: black;
         
         
        }
        h3{
            color: white;
            font-family: "Times New Roman", Times, serif;   
        }
        h1{
            color: orangered;
            font-family: "Times New Roman", Times, serif;
        }
       
        .heading1{
            margin-top: 7%;
         margin-left: 40%;
        }
        article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -20px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
}

article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;
  font-family:  "Times New Roman", Times, serif;
  font-size: 1.9rem;
  letter-spacing: 0.06em;
  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/************************ 
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
  box-sizing: border-box;
}



.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 2px;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}

@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0); 
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap; 
  width: 1px;
}
@media only screen and (max-width: 768px) {
    .row{
        display: block;
    }
    .heading1{
        margin-top: 17%;
        margin-left: 35%;
    }

}
    </style>
</head>
<body style="background-color:black">
    <div class="container">
    <?php
include 'h.php';
?>
        <div class="row">
            <h1 class="heading1">PORTFOLIO</h1>
        </div>
        
<br>
<div class="row">
<section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="portfolio1.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Sree Poorani Catering Services</h2>
        
        <a href="https://sreepooranicatering.in/" class="read-more">
         
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="portfolio2.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>MY KANAKKU</h2>
       
        <a href="https://mykanakku.in/" class="read-more">
         
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="portfolio3.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Sun Power</h2>
      
        <a href="https://sunpowtec.com/" class="read-more">
       
        </a>
      </div>
    </div>
  </article>
</section>
</div>
<br><br>
<div class="row">
<section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="portfolio4.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Johnson EnterPrises</h2>
       
        <a href="https://jhonsonsent.in/" class="read-more">
          
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="portfolio5.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>PMG Acadamy</h2>
       
        <a href="https://www.pmgacademy.in/" class="read-more">
        
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="portfolio6.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Quinn BPO Solutions</h2>
       
        <a href="https://www.quinnbpo.co.in/" class="read-more">
          
        </a>
      </div>
    </div>
  </article>
</section>
</div>
<br><br>
<div class="row">
<section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="portfolio7.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Chennai Mini Truck</h2>
        
        <a href="https://chennaiminitruck.in/" class="read-more">
          
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="portfolio8.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>SMC ENVIRO CARE</h2>
        
        <a href="https://smcenviro.in/" class="read-more">
         <span class="sr-only">about this is some title</span>
          
        </a>
      </div>
    </div>
  </article>
  
</section>
<?php include('float.php'); ?>
</div>

    </div>
    
        

   
</body>
</html>

<?php
include('footer.php');
?>