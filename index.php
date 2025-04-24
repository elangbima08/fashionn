<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fashion & Aksesoris - UMKM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar-brand {
      font-weight: 600;
    }
    section {
      padding-top: 80px;
      padding-bottom: 80px;
    }
    .card {
      border: none;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    h2 {
      font-weight: 600;
      margin-bottom: 40px;
      text-align: center;
    }
    footer {
      background: #222;
      color: #ddd;
    }
    .lead {
      color: #555;
    }
    .btn-custom {
      background-color: #6c63ff;
      color: #fff;
      border-radius: 50px;
      padding: 10px 30px;
    }
    .btn-custom:hover {
      background-color: #554ce6;
      color: #fff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">My fashion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="#pemesanan">Pemesanan</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Beranda -->
<section id="beranda" class="text-center bg-light">
  <div class="container">
    <h1 class="display-4">Selamat Datang di <strong>My fashion</strong></h1>
    <p class="lead">Temukan fashion dan aksesoris handmade berkualitas dari UMKM lokal.</p>
    <a href="#produk" class="btn btn-custom mt-3">Lihat Produk</a>
  </div>
</section>

<!-- Profil -->
<section id="profil">
  <div class="container">
    <h2>Tentang Kami</h2>
    <p class="text-center">Kami adalah UMKM yang fokus pada produk fashion dan aksesoris dengan desain unik dan bahan berkualitas. Didirikan pada tahun 2020, kami telah melayani berbagai pelanggan dari seluruh Indonesia.</p>
  </div>
</section>

<!-- Produk -->
<section id="produk" class="bg-light">
  <div class="container">
    <h2>Produk Kami</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="d8874428-1fc5-481c-96f0-0098910e0866.jpg" class="card-img-top" alt="Tas Rajut">
          <div class="card-body">
            <h5 class="card-title">Tas Rajut Handmade</h5>
            <p class="card-text">Tas rajut dengan desain elegan, cocok untuk berbagai acara.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="554a1c73-90be-4ea0-8c65-2320e1ec28b5.jpg" class="card-img-top" alt="Anting Etnik">
          <div class="card-body">
            <h5 class="card-title">Anting Etnik</h5>
            <p class="card-text">Anting handmade dari bahan alami, cocok untuk tampil beda.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="1f8b2b35760055e7bc468dd4b4c30369.jpg" class="card-img-top" alt="Anting Etnik">
          <div class="card-body">
            <h5 class="card-title">Kemeja Batik</h5>
            <p class="card-text">Kemeja batik atasan bercorak khas Indonesia yang memadukan gaya tradisional dan modern untuk tampilan formal maupun santai.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="Blangkon.jpg" class="card-img-top" alt="Anting Etnik">
          <div class="card-body">
            <h5 class="card-title">Blangkon</h5>
            <p class="card-text">Blangkon penutup kepala tradisional pria Jawa yang terbuat dari kain batik, dibentuk dan dijahit dengan pola khas. Blangkon melambangkan identitas budaya Jawa dan biasanya dipakai dalam acara adat, upacara, atau sebagai pelengkap busana tradisional.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="hoodie.jpg" class="card-img-top" alt="Anting Etnik">
          <div class="card-body">
            <h5 class="card-title">Hoodie</h5>
            <p class="card-text">Hoodie pakaian atasan berbahan tebal dengan penutup kepala yang nyaman dan cocok untuk gaya kasual.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="sepatu.jpg" class="card-img-top" alt="Anting Etnik">
          <div class="card-body">
            <h5 class="card-title">Sepatu</h5>
            <p class="card-text">Sepatu alas kaki yang melindungi dan menunjang kenyamanan serta penampilan saat beraktivitas..</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="images.jfif" class="card-img-top" alt="Outer Batik">
          <div class="card-body">
            <h5 class="card-title">Outer Batik Modern</h5>
            <p class="card-text">Outer batik dengan potongan modern, nyaman dan stylish.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog -->
<section id="blog">
  <div class="container">
    <h2>Artikel & Berita</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-4">
          <h5>Tips Memadukan Aksesoris dengan Outfit</h5>
          <p>Mengenakan aksesoris dengan outfit harian bisa jadi tantangan. Simak tips berikut untuk tampil kece setiap hari!</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-4">
          <h5>Cerita di Balik Produk Handmade Kami</h5>
          <p>Setiap produk memiliki cerita. Yuk kenali proses kreatif di balik produk fashion dan aksesoris UMKM kami!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pemesanan -->
<section id="pemesanan" class="bg-light">
  <div class="container">
    <h2>Informasi Pemesanan</h2>
    <p class="text-center">Untuk pemesanan produk, silakan hubungi kami melalui:</p>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <ul class="list-unstyled text-center">
          <li><strong>WhatsApp:</strong> 089234561890</li>
          <li><strong>Email:</strong> Myfhasion@gmail.com</li>
          <li><strong>Instagram:</strong> @myfashion_</li>
        </ul>
        <p class="text-center">Kami menggunakan pengemasan ramah lingkungan dan aman untuk pengiriman ke seluruh Indonesia.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center py-4">
  <div class="container">
    <p class="mb-0">&copy; 2025 My fashion. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
