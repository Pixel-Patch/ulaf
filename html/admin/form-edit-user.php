<?php
if (!file_exists('dbconn.php')) {
  die('Error: dbconn.php not found');
}
include('dbconn.php');

if (!file_exists('get_user_data.php')) {
  die('Error: get_user_data.php not found');
}
include('get_user_data.php');

?>


<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Edit User Form - ULAF | Pixel-Patch Inc. </title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/tagify/tagify.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/config.js"></script>
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
                    <form id="formValidationExamples" class="row g-3" method="post" action="edit_user.php" enctype="multipart/form-data">
                      <!-- Account Details -->

                      <div class="col-12">
                        <h6>1. Account Details</h6>
                        <hr class="mt-0" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editrole">User Type</label>
                        <select id="editrole" name="editrole" class="form-select">
                          <option value="">Select a user type</option>
                          <option value="Student" <?php if (isset($user['Role']) && $user['Role'] == 'Student') echo 'selected'; ?>>Student</option>
                          <option value="Faculty" <?php if (isset($user['Role']) && $user['Role'] == 'Faculty') echo 'selected'; ?>>Faculty</option>
                          <option value="Staff" <?php if (isset($user['Role']) && $user['Role'] == 'Staff') echo 'selected'; ?>>Staff</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="edituserid">User ID</label>
                        <input type="text" id="edituserid" name="edituserid" class="form-control" value="<?php echo htmlspecialchars(isset($user['User_ID']) ? $user['User_ID'] : '', ENT_QUOTES, 'UTF-8'); ?>" aria-label="24-0001" />
                        <input type="hidden" id="currentuserid" value="<?php echo htmlspecialchars(isset($user['User_ID']) ? $user['User_ID'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="edituseridFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editfullname">Full Name</label>
                        <input type="text" id="editfullname" class="form-control" value="<?php echo htmlspecialchars(isset($user['FullName']) ? $user['FullName'] : '', ENT_QUOTES, 'UTF-8'); ?>" name="editfullname" aria-label="John Doe" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editusername">Username</label>
                        <input type="text" id="editusername" class="form-control" value="<?php echo htmlspecialchars(isset($user['Username']) ? $user['Username'] : '', ENT_QUOTES, 'UTF-8'); ?>" aria-label="jdoe1" name="editusername" />
                        <input type="hidden" id="currentusername" value="<?php echo htmlspecialchars(isset($user['Username']) ? $user['Username'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="editusernameFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editpassword">Password</label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="password" id="editpasswordd" name="editpassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
                          <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="ti ti-eye-off"></i></span>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-password-toggle">
                          <label class="form-label" for="edit-user-confirmPass">Confirm Password</label>
                          <div class="input-group input-group-merge">
                            <input class="form-control" type="password" id="edit-user-confirmPass" name="formValidationConfirmPass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
                            <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i class="ti ti-eye-off"></i></span>
                          </div>
                        </div>
                      </div>

                      <!-- Academic Info -->

                      <div class="col-12">
                        <h6 class="mt-2">2. Academic Info</h6>
                        <hr class="mt-0" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editemail">Email</label>
                        <input type="email" class="form-control" id="editemail" name="editemail" value="<?php echo htmlspecialchars(isset($user['Email']) ? $user['Email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="example@example.com" aria-label="example@example.com" required />
                        <input type="hidden" id="currentemail" value="<?php echo htmlspecialchars(isset($user['Email']) ? $user['Email'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="editemailFeedback" class="invalid-feedback"></div>
                      </div>

                      <?php
                      $colleges = [
                        "Undergraduate" => [
                          "College of Agriculture",
                          "College of Arts and Social Sciences",
                          "College of Business Administration and Accountancy",
                          "College of Education",
                          "College of Engineering",
                          "College of Fisheries",
                          "College of Home Science and Industry",
                          "College of Science",
                          "College of Veterinary Science and Medicine"
                        ],
                        "Graduate" => [
                          "Doctor of Philosophy",
                          "Master of Science",
                          "Other Masteral Programs"
                        ],
                        "Other Curricular Offerings" => [
                          "Distance, Open, and Transnational University (DOTUni)",
                          "Institute of Sports, Physical Education and Recreation",
                          "Vocational Course (1-Year Program)"
                        ]
                      ];
                      ?>

                      <div class="col-md-6">
                        <label class="form-label" for="editcollege">College</label>
                        <select id="editcollege" name="editcollege" class="form-select">
                          <option value="">Select a college</option>
                          <?php foreach ($colleges as $label => $group) : ?>
                            <optgroup label="<?php echo $label; ?>">
                              <?php foreach ($group as $college) : ?>
                                <option value="<?php echo $college; ?>" <?php if (isset($user['College']) && $user['College'] == $college) echo 'selected'; ?>>
                                  <?php echo $college; ?>
                                </option>
                              <?php endforeach; ?>
                            </optgroup>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editcourse">Course</label>
                        <select id="editcourse" name="editcourse" class="form-select">
                          <option value="">Select a course</option>
                        </select>
                        <input type="hidden" id="currentcourse" value="<?php echo htmlspecialchars(isset($user['Course']) ? $user['Course'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                      </div>


                      <div class="col-md-6">
                        <label for="editclsuidimage" class="form-label">CLSU ID Image</label>
                        <input class="form-control" type="file" id="editclsuidimage" name="editclsuidimage" />
                      </div>

                      <div class="col-md-12">
                        <label class="form-label" for="editclsuaddress">CLSU Address</label>
                        <input class="form-control" id="editclsuaddress" name="editclsuaddress" value="<?php echo htmlspecialchars(isset($user['CLSU_Address']) ? $user['CLSU_Address'] : '', ENT_QUOTES, 'UTF-8'); ?>" rows="3"></input>
                      </div>

                      <!-- Choose Your Plan -->

                      <div class="col-12">
                        <h6 class="mt-2">3. Personal Details</h6>
                        <hr class="mt-0" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="editavatar">Upload Avatar Image</label>
                        <input type="file" class="form-control" id="editavatar" name="editavatar" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editcontact">Contact</label>
                        <input type="text" class="form-control" id="editcontact" name="editcontact" value="<?php echo htmlspecialchars(isset($user['Contact']) ? $user['Contact'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="+63 988 888 8888" aria-label="+63 988 888 8888" required />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="edithomeaddress">Home Address</label>
                        <textarea class="form-control" id="edithomeaddress" name="edithomeaddress" placeholder="123 Main St, Anytown, PH" aria-label="123 Main St, Anytown, USA" required><?php echo htmlspecialchars(isset($user['Home_Address']) ? $user['Home_Address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="editlinks">Other Social Links (separated by commas)</label>
                        <textarea class="form-control" id="editlinks" name="editlinks" placeholder="m.me/username, viber://add?phonenumber, t.me/username" aria-label="m.me/username, viber://add?phonenumber, t.me/username" required><?php echo htmlspecialchars(isset($user['Social_Links']) ? $user['Social_Links'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                      </div>

                      <div class="col-12">
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
  <script src="../../assets/js/form-validation-edit.js"></script>
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