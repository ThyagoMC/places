<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper" class="toggled">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <!-- Authentication Links -->
            @guest
                <li class="sidebar-brand"><a href="/">Places</a></li>
                <li class="sidebar-brand"><a href="{{ route('login') }}">Login</a></li>
                <li class="sidebar-brand"><a href="{{ route('register') }}">Register</a></li>
                <li class="sidebar-brand"><a href="/about">About</a> </li>
            @else
                <li class="sidebar-brand"><a >{{ Auth::user()->name }}</a></li>
                <li class="sidebar-brand"><a href="/">Places</a></li>
                <li class="sidebar-brand"><a href="/myreviews">My Reviews</a> </li>
                <li class="sidebar-brand"><a href="/about">About</a> </li>
                <li class="sidebar-brand">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        @yield('content')
    </div>
    <!-- /#page-content-wrapper -->

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>


<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


@yield('script')

</body>
</html>
