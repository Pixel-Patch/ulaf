<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>User View - Pages | ULAF Admin</title>

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
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
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

      <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="container-xxl">
          <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="index.php" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#04764e" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#04764e" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
              <i class="ti ti-x ti-sm align-middle"></i>
            </a>
          </div>

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="ti ti-menu-2 ti-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Language -->
              <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="ti ti-language rounded-circle ti-md"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                      <span class="align-middle">English</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                      <span class="align-middle">French</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                      <span class="align-middle">Arabic</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                      <span class="align-middle">German</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Language -->

              <!-- Search -->
              <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                <a class="nav-link search-toggler" href="javascript:void(0);">
                  <i class="ti ti-search ti-md"></i>
                </a>
              </li>
              <!-- /Search -->

              <!-- Style Switcher -->
              <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="ti ti-md"></i>
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

              <!-- Quick links  -->
              <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <i class="ti ti-layout-grid-add ti-md"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                  <div class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                      <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ti ti-sm ti-apps"></i></a>
                    </div>
                  </div>
                  <div class="dropdown-shortcuts-list scrollable-container">
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-calendar fs-4"></i>
                        </span>
                        <a href="app-calendar.php" class="stretched-link">Calendar</a>
                        <small class="text-muted mb-0">Appointments</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-file-invoice fs-4"></i>
                        </span>
                        <a href="app-invoice-list.php" class="stretched-link">Invoice App</a>
                        <small class="text-muted mb-0">Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-users fs-4"></i>
                        </span>
                        <a href="app-user-list.php" class="stretched-link">User App</a>
                        <small class="text-muted mb-0">Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-lock fs-4"></i>
                        </span>
                        <a href="app-access-roles.php" class="stretched-link">Role Management</a>
                        <small class="text-muted mb-0">Permission</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-chart-bar fs-4"></i>
                        </span>
                        <a href="index.php" class="stretched-link">Dashboard</a>
                        <small class="text-muted mb-0">User Profile</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-settings fs-4"></i>
                        </span>
                        <a href="pages-account-settings-account.php" class="stretched-link">Setting</a>
                        <small class="text-muted mb-0">Account Settings</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-help fs-4"></i>
                        </span>
                        <a href="pages-faq.php" class="stretched-link">FAQs</a>
                        <small class="text-muted mb-0">FAQs & Articles</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-square fs-4"></i>
                        </span>
                        <a href="modal-examples.php" class="stretched-link">Modals</a>
                        <small class="text-muted mb-0">Useful Popups</small>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->

              <!-- Notification -->
              <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <i class="ti ti-bell ti-md"></i>
                  <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Notification</h5>
                      <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                            <p class="mb-0">Won the monthly best seller gold badge</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Charles Franklin</h6>
                            <p class="mb-0">Accepted your connection</p>
                            <small class="text-muted">12hr ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/2.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New Message ✉️</h6>
                            <p class="mb-0">You have new message from Natalie</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                            <small class="text-muted">1 day ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/9.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Application has been approved 🚀</h6>
                            <p class="mb-0">Your ABC project application has been approved.</p>
                            <small class="text-muted">2 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Monthly report is generated</h6>
                            <p class="mb-0">July monthly financial report is generated</p>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Send connection request</h6>
                            <p class="mb-0">Peter sent you connection request</p>
                            <small class="text-muted">4 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/6.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New message from Jane</h6>
                            <p class="mb-0">Your have new message from Jane</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">CPU is running high</h6>
                            <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top">
                    <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                      View all notifications
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.php">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="papp-user-view-account.php">
                      <i class="ti ti-user-check me-2 ti-sm"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.php">
                      <i class="ti ti-settings me-2 ti-sm"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-billing.php">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-faq.php">
                      <i class="ti ti-help me-2 ti-sm"></i>
                      <span class="align-middle">FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-pricing.php">
                      <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                      <span class="align-middle">Pricing</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-cover.php" target="_blank">
                      <i class="ti ti-logout me-2 ti-sm"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
            <input type="text" class="form-control search-input border-0" placeholder="Search..." aria-label="Search..." />
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
        </div>
      </nav>

      <!-- / Navbar -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Menu -->
          <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
            <div class="container-xxl d-flex h-100">
              <ul class="menu-inner">
                <!-- Dashboards -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                        <div data-i18n="Analytics">Analytics</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="dashboards-crm.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                        <div data-i18n="CRM">CRM</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-dashboard.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                        <div data-i18n="eCommerce">eCommerce</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-logistics-dashboard.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-truck"></i>
                        <div data-i18n="Logistics">Logistics</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-academy-dashboard.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-book"></i>
                        <div data-i18n="Academy">Academy</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Layouts -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                    <div data-i18n="Layouts">Layouts</div>
                  </a>

                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="layouts-without-menu.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-menu-2"></i>
                        <div data-i18n="Without menu">Without menu</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="../vertical-menu-template/" class="menu-link" target="_blank">
                        <i class="menu-icon tf-icons ti ti-layout-distribute-vertical"></i>
                        <div data-i18n="Vertical">Vertical</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="layouts-fluid.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-maximize"></i>
                        <div data-i18n="Fluid">Fluid</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="layouts-container.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                        <div data-i18n="Container">Container</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="layouts-blank.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-square"></i>
                        <div data-i18n="Blank">Blank</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Apps -->
                <li class="menu-item active">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                    <div data-i18n="Apps">Apps</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-email.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-mail"></i>
                        <div data-i18n="Email">Email</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-chat.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-messages"></i>
                        <div data-i18n="Chat">Chat</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-calendar.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-calendar"></i>
                        <div data-i18n="Calendar">Calendar</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-kanban.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                        <div data-i18n="Kanban">Kanban</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                        <div data-i18n="eCommerce">eCommerce</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-ecommerce-dashboard.php" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Products">Products</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-ecommerce-product-list.php" class="menu-link">
                                <div data-i18n="Product List">Product List</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-product-add.php" class="menu-link">
                                <div data-i18n="Add Product">Add Product</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-category-list.php" class="menu-link">
                                <div data-i18n="Category List">Category List</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Order">Order</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-ecommerce-order-list.php" class="menu-link">
                                <div data-i18n="Order List">Order List</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-order-details.php" class="menu-link">
                                <div data-i18n="Order Details">Order Details</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Customer">Customer</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-ecommerce-customer-all.php" class="menu-link">
                                <div data-i18n="All Customers">All Customers</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Customer Details">Customer Details</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-overview.php" class="menu-link">
                                    <div data-i18n="Overview">Overview</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-security.php" class="menu-link">
                                    <div data-i18n="Security">Security</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-billing.php" class="menu-link">
                                    <div data-i18n="Address & Billing">Address & Billing</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-notifications.php" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-manage-reviews.php" class="menu-link">
                            <div data-i18n="Manage Reviews">Manage Reviews</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-referral.php" class="menu-link">
                            <div data-i18n="Referrals">Referrals</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Settings">Settings</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-detail.php" class="menu-link">
                                <div data-i18n="Store Details">Store Details</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-payments.php" class="menu-link">
                                <div data-i18n="Payments">Payments</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-checkout.php" class="menu-link">
                                <div data-i18n="Checkout">Checkout</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-shipping.php" class="menu-link">
                                <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-locations.php" class="menu-link">
                                <div data-i18n="Locations">Locations</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-notifications.php" class="menu-link">
                                <div data-i18n="Notifications">Notifications</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-book"></i>
                        <div data-i18n="Academy">Academy</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-academy-dashboard.php" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-academy-course.php" class="menu-link">
                            <div data-i18n="My Course">My Course</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-academy-course-details.php" class="menu-link">
                            <div data-i18n="Course Details">Course Details</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-truck"></i>
                        <div data-i18n="Logistics">Logistics</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-logistics-dashboard.php" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-logistics-fleet.php" class="menu-link">
                            <div data-i18n="Fleet">Fleet</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                        <div data-i18n="Invoice">Invoice</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-invoice-list.php" class="menu-link">
                            <div data-i18n="List">List</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-invoice-preview.php" class="menu-link">
                            <div data-i18n="Preview">Preview</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-invoice-edit.php" class="menu-link">
                            <div data-i18n="Edit">Edit</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-invoice-add.php" class="menu-link">
                            <div data-i18n="Add">Add</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item active">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-users"></i>
                        <div data-i18n="Users">Users</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-user-list.php" class="menu-link">
                            <div data-i18n="List">List</div>
                          </a>
                        </li>
                        <li class="menu-item active">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="View">View</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-user-view-account.php" class="menu-link">
                                <div data-i18n="Account">Account</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-user-view-security.php" class="menu-link">
                                <div data-i18n="Security">Security</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-user-view-billing.php" class="menu-link">
                                <div data-i18n="Billing & Plans">Billing & Plans</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-user-view-notifications.php" class="menu-link">
                                <div data-i18n="Notifications">Notifications</div>
                              </a>
                            </li>
                            <li class="menu-item active">
                              <a href="app-user-view-connections.php" class="menu-link">
                                <div data-i18n="Connections">Connections</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-settings"></i>
                        <div data-i18n="Roles & Permissions">Roles & Permission</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-access-roles.php" class="menu-link">
                            <div data-i18n="Roles">Roles</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-access-permission.php" class="menu-link">
                            <div data-i18n="Permission">Permission</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- Pages -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-file"></i>

                    <div data-i18n="Pages">Pages</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-files"></i>
                        <div data-i18n="Front Pages">Front Pages</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="../front-pages/landing-page.php" class="menu-link" target="_blank">
                            <div data-i18n="Landing">Landing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/pricing-page.php" class="menu-link" target="_blank">
                            <div data-i18n="Pricing">Pricing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/payment-page.php" class="menu-link" target="_blank">
                            <div data-i18n="Payment">Payment</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/checkout-page.php" class="menu-link" target="_blank">
                            <div data-i18n="Checkout">Checkout</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/help-center-landing.php" class="menu-link" target="_blank">
                            <div data-i18n="Help Center">Help Center</div>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user-circle"></i>
                        <div data-i18n="User Profile">User Profile</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="papp-user-view-account.php" class="menu-link">
                            <div data-i18n="Profile">Profile</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-profile-teams.php" class="menu-link">
                            <div data-i18n="Teams">Teams</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-profile-projects.php" class="menu-link">
                            <div data-i18n="Projects">Projects</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-profile-connections.php" class="menu-link">
                            <div data-i18n="Connections">Connections</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-settings"></i>
                        <div data-i18n="Account Settings">Account Settings</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="pages-account-settings-account.php" class="menu-link">
                            <div data-i18n="Account">Account</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-security.php" class="menu-link">
                            <div data-i18n="Security">Security</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-billing.php" class="menu-link">
                            <div data-i18n="Billing & Plans">Billing & Plans</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-notifications.php" class="menu-link">
                            <div data-i18n="Notifications">Notifications</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-connections.php" class="menu-link">
                            <div data-i18n="Connections">Connections</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="pages-faq.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-help"></i>
                        <div data-i18n="FAQ">FAQ</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-pricing.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-diamond"></i>
                        <div data-i18n="Pricing">Pricing</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                        <div data-i18n="Misc">Misc</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="pages-misc-error.php" class="menu-link" target="_blank">
                            <div data-i18n="Error">Error</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-misc-under-maintenance.php" class="menu-link" target="_blank">
                            <div data-i18n="Under Maintenance">Under Maintenance</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-misc-comingsoon.php" class="menu-link" target="_blank">
                            <div data-i18n="Coming Soon">Coming Soon</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-misc-not-authorized.php" class="menu-link" target="_blank">
                            <div data-i18n="Not Authorized">Not Authorized</div>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-lock"></i>
                        <div data-i18n="Authentications">Authentications</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Login">Login</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-login-basic.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-login-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Register">Register</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-register-basic.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-register-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-register-multisteps.php" class="menu-link" target="_blank">
                                <div data-i18n="Multi-steps">Multi-steps</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Verify Email">Verify Email</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-verify-email-basic.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-verify-email-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Reset Password">Reset Password</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-reset-password-basic.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-reset-password-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Forgot Password">Forgot Password</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-forgot-password-basic.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-forgot-password-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Two Steps">Two Steps</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="auth-two-steps-basic.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-two-steps-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-forms"></i>
                        <div data-i18n="Wizard Examples">Wizard Examples</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="wizard-ex-checkout.php" class="menu-link">
                            <div data-i18n="Checkout">Checkout</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="wizard-ex-property-listing.php" class="menu-link">
                            <div data-i18n="Property Listing">Property Listing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="wizard-ex-create-deal.php" class="menu-link">
                            <div data-i18n="Create Deal">Create Deal</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="modal-examples.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-square"></i>
                        <div data-i18n="Modal Examples">Modal Examples</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Components -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                    <div data-i18n="Components">Components</div>
                  </a>
                  <ul class="menu-sub">
                    <!-- Cards -->
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-id"></i>
                        <div data-i18n="Cards">Cards</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="cards-basic.php" class="menu-link">
                            <div data-i18n="Basic">Basic</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-advance.php" class="menu-link">
                            <div data-i18n="Advance">Advance</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-statistics.php" class="menu-link">
                            <div data-i18n="Statistics">Statistics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-analytics.php" class="menu-link">
                            <div data-i18n="Analytics">Analytics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-actions.php" class="menu-link">
                            <div data-i18n="Actions">Actions</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                        <div data-i18n="User interface">User interface</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="ui-accordion.php" class="menu-link">
                            <div data-i18n="Accordion">Accordion</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-alerts.php" class="menu-link">
                            <div data-i18n="Alerts">Alerts</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-badges.php" class="menu-link">
                            <div data-i18n="Badges">Badges</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-buttons.php" class="menu-link">
                            <div data-i18n="Buttons">Buttons</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-carousel.php" class="menu-link">
                            <div data-i18n="Carousel">Carousel</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-collapse.php" class="menu-link">
                            <div data-i18n="Collapse">Collapse</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-dropdowns.php" class="menu-link">
                            <div data-i18n="Dropdowns">Dropdowns</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-footer.php" class="menu-link">
                            <div data-i18n="Footer">Footer</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-list-groups.php" class="menu-link">
                            <div data-i18n="List groups">List groups</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-modals.php" class="menu-link">
                            <div data-i18n="Modals">Modals</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-navbar.php" class="menu-link">
                            <div data-i18n="Navbar">Navbar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-offcanvas.php" class="menu-link">
                            <div data-i18n="Offcanvas">Offcanvas</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-pagination-breadcrumbs.php" class="menu-link">
                            <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-progress.php" class="menu-link">
                            <div data-i18n="Progress">Progress</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-spinners.php" class="menu-link">
                            <div data-i18n="Spinners">Spinners</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-tabs-pills.php" class="menu-link">
                            <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-toasts.php" class="menu-link">
                            <div data-i18n="Toasts">Toasts</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-tooltips-popovers.php" class="menu-link">
                            <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-typography.php" class="menu-link">
                            <div data-i18n="Typography">Typography</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Extended components -->
                    <li class="menu-item">
                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-components"></i>
                        <div data-i18n="Extended UI">Extended UI</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="extended-ui-avatar.php" class="menu-link">
                            <div data-i18n="Avatar">Avatar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-blockui.php" class="menu-link">
                            <div data-i18n="BlockUI">BlockUI</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-drag-and-drop.php" class="menu-link">
                            <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-media-player.php" class="menu-link">
                            <div data-i18n="Media Player">Media Player</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-perfect-scrollbar.php" class="menu-link">
                            <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-star-ratings.php" class="menu-link">
                            <div data-i18n="Star Ratings">Star Ratings</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-sweetalert2.php" class="menu-link">
                            <div data-i18n="SweetAlert2">SweetAlert2</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-text-divider.php" class="menu-link">
                            <div data-i18n="Text Divider">Text Divider</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Timeline">Timeline</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="extended-ui-timeline-basic.php" class="menu-link">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="extended-ui-timeline-fullscreen.php" class="menu-link">
                                <div data-i18n="Fullscreen">Fullscreen</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-tour.php" class="menu-link">
                            <div data-i18n="Tour">Tour</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-treeview.php" class="menu-link">
                            <div data-i18n="Treeview">Treeview</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-misc.php" class="menu-link">
                            <div data-i18n="Miscellaneous">Miscellaneous</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Icons -->
                    <li class="menu-item">
                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
                        <div data-i18n="Icons">Icons</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="icons-tabler.php" class="menu-link">
                            <div data-i18n="Tabler">Tabler</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="icons-font-awesome.php" class="menu-link">
                            <div data-i18n="Fontawesome">Fontawesome</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- Forms -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-forms"></i>
                    <div data-i18n="Forms">Forms</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                        <div data-i18n="Form Elements">Form Elements</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="forms-basic-inputs.php" class="menu-link">
                            <div data-i18n="Basic Inputs">Basic Inputs</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-input-groups.php" class="menu-link">
                            <div data-i18n="Input groups">Input groups</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-custom-options.php" class="menu-link">
                            <div data-i18n="Custom Options">Custom Options</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-editors.php" class="menu-link">
                            <div data-i18n="Editors">Editors</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-file-upload.php" class="menu-link">
                            <div data-i18n="File Upload">File Upload</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-pickers.php" class="menu-link">
                            <div data-i18n="Pickers">Pickers</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-selects.php" class="menu-link">
                            <div data-i18n="Select & Tags">Select &amp; Tags</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-sliders.php" class="menu-link">
                            <div data-i18n="Sliders">Sliders</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-switches.php" class="menu-link">
                            <div data-i18n="Switches">Switches</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-extras.php" class="menu-link">
                            <div data-i18n="Extras">Extras</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                        <div data-i18n="Form Layouts">Form Layouts</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="form-layouts-vertical.php" class="menu-link">
                            <div data-i18n="Vertical Form">Vertical Form</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="form-layouts-horizontal.php" class="menu-link">
                            <div data-i18n="Horizontal Form">Horizontal Form</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="form-layouts-sticky.php" class="menu-link">
                            <div data-i18n="Sticky Actions">Sticky Actions</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                        <div data-i18n="Form Wizard">Form Wizard</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="form-wizard-numbered.php" class="menu-link">
                            <div data-i18n="Numbered">Numbered</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="form-wizard-icons.php" class="menu-link">
                            <div data-i18n="Icons">Icons</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="form-validation.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-checkbox"></i>
                        <div data-i18n="Form Validation">Form Validation</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Tables -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                    <div data-i18n="Tables">Tables</div>
                  </a>
                  <ul class="menu-sub">
                    <!-- Tables -->
                    <li class="menu-item">
                      <a href="tables-basic.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-table"></i>
                        <div data-i18n="Tables">Tables</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                        <div data-i18n="Datatables">Datatables</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="tables-datatables-basic.php" class="menu-link">
                            <div data-i18n="Basic">Basic</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="tables-datatables-advanced.php" class="menu-link">
                            <div data-i18n="Advanced">Advanced</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="tables-datatables-extensions.php" class="menu-link">
                            <div data-i18n="Extensions">Extensions</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- Charts & Maps -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-chart-bar"></i>
                    <div data-i18n="Charts & Maps">Charts & Maps</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                        <div data-i18n="Charts">Charts</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="charts-apex.php" class="menu-link">
                            <div data-i18n="Apex Charts">Apex Charts</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="charts-chartjs.php" class="menu-link">
                            <div data-i18n="ChartJS">ChartJS</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="maps-leaflet.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-map"></i>
                        <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Misc -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-box-multiple"></i>
                    <div data-i18n="Misc">Misc</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                        <div data-i18n="Support">Support</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-file-description"></i>
                        <div data-i18n="Documentation">Documentation</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </aside>
          <!-- / Menu -->

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">User / View /</span> Connections</h4>
            <div class="row">
              <!-- User Sidebar -->
              <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="user-avatar-section">
                      <div class="d-flex align-items-center flex-column">
                        <img class="img-fluid rounded mb-3 pt-1 mt-4" src="../../assets/img/avatars/15.png" height="100" width="100" alt="User avatar" />
                        <div class="user-info text-center">
                          <h4 class="mb-2">Violet Mendoza</h4>
                          <span class="badge bg-label-secondary mt-1">Author</span>
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
                    <h5 class="mt-4 small text-uppercase text-muted">Details</h5>
                    <div class="info-container">
                      <ul class="list-unstyled">
                        <li class="mb-2">
                          <span class="fw-medium me-1">Username:</span>
                          <span>violet.dev</span>
                        </li>
                        <li class="mb-2 pt-1">
                          <span class="fw-medium me-1">Email:</span>
                          <span>vafgot@vultukir.org</span>
                        </li>
                        <li class="mb-2 pt-1">
                          <span class="fw-medium me-1">Status:</span>
                          <span class="badge bg-label-success">Active</span>
                        </li>
                        <li class="mb-2 pt-1">
                          <span class="fw-medium me-1">Role:</span>
                          <span>Author</span>
                        </li>
                        <li class="mb-2 pt-1">
                          <span class="fw-medium me-1">Tax id:</span>
                          <span>Tax-8965</span>
                        </li>
                        <li class="mb-2 pt-1">
                          <span class="fw-medium me-1">Contact:</span>
                          <span>(123) 456-7890</span>
                        </li>
                        <li class="mb-2 pt-1">
                          <span class="fw-medium me-1">Languages:</span>
                          <span>French</span>
                        </li>
                        <li class="pt-1">
                          <span class="fw-medium me-1">Country:</span>
                          <span>England</span>
                        </li>
                      </ul>
                      <div class="d-flex justify-content-center">
                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                        <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /User Card -->
                <!-- Plan Card -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <span class="badge bg-label-primary">Standard</span>
                      <div class="d-flex justify-content-center">
                        <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary fw-normal">$</sup>
                        <h1 class="mb-0 text-primary">99</h1>
                        <sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-muted">/month</sub>
                      </div>
                    </div>
                    <ul class="ps-3 g-2 my-3">
                      <li class="mb-2">10 Users</li>
                      <li class="mb-2">Up to 10 GB storage</li>
                      <li>Basic Support</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mb-1 fw-medium text-heading">
                      <span>Days</span>
                      <span>65% Completed</span>
                    </div>
                    <div class="progress mb-1" style="height: 8px">
                      <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>4 days remaining</span>
                    <div class="d-grid w-100 mt-4">
                      <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                        Upgrade Plan
                      </button>
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
                    <a class="nav-link" href="app-user-view-account.php"><i class="ti ti-user-check me-1 ti-xs"></i>Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="app-user-view-security.php"><i class="ti ti-lock me-1 ti-xs"></i>Security</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="app-user-view-billing.php"><i class="ti ti-currency-dollar me-1 ti-xs"></i>Billing & Plans</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="app-user-view-notifications.php"><i class="ti ti-bell me-1 ti-xs"></i>Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="ti ti-link me-1 ti-xs"></i>Connections</a>
                  </li>
                </ul>
                <!--/ User Pills -->
                <!-- Connected Accounts -->
                <div class="card mb-4">
                  <h5 class="card-header pb-1">Connected Accounts</h5>
                  <div class="card-body">
                    <p class="mb-4">Display content from your connected accounts on your site</p>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/google.png" alt="google" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-9 mb-sm-0 mb-2">
                          <h6 class="mb-0">Google</h6>
                          <small class="text-muted">Calendar and contacts</small>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                          <div class="form-check form-switch">
                            <input class="form-check-input float-end" type="checkbox" checked />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/slack.png" alt="slack" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-9 mb-sm-0 mb-2">
                          <h6 class="mb-0">Slack</h6>
                          <small class="text-muted">Communication</small>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                          <div class="form-check form-switch">
                            <input class="form-check-input float-end" type="checkbox" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/github.png" alt="github" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-9 mb-sm-0 mb-2">
                          <h6 class="mb-0">Github</h6>
                          <small class="text-muted">Manage your Git repositories</small>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                          <div class="form-check form-switch">
                            <input class="form-check-input float-end" type="checkbox" checked />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/mailchimp.png" alt="mailchimp" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-9 mb-sm-0 mb-2">
                          <h6 class="mb-0">Mailchimp</h6>
                          <small class="text-muted">Email marketing service</small>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                          <div class="form-check form-switch">
                            <input class="form-check-input float-end" type="checkbox" checked />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/asana.png" alt="asana" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-9 mb-sm-0 mb-2">
                          <h6 class="mb-0">Asana</h6>
                          <small class="text-muted">Communication</small>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                          <div class="form-check form-switch">
                            <input class="form-check-input float-end" type="checkbox" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Connected Accounts -->

                <!-- Social Accounts -->
                <div class="card mb-4">
                  <h5 class="card-header pb-1">Social Accounts</h5>
                  <div class="card-body">
                    <p class="mb-4">Display content from social accounts on your site</p>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/facebook.png" alt="facebook" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-7 mb-sm-0 mb-2">
                          <h6 class="mb-0">Facebook</h6>
                          <small class="text-muted">Not Connected</small>
                        </div>
                        <div class="col-5 text-end">
                          <button class="btn btn-label-secondary btn-icon"><i class="ti ti-link ti-sm"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/twitter.png" alt="twitter" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-7 mb-sm-0 mb-2">
                          <h6 class="mb-0">Twitter</h6>
                          <a href="https://twitter.com/pixinvents" target="_blank">@Pixinvent</a>
                        </div>
                        <div class="col-5 text-end">
                          <button class="btn btn-label-danger btn-icon"><i class="ti ti-trash ti-sm"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/instagram.png" alt="instagram" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-7 mb-sm-0 mb-2">
                          <h6 class="mb-0">instagram</h6>
                          <a href="https://www.instagram.com/pixinvents/" target="_blank">@Pixinvent</a>
                        </div>
                        <div class="col-5 text-end">
                          <button class="btn btn-label-danger btn-icon"><i class="ti ti-trash ti-sm"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/dribbble.png" alt="dribbble" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-7 mb-sm-0 mb-2">
                          <h6 class="mb-0">Dribbble</h6>
                          <small class="text-muted">Not Connected</small>
                        </div>
                        <div class="col-5 text-end">
                          <button class="btn btn-label-secondary btn-icon"><i class="ti ti-link ti-sm"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../../assets/img/icons/brands/behance.png" alt="behance" class="me-3" height="38" />
                      </div>
                      <div class="flex-grow-1 row">
                        <div class="col-7 mb-sm-0 mb-2">
                          <h6 class="mb-0">Behance</h6>
                          <small class="text-muted">Not Connected</small>
                        </div>
                        <div class="col-5 text-end">
                          <button class="btn btn-label-secondary btn-icon"><i class="ti ti-link ti-sm"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Social Accounts -->
            </div>

            <!-- Modals -->
            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                  <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                      <h3 class="mb-2">Edit User Information</h3>
                      <p class="text-muted">Updating user details will receive a privacy audit.</p>
                    </div>
                    <form id="editUserForm" class="row g-3" onsubmit="return false">
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="modalEditUserName">Username</label>
                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserEmail">Email</label>
                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserStatus">Status</label>
                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="select2 form-select" aria-label="Default select example">
                          <option selected>Status</option>
                          <option value="1">Active</option>
                          <option value="2">Inactive</option>
                          <option value="3">Suspended</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Tax ID</label>
                        <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                        <div class="input-group">
                          <span class="input-group-text">US (+1)</span>
                          <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLanguage">Language</label>
                        <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
                          <option value="">Select</option>
                          <option value="english" selected>English</option>
                          <option value="spanish">Spanish</option>
                          <option value="french">French</option>
                          <option value="german">German</option>
                          <option value="dutch">Dutch</option>
                          <option value="hebrew">Hebrew</option>
                          <option value="sanskrit">Sanskrit</option>
                          <option value="hindi">Hindi</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserCountry">Country</label>
                        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
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
            <!--/ Edit User Modal -->

            <!-- Add New Credit Card Modal -->
            <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                <div class="modal-content p-3 p-md-5">
                  <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                      <h3 class="mb-2">Upgrade Plan</h3>
                      <p>Choose the best plan for user.</p>
                    </div>
                    <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                      <div class="col-sm-8">
                        <label class="form-label" for="choosePlan">Choose Plan</label>
                        <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                          <option selected>Choose Plan</option>
                          <option value="standard">Standard - $99/month</option>
                          <option value="exclusive">Exclusive - $249/month</option>
                          <option value="Enterprise">Enterprise - $499/month</option>
                        </select>
                      </div>
                      <div class="col-sm-4 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary">Upgrade</button>
                      </div>
                    </form>
                  </div>
                  <hr class="mx-md-n5 mx-n3" />
                  <div class="modal-body">
                    <p class="mb-0">User current plan is standard plan</p>
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                      <div class="d-flex justify-content-center me-2">
                        <sup class="h6 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                        <h1 class="display-5 mb-0 text-primary">99</h1>
                        <sub class="h5 pricing-duration mt-auto mb-2 text-muted">/month</sub>
                      </div>
                      <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Add New Credit Card Modal -->

            <!-- /Modals -->
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
</body>

</html>