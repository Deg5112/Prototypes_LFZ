<?php
session_start();
//session_reset();
if(isset($_SESSION)){
    print_r($_SESSION);
    $message = 'if it is set';
}else{
    $message = '';
}

?>
<form action="session_reader.php" method="post">
    <input type="text" name="name" placeholder="name">
    <?php  print($message);  ?>
    <input type="text" name="age" placeholder="age">
    <?php  print($message);  ?>
    <input type="text" name="occupation" placeholder="occupation">
    <?php  print($message);  ?>
    <button type="submit">Submit</button>
</form>