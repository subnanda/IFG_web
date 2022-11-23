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
<div id="chat">
    <table>
        <tr>
            <td>
                <div id="chat-box">
                    <div>
                        <div style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); padding:15px; color:#fff; font-size:14px; line-height:1.2;">
                            <center>Silakan masukan pesan anda pada formulir di bawah ini.</center>
                        </div>
                        <div id="padding-chat1">
                            <div id="padding-chat2">
                                <div style="padding-left:13px;">Nama</div>
                                <div style="margin-bottom:15px;">
                                    <input type="text" class="form-control" style="font-size:13px;" placeholder="Silakan masukan Nama Anda">
                                </div>
                                <div style="padding-left:13px;">Email</div>
                                <div style="margin-bottom:15px;">
                                    <input type="text" class="form-control" style="font-size:13px;" placeholder="Silakan masukan Email Anda">
                                </div>
                                <div style="padding-left:13px;">Pesan</div>
                                <div style="margin-bottom:15px;">
                                    <textarea placeholder="Silakan masukan Pesan Anda" style="height: 100px; font-size:13px; resize:none;" class="form-control"></textarea>
                                </div>
                                <div>
                                    <center>
                                        <input type="submit" class="btn" style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); color:#fff; font-size:14px; font-weight:600; width:100%;" value="KIRIM"> 
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        <tr>
            <td>
                <div id="chat-open">
                    <img src="{{ url('image/chat.png') }}" style="width:70px;">
                </div>
                <div id="chat-close">
                    <img src="{{ url('image/close.png') }}" style="width:70px;">
                </div>
            </td>
        </tr>
    </table>
</div>    
</html>