<?php

include "connect.php";
$stmt = $con->prepare(" SELECT * FROM users");
$stmt->execute();
$allData = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($allData);
echo '</pre>';
$count = $stmt->rowCount();
if($count > 0){
    echo json_encode(array('status'=> 'Success'));
}else{
    echo json_encode(array('status'=> 'Fail'));
}

?> 

