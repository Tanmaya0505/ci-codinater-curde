<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap.min.css">
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  //background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</head>
<body>
  <table id="example" class="table table-hover table-bordered" style="width:100%">
    <div class="dt-buttons">          <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span></button> <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example" type="button"><span>CSV</span></button> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example" type="button"><span>PDF</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span></button> </div>
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data as  $value) {
            # code...
          ?>
            <tr>
                <td><?php echo $value->name; ?></td>
                <td><?php echo $value->email; ?></td>
                <td><?php echo $value->dob; ?></td>
                <td><?php echo $value->gender; ?></td>  
                 <td>
              <!-- <a class="btn btn-danger" href="deletedata?id='<?php //echo $value->id; ?>'">Delete</a> -->
              <a class="btn btn-danger" href="<?php echo base_url("deletedata/id/".$value->id) ?>">Delete</a>
              <a class="btn btn-primary" href="<?php echo base_url("edite/id/".$value->id) ?>">Edit</a>
          </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="text-center">Already have an account? <a href="logout">LOG out</a></div>
   <!--  <form action="">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form> -->
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  // $(function(){
  //   $("#example").dataTable();
  // })

  $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
  </script>
</body>
</html>