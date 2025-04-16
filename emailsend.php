<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>send email</title>

    <!-- <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker1-10-0.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-material-datetimepicker-2-7-1.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/daterangepicker.css" /> -->
    <link href="assets/css/app-style9.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/jquery-ui-1-13-2.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
	<form action="send_email.php" method="POST">
		<label for="name">name</label>
		<input type="text" name="fname">
		<label>mobile number</label>
		<input type="text" name="number">
		<label for="email">email</label>
		<input type="text" name="email">
		<label>date</label>
		<input class="selectdatebirth" name="member_date_of_birth" type="text">
		<button>submit</button>
	</form>
	<button type="submit" data-bs-toggle="modal" data-bs-target="#tenantToTenant" class="btn btn-sm btn-info"><?=$xml->string->tenant?> to <?=$xml->string->tenant?> Transfer</button>

</body>
</html>
<div class="modal fade" id="tenantToTenant">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content border-primary">
            
            <div class="modal-body" id="addUserDiv">
                <form id="tenantToTenantForm" action="controller/userController.php" method="post" enctype="multipart/form-data">
                    
                    
                    <div class="form-group row">
                        <label class="col-lg-2 col-md-3 mt-2 col-form-label form-control-label">agreement_start_date</label>
                        <div class="col-lg-4 col-md-9 mt-2">
                            <input readonly class="form-control selectdatebirth" maxlength="10" name="tenant_agreement_start_date" type="text" value="">
                            <!-- <input readonly class="form-control FromDate" maxlength="10" name="tenant_agreement_start_date" id="tenant_agreement_start_date" type="text" value=""> -->
                        </div>
                        <label class="col-lg-2 col-md-3 mt-2 col-form-label form-control-label">agreement_end_date</label>
                        <div class="col-lg-4 col-md-9 mt-2">
                            <input readonly class="form-control selectdatebirth" maxlength="10" name="tenant_agreement_end_date" id="tenant_agreement_end_date" type="text" value="">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>



<script src="assets/jQuery-3.7.0/jquery-3.7.0.js"></script>
<script src="assets/js/jquery-ui_1_._13_._2.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
$( function() {
	  $(".selectdatebirth").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            todayHighlight: true,
            yearRange: "c-50:c+30",
            // maxDate:date
        });
    //   $( ".selectdatebirth" ).datepicker({
    //   changeMonth: true,
    //   changeYear: true
    // });
	 });
</script>