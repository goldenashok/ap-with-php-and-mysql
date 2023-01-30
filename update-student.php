<?php
    /*URL : http://localhost/web/rest-api/update-student.php
    Method: POST
    Post Data : {
    "sid": "7",
	"sname": "Ashok",
	"sage": "33",
	"scity": "chennai"
    }
    */
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

    // To update is similar to insert. Except in rest api update request is done throough PUT method

    $data = json_decode(file_get_contents("php://input"), true);

    $sid = $data['sid'];
    $sname = $data['sname'];
    $sage = $data['sage'];
    $scity = $data['scity'];

    include 'config.php';

    $sql = "update studentdata set name = '$sname', age = '$sage', city = '$scity' where id = '$sid'";

    if (mysqli_query($conn, $sql)) {
        $datas['status'] = 'success';
        $datas['msg'] = 'Data Updated Successfully!';
        echo json_encode($datas);
    } else {
        $datas['status'] = 'success';
        $datas['msg'] = 'Data Failed to be Updated!';
        echo json_encode($datas);
    }

?>