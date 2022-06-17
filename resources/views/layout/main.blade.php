<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0F58EB">
    <title>Termicons | {{ $title }}</title>
    <link rel="icon" href="just_logo.svg">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="/assets/js/index.js"></script>
    <script defer src="/assets/js/darkmode.js"></script>
</head>

<body style="font-family: 'Poppins', sans-serif; background-color: var(--body);">
    <div class="container">
        <nav class="navbar navbar-light bg-custom mt-3" style="background-color: rgba(0, 0, 0, 0);">
            <div class="container">
                <a href="/" class="navbar-brand" style="color: #0F58EB; font-weight: bold;"><img src="logo_termicons.svg" alt="" width="150"><span
                        style="font-weight: normal; color: var(--black-30); font-size: 14px;">|</span> <span
                        style="font-weight: normal; color: var(--black-30); font-size: 14px;">Icon Library</span>
                </a>
                <form class="d-flex">
                    <a href="https://facebook.com/mmriz16" target="_blank" class="mx-3" style="width: 25px;">
                        <img src="Assets/SVG/Facebook.svg" alt="">
                    </a>
                    <a href="https://twitter.com/kamado_kaozi" target="_blank" class="mx-3" style=" width: 25px;"><img
                            src="Assets/SVG/Twitter.svg" alt=""></a>
                    <a href="https://instagram.com/mmriz16" target="_blank" class="mx-3" style=" width: 25px;"><img
                            src="Assets/SVG/Instagram.svg" alt=""></a>
                    <a href="https://linkedin.com/in/mmriz16" target="_blank" class="mx-3" style=" width: 25px;"><img
                            src="Assets/SVG/Linkedin.svg" alt=""></a>
                </form>
                <form class="d-flex">
                    <a href="https://github.com/mmriz16/Portfolio" class="btn" target="_blank"
                        style="border: none; background-color: rgba(0, 0, 0, 0); color: var(--black-50); font-size: 15px;">Github</a>
                    <a href="/usage" class="btn"
                        style="border: none; background-color: rgba(0, 0, 0, 0); color: var(--black-50); padding-right: 20px; font-size: 15px;">Usage</a>
                    <a href="https://redma.gumroad.com/l/Termicons" class="btn btn-primary"
                        style="background-color: rgba(15, 88, 235, .1); border: none; color: rgb(15, 88, 235); font-size: 15px;"
                        target="_blank"><i class="ti ti-import" style="margin-right: 10px;"></i>Version 1.0</a>
                </form>
            </div>
        </nav>

        @yield('container')

        <div class="footer">
            <nav class="navbar navbar-light bg-custom" style="background-color: rgba(0, 0, 0, 0);">
                <div class="container my-3">
                    <form class="d-flex">
                        <a href="/cheatsheet" class="mx-2"
                            style="color: var(--black); text-decoration: none;">Cheatsheet</a>
                        <a href="" class="mx-2" style="color: var(--black); text-decoration: none;">Request Icons</a>
                        <a href="/license" class="mx-2" style="color: var(--black); text-decoration: none;">License</a>
                    </form>

                    <form class="d-flex">
                        <a href="https://changelog.mmriz16.com" target="_blank" class="navbar-brand" style="color: var(--black-50); font-weight: bold;">R
                            E D M A
                        </a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</body>

</html>

</body>

</html>