<?php
    /*URL : http://localhost/web/rest-api/fetch-single-student.php
    Method: POST
    Post Data : {'sid': 2}
    */
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $data = json_decode(file_get_contents("php://input"), true);
    $student_id = $data['sid'];
    include 'config.php';

    $sql = "select * from studentdata where id = $student_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) { 
        $student = mysqli_fetch_assoc($result);
        $data['status'] = 'success';
        $data['msg'] = 'Student list';
        $data['data'] = $student;
        echo json_encode($data);
    } else {
        $data = array();
        $data['msg'] = 'No Data Found!';
        $data['status'] = 'success';
        echo json_encode($data);
    }
?>