<?php
$title = 'Item List - Page | ULAF Admin';
require 'header.php';

$jsonFilePath = '../../assets/json/item-list.json';
$jsonData = file_get_contents($jsonFilePath);
$items = json_decode($jsonData, true)['data'];

$totalItems = count($items);
$returnedRetrievedCount = 0;
$pendingCount = 0;
$overdueCount = 0;

// Current date in PHT timezone
$currentDate = new DateTime('now', new DateTimeZone('Asia/Manila'));

// Check each item for its status and posted date
foreach ($items as $item) {
  // Check if the item is returned or retrieved
  if ($item['Item_Status'] == 4 || $item['Item_Status'] == 6) {
    $returnedRetrievedCount++;
  }

  // Check if the item is pending
  if (in_array($item['Item_Status'], [1, 2, 3, 5])) {
    $pendingCount++;
  }

  // Check if the item is overdue
  if ($item['Item_Status'] == 0) {
    $postedDate = new DateTime($item['Posted_Date'], new DateTimeZone('Asia/Manila'));
    $interval = $currentDate->diff($postedDate);
    if ($interval->m + ($interval->y * 12) > 4) { 
      $overdueCount++;
    }
  }
}
?>
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />

<link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />


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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Items /</span> Item List</h4>

            <!-- Product List Widget -->

            <div class="card mb-4">
              <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                  <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                        <div>
                          <h6 class="mb-2">Total Items</h6>
                          <h4 class="mb-2"><?php echo $totalItems; ?></h4>
                          <p class="mb-0">
                            <span class="text-muted me-2">All items</span>
                          </p>
                        </div>
                        <span class="avatar me-sm-4">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-clipboard-data text-body"></i></span>
                        </span>
                      </div>
                      <hr class="d-none d-sm-block d-lg-none me-4" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                        <div>
                          <h6 class="mb-2">Returned/Retrieved Items</h6>
                          <h4 class="mb-2"><?php echo $returnedRetrievedCount; ?></h4>
                          <p class="mb-0">
                            <span class="text-muted me-2">Items returned/retrieved</span>
                          </p>
                        </div>
                        <span class="avatar p-2 me-lg-4">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-file-check text-body"></i></span>
                        </span>
                      </div>
                      <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                        <div>
                          <h6 class="mb-2">Pending Items</h6>
                          <h4 class="mb-2"><?php echo $pendingCount; ?></h4>
                          <p class="mb-0 text-muted">Items in process of claiming</p>
                        </div>
                        <span class="avatar p-2 me-sm-4">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-file-orientation text-body"></i></span>
                        </span>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start">
                        <div>
                          <h6 class="mb-2">Overdue Items</h6>
                          <h4 class="mb-2"><?php echo $overdueCount; ?></h4>
                          <p class="mb-0">
                            <span class="text-muted me-2">Items overdue for more than 6 months</span>
                          </p>
                        </div>
                        <span class="avatar p-2">
                          <span class="avatar-initial bg-label-secondary rounded"><i class="ti-md ti ti-file-alert text-body"></i></span>
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
                  <div class="col-md-4 item_status"></div>
                  <div class="col-md-4 item_category"></div>
                  <div class="col-md-4 item_type"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                  <div class="col-md-4 item_currentLocation"></div>
                  <div class="col-md-4 item_postedDate"></div>
                  <div class="col-md-4 item_pinLocation"></div>
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
                      <th>Poster ID</th>
                      <th>Date & Time</th>
                      <th>Current Location</th>
                      <th>Status</th>
                      <th>Pin Location</th>
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

              <!-- Modal for card -->
              <div class="modal fade" id="cardModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="cardModalTitle">Card Title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h3><span id="modalItemType" class="badge"></span></h3>
                      <h3><span id="modalItemName"></span></h3>
                      <h5 class="card-subtitle text-muted"><span id="modalCategoryName"></span></h5>

                      <div id="modalItemImages" class="d-flex flex-column align-items-center mb-4">
                        <!-- Images will be inserted here dynamically -->
                      </div>

                      <div class="col-md-12 mb-3">
                        <label class="form-label" for="modalItemDescription">Description</label>
                        <textarea class="form-control" id="modalItemDescription" rows="3" name="itemDescription" disabled></textarea>
                      </div>

                      <div class="col-md-12 mb-3">
                        <label class="form-label" for="modalPinLocation">Pin Location</label>
                        <input type="text" class="form-control" id="modalPinLocation" name="pinLocation" disabled />
                      </div>

                      <div class="col-md-12 mb-3">
                        <label class="form-label" for="modalPostedDate">Posted Date</label>
                        <input type="text" class="form-control" id="modalPostedDate" name="postedDate" disabled />
                      </div>

                      <div class="col-md-12 mb-3">
                        <label class="form-label" for="modalCurrentLocation">Current Location</label>
                        <input type="text" class="form-control" id="modalCurrentLocation" name="currentLocation" disabled />
                      </div>

                      <div class="col-md-12 mb-3" id="modalRetrievedByWrapper">
                        <label class="form-label" for="modalRetrievedBy">Retrieved By</label>
                        <input type="text" class="form-control" id="modalRetrievedBy" name="retrievedBy" disabled />
                      </div>

                      <div class="col-md-12 mb-3" id="modalRetrievedDateWrapper">
                        <label class="form-label" for="modalRetrievedDate">Retrieved Date</label>
                        <input type="text" class="form-control" id="modalRetrievedDate" name="retrievedDate" disabled />
                      </div>

                      <p class="mt-3"><strong>Status:</strong> &nbsp; <span id="modalItemStatus" class="badge" style="font-size:20px;"></span></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
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


    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/item-list.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var statusMap = {
          0: {
            title: 'Posted',
            class: 'bg-label-secondary'
          },
          1: {
            title: 'Claiming',
            class: 'bg-label-danger'
          },
          2: {
            title: 'Claimed',
            class: 'bg-label-success'
          },
          3: {
            title: 'Returning',
            class: 'bg-label-warning'
          },
          4: {
            title: 'Returned',
            class: 'bg-label-info'
          },
          5: {
            title: 'Retrieving',
            class: 'bg-label-warning'
          },
          6: {
            title: 'Retrieved',
            class: 'bg-label-info'
          }
        };

        var typeMap = {
          0: {
            title: 'Lost',
            class: 'bg-label-danger'
          },
          1: {
            title: 'Found',
            class: 'bg-label-success'
          }
        };

        // Event delegation to handle click event on dynamically created 'View' links
        document.addEventListener('click', function(event) {
          if (event.target.matches('.view-modal-trigger')) {
            event.preventDefault();
            try {
              // Parse the JSON data
              var itemData = JSON.parse(event.target.getAttribute('data-item'));

              document.getElementById('cardModalTitle').innerText = 'Item ID: ' + itemData.itemId;
              document.getElementById('modalItemName').innerText = itemData.itemName;
              document.getElementById('modalCategoryName').innerText = itemData.categoryName;

              // Handle multiple images
              var imagesContainer = document.getElementById('modalItemImages');
              imagesContainer.innerHTML = ''; // Clear previous images
              var images = itemData.image.split(',');
              images.forEach(function(image) {
                var imgElement = document.createElement('img');
                imgElement.src = '../../assets/uploads/items/' + image.trim();
                imgElement.className = 'img-fluid rounded mx-1 my-1';
                imgElement.style.maxWidth = '500px'; // Adjust as needed
                imagesContainer.appendChild(imgElement);
              });

              document.getElementById('modalItemDescription').value = itemData.description;

              var itemTypeElement = document.getElementById('modalItemType');
              itemTypeElement.innerText = typeMap[itemData.itemType].title;
              itemTypeElement.className = 'badge ' + typeMap[itemData.itemType].class;

              var itemStatusElement = document.getElementById('modalItemStatus');
              itemStatusElement.innerText = statusMap[itemData.itemStatus].title;
              itemStatusElement.className = 'badge ' + statusMap[itemData.itemStatus].class;

              document.getElementById('modalPinLocation').value = itemData.pinLocation;
              document.getElementById('modalPostedDate').value = itemData.postedDate;
              document.getElementById('modalCurrentLocation').value = itemData.currentLocation;

              if (itemData.retrievedBy) {
                document.getElementById('modalRetrievedByWrapper').style.display = 'block';
                document.getElementById('modalRetrievedBy').value = itemData.retrievedBy;
              } else {
                document.getElementById('modalRetrievedByWrapper').style.display = 'none';
              }

              if (itemData.retrievedDate) {
                document.getElementById('modalRetrievedDateWrapper').style.display = 'block';
                document.getElementById('modalRetrievedDate').value = itemData.retrievedDate;
              } else {
                document.getElementById('modalRetrievedDateWrapper').style.display = 'none';
              }

              // Show the modal
              var cardModal = new bootstrap.Modal(document.getElementById('cardModal'));
              cardModal.show();
            } catch (error) {
              console.error('Error parsing item data:', error);
            }
          }
        });
      });
    </script>




    <?php
    require 'dbconn.php';

    // Query to fetch item details, corresponding category names, and map the "Category_ID", "Item_Status", and "Type" fields to integers
    $sql = "SELECT `items`.`Item_ID`, `items`.`Item_Name`, `items`.`Image`,
               CASE `items`.`Type`
                   WHEN 'Found' THEN 1
                   WHEN 'Lost' THEN 0
               END AS `Type`,
               CAST(`items`.`Category_ID` AS UNSIGNED) AS `Category_ID`, `categories`.`Category_Name`,
               CASE `items`.`Item_Status`
                   WHEN 'Posted' THEN 0
                   WHEN 'Claiming' THEN 1
                   WHEN 'Claimed' THEN 2
                   WHEN 'Returning' THEN 3
                   WHEN 'Returned' THEN 4
                   WHEN 'Retrieving' THEN 5
                   WHEN 'Retrieved' THEN 6
               END AS `Item_Status`,
               `items`.`Description`, `items`.`Pin_Location`, `items`.`Posted_Date`, `items`.`Current_Location`,
               `items`.`Poster_ID`, `items`.`Latitude`, `items`.`Longitude`, `items`.`Retrieved_By`, `items`.`Retrieved_Date`
        FROM `items`
        INNER JOIN `categories` ON `items`.`Category_ID` = `categories`.`Category_ID`
        ORDER BY `items`.`Item_ID` DESC";

    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        // Cast Type, Category_ID, and Item_Status as integers
        $row['Type'] = (int) $row['Type'];
        $row['Category_ID'] = (int) $row['Category_ID'];
        $row['Item_Status'] = (int) $row['Item_Status'];
        $data[] = $row;
      }
    } else {
      echo "0 results";
    }
    $conn->close();

    // Convert the array to a JSON object
    $json_data = json_encode(array('data' => $data));

    // Write the JSON data to a file
    $success = file_put_contents('../../assets/json/item-list.json', $json_data);
    if (!$success) {
      echo "Error: Unable to write JSON data to file.";
    }
    ?>












</body>

</html>