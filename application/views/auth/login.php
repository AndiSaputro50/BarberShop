<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.min.js"></script>
</head>

<body class="overflow-hidden bg-gray-100">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full md:flex rounded-lg overflow-hidden bg-white shadow-lg">
            <div class="w-full md:w-1/2 p-8 md:order-2">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-semibold">PRO Barbershop</h2>
                </div>
                <div class="my-5 border-b-2 border-gray-300"></div>
                <form action="<?php echo base_url('auth/aksi_login') ?>" enctype="multipart/form-data" method="post">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-8">
                        <div class="#">
                            <label class="block mb-2 font-semibold">Email</label>
                            <input type="email" name="email" class="w-full rounded-lg border p-2 text-sm shadow-sm" placeholder="Enter Your Email" required>
                        </div>
                        <div class="#">
                            <label for="password" class="block mb-2 font-semibold">Password</label>
                            <div class="relative">
                                <input type="password" name="password" class="w-full rounded-lg border p-2 text-sm shadow-sm" placeholder="Enter Your Password" required>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center md:text-left mt-8">
                        <button class="bg-blue-600 hover:bg-blue-800 px-4 py-2 text-white uppercase rounded text-xs tracking-wider transition-transform hover:scale-110 duration-300 ease-in-out" type="submit">Login</button>
                        <a href="#" class="text-blue-600 font-semibold hover:underline ml-4">Forgot Password?</a>
                    </div>
                    <p class="text-sm mt-4 text-center md:text-left">Don't Have Account? <span>Please <a class="text-blue-600 font-semibold" href="register">Register</a></span></p>
                </form>
            </div>
            <div class="w-full md:w-1/2 hidden md:block md:order-1">
                <img src="https://img.freepik.com/free-vector/barbershop-waiting-clients-concept-illustration_114360-13991.jpg?w=740&t=st=1704700636~exp=1704701236~hmac=09bae152c8a8737337a706ecd0318caad7d8f09670bad9fbfc745e975a1c68f1" alt="Sample image">
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
        if (error) {
            Swal.fire({
                icon: 'error',
                title: 'Kesalahan!!',
                text: "Password atau email tidak valid!!",
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
</body>

</html>
