<?php
include_once("connect.php");

$postdata = file_get_contents("php://input");
$result = json_decode($postdata);

if(isset($result->name) && isset($result->email) && isset($result->subject) && isset($result->message)){

    $name = $result->name;
    $email = $result->email;
    $subject = $result->subject;
    $message = $result->message;

    // $status =[]

    $db->query("INSERT INTO tblcontact VALUE(NULL,'$name','$email','$subject','$message')");

    if ($db->affected_rows>0){
        echo json_encode(['status'=>true]);
    }
}else{
    echo json_encode(['status'=>false]);
}