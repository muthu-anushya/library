<?php

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];


//database connection

$conn= new mysqli("localhost","root","","library");
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
    
}
else{
    $stmt=$conn->prepare("insert into login(username,email,password)values(?,?,?)");
    $stmt->bind_param("sss",$username,$email,$password);
    $stmt->execute();
    echo "login Successfully...";
    $stmt->close();
    $conn->close();
}



?>