<?php
include('db_conn.php');


$results = $conn->prepare("SELECT * FROM inv_main  LIMIT 0,50");
$results->execute();

$res["result"] = $results->fetchAll(PDO::FETCH_ASSOC);

exit( json_encode( $res ) );



?>