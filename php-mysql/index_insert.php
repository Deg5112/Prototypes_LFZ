<!-- index_insert.php -->
<?php
require('mysql_connect.php');

$response = [
  'success'=>true,
    'data' => [
        'title'=>$_POST['title'],
        'details'=>$_POST['details'],
        'user_id'=>$_POST['user_id']
    ]
];
print(json_encode($response));
print(json_encode($response));
$title = $data['title'];
$details = $data['details'];
$user = $data['user_id'];

$query = "INSERT INTO todo_items (title, details, user_id, timestamp) VALUES('$title', '$details', '$user', NOW())";

$result = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn)>0){
    print_r($result);
}else{
    print_r('false');
    print_r($conn);
}
?>