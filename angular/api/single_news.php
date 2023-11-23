<?php
include 'connect.php';
$news = [];

$postdata = file_get_contents("php://input");
$result = json_decode($postdata);

if (isset($result->id)) {
    $id = $result->id;

    $sql = "SELECT * FROM  tblposts WHERE id= '$id'";
    if ($result = $db->query($sql)) {
        if ($row = $result->fetch_assoc()) {
			$news[$i]['id'] = $row['id'];
			$news[$i]['PostTitle'] = $row['PostTitle'];
			$news[$i]['CategoryId'] = $row['CategoryId'];
			$news[$i]['SubCategoryId'] = $row['SubCategoryId'];
			$news[$i]['PostDetails'] = $row['PostDetails'];
			$news[$i]['PostingDate'] = $row['PostingDate'];
			$news[$i]['UpdationDate'] = $row['UpdationDate'];
			$news[$i]['Is_Active'] = $row['Is_Active'];
			$news[$i]['PostUrl'] = $row['PostUrl'];
			$news[$i]['PostImage'] = $row['PostImage'];
			$news[$i]['viewCounter '] = $row['viewCounter'];
			$news[$i]['postedBy'] = $row['postedBy'];
			$news[$i]['lastUpdatedBy'] = $row['lastUpdatedBy'];

            echo json_encode(['data' => $news]);
        } else {
            echo json_encode(['data' => []]); // Send an empty array if no data is found
        }
    } else {
        http_response_code(404);
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Invalid input data']);
}
