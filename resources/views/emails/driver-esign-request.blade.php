@extends('layouts.emails.mail')

@section('emailContent')

<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td style="padding:40px;">

            <h2 style="
                margin:0 0 25px 0;
                color:#111111;
            ">
                E-Signature Required
            </h2>

            <p>
                Hello {{ $driver->fname }} {{ $driver->mname }} {{ $driver->lname }},
            </p>

            <p style="line-height:1.6;">
                Thank you for completing your driver application
                and experience information.
            </p>

            <p style="line-height:1.6;">
                Your submitted information has been received successfully.
                The next step is to complete your electronic signature form.
            </p>

            <p style="line-height:1.6;">
                Please click the button below to review and complete
                your E-Signature.
            </p>

            <p style="text-align:center; margin:35px 0;">

                <a
                    href="http://localhost:5173/driver/driver-application/2"
                    style="
                        display:inline-block;
                        background:#091122;
                        color:#ffffff;
                        padding:14px 25px;
                        text-decoration:none;
                        border-radius:6px;
                        font-weight:bold;
                    "
                >
                    Complete E-Signature
                </a>

            </p>

           <!--  <p style="line-height:1.6;">
                For security purposes, this link is unique to you
                and will expire after
                <strong>6 hours</strong>.
            </p> -->

            <p style="line-height:1.6;">
                Please complete the E-Signature to continue processing
                your application.
            </p>

            <p style="line-height:1.6;">
                If you have any questions, please contact us.
            </p>

            <p style="line-height:1.6;">
                Thank you,<br>

                <strong>{{$company->cname}}</strong><br>

                {{$company->email}}
            </p>

        </td>
    </tr>
</table>

@endsection