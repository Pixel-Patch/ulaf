<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Register Cover - Pages | Vuexy - Bootstrap Admin Template</title>

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
  <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

  <!-- Page Specific CSS (if applicable) -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers and Config JavaScripts -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <script src="../../assets/js/config.js"></script>

</head>

<body>
  <!-- Content -->

  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <!-- /Left Text -->
      <div class="d-none d-lg-flex col-lg-6 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img src="../../assets/img/illustrations/auth-register-illustration-light.png" alt="auth-register-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-register-illustration-light.png" data-app-dark-img="illustrations/auth-register-illustration-dark.png" />

          <img src="../../assets/img/illustrations/bg-shape-image-light.png" alt="auth-register-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
        </div>
      </div>
      <!-- /Left Text -->

      <!-- Register -->
      <div class="d-flex col-12 col-lg-6 align-items-center p-sm-5 p-4">


        <div id="wizard-validation" class="bs-stepper mt-2">
          <div class="bs-stepper-content" style="margin-bottom: -20px;">
            <div class="content-header mb-">
              <h3 class="mb-1">Adventure starts here 🚀</h3>
              <p class="mb-1">Make your app management easy and fun!</p>
            </div>
          </div>
          <div class="bs-stepper-header">
            <div class="step" data-target="#account-details-validation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">1</span>
                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Account Details</span>
                  <span class="bs-stepper-subtitle">Setup Account Details</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#personal-info-validation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">2</span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Personal Info</span>
                  <span class="bs-stepper-subtitle">Add personal info</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#social-links-validation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Social Links</span>
                  <span class="bs-stepper-subtitle">Add social links</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">
            <form id="wizard-validation-form" onSubmit="return false">
              <!-- Account Details -->
              <div id="account-details-validation" class="content">
                <div class="content-header mb-3">
                  <h6 class="mb-0">Account Details</h6>
                  <small>Enter Your Account Details.</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationUserID">User ID</label>
                    <input type="text" name="formValidationUserID" id="formValidationUserID" class="form-control" placeholder="24-0001" />
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationUsername">Username</label>
                    <input type="text" name="formValidationUsername" id="formValidationUsername" class="form-control" placeholder="johndoe" />
                  </div>
                  <div class="col-sm-12">
                    <label class="form-label" for="formValidationFullname">Fullname</label>
                    <input type="text" name="formValidationFullname" id="formValidationFullname" class="form-control" placeholder="Xavier Carl  A. Dela Cruz Sr." />
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <label class="form-label" for="formValidationPass">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="formValidationPass" name="formValidationPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="formValidationPass2" />
                      <span class="input-group-text cursor-pointer" id="formValidationPass2"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="formValidationConfirmPass" name="formValidationConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="formValidationConfirmPass2" />
                      <span class="input-group-text cursor-pointer" id="formValidationConfirmPass2"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev" disabled>
                      <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                      <i class="ti ti-arrow-right"></i>
                    </button>
                  </div>
                  <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="auth-login-cover.php">
                      <span>Sign in instead</span>
                    </a>
                  </p>
                </div>
              </div>
              <!-- Personal Info -->
              <div id="personal-info-validation" class="content">
                <div class="content-header mb-3">
                  <h6 class="mb-0">Academic Info</h6>
                  <small>Enter your academic info.</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationEmail">Email</label>
                    <input type="email" name="formValidationEmail" id="formValidationEmail" class="form-control" placeholder="john.doe@clsu2.edu.ph" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="add-user-college">College</label>
                    <select id="add-user-college" class="form-select">
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
                    <label class="form-label" for="add-user-course">Course</label>
                    <select id="add-user-course" class="form-select">
                      <option value="">Select a course</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationIDImage">Upload CLSU ID Image</label>
                    <input type="file" name="formValidationIDImage" id="formValidationIDImage" class="form-control" required />
                  </div>
                  <div class="col-sm-12">
                    <label class="form-label" for="formValidationCLSUAddress">CLSU Address</label>
                    <input type="text" name="formValidationCLSUAddress" id="formValidationCLSUAddress" class="form-control" placeholder="CLSU Address" required />
                  </div>

                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev">
                      <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                      <i class="ti ti-arrow-right"></i>
                    </button>
                  </div>
                  <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="auth-login-cover.php">
                      <span>Sign in instead</span>
                    </a>
                  </p>
                </div>
              </div>
              <!-- Social Links -->
              <div id="social-links-validation" class="content">
                <div class="content-header mb-3">
                  <h6 class="mb-0">Personal Details</h6>
                  <small>Enter your personal details and social links.</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationAvatar">Upload Avatar Image</label>
                    <input type="file" name="formValidationAvatar" id="formValidationAvatar" class="form-control" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationHomeAddress">Home Address</label>
                    <input type="text" name="formValidationHomeAddress" id="formValidationHomeAddress" class="form-control" placeholder="456 Home Street" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationContact">Contact</label>
                    <input type="text" name="formValidationContact" id="formValidationContact" class="form-control" placeholder="+639 76 888 8888" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="formValidationOtherSocialLinks">Other Social Links (separated by commas)</label>
                    <input type="text" name="formValidationOtherSocialLinks" id="formValidationOtherSocialLinks" class="form-control" placeholder="m.me/username, t.me/username" />
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                      <label class="form-check-label" for="terms-conditions">
                        I agree to
                        <a href="javascript:void(0);">privacy policy & terms</a>
                      </label>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev">
                      <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-next btn-submit">Submit</button>
                  </div>
                  <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="auth-login-cover.php">
                      <span>Sign in instead</span>
                    </a>
                  </p>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>

  <!-- / Content -->
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
  <script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page Specific JS (if applicable) -->
  <script src="../../assets/js/form-wizard-numbered.js"></script>
  <script src="../../assets/js/form-wizard-validation.js"></script>
  <script src="../../assets/js/pages-auth.js"></script>

  <script>
    document.getElementById("add-user-college").addEventListener("change", function() {
  const selectedCollege = this.value;
  const courseDropdown = document.getElementById("add-user-course");
  courseDropdown.innerHTML = "<option value=''>Select a course</option>"; // Clear existing options

  // Populate course options based on selected college
  switch (selectedCollege) {      // Undergraduate
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
  </script>





</body>

</html>