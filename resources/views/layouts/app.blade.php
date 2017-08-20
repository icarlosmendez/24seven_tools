<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>

    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            
            <!-- Main Header -->
            <header class="main-header">
                @include('layouts.header')
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer" style="max-height: 100px;text-align: center">
                @include('layouts.footer')
            </footer>

        </div>

    </body>
</html>