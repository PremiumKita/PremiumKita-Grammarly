<?php  

function get($url = null, $headers = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if ($headers != "") {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}

	return $result = curl_exec($ch);
	curl_close($ch);
}

function number($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function create_account() {
	echo $data = "\e[92m[SUKSES]\e[0m wulankita".number(6)."@gmail.com | wulankita123 \n\r";
	$fh = fopen("result.txt", "a");
	fwrite($fh, "wulankita".number(6)."@gmail.com | wulankita123 \n\r");
	fclose($fh);
}

echo "\e[96m---------------------------\n";
echo "|                         |\n";
echo "|     Grammarly Premium   |\n";
echo "|      By PremiumKita     |\n";
echo "|                         |\n";
echo "---------------------------\n";


echo "\e[93mJumlah Akun : ";
$banyak = trim(fgets(STDIN));
echo "\n";
echo "\e[93mSEDANG MEMBUAT AKUN\n";

for ($i = 0; $i < $banyak ; $i++) {
	sleep(3);
	flush();
	create_account();
}
echo "====================================================\n";
echo "Akun Grammarly Premium \e[92mSUKSES\e[0m Dibuat Cek result.txt\n";
echo "====================================================\n";

?>