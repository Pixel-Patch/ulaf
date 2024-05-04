<!DOCTYPE html>
<html>

<head>
  <title>Test Form</title>
  <!-- Include Bootstrap CSS if needed -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h5>Add New User</h5>
    <form class="add-new-user pt-0" id="addNewUserForm" action="add_employee.php" method="POST">
      <div class="mb-3">
        <label class="form-label" for="user-role">User Role</label>
        <select id="user-role" class="form-select" name="userRole">
          <option value="Admin">Admin</option>
          <option value="AdminStaff">Admin Staff</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="add-user-IDnumber">ID Number</label>
        <?php
        require 'dbconn.php';
        // Query the database to get all user IDs
        $query = "SELECT User_ID FROM users";
        $result = mysqli_query($conn, $query);
        ?>
        <select class="form-select" id="add-user-IDnumber" name="userIDnumber">
          <option value="">Select a user ID</option>
          <?php
          // Loop through the results and output each user ID as an option
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value=\"{$row['User_ID']}\">{$row['User_ID']}</option>";
          }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="add-user-username">Username</label>
        <input type="text" class="form-control" id="add-user-username" placeholder="John Doe" name="userUsername" aria-label="John Doe" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="add-user-password">Password</label>
        <input type="password" id="formValidationPass" class="form-control" placeholder="Password" aria-label="formValidationPass2" name="userPassword" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="add-user-password">Confirm Password</label>
        <input type="password" id="formValidationConfirmPass" class="form-control" placeholder="Confirm Password" aria-label="formValidationConfirmPass2" name="userPasswordConfirm" />
      </div>
      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add New User</button>
      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </form>
  </div>
</body>

</html>