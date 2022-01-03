<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');

$tokenId = $_GET['tokenId'];

$rangeToken = range(10, 21000);

if (!in_array($tokenId, $rangeToken)) {
    header("Location: /");
}
$nftBoxTest = range(10, 1000);
$nftTicketTest = range(20001, 21000);
$nftBox = range(10001, 10100);
$nftDiamond = range(10101, 10110);
$nftGold = range(10111, 10190);
$nftJackpot = range(10191, 10200);

    $type = 0;
    $name = "Empty";
    $des = "";
    $img = "https://nft.1alo.com/images/v1/rada/mystery_box.png";
if (in_array($tokenId, $nftDiamond)) {
    $img = "https://nft.1alo.com/images/v1/rada/diamond.png";
    $type = 1;
    $name = "Diamond Ticket";
    $des = "Diamond in your hand";
} elseif (in_array($tokenId, $nftJackpot)) {
    $img = "https://nft.1alo.com/images/v1/rada/jackpot.png";
    $type = 2;
    $name = "Jackpot Ticket";
    $des = "Money in your hand";
} elseif (in_array($tokenId, $nftGold)) {
    $type = 3;
    $name = "Gold Ticket";
    $des = "Gold in your hand";
    $img = "https://nft.1alo.com/images/v1/rada/gold.png";
} elseif (in_array($tokenId, $nftBox)) {
    $type = 4;
    $name = "Mystery Box";
    $des = "How Might We?";
    $img = "https://nft.1alo.com/images/v1/rada/mystery_box.png";
} elseif (in_array($tokenId, $nftBoxTest)) {
    $type = 5;
    $name = "Mystery Box";
    $des = "How Might We?";
    $img = "https://nft.1alo.com/images/v1/rada/mystery_box.png";
} elseif (in_array($tokenId, $nftTicketTest)) {
    $type = 6;
    $name = "Gold Ticket";
    $des = "Gold in your hand";
    $img = "https://nft.1alo.com/images/v1/rada/gold.png";
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
