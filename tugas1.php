<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | PHP | Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="mt-2" >Form Nilai Ujian</h2>
    <form method="post" action="" class="mb-4">
        <div class="mb-2">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Nilai Ujian</label>
            <input type="number" class="form-control" name="nilai" required>
        </div>
        <input type="submit" name="submit" class="btn btn-success" value="Submit">
    </form>

    <!-- PHP -->
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        echo "<h5>Hasil</h5>";
        echo "Nama: $nama<br>";
        echo "Email : $email<br><br>";
        echo "Nilai Ujian: <strong>$nilai</strong><br>";

        if ($nilai > 70 && $nilai <= 100) {
            echo "Status: <strong>Lulus</strong>";
        } elseif ($nilai >= 0 && $nilai <= 70) {
            echo "Status: <strong>Remedial</strong>";
        } else {
            echo "Status: <strong>Invalid</strong>";
        }
    }
    ?>
</div>

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>