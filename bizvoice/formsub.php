<?php
include 'h.php';

if(isset($_POST['submit']))
{
 $webtype= $_POST['webtype'];
// Get the form data
 $name = $_POST['cname'];
$email = $_POST['email'];
 $mobile = $_POST['con'];
 $address = $_POST['addr'];
 $paytype= $_POST['paytype'];

// Set the recipient email address
$recipient = 'bizvoice.india@gmail.com';

// Set the email subject
$subject = 'New Form Submission';

// Build the email content
$body =" Customer Details";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Mobile: $mobile\n";
$body .= "Address: $address\n";
$body .= "Website Type: $webtype\n";
$body .= "Payment Type: $paytype\n";


// Set the email headers
$headers = "From: $name <$email>";

// Send the email
$mailSent = mail($recipient, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'Thank you for your submission. We will get back to you soon!';
    ?>
    <script>

    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Sent Successfully',
    showConfirmButton: false,
    timer: 1500
    }).then(function() {
window.location = "index.php";
});
    </script>
    <?php
} else {
    ?>
    <script>

    Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'Error',
    showConfirmButton: false,
    timer: 1500
    }).then(function() {
window.location = "index.php";
});
    </script>
    <?php
}
}
?>