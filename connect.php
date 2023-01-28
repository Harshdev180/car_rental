<?php

@include 'config.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$plocation = $_POST['plocation'];
$dlocation = $_POST['dlocation'];
$pdate = $_POST['pdate'];
$rdate = $_POST['rdate'];

$conn = new mysqli('localhost','root','', 'user_db');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into location_form(name, phone, plocation, dlocation, pdate, rdate) values (?,?,?,?,?,?)");
    $stmt->bind_param("sissii", $name, $phone, $plocation, $dlocation, $pdate, $rdate);
    $stmt->execute();
    header('location:index.php#services');
    $stmt->close();
    $conn->close();
}
?>
