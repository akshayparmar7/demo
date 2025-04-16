<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

	$abc = curl_init();
	curl_setopt($abc, CURLOPT_URL, "https://serpapi.com/blog/how-to-use-curl-in-php/");
	curl_exec($abc);
	curl_close($abc);
	curl_setopt(ch, option, value)


	?>
</body>
</html>