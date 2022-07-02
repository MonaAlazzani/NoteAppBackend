
<?php

include "../connect.php";
include "../functions.php";

$userId         = filter_request('id');
$note_title     = filter_request('title');
$note_content   = filter_request('content');

$stmt = $con->prepare("INSERT INTO notes (note_title, note_content, notes_user) VALUES (?,?,?) ");
$stmt->execute(array($note_title, $note_content, $userId));




$count = $stmt->rowCount();

if($count > 0){
    echo json_encode(array("status"=>"Success" ));
}else{
    echo json_encode(array("status"=>"Fail"));

}



?>