<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Help center Page - Front Pages | ULAF Admin</title>

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

  <!-- Page CSS -->

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

  <section class="section-py first-section-pt">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mb-2">
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Help centre</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Buying and support</a>
              </li>
              <li class="breadcrumb-item active">Buying</li>
            </ol>
          </nav>
          <h4 class="mb-2 pb-1">How to add product in cart?</h4>
          <p class="pb-lg-2">1 month ago - Updated</p>
          <hr class="my-lg-4" />
          <p class="pt-lg-2">
            If you’re after only one item, simply choose the ‘Buy Now’ option on the item page. This will take you
            directly to Checkout.
          </p>
          <p class="mb-0">
            If you want several items, use the ‘Add to Cart’ button and then choose ‘Keep Browsing’ to continue
            shopping or ‘Checkout’ to finalise your purchase.
          </p>
          <div class="my-4 py-2">
            <img src="../../assets/img/front-pages/misc/product-image.png" alt="product" class="img-fluid w-100" />
          </div>
          <p class="mb-0">
            You can go back to your cart at any time by clicking on the shopping cart icon at the top right side of
            the page.
          </p>
          <div class="mt-4 pt-2">
            <img src="../../assets/img/front-pages/misc/checkout-image.png" alt="product" class="img-fluid w-100" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="input-group input-group-merge mb-4 mt-4 mt-lg-0">
            <span class="input-group-text" id="article-search"><i class="ti ti-search"></i></span>
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="article-search" />
          </div>
          <div class="bg-lighter py-2 px-3 rounded">
            <h5 class="mb-0">Articles in this section</h5>
          </div>
          <ul class="list-unstyled my-4">
            <li class="mb-3">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Template Kits </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Envato Elements Template Kits - Importing Issues </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Envato Elements Template Kits - Troubleshooting </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> How to use the template in WordPress </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> How to use the Template Kit Import plugin </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
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

  <!-- Main JS -->
  <script src="../../assets/js/front-main.js"></script>

  <!-- Page JS -->
</body>

</html>