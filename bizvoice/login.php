<?php include('conn.php');
include 'h.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="beat" style="padding:20px;">
    <form action="" method="post">
    <?php include('loginform.php'); ?>
    </form>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $loginsql="SELECT * FROM `login`";
    $result=mysqli_query($con,$loginsql);
    while($row=mysqli_fetch_assoc($result))
    {
        $dbemail=$row['email'];
        $dbpass=$row['password'];
    }
    if($dbemail==$email&&$dbpass==$password)
    { 
        $_SESSION['auth'] = $email;
        ?>
    
        <script>

    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Login Successfully',
    showConfirmButton: false,
    timer: 1500
    }).then(function() {
window.location = "index.php";
});
    </script>
    <?php
    }
    else{
        ?>
    <script>

    Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'Email Or Password is incorrect',
    showConfirmButton: false,
    timer: 1800
    }).then(function() {
window.location = "login.php";
});
    </script>
    <?php
    }
    
}
?>
