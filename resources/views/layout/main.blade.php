<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0F58EB">
    <title>Termicons | {{ $title ?? "404 Page not found" }}</title>
    <link rel="icon" href="<?= url('just_logo.svg') ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/termicons@1.0.3/css/termicons.min.css"rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    </style>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="<?= url('js/index.js') ?>"></script>
</head>

<body style="font-family: 'Poppins', sans-serif; background-color: var(--body);">
    <div class="container">
        <nav class="navbar navbar-light bg-custom mt-3" style="background-color: rgba(0, 0, 0, 0);">
            <div class="container">
                <a href="/" class="navbar-brand" style="color: #0F58EB; font-weight: bold;"><img
                        src="logo_termicons.svg" alt="" width="150"><span
                        style="font-weight: normal; color: var(--black-30); font-size: 14px;">|</span> <span
                        style="font-weight: normal; color: var(--black-30); font-size: 14px;">Icon Library</span>
                </a>
                <form class="d-flex">
                    <a href="https://facebook.com/mmriz16" target="_blank" class="mx-3" style="font-size: 24px; color: var(--black-70)">
                        <i class="ti til-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/kamado_kaozi" target="_blank" class="mx-3" style=" font-size: 24px; color: var(--black-70)">
                        <i class="ti til-twitter"></i>
                    </a>
                    <a href="https://instagram.com/mmriz16" target="_blank" class="mx-3" style=" font-size: 24px; color: var(--black-70)">
                        <i class="ti til-instagram-alt"></i>
                    </a>
                    <a href="https://linkedin.com/in/mmriz16" target="_blank" class="mx-3" style=" font-size: 24px; color: var(--black-70)">
                        <i class="ti til-linkedin-square"></i>
                    </a>
                </form>
                <form class="d-flex">
                    <a href="https://github.com/mmriz16/termicons" class="btn" target="_blank"
                        style="border: none; background-color: rgba(0, 0, 0, 0); color: var(--black-50); font-size: 15px;">Github</a>
                    <a href="/usage" class="btn"
                        style="border: none; background-color: rgba(0, 0, 0, 0); color: var(--black-50); padding-right: 20px; font-size: 15px;">Usage</a>
                    <a href="https://redma.gumroad.com/l/Termicons" class="btn btn-primary"
                        style="background-color: rgba(15, 88, 235, .1); border: none; color: rgb(15, 88, 235); font-size: 15px;"
                        target="_blank"><i class="ti ti-import" style="margin-right: 10px;"></i>{{ $fullVersion ?? "Version 1.0.3" }}</a>
                </form>
            </div>
        </nav>

            @yield('container')

        <!-- Go To Top -->
        <div class="row justify-content-right">
            <div class="col-lg-10">
                <a class="gotopbtn" href="#"><i class="fas fa-caret-up"></i></a>
            </div>
        </div>

        <!-- Dark Mode -->
        <div class="row justify-content-right">
            <div class="col-lg-10">
                <i class="fa-solid fa-moon darkmode" id="toggleDark"></i>
            </div>
        </div>

        <div class="footer">
            <nav class="navbar navbar-light bg-custom" style="background-color: rgba(0, 0, 0, 0);">
                <div class="container my-3">
                    <form class="d-flex">
                        <a href="/cheatsheet" class="mx-2"
                            style="color: var(--black); text-decoration: none;">Cheatsheet</a>
                        <a href="https://github.com/mmriz16/termicons/issues/new" target="_blank" class="mx-2" style="color: var(--black); text-decoration: none;">Request Icons</a>
                        <a href="/license" class="mx-2" style="color: var(--black); text-decoration: none;">License</a>
                    </form>

                    <form class="d-flex">
                        <a href="https://changelog.mmriz16.com" target="_blank" class="navbar-brand"
                            style="color: var(--black-50); font-weight: bold;">R
                            E D M A
                        </a>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    {{-- <script>
        var icon = document.getElementById("toggleDark");

        icon.onclick = function () {
            document.body.classList.toggle("dark-theme");
        }

    </script> --}}

    <script src="<?= url('nanobar/nanobar.min.js') ?>"></script>

</body>

</html>

</body>

</html>
