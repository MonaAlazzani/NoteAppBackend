
<?php

include "../connect.php";
include "../functions.php";

$userId  = filter_request('id');


$stmt = $con->prepare("SELECT * FROM notes WHERE notes_user = ?");
$stmt->execute(array($userId));

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


$count = $stmt->rowCount();

if($count > 0){
    echo json_encode(array("status"=>"Success", "data" => $data));
}else{
    echo json_encode(array("status"=>"Fail"));

}



?>