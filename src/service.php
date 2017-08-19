<?php
include '../vendor/autoload.php';
include './client.php';
include './server.php';

$id_array = array('id' => '2');
dd($client->getName($id_array));

?>