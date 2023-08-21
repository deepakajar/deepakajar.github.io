<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
  <style>
    .card {
      width: 650px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      margin: 10px;
    }

    .card-header {
      background-color: #333;
      padding: 16px;
      text-align: center;
    }

    .card-header .text-header {
      margin: 0;
      font-size: 18px;
      color: rgb(255, 255, 255);
    }

    .card-body {
      padding: 12%;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      color: #333;
      font-weight: bold;
      margin-bottom: 1px;
    }

    .form-group select {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"],
    .form-group textarea,
    .form-group a {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn {
      padding: 12px 24px;
      margin-left: 13px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      background-color: #333;
      color: #fff;
      text-transform: uppercase;
      transition: background-color 0.2s ease-in-out;
      cursor: pointer
    }

    .btn:hover {
      background-color: #ccc;
      color: #333;
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="card-header">
      <div class="text-header">Book Your Project</div>
    </div>
    <div class="card-body">
      <form action="formbilling.php" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <label for="web">Project:</label>
          <select name="webtype" class="form-select" aria-label="Default select example">
            <option selected value="Web Development">Web Development</option>
            <option value="E-commerce">E-Commerse</option>
            <option value="Mobile Development">Mobile Development</option>
            <option value="Billing Software">Billing Software</option>
            <option value="School Erp">School Erp</option>
            <option value="BIZ360">BIZ360</option>
            <option value="ESEN">ESEN</option>
            <option value="My Kanakku">My Kanakku</option>
            <option value="Others">Others..</option>
          </select>
        </div>
        <div class="form-group">
          <label for="cname">Company Name:</label>
          <input required="" class="form-control" name="cname" id="cname" type="text">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input required="" class="form-control" name="email" id="email" type="email">
        </div>
        <div class="form-group">
          <label for="con">Contact No:</label>
          <input required="" class="form-control" name="con" id="con" type="tel">
        </div>
        <div class="form-group">
          <label for="confirm-password">Company Address:</label>
          <textarea name="addr" id="" cols="20" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="confirm-password">Are you have GST number?</label>
          <div class="form-check form-check-inline">
            <input onchange="sure()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Yes">
            <label class="form-check-label" for="inlineRadio1">Yes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" checked="true" name="inlineRadioOptions" id="inlineRadio1" value="No">
            <label class="form-check-label" for="inlineRadio2">No</label>
          </div>
        </div>

        <div id="camel">

        </div>
        <div class="form-group">
          <label for="payment">Payment:</label>
          <select class="form-select" name="payment" aria-label="Default select example">
            <option selected value="Advance">Advance</option>
            <option value="Full Amount">Full Amount</option>
            <option value="Register">Register</option>
            <option value="Renewal">Renewal</option>
            <option value="Others">Others..</option>
          </select>
        </div>
        <div class="form-group">
          <label for="amount">Amount:</label>
          <input required="" class="form-control" name="amount" id="amount" type="number">
        </div>

        <div class="form-group">
          <label for="payment">Payment Type:</label>
          <select onchange="paymentto()" class="form-select" id="paytype" name="paytype" aria-label="Default select example">
            <option value="G-Pay / Phone Pay">G-Pay / Phone Pay</option>
            <option value="Bank Transfer">Bank Transfer</option>
            <option value="UPI Payment">UPI Payment</option>
            <option value="QR Payment">QR Payment</option>
            <option value="PayPal">PayPal</option>
            <option selected value="Others">Others..</option>
          </select>
        </div>
        <div id="paytyp">

        </div>
        <div class="form-group">
          <label for="payment">Upload Transaction File:</label>
          <input type="file" name="screenshot" id="screenshot">
        </div>

        <input style="margin-left: 40%;" type="submit" name="submit" class="btn" value="submit">
      </form>
    </div>
  </div>
  <script>
    function sure() {
      var k = document.getElementById('inlineRadio1').value;

      $.ajax({

        url: "gstaj.php",
        type: "post",
        data: {
          k: k
        },
        success: function() {
          setTimeout(() => {

            $('#camel').load('gstaj.php');
          }, 100);
        }
      });
    }

    function paymentto() {
      var paytype = document.getElementById('paytype').value;
      $.ajax({
        url: "paytypeaj.php",
        type: "post",
        data: {
          paytype: paytype
        },
        success: function() {
          setTimeout(() => {
            $('#paytyp').load('paytypeaj.php');
          }, 100);
        }
      });
    }
  </script>
</body>

</html>
