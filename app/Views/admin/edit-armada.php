<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Edit Armada - ADMIN DASHBOARD</title>
<?= $this->endSection(); ?>

<?= $this->section('link'); ?>
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
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
  <form id="formArmada" class="mb-3" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $armada['id']; ?>">
    <div class="card mb-4">
      <div class="card-header row">
        <div class="col-md-12 mb-3">
          <a href="<?= base_url('admin/armada'); ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
        </div>
        <h5>Edit Armada</h5>
      </div>
      <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Nama Kendaraan</label>
              <input type="text" class="form-control" name="name" placeholder="Avanza Veloz" id="name" value="<?= $armada['name']; ?>" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="daily_price" class="form-label">Daily Price</label>
              <input class="form-control" type="number" name="daily_price" placeholder="350000" id="daily_price" value="<?= $armada['daily_price']; ?>" required>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="warna putih, tranmisi manual, tahun 2015.."><?= $armada['description']; ?></textarea>
        </div>
        <!-- preview image here -->
        <div class="mb-3">
          <label for="image" class="form-label">Gambar Kendaraan</label>
          <input class="form-control" type="file" id="image" name="image">
          <img width="200px" src="<?= base_url('images/').$armada['image']; ?>" alt="image-preview" id="previewImage" class="mt-3">
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
  const imagePreview = document.getElementById('previewImage');
  const originalImage = imagePreview.getAttribute('src');

  function resetForm() {
    document.getElementById('formArmada').reset();
    imagePreview.src = originalImage;
  }


  const image = document.getElementById('image');
  image.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function() {
        imagePreview.src = reader.result;
        imagePreview.style.width = '200px';
        imagePreview.style.height = 'auto';
      }
      reader.readAsDataURL(file);
    }
  });
</script>
<?= $this->endSection(); ?>