<?php
$title = 'Item List - Page | ULAF Admin';
require 'header.php';

?>

<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />

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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Items /</span> Item CLaims</h4>

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
                      <th>Claim</th>
                      <th>Type</th>
                      <th>Category</th>
                      <th>Claimer ID</th>
                      <th>Poster ID</th>
                      <th>Claim Status</th>
                      <th>Verification Status</th>
                      <th>actions</th>
                    </tr>
                  </thead>
                </table>
              </div>

              <!-- Modal for delete confirmation -->
              <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalTitle">Confirm Deletion</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to delete this item with ID: <span id="itemToDelete"></span>?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" id="confirmDeleteBtn" class="btn btn-primary">Delete</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="content-backdrop fade"></div>
            </div>

          </div>
          <!-- Footer -->
          <?php require 'footer.php'; ?>

          <!-- / Footer -->


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

    <?php
    require 'dbconn.php';

    // Query to fetch claims details, corresponding item and category names, and map the "Claim_Status" and "Type" fields to integers
    $sql = "SELECT `claims`.`Claim_ID`, `claims`.`Item_ID`, `claims`.`Claimer_ID`,
        CASE `claims`.`Claim_Status`
            WHEN 'Posted' THEN 0
            WHEN 'Claiming' THEN 1
            WHEN 'Claimed' THEN 2
            WHEN 'Returning' THEN 3
            WHEN 'Returned' THEN 4
            WHEN 'Retrieving' THEN 5
            WHEN 'Retrieved' THEN 6
        END AS `Claim_Status`,
        `claims`.`Proof`, `claims`.`Proof_Image`, `claims`.`Returned_Image`,
        `claims`.`Remarks`, `claims`.`Claim_Date`,
        CASE `claims`.`Verification_Status`
            WHEN 'Pending' THEN 0
            WHEN 'Declined' THEN 1
            WHEN 'Approved' THEN 2
        END AS `Verification_Status`,
        `claims`.`Verification_Date`, `claims`.`Claim_Again`,
        `items`.`Item_Name`, `items`.`Image`,
        CASE `items`.`Type`
            WHEN 'Found' THEN 1
            WHEN 'Lost' THEN 0
        END AS `Type`,
        CAST(`items`.`Category_ID` AS UNSIGNED) AS `Category_ID`,
        `items`.`Poster_ID`, `categories`.`Category_Name`
    FROM `claims`
    INNER JOIN `items` ON `claims`.`Item_ID` = `items`.`Item_ID`
    INNER JOIN `categories` ON `items`.`Category_ID` = `categories`.`Category_ID`
    ORDER BY `claims`.`Claim_ID` DESC";

    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
        // Cast Type, Category_ID, Claim_Status, and Verification_Status as integers
        $row['Type'] = (int) $row['Type'];
        $row['Category_ID'] = (int) $row['Category_ID'];
        $row['Claim_Status'] = (int) $row['Claim_Status'];
        $row['Verification_Status'] = (int) $row['Verification_Status'];
        $data[] = $row;
      }
    } else {
      echo "0 results";
    }
    $conn->close();

    // Convert the array to a JSON object
    $json_data = json_encode(array('data' => $data));

    // Write the JSON data to a file
    $success = file_put_contents('../../assets/json/item-claims.json', $json_data);
    if (!$success) {
      echo "Error: Unable to write JSON data to file.";
    } else {
      echo "JSON data successfully written to file.";
    }
    ?>









</body>

</html>