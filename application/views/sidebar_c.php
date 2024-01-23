<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="bg-gray-100 font-[Poppins]">

    <!-- Navbar -->
    <nav class="bg-blue-900 p-3.5 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <span class="text-4xl cursor-pointer" onclick="Openbar()">
                <i class="bi bi-filter-left"></i>
            </span>
            <div class="flex items-center space-x-2">
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000 p-2 w-[220px] overflow-y-auto text-center bg-blue-900 shadow h-screen">
        <div class="text-gray-50 text-xl">
            <div class="p-2 mt-0.5 flex items-center rounded-md">
                <img src="<?php echo base_url('image/home_page/Logo.png') ?>" style="width: 40px; height: 40px;"></img>
                <h1 class="text-[15px] text-gray-200 font-bold">Barbershop</h1>
                <i class="bi bi-filter-left ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <!-- <hr class="my-2.5 text-gray-900"> -->

            <a href="<?php echo base_url('customer/dashboard') ?>">
                <div class="p-2 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
                    <i class="bi bi-speedometer2"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Dashboard</span>
                </div>
            </a>

            <a href="<?php echo base_url('customer/customer') ?>">
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
                    <i class="bi bi-chat-dots"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Customer</span>
                </div>
            </a>

            <a href="<?php echo base_url('customer/history_customer') ?>">
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
                    <i class="bi bi-clock-history"></i>
                    <span class="text-[15px] ml-4 text-gray-200">History Customer</span>
                </div>
            </a>

            <a onclick="LogoutCustomer()">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-900">
                    <i class="bi bi-door-open"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Logout</span>
                </div>
            </a>

        </div>
    </div>

</body>
<!-- SCRIPT UNTUK SIDEBAR -->
<script>
    function Openbar() {
        document.querySelector('.sidebar').classList.toggle('left-[-300px]')
    }
</script>
<!-- SCRIPT UNTUK SIDEBAR -->


<!-- SCRIPT UNTUK SWEETALERT  -->
<script>
    function LogoutCustomer() {
        Swal.fire({
            title: 'Logout',
            text: 'Are you sure you want to Logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                // Handle logout process here, for example, redirect to logout URL
                window.location.href = "<?php echo base_url('auth/login') ?>";
            }
        });
    }
</script>
<!-- SCRIPT UNTUK SWEERALERT -->

</html>