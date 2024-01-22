<?php
include ("includes/conect.php");
if(isset($_GET['deleteid'])){ 
$id=$_GET['deleteid'];
$sql="delete  from `newstudent` where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:editregsistration.php");
}

}




?>