<?php
session_start();
include('conn.php');
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>

<?php

    ?>
    <script>

    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Logout Successfully',
    showConfirmButton: false,
    timer: 1500
    }).then(function() {
window.location = "index.php";
});
    </script>
    
</body>
</html>