<?php
require('mysql_connect.php');
$data = $_POST;

$title = $data['title'];
$details = $data['details'];
$user = $data['user_id'];

$query = "INSERT INTO todo_items (title, details, user_id, timestamp) VALUES('$title', '$details', '$user', NOW())";


$array = [];
$result = mysqli_query($conn, $query);

if(mysqli_affected_rows($conn)>0) {
    $newID = mysqli_insert_id($conn);

    $response = [
        'success'=>true,
        'id'=> $newID
    ];

   print_r(json_encode($response));

}

else{
    print_r('false');
    print_r($conn);
}

?>