@extends('layouts.emails.mail')

@section('emailContent')

<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td style="padding:40px;">

            <h2 style="
                margin:0 0 25px 0;
                color:#111111;
            ">
                E-Signature Completed Successfully
            </h2>

            <p>
               Hi {{$driver->fname}} {{$driver->mname}} {{$driver->lname}}
            </p>

            <p style="line-height:1.6;">
                Thank you for completing your electronic signature.
            </p>

            <p style="line-height:1.6;">
                Your driver application, experience information, and
                electronic signature have been successfully submitted
                and received.
            </p>

            <p style="line-height:1.6;">
                Your application is now complete and will be reviewed
                by our team. If any additional information is required,
                we will contact you.
            </p>

            <p style="
                text-align:center;
                margin:35px 0;
            ">
                <span style="
                    display:inline-block;
                    background:#e8f5e9;
                    color:#2e7d32;
                    padding:12px 25px;
                    border-radius:6px;
                    font-weight:bold;
                ">
                    ✓ Application Completed
                </span>
            </p>

            <p style="line-height:1.6;">
                Please keep this email for your records.
            </p>

            <p style="line-height:1.6;">
                If you have any questions regarding your application,
                please contact us.
            </p>

            <p style="line-height:1.6;">
                Thank you,<br>

                <strong>{{ $company->cname ?? 'DOT COMPLIANCE SOLUTIONS LLC' }}</strong><br>

                {{ $company->email ?? 'company email' }}
            </p>

        </td>
    </tr>
</table>

@endsection