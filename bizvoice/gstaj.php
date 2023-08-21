<?php

include("conn.php");

 if(isset($_POST['k']))
 {
  $_SESSION['rno']=$_POST['k'];  
  
 }   
 $to=$_SESSION['rno'];

 if($to="Yes"){
  ?>
  <div class="form-group">
          <label for="gst">Gst Number:</label>
          <input required="" class="form-control" name="gst" id="gst" type="text">
        </div>
  <?php
 }

?>