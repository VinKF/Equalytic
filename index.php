<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Air Quality Website</title>
    <link rel="stylesheet" href="asset\css\bootstrap.min.css">
    <link rel="stylesheet" href="asset\src\leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/perliedman-leaflet-control-geocoder/3.1.0/Control.Geocoder.css" />
    <style>
        .map-container {
            height: 400px;
            position: relative;
        }
        #map {
            height: 100%;
        }
        .map-overlay {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            position: absolute;
            top: 20px;
            left: 20px;
            width: 300px;
            z-index: 1000;
        }
        .card {
            position: relative;
            color: white;
        }
        .card-img-overlay {
            background: rgba(0, 0, 0, 0.5);
            padding: 1rem;
        }
        .card-title {
            font-size: 1.5rem;
        }
        .card-text {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        .btn-custom {
            background-color: #007bff;
            border: none;
        }
        .table {
            margin-top: 20px;
        }
        .header {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="./asset/logo.webp" alt="Logo" style="height: 40px; margin-right: 10px;"> Water Quality</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pencari" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Jelajahi Kualitas Air Bersih Di Daerah Anda</h1>
            <p class="lead">Tetap terinformasi tentang Air Bersih yang Anda gunakan</p>
        </div>
    </header>

    <div class="map-container">
        <div id="map"></div>
        <div class="map-overlay">
            <h3>Indeks Kualitas Air</h3>
            <p>Lokasi: Jakarta</p>
            <p>AQI: <strong>80</strong> (Sedang)</p>
            <p>PM2.5: 24.5 µg/m³</p>
            <p>Cuaca: 30°C, Kelembapan: 66%, Angin: 13.5 km/h</p>
        </div>
    </div>

    <div class="container">
        <div class="header text-center">
            <h2>Lokasi Paling Tercemar</h2>
            <h6>Data real-time Water Quality Index (AQI)</h6>
        </div>
        <div class="row">
            <!-- Ranking Stasiun -->
            <div class="col-md-6">
                <h4>Ranking Stasiun</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Stasiun</th>
                            <th>AQW US</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Data Mockup
                        $stasiunData = [
                            ["Graha LMU", 149],
                            ["ANTARA ETP - Bundaran HI", 81],
                            ["Ascott Kuningan - myhome", 75],
                            ["Tatalogam Tower", 75],
                            ["Radiant Utama Interinsco", 73],
                        ];
                        foreach ($stasiunData as $index => $stasiun) {
                            echo "<tr>
                                    <td>" . ($index + 1) . "</td>
                                    <td>{$stasiun[0]}</td>
                                    <td>{$stasiun[1]}</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Ranking Kota -->
            <div class="col-md-6">
                <h4>Ranking Kota</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kota</th>
                            <th>AQI US</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Data Mockup
                        $kotaData = [
                            ["Badung, Provinsi Bali", 127],
                            ["Kota Surabaya, Jawa Timur", 91],
                            ["Kota Tangerang, Provinsi Banten", 88],
                            ["Kota Depok, Jawa Barat", 75],
                            ["South Tangerang, Provinsi Banten", 71],
                        ];
                        foreach ($kotaData as $index => $kota) {
                            echo "<tr>
                                    <td>" . ($index + 1) . "</td>
                                    <td>{$kota[0]}</td>
                                    <td>{$kota[1]}</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Solusi untuk Pemantauan</h2>
            <div class="row g-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="asset\product3.png" class="card-img" alt="Pemantau Udara">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title">Solusi untuk pemantauan</h5>
                        <p class="card-text">Kualitas udara di dalam dan di luar rumah Anda</p>
                        <a href="product.php" class="btn btn-custom">Pemantau Udara</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="card">
                    <img src="asset\product4.png" class="card-img" alt="Atem Seri">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title">Pilih pembersih yang tepat</h5>
                        <p class="card-text">Ruangan Ringkas, Sedang dan Besar serta Mobil</p>
                        <a href="product.php" class="btn btn-custom">Atem Seri</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-6">
                <div class="card">
                    <img src="asset\product3.png" class="card-img" alt="HealthPro Series">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title">Baik untuk partikel dan bau</h5>
                        <p class="card-text">Menghilangkan partikel dan bau secara efektif</p>
                        <a href="product.php" class="btn btn-custom">HealthPro Series</a>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-6">
                <div class="card">
                    <img src="asset\product4.png" class="card-img" alt="GC Multi-Gas">
                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <h5 class="card-title">Pembersih udara terbaik</h5>
                        <p class="card-text">Menangkap dan menghancurkan gas dan bau</p>
                        <a href="product.php" class="btn btn-custom">GC Multi-Gas</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-4">
        <p class="mb-0">&copy; 2025 Air Quality. All rights reserved.</p>
    </footer>

    <script src="asset\js\bootstrap.min.js"></script>
    <script src="asset\src\leaflet.js"></script>
    <script src="asset\src\Control.Geocoder.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-6.2088, 106.8456], 12); // Koordinat Jakarta

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        }).addTo(map);

        // Tambahkan fitur pencarian
        var geocoder = L.Control.geocoder({
            defaultMarkGeocode: true
        }).addTo(map);

        // Tambahkan marker di Jakarta
        L.marker([-6.2088, 106.8456]).addTo(map)
            .bindPopup('<b>Jakarta</b><br>Ibukota Indonesia.');
    </script>
</body>
</html>
