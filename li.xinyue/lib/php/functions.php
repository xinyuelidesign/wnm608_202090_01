<?php

// print pretty
function print_p($d) {
   echo "<pre>",print_r($d),"</pre>";
}


function file_get_json($filename) {
   $file = file_get_contents($filename);
   return json_decode($file);
}


function delete_from_array_by_index($array, $index) {
	unset($array[$index]);
	return array_values($array);
}

function  MYSQLIConn(){
    Include_once "auth.php";

    @$conn = new mysqli( ...MYSQLIAuth());

    if($conn->connect_errno) die($conn->connect_error);

    $conn->set_charset('utf8');

    return $conn;
}


function  MYSQLIQuery($sql){
	$conn =  MYSQLIConn();

	$a = [];

	$result = $conn->query($sql);
	if ($conn->errno) die($conn->error);

	while($row = $result->fetch_object())
		$a[] = $row;
	return $a;
}
