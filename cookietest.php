<?php
	$encryption_key = 'your_secret_key'; 

    	// echo $encryption_key;die();
	function decrypt($data, $key) {
    	$data = base64_decode($data);
    	$iv_length = openssl_cipher_iv_length('aes-256-cbc');
    	$iv = substr($data, 0, $iv_length);
    	$encrypted_data = substr($data, $iv_length);
    	return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
	}

 	$decrypted_fname = decrypt($_COOKIE['fname'], $encryption_key);
		echo $decrypted_fname;

?>