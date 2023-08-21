<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <style>
    .card-body {
      padding: 2%;
    }

    body {
      background-color: black;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      color: white;
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
    .form-group textarea {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #tood {
      margin-left: 1%;
      color: #ccc;
    }

    @media only screen and (max-width: 390px) {
      #tood {
        margin-left: -20%;
      }
    }

    @media only screen and (max-width: 770px) {
      #tood {
        margin-left: 4%;
      }
    }

    #mnk {
      border: 2px solid white;
      border-bottom: black;

    }
  </style>
</head>

<body>

  <div class="card mb-3" id="mnk" style="width:100%;background-color:black;">
    <div class="card-header">
      <h3 id="tood">For Contact</h3>
    </div>
    <div class="card-body">
      <div class="container">
        <div class="row">

          <div class="col-4">
            <form action="contactusenquiry.php" method="post" >
              <div class="form-group">

                <label for="name">Name: <span style="color: red;">*</span></label>
                <input required="" class="form-control" name="name" id="name" type="text">
              </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="email">Email:<span style="color: red;">*</span></label>
              <input required="" class="form-control" name="email" id="email" type="email">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="message">Message:<span style="color: red;">*</span></label>
              <textarea name="message" id="" cols="30" rows="1"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-success" style="width:100%;">SUBMIT</button>
            </form>
          </div>



        </div>

      </div>
    </div>
  </div>

</body>

</html>
