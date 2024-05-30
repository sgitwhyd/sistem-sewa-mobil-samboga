<?= $this->extend('user/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Transaction - USER DASHBOARD</title>
<?= $this->endSection(); ?>

<?= $this->section('link'); ?>
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<?php if (session()->has('success')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session('success'); ?>
  </div>
<?php endif ?>
<div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title">Daftar Transaction</h5>
    <table id="tableTransaction" class="table">
      <thead>
        <tr>
          <th width="5%">No.</th>
          <th width="20%">Nama</th>
          <th width="20%">Armada</th>
          <th width="15%">Subtotal</th>
          <th width="10%">Status</th>
          <th width="25%">Payment</th>
          <th width="5%">Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0" id="tbList">
        <?php foreach ($transaction as $key => $value) : ?>
          <tr>
            <td style="text-align:center;"><?= $key + 1; ?>.</td>
            <td><?= $value['first_name'] . " " . $value['last_name']; ?></td>
            <td><?= $value['vehicle_name']; ?></td>
            <td>Rp. <?= number_format($value['total']); ?></td>
            <td>
              <?php switch ($value['status']) {
                case 'FINISHED':
                  echo "<span class='badge bg-label-primary'>". $value['status'] . "</span>";
                  break;
                case 'APPROVED':
                  echo "<span class='badge bg-label-success'>". $value['status'] . "</span>";
                  break;
                case 'REJECTED':
                  echo "<span class='badge bg-label-danger'>". $value['status'] . "</span>";
                  break;
                default:
                  echo "<span class='badge bg-label-warning'>". $value['status'] . "</span>";
                  break;
              } ?>
            </td>
            <td><img width="100px" src="<?= base_url('transactions/') . $value['payment_image']; ?>" alt="payment-image"></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a href="<?= base_url('/user/transaksi/detail/') . $value['id'] ?>" class="dropdown-item view-detail"><i class='bx bxs-file-find me-1'></i> Detail</a>
                </div>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<!-- datatable -->
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
  $(document).ready(function() {
    $('#tableTransaction').DataTable();

    $('#viewTransaction').on('hidden.bs.modal', function () {
      $('#detailTransaction').html('');
    });

    $('#tableTransaction tbody').on('click', '.view-detail', function() {
      var itemId = $(this).data('id');
      let currency = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
      });
    });
  });
</script>

<?= $this->endSection(); ?>