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
            color: #383333;
            overflow-x: hidden;
            /* Prevents horizontal scrollbar */

        }

        .foto-b {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('<?php echo base_url('image/home_page/barber.png') ?>');
            background-size: cover;
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
            margin: 0 5px;
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
            font-size: 3.5em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 20px;
            color: #fff;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #fff;
        }

        /* Style Button */
        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background: #152b6e;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            transition: background 0.3s ease, transform 0.2s ease-out, box-shadow 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Style Button */

        .cta-button:hover {
            transform: translateY(-2px);
            background: #061545;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        /* Style Footer */


        /* Style Footer */

        /* Ukuran Bg */
        .section {
            padding: 5px;
            text-align: center;
        }

        /* Ukuran Bg */

        /* H2 */
        .section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #fff;
        }

        /* H2 */

        /* P */
        .section p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #fff;
        }

        .tentang-k {
            background-color: #000;
        }

        /* P */

        /* Style untuk Gallery */
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

        /* Style untuk Gallery */

        .galeri {
            background-color: #fff;
        }

        .contact {
            background-color: #000;
        }

        .services {
            background-color: #000;
        }

        /* style untuk gambar dari about */
        .about-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @media (min-width: 768px) {

            /* Untuk layar yang lebih besar */
            .about-wrapper {
                flex-direction: row;
            }

            .about-content {
                flex: 1;
                /* Menempatkan konten pada bagian kiri */
            }

            .about-image {
                width: 50%;
                /* Mengatur lebar gambar */
            }

            .klasik-cut {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .modern {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .rs {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

        }
    </style>
</head>

<body>
    <section class="container foto-b">
        <h1 class="mb-4" id="welcomeText">Welcome <span>to </span>Barbershop</h1>
        <!-- <p id="introText">This is where you can introduce your services, about, or contact information.</p> -->
        <a href="<?php echo base_url('auth/login') ?>" class="cta-button">Login</a>

        <div class="navbar">
            <a href="#" onclick="changeLanguage('indonesia')">
                <img src="image/home_page/indo.png" alt="Flag IND " width="32" height="30">
            </a>
            <a href="#" onclick="changeLanguage('inggris')">
                <img src="image/home_page/inggris.png" alt="Flag UK " width="32" height="30">
            </a>
            <a href="#" id="home">Home</a>
            <a href="#" id="about">About</a>
            <a href="#" id="services">Services</a>
            <a href="#" id="contact">Contact</a>
        </div>
    </section>

    <section id="about" class="section tentang-k">
        <div class="about-wrapper">
            <div class="about-content">
                <h2 id="aboutTitle">About Us</h2>
                <p id="aboutContent">We are a professional barbershop providing top-notch services.</p>
                <p id="aboutContent2">At our barbershop, we take pride in our craft and are dedicated to offering the highest quality grooming services. Our team of skilled barbers is committed to creating personalized and stylish looks for each client. Whether you're looking for a classic haircut, a modern style, or a clean shave, we've got you covered.</p>
                <p id="aboutContent3">With a welcoming atmosphere and attention to detail, we strive to make every visit to our barbershop an enjoyable and refreshing experience. Customer satisfaction is our priority, and we aim to exceed your expectations with every visit.</p>
            </div>
            <div class="about-image">
                <img src="image/home_page/bbs.jpg" alt="About Us Image" width="70%" class="about-img">
            </div>
        </div>
    </section>


    <section id="#" class="services">
        <h2 id="servicesTitle1" style="color: white;">Services</h2>
        <p id="content1">Unveil the artistry of our skilled barbers and indulge in an array of personalized services designed just for you.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="klasik-cut">
                <div class="kc">
                    <img src="image/home_page/style.jpg" alt="Service 1" width="69%" class="h-auto mb-4">
                    <h3 id="servicesTitle2" style="color: white;">Classic Cuts</h3>
                    <p id="content2">Our classic cuts ensure you leave looking sharp and confident.</p>
                </div>
            </div>
            <div class="modern">
                <div class="ms">
                    <img src="image/home_page/barbersp.jpg" alt="Service 2" width="68%" class="h-auto mb-4">
                    <h3 id="servicesTitle3" style="color: white;">Modern Styles</h3>
                    <p id="content3">Stay on-trend with our modern styles, crafted to elevate your look with a touch of contemporary flair.</p>
                </div>
            </div>
            <div class="rs">
                <div class="rrss">
                    <img src="image/home_page/barbersp.jpg" alt="Service 3" width="68%" class="h-auto mb-4">
                    <h3 id="servicesTitle4" style="color: white;">Relaxing Shaves</h3>
                    <p id="content4">Indulge in the art of grooming with our relaxing shaves, leaving your skin refreshed and rejuvenated.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact">
        <h2 id="contactTitle">Contact Us</h2>
        <p id="contactContent">Get in touch with us for appointments or inquiries.</p>
    </section>

    <section id="home" class="galeri">
        <h2 id="galleryTitle" class="text-center">Gallery</h2>
        <div class="gallery">
            <figure>
                <img src="<?php echo base_url('image/home_page/qu.jpg') ?>" alt="Undercut">
                <figcaption>Quiff</figcaption>
            </figure>
            <figure>
                <img src="<?php echo base_url('image/home_page/sp.jpg') ?>" alt="Pompadour">
                <figcaption>Slicked Back</figcaption>
            </figure>
            <figure>
                <img src="<?php echo base_url('image/home_page/fhu.jpg') ?>" alt="Taper cut">
                <figcaption>Faux Hawk</figcaption>
            </figure>
            <figure>
                <img src="<?php echo base_url('image/home_page/buzz.jpg') ?>" alt="Comb over">
                <figcaption>Buzz Undercut</figcaption>
            </figure>
        </div>
    </section>


    <footer style="background-color: #152b6e; color: #fff; padding: 8px 0;">
        <div style="display: flex; justify-content: space-around; align-items: center;">
        </div>
        <div style="margin-top: 10px; text-align: center;">
            <p>&copy; 2023 PRO Barbershop. All rights reserved</p>
        </div>
    </footer>



</body>
<!-- Script Ganti Bahasa -->
<script>
    function changeLanguage(lang) {
        // Fungsi ini mengubah teks pada elemen-elemen dengan ID yang sesuai dengan bahasa yang dipilih
        if (lang === 'inggris') {
            document.getElementById('about').innerText = 'About'
            document.getElementById('services').innerText = 'Services'
            document.getElementById('contact').innerText = 'Contact'
            document.getElementById('welcomeText').innerText = 'Welcome to Barbershop';
            document.getElementById('aboutTitle').innerText = 'About Us';
            document.getElementById('aboutContent').innerText = 'We are a professional barbershop providing top-notch services.';
            document.getElementById('aboutContent2').innerText = 'At our barbershop, we take pride in our craft and are dedicated to offering the highest quality grooming services. Our team of skilled barbers is committed to creating personalized and stylish looks for each client. Whether youre looking for a classic haircut, a modern style, or a clean shave, weve got you covered.';
            document.getElementById('aboutContent3').innerText = 'With a welcoming atmosphere and attention to detail, we strive to make every visit to our barbershop an enjoyable and refreshing experience. Customer satisfaction is our priority, and we aim to exceed your expectations with every visit.';

            document.getElementById('servicesTitle1').innerText = 'Services';
            document.getElementById('content1').innerText = 'Unveil the artistry of our skilled barbers and indulge in an array of personalized services designed just for you.';
            document.getElementById('servicesTitle2').innerText = 'Classic Cuts';
            document.getElementById('content2').innerText = 'Our classic cuts ensure you leave looking sharp and confident.'
            document.getElementById('servicesTitle3').innerText = 'Modern Styles'
            document.getElementById('content3').innerText = 'Stay on-trend with our modern styles, crafted to elevate your look with a touch of contemporary flair.'
            document.getElementById('servicesTitle4').innerText = 'Relaxing Shaves'
            document.getElementById('content4').innerText = 'Indulge in the art of grooming with our relaxing shaves, leaving your skin refreshed and rejuvenated.'

            document.getElementById('servicesContent').innerText = 'Explore our wide range of services tailored for your needs.';
            document.getElementById('contactTitle').innerText = 'Contact Us';
            document.getElementById('contactContent').innerText = 'Get in touch with us for appointments or inquiries.';
            document.getElementById('galleryTitle').innerText = 'Gallery';
            // Anda dapat menambahkan logika lain untuk perubahan bahasa sesuai kebutuhan
        } else if (lang === 'indonesia') {
            document.getElementById('about').innerText = 'Tentang';
            document.getElementById('services').innerText = 'Layanan';
            document.getElementById('contact').innerText = 'Hubungi';
            document.getElementById('welcomeText').innerText = 'Selamat Datang di Barbershop';
            document.getElementById('aboutTitle').innerText = 'Tentang Kami';
            document.getElementById('aboutContent').innerText = 'Kami adalah barbershop profesional yang menyediakan layanan berkualitas tinggi.';
            document.getElementById('aboutContent2').innerText = 'Di tempat pangkas rambut kami, kami bangga dengan keahlian kami dan berdedikasi untuk menawarkan layanan perawatan dengan kualitas terbaik. Tim tukang cukur terampil kami berkomitmen untuk menciptakan penampilan yang dipersonalisasi dan bergaya untuk setiap klien. Baik Anda mencari potongan rambut klasik, gaya modern, atau pencukuran bersih, kami siap membantu Anda.';
            document.getElementById('aboutContent3').innerText = 'Dengan suasana ramah dan perhatian terhadap detail, kami berusaha membuat setiap kunjungan ke pangkas rambut kami menjadi pengalaman yang menyenangkan dan menyegarkan. Kepuasan pelanggan adalah prioritas kami, dan kami bertujuan untuk melampaui harapan Anda dalam setiap kunjungan.';

            document.getElementById('servicesTitle1').innerText = 'Layanan';
            document.getElementById('content1').innerText = 'Temukan seni dari tukang cukur terampil kami dan nikmati serangkaian layanan pribadi yang dirancang khusus untuk Anda.';
            document.getElementById('servicesTitle2').innerText = 'Potongan Klasik';
            document.getElementById('content2').innerText = 'Potongan klasik kami memastikan Anda tampil tajam dan percaya diri.'
            document.getElementById('servicesTitle3').innerText = 'Gaya Modern'
            document.getElementById('content3').innerText = 'Tetap mengikuti tren dengan gaya modern kami, dibuat untuk meningkatkan penampilan Anda dengan sentuhan kontemporer.'
            document.getElementById('servicesTitle4').innerText = 'Pencukuran Menenangkan'
            document.getElementById('content4').innerText = 'Manjakan diri dalam seni perawatan dengan pencukuran kami yang menenangkan, membuat kulit Anda segar dan diremajakan.'

            document.getElementById('servicesContent').innerText = 'Jelajahi berbagai layanan kami yang disesuaikan dengan kebutuhan Anda.';
            document.getElementById('contactTitle').innerText = 'Hubungi Kami';
            document.getElementById('contactContent').innerText = 'Hubungi kami untuk membuat janji atau pertanyaan.';
            document.getElementById('galleryTitle').innerText = 'Galeri';
        }
        // Anda dapat menambahkan logika lain untuk perubahan bahasa sesuai kebutuhan
    }
</script>
<!-- Script Ganti Bahasa -->

</html>