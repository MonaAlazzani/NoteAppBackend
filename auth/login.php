<?php

include "../connect.php";
include "../functions.php";

$email = filter_request("email");
$password = filter_request("password");

$stmt = $con->prepare('SELECT * FROM users WHERE `password` = ? AND email = ?');
$stmt->execute(array($password, $email));

$data = $stmt->fetch(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if($count > 0){
    echo json_encode(array("status"=>"Success", "data" => $data ));
}else{
    echo json_encode(array("status"=>"Fail"));

}



?>