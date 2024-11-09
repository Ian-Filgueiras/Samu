<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Emergência - SAMU')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/img/Samu192.png" type="image/x-icon">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 56px);
        }
    </style>
</head>

<body>

    <nav class="navbar bg-dark fixed-top">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="/img/Samu192.png" width="70" height="70" alt="Logo">
            </a>
        </div>
    </nav>

    <div class="content-container">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>