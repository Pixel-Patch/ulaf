<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Item List - Lost | ULAF Admin </title>

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
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/config.js"></script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf3xEq_6dGU0hLU0fUNhPfiPgpQ3r55so&libraries=places"></script>


  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap" async defer></script> -->

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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">eCommerce /</span> Product List</h4>

            <!-- Product List Widget -->

            <div class="card mb-4">
              <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                  <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                        <div>
                          <h6 class="mb-2">In-store Sales</h6>
                          <h4 class="mb-2">$5,345.43</h4>
                          <p class="mb-0">
                            <span class="text-muted me-2">5k orders</span><span class="badge bg-label-success">+5.7%</span>
                          </p>
                        </div>
                        <span class="avatar me-sm-4">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-smart-home text-body"></i></span>
                        </span>
                      </div>
                      <hr class="d-none d-sm-block d-lg-none me-4" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                        <div>
                          <h6 class="mb-2">Website Sales</h6>
                          <h4 class="mb-2">$674,347.12</h4>
                          <p class="mb-0">
                            <span class="text-muted me-2">21k orders</span><span class="badge bg-label-success">+12.4%</span>
                          </p>
                        </div>
                        <span class="avatar p-2 me-lg-4">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-device-laptop text-body"></i></span>
                        </span>
                      </div>
                      <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                        <div>
                          <h6 class="mb-2">Discount</h6>
                          <h4 class="mb-2">$14,235.12</h4>
                          <p class="mb-0 text-muted">6k orders</p>
                        </div>
                        <span class="avatar p-2 me-sm-4">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-gift text-body"></i></span>
                        </span>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start">
                        <div>
                          <h6 class="mb-2">Affiliate</h6>
                          <h4 class="mb-2">$8,345.23</h4>
                          <p class="mb-0">
                            <span class="text-muted me-2">150 orders</span><span class="badge bg-label-danger">-3.5%</span>
                          </p>
                        </div>
                        <span class="avatar p-2">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-wallet text-body"></i></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Product List Table -->
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">Filter</h5>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                  <div class="col-md-4 product_status"></div>
                  <div class="col-md-4 product_category"></div>
                  <div class="col-md-4 product_stock"></div>
                </div>
              </div>
              <div class="card-datatable table-responsive">
                <table class="datatables-products table">
                  <thead class="border-top">
                    <tr>
                      <th></th>
                      <th>Item</th>
                      <th>Type</th>
                      <th>Category</th>
                      <th>Current Location</th>
                      <th>Date & Time</th>
                      <th>Status</th>
                      <th>actions</th>
                    </tr>
                  </thead>
                </table>
              </div>



              <!-- Offcanvas to add new item -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddItem" aria-labelledby="offcanvasAddItemLabel">
                <div class="offcanvas-header">
                  <h5 id="offcanvasAddItemLabel" class="offcanvas-title">Add User</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                  <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                    <div class="mb-3">
                      <label class="form-label" for="item-type">Item Type</label>
                      <select class="form-select" id="item-type" onchange="toggleLocationField(this.value)" aria-label="Item Type">
                        <option value="">Select Item Type</option>
                        <option value="found">Found</option>
                        <option value="lost">Lost</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-name">Item Name</label>
                      <input type="text" class="form-control" id="item-name" placeholder="Item Name" name="itemName" aria-label="Item Name" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-category">Category</label>
                      <select class="form-select" id="item-category" name="itemCategory" aria-label="Category">
                        <option value="">Select Category</option>
                        <!-- Add options for each category -->
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-current-location">Current Location</label>
                      <select class="form-select" id="item-current-location" name="itemCurrentLocation" aria-label="Current Location">
                        <option value="" disabled selected>Select Current Location</option>
                        <option value="reporter">Reporter</option>
                        <option value="usf_office">USF Office</option>
                        <option value="oad_office">OAd Office</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="pin-location-add">Pin Location</label>
                      <input type="text" id="search-box-add" class="form-control" placeholder="Search for a location" style="z-index: 9999 !important;">
                      <div id="map-add" style="height: 300px;"></div>
                      <input type="hidden" id="pin-latitude-add" name="pinLatitude">
                      <input type="hidden" id="pin-longitude-add" name="pinLongitude">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-image">Image</label>
                      <input type="file" class="form-control" id="item-image" name="itemImage" aria-label="Image" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-description">Description</label>
                      <textarea class="form-control" id="item-description" rows="3" name="itemDescription" aria-label="Description"></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="item-status">Item Status</label>
                      <select class="form-select" id="item-status" name="itemStatus" aria-label="Item Status">
                        <option value="Posted">Posted</option>
                        <option value="Claiming">Claiming</option>
                        <option value="Claimed">Claimed</option>
                        <option value="Returning">Returning</option>
                        <option value="Returned">Returned</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                  </form>
                </div>
              </div>

              <!-- Offcanvas to edit item -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditItem" aria-labelledby="offcanvasEditItemLabel">
                <div class="offcanvas-header">
                  <h5 id="offcanvasAddItemLabel" class="offcanvas-title">Edit User</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                  <form class="edit-new-user pt-0" id="editUserForm" onsubmit="return false">
                    <div class="mb-3">
                      <label class="form-label" for="item-type">Item Type</label>
                      <select class="form-select" id="item-type" onchange="toggleLocationField(this.value)" aria-label="Item Type">
                        <option value="">Select Item Type</option>
                        <option value="found">Found</option>
                        <option value="lost">Lost</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-name">Item Name</label>
                      <input type="text" class="form-control" id="item-name" placeholder="Item Name" name="itemName" aria-label="Item Name" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-category">Category</label>
                      <select class="form-select" id="item-category" name="itemCategory" aria-label="Category">
                        <option value="">Select Category</option>
                        <!-- Add options for each category -->
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-current-location">Current Location</label>
                      <select class="form-select" id="item-current-location" name="itemCurrentLocation" aria-label="Current Location">
                        <option value="" disabled selected>Select Current Location</option>
                        <option value="reporter">Reporter</option>
                        <option value="usf_office">USF Office</option>
                        <option value="oad_office">OAd Office</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="pin-location-edit">Pin Location</label>
                      <input type="text" id="search-box-edit" class="form-control" placeholder="Search for a location" style="z-index: 9999 !important;">
                      <div id="map-edit" style="height: 300px;"></div>
                      <input type="hidden" id="pin-latitude-edit" name="pinLatitude">
                      <input type="hidden" id="pin-longitude-edit" name="pinLongitude">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-image">Image</label>
                      <input type="file" class="form-control" id="item-image" name="itemImage" aria-label="Image" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="item-description">Description</label>
                      <textarea class="form-control" id="item-description" rows="3" name="itemDescription" aria-label="Description"></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="item-status">Item Status</label>
                      <select class="form-select" id="item-status" name="itemStatus" aria-label="Item Status">
                        <option value="Posted">Posted</option>
                        <option value="Claiming">Claiming</option>
                        <option value="Claimed">Claimed</option>
                        <option value="Returning">Returning</option>
                        <option value="Returned">Returned</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                  </form>
                </div>

              </div>
              <!--/ Content -->

              <!-- Footer -->
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl">
                  <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                    <div>
                      ©
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      , made with ❤️ by
                      <a href="https://pixinvent.com" target="_blank" class="footer-link text-primary fw-medium">Pixinvent</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                      <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                      <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

                      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                      <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                    </div>
                  </div>
                </div>
              </footer>
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
      <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
      <script src="../../assets/vendor/libs/select2/select2.js"></script>

      <!-- Main JS -->
      <script src="../../assets/js/main.js"></script>

      <!-- Page JS -->
      <script src="../../assets/js/item-list.js"></script>

      <script>
        function toggleLocationField(itemType) {
          var itemStatusField = document.getElementById('item-status');
          var pinLocationLabel = document.querySelector('label[for="pin-location"]');

          if (itemType === 'found') {
            itemStatusField.innerHTML = `
      <option value="Posted">Posted</option>
      <option value="Claiming">Claiming</option>
      <option value="Claimed">Claimed</option>
      <option value="Returning">Returning</option>
      <option value="Returned">Returned</option>
    `;
            pinLocationLabel.textContent = 'Pin Found Location';
          } else if (itemType === 'lost') {
            itemStatusField.innerHTML = `
      <option value="Posted">Posted</option>
      <option value="Claiming">Claiming</option>
      <option value="Claimed">Claimed</option>
      <option value="Retrieving">Retrieving</option>
      <option value="Retrieved">Retrieved</option>
    `;
            pinLocationLabel.textContent = 'Pin Lost Location';
          } else {
            itemStatusField.innerHTML = `
      <option value="Posted">Posted</option>
      <option value="Claiming">Claiming</option>
      <option value="Claimed">Claimed</option>
      <option value="Returning">Returning</option>
      <option value="Returned">Returned</option>
    `;
            pinLocationLabel.textContent = 'Pin Location';
          }
        }
      </script>

      <script>
        let markerAdd, markerEdit;

        function initMap(mapId, searchBoxId, latitudeId, longitudeId) {
          const map = new google.maps.Map(document.getElementById(mapId), {
            center: {
              lat: 15.730555136929185,
              lng: 120.92987291131153
            },
            zoom: 15,
          });

          let marker;
          if (mapId === 'map-add') {
            marker = markerAdd;
          } else if (mapId === 'map-edit') {
            marker = markerEdit;
          }

          marker = new google.maps.Marker({
            position: {
              lat: 15.730555136929185,
              lng: 120.92987291131153
            },
            map: map,
            draggable: true,
          });

          marker.addListener("dragend", () => {
            const position = marker.getPosition().toJSON();
            document.getElementById(latitudeId).value = position.lat;
            document.getElementById(longitudeId).value = position.lng;
            reverseGeocode(position, searchBoxId);
          });

          const input = document.getElementById(searchBoxId);
          const autocomplete = new google.maps.places.Autocomplete(input);
          autocomplete.bindTo("bounds", map);

          autocomplete.addListener("place_changed", () => {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
              window.alert("No details available for input: '" + place.name + "'");
              return;
            }

            marker.setPosition(place.geometry.location);
            document.getElementById(latitudeId).value = place.geometry.location.lat();
            document.getElementById(longitudeId).value = place.geometry.location.lng();
            map.setCenter(place.geometry.location);
            map.setZoom(15);
          });
        }

        function reverseGeocode(position, searchBoxId) {
          const geocoder = new google.maps.Geocoder();
          geocoder.geocode({
            location: position
          }, (results, status) => {
            if (status === "OK") {
              if (results[0]) {
                document.getElementById(searchBoxId).value = results[0].formatted_address;
              } else {
                window.alert("No results found");
              }
            } else {
              window.alert("Geocoder failed due to: " + status);
            }
          });
        }

        // Initialize the add map
        initMap('map-add', 'search-box-add', 'pin-latitude-add', 'pin-longitude-add');

        // Initialize the edit map
        initMap('map-edit', 'search-box-edit', 'pin-latitude-edit', 'pin-longitude-edit');
      </script>
</body>

</html>