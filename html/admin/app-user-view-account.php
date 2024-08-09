<?php
$title = 'Item List - Page | ULAF Admin';
require 'header.php';
require 'dbconn.php';
require '../../vendor/autoload.php'; // Ensure Carbon is loaded

use Carbon\Carbon;

// Set the default timezone to Asia/Manila
date_default_timezone_set('Asia/Manila');
Carbon::setLocale('en'); // Set the locale for Carbon

// Get user_id from URL
$user_id = $_GET['user_id'];

// Fetch user activities from the database
$sql = "SELECT activity_type, description, item_id, claim_id, timestamp FROM activity_log WHERE user_id = ? ORDER BY timestamp DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$activities = [];
while ($row = $result->fetch_assoc()) {
  $activities[] = $row;
}

// Helper function to get activity description
function getActivityDescription($activity)
{
  switch ($activity['activity_type']) {
    case 'login':
      return 'User logged in';
    case 'logout':
      return 'User logged out';
    case 'add_item':
      return 'Added a new item';
    case 'edit_item':
      return 'Edited an item';
    case 'delete_item':
      return 'Deleted an item';
    case 'add_claim':
      return 'Added a new claim';
    case 'delete_claim':
      return 'Deleted a claim';
    case 'approve_claim':
      return 'Approved a claim';
    case 'decline_claim':
      return 'Declined a claim';
    case 'edit_profile':
      return 'Edited user profile';
    case 'return_item':
      return 'Returned item';
    case 'cregister':
      return 'User Successfully Completed the Registration!';
    case 'register':
      return 'User Successfully Registered!';
    case 'retrieve_item':
      return 'Retrieved item';
    default:
      return 'Performed an action';
  }
}

// Helper function to get activity icon color
function getActivityTypeColor($activityType)
{
  switch ($activityType) {

    case 'login':
      return 'primary';
    case 'add_item':
    case 'add_claim':
    case 'return_item':
    case 'retrieve_item':
      return 'info';
    case 'edit_item':
    case 'edit_profile':
      return 'warning';
    case 'cregister':
    case 'register':
    case 'approve_claim':
      return 'success';
    case 'decline_claim':
    case 'logout':
    case 'delete_item':
    case 'delete_claim':
      return 'danger';
    default:
      return 'secondary';
  }
}

// Helper function to format the timestamp
function formatTimestamp($timestamp)
{
  $date = Carbon::parse($timestamp);
  if ($date->diffInDays(Carbon::now()) > 7) {
    return $date->format('Y-m-d');
  } else {
    return $date->diffForHumans();
  }
}

// SQL query to fetch user details
$sql = "SELECT `id`, `User_ID`, `Role`, `Username`, `FullName`, `Password`, `Email`, `Avatar_Image`, `College`, `Course`, `CLSU_ID_Image`, `Home_Address`, `CLSU_Address`, `Contact`, `Social_Links`, `Date_Created`, `last_activity` FROM `users` WHERE `User_ID` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Check if all values are not null to determine status
$status = "Complete";
$fields_to_ignore = ['Social_Links', 'last_activity'];
foreach ($user as $key => $value) {
  if (is_null($value) && !in_array($key, $fields_to_ignore)) {
    $status = "Incomplete";
    break;
  }
}

// Query to fetch item details for the specific Poster_ID
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
        WHERE `items`.`Poster_ID` = ?
        ORDER BY `items`.`Item_ID` DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$items_data = array();

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    // Cast Type, Category_ID, and Item_Status as integers
    $row['Type'] = (int) $row['Type'];
    $row['Category_ID'] = (int) $row['Category_ID'];
    $row['Item_Status'] = (int) $row['Item_Status'];
    $items_data[] = $row;
  }
}

// Convert the array to a JSON object
$items_json_data = json_encode(array('data' => $items_data));

// Write the JSON data to a file
$success_items = file_put_contents('../../assets/json/user-item-list.json', $items_json_data);
if (!$success_items) {
  echo "Error: Unable to write items JSON data to file.";
} else {
  echo "Items JSON data successfully written to file.";
}

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
    WHERE `items`.`Poster_ID` = ?
    ORDER BY `claims`.`Claim_ID` DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$claims_data = array();

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    // Cast Type, Category_ID, Claim_Status, and Verification_Status as integers
    $row['Type'] = (int) $row['Type'];
    $row['Category_ID'] = (int) $row['Category_ID'];
    $row['Claim_Status'] = (int) $row['Claim_Status'];
    $row['Verification_Status'] = (int) $row['Verification_Status'];
    $claims_data[] = $row;
  }
}

// Convert the array to a JSON object
$claims_json_data = json_encode(array('data' => $claims_data));

// Write the JSON data to a file
$success_claims = file_put_contents('../../assets/json/user-item-claims.json', $claims_json_data);
if (!$success_claims) {
  echo "Error: Unable to write claims JSON data to file.";
} else {
  echo "Claims JSON data successfully written to file.";
}

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
    WHERE `claims`.`Claimer_ID` = ?
    ORDER BY `claims`.`Claim_ID` DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$claims_data = array();

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    // Cast Type, Category_ID, Claim_Status, and Verification_Status as integers
    $row['Type'] = (int) $row['Type'];
    $row['Category_ID'] = (int) $row['Category_ID'];
    $row['Claim_Status'] = (int) $row['Claim_Status'];
    $row['Verification_Status'] = (int) $row['Verification_Status'];
    $claims_data[] = $row;
  }
}

// Convert the array to a JSON object
$claims_json_data = json_encode(array('data' => $claims_data));

// Write the JSON data to a file
$success_claims = file_put_contents('../../assets/json/user-claims.json', $claims_json_data);
if (!$success_claims) {
  echo "Error: Unable to write claims JSON data to file.";
} else {
  echo "Claims JSON data successfully written to file.";
}

$conn->close();
?>


<style>
  #show-more {
    color: #a5a3ae;
    /* Bootstrap's text-muted color */
    cursor: pointer;
  }

  #show-more:hover {
    color: #04764e;
    text-decoration: underline;
  }

  #show-more-container {
    text-align: right;
    margin-bottom: 20px;
    margin-right: 20px;


  }

  .avatar-initial {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
  }
</style>

<link rel="stylesheet" href="../../assets/vendor/css/pages/page-user-view.css" />

<link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />

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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">User / View /</span> Account</h4>
            <div class="row">
              <!-- User Sidebar -->
              <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="user-avatar-section">
                      <div class="d-flex align-items-center flex-column">
                        <?php
                        $avatarImage = isset($user['Avatar_Image']) ? '../../assets/uploads/user-avatar/' . $user['Avatar_Image'] : '';
                        $avatarExists = !empty($user['Avatar_Image']);
                        $fullName = isset($user['FullName']) ? $user['FullName'] : 'Unknown User';
                        $initials = strtoupper($fullName[0]) . (strpos($fullName, ' ') ? strtoupper($fullName[strpos($fullName, ' ') + 1]) : '');

                        if ($avatarExists) {
                          echo '<img id="userAvatar" class="img-fluid rounded mb-3 pt-1 mt-4" src="' . $avatarImage . '" height="100" width="100" alt="User avatar" onerror="handleImageError(this,\'' . $initials . '\');" />';
                        } else {
                          echo '<span class="avatar-initial rounded-2 bg-label-secondary mb-3 pt-1 mt-4">' . $initials . '</span>';
                        }
                        ?>
                        <div class="user-info text-center">
                          <h4 class="mb-2"><?php echo $fullName; ?></h4>
                          <span class="badge bg-label-secondary mt-1"><?php echo isset($user['Role']) ? $user['Role'] : 'No Role'; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-around flex-wrap mt-3 pt-3 pb-4 border-bottom">
                      <div class="d-flex align-items-start me-4 mt-3 gap-2">
                        <span class="badge bg-label-primary p-2 rounded"><i class="ti ti-checkbox ti-sm"></i></span>
                        <div>
                          <p class="mb-0 fw-medium">1.23k</p>
                          <small>Tasks Done</small>
                        </div>
                      </div>
                      <div class="d-flex align-items-start mt-3 gap-2">
                        <span class="badge bg-label-primary p-2 rounded"><i class="ti ti-briefcase ti-sm"></i></span>
                        <div>
                          <p class="mb-0 fw-medium">568</p>
                          <small>Projects Done</small>
                        </div>
                      </div>
                    </div>
                    <p class="mt-4 small text-uppercase text-muted">Details</p>
                    <div class="info-container">
                      <ul class="list-unstyled">
                        <li class="mb-2"><strong>Username:</strong> <span><?php echo $user['Username']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Email:</strong> <span><?php echo $user['Email']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Status:</strong> <span class="badge bg-label-<?php echo $status == 'Complete' ? 'success' : 'danger'; ?>"><?php echo $status; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Role:</strong> <span><?php echo $user['Role']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>College:</strong> <span><?php echo $user['College']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Course:</strong> <span><?php echo $user['Course']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Home Address:</strong> <span><?php echo $user['Home_Address']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>CLSU Address:</strong> <span><?php echo $user['CLSU_Address']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Contact:</strong> <span><?php echo $user['Contact']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Social Links:</strong> <span><?php echo $user['Social_Links']; ?></span></li>
                        <li class="mb-2 pt-1"><strong>Date Created:</strong> <span><?php echo $user['Date_Created']; ?></span></li>
                      </ul>
                      <div class="d-flex justify-content-center">
                        <a href="javascript:;" class="btn btn-primary me-3" data-user-id="<?php echo $user_id; ?>" id="editUserButton">Edit</a>
                        <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /User Card -->
                <!-- Plan Card -->
                <div class="card mb-4">
                  <h5 class="card-header">User Activity Timeline</h5>
                  <div class="card-body pb-0">
                    <ul id="timeline" class="timeline mb-0">
                      <?php foreach ($activities as $index => $activity) : ?>
                        <li class="timeline-item timeline-item-transparent <?php echo $index === count($activities) - 1 ? 'border-transparent' : ''; ?>">
                          <span class="timeline-point timeline-point-<?php echo getActivityTypeColor($activity['activity_type']); ?>"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h5 class="mb-0"><?php echo getActivityDescription($activity); ?></h5>
                              <small class="text-muted"><?php echo formatTimestamp($activity['timestamp']); ?></small>
                            </div>
                            <p class="mb-2"><?php echo $activity['description']; ?></p>
                          </div>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                    <div id="show-more-container" class="mt-3">
                      <span class="text-muted" id="show-more">Show More</span>
                    </div>
                  </div>
                </div>
                <!-- /Plan Card -->
              </div>
              <!--/ User Sidebar -->

              <!-- User Content -->
              <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="nav nav-pills flex-column flex-md-row mb-4">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="ti ti-user-check ti-xs me-1"></i>Account</a>
                  </li>
                </ul>
                <!--/ User Pills -->

                <!-- Project table -->
                <div class="card mb-4">
                  <h5 class="card-header">User's Item List</h5>
                  <div class="table-responsive mb-3">
                    <table class="table datatable-project border-top">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Item</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <!-- /Project table -->

                <!-- User's Item Claims table -->
                <div class="card mb-4">
                  <h5 class="card-header">User's Item Claims List</h5>
                  <div class="table-responsive mb-3">
                    <table class="table datatable-claims border-top">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Item</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <!-- User's Item Claims table -->

                <!-- User's Claims table -->
                <div class="card mb-4">
                  <h5 class="card-header">User's Claim List</h5>
                  <div class="table-responsive mb-3">
                    <table class="table datatable-myclaims border-top">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Item</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <!-- User's Claims table -->
                <!-- <div id="show-more-container" class="mt-3">
                  <span class="text-muted" id="show-more">Show More</span>
                </div> -->

              </div>
              <!--/ User Content -->
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


            <!-- Modal -->
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
            <!-- Modal -->

            <!-- Modal for delete confirmation for Claims -->
            <div class="modal fade" id="deleteClaimsModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="deleteClaimsModalTitle">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete this claim with ID: <span id="claimToDelete"></span>?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="confirmDeleteClaimsBtn" class="btn btn-primary">Delete</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal for claim -->
            <div class="modal fade" id="claimModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="claimModalTitle">Claim Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3><span id="modalItemTypeClaims" class="badge"></span></h3>
                    <h3><span id="modalItemNameClaim"></span></h3>
                    <h5 class="card-subtitle text-muted"><span id="modalcategoryNameClaims"></span></h5>
                    <br>

                    <div id="modalProofImages" class="d-flex flex-column align-items-center mb-4">
                      <!-- Proof images will be inserted here dynamically -->
                    </div>

                    <div class="col-md-12 mb-3">
                      <label class="form-label" for="modalProof">Proof</label>
                      <textarea class="form-control" id="modalProof" rows="3" name="proof" disabled></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                      <label class="form-label" for="modalRemarksClaims">Remarks</label>
                      <textarea class="form-control" id="modalRemarksClaims" rows="3" name="remarks" disabled></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                      <label class="form-label" for="modalClaimDate">Claim Date</label>
                      <input type="text" class="form-control" id="modalClaimDate" name="claimDate" disabled />
                    </div>

                    <div class="col-md-12 mb-3">
                      <label class="form-label" for="modalVerificationStatus">Verification Status:&nbsp;</label>
                      <span id="modalVerificationStatus" class="badge" style="font-size:20px;"></span>
                    </div>

                    <div class="col-md-12 mb-3">
                      <label class="form-label" for="modalClaimStatus">Claim Status:&nbsp;</label>
                      <span id="modalClaimStatus" class="badge" style="font-size:20px;"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
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
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/modal-edit-user.js"></script>
  <script src="../../assets/js/app-user-view.js"></script>
  <script src="../../assets/js/app-user-view-account.js"></script>

  <script>
    function handleImageError(img, initials) {
      img.outerHTML = '<span class="avatar-initial rounded-2 bg-label-secondary mb-3 pt-1 mt-4">' + initials + '</span>';
    }
  </script>

  <script>
    $(document).ready(function() {
      const activities = <?php echo json_encode($activities); ?>;
      let shownCount = 0;
      const increment = 10;

      function showActivities(count) {
        $('#timeline .timeline-item').hide();
        $('#timeline .timeline-item').slice(0, count).show();
        shownCount = count;

        if (shownCount >= activities.length) {
          $('#show-more').hide();
        } else {
          $('#show-more').text(shownCount === 10 ? 'Show More' : 'Show All');
        }
      }

      $('#show-more').click(function() {
        if (shownCount === 10) {
          showActivities(20);
        } else {
          showActivities(activities.length);
        }
      });

      // Initially show first 10 activities
      showActivities(increment);
    });
  </script>
  <script>
    document.getElementById('editUserButton').addEventListener('click', function() {
      var userId = this.getAttribute('data-user-id');
      window.location.href = 'form-edit-user.php?user_id=' + userId;
    });
  </script>

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

      var verifyObj = {
        0: {
          title: 'Pending',
          class: 'bg-label-secondary'
        },
        1: {
          title: 'Declined',
          class: 'bg-label-warning'
        },
        2: {
          title: 'Approved',
          class: 'bg-label-success'
        }
      };

      // Event delegation to handle click event on dynamically created 'View' links
      document.addEventListener('click', function(event) {
        if (event.target.matches('.view-modal-trigger')) {
          event.preventDefault();
          try {
            var dataAttr = event.target.getAttribute('data-item') ? 'data-item' : 'data-claim';
            var itemData = JSON.parse(event.target.getAttribute(dataAttr));

            if (dataAttr === 'data-item') {
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

              var cardModal = new bootstrap.Modal(document.getElementById('cardModal'));
              cardModal.show();

            } else if (dataAttr === 'data-claim') {
              document.getElementById('claimModalTitle').innerText = 'Claim ID: ' + itemData.claimId;

              document.getElementById('modalItemNameClaim').innerText = itemData.itemNameClaims || 'N/A';
              document.getElementById('modalcategoryNameClaims').innerText = itemData.categoryNameClaims || 'N/A';
              document.getElementById('modalProof').value = itemData.proof || '';
              document.getElementById('modalRemarksClaims').value = itemData.remarksClaims || '';
              document.getElementById('modalClaimDate').value = itemData.claimDate || 'N/A';

              var itemTypeElement = document.getElementById('modalItemTypeClaims');
              itemTypeElement.innerText = (typeMap[itemData.itemType] && typeMap[itemData.itemType].title) || 'Unknown';
              itemTypeElement.className = 'badge ' + ((typeMap[itemData.itemType] && typeMap[itemData.itemType].class) || 'bg-label-secondary');

              var claimStatusElement = document.getElementById('modalClaimStatus');
              claimStatusElement.innerText = (statusMap[itemData.claimStatus] && statusMap[itemData.claimStatus].title) || 'Unknown';
              claimStatusElement.className = 'badge ' + ((statusMap[itemData.claimStatus] && statusMap[itemData.claimStatus].class) || 'bg-label-secondary');

              var verificationStatusElement = document.getElementById('modalVerificationStatus');
              verificationStatusElement.innerText = (verifyObj[itemData.verificationStatus] && verifyObj[itemData.verificationStatus].title) || 'Unknown';
              verificationStatusElement.className = 'badge ' + ((verifyObj[itemData.verificationStatus] && verifyObj[itemData.verificationStatus].class) || 'bg-label-secondary');

              var proofImagesContainer = document.getElementById('modalProofImages');
              proofImagesContainer.innerHTML = ''; // Clear previous images
              if (itemData.proofImage) {
                var images = itemData.proofImage.split(',');
                images.forEach(function(image) {
                  var imgElement = document.createElement('img');
                  imgElement.src = '../../assets/uploads/proofs/' + image.trim();
                  imgElement.className = 'img-fluid rounded mx-1 my-1';
                  imgElement.style.maxWidth = '500px'; // Adjust as needed
                  proofImagesContainer.appendChild(imgElement);
                });
              } else {
                proofImagesContainer.innerHTML = '<p>No proof images available.</p>';
              }

              var claimModal = new bootstrap.Modal(document.getElementById('claimModal'));
              claimModal.show();
            }
          } catch (error) {
            console.error('Error parsing data:', error);
          }
        }
      });
    });
  </script>

  </script>
</body>

</html>