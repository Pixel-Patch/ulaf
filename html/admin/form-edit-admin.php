<?php
require('dbconn.php');
require('get-admin-data.php');
$title = 'Form Edit Admin - Pages | ULAF Admin';
require 'header.php';
?>
</head>

<body>
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
      <?php require 'navbar.php'; ?>

      <div class="layout-page">
        <div class="content-wrapper">
          <?php require 'menu.php'; ?>

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">User /</span> Edit User</h4>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Edit User</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3" method="post" action="edit-admin.php?id=<?php echo htmlspecialchars(isset($admin['id']) ? $admin['id'] : '', ENT_QUOTES, 'UTF-8'); ?>" enctype="multipart/form-data">
                      <div class="col-12">
                        <h6>Account Details</h6>
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
                        <label class="form-label" for="edituserid">User ID</label>
                        <select class="form-control" id="edituserid" name="edituserid" aria-label="IDnumber">
                          <option value="">Select User ID</option>
                          <?php
                          if (isset($admin['id_number'])) {
                            $id_number = htmlspecialchars($admin['id_number'], ENT_QUOTES, 'UTF-8');
                            echo "<option value=\"$id_number\" selected>$id_number</option>";
                          }
                          ?>
                        </select>
                        <input type="hidden" id="currentuserid" value="<?php echo htmlspecialchars(isset($admin['id_number']) ? $admin['id_number'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="edituseridFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editusername">Username</label>
                        <input type="text" id="editusername" class="form-control" value="<?php echo htmlspecialchars(isset($admin['username']) ? $admin['username'] : '', ENT_QUOTES, 'UTF-8'); ?>" aria-label="jdoe1" name="editusername" />
                        <input type="hidden" id="currentusername" value="<?php echo htmlspecialchars(isset($admin['username']) ? $admin['username'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="editusernameFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editavatar">Upload Avatar Image</label>
                        <input type="file" class="form-control" id="editavatar" name="editavatar" />
                        <input type="hidden" id="current_avatar" value="<?php echo htmlspecialchars($admin['avatar_image'], ENT_QUOTES, 'UTF-8'); ?>" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editemail">Email</label>
                        <input type="email" class="form-control" id="editemail" name="editemail" value="<?php echo htmlspecialchars(isset($admin['email']) ? $admin['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="example@example.com" aria-label="example@example.com" required />
                        <input type="hidden" id="currentemail" value="<?php echo htmlspecialchars(isset($admin['email']) ? $admin['email'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="editemailFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editcontact">Contact</label>
                        <input type="text" class="form-control phone-mask" id="editcontact" value="<?php echo htmlspecialchars(isset($admin['contact']) ? $admin['contact'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Contact" aria-label="Contact" name="editcontact" required />
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
            </div>
          </div>

          <?php require 'footer.php'; ?>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="layout-overlay layout-menu-toggle"></div>
  <div class="drag-target"></div>

  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../assets/vendor/js/menu.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../assets/vendor/libs/tagify/tagify.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/form-validation-edit-admin.js"></script>

  <script>
    $(document).ready(function() {
      function checkValue(field, value, currentValue) {
        console.log("Field: " + field);
        console.log("Value: " + value);
        console.log("Current Value: " + currentValue);

        if (!field || !value || !currentValue) {
          console.error("Missing required parameters");
          return;
        }

        fetch(`edit-admin-check.php?field=${encodeURIComponent(field)}&value=${encodeURIComponent(value)}&currentValue=${encodeURIComponent(currentValue)}`)
          .then(response => response.json())
          .then(data => {
            console.log("Response: " + JSON.stringify(data));

            var feedbackId = field + 'Feedback';

            if (!data.valid) {
              $('#' + feedbackId).text(data.message).show();
              $('#' + field).addClass('is-invalid').removeClass('is-valid');
            } else {
              $('#' + feedbackId).text('').hide();
              $('#' + field).addClass('is-valid').removeClass('is-invalid');
            }
          })
          .catch(error => console.error("Error: " + error));
      }

      function listenForChanges(fieldId, currentValueId) {
        $('#' + fieldId).on('input', function() {
          var newValue = $(this).val();
          var currentValue = $('#' + currentValueId).val();
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