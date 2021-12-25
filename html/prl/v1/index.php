<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');

$tokenId = $_GET['tokenId'];

$rangeToken = range(100001, 100100);

if (!in_array($tokenId, $rangeToken)) {
    header("Location: /");
}

$nftDiamond = range(100001, 100010);
$nftGold = range(100011, 100090);
$nftJackpot = range(100091, 100100);

$type = 0;
$name = "Gold Ticket";
$des = "Gold in your hand";
$img = "https://nft.1alo.com/images/v1/prl/gold.png";
if (in_array($tokenId, $nftDiamond)) {
    $img = "https://nft.1alo.com/images/v1/prl/diamond.png";
    $type = 1;
    $name = "Diamond Ticket";
    $des = "Diamond in your hand";
} elseif (in_array($tokenId, $nftJackpot)) {
    $img = "https://nft.1alo.com/images/v1/prl/jackpot.png";
    $type = 2;
    $name = "Jackpot Ticket";
    $des = "Money in your hand";
}

$tokenData = array(
    "name" => $name,
    "description" => $des,
    "image" => $img,
    "type" => $type,
    "tokenId" => intval($tokenId)
);


header('Content-Type: application/json; charset=utf-8');
echo json_encode($tokenData);
