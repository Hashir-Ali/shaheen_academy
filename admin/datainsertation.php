<?php

include ("includes/conect.php");
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

$sql="INSERT INTO `newstudent` (name, fname, oldschool, grade, chra, num, birth, cinc,address) 

VALUES ('$name','$fname','$oschool','$grade','$chr',' $num','$birth','$cinc','$address')";

$result= mysqli_query($con,$sql);

if($result){
    echo '<script>alert("student Detail has been added.")</script>';
echo "<script>window.location.href ='editregsistration.php'</script>";
}else{
 echo '<script>alert("Something Went Wrong. Please try again")</script>';
    header("location:showregsistration.php");
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
    <link rel="stylesheet"href="bootstrap.css">
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }
        .container{


            border: 1px solid black;
           
        }
        h2{
            text-transform: uppercase;
            
        }
        input{
            
            /* margin-left:; */
           width: 50%;
            height: 30px;
            border-radius: 8px;
            align-items: center;
            margin-bottom: 20px;
        }
        label{
            /* margin-left:50px; */
            text-transform: uppercase;
           
            padding-top: 20px;
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
        @media (max-width:600px)
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
    <div class="container">
    
    <form action="" method="post">
<center><h2 class="bg-primary">REGSISTER THE NEW STUDENT</h2></center>
<bR>
<div class="col-12">

    <label for="studentname">student name</label>
    <input type="text"class="form-control" name="sname" placeholder="enter the name of the student"required></div>

    <label for="fathername">father name</label><br>
    <input type="text"class="form-control" name="fname" placeholder="enter the name of the father name"width="80%"required><br>
    <label for="oldschool">old school</label><br>
    <input type="text"class="form-control col-md-10" name="oschool" placeholder="enter the name of the old school"width="80%"required><br>
    <label for="class">enter the class</label><br>
    <input type="text"class="form-control col-md-10" name="cname" placeholder="enter the class"width="80%"required><br>
    <label for="enter the character">characterof the studen
    </label><br>
    <input type="text"class="form-control col-md-10" name="character" placeholder="enter the character of the student"width="80%"required><br>
    <label for="contact">contact number</label><br>
    <input type="text"class="form-control col-md-10" name="contact" placeholder="enter the contact number  of the student"width="80%"required><br>
    <label for="datebrith"> data of brith</label><br>
    <input type="date"class="form-control" name="datebrith" placeholder="enter the date of birth of the student"width="80%"required><br>
    <label for="fathercinc">Father CINC</label><br>
    
    <input type="text"class="form-control col-md-10" name="cinc" placeholder="enter the fathercinc of the student"width="80%"required><br>  
    <label for="address">Address</label><br>
   
    <input type="text" class="form-control col-md-10"name="address" placeholder="enter the address of the student"width="80%"required><br>                                                                                 

    <button name="submit"value="submit"class="btn"name="submit">submited</button>  
</div>                                                                                                      
</body>
</html>