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
                <th><p style="font-size: 12px;">Date:-12/02/2023<br> ID:- 12d</p></th>
            </tr>
        </table>
        <hr>
        <table style="width:60%;margin-left:20%;" class="table table-bordered">
            <tr>
                <th>Company Name:-</th>
                <td>Bizvoice</td>
            </tr>
            <tr>
                <th>Project:-</th>
                <td>Web Developer</td>
            </tr>
            <tr>
                <th>Payment Mode:-</th>
                <td>Full Payment</td>
            </tr>
            <tr>
                <th>Payment Type:-</th>
                <td>Bank Transfer</td>
            </tr>
            <tr>
                <th>Amount:-</th>
                <td>Rs.12000</td>
            </tr>
        </table>
  </div>
</div>
    <div id="printTabl"  class="container">
        <!-- <table class="table table-borderless">
            <thead>
                <tr>
                    <th ><img src="logo.png" width="120px" alt=""></th>
                    <th class="col-7 text-center">Bizvoice Technologies Solutions Private Limited</th>
                    <th>Date:-12/02/2023 <br> ID No:- 12d</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">Company Name:-</th>
                    <td >MDR</td>
                    
                    
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    
                </tr>
            </tbody>
        </table> -->
        <!-- <div class="row">
            <div class="col">
            <img src="logo.png" width="220px" alt="">
            </div>
            <div class="col-6">
            <h4  class="headi">Bizvoice Technologies Solutions Private Limited</h4>
            </div>
            <div class="col">
            <h5 class="dat">Date:-12/02/2023<br> ID No:- 12d</h5>
            </div>
        </div> -->
        
        
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
    function print(){
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
    }
        </script>
</body>
</html>

