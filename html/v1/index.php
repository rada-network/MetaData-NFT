<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');

$tokenId = $_GET['tokenId'];

$rangeToken = range(10000, 10010);

if (!in_array($tokenId, $rangeToken)) {
    header("Location: /");
}

$tokenData = array(
  "name" => "Cat #".$tokenId,
  "description" => "#".$tokenId.", the legendary hammer of the Norse god of CAT.",
  "image" => "https://nft.1alo.com/images/v1/".$tokenId.".jpg",
  "points" => 50
);


header('Content-Type: application/json; charset=utf-8');
echo json_encode($tokenData);
