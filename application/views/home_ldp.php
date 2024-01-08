<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRO Barbershop</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
        /* Basic styling - you can add your own styles here */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            height: 100vh;
            overflow: hidden;
            background-image: url('https://img.freepik.com/premium-photo/vintage-barber-chair-modern-tiled-room_926271-2912.jpg?w=826');
            background-size: 100% 100%;
            /* Memastikan gambar meliputi seluruh area */
            background-position: center center;
            box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5), 0 8px 16px rgba(0, 0, 0, 0.3);
            /* Shadow on background */
        }

        .navbar {
            position: fixed;
            top: 0;
            /* Mengubah posisi navbar ke bagian atas */
            width: 100%;
            background-color: #000;
            padding: 15px 0;
            text-align: center;
        }


        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            width: 100%;
            height: calc(100vh - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #000;
            /* Warna teks hitam */
            text-align: center;
            padding-bottom: 70px;
            /* Tinggi navbar */
            box-sizing: border-box;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #fff;
            /* Warna teks hitam */
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #fff;
            /* Warna teks hitam */
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(to right, #1a1a1a, #ffffff);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            transition: background 0.3s ease, transform 0.2s ease-out, box-shadow 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            background: linear-gradient(to right, #000000, #ededed);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome to Barbershop</h1>
        <p>This is where you can introduce your About, Service, Or Contact.</p>
    </div>

    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <img src="<?php echo base_url('image/indo.png')?>" alt="Indonesia Flag">
        <img src="<?php echo base_url('image/uk.png')?>" alt="UK Flag">
    </div>

</body>

</html>