<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
          /* Button Styles */
        .login-btn {
            padding: 12px 25px;
            background: linear-gradient(to right, #1a1a1a, #ffffff);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 25px;
            font-size: 0.9em;
            transition: background 0.3s ease, transform 0.2s ease-out, box-shadow 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            background: linear-gradient(to right, #000000, #ededed);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white rounded shadow-lg px-8 pt-6 pb-8 mb-4 w-full sm:w-2/3 md:w-1/2 lg:w-1/3">
            <h1 class="text-2xl font-bold mb-6 text-center">Forgot Password</h1>
            <form class="space-y-6">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
                </div>
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
