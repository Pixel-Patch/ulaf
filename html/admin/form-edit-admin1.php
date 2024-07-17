<?php

require('dbconn.php');
require('get-admin-data.php');
$title = 'Form Edit Admin - Pages | ULAF Admin';
require 'header.php';
?>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
      <!-- Navbar -->

      <?php require 'navbar.php'; ?>
      <!-- / Navbar -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Menu -->
          <?php require 'menu.php'; ?>
          <!-- / Menu -->

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">User /</span> Edit User</h4>

            <div class="row">
              <!-- FormValidation -->
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Edit User</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3">
                      <!-- Account Details -->

                      <div class="col-12">
                        <h6>1. Account Details</h6>
                        <hr class="mt-0" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editrole">User Role</label>
                        <select id="editrole" name="editrole" class="form-select">
                          <option value="">Select a user role</option>
                          <option value="Admin" <?php if ($admin['user_role'] == 'Admin') echo 'selected'; ?>>Admin</option>
                          <option value="Staff" <?php if ($admin['user_role'] == 'Staff') echo 'selected'; ?>>Staff</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="edituserid">ID Number</label>
                        <select class="form-control" id="edituserid" name="edituserid" aria-label="IDnumber"></select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editusername">Username</label>
                        <input type="text" class="form-control" id="editusername" value="<?php echo $admin['username']; ?>" placeholder="Username" name="editusername" aria-label="Username" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editavatar">Upload Avatar Image</label>
                        <input type="file" class="form-control" id="editavatar" name="editavatar" />
                        <input type="hidden" id="current_avatar" value="<?php echo $admin['avatar_image']; ?>" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addemail">Email</label>
                        <input type="text" id="editemail" class="form-control" value="<?php echo $admin['email']; ?>" placeholder="Email" aria-label="Email" name="editemail" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editcontact">Contact</label>
                        <input type="text" class="form-control phone-mask" id="editcontact" value="<?php echo $admin['contact']; ?>" placeholder="Contact" aria-label="Contact" name="editcontact" required />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editpassword">Password</label>
                        <input type="password" id="editpassword" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-label="editpassword" name="editpassword" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
                        <input type="password" id="formValidationConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-label="Confirm Password" name="formValidationConfirmPass" />
                      </div>

                      <div class="col-12">
                        <div id="submitFeedback" class="invalid-feedback"></div>
                        <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>

                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <!-- /FormValidation -->
            </div>
          </div>
          <!--/ Content -->

          <!-- Footer -->
          <?php require 'footer.php'; ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>

      <!--/ Layout container -->
    </div>
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>

  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>

  <!--/ Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../assets/vendor/libs/tagify/tagify.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/form-validation-edit-admin.js"></script>
  <!-- #region -->

  <script>
    $(document).ready(function() {
      function checkValue(field, value, currentValue) {
        console.log("Field: " + field);
        console.log("Value: " + value);
        console.log("Current Value: " + currentValue);

        // Add debugging code to check the values of field, value, and currentValue
        if (!field || !value || !currentValue) {
          console.error("Missing required parameters");
          return;
        }

        // Log the request URL to the console
        console.log(`Request URL: edit-user-check.php?field=${field}&value=${value}&currentValue=${currentValue}`);

        // Send the request using the GET method
        fetch(`edit-user-check.php?field=${encodeURIComponent(field)}&value=${encodeURIComponent(value)}&currentValue=${encodeURIComponent(currentValue)}`)
          .then(response => response.json())
          .then(data => {
            console.log("Response: " + JSON.stringify(data));

            var feedbackId = field + 'Feedback';
            console.log("Feedback ID: " + feedbackId);
            console.log("Feedback element: " + $('#' + feedbackId));

            // Check if the response is valid
            if (!data.valid) {
              // Display an error message to the user
              $('#' + feedbackId).text(data.message)
                .addClass('invalid-feedback')
                .removeClass('is-invalid');

              // Set the input element to invalid
              var inputId = field.replace('edit', '');
              $('#' + inputId).addClass('is-invalid')
                .removeClass('is-valid');
            } else {
              // Hide the feedback message and set the input element to valid
              $('#' + feedbackId).text('')
                .addClass('is-valid')
                .removeClass('invalid-feedback');

              var inputId = field.replace('edit', '');
              $('#' + inputId).addClass('is-valid')
                .removeClass('is-invalid');
            }
          })
          .catch(error => console.error("Error: " + error));
      }

      function listenForChanges(fieldId, currentValueId) {
        $(`#${fieldId}`).on('input', function() {
          var newValue = $(this).val();
          var currentValue = $(`#${currentValueId}`).val();
          checkValue(fieldId, newValue, currentValue);
        });
      }

      listenForChanges('edituserid', 'currentuserid');
      listenForChanges('editusername', 'currentusername');
      listenForChanges('editemail', 'currentemail');
    });
  </script>



</body>

</html>