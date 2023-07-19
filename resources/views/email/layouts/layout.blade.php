{{-- <style>
    .table-one {
        align-items: center;
        justify-items: center;
        text-align: center;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;

    }


    img {
        width: 150px;

    }

    .div-2 {
        background-color: #D1F1F1;
    }

    p {
        text-align: left;
        color: black;
        margin-left: 8px;
        margin-right: 8px
    }

    button {
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        color: white;
        background-color: #19bcbd;
        margin-top: 20px;
        border: 4px solid #118384;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;

    }
</style>

<div style="background-color:lightgrey ">
    <div class="table-one">

        <table align="center"
            style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:lightgrey;font-size:16px;line-height:26px;width:600px;">
            <tbody>
                <tr>
                    <td
                        style="border-collapse:collapse;padding:0;border:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                        <table
                            style="font-weight:normal;border-collapse:collapse;border:0;padding:0;font-family:Arial,sans-serif">
                            <tbody>
                                <tr>
                                    <td colspan="4" valign="top"
                                        style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#D1F1F1;border-bottom:4px solid #118384;text-align:center">
                                        <a href="{{ route('home') }}" target="_blank">
                                            <img src="{{ asset('imgs/logo.png') }}"
                                                alt="{{ config('app.name') }}"
                                                style="width:150px; margin-top:10px;">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-collapse:collapse;border:0;background-color:white ;padding:10px;">
                                        @yield('content')
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-collapse:collapse;border:0;padding: 10px;background-color: #D1F1F1 ; border-top:4px solid #118384">


                                        <span>

                                            <a
                                                href="https://www.facebook.com/essaywritingserviceae/"><img
                                                    src="{{ asset('imgs/email-footer/5a22b43e909176.0984090415122238065922.png') }}"
                                                    style="width:20px" alt="{{ config('app.name') }}"></a>






                                            <a href="https://www.instagram.com/4poundessay/"><img
                                                    src="{{ asset('imgs/email-footer/5a355496a61e55.7452819615134445026804.png') }}"
                                                    style="width:20px" alt="{{ config('app.name') }}"></a>

                                           <a href="https://twitter.com/4poundessay"> <img
                                                    src="{{ asset('imgs/email-footer/twitter-icon.png') }}"
                                                    alt="{{ env('APP_NAME', '4poundessay') }}"
                                                    style="width:20px;"></a>


                                            <a href="https://api.whatsapp.com/send?phone=971555947610"><img
                                                    src="{{ asset('imgs/email-footer/whatsapp-icon.png') }}"
                                                    style="width:20px" alt="{{ config('app.name') }}"></a>

                                        </span>
                                        <p style="text-align: center">© {{ now()->year }}. All rights reserved <a
                                                href="{{ route('home') }}" style="color:black">{{ config('app.name') }}</a>
                                        </p>

                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div> --}}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="default" href="{{ asset('css/default.css') }}">
</head>
<body >
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;

}


.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>


<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="padding:8px" >
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}
@include('vendor.mail.html.header')
</table>
<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0"  >
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation"   >
<!-- Body content -->
    @yield('content')

</table>
</td>
</tr>
    <div style="background-color: #EDF2F7 ;margin-top:2rem;">@include('vendor.mail.html.footer')</div>
{{ $footer ?? '' }}

</td>
</tr>
</table>
</body>
</html>
