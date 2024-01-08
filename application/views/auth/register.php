<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <style>
        @media (max-width: 640px) {
            .responsive-image {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="max-w-2xl w-full md:flex rounded-lg overflow-hidden bg-white-100 shadow-lg">
            <div class="w-full md:w-1/2 p-8 hidden md:flex items-center justify-center responsive-image">
                <img src="https://img.freepik.com/premium-vector/barber-styling-client-beard-salon-barbershop_82574-10528.jpg?w=740" alt="Sample image" class="object-cover w-full h-auto">
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-semibold">PRO Barbershop</h2>
                </div>
                <div class="my-5 border-b-2 border-gray-300"></div>
                <form action="<?php echo base_url('auth/aksi_register') ?>" enctype="multipart/form-data" method="post">
                    <div>
                        <label class="sr-only">Email</label>
                        <div class="relative mb-6">
                            <input type="email" name="email" class="w-full rounded-lg border p-4 pr-12 text-sm shadow-sm" placeholder="Enter Your Email" required>
                        </div>
                    </div>
                    <div>
                        <label for="username" class="sr-only">Username</label>
                        <div class="relative mb-2">
                            <input type="text" id="username" name="username" class="w-full rounded-lg border p-4 pr-12 text-sm shadow-sm mb-4" placeholder="Username" required>
                        </div>
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <input type="password" name="password" class="w-full rounded-lg border p-4 pr-12 text-sm shadow-sm" placeholder="Enter Your Password" required>
                            <span class="absolute inset-y-0 right-0 grid place-content-center px-4 cursor-pointer">
                                <i class="fa-solid fa-eye-slash"></i>
                            </span>
                        </div>
                        <p class="text-sm text-rose-700 font-semibold">*Password must be at least 8 characters</p>
                    </div>
                    <div class="text-center md:text-left">
                        <button class="mt-4 bg-blue-600 hover:bg-blue-800 px-4 py-2 text-white uppercase rounded text-xs tracking-wider" type="submit">Register</button>
                    </div>
                    <p class="text-sm mt-2">Do You Have Account? <span>Please <a class="text-blue-600 font-semibold" href="<?php echo base_url() ?>">Login</a></span></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        var error = "<?php echo $error; ?>";
        var error_email = "<?php echo $error_email; ?>";
        if (error) {
            Swal.fire({
                icon: 'error',
                title: 'Kesalahan!!',
                text: "Password harus memiliki minimal 8 karakter!!",
                showConfirmButton: false,
                timer: 3000
            });
        }

        if (error_email) {
            Swal.fire({
                icon: 'error',
                title: 'Kesalahan!!',
                text: "Email sudah digunakan tolong gunakan email yang lain",
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
</body>

</html>
