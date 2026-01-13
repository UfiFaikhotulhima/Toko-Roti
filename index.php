<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Metadata -->
  <meta name="keywords" content="hann, toko roti">
  <meta name="description" content="Website hann">

  <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Warkop Gandres</title>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-100">
    <a class="navbar-brand" href="#">
        <img src="assets/logo.jpg" width="80" height="80" class="d-inline-block align-top" alt="">
    </a>
    <p class="h4 text-black">Warkop Gandres</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="ml-auto navbar-nav">
            <li class="nav-item active">
          
                <a class="nav-link" href="#banner">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Kontak</a>
            </li>
        </ul>
    </div>
</nav>

<div id="banner" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#banner" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/cafe.jpg" class="d-block w-100 h-100" alt="Kopi Kita Banner">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kopi Kita Aja</h5>
                <p>Secangkir Kopi Untuk Awali Hari</p>
            </div>
        </div>
    </div>
</div>

<div id="q-menu" class="p-100" style="margin-top: 72px;">
    <div class="row">
      <div class="col-lg-4">
        <a href="#profile" class="card" style="width: 100%;">
          <img src="assets/coffee.jpg" class="card-img-top" alt="Menu">
          <a href="#menu" class="placeholder">Menu</a>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#profile" class="card" style="width: 100%;">
          <img src="assets/bartender.jpg" class="card-img-top" alt="Menu">
          <a href="#menu" class="placeholder">Profile</a>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#profile" class="card" style="width: 100%;">
          <img src="assets/cafe.jpg" class="card-img-top" alt="Menu">
          <a href="#menu" class="placeholder">Contact</a>
        </a>
      </div>
    </div>
  </div>

  <div class="row">  
    <div class="col-lg-8">
      <h2 id="menu" class="font-weight-normal p-50 text-center" style="padding-top: 100px">Menu <b>Kami</b></h2>
  <!-- Menu -->
<div class="row p-5" id="menu-section">
  <!-- Minuman -->
  <div class="col-lg-6">
    <h3 class="font-weight-normal mb-3 mt-3">Minuman</h3>
    <div id="adrink" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#adrink" data-slide-to="0" class="active"></li>
        <li data-target="#adrink" data-slide-to="1"></li>
        <li data-target="#adrink" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/coffee.jpg" class="d-block w-100" alt="Drink">
        </div>
        <div class="carousel-item">
          <img src="assets/bartender.jpg" class="d-block w-100" alt="Drink">
        </div>
        <div class="carousel-item">
          <img src="assets/cafe.jpg" class="d-block w-100" alt="Drink">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#adrink" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#adrink" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>

  <!-- Makanan -->
  <div class="col-lg-6">
    <h3 class="font-weight-normal mb-3 mt-3">Makanan</h3>
    <div id="food" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#food" data-slide-to="0" class="active"></li>
        <li data-target="#food" data-slide-to="1"></li>
        <li data-target="#food" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/roti.jpeg" class="d-block w-100" alt="Food">
        </div>
        <div class="carousel-item">
          <img src="assets/bartender.jpg" class="d-block w-100" alt="Food">
        </div>
        <div class="carousel-item">
          <img src="assets/cafe.jpg" class="d-block w-100" alt="Food">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#food" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#food" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>
</div>

      <!-- Profil -->
      <h2 id="profile" class="font-weight-normal text-center p-5" style="padding-top: 100px">Profil <b>Kami</b></h2>
      <div class="row p-5">
        <div class="col-lg-12" style="padding-right: 0;">
          <p class="text-center">
          Nggak cuma sekadar ngopi, tapi juga tempat ketemu teman lama, nulis tugas, atau sekadar nyari tenang.
            Karena kopi enak harus ditemani suasana yang hangat.
          </p>
          <iframe class="mt-4" width="100%" height="400"
            src="https://www.youtube.com/embed/ezPQyB6iXg0?si=GPqEiv5KrZUMZzSI"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
<!-- Komentar Pelanggan -->
    <div class="col-lg-4 p-3 bg-light" style="margin-top: 100px">
      <div class="card mb-3" style="width: 100%">
        <div class="card-body">
          <h5 class="card-title">Rokim</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pelanggan Warkop Gandres</h6>
          <p class="card-text">Tempatnya adem, suasananya bikin betah. Cocok banget buat kerja sambil ngopi.</p>
          <a href="#" class="card-link">Pelayanan Baik</a>
          <a href="#" class="card-link">Rasa Mantap</a>
        </div>
      </div>
  
      <div class="card mb-3" style="width: 100%">
        <div class="card-body">
          <h5 class="card-title">Agus</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pelanggan Warkop Gandres</h6>
          <p class="card-text">Kopinya enak, baristanya ramah, rasanya selalu konsisten tiap kali datang.</p>
          <a href="#" class="card-link">Pelayanan Baik</a>
          <a href="#" class="card-link">Rasa Otentik</a>
        </div>
      </div>

      <div class="card mb-3" style="width: 100%">
        <div class="card-body">
          <h5 class="card-title">Hendra</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pelanggan Warkop Gandres</h6>
          <p class="card-text">arganya pas di kantong, tapi rasa kopinya bintang lima</p>
          <a href="#" class="card-link">Pelayanan Baik</a>
          <a href="#" class="card-link">Rasa Makanan yang Unik</a>
        </div>
      </div>
      
      <div class="card mb-3" style="width: 100%">
        <div class="card-body">
          <h5 class="card-title">Rara</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pelanggan Warkop Gandres</h6>
          <p class="card-text">Kalau lagi penat, mampir ke sini bikin hati adem. Kopinya ngena banget</p>
          <a href="#" class="card-link">Pelayanan Baik</a>
          <a href="#" class="card-link">Rasa Otentik</a>
        </div>
      </div>

      <div class="card mb-3" style="width: 100%">
        <div class="card-body">
          <h5 class="card-title">Yani</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pelanggan Warkop Gandres</h6>
          <p class="card-text">Paling suka nongkrong di sini sama temen-temen, tempatnya cozy banget</p>
          <a href="#" class="card-link">Pelayanan Baik</a>
          <a href="#" class="card-link">Rasa Otentik</a>
        </div>
      </div>

      <div class="card mb-3" style="width: 100%">
        <div class="card-body">
          <h5 class="card-title">Lani</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pelanggan Warkop Gandres</h6>
          <p class="card-text">Warkop Gandres selalu jadi pilihan tiap butuh tempat santai. Simple tapi ngangenin.</p>
          <a href="#" class="card-link">Pelayanan Baik</a>
          <a href="#" class="card-link">Rasa Otentik</a>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="p-100" style="margin-top: 100px;">
  <h2 class="text-center font-weight-normal">Kontak <b>Kami</b></h2>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="mb-3 border-solid border-bottom">
        <h3 class="font-weight-normal">Warkop Gandres</h3>
        <p>
        Warkop Gandres hadir sebagai tempat nongkrong yang santai, murah, tapi penuh cerita. Dari secangkir kopi sampai gorengan hangat, semua ada buat nemenin obrolan panjang kamu.
        </p>
      </div>

      <div class="mb-4 border-solid border-bottom">
        <div class="row mb-3">
          <div class="col-sm">
            <div class="row">
              <div class="col-xs-3 col-sm-3">
                <img src="assets/instagram.png" width="30" height="30" alt="Instagram" draggable="false">
              </div>
              <div class="col-xs-9 col-sm-9">
                <p>@Warkop Gandres</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="row">
              <div class="col-xs-3 col-sm-3">
                <img src="assets/instagram.png" width="30" height="30" alt="Instagram" draggable="false">
              </div>
              <div class="col-xs-9 col-sm-9">
                <p>@Warkop Gandres</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="row">
              <div class="col-xs-3 col-sm-3">
                <img src="assets/instagram.png" width="30" height="30" alt="Instagram" draggable="false">
              </div>
              <div class="col-xs-9 col-sm-9">
                <p>@Warkop Gandres</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <h3 class="font-weight-normal">Berlangganan Sekarang</h3>
        <button class="btn btn-danger mb-5">Klik</button>
      </div>

      <div class="col-lg-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.656539519906!2d111.91135297357141!3d-7.27986427153973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e782b00249f8039%3A0x7d7aff21a66c0461!2sWarkop%20Gandress!5e0!3m2!1sen!2sid!4v1758628975011!5m2!1sen!2sid"width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div> 
  <script src="scripts/js/jquery-3.7.1.min.js"></script>
  <script src="scripts/js/bootstrap.bundle.min.js"></script>
</body>
</html>