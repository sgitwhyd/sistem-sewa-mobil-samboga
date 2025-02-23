<?= $this->extend('user/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Detail Transaksi - Samboga Rent Car</title>
<?= $this->endSection(); ?>

<?= $this->section('link'); ?>
<!-- link library -->
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- validation message -->
<?php if (session()->has('errors')) : ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach (session('errors') as $error) : ?>
        <li><?= esc($error); ?></li>
      <?php endforeach ?>
    </ul>
  </div>
<?php endif ?>

<div class="col-12">
  <form id="formTransaction" class="mb-3" action="" method="POST" enctype="multipart/form-data">
    <div class="card mb-4">
      <div class="card-header row">
        <div class="col-md-12 mb-3">
          <a href="<?= base_url('user/transaksi'); ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
        </div>
        <h5>Detail Transaksi</h5>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label for="customer" class="form-label">Pelanggan</label>
          <input class="form-control" type="text" id="pelanggan" name="pelanggan" value="<?= $transaction['first_name'] . ' ' .  $transaction['last_name'] ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="armada" class="form-label">Armada</label>
          <input class="form-control" type="text" id="armada" name="armada" value="<?= $transaction['vehicle_name'] ?>" readonly>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_pickup" class="form-label">Tanggal pickup</label>
              <input class="form-control" type="date" id="date_pickup" name="date_pickup" readonly value="<?= $transaction['date_pickup'] ?>">
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_pickup" class="form-label">Time pickup</label>
              <input class="form-control" type="time" id="time_pickup" name="time_pickup" readonly value="<?= $transaction['time_pickup'] ?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_dropoff" class="form-label">Tanggal dropoff</label>
              <input class="form-control" type="date" id="date_dropoff" name="date_dropoff" readonly value="<?= $transaction['date_dropoff'] ?>">
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_dropoff" class="form-label">Time dropoff</label>
              <input class="form-control" type="time" id="time_dropoff" name="time_dropoff" readonly value="<?= $transaction['time_dropoff'] ?>">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="pickup_address" class="form-label">Pickup Address</label>
          <textarea class="form-control" name="pickup_address" id="pickup_address" rows="3" readonly><?= $transaction['pickup_address'] ?>
          </textarea>
        </div>
        <div class="mb-3">
          <label for="subtotal" class="form-label">Total Payment</label>
          <input type="text" class="form-control-plaintext" id="subtotal" name="total" readonly value="Rp. <?= number_format($transaction['total'], 0, 0) ?>">
        </div>
        <div class="mb-3">
          <label for="bank" class="form-label">Bank</label>
          <input class="form-control" type="text" id="bank" name="bank" value="<?= $transaction['bank_number'] . ' - ' . $transaction['bank_name'] . ' - ' . $transaction['bank_owner'] ?>" readonly>
        </div>
        <div class="d-flex flex-column mb-3">
          <label for="status" class="form-label">Status</label>
          <input type="text" class="form-control" disabled value="<?= $transaction['status']  ?>">
        </div>
        <?php if ($transaction['status'] == 'REJECTED') : ?>
          <div class="d-flex flex-column mb-3">
            <label for="status" class="form-label">Alasan Pembatalan</label>
            <textarea disabled class="form-control"><?= $transaction['note']  ?></textarea>
        </div>
        <?php endif; ?>
        <div class="d-flex flex-column mb-3">
          <label for="payment_image" class="form-label">Bukti Pembayaran</label>
          <img width="200px" height="auto" src="<?= base_url('transactions/') . $transaction['payment_image']; ?>" alt="payment-image">
        </div>
      </div>

    </div>
  </form>
</div>

<?= $this->endSection(); ?>