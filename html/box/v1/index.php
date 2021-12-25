<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');

$tokenId = $_GET['tokenId'];

$rangeToken = range(1001, 1100);

if (!in_array($tokenId, $rangeToken)) {
    header("Location: /");
}
$tokenData = array(
  "name" => "Mystery Box",
  "description" => "How Might We?",
  "image" => "https://nft.1alo.com/images/v1/box/mystery_box.png",
  "tokenId" => intval($tokenId)
);


header('Content-Type: application/json; charset=utf-8');
echo json_encode($tokenData);
