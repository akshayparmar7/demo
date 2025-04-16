<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/DataTables/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/DataTables/css/buttons.bootstrap5.min.css"> -->
  </head>
  <body>
    <table id="exampleReport" class="table table-bordered">
       <input type="hidden" id="reportName" value="Employee Report">

      <thead>
        <tr>
          <th>#</th>
          <th>Block</th>
          <th>Unit</th>
          <th>Employee Code</th> <!----akshay(12-08-2024) add line--->
          <th>Unit Type</th>
          <th>Type</th>
          <th>Name</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Employee Id</th>
          <th>Department</th>
          <th>Designation</th>
          <th>Qualification</th>
          <th>Blood Group</th>
          <th>DOB</th>
          <th>Date Of Allotment </th>
          <th>Residing in township</th>
          <th>Device</th>
          <th>Last App Access</th>
          <th>Owner Company</th>
          <th>Leased Company</th>
          <th>Occupant Company</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>akshay</td>
          <td>sandip</td>
          <td>jaydip</td>
          <td>pardip</td>
          <td>jigoi</td>
          <td>yogesh</td>
          <td>parkash</td>
          <td>hardik</td>
          <td>mehul</td>
          <td>parsh</td>
          <td>meet</td>
          <td>jaydeep</td>
          <td>ram</td>
          <td>raju</td>
          <td>pathik</td>
          <td>jeet</td>
          <td>hitesh</td>
          <td>dharmik</td>
          <td>dhaval</td>
          <td>ramesh</td>
          <td>sanket</td>
          <td>vijay</td>
          <td>kaushik</td>

        </tr>


      </tbody>  

    </table>

  </body>
  </html>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="assets/DataTables/js/jquery.dataTables.min.js"></script>
  <script src="assets/DataTables/js/dataTables.bootstrap5.min.js"></script>

  <script src="assets/DataTables/js/dataTables.buttons.min.js"></script>
  <script src="assets/DataTables/js/buttons.bootstrap5.min.js"></script>
  <script src="assets/DataTables/js/jszip.min.js"></script>
  <script src="assets/DataTables/js/pdfmake.min.js"></script>
  <script src="assets/DataTables/js/vfs_fonts.js"></script>
  <script src="assets/DataTables/js/buttons.html5.min.js"></script>
  <script src="assets/DataTables/js/buttons.print.min.js"></script>
  <script src="assets/DataTables/js/buttons.colVis.min.js"></script>
  <script>
  var table1 = $('#exampleReport').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    "dom": 'Blfrtip',
    "buttons": [
      {
        extend: 'copyHtml5',
        title: $("#reportName").val(),
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        title: $("#reportName").val(),
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excelHtml5',
        title: $("#reportName").val(),
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdfHtml5',
        title: $("#reportName").val(),
        orientation: 'landscape',
        pageSize: 'LEGAL',
        titleAttr: 'PDF',
        exportOptions: {
          columns: ':visible'
        }
      },
      'colvis'
    ]
  });
</script>
