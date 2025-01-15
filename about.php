<?php
$title = "Tentang Kami";
include 'header.php';
?>
<div class="page">
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


    <div class="parent-container">
        <div class="container1">
            <h2>Tentang Kami</h2>
            <p>
            Kami di <strong>Iqualytic</strong> percaya bahwa akses terhadap air bersih adalah hak dasar setiap manusia.
            Dengan misi untuk menjaga kelestarian sumber daya air dan meningkatkan kualitas hidup masyarakat, kami telah 
            mengembangkan berbagai produk inovatif yang mampu memurnikan air secara efektif.
            </p>
            <p>
            Melalui indeks kualitas air yang kami sediakan, Anda dapat mengetahui kondisi terkini sumber air di sekitar Anda 
            dan mengambil langkah-langkah untuk melindungi lingkungan. Bersama-sama, kita dapat menciptakan masa depan yang lebih 
            berkelanjutan dengan air bersih untuk semua.
            </p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
