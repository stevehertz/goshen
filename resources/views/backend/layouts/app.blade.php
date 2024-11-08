<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset(config('app.favicon')) }}" rel="icon">

    <title>
        @yield('title')
    </title>

    @include('backend.components.styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('backend.includes.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                {{ \App\Helper\Helper::getPageTitle() }}
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">
                                        Home
                                    </a>
                                </li>
                                @php
                                    $breadcrumbs = \App\Helper\Helper::generateBreadcrumb(request());
                                @endphp
                                @foreach ($breadcrumbs as $breadcrumb)
                                    @if (!$loop->last)
                                        <li class="breadcrumb-item">
                                            <a href="{{ $breadcrumb['url'] }}">
                                                {{ $breadcrumb['label'] }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="breadcrumb-item active">
                                            {{ $breadcrumb['label'] }}
                                        </li>
                                    @endif
                                @endforeach
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('backend.includes.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('backend.components.scripts')

    @stack('scripts')
</body>

</html>
