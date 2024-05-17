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

    <title>Armada - ADMIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('/'); ?>dashboard/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
   
    <!-- Helpers -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <!-- logo here -->
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">SMB rentcar</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item ">
              <a href="<?= base_url('/'); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
              </a>
            </li>
  
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Master</span>
            </li>
            <li class="menu-item active">
              <a href="<?= base_url('admin/armada'); ?>" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-car-garage'></i>
                <div data-i18n="Armada">Armada</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Transaksi</span>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-taxi"></i>
                <div data-i18n="Penyewaan">Penyewaan</div>
              </a>
            </li>
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Management</span>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Penyewaan">Users</div>
              </a>
            </li>
          </ul>
        </aside>

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
                      <a class="dropdown-item" href="#">
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
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
               
              <div class="col-12">
                <form id="formArmada" class="mb-3" action="" method="POST">
                  <input type="hidden" name="id" value="<?= $armada['id']; ?>">
                  <div class="card mb-4">
                    <h5 class="card-header">Edit Armada</h5>
                    <div class="card-body">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="no_register" class="form-label">Nomor Polisi</label>
                            <input type="text" class="form-control" name="no_register" placeholder="B 1234 XX" id="no_register" value="<?= $armada['no_register']; ?>" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                            <input class="form-control" type="text" name="nama_pemilik" placeholder="atas nama kendaraan.." id="nama_pemilik" value="<?= $armada['nama_pemilik']; ?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="alamat kendaraan.."><?= $armada['alamat']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="merk" class="form-label">Merk</label>
                            <input class="form-control" type="text" name="merk" placeholder="TOYOTA" id="merk" value="<?= $armada['merk']; ?>" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="warna_kb" class="form-label">Warna Kendaraan</label>
                            <input class="form-control" warna_kb="text" name="warna_kb" placeholder="HITAM" id="warna_kb" value="<?= $armada['warna_kb']; ?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input class="form-control" type="text" name="type" placeholder="AVANZA" id="type" value="<?= $armada['type']; ?>" required>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4 mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <input class="form-control" type="text" name="jenis" placeholder="MINIBUS" id="jenis" value="<?= $armada['jenis']; ?>" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input class="form-control" type="number" name="tahun" placeholder="2021" id="tahun" value="<?= $armada['tahun']; ?>" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="cc" class="form-label">Kapasitas Mesin (CC)</label>
                            <input class="form-control" type="number" name="cc" placeholder="1500" id="cc" value="<?= $armada['cc']; ?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="no_rangka" class="form-label">Nomor Rangka</label>
                        <input class="form-control" type="text" name="no_rangka" placeholder="4S5BMHB68B3286051" id="no_rangka" value="<?= $armada['no_rangka']; ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="no_mesin" class="form-label">Nomor Mesin</label>
                        <input class="form-control" type="text" name="no_mesin" placeholder="NS150E8002932" id="no_mesin" value="<?= $armada['no_mesin']; ?>" required>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="masa_berlaku" class="form-label">Bahan Bakar</label>
                            <input class="form-control" type="text" name="bahan_bakar" placeholder="BENSIN" id="bahan_bakar" value="<?= $armada['bahan_bakar']; ?>" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="masa_berlaku" class="form-label">Berlaku Sampai</label>
                            <input class="form-control" type="date" name="masa_berlaku" id="masa_berlaku" value="<?= $armada['masa_berlaku']; ?>" required>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan</button>
                        <a href="javascript:;" class="btn btn-secondary"><i class='bx bx-trash'></i> Reset</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              
            </div>
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
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/js/menu.js"></script>

    <!-- datatable -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

    <!-- Vendors JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
