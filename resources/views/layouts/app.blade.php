<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/node_modules/swiper/swiper-bundle.min.css') }}">

    @stack('css')
</head>
<body class="bg-light">

    <div id="db-wrapper" style="display: flex;">
        <aside style="width: 250px; background: #1a233b; min-height: 100vh; color: white; padding: 20px;">
            <h4>Tuition Portal</h4>
            <hr>
            <ul style="list-style: none; padding: 0;">
                <li><a href="/dashboard" style="color: white; text-decoration: none;">Dashboard</a></li>
                </ul>
        </aside>

        <div id="page-content" style="flex: 1;">
            <nav class="navbar navbar-white bg-white shadow-sm p-3 mb-4">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Dashboard</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                </div>
            </nav>

            <div class="container-fluid">
                @yield('content') {{-- Dashboard ka sara data yahan fit hoga --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/admin/assets/node_modules/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/node_modules/apexcharts/dist/apexcharts.min.js') }}"></script>
</body>
</html>
