<?php
    /*URL : http://localhost/web/rest-api/search-student.php
    Method: POST
    Post Data : {
	"search": "sub"
    }
    */
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');

    $data = json_decode(file_get_contents("php://input"), true);

    $searchterm = $data['search'];
    include 'config.php';

    $sql = "select * from studentdata where name like '%$searchterm%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = array();
        while($rs = mysqli_fetch_assoc($result)) {
            $student[] = $rs;
        }
        $data = array();
        $data['status'] = 'success';
        $data['msg'] = 'Search list';
        $data['data'] = $student;
        echo json_encode($data);
    } else {  
        $data = array();
        $data['msg'] = 'No Data Found to search query!';
        $data['status'] = 'success';
        echo json_encode($data);
    }
?>