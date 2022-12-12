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
    <style>
        @media (min-width: 800px) {
            .footer-div {
                background-color: #191919;
                font-size: 11px;
                background-image: url('<?= url('image/ifg_white.png'); ?>');
                background-repeat: no-repeat;
                background-size: 600px;
                background-position: right bottom;
            }

            .left-side {
                background-image: url('<?= url('image/serong-bawah.png'); ?>');
                background-repeat: no-repeat;
                background-size: 370px;
                background-position: right bottom;
            }

            .right-side {
                background-image: url('<?= url('image/serong-atas.png'); ?>');
                background-repeat: no-repeat;
                background-size: 370px;
                background-position: right top;
            }
        }

        @media (max-width: 599px) {
            .footer-div {
                background-color: #191919;
                font-size: 11px;
                background-image: url('<?= url('image/ifg_white.png'); ?>');
                background-repeat: no-repeat;
                background-size: 400px;
                background-position: right bottom;
            }

            .left-side {
                background-image: url('<?= url('image/serong-bawah.png'); ?>');
                background-repeat: no-repeat;
                background-size: 270px;
                background-position: right bottom;
            }

            .right-side {
                background-image: url('<?= url('image/serong-atas.png'); ?>');
                background-repeat: no-repeat;
                background-size: 270px;
                background-position: right top;
            }
        }
    </style>
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
                            <form action="{{ url('kirim-email') }}" method="POST" id="formEmail">
                                @csrf
                                <div id="padding-chat2">
                                    <div style="padding-left:13px;">Nama</div>
                                    <div style="margin-bottom:15px;">
                                        <input type="text" class="form-control" name="nama" style="font-size:13px;" placeholder="Silakan masukan Nama Anda">
                                        <small class="nama_error input-group text-sm mt-2 text-danger error"></small>
                                    </div>
                                    <div style="padding-left:13px;">Email</div>
                                    <div style="margin-bottom:15px;">
                                        <input type="text" class="form-control" name="email" style="font-size:13px;" placeholder="Silakan masukan Email Anda">
                                        <small class="email_error input-group text-sm mt-2 text-danger error"></small>
                                    </div>
                                    <div style="padding-left:13px;">Pesan</div>
                                    <div style="margin-bottom:15px;">
                                        <textarea placeholder="Silakan masukan Pesan Anda" name="pesan" style="height: 100px; font-size:13px; resize:none;" class="form-control"></textarea>
                                    </div>
                                    <div>
                                        <center>
                                            <input type="button" onclick="validatePrompt('formEmail')" class="btn" style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); color:#fff; font-size:14px; font-weight:600; width:100%;" value="KIRIM">
                                        </center>
                                    </div>
                                </div>
                            </form>
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function validatePrompt(formName) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
        });
        Swal.fire({
            title: "Kirim email?",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonText: "Kirim",
            confirmButtonColor: "#d33",
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                var form = $("#" + formName);
                console.log(form[0]);
                var formData = new FormData(form[0]);
                $.ajax({
                    url: form.attr("action"),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        data = JSON.parse(data);
                        if (data["status"] == "success") {
                            Toast.fire({
                                icon: "success",
                                title: data["message"],
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    location.reload();
                                }
                            });
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: data["message"],
                            });
                        }
                    },
                    error: function(reject) {
                        var response = $.parseJSON(reject.responseText);
                        if (response) {
                            $.each(response.errors, function(key, val) {
                                console.log(key);
                                $("." + key + "_error").text(val[0]);
                            });
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: "Something went wrong",
                            });
                        }
                    },
                });
            }
        });
    }
</script>

</html>