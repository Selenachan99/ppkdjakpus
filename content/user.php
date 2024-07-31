<?php
$queryUser = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-header">Data User</div>
            <div class="card-body">
                <div align="right" class="mb-3">
                    <a href="?pg=tambah-user" class="btn btn-primary">Tambah</a>
                </div>
                <?php
                if (isset($_GET['tambah'])) :
                    ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> Data berhasil ditambahkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<table class=" table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
                        while ($rowUser = mysqli_fetch_assoc($queryUser)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?=  $rowUser['nama_lengkap'] ?></td>
            <td><?=  $rowUser['email'] ?></td>
            <td>

                <a href="?pg=tambah-user&edit=<?= $rowUser['id']?>" class="btn btn-sm btn-danger"
                    onclick="return confirm('Apakah Yakin Ingin menghapus Data ini?')">Delete</a>
                <a href="?pg=tambah-user&delete=<?= $rowUser['id']?>" class="btn btn-sm btn-primary">Edit</a>
            </td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
</div>

</div>

</div>
</div>