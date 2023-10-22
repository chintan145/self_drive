<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Thank You Page</title>
</head>
<body>
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            animation: fade-in 1.5s;
        }

        header {
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        .content {
            text-align: center;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        a {
            display: block;
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

    </style>
    <div class="container">
        <header>
            <h1>Thank You!</h1>
        </header>
        <div class="content">
            <p>Your submission has been received. We Are Contact you Soon.</p>
            <a href="<?= base_url('/') ?>">Back to Home</a>
        </div>
    </div>
</body>
</html>
