<?php
system("clear");
$id = "c353ee9b-381f-4d6f-8c95-3ae8cac9e9da";
echo "\n";
for ($i=1; $i <= 300; $i++) {
	sleep(18); // Recommend 18 second
	$api = curl($id);
	if ($api == "success") {
		echo "$i.Success Send 1GB\n";
	} else {
		echo "$i.Failed Send 1GB\n";
	}
}

function curl($id) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.nabil.my.id/warp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'id='.$id.'');
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
?>
