<?php
    /*URL : http://localhost/web/rest-api/fetch-all-student.php
    Method: GET
    */
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');   

    include 'config.php';

    $sql = "select * from studentdata";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = array();
        while($rs = mysqli_fetch_assoc($result)) {
            $student[] = $rs;
        }
        $data = array();
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