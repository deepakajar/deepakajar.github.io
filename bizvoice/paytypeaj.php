<?php

include("conn.php");

if (isset($_POST['paytype'])) {
    $_SESSION['rno'] = $_POST['paytype'];
}
$to = $_SESSION['rno'];

if ($to == 'G-Pay / Phone Pay') {
?>
    <div class="form-group">
        <label for="payment">G-pay/Phonepay Number:</label>
        <input type="text" name="" readonly value="9087012334
" id="">
    </div>


<?php
} elseif ($to == "Bank Transfer") {
?>

    <textarea readonly name="" id="" style="width: 100%;font-size:14px;" cols="70" rows="5">
    BANK DETAILS 
    A/C NAME  : BIZVOICE TECHNOLOGIES SOLUTIONS INDIA PVT LTD
    A/C NO       : 611701010050782
    IFSC             : UBIN0561177
    BANK NAME: UNION BANK OF INDIA
    BRANCH      : West Mambalam
    </textarea>
<?php
} 
else if ($to == "QR Payment") {
?>

    <img style="margin-left: 38%;" src="image/qr.jpg" width="129px" height="136px" alt="">
<?php
} 
else if ($to == "UPI Payment") {
?>
    <div class="form-group">
        <label for="payment">:</label>
        <input type="text" name="" readonly value="9087012334@kotak
" id="">
    </div>

<?php

}
elseif($to == "PayPal")
{
    ?>
    <div class="form-group">
        
        <a href="https://paypal.me/BTSIPLTD?country.x=IN&locale.x=en_GB" target="_blank">Click To Pay Via PAYPAL</a>
    </div>  
    <?php  

}

else {
    echo " ";
}
?>

<?php


?>