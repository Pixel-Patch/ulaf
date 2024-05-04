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
                    <form id="formValidationExamples" class="row g-3">
                      <!-- Account Details -->

                      <div class="col-12">
                        <h6>1. Account Details</h6>
                        <hr class="mt-0" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-userRole">User Role</label>
                        <select id="add-admin-userRole" name="userRole" class="form-select">
                          <option value="">Select a user role</option>
                          <option value="admin">Admin</option>
                          <option value="admin_staff">Admin Staff</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-IDnumber">ID Number</label>
                        <input type="text" class="form-control" id="add-admin-IDnumber" placeholder="24-0001" name="userIDnumber" aria-label="IDnumber" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-username">Username</label>
                        <input type="text" class="form-control" id="add-admin-username" placeholder="John Doe" name="formValidationUsername" aria-label="John Doe" />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="add-admin-email">Email</label>
                        <input type="text" id="add-admin-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="formValidationEmail" />
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
  <script src="../../assets/js/form-validation-admin.js"></script>
</body>

</html>