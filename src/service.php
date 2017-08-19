<?php
include '../vendor/autoload.php';
include './client.php';

$id_array = array('id' => '1');
dd($client->getName($id_array));

?>