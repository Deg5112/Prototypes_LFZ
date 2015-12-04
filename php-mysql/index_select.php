<!-- index_select.php -->
<?php

require('mysql_connect.php');

$query = " SELECT * FROM `students` WHERE `name` ='david' ";
$result = mysqli_query($conn, $query);

//if(mysqli_num_rows($result)>0){
//    while($row = mysqli_fetch_assoc($result)){
//        print_r($row);
//    }
//}else{
//    echo 'failed';
//}

$query2 = "INSERT INTO students VALUES('David', 'nawesome', 'nAwesome', 'fluffy', null)";
$result = mysqli_query($conn, $query2);


if(mysqli_affected_rows($conn)>0){
    print_r($result);
    print_r($conn);
}





?>