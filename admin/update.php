<?php

include ("includes/conect.php");
$id=$_GET['updateid'];
$sql="select * from `newstudent` ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$fname=$row['fname'];
$oschool=$row['oldschool'];
$grade=$row['grade'];
$chr=$row['chra'];
$num=$row['num'];
$birth=$row['birth'];
$cinc=$row['cinc'];
$address=$row['address'];


if(isset($_POST['submit'])){
    $name=$_POST['sname'];
    $fname=$_POST['fname'];
    $oschool=$_POST['oschool'];
    $grade=$_POST['cname'];
    $chr=$_POST['character'];
    $num=$_POST['contact'];
    $birth=$_POST['datebrith'];
    $cinc=$_POST['cinc'];
    $address=$_POST['address'];

$sql="update `newstudent` set id= $id, name='$name', fname='$fname', oldschool='$oschool', grade='$grade',chra='$chr'
, num='$num', birth='$birth', cinc='$cinc', address='$address' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header("location:editregsistration.php");
}



}
























?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enter data</title>
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }
        h2{
            text-transform: uppercase;
            
        }
        input{
            width: 80%;
            height: 30px;
            border-radius: 8px;
            align-items: center;
            margin-top: 6px;
        }
        label{
            text-transform: uppercase;
            margin: 5px;
            margin-top: 6px;
        }
        .btn{
            margin-top: 5px;
            background-color: red;
            color: white;
            text-transform: uppercase;
            margin-left: 35%;
            height: 40px;
            font-size: 25px;
            width: auto;
            border-radius: 5px;
        }
        @media (max-width:600px;)
         {
            .btn{
                height: 30px;
                font-size: 20px;
                margin-left: 2                                                                                                                                                                                                                                                                                                                           0%;
            }
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
<center><h2>student regsistration</h2></center>
<bR>
    <label for="studentname">student name</label><br>
    <input type="text" name="sname" placeholder="enter the name of the student"width="80%"value="<?php echo $name;?>"required><br>

    <label for="fathername">father name</label><br>
    <input type="text" name="fname" placeholder="enter the name of the father name"width="80%"value="<?php echo $fname; ?>"required><br>
    <label for="oldschool">old school</label><br>
    <input type="text" name="oschool" placeholder="enter the name of the old school"width="80%"value="<?php echo $oschool;?>"required><br>
    <label for="class">enter the class</label><br>
    <input type="text" name="cname" placeholder="enter the class"width="80%"value="<?php echo $grade;?>"required><br>
    <label for="enter the character">characterof the student</label><br>
    <input type="text" name="character" value="<?php echo $chr;?>"placeholder="enter the character of the student"width="80%"required><br>
    <label for="contact">contact number</label><br>
    <input type="text" name="contact"<?php echo $num;?> placeholder="enter the contact number  of the student"width="80%"required><br>
    <label for="datebrith"> data of brith</label><br>
    <input type="date" name="datebrith"value="<?php echo $birth;?>" placeholder="enter the date of birth of the student"width="80%"required><br>
    <label for="fathercinc">Father CINC</label><br>
    
    <input type="text" name="cinc"value="<?php echo $cinc;?>" placeholder="enter the fathercinc of the student"width="80%"required><br>  
    <label for="address">Address</label><br>
    <input type="text" name="address"value="<?php echo $address;?>" placeholder="enter the address of the student"width="80%"required><br>                                                                                 
<button name="submit"value="submit"class="btn"name="submit">update</button>                                                                                                        
</body>
</html>