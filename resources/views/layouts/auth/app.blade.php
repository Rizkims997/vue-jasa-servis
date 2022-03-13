@extends('layouts.base')
@section('app')

    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper" id="app">

            @include('layouts.auth.navbar')
            @include('layouts.auth.sidebar')

            <div class="content-wrapper">
                <div class="py-5">
                    @yield('content')
                </div>
            </div>

            <aside class="control-sidebar control-sidebar-dark">

            </aside>

            @include('layouts.footer')
        </div>

    </body>
@endsection
