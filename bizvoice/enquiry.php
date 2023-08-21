<?php include 'h.php';
include('conn.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <style>
  
    
    .form2{
        margin-left: 20%;
        margin-top: 34%;
    }
    @media only screen and (max-width: 740px)
    {
      .form2{
        margin-left: 1%;
        margin-top: 34%;
    }
    }
  </style>
</head>
<body style="background-color:black";>
    <div class="container">
        <div class="form2" style="margin-top:12%;">
        <div class="row">
        <?php include('form.php'); ?>
        </div>
       
        </div>
    </div>
</body>
</html>
<?php include('footer.php'); ?>
