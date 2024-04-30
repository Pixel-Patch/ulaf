<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>eCommerce Category List - Apps | Vuexy - Bootstrap Admin Template</title>

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
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/typography.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/katex.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../assets/vendor/css/pages/app-ecommerce.css" />

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
            <h4 class="py-3 mb-2"><span class="text-muted fw-light">Settings /</span> Category List</h4>

            <div class="app-ecommerce-category">
              <!-- Category List Table -->
              <div class="card">
                <div class="card-datatable table-responsive">
                  <table class="datatables-category-list table border-top">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Categories</th> 
                        <th class="text-lg-center">Actions</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!-- Offcanvas to add new category -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddCategoryList" aria-labelledby="offcanvasAddCategoryListLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4">
                  <h5 id="offcanvasAddCategoryListLabel" class="offcanvas-title">Add Category</h5>
                  <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                  <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                    <!-- Title -->
                    <div class="mb-3">
                      <label class="form-label" for="ecommerce-category-title">Title</label>
                      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title" name="categoryTitle" aria-label="category title" />
                    </div>
                    <!-- Slug -->
                    <div class="mb-3">
                      <label class="form-label" for="ecommerce-category-slug">Slug</label>
                      <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="slug" />
                    </div>
                    <!-- Image -->
                    <div class="mb-3">
                      <label class="form-label" for="ecommerce-category-image">Attachment</label>
                      <input class="form-control" type="file" id="ecommerce-category-image" />
                    </div>
                    <!-- Parent category -->
                    <div class="mb-3 ecommerce-select2-dropdown">
                      <label class="form-label" for="ecommerce-category-parent-category">Parent category</label>
                      <select id="ecommerce-category-parent-category" class="select2 form-select" data-placeholder="Select parent category">
                        <option value="">Select parent Category</option>
                        <option value="Household">Household</option>
                        <option value="Management">Management</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Office">Office</option>
                        <option value="Automotive">Automotive</option>
                      </select>
                    </div>
                    <!-- Description -->
                    <div class="mb-3">
                      <label class="form-label">Description</label>
                      <div class="form-control p-0 py-1">
                        <div class="comment-editor border-0" id="ecommerce-category-description"></div>
                        <div class="comment-toolbar border-0">
                          <div class="d-flex justify-content-end">
                            <span class="ql-formats me-0">
                              <button class="ql-bold"></button>
                              <button class="ql-italic"></button>
                              <button class="ql-underline"></button>
                              <button class="ql-list" value="ordered"></button>
                              <button class="ql-list" value="bullet"></button>
                              <button class="ql-link"></button>
                              <button class="ql-image"></button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Status -->
                    <div class="mb-4 ecommerce-select2-dropdown">
                      <label class="form-label">Select category status</label>
                      <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select category status">
                        <option value="">Select category status</option>
                        <option value="Scheduled">Scheduled</option>
                        <option value="Publish">Publish</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>
                    <!-- Submit and reset -->
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                      <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Offcanvas to edit category -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditCategoryList" aria-labelledby="offcanvasEditCategoryListLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4">
                  <h5 id="offcanvasEditCategoryListLabel" class="offcanvas-title">Edit Category</h5>
                  <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                  <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                    <!-- Title -->
                    <div class="mb-3">
                      <label class="form-label" for="ecommerce-category-title">Title</label>
                      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title" name="categoryTitle" aria-label="category title" />
                    </div>
                    <!-- Slug -->
                    <div class="mb-3">
                      <label class="form-label" for="ecommerce-category-slug">Slug</label>
                      <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="slug" />
                    </div>
                    <!-- Image -->
                    <div class="mb-3">
                      <label class="form-label" for="ecommerce-category-image">Attachment</label>
                      <input class="form-control" type="file" id="ecommerce-category-image" />
                    </div>
                    <!-- Parent category -->
                    <div class="mb-3 ecommerce-select2-dropdown">
                      <label class="form-label" for="ecommerce-category-parent-category">Parent category</label>
                      <select id="ecommerce-category-parent-category" class="select2 form-select" data-placeholder="Select parent category">
                        <option value="">Select parent Category</option>
                        <option value="Household">Household</option>
                        <option value="Management">Management</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Office">Office</option>
                        <option value="Automotive">Automotive</option>
                      </select>
                    </div>
                    <!-- Description -->
                    <div class="mb-3">
                      <label class="form-label">Description</label>
                      <div class="form-control p-0 py-1">
                        <div class="comment-editor border-0" id="ecommerce-category-description"></div>
                        <div class="comment-toolbar border-0">
                          <div class="d-flex justify-content-end">
                            <span class="ql-formats me-0">
                              <button class="ql-bold"></button>
                              <button class="ql-italic"></button>
                              <button class="ql-underline"></button>
                              <button class="ql-list" value="ordered"></button>
                              <button class="ql-list" value="bullet"></button>
                              <button class="ql-link"></button>
                              <button class="ql-image"></button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Status -->
                    <div class="mb-4 ecommerce-select2-dropdown">
                      <label class="form-label">Select category status</label>
                      <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select category status">
                        <option value="">Select category status</option>
                        <option value="Scheduled">Scheduled</option>
                        <option value="Publish">Publish</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>
                    <!-- Submit and reset -->
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                      <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/quill/katex.js"></script>
  <script src="../../assets/vendor/libs/quill/quill.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/app-ecommerce-category-list.js"></script>
</body>

</html>