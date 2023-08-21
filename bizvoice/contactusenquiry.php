
<?php
include 'h.php';
include('conn.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

// Set the recipient email address
$recipient = 'bizvoice.india@gmail.com';

// Set the email subject
$subject = 'New Form Submission';

// Build the email content
$body =" Customer Details";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";


// Set the email headers
$headers = "From: $name <$email>";

// Send the email
$mailSent = mail($recipient, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
   
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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