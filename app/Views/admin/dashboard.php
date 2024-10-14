<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>ADMIN - Dashboard</title>
<?= $this->endSection(); ?>    

<?= $this->section('content'); ?>
  <div class="row">
    <div class="col-lg-3 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="<?= base_url('/'); ?>dashboard/assets/img/icons/unicons/chart-success.png"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Armada</span>
          <h3 class="card-title mb-2"><?= $total_vehicles; ?> Armada</h3>
          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="<?= base_url('/'); ?>dashboard/assets/img/icons/unicons/wallet-info.png"
                alt="Credit Card"
                class="rounded" />
            </div>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="cardOpt6"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Users</span>
          <h3 class="card-title text-nowrap mb-1"><?= $total_users; ?> Pengguna</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="<?= base_url('/'); ?>dashboard/assets/img/icons/unicons/chart-success.png"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Transaksi</span>
          <h3 class="card-title mb-2"><?= $total_transactions; ?> Transaksi</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="<?= base_url('/'); ?>dashboard/assets/img/icons/unicons/wallet-info.png"
                alt="Credit Card"
                class="rounded" />
            </div>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="cardOpt6"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
              </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Bank Account</span>
          <h3 class="card-title text-nowrap mb-1"><?= $total_banks; ?> Account</h3>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>