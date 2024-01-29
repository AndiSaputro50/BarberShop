<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO Barbershop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="overflow-hidden bg-gray-100">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full md:flex rounded-lg overflow-hidden bg-white shadow-lg">
            <div class="w-full md:w-1/2 p-8 md:order-2">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-semibold">VERIVIKASI CODE</h2>
                </div>
                <div class="my-5 border-b-2 border-gray-300"></div>
                <form action="<?php echo base_url('auth/aksi_verifikasi_kode') ?>" enctype="multipart/form-data" method="post">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-8">
                        <div class="#">
                            <label class="block mb-2 font-semibold">Kode</label>
                            <input type="text" name="code" class="w-full rounded-lg border p-2 text-sm shadow-lg" placeholder="Enter Your Code Verification" required>
                        </div>
                    </div>
                    <div class="text-center md:text-left mt-8">
                        <button class="bg-blue-600 hover:bg-blue-800 px-4 py-2 text-white uppercase rounded text-sm tracking-wider shadow-lg" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 hidden md:block md:order-1">
                <img src="<?php echo base_url('image/home_page/pw.png') ?>" alt="Sample image">
            </div>
        </div>
    </div>
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
    </script>

    <script>
        <?php if ($this->session->flashdata('success_forgot')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Message sent!',
                text: '<?php echo $this->session->flashdata('success'); ?>',
                timer: 2500, // Waktu tampilan SweetAlert dalam milidetik (dalam contoh ini, 2500ms atau 2,5 detik)
                showConfirmButton: false // Menghilangkan tombol "OK"
            }).then(() => {
                window.location.href = '<?php echo base_url('auth/verifikasi_kode'); ?>';
            });
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Verification failed!',
                text: '<?php echo $this->session->flashdata('error'); ?>',
                timer: 2500, // Waktu tampilan SweetAlert dalam milidetik (dalam contoh ini, 2500ms atau 2,5 detik)
                showConfirmButton: false // Menghilangkan tombol "OK"
            }).then(() => {
                window.location.href = '<?php echo base_url('auth/verifikasi_kode'); ?>';
            });
        <?php endif; ?>
    </script>
</body>

</html>