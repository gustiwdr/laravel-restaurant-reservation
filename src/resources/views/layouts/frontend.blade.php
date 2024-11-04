<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Home')</title>

        <meta content="" name="description">
        <meta content="" name="keywords">
        @include('layouts.inc.link')
        @include('layouts.inc.nav')
    </head>
    <body style="background-color: azure">
        <main id="main">
            <!-- <br>
            <section class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url ('/') }}">Home</a></li>
                        <li><a href="{{ URL::current() }}">@yield('title')</a></li>
                    </ol>
                </div>
            </section> -->
            @yield('content')
        </main>
    </body>

    @include('layouts.inc.footer')
    @include('layouts.inc.script')
</html>