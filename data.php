<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <img class="image" border="1" src="foto/logo1.png"  width="42px" style="margin: 1px;padding: 0px color:white;">
        <a href="index.php" class="navbar-brand">PERPUSTAKAAN</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-light">Home</a>
            <li class="nav-item">
                <a href="about.php" class="nav-link text-light">About</a>
            </li>
            <li class="nav-item">
                <a href="kontak.php" class="nav-link text-light">Kontak</a>
            </li>
            </li>
            <li class="nav-item">
                <a href="boking.php" class="nav-link text-light">Booking</a>
            </li>
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid bg-light" style="height:90vh">
    <div class="container">
    <?php
        $id_buku = '';
        $judul_buku = '';
        $jenis_buku = '';
        $tahun_terbit = '';
        if (isset($_GET['id'])) {
            $ambil = mysqli_query($mysqli, 
            "SELECT * FROM buku 
            WHERE id='" . $_GET['id'] . "'");
            while ($row = mysqli_fetch_array($ambil)) {
                $id_buku = $row['id_buku'];
                $judul_buku = $row['judul_buku'];
                $jenis_buku = $row['jenis_buku'];
                $tahun_terbit = $row['tahun_terbit'];
            }
        ?>
        <?php
        }
        ?>

    <center><h1>SELAMAT DATANG</h1></center>
    <center><h2>DI PERPUSTAKAAN PROVINSI JAWA TENGAH</h2></center>
    <table class="table table-hover">
    <!--thead atau baris judul-->
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Id Buku</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Jenis Buku</th>
            <th scope="col">Tahun Tebit</th>
        </tr>
    </thead>
    <!--tbody berisi isi tabel sesuai dengan judul atau head-->
    <tbody>
        <!-- Kode PHP untuk menampilkan semua isi dari tabel urut
        berdasarkan status dan tanggal awal-->
        <?php
            $result = mysqli_query($mysqli, "SELECT * FROM buku");
            $no = 1;
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['id_buku'] ?></td>
                    <td><?php echo $data['judul_buku'] ?></td>
                    <td><?php echo $data['jenis_buku'] ?></td>
                    <td><?php echo $data['tahun_terbit'] ?></td>
                </tr>
            <?php
            }
            ?>
    </tbody>
</table>

    </div>
    </div>
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>