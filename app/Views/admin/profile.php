<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>Profile - ADMIN DASHBOARD</title>
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
  <?php if (session()->has('success')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session('success'); ?>
  </div>
<?php endif ?>
    
    <div class="col-12">
      <form id="formUser" class="mb-3" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <div class="card mb-4">
          <h5 class="card-header">Profile Detail</h5>
          <div class="card-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="first_name" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Alverta" id="first_name" value="<?= $user['first_name']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="last_name" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Gottlieb" id="last_name" value="<?= $user['last_name']; ?>" required>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Alamat</label>
              <textarea class="form-control" name="address" id="address" rows="3" placeholder="alamat user.."><?= $user['address']; ?></textarea>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Alverta@example.com" id="email" value="<?= $user['email']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="telp" class="form-label">No Telp</label>
                  <input type="text" class="form-control" name="telp" placeholder="123456745" id="telp" value="<?= $user['telp']; ?>" required>
                </div>
              </div>
            </div>
            <!-- preview image here -->
            <!-- === -->
            <div class="mb-3">
              <label for="ktp_image" class="form-label">Gambar Identitas</label>
              <input class="form-control" type="file" id="ktp_image" name="ktp_image" >
              <img src="<?= base_url('users/') . $user['ktp_image']; ?>" alt="image-preview" id="previewImage" class="mt-3">
            </div>
            <hr>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="role" class="form-label">User Role</label>
                  <select class="form-select" id="role" name="role" aria-label="Role">
                    <option selected="">select user role </option>
                    <option value="ADMIN">ADMIN</option>
                    <option value="USER">USER</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" class="form-control" id="password" name="password" placeholder="············" aria-describedby="password">
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                </div>
              </div>
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
      document.getElementById('formUser').reset();
      $('input').val('');
      $('textarea').text('');
  }

  const imagePreview = document.getElementById('previewImage');
  const originalImage = imagePreview.getAttribute('src');
  imagePreview.style.width = '200px';
  imagePreview.style.height = 'auto';

  const image = document.getElementById('ktp_image');
  image.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function() {
        imagePreview.src = reader.result;
      }
      reader.readAsDataURL(file);
    }
  });

  $(document).ready(function () {
    $('#role').val('<?= $user['role']; ?>').trigger('change')
  })
</script>
<?= $this->endSection(); ?>