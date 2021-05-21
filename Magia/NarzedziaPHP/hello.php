<!DOCTYPE html>
<html>
<body>


<?php
$data = array("action" => "login", "login" => "magiaapi", "pass" => "u2u38PrtYv");

$url_send = "https://www.magiapolnocy.pl/api/json";

function sendCurl($data, $url) {
$data = json_encode($data);
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,array("json"=>$data));
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
    }

$session_id = sendCurl($data,$url_send);


$obj = json_decode($session_id);
//print $obj->{'sessid'};

$data = array("action"=>"itemsAdd",
    "options" =>array(
        "name"=>"Testowy plakat A5",
        "code"=>"PRODK_554_22",
        "ean"=>"12345654343",
        "weight"=>"0.33",
        "shipping_time"=>1,
        "buy_price"=>"14.00",
        "netto_price"=>"80.99",
        "price"=>"33.00",
        "vat"=>"23",
        "exp_store"=>0,
        "active"=>0,
        "promo"=>1,
        "promo_price"=>"5.99",
        "promo_to"=>"2020-06-30",
        "margin_percent"=>"3",
        "best"=>1,
        "new"=>1,
        "prio"=>1,
        "producer_id"=>90,
        "desc_short"=>"short description example",
        "desc"=>"main description of product",
        "google_title"=>"simple-product-name",
        "google_desc"=>"example-desc",
        "google_key_words"=>"product, sale, store ",
        "pg_id"=>1,
        "tag"=>"product-tag",
        "google_block"=>1
    ),
    "sessid" => $obj->{'sessid'});

$result1 = sendCurl($data,$url_send);

echo json_decode($result1);

?>

</body>
</html> 