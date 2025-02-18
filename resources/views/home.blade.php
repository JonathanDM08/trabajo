<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(90deg, #ffffff 50%, #4ec0e2 50%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-container {
            display: flex;
            width: 60%;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .logo-section {
            background-color: #ffffff;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .logo-section img {
            max-width: 80%;
            height: auto;
        }
        .form-section {
            background-color: #ae00ff;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            padding: 30px;
            border-radius: 0 10px 10px 0;
        }
        .form-section h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-section form {
            width: 100%;
        }
        .form-section form input {
            margin-bottom: 15px;
        }
        .form-section button {
            background-color: #935dc0;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            color: white;
            font-size: 1rem;
        }
        .form-section a {
            color: #b8daff;
            text-decoration: none;
            margin-top: 10px;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-section">
            <img src="https://sl.bing.net/d70xxEK41ng" alt="Logo">
        </div>
    {{--<div class="max-w-5xl mx-auto px-4"> 
    <h1>"Bienvenido a la pagina principal"</h1>

    <x-alert type="">

        <x-slot name="title">
            Titulo de la alerta:
        </x-slot>
        Contenido de la alerta
    </x-alert>

    </div>--}}
    
</body>
</html>