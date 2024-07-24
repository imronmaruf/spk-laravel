<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->

    <link href="{{ asset('admin/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/theme.min.css">
    @stack('css')
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container-fluid {
            flex: 1;
        }
    </style>
    <title>
        @stack('title')
    </title>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('layout.partials.sidebar')
        <!-- Page content -->
        <div id="page-content">
            @include('layout.partials.navbar')

            <!-- Container fluid -->
            @yield('content')

        </div>

    </div>

    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus item ini?');
        }
    </script>



    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('admin') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/prismjs/prism.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
    </script>

    <!-- Theme JS -->
    <script src="{{ asset('admin') }}/assets/js/theme.min.js"></script>
    {{-- <script src="{{ asset('admin/assets/libs/lucide/dist/umd/lucide.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Development version -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- Production version -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    @stack('js')

</body>

</html>
