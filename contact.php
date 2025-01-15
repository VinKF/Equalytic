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
    <div class="container2">
    <div class="contact-info">
        <div>
            <i class="fas fa-phone"></i>
            <p>+1 234 567 890</p>
        </div>
        <div>
            <i class="fas fa-envelope"></i>
            <p>info@example.com</p>
        </div>
        <div>
            <i class="fas fa-map-marker-alt"></i>
            <p>123 Main Street, Anytown, USA</p>
        </div>
    </div>
    <div class="contact-form">
        <form action="#" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </div>

    </div>
    
</div>
    <?php include 'footer.php'; ?>

</div>



