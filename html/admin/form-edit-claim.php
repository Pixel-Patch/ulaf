<?php
require 'dbconn.php';
require 'get-claim-data.php';
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
                    <form id="formValidationExamples" class="row g-3 needs-validation" method="post" action="edit-claim.php" enctype="multipart/form-data" novalidate>
                      <div class="col-12">
                        <h6>Claim Details</h6>
                        <hr class="mt-0" />
                      </div>

                      <input type="hidden" name="claimID" value="<?php echo htmlspecialchars($item['Claim_ID'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" />
                      <?php
                      $itemID = htmlspecialchars($item['Item_ID'] ?? '');
                      ?>

                      <div class="col-md-6">
                        <label class="form-label" for="item-id">Item ID</label>
                        <select id="item-id" name="itemID" class="form-select" required disabled>
                          <option value="<?php echo $itemID; ?>" selected><?php echo $itemID; ?></option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="claimer-id">Claimer ID</label>
                        <select id="claimer-id" name="claimerID" class="form-select" required disabled>
                          <option value="<?php echo htmlspecialchars($item['Claimer_ID'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo htmlspecialchars($item['Claimer_ID'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                          </option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="claim-status">Claim Status</label>
                        <select id="claim-status" name="claimStatus" class="form-select" required>
                          <option value="" disabled>Select Claim Status</option>
                          <option value="Claiming" <?php if (isset($item['Claim_Status']) && $item['Claim_Status'] == 'Claiming') echo 'selected'; ?>>Claiming</option>
                          <option value="Claimed" <?php if (isset($item['Claim_Status']) && $item['Claim_Status'] == 'Claimed') echo 'selected'; ?>>Claimed</option>
                          <option value="Returning" <?php if (isset($item['Claim_Status']) && $item['Claim_Status'] == 'Returning') echo 'selected'; ?>>Returning</option>
                          <option value="Returned" <?php if (isset($item['Claim_Status']) && $item['Claim_Status'] == 'Returned') echo 'selected'; ?>>Returned</option>
                          <option value="Retrieving" <?php if (isset($item['Claim_Status']) && $item['Claim_Status'] == 'Retrieving') echo 'selected'; ?>>Retrieving</option>
                          <option value="Retrieved" <?php if (isset($item['Claim_Status']) && $item['Claim_Status'] == 'Retrieved') echo 'selected'; ?>>Retrieved</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="verification-status">Verification Status</label>
                        <select id="verification-status" name="verificationStatus" class="form-select" required>
                          <option value="" disabled>Select Verification Status</option>
                          <option value="Pending" <?php if (isset($item['Verification_Status']) && $item['Verification_Status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                          <option value="Decline" <?php if (isset($item['Verification_Status']) && $item['Verification_Status'] == 'Decline') echo 'selected'; ?>>Decline</option>
                          <option value="Approved" <?php if (isset($item['Verification_Status']) && $item['Verification_Status'] == 'Approved') echo 'selected'; ?>>Approved</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="remarks">Remarks</label>
                        <input type="text" class="form-control" id="remarks" name="itemRemarks" placeholder="Item Remarks" value="<?php echo htmlspecialchars($item['Remarks'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="claim-again">Can Claim Again?</label>
                        <select id="claim-again" name="claimAgain" class="form-select" required>
                          <option value="" disabled selected>Select Claim Again</option>
                          <option value=NULL <?php if (isset($item['Claim_Again']) && $item['Claim_Again'] === NULL) echo 'selected'; ?>>Yes</option>
                          <option value="1" <?php if (isset($item['Claim_Again']) && $item['Claim_Again'] == '1') echo 'selected'; ?>>No</option>

                        </select>
                      </div>

                      <div class="col-md-12">
                        <label class="form-label" for="proof">Proof</label>
                        <textarea class="form-control" id="proof" rows="3" name="proof" required><?php echo htmlspecialchars($item['Proof'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="proof-image">Proof Image</label>
                        <input type="file" class="form-control" id="proof-image" name="proofImage[]" required multiple onchange="previewImages(event, 'proof-image-preview')" />
                        <div id="proof-image-preview">
                          <!-- Display existing images -->
                          <?php
                          if (!empty($item['Proof_Image'])) {
                            $proofImages = explode(',', htmlspecialchars($item['Proof_Image'] ?? '', ENT_QUOTES, 'UTF-8'));
                            foreach ($proofImages as $proofImage) {
                              echo '<img src="../../assets/uploads/proofs/' . htmlspecialchars($proofImage, ENT_QUOTES, 'UTF-8') . '" alt="Proof Image" width="100%">';
                            }
                          }
                          ?>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="returned-image">Returned Image</label>
                        <input type="file" class="form-control" id="returned-image" name="returnedImage[]" required multiple onchange="previewImages(event, 'returned-image-preview')" />
                        <div id="returned-image-preview">
                          <!-- Display existing images -->
                          <?php
                          if (!empty($item['Returned_Image'])) {
                            $returnedImages = explode(',', htmlspecialchars($item['Returned_Image'] ?? '', ENT_QUOTES, 'UTF-8'));
                            foreach ($returnedImages as $returnedImage) {
                              echo '<img src="../../assets/uploads/returned-proof/' . htmlspecialchars($returnedImage, ENT_QUOTES, 'UTF-8') . '" alt="Returned Image" width="100%">';
                            }
                          }
                          ?>
                        </div>
                      </div>

                      <script>
                        function previewImages(event, previewElementId) {
                          var files = event.target.files;
                          var preview = document.getElementById(previewElementId);
                          preview.innerHTML = '';

                          for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            var reader = new FileReader();

                            reader.onload = function(e) {
                              var img = document.createElement('img');
                              img.src = e.target.result;
                              img.width = '100%';
                              img.alt = 'Image';
                              preview.appendChild(img);
                            }

                            reader.readAsDataURL(file);
                          }
                        }
                      </script>



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
  <script src="../../assets/js/form-validation-edit-claim.js"></script>
</body>

</html>