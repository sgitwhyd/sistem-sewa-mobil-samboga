<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Add Transaction - ADMIN DASHBOARD</title>
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
  <form id="formTransaction" class="mb-3" action="<?= base_url('admin/transaksi/add-transaksi') ?>" method="POST" enctype="multipart/form-data">
    <div class="card mb-4">
      <div class="card-header row">
        <div class="col-md-12 mb-3">
          <a href="<?= base_url('admin/transaksi'); ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
        </div>
        <h5>Tambah Transaksi</h5>
      </div>
      <div class="card-body">
        <!-- pelanggan -->
        <div class="mb-3">
          <label for="customer" class="form-label">Pelanggan</label>
          <select class="form-select" id="customer" name="user_id" aria-label="select customer">
            <option value="" selected>pilih pelanggan</option>
            <?php for ($i = 0; $i < count($user); $i++) : ?>
              <option value="<?= $user[$i]['id']; ?>"><?= $user[$i]['first_name'] . " " . $user[$i]['last_name']; ?></option>
            <?php endfor; ?>
          </select>
        </div>
        <!-- armada -->
        <div class="mb-3">
          <label for="armada" class="form-label">Armada</label>
          <select class="form-select" id="armada" name="vehicle_id" aria-label="select armada">
            <option value="" selected>pilih armada</option>
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
              <input class="form-control" type="date" id="date_pickup" name="date_pickup">
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_pickup" class="form-label">Time pickup</label>
              <input class="form-control" type="time" id="time_pickup" name="time_pickup">
            </div>
          </div>
        </div>
        <!-- dropoff -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_dropoff" class="form-label">Tanggal dropoff</label>
              <input class="form-control" type="date" id="date_dropoff" name="date_dropoff">
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_dropoff" class="form-label">Time dropoff</label>
              <input class="form-control" type="time" id="time_dropoff" name="time_dropoff">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="pickup_address" class="form-label">Pickup Address</label>
          <textarea class="form-control" name="pickup_address" id="pickup_address" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="subtotal" class="form-label">Total Payment</label>
          <input type="text" class="form-control-plaintext" id="subtotal" name="total" value="Rp. 0" readonly>
        </div>
        <!-- preview image here -->
        <div class="mb-3">
          <label for="payment_image" class="form-label">Bukti Pembayaran</label>
          <input class="form-control" type="file" id="payment_image" name="payment_image" required>
        </div>
        <hr>
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan</button>
          <button type="button" onClick="resetForm()" class="btn btn-secondary"><i class='bx bx-trash'></i> Reset</button>
        </div>
      </div>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  function resetForm() {
    document.getElementById('formTransaction').reset();
  }

  function durationCalculate(date_pickup, date_dropoff, time_pickup, time_dropoff) {
    // handle date
    const pickupObject = new Date(date_pickup);
    const dropoffObject = new Date(date_dropoff);

    // handle time
    const [pickupHours, pickupMinutes] = time_pickup.split(":").map(Number);
    const [dropoffHours, dropoffMinutes] = time_dropoff.split(":").map(Number);

    // Create a new Date object for today
    const pickTimeObject = new Date();
    pickTimeObject.setHours(pickupHours);
    pickTimeObject.setMinutes(pickupMinutes);
    pickTimeObject.setSeconds(0); // optional: set seconds to 0
    pickTimeObject.setMilliseconds(0); // optional: set milliseconds to 0
    const dropTimeObject = new Date();
    dropTimeObject.setHours(dropoffHours);
    dropTimeObject.setMinutes(dropoffMinutes);
    dropTimeObject.setSeconds(0); // optional: set seconds to 0
    dropTimeObject.setMilliseconds(0); // optional: set milliseconds to 0
    // Get the time in milliseconds since January 1, 1970, 00:00:00 UTC
    const dateDuration = dropoffObject.getTime() - pickupObject.getTime();
    if (dateDuration == 0) {
      const timeDuration = dropTimeObject.getTime() - pickTimeObject.getTime();
      return result = {
        'timeDuration': Math.ceil(timeDuration / 3600000),
        'dateDuration': dateDuration / 86400000,
      }
    } else {
      const timeDuration = dropTimeObject.getTime() - pickTimeObject.getTime();
      return result = {
        'timeDuration': Math.ceil(timeDuration / 3600000),
        'dateDuration': dateDuration / 86400000,
      }
    }
    // Calculate the difference
    // 1 day = 86400000
    // 1 hour = 3600000
  }

  $(document).ready(function() {
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