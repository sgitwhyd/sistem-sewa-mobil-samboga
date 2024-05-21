<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Add Armada - ADMIN DASHBOARD</title>
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
      <form id="formArmada" class="mb-3" action="" method="POST" enctype="multipart/form-data">
        <div class="card mb-4">
          <div class="card-header row">
            <div class="col-md-12 mb-3">
              <a href="<?= base_url('admin/armada');?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h5>Tambah Armada</h5>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Nama Kendaraan</label>
                  <input type="text" class="form-control" name="name" placeholder="Avanza Veloz" id="name" value="<?= old('name'); ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="daily_price" class="form-label">Daily Price</label>
                  <input class="form-control" type="number" name="daily_price" placeholder="350000" id="daily_price" value="<?= old('daily_price'); ?>" required>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Deskripsi</label>
              <textarea class="form-control" name="description" id="description" rows="3" placeholder="warna putih, tranmisi manual, tahun 2015.."><?= old('description'); ?></textarea>
            </div>
            <!-- preview image here -->
            <div class="mb-3">
              <label for="image" class="form-label">Gambar Kendaraan</label>
              <input class="form-control" type="file" id="image" name="image" >
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
      document.getElementById('formArmada').reset();
  }
</script>
<?= $this->endSection(); ?>