<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Complaint Form</title>
  <!-- <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/> -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .select2-container--default .select2-selection--single {
      height: calc(2.25rem + 2px);
    }
    .select2-dropdown--below {
      z-index: 5000;
    }
  </style>
</head>
<body>
  <a data-bs-toggle="modal" data-bs-target="#addComplaint" class="btn btn-primary text-white float-end btn-sm waves-effect waves-light">Raise</a>

  <div class="modal fade" id="addComplaint" tabindex="-1" aria-labelledby="addComplaintLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-primary">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="addComplaintLabel">Complaint</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="complaintValidation" method="POST" action="controller/complainController.php" enctype="multipart/form-data">
            <div class="mb-3 row">
              <label for="unit_selection" class="col-sm-3 col-form-label">Unit <span class="required">*</span></label>
              <div class="col-sm-12">
                <select class="form-control single-select" id="unit_selection" name="user_id" required>
                  <option value="">-- Select --</option>
                  <option value="akshay">-- Akshay --</option>
                  <option value="prdip">-- Prdip --</option>
                  <option value="jigo">-- Jigo --</option>
                </select>
              </div>
              <div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div>
              <div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div>
              <div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div><div class="col-sm-12">
                <label class="col-sm-3 form-control-label">complaint<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input maxlength="100" type="text" class="form-control txtNumeric" required="" name="compalain_title">
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <!-- <script src="assets/plugins/select2/js/select2.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.single-select').select2({
        dropdownParent: $('#addComplaint')
      });
    });
  </script>
</body>
</html>
