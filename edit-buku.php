<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('connection.php'); ?>

    <div class="container">
    <?php
        $id_buku = $_GET['id'];
        $query = mysqli_query($connect, "SELECT * from buku where id='$id_buku'");
        $result = mysqli_fetch_array($query);
    ?>
        <form action="edit-buku-update.php" method="post" class="mt-3">
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Nama Buku</label>
                <input class="form-control" name="nama_buku" type="text" id="nama_buku" aria-label="default input example" 
                value="<?= $result['nama_buku']?>"placeholder="nama_buku">
            </div>
            <button class="btn btn-primary" type="submit">save</button>
            <input type="reset" class="btn btn-secondary">
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
</html>