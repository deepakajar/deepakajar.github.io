<?php
include('conn.php');
include 'h.php';
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
    <?php
    $loginsql = "SELECT * FROM `job` where `job_id`='" . $_GET['id'] . "'";
    $result = mysqli_query($con, $loginsql);
    while ($row = mysqli_fetch_assoc($result)) {
       $name1= $row['name'];
       $pdf_name=$name1."-".$_GET['id'];
    }
    $path="./assets/resume/$pdf_name.pdf";
    
    if(file_exists($path))
    {
        unlink($path);
        ?>
        
        <?php
        $loginsql1 = "DELETE FROM job WHERE job_id='" . $_GET['id'] . "'";
        $result1 = mysqli_query($con, $loginsql1);
?>
        <script>

        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Delete Successfully',
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
    window.location = "hire.php";
    });
        </script>
        <?php
    }

    ?>
</body>
</html>