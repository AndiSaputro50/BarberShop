<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

</head>

<body class="bg-gray-100 md:flex">
    <div class="left-0">
    <?php $this->load->view('sidebar_c'); ?>
    </div>

    <div id="main-content" class="bg-white p-6 rounded-md shadow-md w-full max-w-md mx-auto my-36">
        <h2 class="text-2xl font-semibold mb-6 text-center">Add Customer</h2>

        <form id="add-customer-form" action="<?php echo base_url('customer/aksi_tambah_customer') ?>" method="POST" class="space-y-4">
            <div class="flex flex-col mb-4">
                <label for="order_time" class="block text-sm font-medium text-gray-600">Order Time</label>
                <input type="time" id="order_time" name="order_time" class="mt-1 p-2 w-full border rounded-md shadow-lg" required>
            </div>

            <div class="flex flex-col mb-4">
                <label for="address" class="block text-sm font-medium text-gray-600">Address</label>
                <input type="text" id="address" name="address" class="mt-1 p-2 w-full border rounded-md shadow-lg" required>
            </div>

            <div class="flex flex-col mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-600">Phone Number</label>
                <input type="number" id="phone_number" name="phone_number" class="mt-1 p-2 w-full border rounded-md shadow-lg" required>
            </div>

            <div class="flex flex-col mb-4">
                <label for="date" class="block text-sm font-medium text-gray-600">Date</label>
                <input type="date" id="date" name="date" class="mt-1 p-2 w-full border rounded-md shadow-lg" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg">Add Customer</button>
            </div>
        </form>
    </div>
</body>

</html>