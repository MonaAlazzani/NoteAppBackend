<?php

include "../connect.php";
include "../functions.php";


$username = filter_request("username");
$email    = filter_request("email");
$pasword  = filter_request("password");

$stmt = $con->prepare("INSERT INTO users (username, email, `password`) VALUES (?,?,?)");
$stmt->execute(array($username, $email, $pasword));
$count = $stmt->rowCount();

if($count > 0){
    echo json_encode(array("status"=>"Success"));
}else{
    echo json_encode(array("status"=>"Fail"));

}


?>