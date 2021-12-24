<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');


$tokenData = array(
  "name" => "Mystery Box",
  "description" => "How Might We?",
  "image" => "https://nft.1alo.com/images/v1/box/mystery_box.jpg",
  "tokenId" => 0
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($tokenData);
