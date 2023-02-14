<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/assets/brand/bootstrap-solid.svg">

  <title>Aplikasi Perhitungan Kalori Atlet</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <style type="text/css">
  html,
  body {
    height: 100%;
  }

  body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }

  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>
</head>

<body class="text-center">
  <form class="form-signin" method="POST" action="">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Aplikasi Perhitungan Kalori Atlet</h1>
    <input type="text" class="form-control" placeholder="Nama"  name="nama" required autofocus><br>
    <input type="text" class="form-control" name="tinggi" placeholder="Tinggi" required><br>
    <input type="text" class="form-control" name="umur" placeholder="Umur" required><br>
    <input type="text" class="form-control" name="bb" placeholder="Berat Badan" required><br>
    <input type="radio" value="laki" name="jk" required>Laki-Laki
    &nbsp;&nbsp;
    <input type="radio" name="jk" value="perempuan">Perempuan
    <select name="aktifitas" style="margin-top: 10px;margin-bottom: 20px;"><br>
      <option>-- Pilih Aktifitas --</option>
      <option value="diem">Tidak Ada Aktifitas</option>
      <option value="ringan">Aktifitas Ringan (1-3 Kali seminggu)</option>
      <option value="sedang">Aktifitas Sedang (3-5 kali seminggu)</option>
      <option value="berat">Aktifitas berat (5-6 Kali seminggu)</option>
      <option value="sb">Aktifitas Sangat Berat (2 Kali Sehari)</option>
    </select><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Hitung</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jk   = $_POST['jk'];
    $tinggi = $_POST['tinggi'];
    $umur = $_POST['umur'];
    $bb   = $_POST['bb'];
    $aktifitas = $_POST['aktifitas'];

    if ($jk == "laki") {
      if ($aktifitas == "diem") {
        $bm = 66.4730 + (13.7516 * $bb) + (5.0033 * $tinggi) - (6.7550 * $umur);
        $bmr = $bm * 1.2;

      }elseif($aktifitas == "ringan"){
        $bm = 66.4730 + (13.7516 * $bb) + (5.0033 * $tinggi) - (6.7550 * $umur);
        $bmr = $bm * 1.37;

      }elseif($aktifitas == "sedang")
      {
        $bm = 66.4730 + (13.7516 * $bb) + (5.0033 * $tinggi) - (6.7550 * $umur);
        $bmr = $bm * 1.55;

      }elseif($aktifitas == "berat")
      {
        $bm = 66.4730 + (13.7516 * $bb) + (5.0033 * $tinggi) - (6.7550 * $umur);
        $bmr = $bm * 1.725;

      }
      elseif($aktifitas == "sb")
      {
        $bm = 66.4730 + (13.7516 * $bb) + (5.0033 * $tinggi) - (6.7550 * $umur);
        $bmr = $bm * 1.9;

      }else{
        echo "Pilih Aktifitas";
      }

    }elseif ($jk == "perempuan") {
      if ($aktifitas == "diem") {

        $bm = 655.0955 + (9.5634 * $bb) + (1.8496 * $tinggi) - (4.6756 * $umur);
        $bmr = $bm * 1.2;

      }elseif($aktifitas == "ringan"){

        $bm = 655.0955 + (9.5634 * $bb) + (1.8496 * $tinggi) - (4.6756 * $umur);
        $bmr = $bm * 1.375;

      }elseif($aktifitas == "sedang")
      {
        $bm = 655.0955 + (9.5634 * $bb) + (1.8496 * $tinggi) - (4.6756 * $umur);
        $bmr = $bm * 1.55;

      }elseif($aktifitas == "berat")
      {
        $bm = 655.0955 + (9.5634 * $bb) + (1.8496 * $tinggi) - (4.6756 * $umur);
        $bmr = $bm * 1.725;

      }
      elseif($aktifitas == "sb")
      {
        $bm = 655.0955 + (9.5634 * $bb) + (1.8496 * $tinggi) - (4.6756 * $umur);
        $bmr = $bm * 1.9;

      }else{
        echo "Pilih Aktifitas";
      }
    }
    echo "<script>alert('Kalori yang anda butuh kan setiap hari adalah $bmr kkal.');</script>";
  }
  ?>
</body>
</html>