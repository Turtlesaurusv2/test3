<?php
include('db_conn.php');


$results = $conn->prepare("SELECT product.pd_id, product.pd_c, product.quantity ,product.sub_id ,inv_sub.inv_id from product INNER JOIN inv_sub ON product.sub_id = inv_sub.sub_id");
$results->execute();

$res["result"] = $results->fetchAll(PDO::FETCH_ASSOC);

exit( json_encode( $res ) );



?>