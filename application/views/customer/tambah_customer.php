<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php $this->load->view('sidebar_c') ?>
    <form action="<?php echo base_url('operator/aksi_tambah_customer') ?>" method="post" id="survey-form" class="survey-form ">
        <div class="flex flex-wrap">
            <div class="w-full px-7">
                <label for="name" class="block font-bold">Name</label>
                <input autocomplete="off" type="text" name="name" id="name" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik nama lengkap anda">
            </div>

            <div class="w-full px-7">
                <label for="phone_number" class="block font-bold">Phone Number</label>
                <input autocomplete="off" type="text" name="phone_number" id="phone_number" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik no telepon anda">
            </div>

            <div class="w-full px-7">
                <label for="address" class="block font-bold">Address</label>
                <input autocomplete="off" type="text" name="address" id="address" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik email anda">
            </div>
            <div class="w-full px-7">
                <label for="date" class="block font-bold">Date</label>
                <input autocomplete="off" type="date" name="date" id="date" class="w-full min-h-8 p-4 border-b-2 border-gray-300" placeholder="Ketik email anda">
            </div>
        </div>
        <div class="text-center mt-1">
            <input type="submit" id="submit" class="submit font-size-14px ont-weight-600 text-transform-uppercase letter-spacing-1px color-#f4f4f4 background-color-#4F709C border-3px-solid-#4F709C border-radius-1rem        width-8rem height-2.5rem padding-3px-2rem margin-40px-auto-10px-auto cursor-pointer transition-all .3s" value="Submit">
        </div>
    </form>
</body>

</html>