<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'DOT COMPLIANCE SOLUTIONS LLC' }}</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f3f4f6;
    font-family: Tinos;
    color:#111111;
">

<table width="100%"
       cellpadding="0"
       cellspacing="0"
       border="0"
       style="
           background:#f3f4f6;
           padding:35px 10px;
       ">

    <tr>
        <td align="center">

            <table width="620"
                   cellpadding="0"
                   cellspacing="0"
                   border="0"
                   style="
                       max-width:620px;
                       width:100%;
                       background:#ffffff;
                   ">

                <tr>
                    <td>
                        @include('layouts.emails.header')
                    </td>
                </tr>

                <tr>
                    <td>
                        @yield('emailContent')
                    </td>
                </tr>

                <tr>
                    <td>
                        @include('layouts.emails.footer')
                    </td>
                </tr>

            </table>

        </td>
    </tr>

</table>

</body>
</html>