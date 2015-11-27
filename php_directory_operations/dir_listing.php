<?php
//searching file system when ajax hits this url.. this page find the files in the system and send them back after stringifying
//them and sends back as the response object as json
$imageSrc = (glob('images/*.jpg'));
$apiResponse = [
    'success'=> true,
    'images'=> $imageSrc,
    'error' => ['error']
];
$encoded = json_encode($apiResponse);
print($encoded);

?>

