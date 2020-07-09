<!DOCTYPE html>
<html lang="es">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
@if (Auth::guest())
<div class="wrapper">

                    @else
    @include('layouts.partials.mainheader')

    @include('layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
                    @endif
    <div class="content-wrapper">

        @include('layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="row">

            @yield('main-content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('layouts.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.partials.scripts')
@show
      


</body>
</html>
