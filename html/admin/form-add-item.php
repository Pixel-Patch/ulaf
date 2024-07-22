<?php
require 'dbconn.php';
$title = 'Form Add Admin - Pages | ULAF Admin';
require 'header.php';

?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzWcAbNuR8iS50rrGnYD-aLfuULyuaQ9s&libraries=places" async></script>

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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Items /</span> Add New Item</h4>

            <div class="row">
              <!-- FormValidation -->
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Add Item</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3 needs-validation" method="post" action="add-item.php" enctype="multipart/form-data" novalidate>
                      <div class="col-12">
                        <h6>Item Details</h6>
                        <hr class="mt-0" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="item-type">Item Type</label>
                        <select id="item-type" name="itemType" class="form-select" required>
                          <option value="">Select Item Type</option>
                          <option value="found">Found</option>
                          <option value="lost">Lost</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="poster-id">Poster ID</label>
                        <select id="adduserid" name="posterID" class="form-select" required></select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-name">Item Name</label>
                        <input type="text" class="form-control" id="item-name" name="itemName" placeholder="Item Name" required />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-category">Category</label>
                        <select id="item-category" name="itemCategory" class="form-select" required></select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-images">Images</label>
                        <input type="file" class="form-control" id="item-images" name="itemImages[]" multiple required />
                      </div>

                      <div class="col-md-6" id="current-location-field">
                        <label class="form-label" for="item-current-location">Current Location</label>
                        <select id="item-current-location" name="itemCurrentLocation" class="form-select" required>
                          <option value="" disabled selected>Select Current Location</option>
                          <option value="Reporter">Reporter</option>
                          <option value="USF Office">USF Office</option>
                          <option value="OAd Office">OAd Office</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-status">Item Status</label>
                        <select id="item-status" name="itemStatus" class="form-select" required>
                          <option value="" disabled selected>Select Item Status</option>
                          <option value="Posted">Posted</option>
                          <option value="Claiming">Claiming</option>
                          <option value="Claimed">Claimed</option>
                          <option value="Returning">Returning</option>
                          <option value="Returned">Returned</option>
                          <option value="Retrieving">Retrieving</option>
                          <option value="Retrieved">Retrieved</option>
                        </select>
                      </div>

                      <div class="col-md-12">
                        <label id="pin-location-label" class="form-label" for="pin-location-add">Pin Location</label>
                        <input type="text" id="addpinlocation" name="addpinlocation" class="form-control" placeholder="Search for a location">
                        <div id="map-add" style="height: 400px;"></div>
                        <input id="pin-latitude-add" type="hidden" name="latitude">
                        <input id="pin-longitude-add" type="hidden" name="longitude">
                      </div>



                      <div class="col-md-12">
                        <label class="form-label" for="item-description">Description</label>
                        <textarea class="form-control" id="item-description" rows="3" name="itemDescription" required></textarea>
                      </div>



                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
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
  <script src="../../assets/js/form-validation-item.js"></script>
  <script src="../../assets/js/pin-maps.js"></script>

</body>

</html>