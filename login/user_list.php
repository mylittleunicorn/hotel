<?php
  include "../koneksi.php";
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar User</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="index.php?page=user-input">
        <button type="button" class="btn btn-sm btn-outline-secondary">+ User</button>
      </a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Role</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     $query = mysqli_query($kon, 'SELECT * FROM user');
      while ($data = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['password'] ?></td>
        <td><?php echo $data['role'] ?></td>
        <td>
          <a href="index.php?page=user-edit&id=<?php echo $data['id']; ?>">edit</a> | 
          <a href="user_delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus User ini ?')">Hapus</a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
