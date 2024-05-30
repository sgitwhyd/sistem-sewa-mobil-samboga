<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('title'); ?>
<title>User - ADMIN DASHBOARD</title>
<?= $this->endSection(); ?>

<?= $this->section('link'); ?>
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- modal view User -->
<div class="modal fade" id="viewUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Detail User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="detailUser">
        <!-- modal body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Close</button>
      </div>
    </div>
  </div>
</div>

<?php if (session()->has('success')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session('success'); ?>
  </div>
<?php endif ?>
<div class="mb-3">
  <a href="<?= base_url('admin/user/add-user'); ?>" class="btn btn-primary"><i class='bx bx-plus me-1'></i> Tambah</a>
</div>
<div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title">Daftar User</h5>
    <table id="tableUser" class="table">
      <thead>
        <tr>
          <th width="5%">No.</th>
          <th width="10%">Name</th>
          <th width="35%">Alamat</th>
          <th width="15%">No Telp</th>
          <th width="10%">Role</th>
          <th width="5%">Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0" id="tbList">
        <?php foreach ($user as $key => $value) : ?>
          <tr>
            <td style="text-align:center;"><?= $key + 1; ?>.</td>
            <td><?= $value['first_name'] . " " . $value['last_name']; ?></td>
            <td><?= $value['address']; ?></td>
            <td><?= $value['telp']; ?></td>
            <td><?= $value['role']; ?></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url('admin/user/edit-user/' . $value['id']); ?>"><i class="bx bx-edit-alt me-1"></i> Detail</a>
                  <form action="<?= base_url('admin/user/delete') ?>" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $value['id']; ?>">
                    <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');"><i class="bx bx-trash me-1"></i>Delete</button>
                  </form>
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
    $('#tableUser').DataTable();
  });
</script>

<?= $this->endSection(); ?>