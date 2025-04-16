<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>encrypt to decrypt</title>
</head>
<style type="text/css">
	.decrypt-form{
		border: 1px solid black;
		width: 400px;
		margin: auto;
		margin-top: 30px;
	}
	.form{
		text-align: center;
		margin-top: 10px;
		margin-bottom: 10px;
	}
</style>
<body>
	<form class="decrypt-form" action="" method="POST">
		<div class="form">
			<label>Encrypt Token</label>
			<input type="text" name="encrypt_token"><br><br>
			<label>Key</label>
			<input type="text" name="Key"><br><br>
			<button>Submit</button>
		</div>
	</form>
</body>
</html>


<?php
	$encryption_method = "AES-256-CBC";
	$key = $_POST['Key'];
	$encrypt_token = $_POST['encrypt_token'];

	$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

	// $encryption_key = 'your_secret_keywwwwwwwwwwwww'; 
	// $encryption_key = '4c5cfchyu4ioj1748eb31dcc609736FK'; 

	// $data = "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";

	// $encrypted = openssl_encrypt($encrypt_token, 'aes-256-cbc', $key,0, $iv);
	// echo $encrypted;

	$decrypted_data = openssl_decrypt($encrypt_token, $encryption_method, $key, 0, $iv);

	if($decrypted_data == true){
		echo "Decrypted: " . $decrypted_data . "\n";
	}
?>