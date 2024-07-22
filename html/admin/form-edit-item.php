<?php
require_once 'dbconn.php';
require 'get-item-data.php';

$title = 'Form Edit Item - Pages | ULAF Admin';
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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Items /</span> Edit Item</h4>

            <div class="row">
              <!-- FormValidation -->
              <div class="col-12">
                <div class="card">
                  <h5 class="card-header">Edit Item</h5>
                  <div class="card-body">
                    <form id="formValidationExamples" class="row g-3 needs-validation" method="post" action="edit-item.php" enctype="multipart/form-data" novalidate>
                      <div class="col-12">
                        <h6>Item Details</h6>
                        <hr class="mt-0" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="item-type">Item Type</label>
                        <select id="item-type" name="itemType" class="form-select" required>
                          <option value="">Select Item Type</option>
                          <option value="found" <?php echo ($item['Type'] == 'found') ? 'selected' : ''; ?>>Found</option>
                          <option value="lost" <?php echo ($item['Type'] == 'lost') ? 'selected' : ''; ?>>Lost</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="poster-id">Poster ID</label>
                        <select id="adduserid" name="adduserid" class="form-select" required>
                          <option value="">Select User ID</option>
                          <?php
                          if (isset($item['Poster_ID'])) {
                            $poster_id = htmlspecialchars($item['Poster_ID'], ENT_QUOTES, 'UTF-8');
                            echo "<option value=\"$poster_id\" selected>$poster_id</option>";
                          }
                          ?>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-name">Item Name</label>
                        <input type="text" class="form-control" id="item-name" name="itemName" placeholder="Item Name" value="<?php echo htmlspecialchars($item['Item_Name'], ENT_QUOTES, 'UTF-8'); ?>" required />
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-category">Category</label>
                        <select id="item-category" name="itemCategory" class="form-select" required>
                          <option value="">Select Category</option>
                          <?php
                          foreach ($categories as $category) {
                            $category_id = htmlspecialchars($category['Category_ID'], ENT_QUOTES, 'UTF-8');
                            $category_name = htmlspecialchars($category['Category_Name'], ENT_QUOTES, 'UTF-8');
                            $selected = ($item['Category_ID'] == $category_id) ? 'selected' : '';
                            echo "<option value=\"$category_id\" $selected>$category_name</option>";
                          }
                          ?>
                        </select>
                      </div>



                      <div class="col-md-6" id="current-location-field" style="<?php echo ($item['Type'] == 'lost') ? 'display: none;' : ''; ?>">
                        <label class="form-label" for="item-current-location">Current Location</label>
                        <select id="item-current-location" name="itemCurrentLocation" class="form-select" <?php echo ($item['Type'] == 'lost') ? '' : 'required'; ?>>
                          <option value="Reporter" <?php echo ($item['Current_Location'] == 'Reporter') ? 'selected' : ''; ?>>Reporter</option>
                          <option value="USF Office" <?php echo ($item['Current_Location'] == 'USF Office') ? 'selected' : ''; ?>>USF Office</option>
                          <option value="OAd Office" <?php echo ($item['Current_Location'] == 'OAd Office') ? 'selected' : ''; ?>>OAd Office</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-status">Item Status</label>
                        <select id="item-status" name="itemStatus" class="form-select" required>
                          <!-- Options will be dynamically populated by JavaScript -->
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="item-images">Images</label>
                        <input type="file" class="form-control" id="item-images" name="itemImages[]" multiple onchange="previewImages(event)" />
                        <div id="image-preview">
                          <!-- Display existing images -->
                          <?php
                          if (!empty($item['Image'])) {
                            $images = explode(',', $item['Image']);
                            foreach ($images as $image) {
                              echo '<img src="../../assets/uploads/items/' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '" alt="Item Image" width="100%">';
                            }
                          }
                          ?>
                        </div>
                      </div>

                      <script>
                        function previewImages(event) {
                          var files = event.target.files;
                          var preview = document.getElementById('image-preview');
                          preview.innerHTML = '';

                          for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            var reader = new FileReader();

                            reader.onload = function(e) {
                              var img = document.createElement('img');
                              img.src = e.target.result;
                              img.width = '100%';
                              img.alt = 'Item Image';
                              preview.appendChild(img);
                            }

                            reader.readAsDataURL(file);
                          }
                        }
                      </script>

                      <div class="col-md-12">
                        <label id="pin-location-label" class="form-label" for="pin-location-edit"><?php echo ($item['Type'] == 'found') ? 'Found at' : 'Last found at'; ?></label>
                        <input type="text" id="editpinlocation" name="addpinlocation" class="form-control" placeholder="Search for a location" value="<?php echo htmlspecialchars($item['Pin_Location'], ENT_QUOTES, 'UTF-8'); ?>">
                        <div id="map-edit" style="height: 400px;"></div>
                        <input id="pin-latitude-edit" type="hidden" name="latitude" value="<?php echo htmlspecialchars($item['Latitude'], ENT_QUOTES, 'UTF-8'); ?>">
                        <input id="pin-longitude-edit" type="hidden" name="longitude" value="<?php echo htmlspecialchars($item['Longitude'], ENT_QUOTES, 'UTF-8'); ?>">
                      </div>

                      <div class="col-md-12">
                        <label class="form-label" for="item-description">Description</label>
                        <textarea class="form-control" id="item-description" rows="3" name="itemDescription" required><?php echo htmlspecialchars($item['Description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
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
  <script src="../../assets/js/form-validation-edit-item.js"></script>
  <script src="../../assets/js/pin-maps.js"></script>
  <script>
    $(document).ready(function() {
      const itemTypeSelect = $('#item-type');
      const itemStatusSelect = $('#item-status');
      const pinLocationLabel = $('#pin-location-label');
      const currentLocationField = $('#current-location-field');

      const statusOptions = {
        'found': ['Posted', 'Claiming', 'Claimed', 'Returning', 'Returned'],
        'lost': ['Posted', 'Claiming', 'Claimed', 'Retrieving', 'Retrieved']
      };

      function updateItemStatusOptions(type) {
        itemStatusSelect.empty();
        const options = statusOptions[type] || [];
        options.forEach(status => {
          itemStatusSelect.append(new Option(status, status));
        });
        itemStatusSelect.val('<?php echo htmlspecialchars($item['Item_Status'], ENT_QUOTES, 'UTF-8'); ?>').trigger('change');
      }

      itemTypeSelect.select2({
        placeholder: 'Select an Item Type'
      }).on('change', function() {
        const itemType = $(this).val();
        updateItemStatusOptions(itemType);
        if (itemType === 'found') {
          pinLocationLabel.text('Found at');
          currentLocationField.show();
        } else if (itemType === 'lost') {
          pinLocationLabel.text('Last found at');
          currentLocationField.hide();
        }
      });

      itemStatusSelect.select2({
        placeholder: 'Select Item Status'
      });

      updateItemStatusOptions(itemTypeSelect.val());

      function previewImages(event) {
        var files = event.target.files;
        var preview = document.getElementById('image-preview');
        preview.innerHTML = '';

        for (var i = 0; i < files.length; i++) {
          var file = files[i];
          var reader = new FileReader();

          reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.width = '100%';
            img.alt = 'Item Image';
            preview.appendChild(img);
          }

          reader.readAsDataURL(file);
        }
      }
      document.getElementById('item-images').addEventListener('change', previewImages);

      initMap("map-edit", "editpinlocation", "pin-latitude-edit", "pin-longitude-edit");
    });
  </script>

</body>

</html>