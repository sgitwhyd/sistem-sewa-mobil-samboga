<?= $this->extend('user/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Add Transaction - USER DASHBOARD</title>
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
  <form id="formTransaction" class="mb-3" action="<?= base_url('user/transaksi/add-transaksi') ?>" method="POST" enctype="multipart/form-data">
    <div class="card mb-4">
      <div class="card-header row">
        <div class="col-md-12 mb-3">
          <a href="<?= base_url('user/transaksi'); ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
        </div>
        <h5>Tambah Transaksi</h5>
      </div>
      <div class="card-body">
        <!-- pelanggan -->
        <div class="mb-3">
          <label for="customer" class="form-label">Pelanggan</label>
          <select class="form-select" id="customer" name="user_id" aria-label="select customer">
            <option value="<?= $user['id']; ?>"><?= $user['first_name'] . " " . $user['last_name']; ?></option>
          </select>
        </div>
        <!-- armada -->
        <div class="mb-3">
          <label for="armada" class="form-label">Armada</label>
          <select class="form-select" id="armada" name="vehicle_id" aria-label="select armada">
            <option value="<?= $vehicle['id']; ?>"><?= $vehicle['name']; ?></option>
          </select>
        </div>
        <!-- pickup -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_pickup" class="form-label">Tanggal pickup</label>
              <input class="form-control" type="date" id="date_pickup" name="date_pickup" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_pickup" class="form-label">Time pickup</label>
              <input class="form-control" type="time" id="time_pickup" name="time_pickup" required>
            </div>
          </div>
        </div>
        <!-- dropoff -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="date_dropoff" class="form-label">Tanggal dropoff</label>
              <input class="form-control" type="date" id="date_dropoff" name="date_dropoff" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="time_dropoff" class="form-label">Time dropoff</label>
              <input class="form-control" type="time" id="time_dropoff" name="time_dropoff" required>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="pickup_address" class="form-label">Pickup Address</label>
          <textarea class="form-control" name="pickup_address" id="pickup_address" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="subtotal" class="form-label">Total Payment</label>
          <div class="day">Rp. <?= number_format($vehicle['daily_price'], 0, 0) ?> * <span id="day">0</span> Hari</div>
          <input type="text" class="form-control-plaintext" id="subtotal" name="total" value="Rp. 0" readonly>
        </div>
        <div class="mb-3">
          <label for="bank" class="form-label">Bank</label>
          <select class="form-select" id="bank" name="bank_id" aria-label="select bank" required>
            <option value="" selected>
              Select Bank
            </option>
            <?php foreach ($banks as $bank) : ?>
              <option value="<?= $bank['id']; ?>"><?= $bank['bank_number'] . ' - ' . $bank['bank_name'] . ' - ' . $bank['bank_owner'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <!-- preview image here -->
        <div class="mb-3">
          <label for="payment_image" class="form-label">Bukti Pembayaran</label>
          <input class="form-control" type="file" id="payment_image" name="payment_image" required>
          <img src="" alt="" id="previewImage" class="d-none">
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
  const imagePreview = document.getElementById('previewImage')

  function resetForm() {
    document.getElementById('formTransaction').reset();
    imagePreview.classList.add('d-none');
    document.getElementById('previewImage').setAttribute('src', '');
  }


  document.getElementById('payment_image').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      imagePreview.classList.remove('d-none');
      const reader = new FileReader();
      reader.onload = function() {
        const previewImage = document.getElementById('previewImage');
        previewImage.setAttribute('src', reader.result);
        previewImage.classList.add('mt-3');
        previewImage.style.width = '200px';
        previewImage.style.height = 'auto';
      }
      reader.readAsDataURL(file);
    }
  });

  function durationCalculate(date_pickup, date_dropoff, time_pickup, time_dropoff) {
    // handle date
    const pickupObject = new Date(date_pickup);
    const dropoffObject = new Date(date_dropoff);
    const now = new Date();
    now.setHours(7);
    now.setMinutes(0);
    now.setSeconds(0); // optional: set seconds to 0
    now.setMilliseconds(0); // optional: set milliseconds to 0

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
    const currentTime = now.getTime();
    const pickupDate = pickupObject.getTime();
    const dropoffDate = dropoffObject.getTime();

    if (!(pickupDate >= currentTime)) {
      alert('Please select a valid date to pick up');
      $('#date_pickup').val("");
      return false;
    } else if (!(dropoffDate >= pickupDate || date_dropoff == "")) {
      alert('Please select a valid date to drop off');
      $('#date_dropoff').val("");
      return false;
    }



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
        let daily_price = armada['daily_price'];
        let date_pickup = $('#date_pickup').val();
        let date_dropoff = $('#date_dropoff').val();
        let time_pickup = $('#time_pickup').val();
        let time_dropoff = $('#time_dropoff').val();
        let duration = durationCalculate(date_pickup, date_dropoff, time_pickup, time_dropoff);
        if (duration['dateDuration'] > 0) {
          subtotal = daily_price * duration['dateDuration'];
        } else {
          subtotal = (daily_price / 24) * duration['timeDuration'];
          // subtotal = daily_price;
        }
        if (subtotal > 0) {
          $('#day').text(duration['dateDuration']);
          $('#subtotal').val(currency.format(subtotal));
        } else {
          $('#subtotal').val(currency.format(0));
        }
      }
    }, '#date_pickup, #date_dropoff, #time_pickup, #time_dropoff')
  })
</script>
<?= $this->endSection(); ?>