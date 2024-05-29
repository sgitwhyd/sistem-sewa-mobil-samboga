<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Konfirmasi Transaksi - ADMIN DASHBOARD</title>
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
    <input type="hidden" name="id" value="<?= $transaction['id']; ?>">
    <div class="card mb-4">
      <div class="card-header row">
        <div class="col-md-12 mb-3">
          <a href="<?= base_url('admin/transaksi'); ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
        </div>
        <h5>Konfirmasi Transaksi</h5>
      </div>
      <div class="card-body">
        <!-- pelanggan -->
        <div class="mb-3">
          <label for="customer" class="form-label">Pelanggan</label>
          <select class="form-select" id="customer" name="user_id" aria-label="select customer" disabled>
            <option selected="">pilih armada</option>
            <?php for ($i = 0; $i < count($user); $i++) : ?>
              <option value="<?= $user[$i]['id']; ?>"><?= $user[$i]['first_name'] . " " . $user[$i]['last_name']; ?></option>
            <?php endfor; ?>
          </select>
        </div>
        <!-- armada -->
        <div class="mb-3">
          <label for="armada" class="form-label">Armada</label>
          <select class="form-select" id="armada" name="vehicle_id" aria-label="select armada" disabled>
            <option selected="">pilih armada</option>
            <?php for ($i = 0; $i < count($vehicle); $i++) : ?>
              <option value="<?= $vehicle[$i]['id']; ?>"><?= $vehicle[$i]['name']; ?></option>
            <?php endfor; ?>
          </select>
        </div>
        <!-- pickup -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_pickup" class="form-label">Tanggal pickup</label>
              <input class="form-control" type="date" id="date_pickup" name="date_pickup" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_pickup" class="form-label">Time pickup</label>
              <input class="form-control" type="time" id="time_pickup" name="time_pickup" readonly>
            </div>
          </div>
        </div>
        <!-- dropoff -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_dropoff" class="form-label">Tanggal dropoff</label>
              <input class="form-control" type="date" id="date_dropoff" name="date_dropoff" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_dropoff" class="form-label">Time dropoff</label>
              <input class="form-control" type="time" id="time_dropoff" name="time_dropoff" readonly>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="pickup_address" class="form-label">Pickup Address</label>
          <textarea class="form-control" name="pickup_address" id="pickup_address" rows="3" readonly></textarea>
        </div>
        <div class="mb-3">
          <label for="subtotal" class="form-label">Total Payment</label>
          <input type="text" class="form-control-plaintext" id="subtotal" name="total" value="Rp. 0" readonly>
        </div>
        <div class="mb-3">
          <label for="bank" class="form-label">Bank</label>
         <input class="form-control" type="text" id="bank" name="bank" readonly>
        </div>
        <!-- preview image here -->
        <div class="d-flex flex-column mb-3">
          <label for="payment_image" class="form-label">Bukti Pembayaran</label>
          <img width="200px" height="auto" src="<?= base_url('transactions/') . $transaction['payment_image']; ?>" alt="payment-image">
        </div>
        <div class="mb-3">
          <label for="confirmation" class="form-label">Konfirmasi</label>
          <select class="form-select" id="confirmation" name="status" aria-label="status transaksi">
            <option value="PENDING">PENDING</option>
            <option value="APPROVED">APPROVED</option>
            <option value="REJECTED">REJECTED</option>
            <option value="FINISHED">FINISHED</option>
          </select>
        </div>
        <hr>
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan</button>
        </div>
      </div>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  $(document).ready(function() {

    // editable value
    $('#customer').val('<?= $transaction['user_id']; ?>').trigger('change');
    $('#armada').val('<?= $transaction['vehicle_id']; ?>').trigger('change');
    $('#date_pickup').val('<?= $transaction['date_pickup']; ?>').trigger('change');
    $('#time_pickup').val('<?= $transaction['time_pickup']; ?>').trigger('change');
    $('#date_dropoff').val('<?= $transaction['date_dropoff']; ?>').trigger('change');
    $('#time_dropoff').val('<?= $transaction['time_dropoff']; ?>').trigger('change');
    $('#confirmation').val('<?= $transaction['status']; ?>').trigger('change');
    $('#pickup_address').text('<?= $transaction['pickup_address']; ?>');
    $('#bank').val('<?= $banks['bank_name'] . '-' . $banks['bank_owner'] ?>');
    $('#subtotal').val('Rp. <?= number_format($transaction['total']); ?>');


    $(document).on({
      change: function() {
        let currency = new Intl.NumberFormat('id-ID', {
          style: 'currency',
          currency: 'IDR',
          minimumFractionDigits: 0,
          maximumFractionDigits: 0
        });
        let vehicle_id = $('#armada').val();
        if (vehicle_id == "") {
          alert('Please enter a vehicle');
          $(this).val("");
          $('#armada').focus();
          return;
        }
        const armada = <?= json_encode($vehicle); ?>;
        let subtotal = 0;
        // get price 
        let daily_price = armada.find(item => item.id == vehicle_id).daily_price * 1;
        let date_pickup = $('#date_pickup').val();
        let date_dropoff = $('#date_dropoff').val();
        let time_pickup = $('#time_pickup').val();
        let time_dropoff = $('#time_dropoff').val();
        let duration = durationCalculate(date_pickup, date_dropoff, time_pickup, time_dropoff);
        console.log(duration);
        if (duration['dateDuration'] > 0) {
          subtotal = daily_price * duration['dateDuration'];
        } else {
          subtotal = (daily_price / 24) * duration['timeDuration'];
        }
        if (subtotal > 0) {
          $('#subtotal').val(currency.format(subtotal));
        } else {
          $('#subtotal').val(currency.format(0));
        }
      }
    }, '#date_pickup, #date_dropoff, #time_pickup, #time_dropoff, #armada')
  })
</script>
<?= $this->endSection(); ?>