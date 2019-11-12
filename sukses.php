<?php
function mintaotp($msisdn,$ReqID,$imei){
	$bod = array( 
		"Header"=>null,
 		"Body"=>[
  			"Header"=>[
   				"ReqID"=>"$ReqID",
   				"IMEI"=>"$imei"],
  			"LoginSendOTPRq"=>[
   			"msisdn"=>"$msisdn"]],
   		"sessionId"=>null,
 		"onNet"=>"True",
 		"platform"=>"02",
 		"serviceId"=>"",
 		"packageAmt"=>"",
 		"reloadType"=>"",
 		"reloadAmt"=>"",
 		"packageRegUnreg"=>"",
 		"appVersion"=>"3.8.2",
 		"sourceName"=>"Others",
 		"sourceVersion"=>"",
 		"screenName"=>"login.enterLoginNumber");
	$body = json_encode($bod);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://my.xl.co.id/pre/LoginSendOTPRq');
	$header = array(
		'Content-Type: application/json',
  		'Keep-Alive: true');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	$hasil = curl_exec($ch);
	$hasil1 = explode(',', $hasil);
}
if (isset($_POST['msisdn']))
{
$msisdn = $_POST['msisdn'];
$ReqID = "054410";
$imei = "073527538539635";
$execute = mintaotp($msisdn, $ReqID, $imei);
print "<font color='red'>";
print $execute;
}

if (!empty($msisdn))
{
    echo " ";
    
}
else
{die("Anda Harus Meminta OTP Terlebih Dahulu :v");
}
?>
	<!DOCTYPE html>
	<html>
		<head>
			    <link rel="stylesheet" type="text/css" href="style.css">
			    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Iceland" />
			<style type="text/css">
			h3 { font-family: iceland; font-size: 100px; font-style: italic; font-variant: normal; font-weight: 1000; line-height: 200px; } p { font-family: Iceland; font-size: 22px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: Iceland; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: Iceland; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; }
</style>
</head>
<body>
                <center><h3><?php echo " SUKSES MENGIRIM OTP KE NOMOR : $msisdn, $execute";?></h3></center>
<p>Scrip Login Dan Minta Passwod , Kalian Cari Sendir Yaaa!!!</p>

<p>
</p>www.id-bagus.cf

</body>
                </html>