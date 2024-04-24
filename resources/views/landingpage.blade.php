<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badean</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6" >
            <!-- Konten untuk bagian kiri -->
            <img src="{{ asset('images/LogoBondowoso.png') }}" alt="Deskripsi Gambar">
            <img src="{{ asset('images/Group 7.png') }}" alt="Deskripsi Gambar">
            <h1>Kelurahan Badean</h1>
            <p>Sebagai wujud komitmen dalam memberikan informasi seluas - <br>
luasnya kepada masyarakan Badean akan <br>
mempermudah dalam proses pengajuan surat yang dilakukan<br>
oleh masyarakat</p>
<button class="button-lonjong1">Mulai Pengajuan</button>
<button class="button">Hubungi Admin</button>
        </div>
        <div class="col-md-6">
            <!-- Navbar di sebelah kanan -->
            <nav class="navbar navbar-expand-lg " >
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
                <img src="{{ asset('images/people 1.png') }}" alt="Deskripsi Gambar" class="people-image">
    </div>
</div>
<body class="body-end">
  <h2>Tentang E - Badean</h2>
  <p>E-Badean adalah sebuah platform yang tersedia dalam bentuk situs web <br>
dan aplikasi mobile. Didesain untuk digunakan oleh masyarakat umum, <br>
ketua RT, dan RW. Selain itu, terdapat situs web khusus yang diperuntukkan<br> 
bagi admin kelurahan, yang bertujuan untuk mengelola data master dari <br>
masyarakat. Tujuan utamanya adalah memungkinkan masyarakat untuk<br>
mengajukan surat secara online, memberikan kemudahan dalam hal <br>
efisiensi dan efektivitas tanpa terbatas oleh waktu dan lokasi.</p>
<img src="{{ asset('images/Group 32.png') }}" alt="Deskripsi Gambar" class="img-web">
<img src="{{ asset('images/Group 31.png') }}" alt="Deskripsi Gambar" class="img-mobile">

<div class="struktur">
    <h3>Aparatur Kelurahan Badean</h3>
    <img src="{{ asset('images/profile1.png') }}" alt="Foto Profil" class="profile-img">
</div>

  
</body>

  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
