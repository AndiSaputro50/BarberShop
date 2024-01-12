<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO Barbershop</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
        /* Basic styling - you can add your own styles here */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
            overflow-x: hidden;
            /* Prevents horizontal scrollbar */
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #152b6e;
            padding: 20px 0;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #000;
            text-align: center;
            padding-bottom: 70px;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #f1f1f1;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background: #152b6e;
            color: #000;
            text-decoration: none;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            transition: background 0.3s ease, transform 0.2s ease-out, box-shadow 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            background: #152b6e;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        /* Additional Styles for Footer */
        footer {
            background-color: #152b6e;
            color: #000;
            text-align: center;
            padding: 5px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .section {
            padding: 50px 0;
            text-align: center;
        }

        .section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #000;
        }

        .section p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #000;
        }

        /* Styles for Gallery */
        .gallery {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .gallery img {
            width: 30%;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 id="welcomeText">Welcome to Barbershop</h1>
        <p id="introText">This is where you can introduce your services, about, or contact information.</p>
        <a href="<?php echo base_url('auth/login') ?>" class="cta-button">Login</a>
    </div>

    <div class="navbar">
        <a href="#" onclick="changeLanguage('indonesia')">
            <img src="image/home_page/indonesia.png" alt="Flag IND " width="35" height="30">
        </a>
        <a href="#" onclick="changeLanguage('inggris')">
            <img src="image/home_page/uk.png" alt="Flag UK " width="30" height="20">
        </a>
        <a href="#" id="home">Home</a>
        <a href="#" id="about">About</a>
        <a href="#" id="services">Services</a>
        <a href="#" id="contact">Contact</a>
    </div>

    <div id="about" class="section">
        <h2 id="aboutTitle">About Us</h2>
        <p id="aboutContent">We are a professional barbershop providing top-notch services.</p>
    </div>

    <div id="services" class="section">
        <h2 id="servicesTitle">Our Services</h2>
        <p id="servicesContent">Explore our wide range of services tailored for your needs.</p>
    </div>

    <div id="contact" class="section">
        <h2 id="contactTitle">Contact Us</h2>
        <p id="contactContent">Get in touch with us for appointments or inquiries.</p>
    </div>

    <div id="home" class="section">
        <h2 id="galleryTitle">Gallery</h2>
        <div class="gallery">
            <!-- Gallery images -->
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Pro Barbershop. All rights reserved.</p>
    </footer>


</body>
<script>
    function changeLanguage(lang) {
        // Fungsi ini mengubah teks pada elemen-elemen dengan ID yang sesuai dengan bahasa yang dipilih
        if (lang === 'indonesia') {
            document.getElementById('welcomeText').innerText = 'Selamat Datang di Barbershop';
            document.getElementById('introText').innerText = 'Ini adalah tempat di mana Anda dapat memperkenalkan layanan, tentang, atau informasi kontak Anda.';
            document.getElementById('aboutTitle').innerText = 'Tentang Kami';
            document.getElementById('aboutContent').innerText = 'Kami adalah barbershop profesional yang menyediakan layanan berkualitas tinggi.';
            document.getElementById('servicesTitle').innerText = 'Layanan Kami';
            document.getElementById('servicesContent').innerText = 'Jelajahi berbagai layanan kami yang disesuaikan dengan kebutuhan Anda.';
            document.getElementById('contactTitle').innerText = 'Hubungi Kami';
            document.getElementById('contactContent').innerText = 'Hubungi kami untuk membuat janji atau pertanyaan.';
            document.getElementById('galleryTitle').innerText = 'Galeri';
            // Anda dapat menambahkan logika lain untuk perubahan bahasa sesuai kebutuhan
        } else if (lang === 'inggris') {
            document.getElementById('welcomeText').innerText = 'Welcome to Barbershop';
            document.getElementById('introText').innerText = 'This is where you can introduce your services, about, or contact information.';
            document.getElementById('aboutTitle').innerText = 'About Us';
            document.getElementById('aboutContent').innerText = 'We are a professional barbershop providing top-notch services.';
            document.getElementById('servicesTitle').innerText = 'Our Services';
            document.getElementById('servicesContent').innerText = 'Explore our wide range of services tailored for your needs.';
            document.getElementById('contactTitle').innerText = 'Contact Us';
            document.getElementById('contactContent').innerText = 'Get in touch with us for appointments or inquiries.';
            document.getElementById('galleryTitle').innerText = 'Gallery';
        }
        // Anda dapat menambahkan logika lain untuk perubahan bahasa sesuai kebutuhan
    }
</script>

</html>