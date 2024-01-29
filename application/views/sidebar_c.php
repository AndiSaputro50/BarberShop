<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <style>
        #sidebar {
            --tw-translate-x: -100%;
            height: 100vh;
            font-family: sans-serif, Poopins;
        }

        #menu-close-icon {
            display: none;
        }

        #menu-open:checked~#sidebar {
            --tw-translate-x: 0;
        }

        #menu-open:checked~* #mobile-menu-button {
            background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
        }

        #menu-open:checked~* #menu-open-icon {
            display: none;
        }

        #menu-open:checked~* #menu-close-icon {
            display: block;
        }

        @media (min-width: 768px) {
            #sidebar {
                --tw-translate-x: 0;
            }
        }

        @media (max-width: 767px) {
            #sidebar {
                order: 2;
                /* Mengubah urutan tampilan untuk mobile */
            }

            nav[data-dev-hint="second-main-navigation"] {
                order: 3;
                /* Mengubah urutan tampilan untuk mobile */
            }

            nav[data-dev-hint="second-main-navigation"] svg {
                display: inline-block;
                /* Menunjukkan ikon di tampilan mobile */
            }
        }

        .icoon {
            filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(26deg) brightness(104%) contrast(101%);
        }

        .active {
            background: #06d853;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <input type="checkbox" id="menu-open" class="hidden" />

    <header class="bg-blue-900 text-blue-100 flex justify-between md:hidden" data-dev-hint="mobile menu bar">
        <a href="#" class="block p-4 text-white font-bold no-underline">
            Barbershop
        </a>

        <label for="menu-open" id="mobile-menu-button" class="flex items-center m-2 p-2 focus:outline-none hover:text-white hover:bg-blue-700 rounded-md">
            <svg id="menu-open-icon" class="h-6 w-6 transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="menu-close-icon" class="h-6 w-6 transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </label>
    </header>

    <!-- kode sidebar -->
    <aside id="sidebar" class="max-h-screen bg-blue-900 text-blue-100 md:w-64 w-3/3 space-y-6 pt-2 px-0 absolute z-50 inset-y-0 left-0 
    transform md:relative md:translate-x-0 transition duration-700 ease-in-out md:justify-between md:flex md:flex-col overflow-y-auto" data-dev-hint="sidebar; px-0 for frameless; px-2 for visually inset the navigation">
        <!-- kode sidebar -->
        <div class="flex flex-col space-y-1" data-dev-hint="optional div for having an extra footer navigation">
            <div class="text-white flex-1 items-center px-4">
                <a href="#" class="flex items-center ps-0 mb-1">
                    <img src="<?php echo base_url('image/home_page/Logo.png') ?>" class="h-12 me-3 sm:h-12" alt="Barbershop Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PRO Barbershop</span>
                </a>
                <!-- <div class="text-lg font-semibold">Barbershop</div> -->
            </div>
            <hr />
            <nav data-dev-hint="main navigation">
                <a href="<?php echo base_url('customer/dashboard') ?>" class="flex items-center py-3 text-white px-4 transition duration-300 hover:bg-blue-700 no-underline gap-2" activeclass="active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                    </svg>
                    <span class="text-[18px] ml-2">Dashboard</span>
                </a>
                <a href="<?php echo base_url('customer/customer') ?>" class="flex items-center py-3 text-white px-4 transition duration-300 hover:bg-blue-700 no-underline gap-2" activeclass="active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                    <span class="text-[18px] ml-2">Customer</span>
                </a>
                <a href="<?php echo base_url('customer/history_customer') ?>" class="flex items-center py-3 text-white px-4 transition duration-300 hover:bg-blue-700 no-underline gap-2" activeclass="active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <span class="text-[18px] ml-2">History Customer</span>
                </a>

                <!-- <div class="m-12 ml-14 mt-[30vh] text-2xl ">
                    <span id="current-time"></span>
                </div> -->
            </nav>
        </div>
        <a onclick="logout()" class="flex items-center py-3 text-white px-4 transition duration-300 hover:bg-blue-700 no-underline gap-2" activeclass="active">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-door-open mt-[50vh]" viewBox="0 0 16 16">
                <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
            </svg>
            <span class="text-[18px] mt-[50vh] ml-2">Logout</span>
        </a>
    </aside>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function toggleSidebar() {
            var menuOpen = document.getElementById("menu-open");
            var sidebar = document.getElementById("sidebar");
            var menuOpenIcon = document.getElementById("menu-open-icon");
            var menuCloseIcon = document.getElementById("menu-close-icon");

            if (menuOpen.checked) {
                sidebar.style.transform = "translateX(0)";
                menuOpenIcon.style.display = "none";
                menuCloseIcon.style.display = "block";
            } else {
                sidebar.style.transform = "translateX(-100%)";
                menuOpenIcon.style.display = "block";
                menuCloseIcon.style.display = "none";
            }
        }

        function logout() {
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

        // Memanggil toggleSidebar() saat tombol hamburger diklik

        // document.getElementById("mobile-menu-button").addEventListener("click", toggleSidebar);
        // // Fungsi untuk mengupdate waktu setiap detik
        // function updateClock() {
        //     var currentTime = new Date();
        //     var options = {
        //         timeZone: 'Asia/Jakarta',
        //         hour12: false,
        //         hour: '2-digit',
        //         minute: '2-digit',
        //         second: '2-digit'
        //     };
        //     var formattedTime = currentTime.toLocaleString('id-ID', options);
        //     var formattedDate = currentTime.toLocaleString('id-ID', {
        //         timeZone: 'Asia/Jakarta',
        //         year: 'numeric',
        //         month: '2-digit',
        //         day: '2-digit'
        //     });
        //     var dateTimeString = formattedDate + ' ' + formattedTime;
        //     document.getElementById("current-time").innerHTML = dateTimeString;
        // }

        // // Memanggil fungsi pertama kali
        // updateClock();

        // // Mengatur interval untuk memperbarui waktu setiap 1 detik (1000 ms)
        // setInterval(updateClock, 1000);
    </script>
</body>

</html>