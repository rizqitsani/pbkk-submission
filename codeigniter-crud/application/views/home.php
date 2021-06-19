<div class="container py-5">
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="fw-bold">Daftar</h1>
    <a href="<?= base_url('home/create') ?>" class="btn btn-primary">Tambah</a>
  </div>
  <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kota</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user) { ?>
        <tr>
          <th scope="row">-</th>
          <td><?= $user->nama ?></td>
          <td><?= $user->kota ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>