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
                    <h2 class="text-3xl font-semibold">Forgot Password</h2>
                </div>
                <div class="my-5 border-b-2 border-gray-300"></div>
                <form action="<?php echo base_url('auth/aksi_forgot_password') ?>" enctype="multipart/form-data" method="post">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-8">
                        <div class="#">
                            <label class="block mb-2 font-semibold">Email</label>
                            <input type="email" name="email" class="w-full rounded-lg border p-2 text-sm shadow-sm" placeholder="Enter Your Email" required>
                        </div>
                    </div>
                    <div class="text-center md:text-left mt-8">
                        <button class="bg-blue-600 hover:bg-blue-800 px-4 py-2 text-white uppercase rounded text-sm tracking-wider" type="submit">Submit</button>
                        </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 hidden md:block md:order-1">
                <img src="https://img.freepik.com/premium-photo/blue-lock-icon-3d-lock-icon-white-background-3d-illustration_394271-1781.jpg?w=740" alt="Sample image">
            </div>
        </div>
    </div>
</body>
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
        <?php if ($this->session->flashdata('error')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Message failed to send',
                text: '<?php echo $this->session->flashdata('error'); ?>'
            }).then(() => {
                window.location.href = '<?php echo base_url('auth/ganti_password'); ?>';
            });
        <?php } ?>
    </script>
</html>
