<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>User List - Pages | ULAF Admin</title>

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
            <div class="row g-4 mb-4">
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Session</span>
                        <div class="d-flex align-items-center my-2">
                          <h3 class="mb-0 me-2">21,459</h3>
                          <p class="text-success mb-0">(+29%)</p>
                        </div>
                        <p class="mb-0">Total Users</p>
                      </div>
                      <div class="avatar">
                        <span class="avatar-initial rounded bg-label-primary">
                          <i class="ti ti-user ti-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Paid Users</span>
                        <div class="d-flex align-items-center my-2">
                          <h3 class="mb-0 me-2">4,567</h3>
                          <p class="text-success mb-0">(+18%)</p>
                        </div>
                        <p class="mb-0">Last week analytics</p>
                      </div>
                      <div class="avatar">
                        <span class="avatar-initial rounded bg-label-danger">
                          <i class="ti ti-user-plus ti-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Active Users</span>
                        <div class="d-flex align-items-center my-2">
                          <h3 class="mb-0 me-2">19,860</h3>
                          <p class="text-danger mb-0">(-14%)</p>
                        </div>
                        <p class="mb-0">Last week analytics</p>
                      </div>
                      <div class="avatar">
                        <span class="avatar-initial rounded bg-label-success">
                          <i class="ti ti-user-check ti-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Pending Users</span>
                        <div class="d-flex align-items-center my-2">
                          <h3 class="mb-0 me-2">237</h3>
                          <p class="text-success mb-0">(+42%)</p>
                        </div>
                        <p class="mb-0">Last week analytics</p>
                      </div>
                      <div class="avatar">
                        <span class="avatar-initial rounded bg-label-warning">
                          <i class="ti ti-user-exclamation ti-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Users List Table -->
            <div class="card">
              <div class="card-header border-bottom">
                <h5 class="card-title col-sm-6">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                  <div class="col-md-6 user_role"></div>
                  <div class="col-md-6 user_course"></div>
                </div>
              </div>
              <div class="card-datatable table-responsive">
                <table class="datatables-users table">
                  <thead class="border-top">
                    <tr>
                      <th></th>
                      <th>User</th>
                      <th>User Type</th>
                      <th>User ID</th>
                      <th>Course</th>
                      <th>Contact</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- Offcanvas to add new user -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel" style="--bs-offcanvas-width: 800px">
                <div class="offcanvas-header">
                  <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                  <div class="divider text-start-center">
                    <div class="divider-text">Account Details</div>
                  </div>
                  <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                    <div class="row g-3">

                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-username">Username</label>
                        <input type="text" class="form-control" id="add-user-username" placeholder="jdoe1" aria-label="jdoe1" name="username" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-role">User Type</label>
                        <select id="add-user-role" class="form-select">
                          <option value="Student">Student</option>
                          <option value="Faculty">Faculty</option>
                          <option value="Staff">Staff</option>
                        </select>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label" for="add-user-fullname">Full Name</label>
                        <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-password">Password</label>
                        <input type="password" id="add-user-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-label="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" name="password" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-confirm-password">Confirm Password</label>
                        <input type="password" id="add-user-confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-label="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" name="confirmPassword" />
                      </div>

                      <div class="divider text-start-center">
                        <div class="divider-text">Academic Info</div>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-email">Email</label>
                        <input type="email" id="add-user-email" class="form-control" placeholder="example@example.com" aria-label="example@example.com" name="userEmail" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-college-add">College</label>
                        <select id="add-user-college-add" class="form-select">
                          <option value="Select College">Select College</option>
                          <optgroup label="Undergraduate">
                            <option value="College of Agriculture">College of Agriculture</option>
                            <option value="College of Arts and Social Sciences">College of Arts and Social Sciences</option>
                            <option value="College of Business Administration and Accountancy">College of Business Administration and Accountancy</option>
                            <option value="College of Education">College of Education</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Fisheries">College of Fisheries</option>
                            <option value="College of Home Science and Industry">College of Home Science and Industry</option>
                            <option value="College of Science">College of Science</option>
                            <option value="College of Veterinary Science and Medicine">College of Veterinary Science and Medicine</option>
                          </optgroup>
                          <optgroup label="Graduate">
                            <option value="Doctor of Philosophy">Doctor of Philosophy</option>
                            <option value="Master of Science">Master of Science</option>
                            <option value="Other Masteral Programs">Other Masteral Programs</option>
                          </optgroup>
                          <optgroup label="Other Curricular Offerings">
                            <option value="Distance, Open, and Transnational University (DOTUni)">Distance, Open, and Transnational University (DOTUni)</option>
                            <option value="Institute of Sports, Physical Education and Recreation">Institute of Sports, Physical Education and Recreation</option>
                            <option value="Vocational Course (1-Year Program)">Vocational Course (1-Year Program)</option>
                          </optgroup>
                        </select>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-course-add">Course</label>
                        <select id="add-user-course-add" class="form-select">
                          <option value="">Select a course</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-clsu-id-image">CLSU ID Image</label>
                        <input type="file" id="add-user-clsu-id-image" class="form-control" name="clsuIdImage" />
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label" for="add-user-clsu-address">CLSU Address</label>
                        <textarea id="add-user-clsu-address" class="form-control" placeholder="CLSU Main Campus, Science City of Muñoz, Nueva Ecija, Philippines" aria-label="CLSU Main Campus, Science City of Muñoz, Nueva Ecija, Philippines" name="clsuAddress"></textarea>
                      </div>

                      <div class="divider text-start-center">
                        <div class="divider-text">Personal Details</div>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-avatar">Upload Avatar Image</label>
                        <input type="file" id="add-user-avatar" class="form-control" name="avatarImage" />
                      </div>


                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-contact">Contact</label>
                        <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-home-address">Home Address</label>
                        <textarea id="add-user-home-address" class="form-control" placeholder="123 Main St, Anytown, USA" aria-label="123 Main St, Anytown, USA" name="homeAddress"></textarea>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-social-links">Other Social Links (separated by commas)</label>
                        <textarea id="add-user-social-links" class="form-control" placeholder="https://www.facebook.com/johndoe, https://www.twitter.com/johndoe" aria-label="https://www.facebook.com/johndoe, https://www.twitter.com/johndoe" name="socialLinks"></textarea>
                      </div>





                      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Offcanvas to edit user -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditUser" aria-labelledby="offcanvasEditUserLabel" style="--bs-offcanvas-width: 800px">
                <div class="offcanvas-header">
                  <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Edit User</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                  <div class="divider text-start-center">
                    <div class="divider-text">Account Details</div>
                  </div>
                  <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                    <div class="row g-3">

                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-username">Username</label>
                        <input type="text" class="form-control" id="add-user-username" placeholder="jdoe1" aria-label="jdoe1" name="username" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-role">User Type</label>
                        <select id="add-user-role" class="form-select">
                          <option value="Student">Student</option>
                          <option value="Faculty">Fadsfsdfsdfculty</option>
                          <option value="Staff">Staff</option>
                        </select>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label" for="add-user-fullname">Full Name</label>
                        <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-password">Password</label>
                        <input type="password" id="add-user-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-label="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" name="password" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-confirm-password">Confirm Password</label>
                        <input type="password" id="add-user-confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-label="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" name="confirmPassword" />
                      </div>

                      <div class="divider text-start-center">
                        <div class="divider-text">Academic Info</div>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-email">Email</label>
                        <input type="email" id="add-user-email" class="form-control" placeholder="example@example.com" aria-label="example@example.com" name="userEmail" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-college-edit">College</label>
                        <select id="add-user-college-edit" class="form-select">
                          <option value="Select College">Select College</option>
                          <optgroup label="Undergraduate">
                            <option value="College of Agriculture">College of Agriculture</option>
                            <option value="College of Arts and Social Sciences">College of Arts and Social Sciences</option>
                            <option value="College of Business Administration and Accountancy">College of Business Administration and Accountancy</option>
                            <option value="College of Education">College of Education</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Fisheries">College of Fisheries</option>
                            <option value="College of Home Science and Industry">College of Home Science and Industry</option>
                            <option value="College of Science">College of Science</option>
                            <option value="College of Veterinary Science and Medicine">College of Veterinary Science and Medicine</option>
                          </optgroup>
                          <optgroup label="Graduate">
                            <option value="Doctor of Philosophy">Doctor of Philosophy</option>
                            <option value="Master of Science">Master of Science</option>
                            <option value="Other Masteral Programs">Other Masteral Programs</option>
                          </optgroup>
                          <optgroup label="Other Curricular Offerings">
                            <option value="Distance, Open, and Transnational University (DOTUni)">Distance, Open, and Transnational University (DOTUni)</option>
                            <option value="Institute of Sports, Physical Education and Recreation">Institute of Sports, Physical Education and Recreation</option>
                            <option value="Vocational Course (1-Year Program)">Vocational Course (1-Year Program)</option>
                          </optgroup>
                        </select>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-course-edit">Course</label>
                        <select id="add-user-course-edit" class="form-select">
                          <option value="">Select a course</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-clsu-id-image">CLSU ID Image</label>
                        <input type="file" id="add-user-clsu-id-image" class="form-control" name="clsuIdImage" />
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label" for="add-user-clsu-address">CLSU Address</label>
                        <textarea id="add-user-clsu-address" class="form-control" placeholder="CLSU Main Campus, Science City of Muñoz, Nueva Ecija, Philippines" aria-label="CLSU Main Campus, Science City of Muñoz, Nueva Ecija, Philippines" name="clsuAddress"></textarea>
                      </div>

                      <div class="divider text-start-center">
                        <div class="divider-text">Personal Details</div>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-avatar">Upload Avatar Image</label>
                        <input type="file" id="add-user-avatar" class="form-control" name="avatarImage" />
                      </div>


                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-contact">Contact</label>
                        <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-home-address">Home Address</label>
                        <textarea id="add-user-home-address" class="form-control" placeholder="123 Main St, Anytown, USA" aria-label="123 Main St, Anytown, USA" name="homeAddress"></textarea>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="add-user-social-links">Other Social Links (separated by commas)</label>
                        <textarea id="add-user-social-links" class="form-control" placeholder="https://www.facebook.com/johndoe, https://www.twitter.com/johndoe" aria-label="https://www.facebook.com/johndoe, https://www.twitter.com/johndoe" name="socialLinks"></textarea>
                      </div>





                      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Edit USer</button>
                      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
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
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/app-user-end-list.js"></script>
  <script>
    function populateCourses(collegeDropdown, courseDropdown) {
      collegeDropdown.addEventListener("change", function() {
        const selectedCollege = this.value;
        courseDropdown.innerHTML = "<option value=''>Select a course</option>"; // Clear existing options

        // Populate course options based on selected college
        switch (selectedCollege) { // Undergraduate
          case "College of Agriculture":
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Agribusiness (BSAb)'>Bachelor of Science in Agribusiness (BSAb)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Agriculture (BSA)'>Bachelor of Science in Agriculture (BSA)</option>";
            break;

          case "College of Arts and Social Sciences":
            courseDropdown.innerHTML += "<option value='Bachelor of Arts in Filipino (BAFil)'>Bachelor of Arts in Filipino (BAFil)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Arts in Literature (BALit)'>Bachelor of Arts in Literature (BALit)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Arts in Social Sciences (BASS)'>Bachelor of Arts in Social Sciences (BASS)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Development Communication (BSDC)'>Bachelor of Science in Development Communication (BSDC)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Psychology (BSPsych)'>Bachelor of Science in Psychology (BSPsych)</option>";
            break;

          case "College of Business Administration and Accountancy":
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Accountancy (BSAc)'>Bachelor of Science in Accountancy (BSAc)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Business Administration (BSBA)'>Bachelor of Science in Business Administration (BSBA)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Entrepreneurship (BSEntrep)'>Bachelor of Science in Entrepreneurship (BSEntrep)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Management Accounting (BSMA)'>Bachelor of Science in Management Accounting (BSMA)</option>";
            break;

          case "College of Education":
            courseDropdown.innerHTML += "<option value='Bachelor of Culture and Arts Education (BCAEd)'>Bachelor of Culture and Arts Education (BCAEd)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Early Childhood Education (BECEd)'>Bachelor of Early Childhood Education (BECEd)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Elementary Education (BEEd)'>Bachelor of Elementary Education (BEEd)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Physical Education (BPEd)'>Bachelor of Physical Education (BPEd)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Secondary Education (BSEd)'>Bachelor of Secondary Education (BSEd)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Technology and Livelihood Education (BTLEd)'>Bachelor of Technology and Livelihood Education (BTLEd)</option>";
            break;

          case "College of Engineering":
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)'>Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Civil Engineering (BSCE)'>Bachelor of Science in Civil Engineering (BSCE)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Information Technology (BSIT)'>Bachelor of Science in Information Technology (BSIT)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Meteorology (BSMet)'>Bachelor of Science in Meteorology (BSMet)</option>";
            break;

          case "College of Fisheries":
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Fisheries (BSF)'>Bachelor of Science in Fisheries (BSF)</option>";
            break;

          case "College of Home Science and Industry":
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Food Technology (BSFT)'>Bachelor of Science in Food Technology (BSFT)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Fashion and Textile Technology (BSFTT)'>Bachelor of Science in Fashion and Textile Technology (BSFTT)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Hospitality Management (BSHM)'>Bachelor of Science in Hospitality Management (BSHM)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Tourism Management (BSTM)'>Bachelor of Science in Tourism Management (BSTM)</option>";
            break;

          case "College of Science":
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Biology (BSBio)'>Bachelor of Science in Biology (BSBio)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Chemistry (BSChem)'>Bachelor of Science in Chemistry (BSChem)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Environmental Science (BSES)'>Bachelor of Science in Environmental Science (BSES)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Mathematics (BSMath)'>Bachelor of Science in Mathematics (BSMath)</option>";
            courseDropdown.innerHTML += "<option value='Bachelor of Science in Statistics (BSStat)'>Bachelor of Science in Statistics (BSStat)</option>";
            break;

          case "College of Veterinary Science and Medicine":
            courseDropdown.innerHTML += "<option value='Doctor of Veterinary Medicine (DVM)'>Doctor of Veterinary Medicine (DVM)</option>";
            break;
            // Graduate
          case "Doctor of Philosophy":
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy'>Doctor of Philosophy</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Agricultural Engineering'>Doctor of Philosophy in Agricultural Engineering</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Agricultural Entomology'>Doctor of Philosophy in Agricultural Entomology</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Animal Science'>Doctor of Philosophy in Animal Science</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Aquaculture'>Doctor of Philosophy in Aquaculture</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Biology'>Doctor of Philosophy in Biology</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Crop Science'>Doctor of Philosophy in Crop Science</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Development Communication'>Doctor of Philosophy in Development Communication</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Development Education'>Doctor of Philosophy in Development Education</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Environmental Management'>Doctor of Philosophy in Environmental Management</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Plant Breeding'>Doctor of Philosophy in Plant Breeding</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Rural Development'>Doctor of Philosophy in Rural Development</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Soil Science'>Doctor of Philosophy in Soil Science</option>";
            courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Sustainable Food Systems by Research Program (DOTUni)'>Doctor of Philosophy in Sustainable Food Systems by Research Program (DOTUni)</option>";
            break;
          case "Master of Science":
            courseDropdown.innerHTML += "<option value='Master of Science in Agricultural Economics'>Master of Science in Agricultural Economics</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Agricultural Engineering'>Master of Science in Agricultural Engineering</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Animal Science'>Master of Science in Animal Science</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Aquaculture'>Master of Science in Aquaculture</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Biology'>Master of Science in Biology</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Biology Education'>Master of Science in Biology Education</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Chemistry Education'>Master of Science in Chemistry Education</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Crop Protection'>Master of Science in Crop Protection</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Crop Science'>Master of Science in Crop Science</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Development Communication'>Master of Science in Development Communication</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Education'>Master of Science in Education</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Environmental Management'>Master of Science in Environmental Management</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Grain Science'>Master of Science in Grain Science</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Guidance and Counselling'>Master of Science in Guidance and Counselling</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Rural Development'>Master of Science in Rural Development</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Soil Science'>Master of Science in Soil Science</option>";
            break;
          case "Other Masteral Programs":
            courseDropdown.innerHTML += "<option value='Master of Arts in Language and Literature'>Master of Arts in Language and Literature</option>";
            courseDropdown.innerHTML += "<option value='Master of Science in Renewable Energy Systems (DOTUni)'>Master of Science in Renewable Energy Systems (DOTUni)</option>";
            courseDropdown.innerHTML += "<option value='Master of Veterinary Studies'>Master of Veterinary Studies</option>";
            courseDropdown.innerHTML += "<option value='Master in Agribusiness Management'>Master in Agribusiness Management</option>";
            courseDropdown.innerHTML += "<option value='Master in Biology'>Master in Biology</option>";
            courseDropdown.innerHTML += "<option value='Master in Business Administration'>Master in Business Administration</option>";
            courseDropdown.innerHTML += "<option value='Master in Chemistry'>Master in Chemistry</option>";
            courseDropdown.innerHTML += "<option value='Master in Environmental Management (DOTUni)'>Master in Environmental Management (DOTUni)</option>";
            courseDropdown.innerHTML += "<option value='Master in Local Government Management (DOTUni)'>Master in Local Government Management (DOTUni)</option>";
            break;

            //Other
          case "Distance, Open, and Transnational University (DOTUni)":
            courseDropdown.innerHTML += "<option value='Diploma in Land Use Planning'>Diploma in Land Use Planning</option>";
            courseDropdown.innerHTML += "<option value='Diploma in Local Government Management'>Diploma in Local Government Management</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Agricultural Research Management'>Certificate in Agricultural Research Management</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Basic Environmental Impact Assessment'>Certificate in Basic Environmental Impact Assessment</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Basic Local Governance'>Certificate in Basic Local Governance</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Entrepreneurship'>Certificate in Entrepreneurship</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Local Development Planning'>Certificate in Local Development Planning</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Project Feasibility Preparation and Implementation'>Certificate in Project Feasibility Preparation and Implementation</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Training Management'>Certificate in Training Management</option>";
            courseDropdown.innerHTML += "<option value='Certificate in Teaching'>Certificate in Teaching</option>";
            break;

          case "Institute of Sports, Physical Education and Recreation":
            courseDropdown.innerHTML += "<option value='Certificate in Physical Education'>Certificate in Physical Education</option>";
            break;

          case "Vocational Course (1-Year Program)":
            courseDropdown.innerHTML += "<option value='Certificate in Agricultural Mechanics'>Certificate in Agricultural Mechanics</option>";
            break;
        }
      });
    }
  </script>
  <script>
    // Get the college and course dropdowns for both offcanvasAddUser and offcanvasEditUser
    const addUserCollegeDropdown = document.getElementById("add-user-college-add");
    const addUserCourseDropdown = document.getElementById("add-user-course-add");

    const editUserCollegeDropdown = document.getElementById("add-user-college-edit");
    const editUserCourseDropdown = document.getElementById("add-user-course-edit");

    // Call the populateCourses function for both offcanvas elements
    populateCourses(addUserCollegeDropdown, addUserCourseDropdown);
    populateCourses(editUserCollegeDropdown, editUserCourseDropdown);
  </script>
</body>

</html>