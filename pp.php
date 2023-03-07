<?php

    $dataproduk = array(
        array("PAKAN IKAN OTOMATIS", "beri makan ikan tanpa repot dengan pakan ikan otomatis dari jurusan RPL", "100.000", 'pakanikan.png'),
        array("WEBSITE COMPANY PROFILE", "Zaman now masih belum punya website pecayakan pembuatan website pada kula koding smkn 2 banjarmasin", "45.000", 'websitecompany.png'),
        array("KURSI JATI", "Kursi estetik dengan bahan jati dibuat oleh jurusan Teknik Furniture", "50.000", 'kayujati.png'),
        array("SABUN LAUNDRY", "Mewangikan pakaian menggunakan bahan yang aman untuk pakaian produksi dari jurusan Kimia Industri", "55.000", 'sabunlaundry.png'),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body style="background-color: white;">
<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" href="transaksi.php">Transaksi</a>
          <li class="nav-item">
            <a class="nav-link active position-absolute end-0" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<center>
  <img src="https://i.pinimg.com/originals/45/67/a8/4567a837b545d22b9dcde81ccd98b70e.gif" width="100%" style="padding: 10px; height: 800px; margin: 12px 15px;">
</center>
<h2>Daftar Produk Technopark Gallery SMKN 2 BANJARMASIN</h2><br>

<div class="container-fluid bg-body-secondary" >
  <div class="row">
    <?php foreach ($dataproduk as $values =>$data) {?>
            <div class="col-md-3">
                <div class="card mt-2">
                    <img src="<?php echo $data[3] ?>" style="width: 100%; height: 250px;">
                    <div class="card-body bg-light-subtle tescard">
                        <p><?php echo $data[0]; ?></p>
                        <p><?php echo $data[1]; ?></p>
                        <p><?php echo $data[2]; ?></p>
                    </div>
                </div>
                <form action="transaksi.php" method="post">
                    <input type="hidden" name="data1" id="data" value="<?php echo $data[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $data[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $data[2] ?>">
                    <button class=" btn btn-secondary mt-2" style="width:400px;">
                        Pilih Paket
                    </button>
                </form>
            </div>
    <?php } ?>
</div>
</div>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-5 rounded" style="background-color: #C8D0D5;">
        <div class="card-body">
          <div class="text-center text-black">
            @Copyright By Mohammad Kevin
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>