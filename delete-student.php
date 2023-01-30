<?php
    /*URL : http://localhost/web/rest-api/delete-student.php
    Method: POST
    Post Data : {
    "sid": "7"
    }
    */
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

    // To delete in rest api, we use DELETE method
    $data = json_decode(file_get_contents("php://input"), true);

    $sid = $data['sid'];

    include 'config.php';
    $sql = "delete from studentdata where id = '$sid'";

    if (mysqli_query($conn, $sql)) {
        $datas['status'] = 'success';
        $datas['msg'] = 'Data Deleted Successfully!';
        echo json_encode($datas);
    } else {
        $datas['status'] = 'success';
        $datas['msg'] = 'Data Failed to be Deleted!';
        echo json_encode($datas);
    }

?>