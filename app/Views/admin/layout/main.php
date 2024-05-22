<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url('/'); ?>dashboard/assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

      <?= $this->renderSection('title'); ?>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('/'); ?>dashboard/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/css/demo.css" />

    <!-- vendores CSS -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/libs/apex-charts/apex-charts.css" />

    <?= $this->renderSection('link'); ?>

    <!-- Helpers -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/config.js"></script>
  </head>

  <body>
    
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?= $this->include('admin/layout/menu'); ?>

        <div class="layout-page">

          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User profile -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url('/'); ?>dashboard/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url('/'); ?>dashboard/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block"><?= session('user')['first_name']. ' ' .session('user')['first_name']; ?></span>
                            <small class="text-muted"><?= session('user')['role']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url('admin/profile'); ?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          
           <!-- modal view armada -->
           <div class="modal fade" id="viewArmada" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Detail Armada</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="detailArmada">
                   <!-- modal body -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
            
            <!-- content -->
            <?= $this->renderSection('content'); ?>

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer>
            <!-- / Footer --> 

          </div>
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

     

    <!-- Core JS -->
    <!-- build:js assets/vendore/js/core.js -->

    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/popper/popper.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/js/bootstrap.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/js/menu.js"></script>

    <!-- endbuild -->

    <!-- vendores JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/dashboards-analytics.js"></script>

    <?= $this->renderSection('script'); ?>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
