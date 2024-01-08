<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Barbershop - Your Ultimate Grooming Destination</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Kustomisasi warna tema */
    :root {
      --primary-color: #fff;
      /* Warna merah */
      --secondary-color: #000000;
      /* Warna hitam */
    }

    /* Gaya umum */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #272829;
      color: var(--secondary-color);
      background-image: url('background-image.jpg');
      /* Ganti dengan URL gambar yang Anda inginkan */
      background-size: cover;
      background-repeat: no-repeat;

    }

    h1 {
      color: #E8E8E8;
    }

    header,
    footer {
      background-color: var(--primary-color);
    }

    .text-primary {
      color: var(--primary-color);
    }

    /* Gaya khusus untuk model rambut */
    .hair-model-card {
      transition: transform 0.3s ease-in-out;
    }

    .hair-model-card:hover {
      transform: scale(1.05);
    }
  </style>
</head>

<body>

  <header class="p-8 text-center text-white">
    <h1 class="text-3xl font-bold">Welcome to The Clipper's Den</h1>
    <p class="mt-4">Where Style Meets Precision</p>
  </header>

  <main class="p-8">
    <h2 class="text-2xl font-semibold">Experience Excellence in Grooming</h2>
    <p class="mt-4">At The Clipper's Den, we craft more than just haircuts; we sculpt experiences. Our skilled barbers ensure you leave feeling confident, rejuvenated, and ready to conquer the world.</p>

    <button class="accordion bg-gray-100 p-2 mt-4 w-full text-left">Our Services</button>
    <div class="panel bg-white p-4" style="display: none;">
      <p>From classic cuts to modern styles, we offer:</p>
      <ul class="list-disc pl-8">
        <li>Traditional Haircuts</li>
        <li>Beard Trims & Styling</li>
        <li>Hot Towel Shaves</li>
        <li>Facial Treatments</li>
        <li>And Much More</li>
      </ul>
    </div>

    <h3 class="text-xl font-semibold mt-8">Our Hair Models</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
      <div class="hair-model-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg">
        <img src="haircut1.jpg" alt="Haircut Model 1" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-semibold">Classic Cut</h4>
          <p class="mt-2">Timeless style for the modern gentleman.</p>
          <p class="mt-4">Price: $25</p>
        </div>
      </div>
      <div class="hair-model-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg">
        <img src="haircut2.jpg" alt="Haircut Model 2" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-semibold">Modern Fade</h4>
          <p class="mt-2">A contemporary look with a touch of sophistication.</p>
          <p class="mt-4">Price: $30</p>
        </div>
      </div>
      <div class="hair-model-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg">
        <img src="haircut3.jpg" alt="Haircut Model 3" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-semibold">Beard Styling</h4>
          <p class="mt-2">Crafting the perfect beard for your style.</p>
          <p class="mt-4">Price: $20</p>
        </div>
      </div>
      <div class="hair-model-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg">
        <img src="haircut4.jpg" alt="Haircut Model 4" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-semibold">Texturized Crop</h4>
          <p class="mt-2">Modern style with textured layers.</p>
          <p class="mt-4">Price: $35</p>
        </div>
      </div>
      <div class="hair-model-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg">
        <img src="haircut5.jpg" alt="Haircut Model 5" class="w-full h-48 object-cover">
        <div class="p-4">
          <h4 class="text-lg font-semibold">Undercut Design</h4>
          <p class="mt-2">Edgy and unique designs for the bold.</p>
          <p class="mt-4">Price: $40</p>
        </div>
      </div>
    </div>

    <h3 class="text-xl font-semibold mt-8">Visit Us Today</h3>
    <p class="mt-4">Join us at our premium location:</p>
    <address class="mt-2">
      <p>123 Grooming Avenue,</p>
      <p>New Style City, USA</p>
    </address>

  </main>

  <footer class="bg-primary text-secondary p-8 text-center md:flex md:flex-wrap md:justify-center md:items-center">
    <div class="inline-block mx-4">
      <h4 class="text-xl font-semibold">Quick Links</h4>
      <ul class="mt-2">
        <li><a href="about.html" class="hover:text-secondary">About Us</a></li>
        <li><a href="contact.html" class="hover:text-secondary">Contact</a></li>
        <li><a href="services.html" class="hover:text-secondary">Services</a></li>
      </ul>
    </div>
    <div class="inline-block mx-4">
      <h4 class="text-xl font-semibold">Contact Information</h4>
      <p class="mt-2">123 Grooming Avenue,</p>
      <p>New Style City, USA</p>
      <p>Email: info@clippersden.com</p>
      <p>Phone: 123-456-7890</p>
    </div>
    <div class="inline-block mx-4">
      <h4 class="text-xl font-semibold">Follow Us</h4>
      <a href="https://facebook.com" class="block mt-2 hover:text-secondary">Facebook</a>
      <a href="https://twitter.com" class="block hover:text-secondary">Twitter</a>
      <a href="https://instagram.com" class="block hover:text-secondary">Instagram</a>
    </div>
    <div class="inline-block mx-4">
      <p class="">&copy; 2024 The Clipper's Den</p>
      <p><a href="privacy.html" class="hover:text-secondary">Privacy Policy</a> | <a href="terms.html" class="hover:text-secondary">Terms of Use</a></p>
    </div>
  </footer>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>

</body>

</html> -->

<?php
$error = $this->session->flashdata('error');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="overflow-hidden">
  <div class="h-screen">
    <section class="flex flex-col md:flex-row justify-center space-y-10 md:space-y-0 md:space-x-16 items-center md:my-0">
      <div class="">
        <section class="h-screen flex flex-col md:flex-row justify-center space-y-10 md:space-y-0 md:space-x-16 items-center my-2 mx-5 md:mx-0 md:my-0">
          <div class="md:w-1/3 max-w-base">
            <img src="https://img.freepik.com/premium-vector/baby-boys-with-cool-haircut-visiting-barbershop_82574-10701.jpg" alt="Sample image" style="overflow: hidden;">
          </div>
          <div class="md:w-1/3 max-w-lg">
            <div class="text-center md:text-left">
              <label class="mr-1 text-xl font-semibold">PRO Barbershop</label>
            </div>
            <form action="<?php echo base_url('auth/aksi_login') ?>" enctype="multipart/form-data" method="post">
  
              <div class="relative mb-4 flex flex-wrap items-stretch">
                <span class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200" id="basic-addon1">@</span>
                <input type="text" class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" placeholder="Enter Your Email" aria-label="Email" aria-describedby="basic-addon1" />
              </div>

              <div>
                <label for="password" class="sr-only">Password</label>
                <div class="relative mb-6">
                  <span class="absolute inset-y-0 left-0 flex items-center pl-3"></span>
                  <input type="password" name="password" class="w-full rounded-lg border p-4 pr-12 text-sm shadow-sm" placeholder="Enter Your Password" required>
                  <span class="absolute inset-y-0 right-0 grid place-content-center px-4 cursor-pointer">
                    <i class="fa-regular fa-eye-slash"></i>
                  </span>
                </div>
              </div>
              <div class="text-center md:text-left">
                <button class="mt-4 bg-blue-600 hover:bg-blue-800 px-4 py-2 text-white uppercase rounded text-xs tracking-wider transition-transform hover:scale-110 duration-300 ease-in-out" type="submit">Login</button>
              </div>
              <p class="text-sm mt-2">Don't Have Account? <span>Please <a class="text-blue-600 font-semibold" href="register">Register</a></span></p>
            </form>
          </div>
        </section>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const passwordInput = document.querySelector('input[type="password"]');
          const togglePasswordButton = document.querySelector('.fa-eye-slash');

          togglePasswordButton.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
              passwordInput.type = 'text';
              togglePasswordButton.className = 'fa-regular fa-eye';
            } else {
              passwordInput.type = 'password';
              togglePasswordButton.className = 'fa-regular fa-eye-slash';
            }
          });
        });
        var error = "<?php echo $error; ?>";
        if (error) {
          Swal.fire({
            icon: 'error',
            title: 'Kesalahan!!',
            text: "Password atau email tidak valid!!",
            showConfirmButton: false,
            timer: 3000
          });
        }
      </script>
</body>

</html>