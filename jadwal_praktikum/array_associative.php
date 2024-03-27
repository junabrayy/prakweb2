<?php include "header.php"
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Nilai</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- tempat isi konten kita -->
                                
<?php
// ambil value yg di input user dan simpan ke dalam variable
$animals = ["k"=>"kucing","a"=>"ayam","b"=>"banteng","i"=>"ikan"];
echo 'Ini hewan dengan index 1 : ' .$animals["b"];
echo "<br>";
echo 'Ini hewan dengan index 3 : ' .$animals["i"];
echo '<br>';
?>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
<!-- panggil file bawah atau footer -->
<?php
include 'footer.php';

?>
