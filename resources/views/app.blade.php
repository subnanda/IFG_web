<?php 
    // header("Content-Security-Policy: default-src 'self' 'unsafe-inline' https://fonts.googleapis.com  https://cdnjs.cloudflare.com https://code.jquery.com  https://cdn.datatables.net https://cdn.jsdelivr.net  ; object-src 'none'; img-src 'self' data:; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://fonts.googleapis.com data:");
    header("X-Frame-Options: SAMEORIGIN");
    header('X-Content-Type-Options: nosniff');
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Permissions-Policy: microphone=(), camera=()");
    header("strict-transport-security: max-age=2592000");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    @yield('header')
    @yield('style')
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="font-family:'Montserrat';">
    @yield('menu')
    @yield('content')
    @yield('footer')
    @yield('script')
    @yield('script_additional')
</body>

</html>