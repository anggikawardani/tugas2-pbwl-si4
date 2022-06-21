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
    <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:600px">
        <h3 class="mb-5">Tambah Pelanggan</h3>
        <form action="<?php echo URL; ?>/pelanggan/store" method="post" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" placeholder="Nama Pelanggan" name="pel_nama" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">NIK KTP</label>
                <input type="text" class="form-control" placeholder="NIK KTP" name="pel_ktp" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="pel_alamat" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Handphone</label>
                <input type="text" class="form-control" placeholder="Handphone" name="pel_hp" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Nomor Pelanggan</label>
                <input type="text" class="form-control" placeholder="Nomor Pelanggan" name="pel_no" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Golongan</label>
                <select class="form-select" name="pel_gol">
                    <option selected>Pilih...</option>
                    <?php foreach($data as $golongan){ ?>
                        <option value="<?= $golongan['gol_id']; ?>"><?= $golongan['gol_nama']; ?></option>
                    <?php } ?>
                </select>
                </select>
    
                </select>
                
            </div>
            <div class="col-md-6">
                <label class="form-label">Seri Pelanggan</label>
                <input type="text" class="form-control" placeholder="Seri Pelanggan" name="pel_seri" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Aktif</label>
                <select class="form-select" name="pel_aktif">
                    <option selected>Pilih...</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Nomor Meteran</label>
                <input type="text" class="form-control" placeholder="Nomor Meteran" name="pel_meteran" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">User</label>
                <select class="form-select" name="pel_user">
                    <option selected>Pilih...</option>
                    <?php foreach($data2 as $user){ ?>
                        <option value="<?= $user['user_id']; ?>"><?= $user['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="btn_tambah">Tambah</button>
            </div>
        </form>
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