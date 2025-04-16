<?php echo $_COOKIE['fname12']; ?>
<form method="post" id="qrcode">
	<center>
		<input type="text" name="name" placeholder="Enter The Name"><br><br>
		<input type="text" name="number" placeholder="Enter The Mobile Nmuber"><br><br>
		<input type="submit" name="submit" id="submit">
	</center>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	$("#qrcode").submit(function(event) {
		event.preventDefault();
		$("#submit").attr("disabled",true);
		window.setTimeout(akshay,10000);
	});

	function akshay(){
		document.getElementById('submit').disabled = false;
	}
</script>
<?php
	// ini_set('display_errors', '1');
	// ini_set('display_startup_errors', '1');
	// error_reporting(E_ALL);

	include "phpqrcode/qrlib.php";
	if(isset($_POST['submit'])){
		$path = 'img/';
		$qrcode = $path.$_POST['name'].".png";
		$number = $_POST['number'];

		echo '<center>'.$_POST['name']." your qr code is here</center>";
		?>
		<center><img src="img/<?php echo $_POST['name'] ?>.png"> </center>
		<?php
		QRcode::png($number,$qrcode);
		
	}
?>