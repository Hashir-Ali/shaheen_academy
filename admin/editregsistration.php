<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upgrade page</title>
    <link rel="stylesheet"href="bootstrap.css">
</head>
<body>
    <center><b><h2  class="bg-primary">EDIT STUDENT INFORMATION </h2></b></center>
    <table cellspaceing="10"class="table table-striped table-bordered table-dark">
      <tr class="bg-danger" >  
    <th>Ser No.</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>OldSchool</th>
        <th>Class</th>
        <th>Character</th>
        <th>Phone No.</th>
<th>Date of Birth</th>
<th>Father CINC</th>
<th>Address</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include ("includes/conect.php");

$sql="select * FROM `newstudent`";
$result=mysqli_query($con,$sql);
if($result){

    while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $fname=$row['fname'];
    $oschool=$row['oldschool'];
    $grade=$row['grade'];
    $chr=$row['chra'];
    $num=$row['num'];
    $birth=$row['birth'];
    $cinc=$row['cinc'];
    $address=$row['address'];
    
    echo ' <tr>
    <th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$fname.'</td>
<td>'.$oschool.'</td>
<td>'.$grade.'</td>
<td>'.$chr.'</td>
<td>'.$num.'</td>
<td>'.$birth.'</td>
<td>'.$cinc.'</td>
<td>'.$address.'</td>
<td>

<button class="btn"><a href="update.php?updateid='.$id.'"><img src="upgrade.png"height="20px"width="20px"></a></button>
</td>
<td><button class="btn"><a href="delete.php?deleteid='.$id.'"><img src="delete.png"height="20px"width="20px"></a></button></td>
</tr>';
}
}



?>
    </table>
</body>
</html>