<?php 
include('db_conn.php');

$data = json_decode( $_POST["json"], true );


$sub_name = $data['sub_name'];
$inv_id = $data['inv_id'];

$response = [];

//ห้ามมีตัวเลข
if( !preg_match("/^[a-zA-Zก-๏เ ]+$/", $sub_name) ) {
    $response["message"] = "name ห้ามมีตัวเลข";
    $response["success"] = 0;
    exit(json_encode( $response ));
}else{
        //บันทึกข้อมูล
        $stmt = $conn->prepare("INSERT INTO inv_sub SET sub_name = :sub_name, inv_id = :inv_id"); 
        $stmt->execute([":sub_name" => $sub_name, ":inv_id" => $inv_id]);

        $response["message"] = "บันทึกข้อมูลเรียบร้อยแล้ว";
        $response["success"] = 1;
}


exit(json_encode( $response ));
?>