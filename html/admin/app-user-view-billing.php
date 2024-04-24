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
            <a href="index.html" class="app-brand-link gap-2">
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
                        <a href="app-calendar.html" class="stretched-link">Calendar</a>
                        <small class="text-muted mb-0">Appointments</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-file-invoice fs-4"></i>
                        </span>
                        <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                        <small class="text-muted mb-0">Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-users fs-4"></i>
                        </span>
                        <a href="app-user-list.html" class="stretched-link">User App</a>
                        <small class="text-muted mb-0">Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-lock fs-4"></i>
                        </span>
                        <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                        <small class="text-muted mb-0">Permission</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-chart-bar fs-4"></i>
                        </span>
                        <a href="index.html" class="stretched-link">Dashboard</a>
                        <small class="text-muted mb-0">User Profile</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-settings fs-4"></i>
                        </span>
                        <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                        <small class="text-muted mb-0">Account Settings</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-help fs-4"></i>
                        </span>
                        <a href="pages-faq.html" class="stretched-link">FAQs</a>
                        <small class="text-muted mb-0">FAQs & Articles</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-square fs-4"></i>
                        </span>
                        <a href="modal-examples.html" class="stretched-link">Modals</a>
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
                    <a class="dropdown-item" href="pages-account-settings-account.html">
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
                    <a class="dropdown-item" href="pages-profile-user.html">
                      <i class="ti ti-user-check me-2 ti-sm"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <i class="ti ti-settings me-2 ti-sm"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-billing.html">
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
                    <a class="dropdown-item" href="pages-faq.html">
                      <i class="ti ti-help me-2 ti-sm"></i>
                      <span class="align-middle">FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-pricing.html">
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
                      <a href="index.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                        <div data-i18n="Analytics">Analytics</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="dashboards-crm.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                        <div data-i18n="CRM">CRM</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-dashboard.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                        <div data-i18n="eCommerce">eCommerce</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-logistics-dashboard.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-truck"></i>
                        <div data-i18n="Logistics">Logistics</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-academy-dashboard.html" class="menu-link">
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
                      <a href="layouts-without-menu.html" class="menu-link">
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
                      <a href="layouts-fluid.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-maximize"></i>
                        <div data-i18n="Fluid">Fluid</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="layouts-container.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                        <div data-i18n="Container">Container</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="layouts-blank.html" class="menu-link">
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
                      <a href="app-email.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-mail"></i>
                        <div data-i18n="Email">Email</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-chat.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-messages"></i>
                        <div data-i18n="Chat">Chat</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-calendar.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-calendar"></i>
                        <div data-i18n="Calendar">Calendar</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-kanban.html" class="menu-link">
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
                          <a href="app-ecommerce-dashboard.html" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Products">Products</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-ecommerce-product-list.html" class="menu-link">
                                <div data-i18n="Product List">Product List</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-product-add.html" class="menu-link">
                                <div data-i18n="Add Product">Add Product</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-category-list.html" class="menu-link">
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
                              <a href="app-ecommerce-order-list.html" class="menu-link">
                                <div data-i18n="Order List">Order List</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-order-details.html" class="menu-link">
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
                              <a href="app-ecommerce-customer-all.html" class="menu-link">
                                <div data-i18n="All Customers">All Customers</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Customer Details">Customer Details</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                    <div data-i18n="Overview">Overview</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                    <div data-i18n="Security">Security</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                    <div data-i18n="Address & Billing">Address & Billing</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                            <div data-i18n="Manage Reviews">Manage Reviews</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-referral.html" class="menu-link">
                            <div data-i18n="Referrals">Referrals</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Settings">Settings</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                <div data-i18n="Store Details">Store Details</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                <div data-i18n="Payments">Payments</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                <div data-i18n="Checkout">Checkout</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                <div data-i18n="Locations">Locations</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-ecommerce-settings-notifications.html" class="menu-link">
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
                          <a href="app-academy-dashboard.html" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-academy-course.html" class="menu-link">
                            <div data-i18n="My Course">My Course</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-academy-course-details.html" class="menu-link">
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
                          <a href="app-logistics-dashboard.html" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-logistics-fleet.html" class="menu-link">
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
                          <a href="app-invoice-list.html" class="menu-link">
                            <div data-i18n="List">List</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-invoice-preview.html" class="menu-link">
                            <div data-i18n="Preview">Preview</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-invoice-edit.html" class="menu-link">
                            <div data-i18n="Edit">Edit</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-invoice-add.html" class="menu-link">
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
                          <a href="app-user-list.html" class="menu-link">
                            <div data-i18n="List">List</div>
                          </a>
                        </li>
                        <li class="menu-item active">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="View">View</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-user-view-account.html" class="menu-link">
                                <div data-i18n="Account">Account</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-user-view-security.html" class="menu-link">
                                <div data-i18n="Security">Security</div>
                              </a>
                            </li>
                            <li class="menu-item active">
                              <a href="app-user-view-billing.html" class="menu-link">
                                <div data-i18n="Billing & Plans">Billing & Plans</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-user-view-notifications.html" class="menu-link">
                                <div data-i18n="Notifications">Notifications</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-user-view-connections.html" class="menu-link">
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
                          <a href="app-access-roles.html" class="menu-link">
                            <div data-i18n="Roles">Roles</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-access-permission.html" class="menu-link">
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
                          <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                            <div data-i18n="Landing">Landing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                            <div data-i18n="Pricing">Pricing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                            <div data-i18n="Payment">Payment</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                            <div data-i18n="Checkout">Checkout</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
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
                          <a href="pages-profile-user.html" class="menu-link">
                            <div data-i18n="Profile">Profile</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-profile-teams.html" class="menu-link">
                            <div data-i18n="Teams">Teams</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-profile-projects.html" class="menu-link">
                            <div data-i18n="Projects">Projects</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-profile-connections.html" class="menu-link">
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
                          <a href="pages-account-settings-account.html" class="menu-link">
                            <div data-i18n="Account">Account</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-security.html" class="menu-link">
                            <div data-i18n="Security">Security</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-billing.html" class="menu-link">
                            <div data-i18n="Billing & Plans">Billing & Plans</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-notifications.html" class="menu-link">
                            <div data-i18n="Notifications">Notifications</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-account-settings-connections.html" class="menu-link">
                            <div data-i18n="Connections">Connections</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="pages-faq.html" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-help"></i>
                        <div data-i18n="FAQ">FAQ</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-pricing.html" class="menu-link">
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
                          <a href="pages-misc-error.html" class="menu-link" target="_blank">
                            <div data-i18n="Error">Error</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                            <div data-i18n="Under Maintenance">Under Maintenance</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                            <div data-i18n="Coming Soon">Coming Soon</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
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
                              <a href="auth-login-basic.html" class="menu-link" target="_blank">
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
                              <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-register-cover.php" class="menu-link" target="_blank">
                                <div data-i18n="Cover">Cover</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
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
                              <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
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
                              <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
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
                              <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
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
                              <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
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
                          <a href="wizard-ex-checkout.html" class="menu-link">
                            <div data-i18n="Checkout">Checkout</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="wizard-ex-property-listing.html" class="menu-link">
                            <div data-i18n="Property Listing">Property Listing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="wizard-ex-create-deal.html" class="menu-link">
                            <div data-i18n="Create Deal">Create Deal</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="modal-examples.html" class="menu-link">
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
                          <a href="cards-basic.html" class="menu-link">
                            <div data-i18n="Basic">Basic</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-advance.html" class="menu-link">
                            <div data-i18n="Advance">Advance</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-statistics.html" class="menu-link">
                            <div data-i18n="Statistics">Statistics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-analytics.html" class="menu-link">
                            <div data-i18n="Analytics">Analytics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="cards-actions.html" class="menu-link">
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
                          <a href="ui-accordion.html" class="menu-link">
                            <div data-i18n="Accordion">Accordion</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-alerts.html" class="menu-link">
                            <div data-i18n="Alerts">Alerts</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-badges.html" class="menu-link">
                            <div data-i18n="Badges">Badges</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-buttons.html" class="menu-link">
                            <div data-i18n="Buttons">Buttons</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-carousel.html" class="menu-link">
                            <div data-i18n="Carousel">Carousel</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-collapse.html" class="menu-link">
                            <div data-i18n="Collapse">Collapse</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-dropdowns.html" class="menu-link">
                            <div data-i18n="Dropdowns">Dropdowns</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-footer.html" class="menu-link">
                            <div data-i18n="Footer">Footer</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-list-groups.html" class="menu-link">
                            <div data-i18n="List groups">List groups</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-modals.html" class="menu-link">
                            <div data-i18n="Modals">Modals</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-navbar.html" class="menu-link">
                            <div data-i18n="Navbar">Navbar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-offcanvas.html" class="menu-link">
                            <div data-i18n="Offcanvas">Offcanvas</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                            <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-progress.html" class="menu-link">
                            <div data-i18n="Progress">Progress</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-spinners.html" class="menu-link">
                            <div data-i18n="Spinners">Spinners</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-tabs-pills.html" class="menu-link">
                            <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-toasts.html" class="menu-link">
                            <div data-i18n="Toasts">Toasts</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-tooltips-popovers.html" class="menu-link">
                            <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="ui-typography.html" class="menu-link">
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
                          <a href="extended-ui-avatar.html" class="menu-link">
                            <div data-i18n="Avatar">Avatar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-blockui.html" class="menu-link">
                            <div data-i18n="BlockUI">BlockUI</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-drag-and-drop.html" class="menu-link">
                            <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-media-player.html" class="menu-link">
                            <div data-i18n="Media Player">Media Player</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                            <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-star-ratings.html" class="menu-link">
                            <div data-i18n="Star Ratings">Star Ratings</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-sweetalert2.html" class="menu-link">
                            <div data-i18n="SweetAlert2">SweetAlert2</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-text-divider.html" class="menu-link">
                            <div data-i18n="Text Divider">Text Divider</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Timeline">Timeline</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="extended-ui-timeline-basic.html" class="menu-link">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                <div data-i18n="Fullscreen">Fullscreen</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-tour.html" class="menu-link">
                            <div data-i18n="Tour">Tour</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-treeview.html" class="menu-link">
                            <div data-i18n="Treeview">Treeview</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="extended-ui-misc.html" class="menu-link">
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
                          <a href="icons-tabler.html" class="menu-link">
                            <div data-i18n="Tabler">Tabler</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="icons-font-awesome.html" class="menu-link">
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
                          <a href="forms-basic-inputs.html" class="menu-link">
                            <div data-i18n="Basic Inputs">Basic Inputs</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-input-groups.html" class="menu-link">
                            <div data-i18n="Input groups">Input groups</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-custom-options.html" class="menu-link">
                            <div data-i18n="Custom Options">Custom Options</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-editors.html" class="menu-link">
                            <div data-i18n="Editors">Editors</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-file-upload.html" class="menu-link">
                            <div data-i18n="File Upload">File Upload</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-pickers.html" class="menu-link">
                            <div data-i18n="Pickers">Pickers</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-selects.html" class="menu-link">
                            <div data-i18n="Select & Tags">Select &amp; Tags</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-sliders.html" class="menu-link">
                            <div data-i18n="Sliders">Sliders</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-switches.html" class="menu-link">
                            <div data-i18n="Switches">Switches</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="forms-extras.html" class="menu-link">
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
                          <a href="form-layouts-vertical.html" class="menu-link">
                            <div data-i18n="Vertical Form">Vertical Form</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="form-layouts-horizontal.html" class="menu-link">
                            <div data-i18n="Horizontal Form">Horizontal Form</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="form-layouts-sticky.html" class="menu-link">
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
                          <a href="form-wizard-numbered.html" class="menu-link">
                            <div data-i18n="Numbered">Numbered</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="form-wizard-icons.html" class="menu-link">
                            <div data-i18n="Icons">Icons</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="form-validation.html" class="menu-link">
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
                      <a href="tables-basic.html" class="menu-link">
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
                          <a href="tables-datatables-basic.html" class="menu-link">
                            <div data-i18n="Basic">Basic</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="tables-datatables-advanced.html" class="menu-link">
                            <div data-i18n="Advanced">Advanced</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="tables-datatables-extensions.html" class="menu-link">
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
                          <a href="charts-apex.html" class="menu-link">
                            <div data-i18n="Apex Charts">Apex Charts</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="charts-chartjs.html" class="menu-link">
                            <div data-i18n="ChartJS">ChartJS</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="maps-leaflet.html" class="menu-link">
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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">User / View /</span> Billing & Plans</h4>
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
                    <p class="mt-4 small text-uppercase text-muted">Details</p>
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
                        <sup class="h6 fw-medium pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                        <h1 class="mb-0 text-primary">99</h1>
                        <sub class="h6 fw-medium pricing-duration mt-auto mb-2 text-muted">/month</sub>
                      </div>
                    </div>
                    <ul class="ps-3 g-2 my-3">
                      <li class="mb-2">10 Users</li>
                      <li class="mb-2">Up to 10 GB storage</li>
                      <li>Basic Support</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mb-1 fw-medium text-heading">
                      <span>Days</span>
                      <span>80% Completed</span>
                    </div>
                    <div class="progress mb-1" style="height: 8px">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>6 days remaining</span>
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
                    <a class="nav-link" href="app-user-view-account.html"><i class="ti ti-user-check me-1 ti-xs"></i>Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="app-user-view-security.html"><i class="ti ti-lock me-1 ti-xs"></i>Security</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="ti ti-currency-dollar me-1 ti-xs"></i>Billing & Plans</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="app-user-view-notifications.html"><i class="ti ti-bell me-1 ti-xs"></i>Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="app-user-view-connections.html"><i class="ti ti-link me-1 ti-xs"></i>Connections</a>
                  </li>
                </ul>
                <!--/ User Pills -->

                <!-- Current Plan -->
                <div class="card mb-4">
                  <h5 class="card-header">Current Plan</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-6 order-1 order-xl-0">
                        <div class="mb-2">
                          <h6 class="mb-1">Your Current Plan is Basic</h6>
                          <p>A simple start for everyone</p>
                        </div>
                        <div class="mb-2 pt-1">
                          <h6 class="mb-1">Active until Dec 09, 2021</h6>
                          <p>We will send you a notification upon Subscription expiration</p>
                        </div>
                        <div class="mb-3 pt-1">
                          <h6 class="mb-1">
                            <span class="me-2">$199 Per Month</span>
                            <span class="badge bg-label-primary">Popular</span>
                          </h6>
                          <p>Standard plan for small to medium businesses</p>
                        </div>
                      </div>
                      <div class="col-xl-6 order-0 order-xl-0">
                        <div class="alert alert-warning" role="alert">
                          <h5 class="alert-heading mb-2">We need your attention!</h5>
                          <span>Your plan requires update</span>
                        </div>
                        <div class="plan-statistics">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-1">Days</h6>
                            <h6 class="mb-1">24 of 30 Days</h6>
                          </div>
                          <div class="progress mb-1" style="height: 10px">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p>6 days remaining until your plan requires update</p>
                        </div>
                      </div>
                      <div class="col-12 order-2 order-xl-0 d-flex flex-wrap gap-2">
                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#upgradePlanModal">
                          Upgrade Plan
                        </button>
                        <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Current Plan -->

                <!-- Payment Methods -->
                <div class="card card-action mb-4">
                  <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Payment Methods</h5>
                    <div class="card-action-element">
                      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal">
                        <i class="ti ti-plus ti-xs me-1"></i>Add Card
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="added-cards">
                      <div class="cardMaster border p-3 rounded mb-3">
                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                          <div class="card-information">
                            <img class="mb-3 img-fluid" src="../../assets/img/icons/payments/mastercard.png" alt="Master Card" />
                            <h6 class="mb-2 pt-1">Kaith Morrison</h6>
                            <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                              9856</span>
                          </div>
                          <div class="d-flex flex-column text-start text-lg-end">
                            <div class="d-flex order-sm-0 order-1 mt-3">
                              <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">
                                Edit
                              </button>
                              <button class="btn btn-label-secondary">Delete</button>
                            </div>
                            <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                          </div>
                        </div>
                      </div>
                      <div class="cardMaster border p-3 rounded mb-3">
                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                          <div class="card-information">
                            <img class="mb-3 img-fluid" src="../../assets/img/icons/payments/visa.png" alt="Master Card" />
                            <div class="d-flex align-items-center mb-2 pt-1">
                              <h6 class="mb-0 me-3">Tom McBride</h6>
                              <span class="badge bg-label-primary me-1">Primary</span>
                            </div>
                            <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                              6542</span>
                          </div>
                          <div class="d-flex flex-column text-start text-lg-end">
                            <div class="d-flex order-sm-0 order-1 mt-3">
                              <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">
                                Edit
                              </button>
                              <button class="btn btn-label-secondary">Delete</button>
                            </div>
                            <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 10/24</small>
                          </div>
                        </div>
                      </div>
                      <div class="cardMaster border p-3 rounded">
                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                          <div class="card-information">
                            <img class="mb-3 img-fluid" src="../../assets/img/icons/payments/american-express-logo.png" alt="Visa Card" />
                            <h6 class="mb-1 pt-1">Mildred Wagner</h6>
                            <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                              5896</span>
                          </div>
                          <div class="d-flex flex-column text-start text-lg-end">
                            <div class="d-flex order-sm-0 order-1 mt-3">
                              <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">
                                Edit
                              </button>
                              <button class="btn btn-label-secondary">Delete</button>
                            </div>
                            <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 10/27</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Payment Methods -->

                <!-- Billing Address -->
                <div class="card card-action mb-4">
                  <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Billing Address</h5>
                    <div class="card-action-element">
                      <button class="btn btn-primary btn-sm edit-address" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                        Edit address
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-7 col-12">
                        <dl class="row mb-0">
                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Company Name:</dt>
                          <dd class="col-sm-8">Vuexy</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Billing Email:</dt>
                          <dd class="col-sm-8">user@ex.com</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Tax ID:</dt>
                          <dd class="col-sm-8">TAX-357378</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">VAT Number:</dt>
                          <dd class="col-sm-8">SDF754K77</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Billing Address:</dt>
                          <dd class="col-sm-8">
                            100 Water Plant <br />Avenue, Building 1303<br />
                            Wake Island
                          </dd>
                        </dl>
                      </div>
                      <div class="col-xl-5 col-12">
                        <dl class="row mb-0">
                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Contact:</dt>
                          <dd class="col-sm-8">+1 (605) 977-32-65</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Country:</dt>
                          <dd class="col-sm-8">Wake Island</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">State:</dt>
                          <dd class="col-sm-8">Capholim</dd>

                          <dt class="col-sm-4 mb-2 fw-medium text-nowrap">Zipcode:</dt>
                          <dd class="col-sm-8">403114</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Billing Address -->
              </div>
              <!--/ User Content -->
            </div>

            <!-- Modal -->
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
            <div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                  <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                      <h3 class="mb-2">Edit Card</h3>
                      <p class="text-muted">Edit your saved card details</p>
                    </div>
                    <form id="editCCForm" class="row g-3" onsubmit="return false">
                      <div class="col-12">
                        <label class="form-label w-100" for="modalEditCard">Card Number</label>
                        <div class="input-group input-group-merge">
                          <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2" />
                          <span class="input-group-text cursor-pointer p-1" id="modalEditCard2"><span class="card-type-edit"></span></span>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditName">Name</label>
                        <input type="text" id="modalEditName" class="form-control" placeholder="John Doe" value="John Doe" />
                      </div>
                      <div class="col-6 col-md-3">
                        <label class="form-label" for="modalEditExpiryDate">Exp. Date</label>
                        <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit" placeholder="MM/YY" value="08/28" />
                      </div>
                      <div class="col-6 col-md-3">
                        <label class="form-label" for="modalEditCvv">CVV Code</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit" maxlength="3" placeholder="654" value="XXX" />
                          <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="ti ti-help text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                        </div>
                      </div>
                      <div class="col-12">
                        <label class="switch">
                          <input type="checkbox" class="switch-input" />
                          <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                          </span>
                          <span class="switch-label">Set as primary card</span>
                        </label>
                      </div>
                      <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Update</button>
                        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="modal" aria-label="Close">
                          Remove
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Add New Credit Card Modal -->

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

            <!-- Add New Credit Card Modal -->
            <div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                  <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                      <h3 class="mb-2">Add New Card</h3>
                      <p class="text-muted">Add new card to complete payment</p>
                    </div>
                    <form id="addNewCCForm" class="row g-3" onsubmit="return false">
                      <div class="col-12">
                        <label class="form-label w-100" for="modalAddCard">Card Number</label>
                        <div class="input-group input-group-merge">
                          <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" />
                          <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="form-label" for="modalAddCardName">Name</label>
                        <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
                      </div>
                      <div class="col-6 col-md-3">
                        <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                        <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
                      </div>
                      <div class="col-6 col-md-3">
                        <label class="form-label" for="modalAddCardCvv">CVV Code</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                          <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="text-muted ti ti-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
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
                      <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                          Cancel
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Add New Credit Card Modal -->

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

            <!-- /Modal -->
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
  <script src="../../assets/js/modal-edit-cc.js"></script>
  <script src="../../assets/js/modal-add-new-cc.js"></script>
  <script src="../../assets/js/modal-add-new-address.js"></script>
  <script src="../../assets/js/app-user-view.js"></script>
  <script src="../../assets/js/app-user-view-billing.js"></script>
</body>

</html>