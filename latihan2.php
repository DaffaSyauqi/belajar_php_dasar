<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Toko Wayang</title>
</head>
<body>
    <div class="container">
        <h1>Toko Wayang Kami</h1>
        <div>Program aplikasi sederhana untuk menghitung penjualan barang toko wayang kami</div><br>
        <form method="POST">
         <div class="form-group">
           <label>Nama Barang</label>
           <input name="namaBarang" class="form-control">
         </div>
         <div class="form-group">
           <label>Harga Barang</label>

           <input name="hargaBarang" class="form-control">
         </div>
         <div class="form-group">
           <label>Jumlah Barang</label>
           <input name="jumlahBarang" class="form-control">
         </div>
         <div class="form-group">
           <label>Diskon Barang</label>
           <input name="diskonBarang" class="form-control" type="number" min="0" max="100" >
         </div>
         <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
    </form>
    <hr>
    </div>
</body>
</html>

<?php
  if(isset($_POST['hitung'])) {
      $nama = $_POST['namaBarang'];
      $harga = $_POST['hargaBarang'];      
      $jumlah = $_POST['jumlahBarang'];
      $diskon = $_POST['diskonBarang'];
      $total = $harga * $jumlah;
      $totalDiskon = $diskon/100 * $total;
      $totalAkhir = $total - $totalDiskon;
      
      echo " 
      <div class='container'>  
         <h3>Jumlah yang harus dibayar</h3>
         <div>Nama Barang : $nama</div>
         <div>Harga Barang : $harga</div>
         <div>Jumlah Barang : $jumlah</div>
         <div>Diskon : $diskon%</div>
         <h3>Rp. $totalAkhir</h3>
      </div>
      ";
  }
?>