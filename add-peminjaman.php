<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('connection.php');?>


    <div class="container">
        <form action="insert-peminjaman.php" method="post" class="mt-3">
            <div class="mb-3">
                <label for="siswa_id" class="form-label">siswa id</label>
                <select name="siswa_id" id="siswa_id" class="form-control">
                    <option value="">pilih siswa</option>
                    <?php
                    $querySiswa = mysqli_query($connect, "SELECT * FROM siswa");
                    while($result = mysqli_fetch_assoc($querySiswa)) : 
                    ?>
                        <option value="<?= $result['id'] ?>"><?= $result['nama_siswa'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="buku_id" class="form-label">buku id</label>
                <select name="buku_id" id="buku_id" class="form-control">
                    <option value="">pilih buku</option>
                    <?php
                    $querybuku = mysqli_query($connect, "SELECT * FROM buku");
                    while($result = mysqli_fetch_assoc($querybuku)) : 
                    ?>
                        <option value="<?= $result['id'] ?>"><?= $result['nama_buku'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_peminjaman" class="form-label">tanggal peminjaman</label>
                <input class="form-control" name="tanggal_peminjaman" type="date" id="tanggal_peminjaman">
            </div>
            <div class="mb-3">
                <label for="tanggal_pengembalian" class="form-label">tanggal pengembalian</label>
                <input class="form-control" name="tanggal_pengembalian" type="date" id="tanggal_pengembalian">
            </div>
            <button class="btn btn-primary" type="submit">save</button>
            <input type="reset" class="btn btn-secondary">
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>