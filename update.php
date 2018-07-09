<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $NAMA=$_POST['NAMA'];
 $NIM=$_POST['NIM'];
 $NILAI=$_POST['NILAI'];
 $q=mysqli_query($con,"UPDATE `course_details` SET `NAMA`='$NAMA',`NIM`='$NIM',`NILAI`='$NILAI' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
