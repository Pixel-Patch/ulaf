<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>FAQ - Pages | Vuexy - Bootstrap Admin Template</title>

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

  <!-- Page CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/page-faq.css" />

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
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
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
                    <a class="dropdown-item" href="pages-profile-user.php">
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
                <li class="menu-item">
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
                    <li class="menu-item">
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
                        <li class="menu-item">
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
                            <li class="menu-item">
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
                <li class="menu-item active">
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
                          <a href="pages-profile-user.php" class="menu-link">
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
                    <li class="menu-item active">
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
            <div class="faq-header d-flex flex-column justify-content-center align-items-center rounded h-px-300 position-relative">
              <img src="../../assets/img/pages/header.png" class="scaleX-n1-rtl faq-banner-img" alt="background image" />
              <h3 class="text-center">Hello, how can we help?</h3>
              <div class="input-wrapper mb-3 input-group input-group-lg input-group-merge">
                <span class="input-group-text" id="basic-addon1"><i class="ti ti-search"></i></span>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" />
              </div>
              <p class="text-center mb-0 px-3">or choose a category to quickly find the help you need</p>
            </div>

            <div class="row mt-4 pt-2">
              <!-- Navigation -->
              <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
                <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                  <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
                        <i class="ti ti-credit-card me-1 ti-sm"></i>
                        <span class="align-middle fw-medium">Payment</span>
                      </button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                        <i class="ti ti-briefcase me-1 ti-sm"></i>
                        <span class="align-middle fw-medium">Delivery</span>
                      </button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
                        <i class="ti ti-rotate-clockwise-2 me-1 ti-sm"></i>
                        <span class="align-middle fw-medium">Cancellation & Return</span>
                      </button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#orders">
                        <i class="ti ti-box me-1 ti-sm"></i>
                        <span class="align-middle fw-medium">My Orders</span>
                      </button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product">
                        <i class="ti ti-settings me-1 ti-sm"></i>
                        <span class="align-middle fw-medium">Product & Services</span>
                      </button>
                    </li>
                  </ul>
                  <div class="d-none d-md-block">
                    <div class="mt-4">
                      <img src="../../assets/img/illustrations/girl-sitting-with-laptop.png" class="img-fluid" width="270" alt="FAQ Image" />
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Navigation -->

              <!-- FAQ's -->
              <div class="col-lg-9 col-md-8 col-12">
                <div class="tab-content py-0">
                  <div class="tab-pane fade show active" id="payment" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                      <div>
                        <span class="badge bg-label-primary rounded-2 p-2">
                          <i class="ti ti-credit-card ti-lg"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">
                          <span class="align-middle">Payment</span>
                        </h4>
                        <small>Get help with payment</small>
                      </div>
                    </div>
                    <div id="accordionPayment" class="accordion">
                      <div class="card accordion-item active">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionPayment-1" aria-controls="accordionPayment-1">
                            When is payment taken for my order?
                          </button>
                        </h2>

                        <div id="accordionPayment-1" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            Payment is taken during the checkout process when you pay for your order. The order number
                            that appears on the confirmation screen indicates payment has been successfully processed.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">
                            How do I pay for my order?
                          </button>
                        </h2>
                        <div id="accordionPayment-2" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            We accept Visa®, MasterCard®, American Express®, and PayPal®. Our servers encrypt all
                            information submitted to them, so you can be confident that your credit card information
                            will be kept safe and secure.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-3" aria-controls="accordionPayment-3">
                            What should I do if I'm having trouble placing an order?
                          </button>
                        </h2>
                        <div id="accordionPayment-3" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            For any technical difficulties you are experiencing with our website, please contact us at
                            our
                            <a href="javascript:void(0);">support portal</a>, or you can call us toll-free at
                            <span class="fw-medium">1-000-000-000</span>, or email us at
                            <a href="javascript:void(0);">order@companymail.com</a>
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-4" aria-controls="accordionPayment-4">
                            Which license do I need for an end product that is only accessible to paying users?
                          </button>
                        </h2>
                        <div id="accordionPayment-4" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            If you have paying users or you are developing any SaaS products then you need an Extended
                            License. For each products, you need a license. You can get free lifetime updates as well.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-5" aria-controls="accordionPayment-5">
                            Does my subscription automatically renew?
                          </button>
                        </h2>
                        <div id="accordionPayment-5" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                            jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                            lollipop sesame snaps.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="delivery" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                      <div>
                        <span class="badge bg-label-primary rounded-2 p-2">
                          <i class="ti ti-briefcase ti-lg"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">
                          <span class="align-middle">Delivery</span>
                        </h4>
                        <small>Lorem ipsum, dolor sit amet.</small>
                      </div>
                    </div>
                    <div id="accordionDelivery" class="accordion">
                      <div class="card accordion-item active">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionDelivery-1" aria-controls="accordionDelivery-1">
                            How would you ship my order?
                          </button>
                        </h2>

                        <div id="accordionDelivery-1" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            For large products, we deliver your product via a third party logistics company offering
                            you the “room of choice” scheduled delivery service. For small products, we offer free
                            parcel delivery.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionDelivery-2" aria-controls="accordionDelivery-2">
                            What is the delivery cost of my order?
                          </button>
                        </h2>
                        <div id="accordionDelivery-2" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            The cost of scheduled delivery is $69 or $99 per order, depending on the destination
                            postal code. The parcel delivery is free.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionDelivery-4" aria-controls="accordionDelivery-4">
                            What to do if my product arrives damaged?
                          </button>
                        </h2>
                        <div id="accordionDelivery-4" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            We will promptly replace any product that is damaged in transit. Just contact our
                            <a href="javascript:void(0);">support team</a>, to notify us of the situation within 48
                            hours of product arrival.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="cancellation" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                      <div>
                        <span class="badge bg-label-primary rounded-2 p-2">
                          <i class="ti ti-rotate-clockwise-2 ti-lg"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0"><span class="align-middle">Cancellation & Return</span></h4>
                        <small>Lorem ipsum, dolor sit amet.</small>
                      </div>
                    </div>
                    <div id="accordionCancellation" class="accordion">
                      <div class="card accordion-item active">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionCancellation-1" aria-controls="accordionCancellation-1">
                            Can I cancel my order?
                          </button>
                        </h2>

                        <div id="accordionCancellation-1" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            <p>
                              Scheduled delivery orders can be cancelled 72 hours prior to your selected delivery date
                              for full refund.
                            </p>
                            <p class="mb-0">
                              Parcel delivery orders cannot be cancelled, however a free return label can be provided
                              upon request.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionCancellation-2" aria-controls="accordionCancellation-2">
                            Can I return my product?
                          </button>
                        </h2>
                        <div id="accordionCancellation-2" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            You can return your product within 15 days of delivery, by contacting our
                            <a href="javascript:void(0);">support team</a>, All merchandise returned must be in the
                            original packaging with all original items.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-controls="accordionCancellation-3" data-bs-target="#accordionCancellation-3">
                            Where can I view status of return?
                          </button>
                        </h2>
                        <div id="accordionCancellation-3" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            <p>Locate the item from Your <a href="javascript:void(0);">Orders</a></p>
                            <p class="mb-0">Select <span class="fw-medium">Return/Refund</span> status</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="orders" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                      <div>
                        <span class="badge bg-label-primary rounded-2 p-2">
                          <i class="ti ti-box ti-lg"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">
                          <span class="align-middle">My Orders</span>
                        </h4>
                        <small>Lorem ipsum, dolor sit amet.</small>
                      </div>
                    </div>
                    <div id="accordionOrders" class="accordion">
                      <div class="card accordion-item active">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionOrders-1" aria-controls="accordionOrders-1">
                            Has my order been successful?
                          </button>
                        </h2>

                        <div id="accordionOrders-1" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            <p>
                              All successful order transactions will receive an order confirmation email once the
                              order has been processed. If you have not received your order confirmation email within
                              24 hours, check your junk email or spam folder.
                            </p>
                            <p class="mb-0">
                              Alternatively, log in to your account to check your order summary. If you do not have a
                              account, you can contact our Customer Care Team on
                              <span class="fw-medium">1-000-000-000</span>.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOrders-2" aria-controls="accordionOrders-2">
                            My Promotion Code is not working, what can I do?
                          </button>
                        </h2>
                        <div id="accordionOrders-2" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            If you are having issues with a promotion code, please contact us at
                            <span class="fw-medium">1 000 000 000</span> for assistance.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOrders-3" aria-controls="accordionOrders-3">
                            How do I track my Orders?
                          </button>
                        </h2>
                        <div id="accordionOrders-3" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            <p>
                              If you have an account just sign into your account from
                              <a href="javascript:void(0);">here</a> and select
                              <span class="fw-medium">“My Orders”</span>.
                            </p>
                            <p class="mb-0">
                              If you have a a guest account track your order from
                              <a href="javascript:void(0);">here</a> using the order number and the email address.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                      <div>
                        <span class="badge bg-label-primary rounded-2 p-2">
                          <i class="ti ti-camera ti-lg"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">
                          <span class="align-middle">Product & Services</span>
                        </h4>
                        <small>Lorem ipsum, dolor sit amet.</small>
                      </div>
                    </div>
                    <div id="accordionProduct" class="accordion">
                      <div class="card accordion-item active">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionProduct-1" aria-controls="accordionProduct-1">
                            Will I be notified once my order has shipped?
                          </button>
                        </h2>

                        <div id="accordionProduct-1" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            Yes, We will send you an email once your order has been shipped. This email will contain
                            tracking and order information.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProduct-2" aria-controls="accordionProduct-2">
                            Where can I find warranty information?
                          </button>
                        </h2>
                        <div id="accordionProduct-2" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            We are committed to quality products. For information on warranty period and warranty
                            services, visit our Warranty section <a href="javascript:void(0);">here</a>.
                          </div>
                        </div>
                      </div>

                      <div class="card accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProduct-3" aria-controls="accordionProduct-3">
                            How can I purchase additional warranty coverage?
                          </button>
                        </h2>
                        <div id="accordionProduct-3" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            For the peace of your mind, we offer extended warranty plans that add additional year(s)
                            of protection to the standard manufacturer’s warranty provided by us. To purchase or find
                            out more about the extended warranty program, visit Extended Warranty section
                            <a href="javascript:void(0);">here</a>.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /FAQ's -->
            </div>

            <!-- Contact -->
            <div class="row mt-5">
              <div class="col-12 text-center mb-4">
                <div class="badge bg-label-primary">Question?</div>
                <h4 class="my-2">You still have a question?</h4>
                <p>If you can't find question in our FAQ, you can contact us. We'll answer you shortly!</p>
              </div>
            </div>
            <div class="row text-center justify-content-center gap-sm-0 gap-3">
              <div class="col-sm-6">
                <div class="py-3 rounded bg-faq-section text-center">
                  <span class="badge bg-label-primary my-3 rounded-2 p-2">
                    <i class="ti ti-phone ti-md"></i>
                  </span>
                  <h4 class="mb-2"><a class="text-body" href="tel:+(810)25482568">+ (810) 2548 2568</a></h4>
                  <p>We are always happy to help</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="py-3 rounded bg-faq-section text-center">
                  <span class="badge bg-label-primary my-3 rounded-2 p-2">
                    <i class="ti ti-mail ti-md"></i>
                  </span>
                  <h4 class="mb-2"><a class="text-body" href="mailto:help@help.com">help@help.com</a></h4>
                  <p>Best way to get a quick answer</p>
                </div>
              </div>
            </div>
            <!-- /Contact -->
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

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
</body>

</html>