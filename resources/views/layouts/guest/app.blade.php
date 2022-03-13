@extends('layouts.base')
@section('app')

    <body class="hold-transition layout-top-nav">

        <div class="wrapper">

            @include('layouts.guest.navbar')

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
