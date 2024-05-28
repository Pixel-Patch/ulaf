<?php
if (!file_exists('dbconn.php')) {
  die('Error: dbconn.php not found');
}
include('dbconn.php');
?>

<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Add User Form - ULAF | Pixel-Patch Inc. </title>

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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">End-User /</span> Add New User</h4>

            <div class="row">
              <!-- FormValidation -->
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Add User</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3" method="post" action="add_user.php" enctype="multipart/form-data">
                      <!-- Account Details -->

                      <div class="col-12">
                        <h6>1. Account Details</h6>
                        <hr class="mt-0" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addrole">User Type</label>
                        <select id="addrole" name="addrole" class="form-select">
                          <option value="">Select a user type</option>
                          <option value="Student">Student</option>
                          <option value="Faculty">Faculty</option>
                          <option value="Staff">Staff</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="adduserid">User ID</label>
                        <input type="text" id="adduserid" name="adduserid" class="form-control" placeholder="24-0001" aria-label="24-0001" />
                        <div id="userIDFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addfullname">Full Name</label>
                        <input type="text" id="addfullname" class="form-control" placeholder="John Doe" name="addfullname" aria-label="John Doe" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addusername">Username</label>
                        <input type="text" id="addusername" class="form-control" placeholder="jdoe1" aria-label="jdoe1" name="addusername" />
                        <div id="usernameFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addpassword">Password</label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="password" id="addpassword" name="addpassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
                          <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="ti ti-eye-off"></i></span>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-password-toggle">
                          <label class="form-label" for="add-user-confirmPass">Confirm Password</label>
                          <div class="input-group input-group-merge">
                            <input class="form-control" type="password" id="add-user-confirmPass" name="formValidationConfirmPass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
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
                        <label class="form-label" for="addemail">Email</label>
                        <input type="email" class="form-control" id="addemail" name="addemail" placeholder="example@example.com" aria-label="example@example.com" />
                        <div id="emailFeedback" class="invalid-feedback"></div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addcollege">College</label>
                        <select id="addcollege" name="addcollege" class="form-select">
                          <option value="">Select a college</option>
                          <optgroup label="Undergraduate">
                            <option value="College of Agriculture">College of Agriculture</option>
                            <option value="College of Arts and Social Sciences">College of Arts and Social Sciences</option>
                            <option value="College of Business Administration and Accountancy">College of Business Administration and Accountancy</option>
                            <option value="College of Education">College of Education</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Fisheries">College of Fisheries</option>
                            <option value="College of Home Science and Industry">College of Home Science and Industry</option>
                            <option value="College of Science">College of Science</option>
                            <option value="College of Veterinary Science and Medicine">College of Veterinary Science and Medicine</option>
                          </optgroup>
                          <optgroup label="Graduate">
                            <option value="Doctor of Philosophy">Doctor of Philosophy</option>
                            <option value="Master of Science">Master of Science</option>
                            <option value="Other Masteral Programs">Other Masteral Programs</option>
                          </optgroup>
                          <optgroup label="Other Curricular Offerings">
                            <option value="Distance, Open, and Transnational University (DOTUni)">Distance, Open, and Transnational University (DOTUni)</option>
                            <option value="Institute of Sports, Physical Education and Recreation">Institute of Sports, Physical Education and Recreation</option>
                            <option value="Vocational Course (1-Year Program)">Vocational Course (1-Year Program)</option>
                          </optgroup>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addcourse">Course</label>
                        <select id="addcourse" name="addcourse" class="form-select">
                          <option value="">Select a course</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label for="addclsuidimage" class="form-label">CLSU ID Image</label>
                        <input class="form-control" type="file" id="addclsuidimage" name="addclsuidimage" />
                      </div>

                      <div class="col-md-12">
                        <label class="form-label" for="addclsuaddress">CLSU Address</label>
                        <input class="form-control" id="addclsuaddress" name="addclsuaddress" rows="3"></input>
                      </div>

                      <!-- Choose Your Plan -->

                      <div class="col-12">
                        <h6 class="mt-2">3. Personal Details</h6>
                        <hr class="mt-0" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="addavatar">Upload Avatar Image</label>
                        <input type="file" class="form-control" id="addavatar" name="addavatar" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addcontact">Contact</label>
                        <input type="text" class="form-control phone-mask" id="addcontact" name="addcontact" placeholder="+63 988 888 8888" aria-label="+63 988 888 8888" required />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addhomeaddress">Home Address</label>
                        <textarea class="form-control" id="addhomeaddress" name="addhomeaddress" placeholder="123 Main St, Anytown, PH" aria-label="123 Main St, Anytown, USA" required></textarea>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="addlinks">Other Social Links (separated by commas)</label>
                        <textarea class="form-control" id="addlinks" name="addlinks" placeholder="m.me/username, viber://add?phonenumber, t.me/username" aria-label="m.me/username, viber://add?phonenumber, t.me/username" required></textarea>
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

  <!-- Validation -->
  <script src="../../assets/js/form-validation.js"></script>



</body>

</html>