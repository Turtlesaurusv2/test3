<?php 
include('db_conn.php');

$data = json_decode( $_POST["json"], true );

$name = $data['name'];

$response = [];

//ห้ามมีตัวเลข
if( !preg_match("/^[a-zA-Zก-๏เ ]+$/", $name) ) {
    $response["message"] = "name ห้ามมีตัวเลข";
    $response["success"] = 0;
    exit(json_encode( $response ));
}else{
        //บันทึกข้อมูล
        $stmt = $conn->prepare("INSERT INTO inv_main SET name = :name"); 
        $stmt->execute([":name" => $name]);

        $response["message"] = "บันทึกข้อมูลเรียบร้อยแล้ว";
        $response["success"] = 1;
}


exit(json_encode( $response ));
?>