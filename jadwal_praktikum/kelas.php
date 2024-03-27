<!-- panggil file atas atau header -->
<?php
include 'dbkoneksi.php';
include 'models/Kelas.php';
include 'header.php';
// buat object dari class kelas
$obj_kelas = new Kelas();
// panggil method tampildata untuk menampilkan seluruh data kelas
$data_kelas = $obj_kelas->TampilData();
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- buat table disini -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Dosen</th>
      <th scope="col">Hari</th>
      <th scope="col">Waktu</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Gedung</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1; 
    foreach ($data_kelas as $data) {
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $data['dosen_id']?></td>
        <td><?= $data['hari']?></td>
        <td><?= $data['waktu']?></td>
        <td><?= $data['mata_kuliah']?></td>
        <td><?= $data['gedung']?></td>
        <td>Edit | Hapus</td>
    </tr>
<?php
$no++;
}

?>
  </tbody>
</table>
<button class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </main>
<!-- panggil file bawah atau footer -->
<?php
include 'footer.php';
?>
