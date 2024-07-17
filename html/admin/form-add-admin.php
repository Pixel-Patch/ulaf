<?php
require 'dbconn.php';
$title = 'Form Add Admin - Pages | ULAF Admin';
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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">End-User /</span> Add New Employee</h4>

            <div class="row">
              <!-- FormValidation -->
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Add Employee</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3" method="post" action="add-admin.php" enctype="multipart/form-data">
                      <!-- Account Details -->


                      <!-- Academic Info -->
                      <div class="col-12">
                        <h6>Account Details</h6>
                        <hr class="mt-0" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-userRole">User Role</label>
                        <select id="add-admin-userRole" name="userRole" class="form-select">
                          <option value="">Select a user role</option>
                          <option value="Admin">Admin</option>
                          <option value="Staff">Staff</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="adduserid">ID Number</label>
                        <select class="form-control" id="adduserid" name="adduserid" aria-label="IDnumber"></select>
                      </div>


                      <div class="col-md-6">
                        <label class="form-label" for="addusername">Username</label>
                        <input type="text" class="form-control" id="addusername" placeholder="John Doe" name="addusername" aria-label="John Doe" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="addavatar">Upload Avatar Image</label>
                        <input type="file" class="form-control" id="addavatar" name="addavatar" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="adduserid">Email</label>
                        <input type="text" id="addemail" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="addemail" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="addcontact">Contact</label>
                        <input type="text" class="form-control phone-mask" id="addcontact" name="addcontact" placeholder="+63 988 888 8888" aria-label="+63 988 888 8888" required />
                      </div>


                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-password">Password</label>
                        <input type="password" id="add-admin-password" class="form-control" placeholder="Password" aria-label="formValidationPass2" name="formValidationPass" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-confirmPassword">Confirm Password</label>
                        <input type="password" id="add-admin-confirmPassword" class="form-control" placeholder="Confirm Password" aria-label="formValidationConfirmPass2" name="formValidationConfirmPass" />
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
  <script src="../../assets/js/form-validation-admin.js"></script>



</body>

</html>