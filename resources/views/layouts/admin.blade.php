<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header') {{-- Ismein CSS aur Meta tags honge --}}
    @stack('css')
</head>
<body>
    <div id="db-wrapper">
        @include('partials.sidebar') {{-- Side menu --}}

        <main id="page-content">
            @include('partials.topbar') {{-- Top Navbar with Logout --}}

            <div class="container-fluid p-4">
                @yield('content') {{-- Dashboard ka main data --}}
            </div>
        </main>
    </div>

    @include('partials.scripts') {{-- JS files --}}
    @stack('js')
</body>
</html>
