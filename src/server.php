<?php

require('../core/models/class.Conexion.php'); 

/**
 * 
 */
 class server
 {
 	public function __construct()
 	{
 		// code
 	}

 	public function getStudentName($id_array)
 	{
 		$db = new Conexion();
 		$id = $id_array['id'];
 		$sql = $db->query("SELECT name FROM students WHERE id= '$id';");
 		$rows = $db->recorrer($sql);

 		return $rows['name'];
 	}
 }

$params = array('uri' => 'soap-server-client/src/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();


?>