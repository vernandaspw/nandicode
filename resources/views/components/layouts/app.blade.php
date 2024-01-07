<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="vernanda septia wanandi" content="" />
    <title>Nandicode</title>
    <!-- Favicon-->

    <link rel="shortcut icon" href="{{ asset('img/LOGOvernandaspw.png') }}" type="image/x-icon">
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="{{ asset('page/css/styles.css') }}" rel="stylesheet" />

    <style>
        .bg-gradient-primary-to-secondary {
            background: #198754;
            background: linear-gradient(135deg, #03C988 0%, #198754 100%);
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #8ADAB2 0%, #FBF6EE 100%);
        }
    </style>

{{-- @vite(['resources/js/app.js']) --}}
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Bottom Navbar -->
        <livewire:nav />
        {{ $slot }}
    </main>

    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; nandicode 2023</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>




    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('page/js/scripts.js') }}"></script>
</body>

</html>
