
<div class="container-fluid p-5  text-white text-center" style="background-color: #4A628A;">
  <h3>Selamat datang!</h3>
  <p class="font-monospace">Halo <?=$resultUser['username']?>, Selamat Bekerja  🥼💊</p> 
</div>

  
<div class="container ps-md-0 mt-5 mb-5">
  <div class="row px-5 mx-5">
    <div class="col-sm-6">
      <h3>Daftar antrian</h3>
      <div class="card my-4" style="width:200px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <a href="?page=daftar"><img class="card-img-top my-3" src="asset/01.png" alt="Card image"></a>
      </div>
    </div>

    <div class="col-sm-6">
      <h3>Tambah antrian</h3>
      <div class="card my-4" style="width:200px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">
        <a href="?page=antrian"><img class="card-img-top my-3" src="asset/pupu.png" alt="Card image"></a>
      </div>
    </div>

  </div> <!-- akhir row -->
</div>

<div class="container mt-5">
<?php 
include "daftar_antrian.php";
?>
</div>
