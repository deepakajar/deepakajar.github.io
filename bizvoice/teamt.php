<?php include 'h.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TEAM PAGE - BIZVOICE</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport">
  <link rel="stylesheet" type="text/css" href="team.css">
  <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<style>
  .icon-block svg {
    width: 100%;
    height: 60%;
  }
  
  * {
    font-family: poppins, sans-serif;
  }
  
  .team-cards-inner-container {
    display: flex;
    row-gap: 1.3rem;
    column-gap: 1.3rem;
  }
  
  .text-blk {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    line-height: 25px;
  }
  
  .responsive-cell-block {
    min-height: 60px;
  }
  
  .responsive-container-block {
    min-height: 60px;
    width: 100%;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    display: flex;
    flex-wrap: wrap;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    justify-content: flex-start;
  }
  
  .inner-container {
    max-width: 1200px;
    min-height: 70vh;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    justify-content: center;
  }
  
  .section-head {
    width: 100%;
    color: orangered;
    line-height: 40px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 0px;
  }
  
  .section-body { 
    color: whitesmoke;
    font-size: 28px;
    line-height: 28px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 64px;
    margin-left: 0px;
  }
  
  .team-cards-outer-container {
    display: flex;
    align-items: center;
  }
  
  .content-container {
    display: flex;
    justify-content: flex-start;
    flex-direction: row;
    align-items: center;
    padding-top: 0px;
    padding-right: 25px;
    padding-bottom: 0px;
    padding-left: 0px;
  }
  
  .img-box {
    max-width: 130px;
    max-height: 130px;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: hidden;
    margin-top: 0px;
    margin-right: 25px;
    margin-bottom: 0px;
    margin-left: 0px;
  }
  
  .card {
    background-color: rgb(255, 255, 255);
    display: flex;
    padding-top: 16px;
    padding-right: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    box-shadow: rgba(95, 95, 95, 0.1) 6px 12px 24px;
    flex-direction: row;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
  }
  
  .card-container {
    max-width: 350px;
  }
  
  .card-content-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  
  .person-name {
    font-size: 20px;
    font-weight: 700;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 5px;
    margin-left: 0px;
  }
  
  .person-info {
    font-size: 11px;
    line-height: 15px;
  }
  
  .card-container {
    max-width: 350px;
  }
  
  .outer-container {
    justify-content: center;
    padding-top: 0px;
    padding-right: 50px;
    padding-bottom: 0px;
    padding-left: 50px;
    background-color: black;
  }
  
  .person-img {
    width: 100%;
    height: 100%;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
  }
  
  @keyframes bounce {
  
    0%,
    20%,
    50%,
    80%,
    100% {
      transform: translateY(0px);
    }
  
    40% {
      transform: translateY(-30px);
    }
  
    60% {
      transform: translateY(-15px);
    }
  
    0%,
    20%,
    50%,
    80%,
    100% {
      transform: translateY(0px);
    }
  
    40% {
      transform: translateY(-30px);
    }
  
    60% {
      transform: translateY(-15px);
    }
  }
  
  @media (max-width: 1024px) {
    .team-card-container {
      justify-content: center;
    }
  
    .section-head {
      font-size: 50px;
      line-height: 55px;
    }
  
    .img-box {
      max-width: 109px;
      max-height: 109px;
    }
  
    .content-container {
      padding-top: 0px;
      padding-right: 20px;
      padding-bottom: 0px;
      padding-left: 0px;
    }
  
    .inner-container {
      justify-content: space-evenly;
    }
  }
  
  @media (max-width: 768px) {
    .inner-container {
      margin-top: 60px;
      margin-right: 0px;
      margin-bottom: 60px;
      margin-left: 0px;
    }
  
    .section-body {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
    }
  
    .img-box {
      margin-top: 0px;
      margin-right: 30px;
      margin-bottom: 0px;
      margin-left: 0px;
    }
  
    .content-box {
      text-align: center;
    }
  
    .content-container {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 30px;
      margin-left: 0px;
    }
  
    .card-container {
      max-width: 45%;
    }
  
    .team-cards-inner-container {
      justify-content: center;
    }
  }
  
  @media (max-width: 500px) {
    .outer-container {
      padding-top: 0px;
      padding-right: 60px;
      padding-bottom: 0px;
      padding-left: 60px;
    }
  
    .section-head {
      font-size: 40px;
      line-height: 45px;
    }
  
    .content-box {
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
    }
  
    .section-body {
      font-size: 12px;
    }
  
    .img-box {
      max-width: 68px;
      max-height: 68px;
    }
  
    .person-name {
      font-size: 14px;
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 1px;
      margin-left: 0px;
    }
  
    .content-box {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 46px;
      margin-left: 0px;
      text-align: left;
    }
  
    .content-container {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
    }
  
    .card-container {
      max-width: 100%;
    }
  }



  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
#teamt{
  margin-top: 10%;
}
body{
  background-color: black;
}
</style>
<body>


<div id="teamt" class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-4 wk-ipadp-5 content-container">
      <div class="content-box">
      <h2 class="text-blk section-head">
          MEET OUR DREAM TEAM
</h2>
        <p class="text-blk section-body">
        
        Meet Our Awesome And Expert Team Members. We are ready to grow with your business.
        </p>
      </div>
    </div>
    <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-8 team-cards-outer-container">
      <div class="responsive-container-block team-cards-inner-container">
        <div class="responsive-cell-block wk-mobile-12 wk-ipadp-10 wk-tab-8 wk-desk-6 card-container">
          <div class="card">
            
            <div class="card-content-box">
              <p class="text-blk person-info">
              FOUNDER
              
              </p>
            </div>
          </div>
        </div>
        <div class="responsive-cell-block wk-mobile-12 wk-ipadp-10 wk-tab-8 wk-desk-6 card-container">
          <div class="card">
            
            <div class="card-content-box">
              <p class="text-blk person-info">
              CEO & HEAD OF MARKETING
              </p>
            </div>
          </div>
        </div>
        <div class="responsive-cell-block wk-mobile-12 wk-ipadp-10 wk-tab-8 wk-desk-6 card-container">
          <div class="card">
            
            <div class="card-content-box">
              <p class="text-blk person-info">
              IT DIRECTOR
              </p>
            </div>
          </div>
        </div>
        <div class="responsive-cell-block wk-mobile-12 wk-ipadp-10 wk-tab-8 wk-desk-6 card-container">
          <div class="card">
            
            <div class="card-content-box">
              <p class="text-blk person-info">
              FINANCE DIRECTOR
              </p>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php include 'footer.php'; ?>