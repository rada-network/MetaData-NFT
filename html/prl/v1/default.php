<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');


$tokenData = array(
  "name" => "",
  "description" => "",
  "image" => "",
  "tokenId" => 0
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($tokenData);
