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
                    <h2 class="text-3xl font-semibold">Change Password</h2>
                </div>
                <div class="my-5 border-b-2 border-gray-300"></div>
                <form action="<?php echo base_url('auth/aksi_ganti_password') ?>" enctype="multipart/form-data" method="post">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-8">
                        <div class="#">
                            <label class="block mb-2 font-semibold">Password Lama</label>
                            <div class="relative">
                                <input type="password" name="password_lama" class="w-full rounded-lg border p-2 text-sm shadow-sm" placeholder="Enter Your Password" required>
                                <span class="absolute right-3 top-2 cursor-pointer" id="togglePassword">
                                    <i class="fas fa-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="#">
                            <label class="block mb-2 font-semibold">Password Baru</label>
                            <div class="relative">
                                <input type="password" name="password_baru" class="w-full rounded-lg border p-2 text-sm shadow-sm" placeholder="Enter Your Password" required>
                                <span class="absolute right-3 top-2 cursor-pointer" id="togglePasswordNew">
                                    <i class="fas fa-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center md:text-left mt-8">
                        <button class="bg-blue-600 hover:bg-blue-800 px-4 py-2 text-white uppercase rounded text-sm tracking-wider" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 hidden md:block md:order-1">
                <img src="<?php echo base_url('image/home_page/fp.png') ?>" alt="Sample image">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.getElementById('togglePassword');
            const togglePasswordNew = document.getElementById('togglePasswordNew');
            const passwordInput = document.querySelector('input[name="password_lama"]');
            const passwordNewInput = document.querySelector('input[name="password_baru"]');

            togglePassword.addEventListener('click', function() {
                togglePasswordIcon(passwordInput);
            });

            togglePasswordNew.addEventListener('click', function() {
                togglePasswordIcon(passwordNewInput);
            });

            function togglePasswordIcon(inputField) {
                if (inputField.type === 'password') {
                    inputField.type = 'text';
                    togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
                } else {
                    inputField.type === 'password';
                    togglePassword.innerHTML = '<i class="fas fa-eye-slash"></i>';
                }
            }
        });
    </script>

    <script>
        <?php if ($this->session->flashdata('error')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Failed to replace!',
                text: '<?php echo $this->session->flashdata('error'); ?>'
            }).then(() => {
                window.location.href = '<?php echo base_url('auth/ganti_password'); ?>';
            });
        <?php } ?>

        <?php if ($this->session->flashdata('success_code')) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Verification successful!',
                text: '<?php echo $this->session->flashdata('success'); ?>',
                showConfirmButton: false,
                timer: 2500
            }).then(() => {
                window.location.href = '<?php echo base_url('auth/ganti_password'); ?>';
            });
        <?php } ?>
    </script>
</body>

</html>