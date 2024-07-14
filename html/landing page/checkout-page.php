<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Checkout Card - Front Pages | ULAF Admin</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />
  <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/rateyo/rateyo.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../assets/vendor/css/pages/wizard-ex-checkout.css" />

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
          <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-menu-2 ti-sm align-middle"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="landing-page.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#04764e" />
                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#04764e" />
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Vuexy</span>
          </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <a href="javascript:void(0);" class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium" aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
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
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="payment-page.php">
                          <i class="ti ti-circle me-1"></i>
                          <span data-i18n="Payment">Payment</span>
                        </a>
                      </li>
                      <li class="nav-item active">
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
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-login-basic.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Login (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-login-cover.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Login (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-basic.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Register (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-cover.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Register (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-multisteps.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Register (Multi-steps)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-forgot-password-basic.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Forgot Password (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-forgot-password-cover.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Forgot Password (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-reset-password-basic.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Reset Password (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-reset-password-cover.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Reset Password (Cover)
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg">
                    <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                      <div class="avatar avatar-sm flex-shrink-0 me-2">
                        <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-file-analytics"></i></span>
                      </div>
                      <span class="ps-1">Other</span>
                    </div>
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-error.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Error
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-under-maintenance.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Under Maintenance
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-comingsoon.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Coming Soon
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-not-authorized.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Not Authorized
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-verify-email-basic.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Verify Email (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-verify-email-cover.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Verify Email (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-two-steps-basic.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Two Steps (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-two-steps-cover.php" target="_blank">
                          <i class="ti ti-circle me-1"></i>
                          Two Steps (Cover)
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="bg-body nav-img-col p-2">
                      <img src="../../assets/img/front-pages/misc/nav-item-col-img.png" alt="nav item col image" class="w-100" />
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
            <a href="../vertical-menu-template/auth-login-cover.php" class="btn btn-primary" target="_blank"><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
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
    <div class="container">
      <!--/ Checkout Wizard -->
      <!-- Checkout Wizard -->
      <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mb-5">
        <div class="bs-stepper-header m-auto border-0 py-4">
          <div class="step" data-target="#checkout-cart">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 58 54">
                  <use xlink:href="../../assets/svg/icons/wizard-checkout-cart.svg#wizardCart"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">Cart</span>
            </button>
          </div>
          <div class="line">
            <i class="ti ti-chevron-right"></i>
          </div>
          <div class="step" data-target="#checkout-address">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="../../assets/svg/icons/wizard-checkout-address.svg#wizardCheckoutAddress"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">Address</span>
            </button>
          </div>
          <div class="line">
            <i class="ti ti-chevron-right"></i>
          </div>
          <div class="step" data-target="#checkout-payment">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 58 54">
                  <use xlink:href="../../assets/svg/icons/wizard-checkout-payment.svg#wizardPayment"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">Payment</span>
            </button>
          </div>
          <div class="line">
            <i class="ti ti-chevron-right"></i>
          </div>
          <div class="step" data-target="#checkout-confirmation">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 58 54">
                  <use xlink:href="../../assets/svg/icons/wizard-checkout-confirmation.svg#wizardConfirm"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">Confirmation</span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content border-top">
          <form id="wizard-checkout-form" onSubmit="return false">
            <!-- Cart -->
            <div id="checkout-cart" class="content">
              <div class="row">
                <!-- Cart left -->
                <div class="col-xl-8 mb-3 mb-xl-0">
                  <!-- Offer alert -->
                  <div class="alert alert-success mb-3" role="alert">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0">
                        <i class="ti ti-bookmarks ti-sm alert-icon alert-icon-lg"></i>
                      </div>
                      <div class="flex-grow-1">
                        <div class="fw-medium fs-5 mb-2">Available Offers</div>
                        <ul class="list-unstyled mb-0">
                          <li>- 10% Instant Discount on Bank of America Corp Bank Debit and Credit cards</li>
                          <li>- 25% Cashback Voucher of up to $60 on first ever PayPal transaction. TCA</li>
                        </ul>
                      </div>
                    </div>
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

                  <!-- Shopping bag -->
                  <h5>My Shopping Bag (2 Items)</h5>
                  <ul class="list-group mb-3">
                    <li class="list-group-item p-4">
                      <div class="d-flex gap-3">
                        <div class="flex-shrink-0 d-flex align-items-center">
                          <img src="../../assets/img/products/1.png" alt="google home" class="w-px-100" />
                        </div>
                        <div class="flex-grow-1">
                          <div class="row">
                            <div class="col-md-8">
                              <p class="me-3">
                                <a href="javascript:void(0)" class="text-body">Google - Google Home - White</a>
                              </p>
                              <div class="text-muted mb-2 d-flex flex-wrap">
                                <span class="me-1">Sold by:</span>
                                <a href="javascript:void(0)" class="me-3">Apple</a>
                                <span class="badge bg-label-success">In Stock</span>
                              </div>
                              <div class="read-only-ratings mb-3" data-rateyo-read-only="true"></div>
                              <input type="number" class="form-control form-control-sm w-px-100 mt-2" value="1" min="1" max="5" />
                            </div>
                            <div class="col-md-4">
                              <div class="text-md-end">
                                <button type="button" class="btn-close btn-pinned" aria-label="Close"></button>
                                <div class="my-2 my-md-4 mb-md-5">
                                  <span class="text-primary">$299/</span><s class="text-muted">$359</s>
                                </div>
                                <button type="button" class="btn btn-sm btn-label-primary mt-md-3">
                                  Move to wishlist
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <div class="d-flex gap-3">
                        <div class="flex-shrink-0 d-flex align-items-center">
                          <img src="../../assets/img/products/2.png" alt="google home" class="w-px-100" />
                        </div>
                        <div class="flex-grow-1">
                          <div class="row">
                            <div class="col-md-8">
                              <p class="me-3">
                                <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                              </p>
                              <div class="text-muted mb-2 d-flex flex-wrap">
                                <span class="me-1">Sold by:</span>
                                <a href="javascript:void(0)" class="me-3">Apple</a>
                                <span class="badge bg-label-success">In Stock</span>
                              </div>
                              <div class="read-only-ratings mb-3" data-rateyo-read-only="true"></div>
                              <input type="number" class="form-control form-control-sm w-px-100 mt-2" value="1" min="1" max="5" />
                            </div>
                            <div class="col-md-4">
                              <div class="text-md-end">
                                <button type="button" class="btn-close btn-pinned" aria-label="Close"></button>
                                <div class="my-2 my-md-4 mb-md-5">
                                  <span class="text-primary">$299/</span><s class="text-muted">$359</s>
                                </div>
                                <button type="button" class="btn btn-sm btn-label-primary mt-md-3">
                                  Move to wishlist
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <!-- Wishlist -->
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item d-flex justify-content-between">
                      <span>Add more products from wishlist</span>
                      <i class="ti ti-sm ti-chevron-right scaleX-n1-rtl"></i>
                    </a>
                  </div>
                </div>

                <!-- Cart right -->
                <div class="col-xl-4">
                  <div class="border rounded p-4 mb-3 pb-3">
                    <!-- Offer -->
                    <h6>Offer</h6>
                    <div class="row g-3 mb-3">
                      <div class="col-8 col-xxl-8 col-xl-12">
                        <input type="text" class="form-control" placeholder="Enter Promo Code" aria-label="Enter Promo Code" />
                      </div>
                      <div class="col-4 col-xxl-4 col-xl-12">
                        <div class="d-grid">
                          <button type="button" class="btn btn-label-primary">Apply</button>
                        </div>
                      </div>
                    </div>

                    <!-- Gift wrap -->
                    <div class="bg-lighter rounded p-3">
                      <p class="fw-medium mb-2">Buying gift for a loved one?</p>
                      <p class="mb-2">Gift wrap and personalized message on card, Only for $2.</p>
                      <a href="javascript:void(0)" class="fw-medium">Add a gift wrap</a>
                    </div>
                    <hr class="mx-n4" />

                    <!-- Price Details -->
                    <h6>Price Details</h6>
                    <dl class="row mb-0">
                      <dt class="col-6 fw-normal text-heading">Bag Total</dt>
                      <dd class="col-6 text-end">$1198.00</dd>

                      <dt class="col-sm-6 fw-normal">Coupon Discount</dt>
                      <dd class="col-sm-6 text-end"><a href="javascript:void(0)">Apply Coupon</a></dd>

                      <dt class="col-6 fw-normal text-heading">Order Total</dt>
                      <dd class="col-6 text-end">$1198.00</dd>

                      <dt class="col-6 fw-normal text-heading">Delivery Charges</dt>
                      <dd class="col-6 text-end">
                        <s class="text-muted">$5.00</s> <span class="badge bg-label-success ms-1">Free</span>
                      </dd>
                    </dl>

                    <hr class="mx-n4" />
                    <dl class="row mb-0">
                      <dt class="col-6 text-heading">Total</dt>
                      <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>
                    </dl>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-next">Place Order</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Address -->
            <div id="checkout-address" class="content">
              <div class="row">
                <!-- Address left -->
                <div class="col-xl-8 col-xxl-9 mb-3 mb-xl-0">
                  <!-- Select address -->
                  <p>Select your preferable address</p>
                  <div class="row mb-3">
                    <div class="col-md mb-md-0 mb-2">
                      <div class="form-check custom-option custom-option-basic checked">
                        <label class="form-check-label custom-option-content" for="customRadioAddress1">
                          <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioAddress1" checked="" />
                          <span class="custom-option-header mb-2">
                            <span class="fw-medium text-heading mb-0">John Doe (Default)</span>
                            <span class="badge bg-label-primary">Home</span>
                          </span>
                          <span class="custom-option-body">
                            <small>4135 Parkway Street, Los Angeles, CA, 90017.<br />
                              Mobile : 1234567890 Card / Cash on delivery available</small>
                            <span class="my-2 border-bottom d-block"></span>
                            <span class="d-flex">
                              <a class="me-2" href="javascript:void(0)">Edit</a>
                              <a href="javascript:void(0)">Remove</a>
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-basic">
                        <label class="form-check-label custom-option-content" for="customRadioAddress2">
                          <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioAddress2" />
                          <span class="custom-option-header mb-2">
                            <span class="fw-medium text-heading mb-0">ACME Inc.</span>
                            <span class="badge bg-label-success">Office</span>
                          </span>
                          <span class="custom-option-body">
                            <small>87 Hoffman Avenue, New York, NY, 10016.<br />Mobile : 1234567890 Card / Cash on
                              delivery available</small>
                            <span class="my-2 border-bottom d-block"></span>
                            <span class="d-flex">
                              <a class="me-2" href="javascript:void(0)">Edit</a>
                              <a href="javascript:void(0)">Remove</a>
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-label-primary mb-4" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                    Add new address
                  </button>

                  <!-- Choose Delivery -->
                  <p>Choose Delivery Speed</p>
                  <div class="row mt-2">
                    <div class="col-md mb-md-0 mb-2">
                      <div class="form-check custom-option custom-option-icon position-relative checked">
                        <label class="form-check-label custom-option-content" for="customRadioDelivery1">
                          <span class="custom-option-body">
                            <i class="ti ti-users ti-lg"></i>
                            <span class="custom-option-title mb-1">Standard</span>
                            <span class="badge bg-label-success btn-pinned">FREE</span>
                            <small>Get your product in 1 Week.</small>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioDelivery1" checked="" />
                        </label>
                      </div>
                    </div>
                    <div class="col-md mb-md-0 mb-2">
                      <div class="form-check custom-option custom-option-icon position-relative">
                        <label class="form-check-label custom-option-content" for="customRadioDelivery2">
                          <span class="custom-option-body">
                            <i class="ti ti-crown ti-lg"></i>
                            <span class="custom-option-title mb-1">Express</span>
                            <span class="badge bg-label-secondary btn-pinned">$10</span>
                            <small>Get your product in 3-4 days.</small>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioDelivery2" />
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon position-relative">
                        <label class="form-check-label custom-option-content" for="customRadioDelivery3">
                          <span class="custom-option-body">
                            <i class="ti ti-brand-telegram ti-lg"></i>
                            <span class="custom-option-title mb-1">Overnight</span>
                            <span class="badge bg-label-secondary btn-pinned">$15</span>
                            <small>Get your product in 0-1 days.</small>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioDelivery3" />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Address right -->
                <div class="col-xl-4 col-xxl-3">
                  <div class="border rounded p-4 pb-3 mb-3">
                    <!-- Estimated Delivery -->
                    <h6>Estimated Delivery Date</h6>
                    <ul class="list-unstyled">
                      <li class="d-flex gap-3 align-items-center">
                        <div class="flex-shrink-0">
                          <img src="../../assets/img/products/1.png" alt="google home" class="w-px-50" />
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0">
                            <a class="text-body" href="javascript:void(0)">Google - Google Home - White</a>
                          </p>
                          <p class="fw-medium">18th Nov 2021</p>
                        </div>
                      </li>
                      <li class="d-flex gap-3 align-items-center">
                        <div class="flex-shrink-0">
                          <img src="../../assets/img/products/2.png" alt="google home" class="w-px-50" />
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0">
                            <a class="text-body" href="javascript:void(0)">Apple iPhone 11 (64GB, Black)</a>
                          </p>
                          <p class="fw-medium">20th Nov 2021</p>
                        </div>
                      </li>
                    </ul>

                    <hr class="mx-n4" />

                    <!-- Price Details -->
                    <h6>Price Details</h6>
                    <dl class="row mb-0">
                      <dt class="col-6 fw-normal text-heading">Order Total</dt>
                      <dd class="col-6 text-end">$1198.00</dd>

                      <dt class="col-6 fw-normal text-heading">Delivery Charges</dt>
                      <dd class="col-6 text-end">
                        <s class="text-muted">$5.00</s> <span class="badge bg-label-success ms-1">Free</span>
                      </dd>
                    </dl>
                    <hr class="mx-n4" />
                    <dl class="row mb-0">
                      <dt class="col-6 text-heading">Total</dt>
                      <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>
                    </dl>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-next">Place Order</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Payment -->
            <div id="checkout-payment" class="content">
              <div class="row">
                <!-- Payment left -->
                <div class="col-xl-8 col-xxl-9 mb-3 mb-xl-0">
                  <!-- Offer alert -->
                  <div class="alert alert-success" role="alert">
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0">
                        <i class="ti ti-bookmarks ti-sm alert-icon alert-icon-lg"></i>
                      </div>
                      <div class="flex-grow-1">
                        <div class="fw-medium mb-2">Bank Offers</div>
                        <ul class="list-unstyled mb-0">
                          <li>- 10% Instant Discount on Bank of America Corp Bank Debit and Credit cards</li>
                        </ul>
                      </div>
                    </div>
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

                  <!-- Payment Tabs -->
                  <div class="col-xxl-6 col-lg-8">
                    <ul class="nav nav-pills card-header-pills mb-3" id="paymentTabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-cc-tab" data-bs-toggle="pill" data-bs-target="#pills-cc" type="button" role="tab" aria-controls="pills-cc" aria-selected="true">
                          Card
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-cod-tab" data-bs-toggle="pill" data-bs-target="#pills-cod" type="button" role="tab" aria-controls="pills-cod" aria-selected="false">
                          Cash On Delivery
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-gift-card-tab" data-bs-toggle="pill" data-bs-target="#pills-gift-card" type="button" role="tab" aria-controls="pills-gift-card" aria-selected="false">
                          Gift Card
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content px-0" id="paymentTabsContent">
                      <!-- Credit card -->
                      <div class="tab-pane fade show active" id="pills-cc" role="tabpanel" aria-labelledby="pills-cc-tab">
                        <div class="row g-3">
                          <div class="col-12">
                            <label class="form-label w-100" for="paymentCard">Card Number</label>
                            <div class="input-group input-group-merge">
                              <input id="paymentCard" name="paymentCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="paymentCard2" />
                              <span class="input-group-text cursor-pointer p-1" id="paymentCard2"><span class="card-type"></span></span>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="paymentCardName">Name</label>
                            <input type="text" id="paymentCardName" class="form-control" placeholder="John Doe" />
                          </div>
                          <div class="col-6 col-md-3">
                            <label class="form-label" for="paymentCardExpiryDate">Exp. Date</label>
                            <input type="text" id="paymentCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
                          </div>
                          <div class="col-6 col-md-3">
                            <label class="form-label" for="paymentCardCvv">CVV Code</label>
                            <div class="input-group input-group-merge">
                              <input type="text" id="paymentCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                              <span class="input-group-text cursor-pointer" id="paymentCardCvv2"><i class="ti ti-help text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                            </div>
                          </div>
                          <div class="col-12">
                            <label class="switch">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                              </span>
                              <span class="switch-label">Save card for future billing?</span>
                            </label>
                          </div>
                          <div class="col-12">
                            <button type="button" class="btn btn-primary btn-next me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                          </div>
                        </div>
                      </div>

                      <!-- COD -->
                      <div class="tab-pane fade" id="pills-cod" role="tabpanel" aria-labelledby="pills-cod-tab">
                        <p>
                          Cash on Delivery is a type of payment method where the recipient make payment for the order
                          at the time of delivery rather than in advance.
                        </p>
                        <button type="button" class="btn btn-primary btn-next">Pay On Delivery</button>
                      </div>

                      <!-- Gift card -->
                      <div class="tab-pane fade" id="pills-gift-card" role="tabpanel" aria-labelledby="pills-gift-card-tab">
                        <h6>Enter Gift Card Details</h6>
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="giftCardNumber" class="form-label">Gift card number</label>
                            <input type="number" class="form-control" id="giftCardNumber" placeholder="Gift card number" />
                          </div>
                          <div class="col-12">
                            <label for="giftCardPin" class="form-label">Gift card pin</label>
                            <input type="number" class="form-control" id="giftCardPin" placeholder="Gift card pin" />
                          </div>
                          <div class="col-12">
                            <button type="button" class="btn btn-primary btn-next">Redeem Gift Card</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Address right -->
                <div class="col-xl-4 col-xxl-3">
                  <div class="border rounded p-4">
                    <!-- Price Details -->
                    <h6>Price Details</h6>
                    <dl class="row">
                      <dt class="col-6 fw-normal text-heading">Order Total</dt>
                      <dd class="col-6 text-end">$1198.00</dd>

                      <dt class="col-6 fw-normal text-heading">Delivery Charges</dt>
                      <dd class="col-6 text-end">
                        <s class="text-muted">$5.00</s> <span class="badge bg-label-success ms-1">Free</span>
                      </dd>
                    </dl>
                    <hr class="mx-n4" />
                    <dl class="row">
                      <dt class="col-6 text-heading mb-3">Total</dt>
                      <dd class="col-6 fw-medium text-end mb-0">$1198.00</dd>

                      <dt class="col-6 fw-normal text-heading">Deliver to:</dt>
                      <dd class="col-6 fw-medium text-end mb-0"><span class="badge bg-label-primary">Home</span></dd>
                    </dl>
                    <!-- Address Details -->
                    <address class="text-heading">
                      <span> John Doe (Default),</span><br />
                      4135 Parkway Street, <br />
                      Los Angeles, CA, 90017. <br />
                      Mobile : +1 906 568 2332
                    </address>
                    <a href="javascript:void(0)">Change address</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Confirmation -->
            <div id="checkout-confirmation" class="content">
              <div class="row mb-3">
                <div class="col-12 col-lg-8 mx-auto text-center mb-3">
                  <h4 class="mt-2">Thank You! 😇</h4>
                  <p>Your order <a href="javascript:void(0)">#1536548131</a> has been placed!</p>
                  <p>
                    We sent an email to <a href="mailto:john.doe@example.com">john.doe@example.com</a> with your order
                    confirmation and receipt. If the email hasn't arrived within two minutes, please check your spam
                    folder to see if the email was routed there.
                  </p>
                  <p>
                    <span class="fw-medium"><i class="ti ti-clock me-1"></i> Time placed:&nbsp;</span> 25/05/2020
                    13:35pm
                  </p>
                </div>
                <!-- Confirmation details -->
                <div class="col-12">
                  <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item flex-fill p-4 text-heading">
                      <h6 class="d-flex align-items-center gap-1"><i class="ti ti-map-pin"></i> Shipping</h6>
                      <address class="mb-0">
                        John Doe <br />
                        4135 Parkway Street,<br />
                        Los Angeles, CA 90017,<br />
                        USA
                      </address>
                      <p class="mb-0 mt-3">+123456789</p>
                    </li>
                    <li class="list-group-item flex-fill p-4 text-heading">
                      <h6 class="d-flex align-items-center gap-1">
                        <i class="ti ti-credit-card"></i> Billing Address
                      </h6>
                      <address class="mb-0">
                        John Doe <br />
                        4135 Parkway Street,<br />
                        Los Angeles, CA 90017,<br />
                        USA
                      </address>
                      <p class="mb-0 mt-3">+123456789</p>
                    </li>
                    <li class="list-group-item flex-fill p-4 text-heading">
                      <h6 class="d-flex align-items-center gap-1"><i class="ti ti-ship"></i> Shipping Method</h6>
                      <p class="fw-medium mb-3">Preferred Method:</p>
                      Standard Delivery<br />
                      (Normally 3-4 business days)
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row">
                <!-- Confirmation items -->
                <div class="col-xl-9 mb-3 mb-xl-0">
                  <ul class="list-group">
                    <li class="list-group-item p-4">
                      <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                          <img src="../../assets/img/products/1.png" alt="google home" class="w-px-75" />
                        </div>
                        <div class="flex-grow-1">
                          <div class="row">
                            <div class="col-md-8">
                              <a href="javascript:void(0)" class="text-body">
                                <p>Google - Google Home - White</p>
                              </a>
                              <div class="text-muted mb-1 d-flex flex-wrap">
                                <span class="me-1">Sold by:</span>
                                <a href="javascript:void(0)" class="me-3">Apple</a>
                                <span class="badge bg-label-success">In Stock</span>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="text-md-end">
                                <div class="my-2 my-lg-4">
                                  <span class="text-primary">$299/</span><s class="text-muted">$359</s>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                          <img src="../../assets/img/products/2.png" alt="google home" class="w-px-75" />
                        </div>
                        <div class="flex-grow-1">
                          <div class="row">
                            <div class="col-md-8">
                              <a href="javascript:void(0)" class="text-body">
                                <p>Apple iPhone 11 (64GB, Black)</p>
                              </a>
                              <div class="text-muted mb-1 d-flex flex-wrap">
                                <span class="me-1">Sold by:</span>
                                <a href="javascript:void(0)" class="me-3">Apple</a>
                                <span class="badge bg-label-success">In Stock</span>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="text-md-end">
                                <div class="my-2 my-lg-4">
                                  <span class="text-primary">$299/</span><s class="text-muted">$359</s>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- Confirmation total -->
                <div class="col-xl-3">
                  <div class="border rounded p-4 pb-3">
                    <!-- Price Details -->
                    <h6>Price Details</h6>
                    <dl class="row mb-0">
                      <dt class="col-6 fw-normal text-heading">Order Total</dt>
                      <dd class="col-6 text-end">$1198.00</dd>

                      <dt class="col-sm-6 text-heading fw-normal">Delivery Charges</dt>
                      <dd class="col-sm-6 text-end">
                        <s class="text-muted">$5.00</s> <span class="badge bg-label-success ms-1">Free</span>
                      </dd>
                    </dl>
                    <hr class="mx-n4" />
                    <dl class="row mb-0">
                      <dt class="col-6 text-heading">Total</dt>
                      <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--/ Checkout Wizard -->

      <!-- Add new address modal -->
      <!-- Add New Address Modal -->
      <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
          <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="text-center mb-4">
                <h3 class="address-title mb-2">Add New Address</h3>
                <p class="text-muted address-subtitle">Add new address for express delivery</p>
              </div>
              <form id="addNewAddressForm" class="row g-3" onsubmit="return false">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md mb-md-0 mb-3">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="customRadioHome">
                          <span class="custom-option-body">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M24.25 33.75V23.75H16.75V33.75H6.75002V18.0469C6.7491 17.8733 6.78481 17.7015 6.85482 17.5426C6.92482 17.3838 7.02754 17.2415 7.15627 17.125L19.6563 5.76562C19.8841 5.5559 20.1825 5.43948 20.4922 5.43948C20.8019 5.43948 21.1003 5.5559 21.3281 5.76562L33.8438 17.125C33.9696 17.2438 34.0703 17.3866 34.1401 17.5449C34.2098 17.7032 34.2472 17.8739 34.25 18.0469V33.75H24.25Z" fill="currentColor" opacity="0.2" />
                              <path d="M33.25 33.75C33.25 34.3023 33.6977 34.75 34.25 34.75C34.8023 34.75 35.25 34.3023 35.25 33.75H33.25ZM34.25 18.0469H35.25C35.25 18.0415 35.25 18.0361 35.2499 18.0307L34.25 18.0469ZM33.8437 17.125L34.5304 16.398C34.5256 16.3934 34.5207 16.389 34.5158 16.3845L33.8437 17.125ZM21.3281 5.76562L20.6509 6.50143L20.656 6.50611L21.3281 5.76562ZM19.6562 5.76562L20.3288 6.5057L20.3335 6.50141L19.6562 5.76562ZM7.15625 17.125L7.82712 17.8666L7.82878 17.8651L7.15625 17.125ZM6.75 18.0469H7.75001L7.74999 18.0416L6.75 18.0469ZM5.75 33.75C5.75 34.3023 6.19772 34.75 6.75 34.75C7.30228 34.75 7.75 34.3023 7.75 33.75H5.75ZM3 32.75C2.44772 32.75 2 33.1977 2 33.75C2 34.3023 2.44772 34.75 3 34.75V32.75ZM38 34.75C38.5523 34.75 39 34.3023 39 33.75C39 33.1977 38.5523 32.75 38 32.75V34.75ZM23.25 33.75C23.25 34.3023 23.6977 34.75 24.25 34.75C24.8023 34.75 25.25 34.3023 25.25 33.75H23.25ZM15.75 33.75C15.75 34.3023 16.1977 34.75 16.75 34.75C17.3023 34.75 17.75 34.3023 17.75 33.75H15.75ZM35.25 33.75V18.0469H33.25V33.75H35.25ZM35.2499 18.0307C35.2449 17.7243 35.1787 17.422 35.0551 17.1416L33.225 17.9481C33.2409 17.9844 33.2495 18.0235 33.2501 18.0631L35.2499 18.0307ZM35.0551 17.1416C34.9316 16.8612 34.7531 16.6084 34.5304 16.398L33.1571 17.852C33.1859 17.8792 33.209 17.9119 33.225 17.9481L35.0551 17.1416ZM34.5158 16.3845L22.0002 5.02514L20.656 6.50611L33.1717 17.8655L34.5158 16.3845ZM22.0053 5.02984C21.5929 4.6502 21.0528 4.43948 20.4922 4.43948V6.43948C20.551 6.43948 20.6076 6.46159 20.6509 6.50141L22.0053 5.02984ZM20.4922 4.43948C19.9316 4.43948 19.3915 4.6502 18.979 5.02984L20.3335 6.50141C20.3767 6.46159 20.4334 6.43948 20.4922 6.43948V4.43948ZM18.9837 5.02556L6.48371 16.3849L7.82878 17.8651L20.3288 6.50569L18.9837 5.02556ZM6.48538 16.3834C6.25236 16.5942 6.06642 16.8518 5.93971 17.1393L7.76988 17.9459C7.78318 17.9157 7.80268 17.8887 7.82712 17.8666L6.48538 16.3834ZM5.93971 17.1393C5.813 17.4269 5.74836 17.7379 5.75001 18.0521L7.74999 18.0416C7.74981 18.0087 7.75659 17.976 7.76988 17.9459L5.93971 17.1393ZM5.75 18.0469V33.75H7.75V18.0469H5.75ZM3 34.75H38V32.75H3V34.75ZM25.25 33.75V25H23.25V33.75H25.25ZM25.25 25C25.25 24.4033 25.013 23.831 24.591 23.409L23.1768 24.8232C23.2237 24.8701 23.25 24.9337 23.25 25H25.25ZM24.591 23.409C24.169 22.987 23.5967 22.75 23 22.75V24.75C23.0663 24.75 23.1299 24.7763 23.1768 24.8232L24.591 23.409ZM23 22.75H18V24.75H23V22.75ZM18 22.75C17.4033 22.75 16.831 22.9871 16.409 23.409L17.8232 24.8232C17.8701 24.7763 17.9337 24.75 18 24.75V22.75ZM16.409 23.409C15.9871 23.831 15.75 24.4033 15.75 25H17.75C17.75 24.9337 17.7763 24.8701 17.8232 24.8232L16.409 23.409ZM15.75 25V33.75H17.75V25H15.75Z" fill="currentColor" />
                            </svg>

                            <span class="custom-option-title">Home</span>
                            <small> Delivery time (9am – 9pm) </small>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                        </label>
                      </div>
                    </div>
                    <div class="col-md mb-md-0 mb-3">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="customRadioOffice">
                          <span class="custom-option-body">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M22.75 33.75V6.25C22.75 5.91848 22.6183 5.60054 22.3839 5.36612C22.1495 5.1317 21.8315 5 21.5 5H6.5C6.16848 5 5.85054 5.1317 5.61612 5.36612C5.3817 5.60054 5.25 5.91848 5.25 6.25V33.75" fill="currentColor" fill-opacity="0.2" />
                              <path d="M2.75 32.75C2.19772 32.75 1.75 33.1977 1.75 33.75C1.75 34.3023 2.19772 34.75 2.75 34.75V32.75ZM37.75 34.75C38.3023 34.75 38.75 34.3023 38.75 33.75C38.75 33.1977 38.3023 32.75 37.75 32.75V34.75ZM21.75 33.75C21.75 34.3023 22.1977 34.75 22.75 34.75C23.3023 34.75 23.75 34.3023 23.75 33.75H21.75ZM21.5 5V4V5ZM5.25 6.25H4.25H5.25ZM4.25 33.75C4.25 34.3023 4.69772 34.75 5.25 34.75C5.80228 34.75 6.25 34.3023 6.25 33.75H4.25ZM34.25 33.75C34.25 34.3023 34.6977 34.75 35.25 34.75C35.8023 34.75 36.25 34.3023 36.25 33.75H34.25ZM22.75 14C22.1977 14 21.75 14.4477 21.75 15C21.75 15.5523 22.1977 16 22.75 16V14ZM10.25 10.25C9.69772 10.25 9.25 10.6977 9.25 11.25C9.25 11.8023 9.69772 12.25 10.25 12.25V10.25ZM15.25 12.25C15.8023 12.25 16.25 11.8023 16.25 11.25C16.25 10.6977 15.8023 10.25 15.25 10.25V12.25ZM12.75 20.25C12.1977 20.25 11.75 20.6977 11.75 21.25C11.75 21.8023 12.1977 22.25 12.75 22.25V20.25ZM17.75 22.25C18.3023 22.25 18.75 21.8023 18.75 21.25C18.75 20.6977 18.3023 20.25 17.75 20.25V22.25ZM10.25 26.5C9.69772 26.5 9.25 26.9477 9.25 27.5C9.25 28.0523 9.69772 28.5 10.25 28.5V26.5ZM15.25 28.5C15.8023 28.5 16.25 28.0523 16.25 27.5C16.25 26.9477 15.8023 26.5 15.25 26.5V28.5ZM27.75 26.5C27.1977 26.5 26.75 26.9477 26.75 27.5C26.75 28.0523 27.1977 28.5 27.75 28.5V26.5ZM30.25 28.5C30.8023 28.5 31.25 28.0523 31.25 27.5C31.25 26.9477 30.8023 26.5 30.25 26.5V28.5ZM27.75 20.25C27.1977 20.25 26.75 20.6977 26.75 21.25C26.75 21.8023 27.1977 22.25 27.75 22.25V20.25ZM30.25 22.25C30.8023 22.25 31.25 21.8023 31.25 21.25C31.25 20.6977 30.8023 20.25 30.25 20.25V22.25ZM2.75 34.75H37.75V32.75H2.75V34.75ZM23.75 33.75V6.25H21.75V33.75H23.75ZM23.75 6.25C23.75 5.65326 23.5129 5.08097 23.091 4.65901L21.6768 6.07322C21.7237 6.12011 21.75 6.18369 21.75 6.25H23.75ZM23.091 4.65901C22.669 4.23705 22.0967 4 21.5 4V6C21.5663 6 21.6299 6.02634 21.6768 6.07322L23.091 4.65901ZM21.5 4H6.5V6H21.5V4ZM6.5 4C5.90326 4 5.33097 4.23705 4.90901 4.65901L6.32322 6.07322C6.37011 6.02634 6.4337 6 6.5 6V4ZM4.90901 4.65901C4.48705 5.08097 4.25 5.65326 4.25 6.25H6.25C6.25 6.1837 6.27634 6.12011 6.32322 6.07322L4.90901 4.65901ZM4.25 6.25V33.75H6.25V6.25H4.25ZM36.25 33.75V16.25H34.25V33.75H36.25ZM36.25 16.25C36.25 15.6533 36.013 15.081 35.591 14.659L34.1768 16.0732C34.2237 16.1201 34.25 16.1837 34.25 16.25H36.25ZM35.591 14.659C35.169 14.2371 34.5967 14 34 14V16C34.0663 16 34.1299 16.0263 34.1768 16.0732L35.591 14.659ZM34 14H22.75V16H34V14ZM10.25 12.25H15.25V10.25H10.25V12.25ZM12.75 22.25H17.75V20.25H12.75V22.25ZM10.25 28.5H15.25V26.5H10.25V28.5ZM27.75 28.5H30.25V26.5H27.75V28.5ZM27.75 22.25H30.25V20.25H27.75V22.25Z" fill="currentColor" />
                            </svg>

                            <span class="custom-option-title"> Office </span>
                            <small> Delivery time (9am – 5pm) </small>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddressFirstName">First Name</label>
                  <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddressLastName">Last Name</label>
                  <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
                </div>
                <div class="col-12">
                  <label class="form-label" for="modalAddressCountry">Country</label>
                  <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
                    <option value="">Select</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea, Republic of</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Russia">Russian Federation</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
                  <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
                </div>
                <div class="col-12">
                  <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
                  <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddressLandmark">Landmark</label>
                  <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddressCity">City</label>
                  <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddressLandmark">State</label>
                  <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalAddressZipCode">Zip Code</label>
                  <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
                </div>
                <div class="col-12">
                  <label class="switch">
                    <input type="checkbox" class="switch-input" />
                    <span class="switch-toggle-slider">
                      <span class="switch-on"></span>
                      <span class="switch-off"></span>
                    </span>
                    <span class="switch-label">Use as a billing address?</span>
                  </label>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                  <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Cancel
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--/ Add New Address Modal -->
    </div>
  </section>

  <!-- / Sections:End -->

  <!-- Footer: Start -->
  <footer class="landing-footer bg-body footer-text">
    <div class="footer-top position-relative overflow-hidden z-1">
      <img src="../../assets/img/front-pages/backgrounds/footer-bg-light.png" alt="footer bg" class="footer-bg banner-bg-img z-n1" data-app-light-img="front-pages/backgrounds/footer-bg-light.png" data-app-dark-img="front-pages/backgrounds/footer-bg-dark.png" />
      <div class="container">
        <div class="row gx-0 gy-4 g-md-5">
          <div class="col-lg-5">
            <a href="landing-page.php" class="app-brand-link mb-4">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#04764e" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#04764e" />
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
                <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top" id="footer-email" placeholder="Your email" />
                <button type="submit" class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
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
                <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Semi Dark Layout</a>
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
                <a href="payment-page.php" class="footer-link">Payment<span class="badge rounded bg-primary ms-2">New</span></a>
              </li>
              <li class="mb-3">
                <a href="checkout-page.php" class="footer-link">Checkout</a>
              </li>
              <li class="mb-3">
                <a href="help-center-landing.php" class="footer-link">Help Center</a>
              </li>
              <li class="mb-3">
                <a href="../vertical-menu-template/auth-login-cover.php" target="_blank" class="footer-link">Login/Register</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4">
            <h6 class="footer-title mb-4">Download our app</h6>
            <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"><img src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon" /></a>
            <a href="javascript:void(0);" class="d-block footer-link"><img src="../../assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom py-3">
      <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
        <div class="mb-2 mb-md-0">
          <span class="footer-text">©
            <script>
              document.write(new Date().getFullYear());
            </script>
          </span>
          <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">Pixinvent,</a>
          <span class="footer-text"> Made with ❤️ for a better web.</span>
        </div>
        <div>
          <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
            <img src="../../assets/img/front-pages/icons/github-light.png" alt="github icon" data-app-light-img="front-pages/icons/github-light.png" data-app-dark-img="front-pages/icons/github-dark.png" />
          </a>
          <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
            <img src="../../assets/img/front-pages/icons/facebook-light.png" alt="facebook icon" data-app-light-img="front-pages/icons/facebook-light.png" data-app-dark-img="front-pages/icons/facebook-dark.png" />
          </a>
          <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
            <img src="../../assets/img/front-pages/icons/twitter-light.png" alt="twitter icon" data-app-light-img="front-pages/icons/twitter-light.png" data-app-dark-img="front-pages/icons/twitter-dark.png" />
          </a>
          <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
            <img src="../../assets/img/front-pages/icons/instagram-light.png" alt="google icon" data-app-light-img="front-pages/icons/instagram-light.png" data-app-dark-img="front-pages/icons/instagram-dark.png" />
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
  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
  <script src="../../assets/vendor/libs/rateyo/rateyo.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/front-main.js"></script>

  <!-- Page JS -->

  <script src="../../assets/js/modal-add-new-address.js"></script>
  <script src="../../assets/js/wizard-ex-checkout.js"></script>
</body>

</html>