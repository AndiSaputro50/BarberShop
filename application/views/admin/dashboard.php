<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- <style>
        .pagination {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .pagination a,
        .pagination strong {
            display: block;
            width: 2rem;
            height: 2rem;
            text-align: center;
            line-height: 2rem;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 4px;
            color: #333;
        }

        .pagination a:hover,
        .pagination strong {
            display: block;
            width: 2rem;
            height: 2rem;
            border: 1px solid #3b82f6;
            /* Ganti dengan warna sesuai kebutuhan Anda */
            background-color: #3b82f6;
            /* Ganti dengan warna sesuai kebutuhan Anda */
            text-align: center;
            line-height: 2rem;
            color: #fff;
        }
    </style> -->
</head>

<body>
    <!-- <div class="relative min-h-screen md:flex" data-dev-hint="container"> -->
    <?php $this->load->view('sidebar_a') ?>
    <!-- <main id="content" class="max-h-screen overflow-y-auto flex-1 p-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid gap-6 mb-2 mt-2 md:grid-cols-2">
                    <div class="py-2 bg-white shadow border border-gray-900">
                        <p class="text-lg text-center font-medium">
                            APPROVE
                        </p>
                        <div class="text-3xl text-center text-blue-700 font-semibold mb-2">
                            <span class="fa-stack fa-xs">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="bi bi-chat-dots"></i>
                            </span>
                        </div>
                    </div>

                    <div class="py-2 bg-white shadow border border-gray-900">
                        <p class="text-lg text-center font-medium">
                            HISTORY APPROVE
                        </p>
                        <div class="text-3xl text-center text-blue-700 font-semibold mb-2">
                            <span class="fa-stack fa-xs">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="bi bi-clock-history"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 px-2 md:grid-cols-3 rounded-t-lg py-2.5 bg-blue-700 text-white text-xl">
                    <div class="flex justify-center mb-2 md:justify-start md:pl-6">
                        CUSTOMER DATA
                    </div>
                    <div class="flex flex-wrap justify-center col-span-2 gap-2 md:justify-end">
                    </div>
                </div>
                <div class="overflow-x-auto w-full px-4 bg-white rounded-b-lg shadow">
                    <table class="my-4 w-full divide-y divide-gray-300 text-center">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-3 py-2 text-xs text-gray-500">NO</th>
                                <th class="px-3 py-2 text-xs text-gray-500">NAME</th>
                                <th class="px-3 py-2 text-xs text-gray-500">ADDRESS</th>
                                <th class="px-3 py-2 text-xs text-gray-500">PHONE NUMBER</th>
                                <th class="px-3 py-2 text-xs text-gray-500">DATE</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">

                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4 text-sm text-gray-500"></td>
                                <td class="px-3 py-4 text-sm text-gray-500 uppercase"></td>
                                <td class="px-3 py-4">
                                    <div class="text-sm text-gray-900">
                                    </div>
                                </td>
                                <td class="px-3 py-4">
                                    <div class="text-sm text-gray-900">
                                    </div>
                                </td>
                                <td class="px-3 py-4">
                                    <div class="text-sm text-gray-900">
                                    </div>
                                </td>
                                <td class="px-3 py-4">
                                    <div class="text-sm text-gray-900">
                                    </div>
                                </td>
                                <td class="px-3 py-4">
                                    <div class="text-sm text-gray-900">
                                    </div>
                                </td>
                                <td class="px-3 py-4">
                                    <div class="text-sm text-gray-900 uppercase">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
                    </div>
                </div>
            </div>
        </main>
    </div> -->

</body>
<script>
    function displaySweetAlert() {
        const login_admin = "<?php echo $this->session->flashdata('login_admin'); ?>";

        if (login_admin) {
            Swal.fire({
                title: 'Login successful',
                text: login_admin,
                icon: 'success',
                showConfirmButton: false, // Untuk menghilangkan tombol OK
                timer: 2500 // Tambahkan timer di sini (dalam milidetik)
            });
        }
    }
    window.onload = displaySweetAlert;
</script>

</html>