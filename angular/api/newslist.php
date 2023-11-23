<?php
include 'connect.php';
$news = [];

$sql = "SELECT * FROM  tblposts";
if($result = $db->query($sql))
{
	$i = 0;
	while($row = $result->fetch_assoc())
	{
		$news[$i]['id'] = $row['id'];
		$news[$i]['PostTitle'] = $row['PostTitle'];
		$news[$i]['CategoryId'] = $row['CategoryId'];
		$news[$i]['SubCategoryId'] = $row['SubCategoryId'];
		$news[$i]['PostDetails'] = substr($row['PostDetails'],0,150);
		$news[$i]['PostingDate'] = $row['PostingDate'];
		$news[$i]['UpdationDate'] = $row['UpdationDate'];
		$news[$i]['Is_Active'] = $row['Is_Active'];
		$news[$i]['PostUrl'] = $row['PostUrl'];
		$news[$i]['PostImage'] = $row['PostImage'];
		$news[$i]['viewCounter '] = $row['viewCounter'];
		$news[$i]['postedBy'] = $row['postedBy'];
		$news[$i]['lastUpdatedBy'] = $row['lastUpdatedBy'];
		$i++;
	}
	echo json_encode(['data' => $news]);
}
else
{
	http_response_code(404);
}