<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="front-pages">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Payment Page - Front Pages | ULAF Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-payment.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/front-config.js"></script>
  </head>

  <body>
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../../assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-menu-2 ti-sm align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Vuexy</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-x ti-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingContact">Contact us</a>
              </li>
              <li class="nav-item mega-dropdown active">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Pages</span>
                </a>
                <div class="dropdown-menu p-4">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                          <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-layout-grid"></i></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pricing-page.php">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Pricing">Pricing</span>
                          </a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link mega-dropdown-link" href="payment-page.php">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Payment">Payment</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="checkout-page.php">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Checkout">Checkout</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="help-center-landing.php">
                            <i class="ti ti-circle me-1"></i>
                            <span data-i18n="Help Center">Help Center</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                          <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-lock-open"></i></span>
                        </div>
                        <span class="ps-1">Auth Demo</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-basic.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Login (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-cover.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Login (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-basic.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Register (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-cover.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Register (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-multisteps.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Register (Multi-steps)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-basic.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Forgot Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-cover.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Forgot Password (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-basic.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Reset Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-cover.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Reset Password (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="ti ti-file-analytics"></i
                          ></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-error.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Error
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-under-maintenance.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Under Maintenance
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-comingsoon.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Coming Soon
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-not-authorized.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Not Authorized
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-basic.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Verify Email (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-cover.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Verify Email (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-basic.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Two Steps (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-cover.php"
                            target="_blank">
                            <i class="ti ti-circle me-1"></i>
                            Two Steps (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                      <div class="bg-body nav-img-col p-2">
                        <img
                          src="../../assets/img/front-pages/misc/nav-item-col-img.png"
                          alt="nav item col image"
                          class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../vertical-menu-template/index.php" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="ti ti-sm"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                    <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                    <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                    <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="../vertical-menu-template/auth-login-cover.php" class="btn btn-primary" target="_blank"
                ><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <section class="section-py bg-body first-section-pt">
      <div class="container mt-2">
        <div class="card px-3">
          <div class="row">
            <div class="col-lg-7 card-body border-end">
              <h4 class="mb-2">Checkout</h4>
              <p class="mb-0">
                All plans include 40+ advanced tools and features to boost your product. <br />
                Choose the best plan to fit your needs.
              </p>
              <div class="row py-4 my-2">
                <div class="col-md mb-md-0 mb-2">
                  <div class="form-check custom-option custom-option-basic checked">
                    <label
                      class="form-check-label custom-option-content form-check-input-payment d-flex gap-3 align-items-center"
                      for="customRadioVisa">
                      <input
                        name="customRadioTemp"
                        class="form-check-input"
                        type="radio"
                        value="credit-card"
                        id="customRadioVisa"
                        checked />
                      <span class="custom-option-body">
                        <img
                          src="../../assets/img/icons/payments/visa-light.png"
                          alt="visa-card"
                          width="58"
                          data-app-light-img="icons/payments/visa-light.png"
                          data-app-dark-img="icons/payments/visa-dark.png" />
                        <span class="ms-3">Credit Card</span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-md mb-md-0 mb-2">
                  <div class="form-check custom-option custom-option-basic">
                    <label
                      class="form-check-label custom-option-content form-check-input-payment d-flex gap-3 align-items-center"
                      for="customRadioPaypal">
                      <input
                        name="customRadioTemp"
                        class="form-check-input"
                        type="radio"
                        value="paypal"
                        id="customRadioPaypal" />
                      <span class="custom-option-body">
                        <img
                          src="../../assets/img/icons/payments/paypal-light.png"
                          alt="paypal"
                          width="58"
                          data-app-light-img="icons/payments/paypal-light.png"
                          data-app-dark-img="icons/payments/paypal-dark.png" />
                        <span class="ms-3">Paypal</span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <h4 class="mt-2 mb-4">Billing Details</h4>
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="billings-email">Email Address</label>
                    <input type="text" id="billings-email" class="form-control" placeholder="john.doe@gmail.com" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="billings-password">Password</label>
                    <input type="password" id="billings-password" class="form-control" placeholder="Password" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="billings-country">Country</label>
                    <select id="billings-country" class="form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="billings-zip">Billing Zip / Postal Code</label>
                    <input
                      type="text"
                      id="billings-zip"
                      class="form-control billings-zip-code"
                      placeholder="Zip / Postal Code" />
                  </div>
                </div>
              </form>
              <div id="form-credit-card">
                <h4 class="mt-4 pt-2">Credit Card Info</h4>
                <form>
                  <div class="row g-3">
                    <div class="col-12">
                      <label class="form-label" for="billings-card-num">Card number</label>
                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          id="billings-card-num"
                          class="form-control billing-card-mask"
                          placeholder="7465 8374 5837 5067"
                          aria-describedby="paymentCard" />
                        <span class="input-group-text cursor-pointer p-1" id="paymentCard"
                          ><span class="card-type"></span
                        ></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="billings-card-name">Name</label>
                      <input type="text" id="billings-card-name" class="form-control" placeholder="John Doe" />
                    </div>
                    <div class="col-md-3">
                      <label class="form-label" for="billings-card-date">EXP. Date</label>
                      <input
                        type="text"
                        id="billings-card-date"
                        class="form-control billing-expiry-date-mask"
                        placeholder="MM/YY" />
                    </div>
                    <div class="col-md-3">
                      <label class="form-label" for="billings-card-cvv">CVV</label>
                      <input
                        type="text"
                        id="billings-card-cvv"
                        class="form-control billing-cvv-mask"
                        maxlength="3"
                        placeholder="965" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 card-body">
              <h4 class="mb-2">Order Summary</h4>
              <p class="pb-2 mb-0">
                It can help you manage and service orders before,<br />
                during and after fulfilment.
              </p>
              <div class="bg-lighter p-4 rounded mt-4">
                <p class="mb-1">A simple start for everyone</p>
                <div class="d-flex align-items-center">
                  <h1 class="text-heading display-5 mb-1">$59.99</h1>
                  <sub>/month</sub>
                </div>
                <div class="d-grid">
                  <button
                    type="button"
                    data-bs-target="#pricingModal"
                    data-bs-toggle="modal"
                    class="btn btn-label-primary">
                    Change Plan
                  </button>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <p class="mb-0">Subtotal</p>
                  <h6 class="mb-0">$85.99</h6>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <p class="mb-0">Tax</p>
                  <h6 class="mb-0">$4.99</h6>
                </div>
                <hr />
                <div class="d-flex justify-content-between align-items-center mt-3 pb-1">
                  <p class="mb-0">Total</p>
                  <h6 class="mb-0">$90.98</h6>
                </div>
                <div class="d-grid mt-3">
                  <button class="btn btn-success">
                    <span class="me-2">Proceed with Payment</span>
                    <i class="ti ti-arrow-right scaleX-n1-rtl"></i>
                  </button>
                </div>

                <p class="mt-4 pt-2">
                  By continuing, you accept to our Terms of Services and Privacy Policy. Please note that payments are
                  non-refundable.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <!-- Pricing Modal -->
    <div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-simple modal-pricing">
        <div class="modal-content p-2 p-md-5">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <!-- Pricing Plans -->
            <div class="py-0 rounded-top">
              <h2 class="text-center mb-2">Pricing Plans</h2>
              <p class="text-center">
                Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your
                needs.
              </p>
              <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-3 mb-4">
                <label class="switch switch-primary ms-3 ms-sm-0 mt-2">
                  <span class="switch-label">Monthly</span>
                  <input type="checkbox" class="switch-input price-duration-toggler" checked />
                  <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                  </span>
                  <span class="switch-label">Annual</span>
                </label>
                <div class="mt-n5 ms-n5 d-none d-sm-block">
                  <i class="ti ti-corner-left-down ti-sm text-muted me-1 scaleX-n1-rtl"></i>
                  <span class="badge badge-sm bg-label-primary">Save up to 10%</span>
                </div>
              </div>
              <div class="row mx-0 gy-3">
                <!-- Basic -->
                <div class="col-xl mb-md-0 mb-4">
                  <div class="card border rounded shadow-none">
                    <div class="card-body">
                      <div class="my-3 pt-2 text-center">
                        <img
                          src="../../assets/img/illustrations/page-pricing-basic.png"
                          alt="Basic Image"
                          height="140" />
                      </div>
                      <h3 class="card-title text-center text-capitalize mb-1">Basic</h3>
                      <p class="text-center">A simple start for everyone</p>
                      <div class="text-center h-px-100 mb-2">
                        <div class="d-flex justify-content-center">
                          <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                          <h1 class="display-4 mb-0 text-primary">0</h1>
                          <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/month</sub>
                        </div>
                        <small class="price-yearly price-yearly-toggle text-muted">$ 0 / year</small>
                      </div>

                      <ul class="list-group ps-3 my-4">
                        <li class="mb-2">100 responses a month</li>
                        <li class="mb-2">Unlimited forms and surveys</li>
                        <li class="mb-2">Unlimited fields</li>
                        <li class="mb-2">Basic form creation tools</li>
                        <li class="mb-0">Up to 2 subdomains</li>
                      </ul>

                      <button type="button" class="btn btn-label-success d-grid w-100 mt-3" data-bs-dismiss="modal">
                        Your Current Plan
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Pro -->
                <div class="col-xl mb-md-0 mb-4">
                  <div class="card border-primary border shadow-none">
                    <div class="card-body position-relative">
                      <div class="position-absolute end-0 me-4 top-0 mt-4">
                        <span class="badge bg-label-primary">Popular</span>
                      </div>
                      <div class="my-3 pt-2 text-center">
                        <img
                          src="../../assets/img/illustrations/page-pricing-standard.png"
                          alt="Standard Image"
                          height="140" />
                      </div>
                      <h3 class="card-title text-center text-capitalize mb-1">Pro</h3>
                      <p class="text-center">For small to medium businesses</p>
                      <div class="text-center h-px-100 mb-2">
                        <div class="d-flex justify-content-center">
                          <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                          <h1 class="price-toggle price-yearly display-4 text-primary mb-0">7</h1>
                          <h1 class="price-toggle price-monthly display-4 text-primary mb-0 d-none">9</h1>
                          <sub class="h6 text-muted pricing-duration mt-auto mb-2 fw-normal">/month</sub>
                        </div>
                        <small class="price-yearly price-yearly-toggle text-muted">$ 90 / year</small>
                      </div>

                      <ul class="list-group ps-3 my-4">
                        <li class="mb-2">Up to 5 users</li>
                        <li class="mb-2">120+ components</li>
                        <li class="mb-2">Basic support on Github</li>
                        <li class="mb-2">Monthly updates</li>
                        <li class="mb-0">Integrations</li>
                      </ul>

                      <button type="button" class="btn btn-primary d-grid w-100 mt-3" data-bs-dismiss="modal">
                        Upgrade
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Enterprise -->
                <div class="col-xl">
                  <div class="card border rounded shadow-none">
                    <div class="card-body">
                      <div class="my-3 pt-2 text-center">
                        <img
                          src="../../assets/img/illustrations/page-pricing-enterprise.png"
                          alt="Enterprise Image"
                          height="140" />
                      </div>
                      <h3 class="card-title text-center text-capitalize mb-1">Enterprise</h3>
                      <p class="text-center">Solution for big organizations</p>

                      <div class="text-center h-px-100 mb-2">
                        <div class="d-flex justify-content-center">
                          <sup class="h6 text-primary pricing-currency mt-3 mb-0 me-1">$</sup>
                          <h1 class="price-toggle price-yearly display-4 text-primary mb-0">16</h1>
                          <h1 class="price-toggle price-monthly display-4 text-primary mb-0 d-none">19</h1>
                          <sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-muted">/month</sub>
                        </div>
                        <small class="price-yearly price-yearly-toggle text-muted">$ 190 / year</small>
                      </div>

                      <ul class="list-group ps-3 my-4">
                        <li class="mb-2">Up to 10 users</li>
                        <li class="mb-2">150+ components</li>
                        <li class="mb-2">Basic support on Github</li>
                        <li class="mb-2">Monthly updates</li>
                        <li class="mb-0">Speedy build tooling</li>
                      </ul>

                      <button type="button" class="btn btn-label-primary d-grid w-100 mt-3" data-bs-dismiss="modal">
                        Upgrade
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Pricing Plans -->
          </div>
        </div>
      </div>
    </div>
    <!--/ Pricing Modal -->

    <script src="../../assets//js/pages-pricing.js"></script>

    <!-- /Modal -->

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top position-relative overflow-hidden z-1">
        <img
          src="../../assets/img/front-pages/backgrounds/footer-bg-light.png"
          alt="footer bg"
          class="footer-bg banner-bg-img z-n1"
          data-app-light-img="front-pages/backgrounds/footer-bg-light.png"
          data-app-dark-img="front-pages/backgrounds/footer-bg-dark.png" />
        <div class="container">
          <div class="row gx-0 gy-4 g-md-5">
            <div class="col-lg-5">
              <a href="landing-page.php" class="app-brand-link mb-4">
                <span class="app-brand-logo demo">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0" />
                  </svg>
                </span>
                <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Vuexy</span>
              </a>
              <p class="footer-text footer-logo-description mb-4">
                Most developer friendly & highly customisable Admin Dashboard Template.
              </p>
              <form class="footer-form">
                <label for="footer-email" class="small">Subscribe to newsletter</label>
                <div class="d-flex mt-1">
                  <input
                    type="email"
                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                    id="footer-email"
                    placeholder="Your email" />
                  <button
                    type="submit"
                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-4">Demos</h6>
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
                </li>
                <li class="mb-3">
                  <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link"
                    >Semi Dark Layout</a
                  >
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-4">Pages</h6>
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="pricing-page.php" class="footer-link">Pricing</a>
                </li>
                <li class="mb-3">
                  <a href="payment-page.php" class="footer-link"
                    >Payment<span class="badge rounded bg-primary ms-2">New</span></a
                  >
                </li>
                <li class="mb-3">
                  <a href="checkout-page.php" class="footer-link">Checkout</a>
                </li>
                <li class="mb-3">
                  <a href="help-center-landing.php" class="footer-link">Help Center</a>
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template/auth-login-cover.php" target="_blank" class="footer-link"
                    >Login/Register</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="footer-title mb-4">Download our app</h6>
              <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"
                ><img src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon"
              /></a>
              <a href="javascript:void(0);" class="d-block footer-link"
                ><img src="../../assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3">
        <div
          class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">Pixinvent,</a>
            <span class="footer-text"> Made with ❤️ for a better web.</span>
          </div>
          <div>
            <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/github-light.png"
                alt="github icon"
                data-app-light-img="front-pages/icons/github-light.png"
                data-app-dark-img="front-pages/icons/github-dark.png" />
            </a>
            <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/facebook-light.png"
                alt="facebook icon"
                data-app-light-img="front-pages/icons/facebook-light.png"
                data-app-dark-img="front-pages/icons/facebook-dark.png" />
            </a>
            <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/twitter-light.png"
                alt="twitter icon"
                data-app-light-img="front-pages/icons/twitter-light.png"
                data-app-dark-img="front-pages/icons/twitter-dark.png" />
            </a>
            <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
              <img
                src="../../assets/img/front-pages/icons/instagram-light.png"
                alt="google icon"
                data-app-light-img="front-pages/icons/instagram-light.png"
                data-app-dark-img="front-pages/icons/instagram-dark.png" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/front-main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/pages-pricing.js"></script>
    <script src="../../assets/js/front-page-payment.js"></script>
  </body>
</html>