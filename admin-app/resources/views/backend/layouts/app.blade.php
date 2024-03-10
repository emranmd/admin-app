@include('backend.layouts.header')

@include('backend.layouts.menu')

@include('backend.layouts.sidebars')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('backend.layouts.content_header')
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->

</div><!-- /.content-wrapper -->

@include('backend.layouts.footer')
