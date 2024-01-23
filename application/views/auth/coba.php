<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100 font-[Poppins]">

  <!-- Navbar -->
  <nav class="bg-blue-900 p-3.5 text-white">
    <div class="container mx-auto flex justify-between items-center">
      <span class="text-4xl cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left"></i>
      </span>
      <div class="flex items-center space-x-2">
        <img src="<?php echo base_url('image/home_page/Logo.png') ?>" style="width: 40px; height: 40px;"></img>
        <h1 class="text-[15px] text-gray-200 font-bold">PRO Barbershop</h1>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000 p-2 w-[220px] overflow-y-auto text-center bg-blue-900 shadow h-screen">
    <div class="text-gray-50 text-xl">
      <div class="p-2.5 mt-1 flex items-center rounded-md">
        <!-- <img src="<?php echo base_url('image/home_page/Logo.png') ?>" style="width: 80px; height: 80px;"></img> -->
        <h1 class="text-[15px] ml-3 text-xl text-gray-200 font-bold">PRO Barbershop</h1>
        <i class="bi bi-filter-left ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
      </div>
      <hr class="my-2.5 text-gray-900">

      <a href="<?php echo base_url('admin/dashboard') ?>">
        <div class="p-2 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
          <i class="bi bi-speedometer2"></i>
          <span class="text-[15px] ml-4 text-gray-200">Dashboard</span>
        </div>
      </a>

      <a href="<?php echo base_url('admin/approve') ?>">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
          <i class="bi bi-chat-dots"></i>
          <span class="text-[15px] ml-4 text-gray-200">Approve</span>
        </div>
      </a>

      <a href="<?php echo base_url('admin/history_approve') ?>">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
          <i class="bi bi-clock-history"></i>
          <span class="text-[15px] ml-4 text-gray-200">History Approve</span>
        </div>
      </a>

      <a href="#">
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
          <i class="bi bi-door-open"></i>
          <span class="text-[15px] ml-4 text-gray-200">Logout</span>
        </div>
      </a>

    </div>
  </div>

  <script>
    function Openbar() {
      document.querySelector('.sidebar').classList.toggle('left-[-300px]')
    }
  </script>
</body>

</html>