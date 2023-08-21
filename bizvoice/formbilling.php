<?php

include('conn.php');
include 'h.php';


if (isset($_POST['submit'])) {
    $project = $_POST['webtype'];
    $company_name = $_POST['cname'];
    $email = $_POST['email'];
    $contact = $_POST['con'];
    $address = $_POST['addr'];
    if (!isset($_POST['gst'])) {
        $gstnum = "No GST";
    } else {
        $gstnum = $_POST['gst'];
    }

    $payment = $_POST['payment'];
    $amount = $_POST['amount'];
    $payment_type = $_POST['paytype'];
    $img_file = $_FILES['screenshot']['name'];
    $tmp = $_FILES['screenshot']['tmp_name'];

    $sql = "SELECT * FROM payment";
    $res = mysqli_query($con, $sql);
    while ($ro = mysqli_fetch_assoc($res)) {
        $row_count = $ro['pay_id'];
        if (empty($row_count)) {
            $row_count = 0;
        }
    }
    $id = $row_count + 1;


    $sqli = "INSERT INTO `payment` (`pay_id`, `project`, `name`, `email`, `contact`, `address`, `gst`, `payment`, `amount`, `payment_type`, `attatchment`) VALUES ('$id', '$project', '$company_name', '$email', '$contact', '$address', '$gstnum', '$payment', '$amount', '$payment_type', '$img_file');";
    $sqlicon = mysqli_query($con, $sqli);
    $sel = "select * from payment where pay_id='$id'";
    $que = mysqli_query($con, $sel);

?>






<?php


    if ($sqlicon == true) {
        ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <style>
        body {
            margin-top: 10%;
        }
       
.headi
{
    font-size: 10px;
 
    margin-top: 3.4%;
    margin-left: 92px;
}
.dat{
    margin-top: 6.4%;
    display: flex;
    justify-content: center;
}
.ken tr th p{
   width: 100%;
}

    </style>

</head>

<body>
<div id="printTable" class="card" style="width:100%;">
  <div class="card-body">
  
        <table class="ken" style="width:100%;">
            <tr>
                <th><img src="logo.png" width="190px" height="80px" alt=""> </th>
                <td><h6 style="font-size: 10px;">BIZVOICE TECHNOLOGIES SOLUTIONS <br> PRIVATE LIMITED</h6></td>
                <th><p style="font-size: 12px;">Date:-<?php echo date("d-m-Y"); ?><br> ID:- <?php echo $id; ?></p></th>
            </tr>
        </table>
        <hr>
        <table style="width:60%;margin-left:20%;" class="table table-bordered">
            <tr>
                <th>Company Name:-</th>
                <td><?php echo $company_name; ?></td>
            </tr>
            <tr>
                <th>Project:-</th>
                <td><?php echo $project; ?></td>
            </tr>
            <tr>
                <th>Payment Mode:-</th>
                <td><?php echo $payment; ?></td>
            </tr>
            <tr>
                <th>Payment Type:-</th>
                <td><?php echo $payment_type; ?></td>
            </tr>
            <tr>
                <th>Amount:-</th>
                <td>Rs.<?php echo $amount; ?></td>
            </tr>
           
        </table>
        <div class="row" style="margin-left:14px">
        <h5>Thanks for order with us.We will confirm your order and payment Details Soon<br>&nbsp;&nbsp;<h6><span style="color: red;">*</span>Electronically generated confirmation receipt(Not The Payment Receipt).Payment receipt will send by our A/C department </h6>
        </div>
  </div>
</div>
    <div id="printTabl"  class="container">
       
        
        
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col">
            <h5>Thanks for order with us.We will confirm your order and payment Details Soon<br>&nbsp;&nbsp;&nbsp;<h6><span style="color: red;">*</span>Electronically generated confirmation receipt(Not The Payment Receipt).Payment receipt will send by our A/C department </h6></h5>
            </div>
            <div class="col-1">
                
            </div>
            
        </div>
    </div>

        <div class="row">
     

        </div>
        <button id="printButton" onclick="print()">Print</button>
        
        <script>
   window.jsPDF = window.jspdf.jsPDF;
var docPDF = new jsPDF();

var elementHTML = document.querySelector("#printTable");
docPDF.html(elementHTML, {
 callback: function(docPDF) {
  docPDF.save('Bizvoice.pdf');
 },
 x: 15,
 y: 15,
 width: 170,
 windowWidth: 650
});

    </script>
      
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'If Your Payment Is Confirmed then Company Send a Email Confirmation ',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location = "index.php";
            });
                Swal.fire(
              'success',
              'If Your Payment Is Confirmed then Company Send a Email Confirmation',
              'success'
            ).then(function() {
                     window.location = "index.php";
                });
        </script>

       
<?php
    $site_path = "https://bizvoice.co.in/";
        $folder = $site_path."\\assets\\receipt\\" . $img_file;
        move_uploaded_file($tmp, $folder);
        while ($row = mysqli_fetch_assoc($que)) {
            if (rename($site_path."/assets/receipt/" . $row['attatchment'], $site_path."/assets/receipt/" . $row['name'] . "-" . $row['pay_id'] . ".jpg")) {
            } else {
                echo "<script>alert(' not change');</script>";
            }
        }
    } else {
        // echo "<script>alert(' not Success');</script>";
    }
}
?>