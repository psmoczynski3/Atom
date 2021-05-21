<!DOCTYPE html>
<html>
<body>


<?php

$data = array("action" => "login", "login" => "magiaapi", "pass" => "u2u38PrtYv");

$url_send = "https://www.magiapolnocy.pl/api/json";

function sendCurl($data, $url) {
	$data = json_encode($data);
    $ch = curl_init($url);
	curl_setopt( $ch, CURLOPT_POST, true);
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
print $obj->{'sessid'};

$data = array("action"=>"ordersGetOne",
    "options" => "3518",
    "sessid" => $obj->{'sessid'});

$result1 = sendCurl($data,$url_send);
#$obj1 =  json_encode(json_decode(file_get_contents($result1), JSON_PRETTY_PRINT));
$obj1 =  json_encode(json_decode($result1, JSON_PRETTY_PRINT));
#print $obj1->{'order'};

echo htmlentities ($obj1);





?>

</body>
</html> 