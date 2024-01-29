<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Add Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <div class="relative min-h-screen md:flex" data-dev-hint="container">
        <?php $this->load->view('sidebar_a') ?>
        <main id="content" class="max-h-screen overflow-y-auto flex-1 p-6 lg:px-8">
            <div class="container mx-auto px-4">
                <div class="grid gap-6 mb-2 mt-2 md:grid-cols-2">
                    <div class="py-2 bg-white shadow border border-gray-900">
                        <p class="text-md text-center font-medium">
                            TOTAL APPROVE
                        </p>
                        <div class="text-3xl text-center text-blue-500 font-semibold mb-2">
                            <span class="fa-stack fa-xs">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa-solid fa-calendar-days fa-stack-1x fa-inverse"></i>
                            </span>
                            Approve
                        </div>
                    </div>

                    <div class="py-2 bg-white shadow border border-gray-900">
                        <p class="text-md text-center font-medium">
                            TOTAL HISTORY
                        </p>
                        <div class="text-3xl text-center text-blue-500 font-semibold mb-2">
                            <span class="fa-stack fa-xs">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa-solid fa-calendar-days fa-stack-1x fa-inverse"></i>
                            </span>
                            Times
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 px-2 mt-6 md:grid-cols-3 rounded-t-lg py-2.5 bg-blue-500 text-white text-xl">
                    <div class="flex justify-center mb-2 md:justify-start md:pl-6 font-semibold">
                        APPROVE DATA
                    </div>
                    <div class="flex flex-wrap justify-center col-span-2 gap-2 md:justify-end">
                    </div>
                </div>
                <div class="overflow-x-auto w-full px-4 bg-white rounded-b-lg shadow">
                    <table class="my-4 w-full divide-y divide-gray-300 text-center">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-3 py-2 text-xs text-gray-500">NO</th>
                                <th class="px-3 py-2 text-xs text-gray-500">ORDER TIME</th>
                                <th class="px-3 py-2 text-xs text-gray-500">ADDRESS</th>
                                <th class="px-3 py-2 text-xs text-gray-500">PHONE NUMBER</th>
                                <th class="px-3 py-2 text-xs text-gray-500">DATE</th>
                                <th class="px-3 py-2 text-xs text-gray-500">STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <?php
                            $no = 0;
                            foreach ($jml_approve as $row) :
                                $no++
                            ?>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $no ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->order_time ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->address ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->phone_number ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->date ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->status ?></td>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
<script>
    function displaySweetAlert() {
        const login_customer = "<?php echo $this->session->flashdata('login_customer'); ?>";

        if (login_customer) {
            Swal.fire({
                title: 'Login successful',
                text: login_customer,
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            });
        }
    }
    window.onload = displaySweetAlert;
</script>

</html>