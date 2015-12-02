<?php
session_start();

$_SESSION['form-data'] = $_POST;

$name = $_POST["name"];
$age = $_POST["age"];
$occupation = $_POST['occupation'];

                //regex patt      test string
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
    $_SESSION['error']['name'] = $nameErr;
}

if (!preg_match("/^[a-zA-Z ]*$/",$occupation)) {
    $occupationErr = "Only letters and white space allowed";
    $_SESSION['error']['occupation'] = $occupationErr;
}

if (!preg_match("/^[0-9]+$/", $age)) {
    $ageErr = 'only numbers allowed';
    $_SESSION['error']['age'] = $ageErr;
}


if(isset($_SESSION['error'])){
    header('location: session_setter.php');
//    print_r($_SESSION);
}
//if any errors.. return to original page..

//otherwise..
//print_r($_SESSION);



?>

