<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container mt-3">
   <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#addModal">
    Add</button>
    <!-- The Modal -->
  <div class="modal fade" id="addModal">
   <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Employee</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form id="addEmployee">
            <div class="mb-3 mt-3">
              <label for="first_name" class="form-label">first Name:</label>
              <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
          </div>
          <div class="mb-3 mt-3">
            <label for="last_name" class="form-label">last Name:</label>
            <input type="text" class="form-control" id="last_name" placeholder="last Name" name="last_name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">email:</label>
            <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="phone" name="phone" required>
        </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>   
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
   <h1  style="background-color:Tomato;;">Employee Details</h1>
    <table class="table table-dark">  
     <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ram</td>
          <td>kumar</td>
          <td>ram@example.com</td>
          <td>5678765432</td>
          <td> 
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
            <button style="margin-left: 10px;" type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
      
      </tbody>
    </table>
       <!-- The Modal -->
  <div class="modal fade" id="editModal">
   <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">update Employee</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form id="addEmployee">
            <div class="mb-3 mt-3">
              <label for="first_name" class="form-label">first Name:</label>
              <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
          </div>
          <div class="mb-3 mt-3">
            <label for="last_name" class="form-label">last Name:</label>
            <input type="text" class="form-control" id="last_name" placeholder="last Name" name="last_name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">email:</label>
            <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="phone" name="phone" required>
        </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>   
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- ajax quary -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#addEmployee").submit(function(e){
    e.preventDefault();
    var values = {};
    $.each($("#addEmployee").serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });
    console.log(values);
    $.post("insert.php",
    values,
    function(data,status){
     console.log("Data: " + data + "\nStatus: " + status); 
     $('#addModal').modal('toggle');
    });
  });
});
</script>
</body>
</html>

</body>
</html>