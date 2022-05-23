<!DOCTYPE html>
<html lang="en">
    @include('admin_section.includes.header')

    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../admincon/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('admin_section.includes.nav')

        @include('admin_section.includes.aside')

        <div class="content-wrapper">
            @include('admin_section.includes.mini_nav')
            @section('content')
            @show
        </div>
        @include('admin_section.includes.footer')
    </div>
        @include('admin_section.includes.js_inc')
    </body>
</html>

