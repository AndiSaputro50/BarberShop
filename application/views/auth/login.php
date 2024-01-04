<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            display: flex;
            width: 100%;
            max-width: 500px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .login-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            flex: 1;
            padding: 2rem;
        }

        .login-image img {
            max-width: 100%;
            height: auto;
        }

        /* Hide image on smaller screens */
        @media screen and (max-width: 768px) {
            .login-image {
                display: none;
            }
            .login-form {
                flex: 1 0 100%; /* Update form flex settings for smaller screens */
                padding: 1rem; /* Adjust padding for smaller screens */
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container">
        <div class="form-container">
            <div class="login-image">
                <img src="https://img.freepik.com/free-vector/young-hairdressers-man-professional-equipment-cartoon-vector_24797-1731.jpg?w=740&t=st=1704359159~exp=1704359759~hmac=c060007f697fa2f1610ddfb77a5dc3dc97bf47a965807ffeea8e5ca2767e34b5" alt="Barbershop Image">
            </div>
            <div class="login-form">
                <h1 class="text-3xl font-bold mb-6 text-center">Barbershop Login</h1>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="**********">
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Sign In
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                            href="#">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
