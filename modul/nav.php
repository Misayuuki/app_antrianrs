<h3?php 
include "lib/koneksi.php";
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand mx-3" href="index.php">🩺 Medical Care.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> 
      </ul> -->
      <form class="d-flex" role="search">
       <h5 class="font-monospace mx-4 mt-2"> 🌱 <i><?=$resultUser['username']?></i></h5>
       <center><a href="?page=keluar" class="btn btn-danger">logout</a></center>
      </form>

      <!-- <span class="navbar-text">
      <p class="font-monospace"><i>Halo <?=$resultUser['username']?></i></p>
      </span>
        <center><a href="?page=keluar" class="btn btn-danger">logout</a></center> -->


     
    </div>
  </div>
</nav>
