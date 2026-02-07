<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | {{ $title ?? 'Title' }}</title>

    <!-- Themes Css -->
    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
    {{-- overlayScrollbars --}}
    <link rel="stylesheet" href="{{ asset('style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
    @stack('css')

    <!-- Themes JS -->
    {{-- jQuery --}}
    <script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
    {{-- Bootstrap 4 --}}
    <script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- AdminLTE App --}}
    <script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
    @stack('js')

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="wrapper">

        <!-- Navbar -->
        <livewire:pages::komponen.menu-navbar />

        <!-- Main Sidebar Container -->
        <livewire:pages::komponen.menu-sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $title ?? 'Title' }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">{{ $title ?? 'Title' }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

        <livewire:pages::komponen.menu-footer lazy />

    </div>
</body>

</html>
