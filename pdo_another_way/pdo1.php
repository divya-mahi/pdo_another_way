<?php

$server="localhost";
$username="root";
$pwd="";
$db="pdo";
try{
    $name=$_POST['name'];
    $city=$_POST['city'];
    $con=new PDO("mysql:host=$server; dbname=$db",$username,$pwd);
    $query="insert into emp (name,city) values(:mname,:mcity)";
    $stmt=$con->prepare($query);
    if($stmt->execute([':mname'=>$name,':mcity'=>$city]))
    {
    
        echo"<script>alert('inserted successfully')</script>";
    }
    else
    {
        echo"error";
    }
    }
    
    catch(PDOException $z)
    {
        echo $z->getmessage();
    }
?>