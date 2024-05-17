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

    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/css/demo.css" />

    <!-- vendores CSS -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>dashboard/assets/vendore/libs/apex-charts/apex-charts.css" />

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
   
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

          <!-- modal view armada -->
          <div class="modal fade" id="viewArmada" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Detail Armada</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="detailArmada">
                  <dl class="row mt-2">
                    <dt class="col-sm-3">Nomor Registrasi</dt>
                    <dd class="col-sm-9" id="no_register">-</dd>
                    <dt class="col-sm-3">Nama Pemilik</dt>
                    <dd class="col-sm-9" id="nama_pemilik">-</dd>
                    <dt class="col-sm-3">Alamat</dt>
                    <dd class="col-sm-9" id="alamat">-</dd>
                    <dt class="col-sm-3">Merk</dt>
                    <dd class="col-sm-9" id="merk">-</dd>
                    <dt class="col-sm-3">Type</dt>
                    <dd class="col-sm-9" id="type">-</dd>
                    <dt class="col-sm-3">Jenis</dt>
                    <dd class="col-sm-9" id="jenis">-</dd>
                    <dt class="col-sm-3">Warna KB</dt>
                    <dd class="col-sm-9" id="warna">-</dd>
                    <dt class="col-sm-3">Tahun</dt>
                    <dd class="col-sm-9" id="tahun">-</dd>
                    <dt class="col-sm-3">Kapasitas Mesin (CC)</dt>
                    <dd class="col-sm-9" id="cc">-</dd>
                    <dt class="col-sm-3">Nomor Rangka</dt>
                    <dd class="col-sm-9" id="no_rangka">-</dd>
                    <dt class="col-sm-3">Nomor Mesin</dt>
                    <dd class="col-sm-9" id="no_mesin">-</dd>
                    <dt class="col-sm-3">Bahan Bakar</dt>
                    <dd class="col-sm-9" id="bahan_bakar">-</dd>
                    <dt class="col-sm-3">Berlaku Sampai</dt>
                    <dd class="col-sm-9" id="masa_berlaku">-</dd>
                  </dl>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <?php if (session()->has('success')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= session('success');?>
                </div>
              <?php endif ?>
              <div class="mb-3">
                <a href="<?= base_url('admin/add-armada'); ?>" class="btn btn-primary"><i class='bx bx-plus me-1'></i> Tambah</a>
              </div>
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title">Daftar Armada</h5>
                  <table id="tableArmada" class="table">
                    <thead>
                      <tr>
                        <th width="5%">No.</th>
                        <th>Nomor Polisi</th>
                        <th>Type</th>
                        <th>Nomor Rangka</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="tbList">
                      <?php foreach ($armada as $key => $value) : ?>
                        <tr>
                          <td style="text-align:center;"><?= $key+1; ?>.</td>
                          <td><?= $value['no_register']; ?></td>
                          <td><?= $value['type']; ?></td>
                          <td><?= $value['no_rangka']; ?></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <button type="button" class="dropdown-item view-detail" data-id="<?= $value['id']; ?>"><i class='bx bxs-file-find me-1' ></i> View</button>
                                <a class="dropdown-item" href="<?= base_url('admin/edit-armada/'.$value['id']); ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <form action="<?= base_url('armada/delete') ?>" method="POST" style="display:inline;">
                                  <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                  <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');"><i class="bx bx-trash me-1"></i>Delete</button>
                                </form>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
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
    <!-- build:js assets/vendore/js/core.js -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/popper/popper.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/js/bootstrap.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/js/menu.js"></script>

    <!-- datatable -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

    <!-- vendores JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/vendore/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('/'); ?>dashboard/assets/js/dashboards-analytics.js"></script>

    <script>
      $(document).ready(function() {
        $('#tableArmada').DataTable();

        $('#tableArmada tbody').on('click', '.view-detail', function () {
            var itemId = $(this).data('id');
            $.ajax({
                url: '<?= base_url('armada/detail/'); ?>' + itemId,
                type: 'GET',
                success: function(data) {
                  let y = data['masa_berlaku'].split('-')[0];
                  let m = data['masa_berlaku'].split('-')[1];
                  let d = data['masa_berlaku'].split('-')[2];

                    $('#detailArmada').html('<dl class="row mt-2">\
                    <dt class="col-sm-3">Nomor Registrasi</dt>\
                    <dd class="col-sm-9">'+ data['no_register'] +'</dd>\
                    <dt class="col-sm-3">Nama Pemilik</dt>\
                    <dd class="col-sm-9">'+ data['nama_pemilik'] +'</dd>\
                    <dt class="col-sm-3">Alamat</dt>\
                    <dd class="col-sm-9">'+ data['alamat'] +'</dd>\
                    <dt class="col-sm-3">Merk</dt>\
                    <dd class="col-sm-9">'+ data['merk'] +'</dd>\
                    <dt class="col-sm-3">Type</dt>\
                    <dd class="col-sm-9">'+ data['type'] +'</dd>\
                    <dt class="col-sm-3">Jenis</dt>\
                    <dd class="col-sm-9">'+ data['jenis'] +'</dd>\
                    <dt class="col-sm-3">Warna KB</dt>\
                    <dd class="col-sm-9">'+ data['warna_kb'] +'</dd>\
                    <dt class="col-sm-3">Tahun</dt>\
                    <dd class="col-sm-9">'+ data['tahun'] +'</dd>\
                    <dt class="col-sm-3">Kapasitas Mesin (CC)</dt>\
                    <dd class="col-sm-9">'+ data['cc'] +'</dd>\
                    <dt class="col-sm-3">Nomor Rangka</dt>\
                    <dd class="col-sm-9">'+ data['no_rangka'] +'</dd>\
                    <dt class="col-sm-3">Nomor Mesin</dt>\
                    <dd class="col-sm-9">'+ data['no_mesin'] +'</dd>\
                    <dt class="col-sm-3">Bahan Bakar</dt>\
                    <dd class="col-sm-9">'+ data['bahan_bakar'] +'</dd>\
                    <dt class="col-sm-3">Berlaku Sampai</dt>\
                    <dd class="col-sm-9">'+d+ '-' +m+ '-' +y+'</dd>\
                  </dl>');
                    $('#viewArmada').modal('show');
                }
            });
        });
      });
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
