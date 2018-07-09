<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $NAMA=$_POST['NAMA'];
 $NIM=$_POST['NIM'];
 $NILAI=$_POST['NILAI'];
 $q=mysqli_query($con,"INSERT INTO `course_details` (`NAMA`,`NIM`,`NILAI`) VALUES ('$NAMA','$NIM','$NILAI')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
