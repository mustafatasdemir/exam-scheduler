<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body id="app-layout">
<header>
    @include('includes.header')
</header>
<div class="container">
	  <div id="page-wrap">


    <div>

            @yield('content')

    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
