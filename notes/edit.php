
<?php

include "../connect.php";
include "../functions.php";

$note_id        = filter_request('id');
$note_title     = filter_request('title');
$note_content   = filter_request('content');

$stmt = $con->prepare("UPDATE notes SET note_title = ? , note_content = ? WHERE note_id = ?");
$stmt->execute(array($note_title, $note_content, $note_id));



$data = $stmt->fetch(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if($count > 0){
    echo json_encode(array("status"=>"Success", "data" => $data ));
}else{
    echo json_encode(array("status"=>"Fail"));

}



?>