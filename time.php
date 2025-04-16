<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style type="text/css">
	#spinner
	{	
	    position: fixed;
	    left: 0px;
	    top: 0px;
	    width: 100%;
	    height: 100%;
	    z-index: 9999;
	    background: url(img/lg.gif) 50% 50% no-repeat;
	}
</style>
<body>
	<div id="spinner"> </div>
	<?php
		$time = "19:25";
		$akshay = date('g:i A',strtotime($time));
		echo $akshay;
	?>
</body>
</html>
<script type="">
  	$(window).on('load', function() { 
        $("#spinner").fadeOut("slow"); 
    });
</script>
