<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Edit Bank - ADMIN DASHBOARD</title>
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
  <form id="formBank" class="mb-3" action="" method="POST">
    <input type="hidden" name="id" value="<?= $bank['id']; ?>">
    <div class="card mb-4">
      <div class="card-header row">
        <div class="col-md-12 mb-3">
          <a href="<?= base_url('admin/bank'); ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i></a>
        </div>
        <h5>Edit Bank</h5>
      </div>
      <div class="card-body">
        <div class="form-group">
          <div class="col-12 mb-3">
            <label for="bank_name" class="form-label">Nama Bank</label>
            <input type="text" class="form-control" name="bank_name" placeholder="Bank Central Asia / BCA" id="bank_name" value="<?= $bank['bank_name']; ?>" required>
          </div>
          <div class="col-12 mb-3">
            <label for="bank_number" class="form-label">No Rekening</label>
            <input class="form-control" type="number" name="bank_number" placeholder="12345678912" id="bank_number" value="<?= $bank['bank_number']; ?>" required>
          </div>
          <div class="col-12 mb-3">
            <label for="bank_owner" class="form-label">a/n Rekening</label>
            <input type="text" class="form-control" name="bank_owner" placeholder="Mr. Vince Breitenberg" id="bank_owner" value="<?= $bank['bank_owner']; ?>" required>
          </div>
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

<?= $this->endSection(); ?>