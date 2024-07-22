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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Claims /</span> Add New Claims</h4>

            <div class="row">
              <!-- FormValidation -->
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Add Claim</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3 needs-validation" method="post" action="add-claim.php" enctype="multipart/form-data" novalidate>
                      <div class="col-12">
                        <h6>Claim Details</h6>
                        <hr class="mt-0" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="item-id">Item ID</label>
                        <select id="item-id" name="itemID" class="form-select" required></select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="claimer-id">Claimer ID</label>
                        <select id="claimer-id" name="claimerID" class="form-select" required></select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="claim-status">Claim Status</label>
                        <select id="claim-status" name="claimStatus" class="form-select" required>
                          <option value="" disabled selected>Select Claim Status</option>
                          <option value="Claiming">Claiming</option>
                          <option value="Claimed">Claimed</option>
                          <option value="Returning">Returning</option>
                          <option value="Returned">Returned</option>
                          <option value="Retrieving">Retrieving</option>
                          <option value="Retrieved">Retrieved</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="verification-status">Verification Status</label>
                        <select id="verification-status" name="verificationStatus" class="form-select" required>
                          <option value="" disabled selected>Select Verification Status</option>
                          <option value="Pending">Pending</option>
                          <option value="Decline">Decline</option>
                          <option value="Approved">Approved</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="proof">Proof</label>
                        <textarea class="form-control" id="proof" rows="3" name="proof" required></textarea>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="proof-image">Proof Image</label>
                        <input type="file" class="form-control" id="proof-image" name="proofImage[]" required multiple/>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
  <script src="../../assets/js/form-validation-claim.js"></script>

</body>

</html>