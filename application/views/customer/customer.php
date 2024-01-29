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
        <?php $this->load->view('sidebar_c') ?>
        <main id="content" class="max-h-screen overflow-y-auto flex-1 p-6 lg:px-8">

            <div class="text-right py-1 mt-4">
                <a href="tambah_customer">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white py-2 px-4 rounded">
                        Add
                    </button>
                </a>
            </div>

            <div class="grid grid-cols-1 px-2 mt-6 md:grid-cols-3 rounded-t-lg py-2.5 bg-blue-500 text-white text-xl">
                <div class="flex justify-center mb-2 md:justify-start md:pl-6 font-semibold">
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
                            <th class="px-3 py-2 text-xs text-gray-500">ORDER TIME</th>
                            <th class="px-3 py-2 text-xs text-gray-500">ADDRESS</th>
                            <th class="px-3 py-2 text-xs text-gray-500">PHONE NUMBER</th>
                            <th class="px-3 py-2 text-xs text-gray-500">DATE</th>
                            <th class="px-3 py-2 text-xs text-gray-500">STATUS</th>
                            <th class="px-3 py-2 text-xs text-gray-500">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        <?php
                        $no = 0;
                        foreach ($customer as $row) :
                            $no++
                        ?>
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $no ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->order_time ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->address ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->phone_number ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->date ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->status ?></td>
                                <td data-cell="ACTION" class="ml-20 px-3 py-4 flex">
                                    <a href="<?php echo base_url('customer/edit_customer/') . $row->id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded ml-2">
                                        <span class="">
                                            <i class="bi bi-pencil"></i>
                                        </span>
                                    </a>
                                    <button onclick="hapus(<?php echo $row->id ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded ml-3">
                                        <span class="">
                                            <i class="bi bi-trash"></i>
                                        </span>
                                    </button>
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

    function hapus(id) {
        swal.fire({
            title: 'Be Sure to Delete This Data?',
            text: "Data cannot be returned",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted successfully',
                    showConfirmButton: false,
                    timer: 1500,

                }).then(function() {
                    window.location.href = "<?php echo base_url('customer/hapus_customer/') ?>" + id;
                });
            }
        });
    }

    function displaySweetAlert() {
        const successMessage = "<?php echo $this->session->flashdata('success_cs'); ?>";
        const errorMessage = "<?php echo $this->session->flashdata('error_cs'); ?>";

        if (successMessage) {
            Swal.fire({
                title: 'Success',
                text: successMessage,
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            });
        }

        if (errorMessage) {
            Swal.fire({
                title: 'Error',
                text: errorMessage,
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
        }
    }

    // Call the function when the page loads
    window.onload = displaySweetAlert;
</script>

</html>