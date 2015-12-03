<?php
session_start();

$message1 = '';
$message2 = '';
$message3 = '';


if(isset($_SESSION['error']['name'])) {
    $message1 = $_SESSION['error']['name'];
}
if(isset($_SESSION['error']['age'])) {

    $message2 = $_SESSION['error']['age'];
}
if(isset($_SESSION['error']['occupation'])) {

    $message3 = $_SESSION['error']['occupation'];
}

?>
<form action="session_reader.php" method="post">

    <input type="text" name="name" placeholder="name">
    <?php  print($message1);  ?>
    <input type="text" name="age" placeholder="age">
    <?php  print($message2);  ?>
    <input type="text" name="occupation" placeholder="occupation">
    <?php  print($message3);  ?>
    <button type="submit">Submit</button>

</form>