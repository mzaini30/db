<?php
$db = new PDO("sqlite:db.sqlite");
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Origin: *');
function olah($sql, $db){
	$stmt = $db->query($sql);
	$survery = [];
	$a = [];
	do {
	    if ($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)){
	        array_push($a, $rows);
	    }
	} while ($stmt->nextRowset());
	return $a[0];
}
