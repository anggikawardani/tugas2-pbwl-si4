<!doctype html>
<html lang="en" class="ms-5 me-5">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo URL; ?>/layouts/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo URL; ?>/layouts/assets/img/logo1.png">

    <title>SI4-PLN</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-2" href="<?php echo URL; ?>/dashboard">SI4-PLN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="<?php echo URL; ?>/pelanggan">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo URL; ?>/golongan">Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo URL; ?>/user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo URL; ?>/user/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:550px">
    <a href="<?php echo URL; ?>/pelanggan/create" class="btn btn-success mb-2">Tambah Pelanggan</a>
        <table class="table table-striped">
            <tr class="table-primary text-center">
                <th>ID</td>
                <th>Nama Pelanggan</td>
                <th>Nomor Pelanggan</td>
                <th>NIK</td>
                <th>Golongan</td>
                <th>Alamat</td>
                <th>No. Hp</td>
                <th>Meteran Pelanggan</td>
                <th>Aktif</td>
                <th>User</td>
                <th colspan="2" >Aksi</td>
            </tr>
            <tr>
                <?php foreach($data as $row) { 
                    
                    $aktif = ($row['pel_aktif']=="Y")?"Aktif":"Tidak Aktif";
                    
                ?>
                <td class="text-center"><?= $row['pel_id']; ?></td>
                <td><?= $row['pel_nama']; ?></td>
                <td class="text-center"><?= $row['pel_no']; ?></td>
                <td class="text-center"><?= $row['pel_ktp']; ?></td>
                <td class="text-center"><?= $row['gol_nama']; ?></td>
                <td><?= $row['pel_alamat']; ?></td>
                <td class="text-center"><?= $row['pel_hp']; ?></td>
                <td class="text-center"><?= $row['pel_meteran']; ?></td>
                <td class="text-center"><?= $aktif; ?></td>
                <td class="text-center"><?= $row['user_nama']; ?></td>
                <td class="text-center" style="width:50px;"><a href="<?= URL; ?>/pelanggan/edit/<?= $row['pel_id']; ?>" class="badge text-bg-primary text-decoration-none">Edit</a></td>
                <td class="text-center" style="width:50px;"><a href="<?= URL; ?>/pelanggan/delete/<?= $row['pel_id']; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br>Created by Muhammad Hendrik Koto</p>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>