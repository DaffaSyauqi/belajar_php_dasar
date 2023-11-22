<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Kelulusan</title>
</head>
<body>
    <div class="container">
        <h1>Aplikasi Kelulusan Siswa</h1>
        <div>Program aplikasi sederhana untuk menghitung kelulusan siswa</div><br>
        <form method="POST">
         <div class="form-group">
           <label>Nama</label>
           <input name="nama" class="form-control">
         </div>
         <div class="form-group">
           <label>Kelas</label>
           <input name="kelas" class="form-control">
         </div>
         <div class="form-group">
           <label>Nilai Produktif</label>
           <input name="nilaiProduktif" class="form-control" type="number" min="0" max="100">
         </div>
         <div class="form-group">
           <label>Nilai Normatif</label>
           <input name="nilaiNormatif" class="form-control" type="number" min="0" max="100">
         </div>
         <div class="form-group">
           <label>Nilai Mulok</label>
           <input name="nilaiMulok" class="form-control" type="number" min="0" max="100">
         </div>
         <button type="submit" name="hitung" class="btn btn-dark">Hitung</button>
    </form>
    <hr>
    </div>
</body>
</html>

<?php
 if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilaiProduktif = $_POST['nilaiProduktif'];
    $nilaiNormatif = $_POST['nilaiNormatif'];
    $nilaiMulok = $_POST['nilaiMulok'];
    $totalNilai = $nilaiProduktif + $nilaiNormatif + $nilaiMulok;
    $rata_rata = $totalNilai / 3;

    if ($nilaiProduktif >= 90) {
        $gradeP = "A";
    } else if ($nilaiProduktif >= 80) {
        $gradeP = "B";
    } else if ($nilaiProduktif >= 70) {
        $gradeP = "C";
        
    } else if ($nilaiProduktif >= 60) {
        $gradeP = "D";
    } else if ($nilaiProduktif >= 50) {
        $gradeP = "E";
    } else if ($nilaiProduktif < 50) {
        $gradeP = "F";
    } 

    if ($nilaiNormatif >= 90) {
        $gradeN = "A";
    } else if ($nilaiNormatif >= 80) {
        $gradeN = "B";
    } else if ($nilaiNormatif >= 70) {
        $gradeN = "C";
    } else if ($nilaiNormatif >= 60) {
        $gradeN = "D";
    } else if ($nilaiNormatif >= 50) {
        $gradeN = "E";
    } else if ($nilaiNormatif < 50) {
        $gradeN = "F";
    } 

    if ($nilaiMulok>= 90) {
        $gradeM = "A";
    } else if ($nilaiMulok >= 80) {
        $gradeM = "B";
    } else if ($nilaiMulok >= 70) {
        $gradeM = "C";
    } else if ($nilaiMulok >= 60) {
        $gradeM = "D";
    } else if ($nilaiMulok >= 50) {
        $gradeM = "E";
    } else if ($nilaiMulok < 50) {
        $gradeM = "F";
    } 

    $ketP = $nilaiProduktif >=70 ? "Lulus" : "Tidak Lulus";
    $ketN = $nilaiNormatif >=70 ? "Lulus" : "Tidak Lulus";
    $ketM = $nilaiMulok >=70 ? "Lulus" : "Tidak Lulus";
    $ketR = $rata_rata >=70 ? "Lulus" : "Tidak Lulus";

    echo"
    <div class='container'>
    <h3>Nama : $nama</h3>
    <h3>Kelas : $kelas</h3>
    <br>
    <table class='table'>
     <thead class='thead-dark'>
       <tr>
       <th scope='col'>No</th>
       <th scope='col'>Mapel</th>
       <th scope='col'>Nilai</th>
       <th scope='col'>Grade</th>
       <th scope='col'>Keterangan</th>
       </tr>
    </thead>
    <tbody>
       <tr>
         <th scope='row'>1</th>
         <td>Produktif</td>
         <td>$nilaiProduktif</td>
         <td>$gradeP</td>
         <td>$ketP</td>
       </tr>
       <tr>
         <th scope='row'>2</th>
         <td>Normamatif</td>
         <td>$nilaiNormatif</td>
         <td>$gradeN</td>
         <td>$ketN</td>
       </tr>
       <tr>
         <th scope='row'>3</th>
         <td>Mulok</td>
         <td>$nilaiMulok</td>
         <td>$gradeM</td>
         <td>$ketM</td>
       </tr>
    </tbody>
    </table>
    <br>
    <div class='d-flex justify-content-between'>
        <h3>Nilai Rata-Rata</h3>
        <h3>$rata_rata</h3>
    </div>
    <div class='d-flex justify-content-end'>
        <h3>$ketR</h3>
    </div>
    </div>
    ";
 }
?>