<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Optional: You can add your custom styles here */
    /* Let the main content scroll */
    main {
      overflow-y: auto;
      /* Hanya konten yang akan memiliki scrollbar jika melebihi ukuran layar */
      height: calc(100vh - 4rem);
      /* Sesuaikan dengan tinggi navbar */
    }

    /* Untuk mengatur tinggi main dan menghindari sidebar ikut terkena scroll */
    body {
      overflow: hidden;
      /* Menghindari scroll pada body */
    }

    /* Jika Anda ingin mengatur tinggi sidebar tetap statis */
    #sidebar {
      height: calc(100vh - 4rem);
      /* Sesuaikan dengan tinggi navbar */
      overflow-y: auto;
      /* Jika konten di sidebar melebihi ukuran layar */
    }
  </style>
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-gray-600 text-white p-6">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <button id="sidebarToggle" class="text-white focus:outline-none md:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
      <!-- Add your navbar links or content here -->
    </div>
  </nav>

  <!-- Sidebar and Content -->
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-gray-600 text-gray-100 hidden md:block">
      <!-- Sidebar content -->
      <div class="p-4">
        <!-- Sidebar header -->
        <!-- Remove the text for Sidebar -->
        <!-- Sidebar links -->
        <ul>
          <li class="py-2">
            <a href="#" class="block hover:text-white">Dashboard</a>
          </li>
          <li class="py-2">
            <a href="#" class="block hover:text-white">LogOut</a>
          </li>
          <li class="py-2">
            <a href="#" class="block hover:text-white">Akun</a>
          </li>
          <!-- Add more links as needed -->
        </ul>
      </div>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-6">
      <!-- Dashboard content -->

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sample cards for dashboard -->
        <div class="bg-white p-12 rounded shadow-lg flex items-center">
          <span class="text-4xl text-gray-500 mr-4">
            <i class="fas fa-chart-bar"></i>
          </span>
          <div>
            <h2 class="text-lg font-semibold mb-2">Card 1</h2>
            <p>Card content goes here...</p>
          </div>
        </div>
        <div class="bg-white p-12 rounded shadow-lg flex items-center">
          <span class="text-4xl text-gray-500 mr-4">
            <i class="fas fa-chart-bar"></i>
          </span>
          <div>
            <h2 class="text-lg font-semibold mb-2">Card 1</h2>
            <p>Card content goes here...</p>
          </div>
        </div>
        <div class="bg-white p-12 rounded shadow-lg flex items-center">
          <span class="text-4xl text-gray-500 mr-4">
            <i class="fas fa-calendar-alt"></i>
          </span>
          <div>
            <h2 class="text-lg font-semibold mb-2">Card 2</h2>
            <p>Card content goes here...</p>
          </div>
        </div>
        <div class="bg-white p-12 rounded shadow-lg flex items-center">
          <span class="text-4xl text-gray-500 mr-4">
            <i class="fas fa-user"></i>
          </span>
          <div>
            <h2 class="text-lg font-semibold mb-2">Card 3</h2>
            <p>Card content goes here...</p>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
      document.getElementById('sidebar').classList.toggle('hidden');
    });
  </script>
</body>

</html>