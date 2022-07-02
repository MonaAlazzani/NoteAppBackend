
<?php

include "../connect.php";
include "../functions.php";

$note_id = filter_request('id');

$stmt = $con->prepare("DELETE FROM notes WHERE note_id = ? ");
$stmt->execute(array($note_id));


$count = $stmt->rowCount();

if($count > 0){
    echo json_encode(array("status"=>"Success" ));
}else{
    echo json_encode(array("status"=>"Fail"));

}



?>