<?php
    include 'connection.php';

    if(isset($_POST['submit_surya'])) {
        $point_surya = 1;
        $query = "INSERT INTO surya (`point`) VALUES ($point_surya)";
        $hasil = mysqli_query($koneksi, $query);
    }
    else if(isset($_POST['submit_tika'])) {
        $point_tika = 1;
        $query = "INSERT INTO tika (`point`) VALUES ($point_tika)";
        $hasil = mysqli_query($koneksi, $query);
    }
    else if(isset($_POST['submit_sumitra'])) {
        $point_sumitra = 1;
        $query = "INSERT INTO sumitra (`point`) VALUES ($point_sumitra)";
        $hasil = mysqli_query($koneksi, $query);
    }
    else if(isset($_POST['submit_midana'])) {
        $point_midana = 1;
        $query = "INSERT INTO midana (`point`) VALUES ($point_midana)";
        $hasil = mysqli_query($koneksi, $query);
    }

    $koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling - Osis SMKTI Bali Global Singaraja</title>
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1 class="text-center m-5">Pemilihan Ketua OSIS</h1>
    </div>
    <div class="container">
        <p class="fs-4 fw-semibold ms-3">Candidate : </p>
        <div class="container d-flex">
            <div class="card me-2" style="width: 18rem;">
                <img src="img/surya.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ida bagus kadek surya aditya saputra</h5>
                  <form method="post" target="IframeVote">
                      <input class="btn btn-primary none" type="submit" name="submit_surya" onclick="hilang()">
                </form>
                </div>
            </div>
            <div class="card mx-2" style="width: 18rem;">
                <img src="img/tika.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ni putu swastika dewi suryani</h5>
                  <form method="post" target="IframeVote">
                      <input class="btn btn-primary none" type="submit" name="submit_tika" onclick="hilang()">
                </form>
                </div>
            </div>
            <div class="card mx-2" style="width: 18rem;">
                <img src="img/sumitra.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Putu sumitrayasa</h5>
                  <form method="post" target="IframeVote">
                      <input class="btn btn-primary none" type="submit" name="submit_sumitra" onclick="hilang()">
                </form>
                </div>
            </div>
            <div class="card ms-2" style="width: 18rem;">
                <img src="img/midane.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">I kadek midana yasa putra</h5>
                  <form method="post" target="IframeVote">
                      <input class="btn btn-primary none" type="submit" name="submit_midana" onclick="hilang()">
                </form>
                </div>
            </div>
        </div>
    </div>
    <iframe name="IframeVote" style="display: none;"></iframe>
    <!-- cdn bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>