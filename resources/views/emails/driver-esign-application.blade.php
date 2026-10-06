
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Under Maintenance - Dot Compliance Solutions</title>
     <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>



<style>
    @page {
        size: A4 portrait;
        margin: 0mm;
        padding-left: 0px !important;
    }

    html,
    body {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        font-family: Tinos, serif;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box !important;
    }

    table {
        width: 100% !important;
        max-width: 100% !important;
        table-layout: fixed !important;
        border-collapse: collapse !important;
    }

    td,
    th {
        max-width: 100%;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    input,
    textarea,
    select {
        width: 100%;
        max-width: 100%;
        box-sizing: border-box !important;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .pdf-page {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }
</style>
<div class="pdf-page">


 <div style=" background-color: gray; font-family: 'Tinos';">
   
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
      <div style="text-align:center;">
        <h3 style="margin-bottom:10px;font-family:'Tinos',serif;font-size:17.4px;font-weight:bold;letter-spacing:0.2px;color:#133B63;">DOT COMPLIANCE SOLUTIONS LLC</h3>
        <h1 style="margin:0;color:#133B63;font-family:'Tinos',serif;font-size:29.4px;font-weight:bold;line-height:1.22;letter-spacing:0.3px;">COMMERCIAL DRIVER<br>
      APPLICATION &amp; QUALIFICATION PACKET
    </h1>

    <div style="margin-bottom:10px;margin-top:14px;font-size:18px;line-height:1.3;color:#133B63;font-family:'Tinos',serif;">
      Complete Driver Application, Qualification, Onboarding &amp; Safety Policy Packet
    </div>

  </div>

  <table style="margin-top:8px;width:100%;border-collapse:collapse;font-size:14px;">
    <tbody>

      <tr>
        <td style="width:30%;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          MOTOR CARRIER / EMPLOYER
        </td>
        <td style="height:20px;border-bottom:1px solid #aebdcc;">
          <span style="padding-left:12px;">{{$driver->esigndata['p1motorcarrieremployer']}}</span>
        </td>
      </tr>

      <tr>
        <td style="height:25px;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          USDOT NUMBER
        </td>
        <td style="height:25px;border-bottom:1px solid #aebdcc;">
          <span style="padding-left:12px;">{{$company->dot}}</span>
        </td>
      </tr>

      <tr>
        <td style="height:25px;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          APPLICANT NAME
        </td>
        <td style="height:25px;border-bottom:1px solid #aebdcc;">
          <span style="padding-left:12px;">
            {{$driver->fname}} {{$driver->mname}} {{$driver->lname}}
          </span>
        </td>
      </tr>

      <tr>
        <td style="height:25px;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          POSITION APPLIED FOR
        </td>
        <td style="height:25px;border-bottom:1px solid #aebdcc;">
          <span style="padding-left:12px;">{{$driver->appliedfor}}</span>
        </td>
      </tr>

      <tr>
        <td style="height:25px;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          APPLICATION DATE
        </td>
        <td style="height:25px;border-bottom:1px solid #aebdcc;">
          
          <span style="padding-left:12px;">{{ $driver->esigndata['p1applicationdate'] ?? '' }}</span>
        </td>
      </tr>

    </tbody>
  </table>

  <section style="margin-top:0px;text-align:center;">

    <h2 style="margin-bottom:6px;font-size:14px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;">
      APPLICANT INSTRUCTIONS
    </h2>

    <p style="margin:0 auto;max-width:700px;color:#133B63;font-family:'Tinos',serif;font-size:14px;line-height:1.35;">
      Complete every applicable section. Use full legal names, complete addresses,
      and accurate dates. If additional space is needed, attach a signed
      continuation sheet identifying the section and question. Do not omit prior
      employers or driving history.
    </p>

  </section>

  <section style="margin-top:0px;">

    <h2 style="margin-bottom:8px;font-weight:bold;line-height:1.2;color:#133B63;font-family:'Tinos',serif;font-size:18px;">
      DOCUMENTS TO SUBMIT WITH YOUR DRIVER APPLICATION
    </h2>

    <div style="background:#d8e9f6;padding:9px 10px;font-weight:600;line-height:1.35;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
      Upload clear, complete, readable copies. Documents marked
      <strong>"if applicable"</strong> are required only when they apply to the
      driver or position. Employment-eligibility documents are handled under
      Form I-9 rules; applicants may choose which acceptable I-9 documents to present.
    </div>

    <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;margin-top:0;">

      <thead>
        <tr>

          <th style="width:34%;border:1px solid #1b3e5c;background:#24557f;padding:8px 6px;text-align:center;vertical-align:middle;color:#fff;font-family:Arial,sans-serif;font-size:14px;font-weight:bold;">
            DOCUMENT
          </th>

          <th style="width:34%;border:1px solid #1b3e5c;background:#24557f;padding:8px 6px;text-align:center;vertical-align:middle;color:#fff;font-family:Arial,sans-serif;font-size:14px;font-weight:bold;">
            APPLICANT
          </th>

          <th style="width:34%;border:1px solid #1b3e5c;background:#24557f;padding:8px 6px;text-align:center;vertical-align:middle;color:#fff;font-family:Arial,sans-serif;font-size:14px;font-weight:bold;">
            OFFICE
          </th>

        </tr>
      </thead>

      <tbody>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Current Driver License / CDL - front and back
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1applicantcdl'] ?? null) === 'on')
/>
            
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
                       <input
    type="checkbox"
    @checked(($driver->esigndata['p1officecdl'] ?? null) === 'on')
/>
            
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Work authorization / acceptable Form I-9 documentation - as applicable
            (employee chooses acceptable documents)
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
                                   <input
    type="checkbox"
    @checked(($driver->esigndata['p1workauthapplicant'] ?? null) === 'on')
/>
            
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1workauthoffice'] ?? null) === 'on')
/>
            
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Employment Authorization Document / Work Permit - if applicable and presented
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
                        <input
    type="checkbox"
    @checked(($driver->esigndata['p1workpermitapplicant'] ?? null) === 'on')
/>
    
           
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
             <input
    type="checkbox"
    @checked(($driver->esigndata['p1workpermitoffice'] ?? null) === 'on')
/>
            
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Social Security card - if presented for I-9 or required for lawful payroll/onboarding purposes
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1wssnapplicant'] ?? null) === 'on')
/>
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1ssnoffice'] ?? null) === 'on')
/>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Current Medical Examiner's Certificate (DOT medical card), if issued / available
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1cmapplicant'] ?? null) === 'on')
/>
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1cmeoffice'] ?? null) === 'on')
/>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Medical Examination Report MCSA-5875 (long-form medical, commonly 5 pages)
            - only if requested with driver consent; treated as confidential medical information
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1merapplicant'] ?? null) === 'on')
/>
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1meroffice'] ?? null) === 'on')
/>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Medical certification verification / CDLIS MVR showing medical status
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <span style="color:#133B63;font-size:12px;">Office obtains</span>
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1mcvoffice'] ?? null) === 'on')
/>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Medical variance / exemption / SPE certificate - if applicable
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1cdlisapplicant'] ?? null) === 'on')
/>
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1cdlisoffice'] ?? null) === 'on')
/>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Signed DMV / MVR / CDLIS Records Consent Form
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1cdlisrecordapplicant'] ?? null) === 'on')
/>
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input
    type="checkbox"
    @checked(($driver->esigndata['p1cdlisrecordoffice'] ?? null) === 'on')
/>
          </td>
        </tr>

      </tbody>
    </table>

  </section>

</div>

<br />




<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">



  <section style="margin-top:12px;">

    <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
      <tbody>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Signed Background / Consumer Report Authorization -
            including criminal-history screening where lawful
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input
    type="checkbox"
    @checked(($driver->esigndata['p2consumerrecordapplicant'] ?? null) === 'on')
/>
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input
    type="checkbox"
    @checked(($driver->esigndata['p2consumerrecordoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Safety Performance History authorization for previous
            DOT-regulated employers
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input
    type="checkbox"
    @checked(($driver->esigndata['p2sphapplicant'] ?? null) === 'on')
/>
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input
    type="checkbox"
    @checked(($driver->esigndata['p2sphoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            FMCSA Clearinghouse limited-query consent
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
               <input
    type="checkbox"
    @checked(($driver->esigndata['p2fmcsaapplicant'] ?? null) === 'on')
/>
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
               <input
    type="checkbox"
    @checked(($driver->esigndata['p2fmcsaoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            FMCSA Clearinghouse full-query electronic consent
          </td>

          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Driver completes in Clearinghouse
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input
    type="checkbox"
    @checked(($driver->esigndata['p2clearinghouseoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Pre-employment drug-test documentation / result, as applicable
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <span style="color:#133B63;font-size:12px;padding:7px 6px;vertical-align:top;line-height:1.22;">
                Office obtains
              </span>
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
                            <input
    type="checkbox"
    @checked(($driver->esigndata['p2predrugtestoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Road Test Certificate or accepted equivalent
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <span style="color:#133B63;font-size:12px;padding:7px 6px;vertical-align:top;line-height:1.22;">
                Office completes
              </span>
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input
    type="checkbox"
    @checked(($driver->esigndata['p2roadtestoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Any additional state, insurance, customer, endorsement,
            TWIC, permit, or company-required credential
          </td>

          <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <span style="color:#133B63;font-size:12px;padding:7px 6px;vertical-align:top;line-height:1.22;">
                if applicable
              </span>
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
                            <input
    type="checkbox"
    @checked(($driver->esigndata['p2twisoffice'] ?? null) === 'on')
/>
            </div>
          </td>
        </tr>

        <tr>
          <td colspan="3" style="padding:0;">
            <i style="font-size:10.5px;">
              IMPORTANT: A Social Security card or Employment
              Authorization Document is not automatically required as
              the specific Form I-9 document. The employee has the
              right to present any acceptable document or combination
              allowed by Form I-9 rules.
            </i>
          </td>
        </tr>

      </tbody>
    </table>

  </section>

</div>
<br/>


<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <section style="margin-top:12px;">

    <h2 style="margin-bottom:8px;font-size:18px;font-weight:bold;line-height:1.2;color:#174875;">
      23 DMV / MVR / CDLIS DRIVER RECORDS AUTHORIZATION &amp; CONSENT
    </h2>

    <div style="margin-bottom:12px;background:#d8e9f6;padding:8px 10px;font-size:13px;font-weight:600;line-height:1.35;color:#173f69;">
      This authorization is intended to permit the prospective motor carrier
      and its authorized screening provider to obtain driving-record
      information for lawful employment and driver-qualification purposes.
      It does not replace any separate consent required by a State agency
      or screening provider.
    </div>

    <div style="margin-bottom:8px;font-size:13px;line-height:1.5;">
      I authorize the prospective employer, its authorized agents, and
      its designated consumer reporting or records provider to obtain
      and review motor vehicle records and driver-license information
      for lawful employment and driver-qualification purposes. This
      authorization includes records from State Driver Licensing
      Agencies and, when lawfully available through an authorized
      source, CDLIS-related information concerning my commercial driver
      license status, class, endorsements, restrictions,
      disqualifications, convictions, suspensions/revocations, and
      medical-certification status.
    </div>

    <div style="margin-bottom:12px;font-size:12.5px;line-height:1.5;">
      I authorize such records to be obtained before employment and, to
      the extent permitted by law, periodically during employment for
      driver qualification, safety, insurance, and compliance purposes.
      I understand that additional State-specific notices or
      authorizations may be required.
    </div>

    <div style="width:100%;overflow:hidden;">

      <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
        <tbody>

         
          <tr>
            <td style="width:42%;border:1px solid #555;padding:8px;vertical-align:top;">
              <label style="font-size:12px;">
                Driver Full Legal Name
              </label>
            </td>

            <td style="height:25px;border:1px solid #000;">
              <span style="padding-left:12px;">
                {{$driver->fname}} {{$driver->mname}} {{$driver->lname}}
              </span>
            </td>
          </tr>

         
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">
              <label style="font-size:12px;">
                Date of Birth
              </label>
            </td>

            <td style="border:1px solid #555;padding:8px;">
              <span style="padding-left:12px;">
                {{$driver->dob}}
              </span>
            </td>
          </tr>

        
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Driver License / CDL Number
              </label>

              <input
                type="text"
                value="{{$driver->currentcdllicenseno}}"
                style="box-sizing:border-box;width:95%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>

            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                State:
              </label>

              <input
                type="text"
                value="{{$driver->currentcdlstate}}"
                style="box-sizing:border-box;width:95%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>
          </tr>

         
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">
              <label style="font-size:12px;">
                Current Address
              </label>
            </td>

            <td style="border:1px solid #555;padding:8px;">

              <textarea
                name="p3currentaddress"
                placeholder="Current Address"
                style="box-sizing:border-box;width:95%;min-width:0;height:120px;resize:vertical;border:1px solid #555;padding:8px;font-size:14px;"
              >{{$driver->currentstreet}}, {{$driver->currentcity}}, {{$driver->currentstate}}, {{$driver->currentzip}}</textarea>

            </td>
          </tr>

         
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Driver Signature
              </label>
             
             

        <img
        src="{{$signatureUrl}}"
        style="height:40px;width:95%;object-fit:contain;border:1px solid #000;"
    >
            </td>

            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Date:
              </label>

              <input
                type="date"
                value="{{$cleHDate}}"
                style="box-sizing:border-box;width:95%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>
          </tr>

         
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Employer / Authorized Representative
              </label>

              <input
                type="text"
                value="{{$company->owner}}"
                style="box-sizing:border-box;width:95%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>

            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Date:
              </label>

              <input
                type="date"
                value="{{$cleHDate}}"
                style="box-sizing:border-box;width:95%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>
          </tr>

        </tbody>
      </table>

    </div>

  </section>

</div>
<br/>


<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <section style="margin-top:12px;">

        <h2 style="margin-bottom:8px;font-size:18px;font-weight:bold;line-height:1.2;color:#174875;">
            24 STANDALONE BACKGROUND / CONSUMER REPORT DISCLOSURE &
            AUTHORIZATION
        </h2>

        <div style="background:#d8e9f6;padding:9px 10px;font-size:11.4px;font-weight:600;line-height:1.35;color:#173f69;">
            EMPLOYMENT PURPOSES - This page is intended to stand on its own.
            Employers should review applicable Federal, State, and local
            screening laws and provide any additional notices required for the
            applicant’s location.
        </div>

        <div style="margin-bottom:8px;font-size:12.5px;">

            <h2 style="margin-top:8px;margin-bottom:8px;font-size:12.5px;font-weight:bold;line-height:1.2;color:#174875;">
                DISCLOSURE
            </h2>

            The prospective employer may obtain a consumer report and/or
            investigative consumer report about you for employment purposes.
            Depending on the screening ordered and permitted by law, the
            report may include identity verification, employment and education
            verification, motor vehicle and commercial driver license records,
            and criminal-history/public-record information. The employer may
            use the report in evaluating your application and, where
            permitted, during employment.
        </div>

        <div style="margin-bottom:8px;font-size:12.5px;">

            <h2 style="margin-top:8px;margin-bottom:8px;font-size:12.5px;font-weight:bold;line-height:1.2;color:#174875;">
                AUTHORIZATION
            </h2>

            I authorize the prospective employer and its authorized consumer
            reporting agency or screening provider to obtain consumer reports
            and investigative consumer reports about me for lawful employment
            purposes. I authorize courts, government agencies, licensing
            agencies, educational institutions, former employers, and other
            lawful record sources to release information to the authorized
            screening provider as permitted by law. I understand that this
            authorization includes criminal-history screening and motor
            vehicle/CDL-related records when such screening is lawful and
            requested by the employer.
        </div>

        <div style="background:#d8e9f6;padding:9px 10px;font-size:11.4px;font-weight:600;line-height:1.35;color:#173f69;">
            This authorization does NOT replace the FMCSA Clearinghouse
            consent process. Full Clearinghouse queries require the driver’s
            specific electronic consent inside the FMCSA Clearinghouse.
        </div>

        <div style="width:100%;overflow:hidden;">

            <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                <tbody>

                   
                    <tr>
                        <td style="width:42%;border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Full Legal Name
                            </span>
                        </td>

                        <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
                                <span style="padding-left:12px;">
                                    {{ $driver->fname ?? '' }}
                                    {{ $driver->mname ?? '' }}
                                    {{ $driver->lname ?? '' }}
                                </span>
                            </div>
                        </td>
                    </tr>

                   
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Other / Former Names Used
                            </span>
                        </td>

                        <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
                               <span style="padding-left:12px;">
    
    {{ $driver->esigndata['p4formernames'] ?? '' }}
</span>
                            </div>
                        </td>
                    </tr>

                  
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Date of Birth
                            </span>
                        </td>

                        <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
                                <span style="padding-left:12px;">
                                    {{ $driver->dob ?? '' }}
                                </span>
                            </div>
                        </td>
                    </tr>

                   
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Current Address
                            </span>
                        </td>

                        <td style="border:1px solid #555;padding:8px;">
                            <textarea
                                name="p3currentaddress"
                                placeholder="Current Address"
                                style="box-sizing:border-box;width:95%;min-width:0;height:120px;resize:vertical;border:1px solid #555;padding:8px;font-size:14px;"
                            >{{ collect([
                                $driver->currentstreet ?? null,
                                $driver->currentcity ?? null,
                                $driver->currentstate ?? null,
                                $driver->currentzip ?? null
                            ])->filter()->implode(', ') }}</textarea>
                        </td>
                    </tr>

                   
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Driver License / CDL Number
                            </span>
                            <br>

                            <input
                                type="text"
                                value="{{ $driver->currentcdllicenseno ?? '' }}"
                                style="box-sizing:border-box;width:95%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>

                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                State:
                            </span>
                            <br>

                            <input
                                type="text"
                                value="{{ $driver->currentcdlstate ?? '' }}"
                                style="box-sizing:border-box;width:95%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>
                    </tr>

                   
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Applicant Signature
                            </span>
                            <br>

                           <img style="box-sizing:border-box;height:40px;width:95%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;" src="{{$signatureUrl}}" />
                        </td>

                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Date:
                            </span>
                            <br>

                            <input
                                type="date"
                                value="{{ $cleHDate ?? '' }}"
                                style="box-sizing:border-box;width:95%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>
                    </tr>

                   
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Employer / Authorized Representative
                            </span>
                            <br>

                            <input
                                type="text"
                                value="{{ $company->owner ?? '' }}"
                                style="box-sizing:border-box;width:95%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>

                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Date:
                            </span>
                            <br>

                            <input
                                type="date"
                                value="{{ $cleHDate ?? '' }}"
                                style="box-sizing:border-box;width:95%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </section>
</div>
<br />



<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div>

        <header style="text-align:center;margin-bottom:12px;">

            <h1 style="margin:0;color:#1d3b61;font-weight:bold;text-transform:uppercase;line-height:1.25;font-size:21px;letter-spacing:-0.3px;">
                DOT DRUG &amp; ALCOHOL PROGRAM
            </h1>

            <h2 style="margin:0;color:#1d3b61;font-weight:bold;text-transform:uppercase;line-height:1.25;font-size:21px;letter-spacing:-0.3px;">
                DRIVER REVIEW, CONSENT &amp; COMPANY POLICY
            </h2>

            <p style="margin-top:8px;margin-bottom:0;font-weight:bold;font-size:12.4px;">
                49 CFR Part 40 and 49 CFR Part 382
            </p>

        </header>


       
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                A. COMPANY / DRIVER INFORMATION
            </div>

            <div style="margin-top:20px;">

               
               <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr>
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Motor Carrier / Employer Name:
            </label>
        </td>

        <td style="border:1px solid #26364d;width:35%;padding:0 10px 0 0;vertical-align:middle;">
           <span style="width:100%; padding-left:12px;">
                                    {{ $company->cname ?? '' }}
                                </span>
         
        </td>

        <td style="width:10%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                USDOT No.:
            </label>
        </td>

        <td style="border:1px solid #26364d;width:35%padding:0;vertical-align:middle;">
          <span style=" padding-left:12px;">
                                    {{ $company->dot ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>

               <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr>
        <td style="width:33%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Designated Employer Representative (DER):
            </label>
        </td>

        <td style="width:32%;border:1px solid #26364d;padding:0 10px 0 0;vertical-align:middle;">
           <span style=" padding-left:12px;">
                                    {{ $company->owner ?? '' }}
                                </span>
         
        </td>

        <td style="width:20%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                DER Phone / Email:
            </label>
        </td>

        <td style="border:1px solid #26364d;padding:0;vertical-align:middle;">
          <span style=" padding-left:12px;">
                                    {{ $company->phone ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>

               <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr>
        <td style="width:10%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Driver Name:
            </label>
        </td>

        <td style="width:43%;border:1px solid #26364d;padding:0 10px 0 0;vertical-align:middle;">
           <span style=" padding-left:12px;">
                                    {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
                                </span>
         
        </td>

        <td style="width:15%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
               CDL No. / State:
            </label>
        </td>

        <td style="border:1px solid #26364d;padding:0;vertical-align:middle;">
          <span style=" padding-left:12px;">
                                    {{ ($driver->currentcdllicenseno ?? '') . ' / ' . ($driver->currentcdlstate ?? '') }}
                                </span>
       
        </td>
    </tr>
</table>


               <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr>
        <td style="width:15%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Date of Hire / Use:
            </label>
        </td>

        <td style="width:42%;border:1px solid #26364d;padding:0 10px 0 0;vertical-align:middle;">
           <span style=" padding-left:12px;">
                                    {{ $cleHDate ?? '' }}
                                </span>
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
               Policy Effective / Revision Date:
            </label>
        </td>

        <td style="border:1px solid #26364d;padding:0;vertical-align:middle;">
          <span style=" padding-left:12px;">
                                    
                                    {{ $driver->esigndata['p5revisiondate'] ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>


      






            </div>

        </section>


       
        <section style="margin-top:33px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                B. DRIVER DRUG &amp; ALCOHOL PROGRAM REVIEW
            </div>

            <div>

                <p style="margin-bottom:12px;font-size:13.4px;line-height:1.28;">
                    The driver acknowledges that the Company has explained its DOT
                    controlled-substances and alcohol testing program, including
                    testing circumstances, prohibited conduct, testing procedures,
                    consequences, Clearinghouse obligations, and driver
                    responsibilities. The driver is encouraged to ask questions
                    before signing.
                </p>


                <div style="font-size:13.4px;line-height:1.15;">
                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                  <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check1'] ?? null) === 'on') />


                    <span style="margin:0;">I understand whether my position is subject to 49 CFR Part 382 and DOT testing requirements.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check2'] ?? null) === 'on') />
                    <span style="margin:0;">Participation in the Company DOT drug and alcohol testing
                        program is required to perform covered safety-sensitive
                        functions.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check3'] ?? null) === 'on') />
                    <span style="margin:0;">I reviewed prohibited drug and alcohol conduct and the circumstances for pre-employment,
                        random, reasonable-suspicion, post-accident, return-to-duty,
                        and follow-up testing.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check4'] ?? null) === 'on') />
                    <span style="margin:0;">I understand that a refusal to test
                        is a DOT violation when the applicable rules define the
                        conduct as a refusal.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check5'] ?? null) === 'on') />
                    <span style="margin:0;">I understand the consequences of a
                        verified positive drug test, an alcohol concentration of
                        0.04 or greater, or a refusal, including removal from
                        safety-sensitive functions and the SAP/return-to-duty
                        process.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check6'] ?? null) === 'on') />
                    <span style="margin:0;">I understand that an alcohol
                        concentration of 0.02 through 0.039 requires temporary
                        removal from safety-sensitive functions as required by
                        the regulations.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check7'] ?? null) === 'on') />
                    <span style="margin:0;">I understand my obligations
                        relating to required FMCSA Drug &amp; Alcohol Clearinghouse
                        queries.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check8'] ?? null) === 'on') />
                    <span style="margin:0;">I received information about the
                        effects and consequences of alcohol misuse and
                        controlled-substances use, signs and symptoms, and
                        intervention resources.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;" @checked(($driver->esigndata['p5check9'] ?? null) === 'on') />
                    <span style="margin:0;">I understand that
                        Company-authority/non-DOT testing or discipline must be
                        identified separately from DOT requirements.</span>
                  </label>


                



                   

                   


                   

                  



                </div>

            </div>

        </section>


       
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                C. CONSENT AND AUTHORIZATION FOR DOT-REQUIRED TESTING
            </div>

            <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

                <p style="margin-bottom:16px;">
                    I authorize and consent to controlled-substances and alcohol
                    testing required by applicable DOT/FMCSA regulations while I
                    am subject to the Company DOT testing program. DOT tests will
                    be conducted under 49 CFR Part 40 and applicable FMCSA
                    requirements. This authorization does not replace any separate
                    consent or electronic consent required by law, including
                    consent required within the FMCSA Drug &amp; Alcohol
                    Clearinghouse.
                </p>

                <p style="margin-bottom:0;">
                    I authorize the Company and its authorized service agents, as
                    permitted by applicable law and DOT regulations, to receive
                    and use DOT test results and related compliance information
                    for safety-sensitive qualification, regulatory compliance, and
                    employment/use decisions. DOT records remain subject to
                    applicable confidentiality and release restrictions.
                </p>

            </div>

        </section>

    </div>

</div>
<br />


<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

 

       
        <section style="margin-top:4px;">

            <div style="margin-top:20px;">

                               <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Driver signature:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
                <img
        src="{{$signatureUrl}}"
        style="height:40px;width:95%;object-fit:contain;"
    >
           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
               Date
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style="padding-left:12px;">

                                    {{ $cleHDate ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>

                          <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Printed Name:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
            <span style="padding-left:12px;">
            {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
          </span>

           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
               CDL No. / State:
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style=" padding-left:12px;">

                                   {{ $driver->currentcdllicenseno ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>

                          <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Company Representative:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
            <span style="padding-left:12px;">
            {{ $company->owner ?? '' }}
          </span>

           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
               Date:
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style="padding-left:12px;">

                                   {{ $cleHDate ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>







            </div>

        </section>


       
        <section style="margin-top:33px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                D. COMPANY DOT DRUG &amp; ALCOHOL POLICY AND PROCEDURES
            </div>

            <div style="margin-top:20px;">

                <p style="margin-bottom:12px;font-size:13.4px;line-height:1.28;">

                    Policy Purpose. The Company is committed to public safety and
                    compliance with DOT/FMCSA controlled-substances and alcohol
                    testing requirements. This policy applies to covered drivers
                    required to hold a CDL who perform safety-sensitive functions
                    subject to 49 CFR Part 382. DOT testing will be administered
                    in accordance with 49 CFR Part 40 and applicable provisions of
                    Part 382.

                    <br><br>

                    Designated Employer Representative (DER). The Company will
                    identify a DER authorized to receive program communications
                    and results, remove drivers from safety-sensitive functions
                    when required, and take immediate compliance actions. The DER
                    name, telephone number, and office/contact information must be
                    completed before this policy is issued.

                    <br><br>

                    Safety-Sensitive Functions. Covered drivers are subject to
                    applicable prohibitions and testing requirements while
                    performing safety-sensitive functions as defined by FMCSA
                    regulations, including covered on-duty activities associated
                    with operation of a commercial motor vehicle.

                </p>

            </div>

        </section>


       
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                E. PROHIBITED CONDUCT
            </div>

            <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

                <p style="margin-bottom:16px;">

                    • A covered driver may not perform safety-sensitive functions
                    when prohibited by the alcohol rules, including prohibited
                    alcohol use before, during, or following safety-sensitive
                    duties as specified by applicable FMCSA regulations.

                    <br>

                    • A covered driver may not report for or remain on duty
                    requiring safety-sensitive functions when using controlled
                    substances

                    <br>

                    contrary to applicable DOT/FMCSA requirements. • A covered
                    driver may not refuse to submit to a DOT-required test.

                    <br>

                    • A covered driver may not perform safety-sensitive functions
                    after a verified positive controlled-substances test, an
                    alcohol

                    <br>

                    concentration of 0.04 or greater, or a refusal until
                    applicable return-to-duty requirements are satisfied.

                    <br>

                    • Drivers must comply with post-accident testing instructions
                    and remain available for testing when regulatory criteria are
                    met.

                    <br>

                    • Any additional Company rule exceeding DOT requirements
                    must be separately identified as Company authority and not
                    represented as an FMCSA mandate.

                </p>

            </div>

        </section>


        
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                F. TYPES OF DOT TESTING
            </div>

            <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

                <p style="margin-bottom:16px;">

                    • Pre-Employment - required controlled-substances testing
                    before first covered safety-sensitive duty, subject to
                    regulatory exceptions.

                    <br>

                    • Random - unannounced random testing using a scientifically
                    valid selection process at applicable FMCSA rates.

                    <br>

                    • Reasonable Suspicion - testing based on observations made by
                    a supervisor trained as required by the regulations.

                    <br>

                    • Post-Accident - testing when applicable FMCSA accident
                    criteria require it, with required documentation when testing
                    cannot be timely completed.

                    <br>

                    • Return-to-Duty - testing after completion of the required
                    SAP process and before resuming safety-sensitive functions.

                    <br>

                    • Follow-Up - unannounced testing according to the SAP
                    prescribed follow-up plan.

                </p>

            </div>

        </section>


      
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                G. TESTING PROCEDURES, RESULTS &amp; CONFIDENTIALITY
            </div>

        </section>

   

</div>

<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div>

       
        <section style="margin-top:4px;">

            <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

                <p style="margin-bottom:16px;">
                    DOT testing will use Part 40 procedures and qualified
                    collection/testing personnel and service agents. Drug results
                    are reviewed by a qualified Medical Review Officer (MRO) as
                    required. Alcohol testing is performed by qualified personnel
                    using approved procedures and devices. DOT drug and alcohol
                    records will be maintained and released only as permitted or
                    required.

                    <br>

                    The Company remains responsible for compliance when using a
                    consortium/third-party administrator, collection site,
                    laboratory, MRO, BAT/STT, SAP, or other service agent.
                </p>

            </div>

        </section>


       
        <section style="margin-top:33px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                H. CONSEQUENCES, SAP &amp; RETURN-TO-DUTY
            </div>

            <div style="margin-top:20px;">

                <p style="margin-bottom:12px;font-size:13.4px;line-height:1.28;">
                    A driver with a verified positive drug test, an alcohol
                    concentration of 0.04 or greater, or a refusal must be removed
                    from DOT safety-sensitive functions. The driver must receive
                    information regarding qualified Substance Abuse Professionals
                    (SAPs) and complete the applicable evaluation,
                    education/treatment, return-to-duty, and follow-up process
                    before resuming DOT safety-sensitive functions. Company
                    employment actions beyond the federal minimum must be stated
                    separately as Company policy and applied consistently with
                    applicable law.
                </p>

            </div>

        </section>


       
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                I. CLEARINGHOUSE PROCEDURES
            </div>

            <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

                <p style="margin-bottom:16px;">
                    The Company will comply with applicable FMCSA Drug &amp; Alcohol
                    Clearinghouse requirements, including required pre-
                    employment/full queries, annual queries, reporting
                    obligations, and prohibitions on permitting a driver with a
                    prohibited status to perform safety-sensitive functions. A
                    separate limited-query consent may be used when permitted.
                    This paper form does not substitute for specific electronic
                    consent required for a full Clearinghouse query.
                </p>

            </div>

        </section>


       
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                J. DRIVER EDUCATION / EFFECTS OF DRUGS AND ALCOHOL
            </div>

            <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

                <p style="margin-bottom:16px;">
                    The Company will provide covered drivers with educational
                    materials explaining the DOT/FMCSA program and Company policy,
                    including the effects and consequences of alcohol misuse and
                    controlled-substances use on health, safety, work, and
                    personal life; signs and symptoms; and available methods of
                    intervention. Drivers may contact the DER for additional
                    information and resources.
                </p>

            </div>

        </section>


       
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                K. COMPANY-SPECIFIC PROVISIONS - COMPLETE BEFORE ISSUING POLICY
            </div>

            <br><br>

            <div style="width:100%;overflow:hidden;">

                <table style="width:100%;table-layout:fixed;font-size:12px;border-collapse:collapse;">

                    <tbody style="font-weight:bold;">

                       
                        <tr>
                            <td style="width:35%;padding:7px 6px;vertical-align:top;line-height:1.22;">
                                DER Name / Title
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    value="{{ $company->owner ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                       
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                DER Telephone / Email
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    value="{{ ($company->phone ?? '') . '/' . ($company->email ?? '') }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                       
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                TPA / Consortium
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7consortium"
                                    value="{{ $driver->esigndata['p7consortium'] ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                       
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                MRO / Contact
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7mro"
                                    value="{{ $driver->esigndata['p7mro'] ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                       
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                CMRO / Contact
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7cmro"
                                    value="{{ $driver->esigndata['p7cmro'] ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                       
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                SAP Resource / Referral Method
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7sap"
                                    value="{{ $driver->esigndata['p7sap'] ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>



                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                Company disciplinary action beyond DOT minimum
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7dotminimum"
                                    value="{{ $driver->esigndata['p7dotminimum'] ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border-bottom:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </div>

</div>

<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

<div>

    <section style="margin-top:4px;">
        <div style="margin-top:20px;font-size:12px;line-height:1.28;">
            <p style="margin-bottom:16px;">
                <b>Separate non-DOT / Company-authority testing policy, if any</b>
            </p>
        </div>
    </section>

    <section style="margin-top:33px;">

        <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
            L. CERTIFICATE OF RECEIPT OF COMPANY POLICY & EDUCATIONAL MATERIALS
        </div>

        <div style="margin-top:20px;">

            <p style="font-size:13.4px;line-height:1.28;margin-bottom:12px;">
                I certify that I received a copy of the Company DOT Drug &
                Alcohol Policy and Procedures and the educational materials
                provided under the Company FMCSA drug and alcohol program. My
                signature confirms receipt of these materials.
            </p>

            <section style="margin-top:4px;">

                <div style="margin-top:20px;">

                                            <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                Driver Printed Name:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
            <span style="padding-left:12px;">
            {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
          </span>

           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                CDL No. / State:
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style="padding-left:12px;">

                                   {{ ($driver->currentcdllicenseno ?? '') . '/ ' . ($driver->currentcdlstate ?? '') }}
                                </span>
       
        </td>
    </tr>
</table>

                                            <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                 Driver Signature:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
                      <img
        src="{{$signatureUrl}}"
        style="height:40px;width:95%;object-fit:contain;"
    >

           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                 Date:
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style="padding-left:12px;">

                                  {{ $cleHDate ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>


                                            <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                 Company Representative:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
       <span style="padding-left:12px;">

                                  {{ $company->owner ?? '' }}
                                </span>

           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                 Title:
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style="padding-left:12px;">

                                 Owner
                                </span>
       
        </td>
    </tr>
</table>

                                            <table style="width:100%;border-collapse:collapse;margin-bottom:25px;table-layout:fixed;">
    <tr style="border-bottom:1px solid gray;">
        <td style="width:25%;padding:0 5px 0 0;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                 Representative Signature:
            </label>
        </td>

        <td style="padding:0 10px 0 0;vertical-align:middle;">
     
                                                   <img
        src="{{$signaturerepUrl??''}}"
        style="height:40px;width:95%;object-fit:contain;"
    >

           
         
        </td>

        <td style="width:25%;padding:0 5px 0 5px;vertical-align:middle;">
            <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                  Date:
            </label>
        </td>

        <td style="padding:0;vertical-align:middle;">
          <span style="padding-left:12px;">

                                 {{ $cleHDate ?? '' }}
                                </span>
       
        </td>
    </tr>
</table>



           


      

           

                    

                </div>

            </section>

        </div>

    </section>

    <section style="margin-top:4px;">

        <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
            M. EMPLOYER DRUG & ALCOHOL COMPLIANCE CHECKLIST
        </div>

        <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

            <p style="margin-bottom:5px;">

               

                 <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check1'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Written Part 382 drug and alcohol policy completed with company-specific information.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check2'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Driver received policy and educational materials.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check3'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Signed certificate of receipt retained by employer.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check4'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Pre-employment drug test or qualifying exception documented before first safety-sensitive function.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check5'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Clearinghouse pre-employment query completed and driver not prohibited.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check6'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;"> Driver enrolled in random testing pool/consortium when required.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check7'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;"> Annual Clearinghouse query tracked and completed.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check8'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Prior-employer DOT drug/alcohol information request completed when required.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check9'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;"> Supervisor reasonable-suspicion training documented (at least 60 minutes alcohol and 60 minutes controlled substances) for persons who make determinations.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check10'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;"> DOT drug/alcohol records maintained securely with appropriate access controls.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input @checked(($driver->esigndata['p8check11'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">DER and service-agent contact information current.</span>
                  </label>

                  <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                   <input @checked(($driver->esigndata['p8check12'] ?? null) === 'on') type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">Any non-DOT testing program separately documented and clearly distinguished from DOT testing.</span>
                  </label>

                  <br />

              
               
             

                <span style="font-size:10.7px;line-height:1.2;">
                    <i>
                        Company completion note: Before issuing this policy,
                        complete all company-specific fields and review any
                        disciplinary provisions, state-law requirements,
                        collective bargaining obligations, and non-DOT testing
                        provisions applicable to the motor carrier.
                    </i>
                </span>

            </p>

        </div>

    </section>

</div>


</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

<div style="width:100%;">

    <h1 style="text-align:center;font-weight:bold;font-size:16px;">
        SAFETY PERFORMANCE HISTORY RECORDS REQUEST
    </h1>

    <div style="border:1px solid #26364d;background:#dbe4f1;height:25px;display:flex;align-items:center;font-size:12px;font-weight:bold;">

        <div style="width:75px;height:25px;display:flex;align-items:center;padding:0 2px;border-right:1px solid #26364d;box-sizing:border-box;">
            PART 1:
        </div>

        <div style="flex:1;height:25px;display:flex;align-items:center;padding:0 5px;box-sizing:border-box;">
            TO BE COMPLETED BY PROSPECTIVE EMPLOYEE
        </div>

    </div>

    <div style="font-size:10.7px;border-left:1px solid #333;border-right:1px solid #333;border-bottom:1px solid #333;padding:5px 5px 6px;">

        <div style="display:flex;align-items:center;min-height:20px;font-size:10.7px;">
            <span style="white-space:nowrap;">I, (Print Name):</span>
            <span style="border-bottom:1px solid #000;padding-left:12px;">
                {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
              </span>
         

            <span style="margin-left:8px;white-space:nowrap;">
               <span style="border-bottom:1px solid #000;padding-left:12px;">
                {{ $driver->socialsecurity ?? '' }}
              </span>
              
            </span>

            <span style="margin-left:7px;white-space:nowrap;">
                Social Security Number
            </span>
        </div>

        <div style="display:flex;align-items:center;min-height:20px;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Date of Birth:</span>
             <span style="border-bottom:1px solid #000;padding-left:12px;">
              {{ $driver->dob ?? '' }}
              </span>
         
        </div>

        <div style="display:flex;align-items:center;min-height:26px;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Hereby authorize:</span>

            <input
                style="width:100%;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;margin-top:0;">
            <span style="white-space:nowrap;">Previous Employer:</span>

            <input
                style="width:337px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >

            <span style="margin-left:5px;white-space:nowrap;">
                Email:
            </span>

            <input
                style="width:142px;margin-left:4px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Street:</span>

            <input
                style="width:333px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >

            <span style="margin-left:5px;white-space:nowrap;">
                Telephone:
            </span>

            <input
                style="width:125px;margin-left:4px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">City, State, Zip:</span>

            <input
                style="width:340px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >

            <span style="margin-left:5px;white-space:nowrap;">
                Fax No.:
            </span>

            <input
                style="width:125px;margin-left:4px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="font-size:10.7px;line-height:17px;margin-top:3px;">
            To release and forward the information requested by section 3 of
            this document concerning my Alcohol and Controlled Substances
            Testing records within the previous 3 years from

            <input
                style="display:inline-block;width:174px;height:15px;border:1px solid #26364d;vertical-align:middle;outline:none;box-sizing:border-box;"
            >

            <br>

            (employment application date)
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Prospective Employer:</span>
               <span style="border-bottom:1px solid #000;padding-left:12px;">
                {{ $company->cname  ?? '' }}
              </span>
            
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Attention:</span>
            <span style="border-bottom:1px solid #000;padding-left:12px;">
                {{ $company->owner  ?? '' }}
              </span>
         

            <span style="margin-left:5px;white-space:nowrap;">
                Telephone:
            </span>
             <span style="border-bottom:1px solid #000;padding-left:12px;">
                {{ $company->phone  ?? '' }}
              </span>
           
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">To: &nbsp;Street:</span>

            <input
                style="width:380px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="margin-left:32px;white-space:nowrap;">
                City, State, Zip:
            </span>

            <input
                style="width:340px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <p style="font-size:10.7px;line-height:16px;margin-top:4px;margin-bottom:5px;">
            In compliance with §40.25(g) and 391.23(h), release of this
            information must be made in a written form that ensures
            confidentiality, such as fax, email, or letter.
        </p>

        <div style="display:flex;align-items:center;font-size:10.7px;">
            <span style="white-space:nowrap;">
                Prospective employer's fax number:
            </span>

            <input
                style="width:315px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">
                Prospective employer's email address:
            </span>
             <span style="border-bottom:1px solid #000;padding-left:12px;">
                {{ $company->email  ?? '' }}
              </span>
          
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Driver Signature:</span>

            @if(!empty($signature))
                <span style="border:1px solid #000;margin-left:5px;width:340px;">
                    <img
                        src="{{ $signature }}"
                        alt="Signature"
                        style="display:block;width:100%;height:40px;object-fit:contain;"
                    >
                </span>
            @else
                <input
                    type="text"
                    style="box-sizing:border-box;height:40px;width:340px;margin-left:5px;border:1px solid #000;padding:8px;font-size:12px;"
                >
            @endif
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Date:</span>

            <input
                type="date"
                value="{{ $cleHDate ?? '' }}"
                style="width:360px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <p style="font-size:10.7px;line-height:16px;margin-top:5px;">
            This information is being requested in compliance with §40.25(g)
            and 391.23.
        </p>

    </div>

    <div style="border-left:1px solid #26364d;border-right:1px solid #26364d;border-bottom:1px solid #26364d;background:#dbe4f1;min-height:32px;display:flex;align-items:center;font-size:12px;font-weight:bold;">

        <div style="width:75px;height:20px;display:flex;align-items:center;padding:0 5px;border-right:1px solid #26364d;box-sizing:border-box;">
            PART 2:
        </div>

        <div style="flex:1;height:20px;display:flex;align-items:center;padding:0 5px;box-sizing:border-box;">
            TO BE COMPLETED BY PREVIOUS EMPLOYER
        </div>

    </div>

    <div style="border-left:1px solid #333;border-right:1px solid #333;border-bottom:1px solid #333;padding:7px 5px 6px;">

        <h2 style="text-align:center;font-weight:bold;font-size:13.4px;line-height:19px;margin-top:0;margin-bottom:4px;">
            ACCIDENT HISTORY
        </h2>

        <div style="font-weight:bold;font-size:10.7px;line-height:17px;">

            The applicant named above was employed by us.

            <span style="margin-left:3px;">Yes</span>
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            <span style="margin-left:3px;">No</span>
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            <br>

            Employed as
            <input
                style="width:160px;height:15px;border:1px solid #26364d;vertical-align:middle;outline:none;box-sizing:border-box;"
            >
            from (m/y)
            <input
                style="width:80px;height:15px;border:1px solid #26364d;vertical-align:middle;outline:none;box-sizing:border-box;"
            >
            to (m/y)
            <input
                style="width:80px;height:15px;border:1px solid #26364d;vertical-align:middle;outline:none;box-sizing:border-box;"
            >

            <br>

            1. Did he/she drive motor vehicle for you? Yes
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            No
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            If yes, what type? Straight Truck
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Tractor-Semitrailer
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Bus
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Cargo Tank
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            <br>

            Doubles/Triples
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Other (Specify)
            <input
                style="width:105px;height:15px;border:1px solid #26364d;vertical-align:middle;outline:none;box-sizing:border-box;"
            >

            <br>

            2. Reason for leaving your employment: Discharged
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Resignation
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Lay Off
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            Military Duty
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            If there is no safety performance history to report, check here
            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            sign below and return.

        </div>

        <div style="font-weight:bold;font-size:10.7px;line-height:17px;margin-top:3px;">
            ACCIDENTS: Complete the following for any accidents included in
            your accident register (§390.15(b)) that involved the applicant
            in the 3 years prior to the application date shown above, or
            check

            <input type="checkbox" style="width:10px;height:10px;vertical-align:middle;">

            here if there is no accident register data for this driver.
        </div>

        <div style="width:100%;margin-top:4px;">

            <table style="width:100%;table-layout:fixed;border-collapse:collapse;border:1px solid #333;font-size:12px;">

                <thead>
                    <tr style="height:20px;font-size:10.7px;">
                        <th style="border:1px solid #333;width:20%;">Date</th>
                        <th style="border:1px solid #333;width:20%;">Location</th>
                        <th style="border:1px solid #333;width:20%;"># Injuries</th>
                        <th style="border:1px solid #333;width:20%;"># Fatalities</th>
                        <th style="border:1px solid #333;width:20%;">Hazmat Spill</th>
                    </tr>
                </thead>

                <tbody>

                    <tr style="height:20px;">
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                    </tr>

                    <tr style="height:20px;">
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                    </tr>

                    <tr style="height:20px;">
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                        <td style="border:1px solid #333;padding:3px;">
                            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;">
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

        <div style="margin-top:5px;font-size:10.7px;line-height:17px;">
            Please provide information concerning any other accidents
            involving the applicant that were reported to government
            agencies or insurers or retained under internal company
            policies:
        </div>

        <div style="margin-top:3px;">
            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;display:block;box-sizing:border-box;">
            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;display:block;box-sizing:border-box;">
        </div>

        <div style="margin-top:4px;font-size:10.7px;font-weight:bold;">
            Any other remarks:
        </div>

        <div style="margin-top:3px;">
            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;display:block;box-sizing:border-box;">
            <input style="width:100%;height:20px;border:1px solid #26364d;outline:none;display:block;box-sizing:border-box;">
        </div>

        <div style="display:flex;align-items:center;font-size:12px;margin-top:3px;">
            <span style="white-space:nowrap;">Signature:</span>

            <input
                style="width:340px;margin-left:3px;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;font-size:12px;margin-top:3px;">
            <span>Title:</span>

            <input
                style="width:180px;margin-left:3px;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >

            <span style="margin-left:8px;">Date:</span>

            <input
                style="width:190px;margin-left:3px;height:20px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

    </div>

</div>


</div>

   <br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

<div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding:0 8px;">

    <div style="width:100%;">

        <h1 style="margin:0;text-align:center;font-size:21.4px;font-weight:bold;line-height:1.22;letter-spacing:0.3px;color:#173f69;">
            DRIVER'S ROAD TEST & PROFICIENCY EVALUATION
        </h1>

        <p style="text-align:center;font-size:12px;margin-top:8px;">
            Motor Carrier Evaluation - 49 CFR 391.31
        </p>

        <p style="font-size:12px;margin-top:8px;">
            This form is designed to document both the required road-test
            elements and a detailed driver-proficiency evaluation. The
            examiner should be competent to evaluate the driver and the type
            of vehicle/equipment used for the test.
        </p>

        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:13.4px;padding:7px 8px;">
                DRIVER / CARRIER / VEHICLE INFORMATION
            </div>

            <div>
                <table style="background:#e5e7eb;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">

                    <tbody>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;width:35%;padding:7px 6px;">
                                <b>Driver Full Name</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
                                </span>
                                    
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>CDL Number / State / Class</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ ($driver->currentcdllicenseno ?? '') . '/ ' . ($driver->currentcdlstate ?? '') . '/ ' . ($driver->currentcdlclass ?? '') }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Motor Carrier Legal Name</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ $company->cname ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>USDOT Number</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ $company->dot ?? '' }}
                                </span>
                                 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Test Date / Start Time / End Time</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 p10teststartendtime
                                </span>
                                   
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Test Location / Route</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ $company->physicaladdress ?? '' }}
                                </span>
                                   
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Power Unit Year / Make / Unit No.</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <span style="padding-left:12px;">

                                 p10powerunit
                                </span>
                                
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Trailer Type / Unit No.</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <span style="padding-left:12px;">

                                 p10trailortype
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Transmission</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;text-align:left;padding:0;">
                                
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <span style="padding-left:12px;">

                                 p10transmission
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Approximate Road-Test Miles</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 p10roadtestmiles
                                </span>
                                   
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Weather / Road Conditions</b>
                            </td>

                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 p10roadtestcondition
                                </span>
                                 
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:13.4px;padding:7px 8px;">
                PROFICIENCY RATING SCALE
            </div>

            <p style="font-size:12px;">
                Rate each applicable item: 4 = Excellent, 3 = Satisfactory, 2
                = Needs Improvement, 1 = Unsatisfactory, N/A = Not Applicable.
                Any safety-critical unsatisfactory performance should be
                explained in the remarks section.
            </p>

        </section>

        <section style="margin-top:4px;">

            <div>

                <table style="width:100%;table-layout:fixed;border-collapse:collapse;border:1px solid #000;font-size:13.5px;">

                    <thead>
                        <tr style="background:#1d3b61;color:#fff;">
                            <th style="font-size:9.4px;width:110px;border:1px solid #000;padding:4px;">
                                Evaluation Item
                            </th>

                            <th style="font-size:9.4px;width:90px;border:1px solid #000;padding:4px;">
                                Performance Standard
                            </th>

                            <th style="font-size:9.4px;border:1px solid #000;padding:4px;">4</th>
                            <th style="font-size:9.4px;border:1px solid #000;padding:4px;">3</th>
                            <th style="font-size:9.4px;border:1px solid #000;padding:4px;">2</th>
                            <th style="font-size:9.4px;border:1px solid #000;padding:4px;">1</th>
                            <th style="font-size:9.4px;border:1px solid #000;padding:4px;">N/A</th>

                            <th style="font-size:9.4px;border:1px solid #000;padding:4px;">
                                Comments
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr style="border:1px solid #555;">

                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;vertical-align:top;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Pre-trip inspection
                                </div>
                            </td>

                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;vertical-align:top;">
                                Vehicle condition, tires/wheels, lights, brakes,
                                leaks, emergency equipment, required documents
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10pretrip
                                </span>
                            </td>

                        </tr>

                        <tr style="border:1px solid #555;">

                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;vertical-align:top;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Coupling / uncoupling
                                </div>
                            </td>

                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;vertical-align:top;">
                                Fifth wheel, kingpin, airlines/electrical,
                                landing gear, tug test, visual verification
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10coupling
                                </span>
                            </td>

                        </tr>

                        <tr style="border:1px solid #555;">

                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;vertical-align:top;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Cab setup / controls
                                </div>
                            </td>

                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;vertical-align:top;">
                                Seat/mirrors, seat belt, gauges, warning devices,
                                controls, safe start
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10capsetup
                                </span>
                            </td>

                        </tr>

                        <tr style="border:1px solid #555;">

                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;vertical-align:top;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Brake system knowledge
                                </div>
                            </td>

                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;vertical-align:top;">
                                Air-brake checks if applicable, parking/service brake,
                                low-air warnings, proper use
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10brakesystem
                                </span>
                            </td>

                        </tr>

                        <tr style="border:1px solid #555;">

                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;vertical-align:top;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Starting / shifting
                                </div>
                            </td>

                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;vertical-align:top;">
                                Smooth starts, gear selection, clutch use if
                                applicable, avoids rollback/stall
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;">
                                <input type="checkbox" style="width:16px;height:16px;">
                            </td>

                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </div>

</div>


</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;">
    <div style="width:100%;">
        <section style="margin-top:4px;">
            <div style="overflow-x:auto;">
                <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Steering / lane control
                                </div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Maintains lane, tracks turns, proper hand control, avoids curb/objects
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Intersections / right-of-way
                                </div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Scanning, controlled approach, signs/signals, right-of-way decisions
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Turns</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Signal timing, lane position, off-tracking awareness, clearance, speed control
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Lane changes / merging</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Mirrors, signal, blind-spot awareness, spacing, smooth merge
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Following distance</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Maintains adequate space and adjusts for speed, traffic and conditions
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Speed management</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Complies with limits and conditions; controls speed on grades/curves
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Passing / being passed</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Safe decision, clearance, mirrors, signaling, lane return
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Railroad crossings</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Proper approach, observation and compliance when applicable
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Braking / stopping</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Smooth, controlled stops; anticipates traffic; avoids harsh braking
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Backing</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                GOAL when needed, mirror use, controlled speed, setup, clearance, spotter communication
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Parking / securement</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Safe parking, brake application, transmission, wheel position/chocks as applicable
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Hazard perception</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Identifies hazards early, escape routes, construction, pedestrians, cyclists
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Defensive driving</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Space management, patience, distraction avoidance, safe decision-making
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">Communication</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Signals, horn/lights when appropriate, professional interaction
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">ELD / HOS basic proficiency</div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Can locate duty status, logs, annotations and
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                                <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>


</div>

<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;">
    <div style="width:100%;">

        <section style="margin-top:4px;">
            <div style="overflow-x:auto;">
                <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Missing_salman
                                </div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                roadside display/transfer if evaluated
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                               <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                        <tr style="border:1px solid #555;">
                            <td style="border:1px solid #555;font-size:10px;padding:4px;width:110px;">
                                <div style="font-size:12px;font-weight:bold;line-height:1.1;">
                                    Post-trip / defect reporting
                                </div>
                            </td>
                            <td style="border:1px solid #555;font-size:9.4px;width:110px;padding:4px;line-height:14px;">
                                Identifies/report defects and secures vehicle at end of test
                            </td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;text-align:center;padding:4px;vertical-align:middle;"><input type="checkbox" style="width:16px;height:16px;"></td>
                            <td style="border:1px solid #555;padding:4px;vertical-align:top;">
                               <span style="padding-left:12px;">

                                 p10starting
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>

        <section style="margin-top:4px;">
            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:13.4px;padding:7px 8px;">
                SAFETY-CRITICAL OBSERVATIONS / REMARKS
            </div>

            <div style="overflow-x:auto;">
                <table style="width:100%;table-layout:fixed;font-size:13.5px;">
                    <tbody>
                        <tr>
                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input type="text" style="box-sizing:border-box;width:100%;border:1px solid #000;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input type="text" style="box-sizing:border-box;width:100%;border:1px solid #000;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input type="text" style="box-sizing:border-box;width:100%;border:1px solid #000;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input type="text" style="box-sizing:border-box;width:100%;border:1px solid #000;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input type="text" style="box-sizing:border-box;width:100%;border:1px solid #000;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section style="margin-top:4px;">
            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:13.4px;padding:7px 8px;">
                EXAMINER FINAL DETERMINATION
            </div>

            <div style="overflow-x:auto;">
                <table style="width:100%;table-layout:fixed;font-size:12px;">
                    <tbody>
                        <tr>
                            <td>
                              <br />
                              <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">PASS - Driver demonstrated sufficient skill to safely operate the vehicle/equipment tested.</span>
                  </label>
                          
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">PASS WITH COACHING - Driver passed; non-critical coaching items are documented above.</span>
                  </label>
                          
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                   <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">FAIL / RETEST REQUIRED - Driver did not demonstrate sufficient skill. Driver may not be assigned based on this test until carrier requirements are satisfied.</span>
                  </label>
                             
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section style="margin-top:4px;">
            <div style="overflow-x:auto;">
                <table style="background:#e5e7eb;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Name</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ $company->owner ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Title / Organization</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $company->cname ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Signature</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                
                                   
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $cleHDate ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Driver Signature acknowledging results</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                                                <img
        src="{{$signatureUrl}}"
        style="height:40px;width:95%;object-fit:contain;"
    >
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <span style="padding-left:12px;">

                                 {{ $cleHDate ?? '' }}
                                </span>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>

    </div>
</div>


</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;">
    <div style="width:100%;">

        <h1 style="margin:0;text-align:center;font-size:21.4px;font-weight:bold;line-height:1.22;letter-spacing:0.3px;color:#173f69;">
            CERTIFICATE OF DRIVER'S ROAD TEST
        </h1>

        <p style="text-align:center;font-size:12px;margin-top:8px;">
            49 CFR 391.31
        </p>

        <p style="font-size:12px;margin-top:8px;">
            Complete after the driver successfully completes the road test,
            unless the carrier relies on a permitted equivalent under the
            applicable regulation.
        </p>

        <section style="margin-top:4px;">
            <div>
                <table style="background:#e5e7eb;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Driver Full Name</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>CDL / Operator License Number</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                  <span style="padding-left:12px;">

                                 {{ $driver->currentcdllicenseno ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>State / Class / Endorsements</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $driver->currentcdlclass ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Motor Carrier Legal Name</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $company->cname ?? '' }}
                                </span>
                                   
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>USDOT Number</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $company->dot ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Power Unit Type</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <span style="padding-left:12px;">

                                 Volvo
                                </span>
                                 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Trailer(s) / Equipment Type</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 Van
                                </span>
                                
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date of Road Test</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $driver->esigndata['p13roadtest'] ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Approximate Miles</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $driver->esigndata['p13miles'] ?? '' }}
                                </span>
                                
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <p style="font-size:12px;">
                I certify that the above-named driver was given a road test
                under my supervision on the date shown and that the driver
                demonstrated sufficient driving skill to operate safely the
                type of commercial motor vehicle and equipment identified
                above, subject to the motor carrier’s qualification
                determination and applicable Federal Motor Carrier Safety
                Regulations.
            </p>
        </section>

        <section style="margin-top:4px;">
            <div>
                <table style="background:#e5e7eb;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Signature</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 p13examinersign
                                </span>
                                   
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Printed Name</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $company->owner ?? '' }}
                                </span>
                                 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Title / Organization</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $company->cname ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Business Address</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $company->physicaladdress ?? '' }}
                                </span>
                                 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date Certificate Issued</b>
                                </span>
                            </td>
                            <td style="background:#fff;border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                   <span style="padding-left:12px;">

                                 {{ $driver->esigndata['p13issuecertificate'] ?? '' }}
                                </span>
                                  
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <p style="font-size:12px;">
                Motor Carrier File Use: Retain the certificate or permitted
                equivalent in the driver qualification file as applicable.
                Provide a copy to the driver/examinee when required.
            </p>
        </section>

    </div>
</div>


</div>

<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;">
    <div style="width:100%;">

        <h4 style="margin:0 0 8px 0;font-size:12px;text-align:center;font-weight:bold;line-height:1.22;letter-spacing:0.3px;color:#000;">
            THE BELOW DISCLOSURE AND AUTHORIZATION LANGUAGE IS FOR MANDATORY
            USE BY ALL ACCOUNT HOLDERS
        </h4>

        <h4 style="margin:0 0 8px 0;font-size:12px;text-align:center;font-weight:bold;line-height:1.22;letter-spacing:0.3px;color:#000;">
            IMPORTANT DISCLOSURE
            <br>
            REGARDING BACKGROUND REPORTS FROM THE PSP Online Service
        </h4>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            In connection with your application for employment with
              <span style="border:1px solid #000;padding-left:12px;padding-right: 20px;">

                                 {{ $company->cname ?? '' }}
                                </span>
          
             &nbsp;&nbsp;(“Prospective Employer”), Prospective Employer, its employees,
            agents or contractors may obtain one or more reports regarding
            your driving, and safety inspection history from the Federal
            Motor Carrier Safety Administration (FMCSA).
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            When the application for employment is submitted in person, if
            the Prospective Employer uses any information it obtains from
            FMCSA in a decision to not hire you or to make any other adverse
            employment decision regarding you, the Prospective Employer will
            provide you with a copy of the report upon which its decision
            was based and a written summary of your rights under the Fair
            Credit Reporting Act before taking any final adverse action. If
            any final adverse action is taken against you based upon your
            driving history or safety report, the Prospective Employer will
            notify you that the action has been taken and that the action
            was based in part or in whole on this report.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            When the application for employment is submitted by mail,
            telephone, computer, or other similar means, if the Prospective
            Employer uses any information it obtains from FMCSA in a
            decision to not hire you or to make any other adverse employment
            decision regarding you, the Prospective Employer must provide
            you within three business days of taking adverse action oral,
            written or electronic notification: that adverse action has been
            taken based in whole or in part on information obtained from
            FMCSA; the name, address, and the toll free telephone number of
            FMCSA; that the FMCSA did not make the decision to take the
            adverse action and is unable to provide you the specific reasons
            why the adverse action was taken; and that you may, upon
            providing proper identification, request a free copy of the
            report and may dispute with the FMCSA the accuracy or
            completeness of any information or report. If you request a copy
            of a driver record from the Prospective Employer who procured
            the report, then, within 3 business days of receiving your
            request, together with proper identification, the Prospective
            Employer must send or provide to you a copy of your report and a
            summary of your rights under the Fair Credit Reporting Act.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            Neither the Prospective Employer nor the FMCSA contractor
            supplying the crash and safety information has the capability to
            correct any safety data that appears to be incorrect. You may
            challenge the accuracy of the data by submitting a request to
            https://dataqs.fmcsa.dot.gov. If you challenge crash or
            inspection information reported by a State, FMCSA cannot change
            or correct this data. Your request will be forwarded by the
            DataQs system to the appropriate State for adjudication.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            Any crash or inspection in which you were involved will display
            on your PSP report. Since the PSP report does not report, or
            assign, or imply fault, it will include all Commercial Motor
            Vehicle (CMV) crashes where you were a driver or co-driver and
            where those crashes were reported to FMCSA, regardless of fault.
            Similarly, all inspections, with or without violations, appear
            on the PSP report. State citations associated with Federal Motor
            Carrier Safety Regulations (FMCSR) violations that have been
            adjudicated by a court of law will also appear, and remain, on a
            PSP report.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            The Prospective Employer cannot obtain background reports from
            FMCSA without your authorization.
        </p>

        <h4 style="margin:0 0 8px 0;font-size:13.4px;text-align:center;font-weight:bold;line-height:1.22;letter-spacing:0.3px;color:#000;">
            AUTHORIZATION
        </h4>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            If you agree that the Prospective Employer may obtain such
            background reports, please read the following and sign below:
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            I authorize

              <span style="border:1px solid #000;padding-left:12px;padding-right: 20px;">

                                 {{ $company->cname ?? '' }}
                                </span>
          
             &nbsp;&nbsp;
          
            (“Prospective Employer”) to access the FMCSA Pre-Employment
            Screening Program (PSP) system to seek information regarding my
            commercial driving safety record and information regarding my
            safety inspection history. I understand that I am authorizing
            the release of safety performance information including crash
            data from the previous five (5) years and inspection history
            from the previous three (3) years. I understand and acknowledge
            that this release of information may assist the Prospective
            Employer to make a determination regarding my suitability as an
            employee.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            I further understand that neither the Prospective Employer nor
            the FMCSA contractor supplying the crash and safety information
            has the capability to correct any safety data that appears to be
            incorrect. I understand I may challenge the accuracy of the data
            by submitting a request to https://dataqs.fmcsa.dot.gov. If I
            challenge crash or inspection information reported by a State,
            FMCSA cannot change or correct this data. I understand my
            request will be forwarded by the DataQs system to the
            appropriate State for adjudication.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            I understand that any crash or inspection in which I was
            involved will display on my PSP report. Since the PSP report
            does not report, or assign, or imply fault, I acknowledge it
            will include all CMV crashes where I was a driver or co-driver
            and where those crashes were reported to FMCSA, regardless of
            fault. Similarly, I understand all inspections, with or without
            violations, will appear on my PSP report, and State citations
            associated with FMCSR violations that have been adjudicated by a
            court of law will also appear, and remain, on my PSP report.
        </p>

        <p style="font-size:10.7px;margin:0 0 4px 0;">
            I have read the above Disclosure Regarding Background Reports
            provided to me by Prospective Employer and I understand that if
            I sign this Disclosure and Authorization, Prospective Employer
            may obtain a report of my crash and inspection history. I hereby
            authorize Prospective Employer and its employees, authorized
            agents, and/or affiliates to obtain the information authorized
            above.
        </p>

        <section style="margin-top:4px;">
            <div style="overflow-x:auto;">
                <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr>
                            <td style="border-bottom:1px solid gray;vertical-align:top;">
                                Date:

                                <span style="padding-left:12px;">

                                 {{ $cleHDate ?? '' }}
                                </span>
                            </td>

                            <td style="border-bottom:1px solid gray;vertical-align:top;display:flex;align-items:center;">
                                Signature:

                                                                                              <img
        src="{{$signatureUrl}}"
        style="height:40px;width:95%;object-fit:contain;"
    >
                            </td>
                        </tr>

                        <tr>
                            <td style="padding-top:8px;">
                                Name (Please Print) : 
                                <span style="border-bottom:1px solid #000; padding-left:12px;">

                                 {{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}
                                </span>
                              
                              
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <br>

            <p style="font-size:10px;margin:0 0 8px 0;">
                <b>
                    NOTICE: This form is made available to monthly account
                    holders by NIC on behalf of the U.S. Department of
                    Transportation, Federal Motor Carrier Safety Administration
                    (FMCSA). Account holders are required by federal law to
                    obtain an Applicant’s written or electronic consent prior to
                    accessing the Applicant’s PSP report. Further, account
                    holders are required by FMCSA to use the language contained
                    in this Disclosure and Authorization form to obtain an
                    Applicant’s consent. The language must be used in whole,
                    exactly as provided. Further, the language on this form must
                    exist as one stand-alone document. The language may NOT be
                    included with other consent forms or any other language.
                </b>
            </p>

            <p style="font-size:10px;">
                <b>
                    NOTICE: The prospective employment concept referenced in
                    this form contemplates the definition of “employee”
                    contained at 49 C.F.R. 383.5.
                </b>
            </p>

        </section>

    </div>
</div>


</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;">
    <div style="width:100%;">

        <section style="margin-top:12px;">
            <h2 style="margin:0 0 8px 0;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                26 COMPANY DRIVER SAFETY POLICIES &amp; OPERATING PROCEDURES
            </h2>

            <p style="font-size:12px;color:#6b7280;margin:0 0 8px 0;">
                <i>
                    Motor-carrier policy template - carrier-specific fields must
                    be completed before issue
                </i>
            </p>

            <div style="margin-bottom:8px;font-size:14px;">
                These policies apply to drivers while operating, possessing,
                or being responsible for Company equipment, and supplement
                applicable federal, state, and local law. Where a law,
                regulation, lease, collective agreement, or written Company
                directive imposes a stricter lawful requirement, the stricter
                requirement controls. Nothing in this policy authorizes a
                driver or the Company to violate the FMCSRs or other
                applicable law.
            </div>

            <div style="overflow-x:auto;">
                <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:top;">
                                <span style="font-size:13.4px;">
                                    Motor Carrier Legal Name:
                                </span>
                                <br>
                                <input
                                    value="{{ $company->cname ?? '' }}"
                                    type="text"
                                    style="border:1px solid #000;"
                                >
                            </td>

                            <td style="vertical-align:top;">
                                <span style="font-size:11px;">
                                    USDOT #:
                                </span>
                                <input
                                    value="{{ $company->dot ?? '' }}"
                                    type="text"
                                    style="border:1px solid #000;"
                                >
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top;">
                                <span style="font-size:13.4px;">
                                    DBA (if any):
                                </span>
                                <br>
                                {{ $driver->esigndata['p15dbaany'] ?? '' }}
                            </td>

                            <td style="vertical-align:top;">
                                <span style="font-size:13.4px;">
                                    Policy Effective Date:
                                </span>
                                {{ $driver->esigndata['p15policyeffective'] ?? '' }}
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top;">
                                <span style="font-size:13.4px;">
                                    Safety/Compliance Contact:
                                </span>
                                <br>
                                <input
                                    value="DOT COMPLIANCE SOLUTIONS LLC"
                                    type="text"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;"
                                >
                            </td>

                            <td style="vertical-align:top;">
                                <span style="font-size:13.4px;">
                                    24-Hour Incident Contact:
                                </span>
                                <input
                                    value="{{ $driver->emecontactno ?? '' }}"
                                    type="text"
                                    style="border:1px solid #000;"
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section style="margin-top:12px;">
            <h2 style="margin:0 0 8px 0;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                A. ELD &amp; HOURS-OF-SERVICE (HOS) POLICY
            </h2>

            <div style="margin-bottom:8px;font-size:14px;">

                <p style="margin:0 0 8px 0;">
                    Drivers must comply with 49 CFR Part 395 and all applicable
                    HOS and ELD requirements. Drivers may not drive or remain on
                    duty when prohibited by applicable HOS limits, and no
                    dispatcher, manager, customer, or delivery schedule
                    authorizes a violation.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Log in only under your own ELD credentials and accurately
                    record all duty statuses, locations, annotations, shipping
                    information, vehicles, trailers, and other required entries.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Review and certify each required record of duty status as
                    complete and accurate. Respond to proposed edits truthfully;
                    never accept an edit that makes the record inaccurate.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Never falsify, erase, conceal, disable, unplug, bypass,
                    manipulate, or tamper with the ELD, ECM connection, GPS/data
                    source, unidentified-driving records, or supporting
                    documents.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Report an ELD malfunction or diagnostic issue to the
                    Company immediately and follow the required malfunction
                    procedure, including reconstruction and use of paper logs
                    when required.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Keep required ELD instructions, transfer instructions,
                    malfunction instructions, and required blank graph-grid logs
                    in the vehicle when applicable.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Do not use personal conveyance, yard move, team-driver
                    assignment, or any other special driving category to conceal
                    on-duty or driving time.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Submit supporting documents and requested logs promptly.
                    Never destroy or alter fuel, toll, dispatch, scale, repair,
                    trip, or other records used to verify HOS.
                </p>

                <p style="margin:0;">
                    Company commitment: The Company will not require or permit a
                    driver to violate HOS rules and will not harass a driver
                    through ELD information or connected technology. Drivers must
                    promptly report any instruction they believe would require an
                    HOS violation.
                </p>

            </div>
        </section>

    </div>
</div>

</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

           
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    B. CAMERA, DASH-CAM &amp; SAFETY-EQUIPMENT NON-TAMPERING POLICY
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        Company-installed outward-facing cameras, inward-facing
                        cameras, dash cameras, telematics devices,
                        collision-avoidance systems, GPS units, ELD hardware, and
                        related safety equipment are Company safety assets. Drivers
                        may not interfere with their normal operation except as
                        specifically authorized in writing by the Company or
                        required for an emergency.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not cover, block, turn, reposition, unplug, disconnect,
                        remove, damage, disable, reset, modify, or obstruct any
                        camera, lens, microphone (where lawfully used), cable,
                        sensor, telematics unit, or recording system.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not place tape, clothing, sunshades, stickers, objects,
                        or other material over a camera or sensor.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not delete, overwrite, conceal, download, copy,
                        distribute, or attempt to access recordings unless
                        authorized by Company officials.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Immediately report a damaged, malfunctioning, loose,
                        obstructed, or non-operating camera or safety device.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Never retaliate against, threaten, or interfere with
                        personnel who review safety footage in accordance with
                        Company policy and applicable law.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        Camera use and access must comply with applicable privacy,
                        notice, audio-recording, labor, and employment laws. The
                        Company should provide any jurisdiction-specific camera notice
                        or consent required where the vehicle or driver operates.
                    </p>
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-zheight:1.2;color:#174875;">
                    C. SEAT-BELT POLICY
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        The driver must wear a properly installed and adjusted seat
                        belt whenever operating a commercial motor vehicle and must
                        comply with all applicable seat-belt laws. The driver must
                        not move the vehicle if the driver seat belt is unavailable,
                        materially damaged, or cannot be properly secured, unless
                        movement is specifically permitted by law for repair or
                        safety purposes.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Seat belts must be worn correctly; disabling, defeating,
                        clipping behind the body, or otherwise bypassing the
                        restraint is prohibited.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Authorized passengers must use available required
                        restraints.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Any seat-belt defect must be reported promptly and
                        documented through the Company maintenance/defect-reporting
                        process.
                    </p>
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    D. NO HAND-HELD DEVICE / DISTRACTED-DRIVING POLICY
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        Drivers are prohibited from texting or using a hand-held
                        mobile telephone while driving a CMV. Company policy also
                        prohibits holding or manually operating tablets, dispatch
                        devices, or other electronic devices while the vehicle is
                        moving or temporarily stationary in traffic, except as
                        allowed for emergency communications under applicable law.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Use only lawful hands-free/voice-activated functions and
                        keep the device positioned so it can be operated without
                        unsafe reaching.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Program navigation, ELD entries not permitted while
                        driving, messages, load information, and other manual tasks
                        only when safely parked.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • No watching videos, social media, gaming, typing, reading
                        messages, photographing, or other distracting device use
                        while driving.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • A dispatcher or customer request never authorizes unsafe
                        or unlawful device use. Safely park before responding when
                        manual interaction is required.
                    </p>
                </div>
            </section>

        </div>
    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

         
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    E. VEHICLE / TRUCK ABANDONMENT &amp; RETURN-OF-EQUIPMENT POLICY
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        Company equipment must not be abandoned. Upon termination,
                        resignation, removal from service, end of assignment, or
                        written Company direction, the driver must return the truck,
                        trailer, keys, fuel cards, permits, toll devices, ELD
                        equipment, documents, and other Company property to the
                        location designated by the Company.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not leave Company equipment at a residence, truck stop,
                        repair shop, tow yard, customer facility, airport, roadside
                        location, or other location without Company authorization,
                        except when an emergency makes continued operation unsafe or
                        unlawful.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • If an emergency prevents return to the assigned location,
                        immediately contact Company management, secure the
                        equipment, provide the exact location, and follow written
                        recovery instructions.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not transfer possession, keys, fuel cards, access
                        credentials, or equipment to another person without
                        authorization.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Before surrendering equipment, complete the required
                        post-trip inspection, report known defects/damage, remove
                        personal belongings, and return Company records/property.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        The Company may pursue lawful recovery of documented losses or
                        expenses caused by unauthorized abandonment. Any
                        reimbursement, deduction, offset, or collection will be
                        handled only to the extent permitted by applicable
                        wage-and-hour, employment, contract, and other law; this
                        policy does not authorize an unlawful payroll deduction.
                    </p>
                </div>
            </section>

          
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    F. PASSENGER &amp; PET POLICY - DRIVER ONLY UNLESS WRITTEN
                    AUTHORIZATION
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        Company vehicles are DRIVER ONLY unless the Company provides
                        prior written authorization. No passenger, family member,
                        friend, child, trainee, team driver not assigned by the
                        Company, hitchhiker, or other person may ride in or operate
                        Company equipment without the required written
                        authorization.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • No pets or animals are permitted in Company equipment
                        without prior written Company authorization. Service animals
                        and other legally protected accommodations will be handled
                        as required by applicable law.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Authorization must identify the approved passenger/pet or
                        approved category and any conditions, dates, insurance
                        requirements, or documentation required by the Company.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Verbal permission from a dispatcher, customer, another
                        driver, or non-authorized employee is not sufficient when
                        written approval is required.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • The driver must ensure every authorized occupant complies
                        with safety rules, seat-belt requirements, site
                        restrictions, and Company instructions.
                    </p>
                </div>
            </section>

        </div>
    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

        
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    G. ACCIDENT, CITATION, INSPECTION &amp; VIOLATION IMMEDIATE-REPORTING POLICY
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        Drivers must immediately report any crash/accident, vehicle
                        damage, cargo incident, roadside inspection,
                        citation/ticket, warning, out-of-service order, arrest
                        affecting driving duties, license action, tow, impound,
                        hazardous-material incident, or alleged safety violation
                        arising while operating or responsible for Company
                        equipment. When immediate reporting is impossible because of
                        an emergency, report as soon as safely possible.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • For an accident: stop safely, protect the scene, call
                        911/law enforcement when required, obtain medical assistance
                        when needed, and notify the Company immediately.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not admit fault, promise payment, argue about
                        liability, or sign non-required statements for another
                        party. Cooperate with law enforcement and provide legally
                        required information.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Photograph/video the scene when safe and lawful, including
                        vehicle positions, damage, plates/unit numbers, road
                        conditions, traffic controls, cargo, and relevant
                        surroundings.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Collect other-party, witness, law-enforcement, tow, and
                        insurance information when available. Preserve
                        dash-camera/ELD data and all documents.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Send the Company every citation, inspection report,
                        warning, court notice, repair order, accident exchange, tow
                        document, and related record immediately.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not conceal, discard, alter, or delay reporting a
                        citation or inspection. Notify the Company of the final
                        court/agency disposition and provide supporting
                        documentation.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        Responsibility for citations and costs: A driver is
                        responsible for complying with laws applicable to the driver
                        and may be responsible for driver-attributable fines,
                        penalties, or costs to the extent permitted by law and Company
                        agreement. The Company does not assume personal responsibility
                        for a driver’s unlawful conduct merely because the driver was
                        operating Company equipment. However, nothing in this policy
                        transfers a legal duty, fine, liability, insurance obligation,
                        or carrier responsibility that applicable law places on the
                        motor carrier or another party.
                    </p>
                </div>
            </section>

       
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    H. DAMAGE TO COMPANY / LEASED EQUIPMENT &amp; PROPERTY
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        Drivers must exercise reasonable care over trucks, trailers,
                        cargo equipment, fuel cards, keys, permits, technology, and
                        other property in their possession. All damage, loss, theft,
                        misuse, or suspected mechanical failure must be reported
                        immediately.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not continue operating equipment when doing so would be
                        unsafe, unlawful, or likely to cause additional damage.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not authorize non-emergency repairs, towing, parts
                        replacement, or major expenditures beyond Company limits
                        without approval, unless immediate action is reasonably
                        necessary to protect life/property and Company contact is
                        unavailable.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • The Company may investigate whether damage resulted from
                        normal wear, mechanical failure, third-party conduct, an
                        unavoidable event, negligence, willful misconduct,
                        unauthorized use, or violation of Company policy.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Where a driver is legally responsible for damage caused by
                        the driver’s negligent, intentional, unauthorized, or
                        prohibited use, the Company may seek reimbursement for
                        documented repair/recovery costs to the extent allowed by
                        applicable law and enforceable agreement.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • No wage deduction or chargeback is automatically
                        authorized by this policy. Any deduction from wages/pay must
                        comply with applicable federal and state law and any
                        required written authorization.
                    </p>
                </div>
            </section>

        </div>
    </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

       
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    I. VEHICLE CARE, INSPECTION, MAINTENANCE &amp; SECURITY PROCEDURES
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        • Conduct required pre-trip/post-trip inspections and
                        monitor the vehicle during operation. Promptly report
                        defects affecting safe operation.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not operate an out-of-service vehicle or equipment with
                        a condition that makes operation unsafe or unlawful.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Keep the cab, sleeper, windshield, mirrors, lights,
                        cameras, license plates, and safety equipment reasonably
                        clean and unobstructed.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Secure the truck, trailer, cargo, keys, fuel cards,
                        permits, and electronic devices whenever unattended. Follow
                        Company parking and high-value cargo instructions.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Do not make unauthorized mechanical, electrical,
                        emissions, speed-governor, ECM, camera, ELD, or
                        safety-system modifications.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Follow fuel, DEF, tire, fluid, preventive-maintenance,
                        roadside-repair, and approved-vendor procedures issued by
                        the Company.
                    </p>
                </div>
            </section>

        
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    J. SAFE DRIVING &amp; GENERAL CONDUCT
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        • Operate at a safe and lawful speed for traffic, weather,
                        visibility, road, grade, vehicle, and cargo conditions.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Maintain safe following distance and space management.
                        Avoid aggressive driving, unsafe lane changes, tailgating,
                        racing, road rage, and retaliatory driving.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Never operate while ill, fatigued, impaired, distracted,
                        or otherwise unable to drive safely. Notify dispatch/safety
                        when conditions prevent safe operation.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Obey traffic-control devices, railroad-crossing
                        requirements, size/weight restrictions, route restrictions,
                        bridge/clearance limits, and hazardous-material rules when
                        applicable.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • No alcohol, illegal drugs, unauthorized controlled
                        substances, weapons prohibited by Company policy/law, or
                        other prohibited items in Company equipment. DOT
                        drug/alcohol requirements are addressed separately in the
                        Company DOT Drug &amp; Alcohol Policy.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Follow lawful shipper/receiver rules, cargo securement
                        procedures, seal procedures, parking rules, and
                        customer-site safety requirements.
                    </p>
                </div>
            </section>

     
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    K. POLICY VIOLATIONS, INVESTIGATION &amp; CORRECTIVE ACTION
                </h2>

                <div style="margin-bottom:8px;font-size:14px;">
                    <p style="margin-top:0;margin-bottom:8px;">
                        The Company may investigate reported or observed policy
                        violations using lawful sources such as driver statements,
                        inspection/citation records, ELD data, telematics, camera
                        footage, maintenance records, dispatch records, and other
                        relevant evidence. Corrective action may include coaching,
                        retraining, written warning, suspension from driving duties,
                        removal from a customer/account, or termination of
                        employment/contract, subject to applicable law and Company
                        policy. Regulatory reporting will be completed when
                        required.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        Nothing in these policies requires a driver to operate
                        unsafely, violate the FMCSRs, falsify records, or waive
                        rights that cannot lawfully be waived.
                    </p>
                </div>
            </section>

        </div>
    </div>
</div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

            <section style="margin-top:12px;">

                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    27 DRIVER RECEIPT, ACKNOWLEDGMENT &amp; AGREEMENT
                </h2>

                <p style="font-size:12px;margin-top:0;margin-bottom:8px;color:#6b7280;">
                    <i>Company Safety Policies &amp; Operating Procedures</i>
                </p>

                <div style="margin-bottom:8px;font-size:14px;line-height:1.4;">
                    I acknowledge that I received, read, and had an opportunity to
                    ask questions about the Company Driver Safety Policies &amp;
                    Operating Procedures. I understand that compliance with
                    applicable law and Company safety rules is a condition of
                    being authorized to operate Company equipment. I agree to
                    promptly report safety events, equipment defects, accidents,
                    citations, inspections, and other matters required by these
                    policies.
                </div>

                <div style="overflow-x:auto;">
                    <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:14px;">
                        <tbody>

                            <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: ELD &amp; Hours-of-Service Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Camera / Dash-Cam / Safety-Equipment Non-Tampering Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>
                             <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Seat-Belt Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                              <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">
                                    I received and reviewed: No Hand-Held Device / Distracted-Driving Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                                       <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Vehicle / Truck Abandonment &amp; Return-of-Equipment Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                                           <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Passenger &amp; Pet Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                                                      <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Accident, Citation, Inspection &amp; Violation Reporting Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                                                            <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Damage to Company / Leased Equipment &amp; Property Policy</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                                                                          <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Vehicle Care, Inspection, Maintenance &amp; Security Procedures</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>

                                                                                            <tr>
                                <td style="padding:4px 0;">
                                          <label style="display:flex;align-items:center;margin-bottom:7px;font-size:12px;line-height:16px;">
                    <input type="checkbox" style="width:13px;height:16px;margin:0 6px 0 0;flex:0 0 auto;">
                    <span style="margin:0;">I received and reviewed: Safe Driving &amp; General Conduct</span>
                  </label>


                                  
                                    
                                </td>
                            </tr>


                           


                           


                          




                        </tbody>
                    </table>
                </div>

                <p style="font-size:14px;margin-top:10px;margin-bottom:8px;line-height:1.4;">
                    I understand that this acknowledgment does not create an
                    unlawful wage deduction, shift a legal duty that applicable
                    law places on the motor carrier, or waive any non-waivable
                    right. Company reimbursement or disciplinary decisions will be
                    made under applicable law and the facts of the incident.
                </p>

                <div style="overflow-x:auto;">
                    <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                        <tbody>

                            <tr>
                                <td style="width:50%;padding:6px 8px 6px 0;vertical-align:top;">
                                    <span style="font-size:13.4px;">
                                        Driver Printed Name:
                                    </span>
                                    <br>
                                    <input
                                        value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="text"
                                    >
                                </td>

                                <td style="width:50%;padding:6px 0 6px 8px;vertical-align:top;">
                                    <span style="font-size:13.4px;">
                                        Driver ID / Unit:
                                    </span>
                                    <br>
                                    <input
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="text"
                                    >
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:6px 8px 6px 0;vertical-align:top;">
                                    <span style="font-size:13.4px;">
                                        Driver Signature:
                                    </span>
                                    <br>

                                        <img
        src="{{$signatureUrl}}"
        style="height:40px;width:95%;object-fit:contain;border:1px solid #000;"
    >
                                </td>

                                <td style="padding:6px 0 6px 8px;vertical-align:top;">
                                    <span style="font-size:13.4px;">Date:</span>
                                    <br>
                                    <input
                                        value="{{ $cleHDate ?? '' }}"
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="date"
                                    >
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:6px 8px 6px 0;vertical-align:top;">
                                    <span style="font-size:13.4px;">
                                        Company Representative:
                                    </span>
                                    <br>
                                    <input
                                        value="{{ $company->owner ?? '' }}"
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="text"
                                    >
                                </td>

                                <td style="padding:6px 0 6px 8px;vertical-align:top;">
                                    <span style="font-size:13.4px;">Title:</span>
                                    <br>
                                    <input
                                        value="Owner"
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="text"
                                    >
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:6px 8px 6px 0;vertical-align:top;">
                                    <span style="font-size:13.4px;">
                                        Representative Signature:
                                    </span>
                                    <br>
                                    <input
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="text"
                                    >
                                </td>

                                <td style="padding:6px 0 6px 8px;vertical-align:top;">
                                    <span style="font-size:13.4px;">Date:</span>
                                    <br>
                                    <input
                                        value="{{ $cleHDate ?? '' }}"
                                        style="box-sizing:border-box;width:100%;height:32px;border:1px solid #000;padding:4px;"
                                        type="date"
                                    >
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </section>

            <section style="margin-top:12px;">

                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
                    EMPLOYER IMPLEMENTATION CHECKLIST
                </h2>

                <div style="margin-bottom:8px;font-size:13.4px;line-height:1.4;">

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Complete the motor-carrier legal name, USDOT number,
                        effective date, and safety contact before issuing the
                        policy.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Provide any state-specific wage-deduction,
                        camera/audio-recording, privacy, passenger,
                        pet/accommodation, or employment-law addenda required for
                        the driver’s work locations.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Train drivers on ELD/HOS, incident reporting,
                        camera/device rules, and return-of-equipment procedures.
                    </p>

                    <p style="margin-top:0;margin-bottom:8px;">
                        • Retain the signed acknowledgment in the appropriate
                        personnel/safety file and document later policy revisions
                        and re-acknowledgments.
                    </p>

                </div>

            </section>

        </div>
    </div>
</div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

    
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:18.7px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28 DETAILED COMPANY DRIVER SAFETY POLICIES &amp; PROCEDURES
            </h2>

            <div style="
                margin-bottom:8px;
                font-size:14px;
                line-height:1.35;
            ">
                This section expands the Company Driver Safety Policies &amp;
                Operating Procedures into a detailed operating manual. It is
                intended to be adopted by the motor carrier identified below
                and used together with the signed Driver Receipt &amp;
                Acknowledgment. Company-specific fields must be completed
                before issue.
            </div>

        </section>


        <section style="margin-top:4px;">

            <table style="
                width:100%;
                border-collapse:collapse;
                table-layout:fixed;
                font-size:13.5px;
            ">
                <tr>

                 
                    <td style="
                        width:48%;
                        padding:0 8px 0 0;
                        vertical-align:top;
                    ">

                        <table style="
                            width:100%;
                            border-collapse:collapse;
                            background:#e5e5e5;
                            table-layout:fixed;
                        ">
                            <tr>
                                <td style="
                                    padding:7px 6px;
                                    text-align:left;
                                    font-size:12px;
                                ">
                                    <b>Motor Carrier Legal Name</b>
                                </td>
                            </tr>

                            <tr>
                                <td style="
                                    padding:7px 6px;
                                    text-align:left;
                                    font-size:12px;
                                ">
                                    <b>USDOT Number</b>
                                </td>
                            </tr>

                            <tr>
                                <td style="
                                    padding:7px 6px;
                                    text-align:left;
                                    font-size:12px;
                                ">
                                    <b>Safety / Compliance Contact</b>
                                </td>
                            </tr>

                            <tr>
                                <td style="
                                    padding:7px 6px;
                                    text-align:left;
                                    font-size:12px;
                                ">
                                    <b>24-Hour Accident / Emergency Contact</b>
                                </td>
                            </tr>

                      
                            <tr>
                                <td style="height:20px;"></td>
                            </tr>

                            <tr>
                                <td style="height:20px;"></td>
                            </tr>

                            <tr>
                                <td style="height:20px;"></td>
                            </tr>

                            <tr>
                                <td style="height:20px;"></td>
                            </tr>

                            <tr>
                                <td style="
                                    padding:7px 6px;
                                    text-align:left;
                                    font-size:12px;
                                ">
                                    <b>DER / Drug &amp; Alcohol Contact</b>
                                </td>
                            </tr>
                        </table>

                    </td>


                
                    <td style="
                        width:52%;
                        padding:0;
                        vertical-align:top;
                    ">

                        <table style="
                            width:100%;
                            border-collapse:collapse;
                            table-layout:fixed;
                        ">

                           
                            <tr>
                                <td colspan="3" style="
                                    padding:0 0 4px 0;
                                    vertical-align:middle;
                                ">
                                    <input
                                        type="text"
                                        value="{{ $company->cname ?? '' }}"
                                        style="
                                            display:block;
                                            box-sizing:border-box;
                                            width:100%;
                                            height:20px;
                                            border:1px solid #000;
                                            padding:2px 6px;
                                            font-size:12px;
                                            font-family:'Tinos',serif;
                                        "
                                    >
                                </td>
                            </tr>

                   
                            <tr>

                                <td style="
                                    width:42%;
                                    padding:0 5px 4px 0;
                                    vertical-align:middle;
                                ">
                                    <input
                                        type="text"
                                        value="{{ $company->dot ?? '' }}"
                                        style="
                                            display:block;
                                            box-sizing:border-box;
                                            width:100%;
                                            height:20px;
                                            border:1px solid #000;
                                            padding:2px 6px;
                                            font-size:12px;
                                            font-family:'Tinos',serif;
                                        "
                                    >
                                </td>

                                <td style="
                                    width:25%;
                                    padding:0 5px 4px 0;
                                    vertical-align:middle;
                                    font-size:12px;
                                ">
                                    <b>Effective Date:</b>
                                </td>

                                <td style="
                                    width:33%;
                                    padding:0 0 4px 0;
                                    vertical-align:middle;
                                ">
                                    <input
                                      value="{{ $driver->esigndata['p21effectivedate'] ?? '' }}"
                                        type="text"
                                        style="
                                            display:block;
                                            box-sizing:border-box;
                                            width:100%;
                                            height:20px;
                                            border:1px solid #000;
                                            padding:2px 6px;
                                            font-size:12px;
                                            font-family:'Tinos',serif;
                                        "
                                    >
                                </td>

                            </tr>

           
                            <tr>
                                <td colspan="3" style="
                                    padding:0 0 4px 0;
                                    vertical-align:middle;
                                ">
                                    <input
                                    value="{{ $driver->esigndata['p21safetycontact'] ?? '' }}"
                                        type="text"
                                        style="
                                            display:block;
                                            box-sizing:border-box;
                                            width:100%;
                                            height:20px;
                                            border:1px solid #000;
                                            padding:2px 6px;
                                            font-size:12px;
                                            font-family:'Tinos',serif;
                                        "
                                    >
                                </td>
                            </tr>

                          
                            <tr>
                                <td colspan="3" style="
                                    padding:0 0 4px 0;
                                    vertical-align:middle;
                                ">
                                    <input
                                        type="text"
                                        value="{{ $driver->emecontactno ?? '' }}"
                                        style="
                                            display:block;
                                            box-sizing:border-box;
                                            width:100%;
                                            height:20px;
                                            border:1px solid #000;
                                            padding:2px 6px;
                                            font-size:12px;
                                            font-family:'Tinos',serif;
                                        "
                                    >
                                </td>
                            </tr>

                           
                            <tr>
                                <td colspan="3" style="
                                    padding:0;
                                    vertical-align:middle;
                                ">
                                    <input
                                    value="{{ $driver->esigndata['p21derdrug'] ?? '' }}"
                                        type="text"
                                        style="
                                            display:block;
                                            box-sizing:border-box;
                                            width:100%;
                                            height:20px;
                                            border:1px solid #000;
                                            padding:2px 6px;
                                            font-size:12px;
                                            font-family:'Tinos',serif;
                                        "
                                    >
                                </td>
                            </tr>

                        </table>

                    </td>

                </tr>
            </table>

        </section>


      
        <section style="margin-top:12px;">

            <div style="
                background:#d8e9f6;
                padding:9px 10px;
                font-size:12.7px;
                line-height:1.35;
                color:#173f69;
            ">
                <b>IMPORTANT:</b>
                These policies establish minimum Company expectations. They do
                not authorize a driver or motor carrier to violate federal,
                state, or local law. When a lawful rule is stricter, the
                stricter rule controls.
            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.1 ELD &amp; HOURS-OF-SERVICE POLICY
            </h2>


            <div style="
                margin-bottom:8px;
                font-size:14px;
                line-height:1.35;
            ">

                <p style="
                    margin:0 0 8px 0;
                    font-size:14px;
                ">
                    The Company requires every driver subject to 49 CFR Part 395
                    to plan, record, and perform work within all applicable
                    hours-of-service limits. Dispatch schedules, customer
                    appointments, detention, traffic, weather, parking
                    availability, or load urgency do not authorize an HOS
                    violation.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Property-carrying drivers subject to the standard rule may
                    drive a maximum of 11 hours after 10 consecutive hours off
                    duty and may not drive beyond the 14th consecutive hour
                    after coming on duty following 10 consecutive hours off
                    duty. A 30-minute non-driving interruption is required
                    after 8 cumulative hours of driving without such an
                    interruption. Applicable 60/70-hour limits, sleeper-berth
                    provisions, short-haul exceptions, adverse-driving
                    provisions, and other lawful exceptions must be used only
                    when the facts actually qualify.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Log in only to the driver account assigned to you. Never
                    share ELD usernames, passwords, PINs, or credentials. Review
                    unidentified driving events and accept only driving that you
                    actually performed; annotate events that do not belong to
                    you.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Accurately record driving, on-duty not driving, sleeper
                    berth, and off-duty time. Accurately enter required vehicle,
                    trailer, shipping-document, location, co-driver, and
                    annotation information.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Certify required records of duty status only after
                    reviewing them. Proposed carrier edits must be accepted only
                    when they make the record accurate. Drivers must never be
                    instructed to approve an inaccurate edit.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Personal conveyance and yard move may be used only when
                    authorized by Company policy and permitted by FMCSA rules.
                    They may never be used to hide driving time, reposition a
                    load for the Company, extend available hours, or avoid an
                    HOS violation.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • ELD tampering is prohibited. Do not disconnect power/data,
                    unplug the ECM connection, block GPS, alter device settings,
                    create false driver accounts, erase or conceal supporting
                    records, or otherwise manipulate the system.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Immediately report an ELD malfunction, data diagnostic,
                    loss of power, missing driving event, transfer problem, or
                    other issue. Follow the ELD malfunction instructions,
                    reconstruct required records, and use paper logs when
                    required until the device is restored or replaced.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Keep the required ELD information packet and blank
                    graph-grid logs in the CMV when applicable. Be able to
                    display and transfer records to an authorized safety
                    official using the ELD methods supported by the device.
                </p>


                <p style="
                    margin:0 0 8px 0;
                    font-size:13px;
                ">
                    • Keep fuel, toll, dispatch, scale, repair, trip,
                    bill-of-lading, and other supporting documents accurate and
                    available as required. Never destroy or alter a supporting
                    document to make a log appear compliant.
                </p>


                <p style="
                    margin:0;
                    font-size:13px;
                ">
                    • If a dispatcher, customer, broker, or manager requests
                    movement that cannot lawfully be completed within available
                    hours, the driver must notify Safety/Dispatch and stop or
                    decline the movement until it can be performed legally.
                </p>

            </div>

        </section>

    </div>
</div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.2 PRE-TRIP, POST-TRIP &amp; EQUIPMENT INSPECTION POLICY
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    No driver may operate Company-controlled equipment until the
                    driver is satisfied that the vehicle and combination are in
                    safe operating condition. A driver may not rely solely on a
                    prior driver, shipper, customer, yard employee, maintenance
                    vendor, or another carrier to determine that equipment is
                    safe.
                </p>


                <p style="margin:0 0 8px 0;">
                    Before movement, the driver must conduct a systematic
                    walk-around and cab inspection appropriate to the equipment.
                    At a minimum, inspect or verify the following as applicable:
                </p>


                <p style="margin:0 0 8px 0;">
                    • Service brakes, parking brake, air-brake system, air
                    lines, glad hands, trailer brake connections, air pressure,
                    warning devices, and observable air leaks.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Steering components, suspension, axles, springs, hangers,
                    torque rods, frame condition, and visible structural
                    defects.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Tires for inflation/condition, tread, cuts/bulges, exposed
                    cord, and obvious damage; wheels/rims, hubs, lug nuts,
                    spacers, and signs of looseness or leakage.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Headlamps, high beams, turn signals, four-way flashers,
                    brake lamps, tail lamps, marker/clearance lamps, reflectors,
                    and conspicuity markings.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Windshield, wipers/washers, mirrors, horn, seat belt,
                    gauges, warning indicators, heater/defroster, and required
                    safety equipment.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Fifth wheel, locking jaws, kingpin, mounting hardware,
                    release handle, platform, sliding fifth-wheel pins, pintle
                    hooks or other coupling devices; verify a proper connection
                    and perform a tug test when appropriate.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Trailer landing gear, crossmembers, floor, roof/walls as
                    visible, doors, hinges, latches, seals, rear-impact guard,
                    mudflaps, and obvious cargo-area damage.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Emergency equipment including required warning devices and
                    a properly secured/charged fire extinguisher.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Fluid leaks, engine compartment concerns, fuel/DEF caps,
                    exhaust components as visible, and any condition likely to
                    cause a breakdown or unsafe operation.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Cargo distribution and securement, straps/chains/load
                    locks where applicable, trailer doors, seal requirements,
                    and weight/axle considerations.
                </p>


                <p style="margin:0 0 8px 0;">
                    • License plates, registration/cab card, permits, insurance
                    documentation where carried, ELD materials, shipping
                    documents, and other required operating documents.
                </p>


                <p style="margin:0 0 8px 0;">
                    <b>Defects and out-of-service conditions.</b>
                    Any defect that could affect safe operation must be reported
                    immediately. The driver must not operate equipment placed out
                    of service or equipment with an unresolved condition that
                    makes operation unsafe or unlawful. Safety/Maintenance must
                    determine the disposition and required repair. The driver
                    must not sign or certify a repair that the driver knows was
                    not completed.
                </p>


                <p style="margin:0 0 8px 0;">
                    <b>Drop-and-hook / trailer interchange.</b>
                    Before accepting or moving a trailer, inspect it and
                    document material pre-existing damage or defects. If the
                    trailer is unsafe, do not move it except as specifically
                    permitted for a lawful repair/safety purpose. Photograph
                    significant pre-existing damage when practicable and notify
                    Dispatch/Safety before departure.
                </p>


                <p style="margin:0 0 8px 0;">
                    <b>Roadside inspection reports.</b>
                    Immediately transmit roadside inspection reports to the
                    Company. Defects must be reviewed and corrected as required.
                    The driver must cooperate with Company instructions for
                    repair documentation and return of certified inspection
                    reports.
                </p>


                <p style="margin:0;">
                    <b>Post-trip.</b>
                    At the end of the work period or equipment assignment,
                    inspect for new damage, tire/brake/light concerns, leaks,
                    cargo/equipment issues, and other defects. Report defects
                    before the next dispatch so repairs can be scheduled.
                    Complete any DVIR or electronic defect report required for
                    the operation.
                </p>

            </div>

        </section>


       
        <section style="margin-top:15.4px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.3 CAMERA, DASH-CAM &amp; SAFETY-EQUIPMENT NON-TAMPERING POLICY
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Forward-facing cameras, inward-facing cameras, telematics,
                    collision-warning devices, GPS, ELD hardware, sensors, and
                    other Company-installed safety systems are safety equipment.
                    Drivers must not interfere with their normal operation.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not cover, block, turn, reposition, unplug, disconnect,
                    remove, damage, reset, disable, modify, obstruct, or
                    interfere with any camera, lens, sensor, cable, microphone
                    where lawfully used, telematics unit, or recording system.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not place tape, clothing, paper, stickers, sunshades,
                    electronic devices, or other objects over or in front of a
                    camera or sensor.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not delete, download, copy, distribute, post, or
                    attempt unauthorized access to recordings or system data.
                </p>


                <p style="margin:0;">
                    • Report a malfunction, loose mount, damaged lens,
                    obstructed view, warning message, or other problem
                    immediately. Do not attempt repairs unless specifically
                    authorized.
                </p>

            </div>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <div style="
                margin-bottom:8px;
                font-size:13px;
                line-height:1.35;
            ">
                <p style="margin:0;">
                    • Company access and use of camera/audio information must
                    follow applicable privacy, notice, audio-recording, labor,
                    and employment laws. Required state-specific notices or
                    consents must be provided separately.
                </p>
            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.4 SEAT-BELT &amp; OCCUPANT-RESTRAINT POLICY
            </h2>

            <div style="
                margin-bottom:8px;
                font-size:13px;
                line-height:1.35;
            ">
                <p style="margin:0;">
                    The driver must wear a properly installed and adjusted seat
                    belt whenever operating a CMV. Authorized occupants must use
                    required restraints. Disabling, bypassing, clipping behind
                    the body, or otherwise defeating the restraint is
                    prohibited. A material seat-belt defect must be reported
                    before operation and handled through the maintenance/defect
                    process.
                </p>
            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.5 NO HAND-HELD DEVICE / DISTRACTED-DRIVING POLICY
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • No texting or hand-held mobile telephone use while driving
                    a CMV. Do not hold or manually manipulate a phone, tablet,
                    dispatch unit, or other device while the vehicle is moving
                    or temporarily stopped in traffic.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Use only lawful hands-free/voice functions that do not
                    require unsafe reaching. Program navigation, review dispatch
                    messages, enter ELD information, photograph documents, or
                    perform other manual tasks only when safely parked.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Watching videos, social media, gaming, typing, reading
                    messages, photographing, video calling, or other distracting
                    electronic activity while driving is prohibited.
                </p>

                <p style="margin:0;">
                    • No dispatcher, customer, or load requirement authorizes
                    unsafe device use. Park safely before responding when manual
                    interaction is necessary.
                </p>

            </div>

        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.6 TRUCK ABANDONMENT &amp; RETURN-OF-EQUIPMENT POLICY
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Company equipment must not be abandoned. Resignation,
                    termination, refusal of dispatch, disagreement, breakdown,
                    or the end of an assignment does not authorize the driver to
                    leave Company equipment at an unapproved location.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Upon Company direction or separation, return the tractor,
                    trailer, keys, fuel cards, toll devices, permits, ELD
                    equipment, paperwork, and other Company property to the
                    location designated by an authorized Company official.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Do not leave equipment at a residence, truck stop, repair
                    facility, tow yard, customer, airport, roadside location,
                    another carrier, or any other location without Company
                    authorization, except when an emergency makes continued
                    operation unsafe or unlawful.
                </p>

                <p style="margin:0 0 8px 0;">
                    • If an emergency prevents return, immediately notify the
                    Company, provide the exact equipment location and condition,
                    secure the unit, protect cargo/property, and follow written
                    recovery instructions.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Do not transfer keys, credentials, fuel cards, or
                    possession to another person without authorization.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Before surrendering equipment, perform a post-trip
                    inspection, report known damage/defects, remove personal
                    belongings, and return all Company property.
                </p>

                <p style="margin:0;">
                    The Company may seek lawful recovery of documented losses
                    resulting from unauthorized abandonment. Any reimbursement,
                    deduction, offset, or collection must comply with applicable
                    law and enforceable agreements; this policy does not
                    authorize an unlawful wage deduction.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.7 UNAUTHORIZED PASSENGER &amp; PET POLICY
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Company vehicles are DRIVER ONLY unless prior written
                    authorization is issued by an authorized Company official.
                    No family member, friend, child, hitchhiker, trainee, team
                    driver not assigned by the Company, or other passenger may
                    ride in or operate Company equipment without required
                    written approval. Pets/animals are prohibited without
                    written approval, subject to legally required
                    accommodations.
                </p>

                <p style="margin:0;">
                    Written authorization may specify the approved
                    person/animal, dates, route, insurance/document
                    requirements, and other conditions. Verbal permission from a
                    dispatcher, customer, another driver, or unauthorized
                    employee is not sufficient. Authorized occupants must comply
                    with seat-belt, site-access, and Company safety rules.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.8 ACCIDENT, CITATION, INSPECTION &amp; VIOLATION REPORTING
                POLICY
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Drivers must report immediately any crash, collision, cargo
                    incident, vehicle/property damage, roadside inspection,
                    citation, warning, out-of-service order, tow/impound, arrest
                    affecting driving duties, license
                    suspension/revocation/disqualification, hazardous-material
                    incident, or alleged safety violation connected with Company
                    operations. If emergency conditions prevent immediate
                    contact, report as soon as safely possible.
                </p>

                <p style="margin:0;">
                    • At an accident scene: stop safely; protect life and the
                    scene; call 911/law enforcement when required; request
                    medical assistance; and notify the Company immediately.
                </p>

            </div>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Do not leave the scene unlawfully. Do not admit fault,
                    promise payment, argue liability, or sign unnecessary
                    statements for another party. Cooperate with law enforcement
                    and provide legally required information.
                    <br>
                    • When safe and lawful, photograph/video vehicle positions,
                    damage, plates/unit numbers, traffic controls, road/weather
                    conditions, cargo, debris, skid marks, and relevant
                    surroundings.
                    <br>
                    • Collect other-party, witness, law-enforcement, tow, and
                    insurance information when available. Preserve dash-camera,
                    ELD, dispatch, and other relevant data.
                    <br>
                    • Transmit citations, inspection reports, warnings, court
                    notices, accident exchanges, tow documents, repair orders,
                    and related records to the Company immediately and provide
                    final court/agency disposition when available.
                    <br>
                    • Follow post-accident drug/alcohol testing instructions
                    when FMCSA criteria or a separately identified lawful
                    Company-authority policy requires testing.
                </p>


                <p style="margin:0;">
                    <b>Responsibility.</b>
                    Drivers are responsible for obeying laws applicable to their
                    conduct and may be responsible for driver-attributable
                    fines, penalties, or costs to the extent permitted by law
                    and Company agreement. Nothing in this policy transfers a
                    legal duty or carrier responsibility that applicable law
                    places on the motor carrier or another party.
                </p>

            </div>

        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.9 DRIVER-CAUSED DAMAGE / EQUIPMENT RESPONSIBILITY POLICY
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Drivers must exercise reasonable care over tractors,
                    trailers, cargo equipment, keys, fuel cards, permits,
                    technology, and other property placed in their possession.
                    Damage, loss, theft, misuse, or suspected mechanical failure
                    must be reported immediately.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not continue operating equipment when continued
                    operation would be unsafe, unlawful, or likely to cause
                    additional damage.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not authorize non-emergency towing, major repairs,
                    parts replacement, or expenses outside Company limits
                    without approval unless immediate action is reasonably
                    necessary to protect life/property and Company contact is
                    unavailable.
                </p>


                <p style="margin:0 0 8px 0;">
                    • The Company may investigate whether damage resulted from
                    normal wear, mechanical failure, third-party conduct,
                    unavoidable conditions, negligence, willful misconduct,
                    unauthorized use, or a policy violation.
                </p>


                <p style="margin:0 0 8px 0;">
                    • If a driver is legally responsible for damage caused by
                    negligent, intentional, unauthorized, or prohibited use, the
                    Company may seek reimbursement for documented losses/repair
                    costs only to the extent allowed by applicable law and an
                    enforceable agreement.
                </p>


                <p style="margin:0;">
                    • No payroll deduction or chargeback is automatically
                    authorized by this policy. Any deduction from wages or
                    settlement must comply with applicable law and any required
                    written authorization.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.10 VEHICLE MAINTENANCE, DEFECT &amp; ROADSIDE-REPAIR POLICY
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Promptly report mechanical defects, warning lights,
                    brake/tire issues, fluid leaks, lighting defects,
                    steering/suspension concerns, coupling defects, and other
                    safety problems.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not operate a vehicle that has been placed out of
                    service or that the driver knows is unsafe or unlawful to
                    operate.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Use only Company-approved repair vendors and procedures
                    except where an emergency requires immediate protective
                    action and Company contact is unavailable.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Do not make unauthorized ECM, emissions, speed-governor,
                    electrical, camera, ELD, telematics, or safety-system
                    modifications.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Keep the cab, sleeper, windshield, mirrors, lights,
                    cameras, plates, and safety equipment reasonably clean and
                    unobstructed. Secure keys, fuel cards, permits, cargo, and
                    equipment when unattended.
                </p>


                <p style="margin:0;">
                    • Follow preventive-maintenance, tire, fuel, DEF,
                    roadside-repair, and documentation instructions issued by
                    the Company.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.11 SAFE DRIVING, FATIGUE &amp; GENERAL CONDUCT
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Operate at a lawful and safe speed for traffic, weather,
                    visibility, grade, road surface, vehicle condition, and
                    cargo. Posted speed is not always a safe speed.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Maintain safe following distance and adequate space. No
                    tailgating, aggressive driving, unsafe lane changes, racing,
                    road rage, retaliatory driving, or intentionally blocking
                    other traffic.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Never drive while ill, fatigued, impaired, distracted, or
                    otherwise unable to operate safely. Notify Dispatch/Safety
                    when conditions prevent safe operation.
                </p>


                <p style="margin:0;">
                    • Obey traffic-control devices, railroad-crossing rules,
                    route restrictions, bridge/clearance limits, size/weight
                    restrictions, hazardous-material requirements when
                    applicable, and customer/site safety rules.
                </p>

            </div>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Secure cargo and doors and comply with seal/load-security
                    procedures. Stop and correct a cargo-securement issue when
                    required.
                </p>


                <p style="margin:0;">
                    • No alcohol, illegal drugs, or other prohibited items may
                    be possessed or used contrary to Company policy or law. DOT
                    drug/alcohol requirements are governed by the separate
                    detailed policy in this packet.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:15.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                28.12 POLICY VIOLATIONS, INVESTIGATION &amp; CORRECTIVE ACTION
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    The Company may investigate policy violations using lawful
                    evidence including driver statements, inspection/citation
                    records, ELD/telematics data, camera footage, maintenance
                    records, dispatch records, customer reports, and other
                    relevant information. Depending on severity, history, and
                    applicable law, corrective action may include coaching,
                    retraining, written warning, suspension from driving duties,
                    removal from an account, or termination of
                    employment/contract. Serious misconduct may result in
                    immediate removal from service. Regulatory reporting will be
                    completed when required.
                </p>

            </div>

        </section>

    </div>
</div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

        
        <section style="margin-top:4px;">

            <table style="
                width:100%;
                max-width:100%;
                border-collapse:collapse;
                table-layout:fixed;
                font-size:13.5px;
            ">
                <tbody>

                   
                    <tr>
                        <td style="
                            width:48%;
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                            border:0;
                        ">
                            <b>Motor Carrier / Employer</b>
                        </td>

                        <td style="
                            width:52%;
                            padding:4px;
                            text-align:left;
                            vertical-align:middle;
                            border:0;
                        ">
                            <input
                                type="text"
                                value="{{ $company->cname ?? '' }}"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>USDOT Number</b>
                        </td>

                        <td style="
                            padding:4px;
                            text-align:left;
                            vertical-align:middle;
                        ">
                            <input
                                type="text"
                                value="{{ $company->dot ?? '' }}"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Designated Employer Representative (DER)</b>
                        </td>

                        <td style="
                            padding:4px;
                            text-align:left;
                            vertical-align:middle;
                        ">
                            <input
                                type="text"
                                value="{{ $company->owner ?? '' }}"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>DER Phone / Email</b>
                        </td>

                        <td style="
                            padding:4px;
                            text-align:left;
                            vertical-align:middle;
                        ">
                            <input
                                type="text"
                                value="{{ ($company->phone ?? '') . ' / ' . ($company->email ?? '') }}"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>C/TPA</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                            value="{{ $driver->esigndata['p26tpa'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Medical Review Officer (MRO)</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                            value="{{ $driver->esigndata['p26mro'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Primary Collection Site / Instructions</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                            value="{{ $driver->esigndata['p26collectionsite'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Effective / Revision Date</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                              value="{{ $driver->esigndata['p26revisiondate'] ?? '' }}"
                                type="date"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Driver Printed Name</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                                type="text"
                                value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>CDL Number / State</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                                type="text"
                                value="{{ ($driver->currentcdllicenseno ?? '') . ' / ' . ($driver->currentcdlstate ?? '') }}"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Driver Signature / Date</b>
                        </td>

                        <td style="
                            padding:4px;
                            vertical-align:middle;
                        ">
                            @if(!empty($signatureBase64))
                                <div style="
                                    width:100%;
                                    height:40px;
                                    border:1px solid #000;
                                    box-sizing:border-box;
                                    text-align:center;
                                ">
                                    <img
                                        src="{{ $signatureBase64 }}"
                                        alt="Driver Signature"
                                        style="
                                            width:100%;
                                            height:38px;
                                            object-fit:contain;
                                        "
                                    >
                                </div>
                            @else
                                <input
                                    type="text"
                                    style="
                                        width:100%;
                                        height:25px;
                                        border:1px solid #000;
                                        padding:4px 6px;
                                        box-sizing:border-box;
                                        font-size:12px;
                                    "
                                >
                            @endif
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            padding:6px;
                            background:#e5e5e5;
                            text-align:left;
                            vertical-align:middle;
                            font-size:12px;
                        ">
                            <b>Company / DER Representative / Date</b>
                        </td>

                        <td style="padding:4px;">
                            <input
                              value="{{ $driver->esigndata['p26derdatecompany'] ?? '' }}"
                                type="date"
                                style="
                                    width:100%;
                                    height:25px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>


     
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:21.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29 DETAILED FMCSA/DOT DRUG &amp; ALCOHOL POLICY
            </h2>

        </section>


      
        <section style="margin-top:0;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:14px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                49 CFR Part 382 / 49 CFR Part 40 - Motor Carrier Policy Template
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    IMPORTANT CARRIER ADOPTION NOTICE: Before using this policy,
                    the adopting motor carrier must complete all
                    company-specific fields, identify its Designated Employer
                    Representative (DER) and service agents, confirm its current
                    random testing rates, and review any state/local employment
                    requirements. DOT-required testing and any company-
                    authority/non-DOT testing must be administered and
                    documented separately.
                </p>

            </div>

        </section>


      
        <section style="margin-top:12px;">

            <table style="
                width:100%;
                max-width:100%;
                border-collapse:collapse;
                table-layout:fixed;
                font-size:13px;
            ">

                <thead>
                    <tr>
                        <th style="
                            width:33.33%;
                            border:1px solid #1b3e5c;
                            background:#174875;
                            padding:8px 6px;
                            text-align:center;
                            vertical-align:middle;
                            font-size:12.7px;
                            font-weight:bold;
                            color:#fff;
                        ">
                            Motor Carrier Legal Name
                        </th>

                        <th style="
                            width:33.33%;
                            border:1px solid #1b3e5c;
                            background:#174875;
                            padding:8px 6px;
                            text-align:center;
                            vertical-align:middle;
                            font-size:12.7px;
                            font-weight:bold;
                            color:#fff;
                        ">
                            USDOT Number
                        </th>

                        <th style="
                            width:33.33%;
                            border:1px solid #1b3e5c;
                            background:#174875;
                            padding:8px 6px;
                            text-align:center;
                            vertical-align:middle;
                            font-size:12.7px;
                            font-weight:bold;
                            color:#fff;
                        ">
                            Effective / Revision Date
                        </th>
                    </tr>
                </thead>


                <tbody>

                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            text-align:left;
                            font-size:12.7px;
                        ">
                            Designated Employer Representative (DER)
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            text-align:left;
                            font-size:12.7px;
                        ">
                            DER Phone / Email
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            text-align:left;
                            font-size:12.7px;
                        ">
                            C/TPA
                        </td>
                    </tr>


                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                        ">
                            <input
                                type="text"
                                value="{{ $company->owner ?? '' }}"
                                style="
                                    width:100%;
                                    height:24px;
                                    border:1px solid #000;
                                    padding:3px 5px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                        ">
                            <input
                                type="text"
                                value="{{ ($company->phone ?? '') . ' / ' . ($company->email ?? '') }}"
                                style="
                                    width:100%;
                                    height:24px;
                                    border:1px solid #000;
                                    padding:3px 5px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                        ">
                            <input
                            value="{{ $driver->esigndata['p26ctpa'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:24px;
                                    border:1px solid #000;
                                    padding:3px 5px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>


                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            text-align:left;
                            font-size:12.7px;
                        ">
                            Medical Review Officer (MRO)
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            text-align:left;
                            font-size:12.7px;
                        ">
                            Primary Collection Site / Network
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            text-align:left;
                            font-size:12.7px;
                        ">
                            SAP Resource Contact
                      
                        </td>
                    </tr>


                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                        ">
                            <input
                            value="{{ $driver->esigndata['p26medicalofficer'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:24px;
                                    border:1px solid #000;
                                    padding:3px 5px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                        ">
                            <input
                            value="{{ $driver->esigndata['p26pnetwork'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:24px;
                                    border:1px solid #000;
                                    padding:3px 5px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                        ">
                            <input
                             value="{{ $driver->esigndata['p26sapcontact'] ?? '' }}"
                                type="text"
                                style="
                                    width:100%;
                                    height:24px;
                                    border:1px solid #000;
                                    padding:3px 5px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                "
                            >
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.1 Purpose, Authority and Policy Objective
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    The Company maintains this controlled-substances and alcohol
                    program to protect drivers, coworkers, customers and the
                    motoring public and to comply with Federal Motor Carrier
                    Safety Administration (FMCSA) requirements. The federally
                    regulated portion of this program is governed principally by
                    49 CFR Part 382 and the U.S. Department of Transportation
                    (DOT) testing procedures in 49 CFR Part 40. When this policy
                    is more restrictive than the federal minimum because of a
                    separately identified Company rule, that provision will be
                    identified as Company-authority/non-DOT and will not be
                    represented as a DOT requirement.
                </p>

            </div>

        </section>

    </div>
</div>
<br />


<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

      
        <section style="margin-top:12px;">

            <div style="
                font-size:13px;
                line-height:1.35;
            ">
                <p style="margin:0;">
                    Participation in the applicable DOT/FMCSA drug and alcohol
                    testing program is a condition of performing covered safety-
                    sensitive functions for the Company. Nothing in this policy
                    alters the federal requirement that an individual with an
                    unresolved DOT drug or alcohol violation may not perform DOT
                    safety-sensitive functions.
                </p>
            </div>

        </section>


     
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.2 Covered Drivers and Safety-Sensitive Functions
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    This policy applies to each driver who is required to hold a
                    commercial driver's license (CDL) or commercial learner's
                    permit (CLP) to operate a commercial motor vehicle subject
                    to Part 382, including covered full-time, part-time, casual,
                    intermittent, leased and other drivers operating at the
                    Company's direction. Coverage is determined by the
                    safety-sensitive function actually performed, not merely by
                    job title.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Safety-sensitive time includes all time from the time a
                    driver begins work or is required to be ready to work until
                    relieved from work and all responsibility for performing
                    work, including waiting to be dispatched, inspecting or
                    servicing equipment, driving, loading/unloading or
                    supervising loading/unloading, attending a disabled vehicle,
                    and other functions within the regulatory definition.
                </p>


                <p style="margin:0;">
                    • A manager, supervisor, mechanic, owner, or other employee
                    who is required or expected to operate a covered CMV must be
                    included when Part 382 applies to that individual.
                </p>

            </div>

        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.3 Designated Employer Representative (DER) and Service
                Agents
            </h2>


            <div style="
                font-size:11px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    The DER is the Company official authorized to receive test
                    results and other communications, make required decisions,
                    remove drivers from safety-sensitive functions, direct
                    drivers to testing, and coordinate with the C/TPA, MRO,
                    collection site, laboratory, BAT/STT, and SAP. The Company
                    may use qualified service agents, but the motor carrier
                    remains responsible for compliance with applicable DOT/FMCSA
                    requirements.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Drivers must keep current contact information on file and
                    must promptly respond to lawful testing and MRO
                    communications.
                </p>


                <p style="margin:0;">
                    • Only authorized Company representatives may receive or act
                    on confidential DOT testing information except as otherwise
                    permitted or required by law.
                </p>

            </div>

        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.4 Prohibited Alcohol Conduct
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    A covered driver must not engage in conduct prohibited by
                    Part 382. The following rules apply in addition to any
                    separately identified lawful Company-authority rule:
                </p>


                <p style="margin:0 0 8px 0;">
                    • No alcohol use while performing safety-sensitive
                    functions.
                </p>


                <p style="margin:0 0 8px 0;">
                    • No alcohol use within four (4) hours before performing a
                    safety-sensitive function.
                </p>


                <p style="margin:0 0 8px 0;">
                    • No reporting for or remaining on duty requiring
                    safety-sensitive functions with an alcohol concentration of
                    0.04 or greater.
                </p>


                <p style="margin:0 0 8px 0;">
                    • A driver with an alcohol concentration of 0.02 through
                    0.039 must be removed from safety-sensitive functions for
                    the period required by FMCSA regulations; this is distinct
                    from a 0.04-or-greater DOT violation.
                </p>


                <p style="margin:0 0 8px 0;">
                    • No prohibited alcohol use following an accident when the
                    driver is required to remain available for FMCSA post-
                    accident testing, subject to the regulatory time limits.
                </p>


                <p style="margin:0;">
                    • No refusal to submit to a required alcohol test or failure
                    to cooperate with the testing process.
                </p>

            </div>

        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.5 Prohibited Controlled-Substances Conduct
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • No reporting for duty or remaining on duty requiring
                    safety-sensitive functions when the driver uses a controlled
                    substance in a manner prohibited by Part 382 or is otherwise
                    not medically qualified to safely perform the function.
                </p>


                <p style="margin:0;">
                    • No performance of safety-sensitive functions after a
                    verified positive DOT drug test, a DOT refusal, or another
                    unresolved DOT drug/alcohol violation until the applicable
                    return-to-duty process has been completed and the driver is
                    legally eligible to resume covered functions.
                </p>

            </div>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Marijuana remains prohibited under the DOT drug-testing
                    program regardless of state recreational or medical
                    marijuana laws. Drivers are responsible for understanding
                    that products marketed as hemp/CBD may create testing or
                    qualification risks; a product label or state legality does
                    not excuse a verified DOT positive result.
                </p>


                <p style="margin:0;">
                    • Adulterating, substituting, attempting to defeat a
                    collection, possessing a device intended to interfere with a
                    collection, or otherwise engaging in conduct defined as a
                    refusal is prohibited.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.6 Prescription and Over-the-Counter Medication
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    The Company does not instruct drivers to disclose private
                    diagnoses or medication information to dispatch unless
                    disclosure is required for safety or qualification purposes.
                    A driver remains responsible for being medically qualified
                    and able to safely perform safety-sensitive functions.
                    Prescription or over-the-counter medication must be used
                    only as directed and in a manner consistent with safe
                    performance of the driver's duties. Questions concerning a
                    drug-test result are handled through the MRO process as
                    required by Part 40.
                </p>


                <p style="margin:0;">
                    If a medication may impair alertness, coordination,
                    judgment, reaction time, or the ability to safely operate a
                    CMV, the driver must not perform safety-sensitive functions
                    until medically cleared or otherwise legally qualified to do
                    so. The MRO may make safety-related medication disclosures
                    when Part 40 permits or requires them.
                </p>

            </div>

        </section>

    </div>
</div>
<br />


<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.7 DOT Drug Testing Panel and Specimen Procedures
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    DOT drug testing is limited to the drugs/drug classes
                    authorized by Part 40, including marijuana metabolites,
                    cocaine metabolites, amphetamines, opioids, and
                    phencyclidine (PCP). DOT specimens may not be used to test
                    for additional non-DOT drugs. DOT tests and non-DOT tests
                    must remain completely separate.
                </p>


                <p style="margin:0 0 8px 0;">
                    DOT drug collections must use the current Federal Drug
                    Testing Custody and Control Form (CCF) and qualified
                    collection/testing personnel. Part 40 authorizes urine and
                    oral-fluid methodologies; however, the Company will use only
                    specimen types and procedures that are authorized and
                    operationally available under current DOT/HHS requirements
                    at the time of collection. Point-of-collection/instant drug
                    tests and hair tests are not DOT drug tests.
                </p>


                <p style="margin:0;">
                    Where Part 40 requires a directly observed collection, the
                    Company and its service agents will follow the current Part
                    40 procedure. If a required collection methodology is
                    unavailable, the DER/service agent will follow the current
                    regulatory fallback procedure rather than improvising a
                    noncompliant test.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.8 Required Testing Circumstances
            </h2>


            <table style="
                width:100%;
                max-width:100%;
                border-collapse:collapse;
                table-layout:fixed;
                font-size:13px;
            ">

                <thead>
                    <tr>
                        <th style="
                            width:25%;
                            border:1px solid #1b3e5c;
                            background:#174875;
                            padding:8px 6px;
                            text-align:center;
                            vertical-align:middle;
                            font-size:12.7px;
                            font-weight:bold;
                            color:#fff;
                        ">
                            Testing Type
                        </th>

                        <th style="
                            width:75%;
                            border:1px solid #1b3e5c;
                            background:#174875;
                            padding:8px 6px;
                            text-align:center;
                            vertical-align:middle;
                            font-size:12.7px;
                            font-weight:bold;
                            color:#fff;
                        ">
                            Company Procedure
                        </th>
                    </tr>
                </thead>


                <tbody>

                  
                    <tr>
                        <td style="
                            width:25%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Pre-employment
                        </td>

                        <td style="
                            width:75%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            A covered driver must receive the required negative
                            DOT drug-test result before first performing a
                            covered safety-sensitive function, unless a specific
                            regulatory exception applies and is documented. A
                            pre-employment alcohol test is not federally required
                            by FMCSA but may be conducted only when permitted and
                            administered consistently with applicable rules.
                        </td>
                    </tr>


                 
                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Random
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Covered drivers remain in the appropriate random pool
                            and are subject to unannounced selection using a
                            scientifically valid method. Each covered driver must
                            have an equal chance of selection. Testing is spread
                            reasonably throughout the calendar year. The Company
                            will meet or exceed the FMCSA minimum annual rates in
                            effect for that calendar year rather than relying on a
                            permanently hard-coded rate in this policy.
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Reasonable suspicion
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            A trained supervisor may require drug and/or alcohol
                            testing based on specific, contemporaneous,
                            articulable observations concerning appearance,
                            behavior, speech, body odors, or other regulatory
                            indicators. A hunch, rumor, or unsupported accusation
                            is not sufficient.
                        </td>
                    </tr>


                  
                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Post-accident
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            The DER will determine whether the accident meets
                            FMCSA post-accident testing criteria. Not every
                            accident requires a DOT post-accident test. Drivers
                            must immediately report accidents and remain available
                            when testing may be required.
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Return-to-duty
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Required after a DOT violation and completion of the
                            SAP process before the driver may resume DOT
                            safety-sensitive functions. The test must meet Part 40
                            direct-observation requirements.
                        </td>
                    </tr>


                   
                    <tr>
                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Follow-up
                        </td>

                        <td style="
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:11.7px;
                            line-height:1.2;
                        ">
                            Required when prescribed by the SAP after return to
                            duty. Follow-up tests are unannounced, directly
                            observed, and are in addition to random and other
                            required testing.
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.9 Pre-Employment Testing and Hiring Controls
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • The Company will identify whether the position is subject
                    to Part 382 before allowing the applicant to perform covered
                    duties.
                </p>


                <p style="margin:0 0 8px 0;">
                    • The Company will obtain the required negative
                    pre-employment DOT drug-test result, or document a valid
                    regulatory exception, before first safety-sensitive
                    performance.
                </p>


                <p style="margin:0;">
                    • The Company will complete the required FMCSA Drug &amp;
                    Alcohol Clearinghouse pre-employment query and will not use
                    a driver in a prohibited status.
                </p>

            </div>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    • A conditional job offer, orientation, paperwork, or
                    non-driving work does not authorize covered driving before
                    all applicable pre-employment requirements are satisfied.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.10 Random Testing Program
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Random selections will be made through the Company or its
                    C/TPA using a scientifically valid method. Once notified,
                    the driver must proceed immediately to the
                    collection/testing site as directed, allowing only the time
                    reasonably necessary to cease the safety-sensitive function
                    safely and travel to the testing location. Random alcohol
                    testing will occur only just before, during, or just after
                    the performance of safety-sensitive functions as required by
                    FMCSA.
                </p>


                <p style="margin:0;">
                    A driver may be randomly selected more than once in a year.
                    Prior selection does not remove the driver from the pool or
                    reduce the driver's chance of future selection. The Company
                    will document selections, completed tests, missed tests and
                    legitimate reasons for any test not completed, and will
                    monitor the program throughout the year.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#174875;
            ">
                29.11 Reasonable-Suspicion Testing
            </h2>


            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Reasonable-suspicion determinations will be made by a
                    supervisor or Company official who has completed the
                    required training. Observations must be specific,
                    contemporaneous and articulable and must relate to the
                    appearance, behavior, speech or body odors of the driver, or
                    other observations recognized by the applicable rule. The
                    Company will document the basis for the determination as
                    required.
                </p>


                <p style="margin:0 0 8px 0;">
                    • Supervisors authorized to make reasonable-suspicion
                    determinations must receive at least 60 minutes of training
                    on alcohol misuse and at least 60 minutes on
                    controlled-substances use.
                </p>


                <p style="margin:0 0 8px 0;">
                    • The driver must follow the testing direction and must not
                    drive a CMV to the collection site when the Company
                    determines transportation should be provided for safety
                    reasons.
                </p>


                <p style="margin:0;">
                    • A reasonable-suspicion test is a DOT test only when the
                    regulatory requirements are satisfied. Separate Company-
                    authority testing, if adopted, must be identified and
                    administered separately.
                </p>

            </div>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.12 Post-Accident Testing and Driver Availability
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    The driver must immediately report every accident/incident
                    to the Company in accordance with the accident-reporting
                    policy. The DER will determine whether FMCSA post-accident
                    testing is required based on the applicable regulatory
                    criteria, including fatalities and qualifying
                    injury/tow-away accidents associated with a moving-traffic
                    citation within the applicable time period.
                </p>

                <p style="margin:0 0 8px 0;">
                    • When required, alcohol testing must be attempted as soon
                    as practicable. If not completed within 2 hours, the Company
                    will document the reason for delay and continue attempts as
                    required; attempts cease after 8 hours.
                </p>

                <p style="margin:0 0 8px 0;">
                    • When required, controlled-substances testing must be
                    attempted as soon as practicable; attempts cease after 32
                    hours if the test cannot be completed, with required
                    documentation maintained.
                </p>

                <p style="margin:0 0 8px 0;">
                    • A driver subject to post-accident testing must remain
                    readily available. Leaving the scene for necessary medical
                    care, emergency assistance, or compliance with
                    law-enforcement instructions does not by itself excuse the
                    driver from promptly communicating with the Company and
                    remaining available when practicable.
                </p>

                <p style="margin:0;">
                    • A driver who may be subject to post-accident alcohol
                    testing must not consume alcohol during the prohibited
                    post-accident period or until the required alcohol test is
                    completed, whichever occurs first under the applicable rule.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.13 Refusal to Test
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    A refusal is treated as a serious DOT violation. Refusal is
                    not limited to verbally saying “no.” Conduct may constitute
                    a refusal when Part 40 or Part 382 defines it as such.
                    Examples include, as applicable:
                </p>

                <p style="margin:0 0 8px 0;">
                    • Failure to appear for a required test within the
                    required/reasonable time after being directed to report.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Failure to remain at the testing site until the testing
                    process is complete.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Failure to provide a required specimen or sufficient
                    specimen without an adequate medical explanation established
                    through the required process.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Failure to permit a directly observed or monitored
                    collection when required.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Failure to undergo a required medical evaluation or second
                    collection when directed under Part 40.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Failure to cooperate with the collection/testing process,
                    including conduct that prevents completion of the test.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Providing a specimen verified as adulterated or
                    substituted, or admitting adulteration/substitution, when
                    Part 40 treats the conduct as a refusal.
                </p>

                <p style="margin:0 0 8px 0;">
                    • For alcohol testing, failure to sign the required
                    certification on the Alcohol Testing Form or failure to
                    provide breath when required, when the regulation defines
                    the conduct as a refusal.
                </p>

                <p style="margin:0;">
                    The DER will rely on the determination of the authorized
                    collector, MRO, BAT/STT, or other responsible party as
                    specified by Part 40. The Company will not create its own
                    DOT refusal category outside the regulation.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.14 Drug Collection, Laboratory and MRO Process
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    DOT drug testing will follow the current Part 40
                    chain-of-custody and laboratory procedures. The collector
                    verifies identity, secures the collection, completes the
                    CCF, and transmits the specimen to an HHS-certified
                    laboratory as required. The laboratory conducts the
                    authorized initial/confirmatory and specimen-validity
                    testing. The MRO independently reviews laboratory results
                    before reporting a verified result to the employer.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Drivers must cooperate with collector instructions and
                    provide accurate contact information so the MRO can reach
                    them when necessary.
                </p>

                <p style="margin:0 0 8px 0;">
                    • When a non-negative laboratory result requires MRO review,
                    the driver will have the opportunity provided by Part 40 to
                    present a legitimate medical explanation.
                </p>

                <p style="margin:0;">
                    • When applicable, the driver has the Part 40 right to
                    request testing of the split specimen within the prescribed
                    time after MRO notification.
                </p>

            </div>
        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.15 Alcohol Testing Procedures and Result Consequences
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    DOT alcohol screening tests are conducted by qualified
                    personnel using approved devices and the DOT Alcohol Testing
                    Form. A screening result below 0.02 requires no action under
                    Part 40. A screening result of 0.02 or greater requires a
                    confirmation test under Part 40. For FMCSA-covered drivers,
                    a confirmed result of 0.02 through 0.039 requires temporary
                    removal from safety-sensitive functions as required by
                    §382.505; a result of 0.04 or greater is a DOT alcohol
                    violation requiring immediate removal and the return-to-duty
                    process before resumption of covered functions.
                </p>

            </div>
        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.16 Immediate Removal From Safety-Sensitive Functions
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    Upon notice of a verified positive DOT drug test, an alcohol
                    concentration of 0.04 or greater, a DOT refusal, or another
                    violation that prohibits safety-sensitive performance, the
                    Company will immediately remove the driver from DOT
                    safety-sensitive functions. The driver may not be
                    dispatched, operate a covered CMV, or perform another
                    prohibited safety-sensitive function until legally eligible
                    to do so.
                </p>

                <p style="margin:0;">
                    Federal removal from safety-sensitive functions is separate
                    from the Company's employment decision. Subject to
                    applicable law and Company policy, the Company may terminate
                    employment/contracting, place the driver in a
                    non-safety-sensitive status, or consider return after
                    successful completion of the federal return-to-duty process.
                    DOT regulations do not require the Company to reinstate a
                    driver.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.17 SAP Evaluation, Return-to-Duty and Follow-Up Testing
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    When required, the Company will provide the driver with
                    information identifying qualified Substance Abuse
                    Professional (SAP) resources as required by Part 40. Before
                    returning to any DOT safety-sensitive function after a
                    violation, the driver must complete the SAP evaluation and
                    prescribed education/treatment process, be determined
                    eligible for return-to-duty testing, and obtain the required
                    negative drug result and/or alcohol result below 0.02 on a
                    directly observed return-to-duty test, as applicable.
                </p>

                <p style="margin:0;">
                    The SAP establishes the follow-up testing plan. The plan
                    must include at least six unannounced directly observed
                    follow-up tests during the first 12 months of
                    safety-sensitive service and may extend for up to 60 months.
                    Follow-up testing is in addition to random testing and other
                    testing requirements. The Company will not substitute random
                    tests for SAP-prescribed follow-up tests.
                </p>

            </div>
        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

     
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.18 FMCSA Drug &amp; Alcohol Clearinghouse
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    The Company will comply with the FMCSA Commercial Driver's
                    License Drug and Alcohol Clearinghouse requirements
                    applicable to covered drivers. Clearinghouse obligations are
                    related to, but separate from, the specimen collection and
                    laboratory process.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Pre-employment: before permitting a covered driver to
                    perform safety-sensitive functions, the Company will conduct
                    the required full Clearinghouse query. The driver must
                    provide the specific electronic consent required by the
                    Clearinghouse for a full query.
                </p>

                <p style="margin:0 0 8px 0;">
                    • During employment: the Company will conduct the required
                    annual query for each covered driver. When a limited query
                    is used, the Company will maintain the driver's general
                    consent as required. If a limited query indicates
                    information exists, the Company will complete the required
                    full-query process and obtain electronic consent before
                    allowing continued safety-sensitive performance as
                    required by the regulations.
                </p>

                <p style="margin:0 0 8px 0;">
                    • The Company will report employer-reported violations and
                    related information to the Clearinghouse when required.
                    MROs, SAPs and other authorized parties remain responsible
                    for information the regulations assign to them.
                </p>

                <p style="margin:0;">
                    • A driver whose Clearinghouse status is “Prohibited” may
                    not perform DOT safety-sensitive functions until the
                    Clearinghouse reflects eligibility consistent with
                    completion of the return-to-duty process.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.19 Confidentiality, Records and Release of Information
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    DOT drug and alcohol records are confidential and will be
                    maintained with controlled access. The Company will release
                    records only as authorized or required by Part 40, Part 382,
                    the Clearinghouse regulations, or other applicable law.
                    Drug/alcohol records will not be placed in ordinary
                    personnel files when doing so would undermine required
                    confidentiality controls.
                </p>

                <p style="margin:0 0 8px 0;">
                    • The Company will maintain records for the periods required
                    by the applicable regulation and will make them available to
                    authorized DOT/FMCSA representatives when required.
                </p>

                <p style="margin:0 0 8px 0;">
                    • The Company will maintain the signed certificate showing
                    that the driver received the required policy and
                    educational materials.
                </p>

                <p style="margin:0;">
                    • The Company will protect MRO, SAP, test-result and
                    Clearinghouse information from unauthorized disclosure.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.20 DOT vs. Company-Authority / Non-DOT Testing
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    If the Company adopts testing beyond the federal DOT
                    minimum, those provisions must be stated in a separate
                    Company-authority/non-DOT policy or clearly labeled
                    addendum. DOT and non-DOT tests must be separate in all
                    respects. A DOT CCF or DOT Alcohol Testing Form may not be
                    used for a non-DOT test, and a DOT specimen may not be
                    tested for additional drugs not authorized by the DOT
                    program.
                </p>

                <p style="margin:0;">
                    Nothing in a non-DOT program may be used to cancel, change,
                    disregard, or override a valid DOT test result. Any
                    state-law requirements affecting non-DOT testing, employee
                    discipline, privacy, medical/recreational marijuana, or
                    wage/employment practices must be reviewed separately by
                    the adopting carrier.
                </p>

            </div>
        </section>


      
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.21 Driver Education - Effects, Signs and Safety Consequences
            </h2>

            <div style="
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    The Company provides educational information so drivers
                    understand the safety consequences of alcohol misuse and
                    controlled-substances use. Alcohol and drugs can impair
                    judgment, reaction time, coordination, attention, perception
                    and decision-making. Impairment can increase the risk of
                    crashes, injuries, fatalities, cargo/property damage,
                    enforcement action, and loss of the ability to perform
                    safety-sensitive duties.
                </p>

            </div>
        </section>


      
        <section style="margin-top:12px;">

            <table style="
                width:100%;
                max-width:100%;
                table-layout:fixed;
                border-collapse:collapse;
                font-size:13.5px;
            ">

                <thead>
                    <tr>

                        <th style="
                            width:50%;
                            text-align:left;
                            border:1px solid #1b3e5c;
                            background:#1F355A;
                            color:#fff;
                            padding:8px 6px;
                            font-size:12.7px;
                            font-weight:bold;
                            line-height:1.2;
                            box-sizing:border-box;
                        ">
                            Area
                        </th>

                        <th style="
                            width:50%;
                            text-align:left;
                            border:1px solid #1b3e5c;
                            background:#1F355A;
                            color:#fff;
                            padding:8px 6px;
                            font-size:12.7px;
                            font-weight:bold;
                            line-height:1.2;
                            box-sizing:border-box;
                        ">
                            Examples of Potential Indicators / Consequences
                        </th>

                    </tr>
                </thead>


                <tbody>

                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            font-size:12.7px;
                            line-height:1.22;
                            box-sizing:border-box;
                        ">
                            Physical
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:12.7px;
                            line-height:1.3;
                            word-wrap:break-word;
                            overflow-wrap:break-word;
                            box-sizing:border-box;
                        ">
                            Unsteady movement, unusual fatigue, tremors,
                            sweating, bloodshot eyes, poor coordination,
                            abnormal pupils, unusual odor, or unexplained
                            deterioration in appearance.
                        </td>

                    </tr>


                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            font-size:12.7px;
                            line-height:1.22;
                            box-sizing:border-box;
                        ">
                            Behavioral / Speech
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            font-size:12.7px;
                            line-height:1.3;
                            word-wrap:break-word;
                            overflow-wrap:break-word;
                            box-sizing:border-box;
                        ">
                            Confusion, agitation, unusual mood changes, slurred
                            or rapid speech, impaired judgment, inappropriate
                            behavior, or other noticeable changes in normal
                            behavior or communication.
                        </td>

                    </tr>

                </tbody>

            </table>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

       
        <section style="margin-top:12px;">

            <table style="
                width:100%;
                max-width:100%;
                table-layout:fixed;
                border-collapse:collapse;
                font-size:12.7px;
                line-height:1.3;
            ">

                <tbody>

                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            box-sizing:border-box;
                        ">
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            box-sizing:border-box;
                        ">
                            unexplained changes in reliability.
                        </td>

                    </tr>


                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            box-sizing:border-box;
                        ">
                            Performance
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            box-sizing:border-box;
                        ">
                            Unsafe driving, repeated errors, unexplained
                            absences, declining attention, poor decision-making,
                            preventable incidents, or failure to follow
                            procedures.
                        </td>

                    </tr>


                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            box-sizing:border-box;
                        ">
                            Safety response
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            text-align:left;
                            box-sizing:border-box;
                        ">
                            A driver who believes he or she cannot safely perform
                            a safety-sensitive function must immediately
                            stop/decline the function and contact the Company.
                            This does not excuse refusal of a required DOT test
                            after notification.
                        </td>

                    </tr>

                </tbody>

            </table>


            <div style="
                margin:0 0 8px 0;
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:8px 0 0 0;">
                    These examples are educational and are not a substitute
                    for the regulatory reasonable-suspicion standard or
                    medical diagnosis. Supervisors must use the required
                    training and contemporaneous observations when making a
                    reasonable-suspicion determination.
                </p>

            </div>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.22 Driver Responsibilities
            </h2>


            <div style="
                margin:0 0 8px 0;
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Read, understand and comply with this policy and all
                    lawful testing directions.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Report immediately for testing when notified and remain at
                    the testing site until properly released.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Carry valid identification and provide the CDL
                    number/state or other identifier required by current
                    FMCSA/Part 40 procedures.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Do not use alcohol or controlled substances in a manner
                    prohibited by federal regulation or perform
                    safety-sensitive duties while impaired or not medically
                    qualified.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Remain available for required post-accident testing and
                    promptly communicate with the DER after an accident.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Cooperate with collectors, BATs/STTs, MROs, SAPs and other
                    qualified service agents.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Complete required Clearinghouse electronic consents and
                    respond to lawful Company compliance requests.
                </p>

                <p style="margin:0;">
                    • Immediately stop performing safety-sensitive functions if
                    notified that the driver is prohibited from doing so.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.23 Company / DER Responsibilities
            </h2>


            <div style="
                margin:0 0 8px 0;
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                    • Maintain a compliant written policy and provide required
                    educational materials before covered testing begins.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Ensure each covered driver signs the required certificate
                    of receipt and retain the original as required.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Use qualified service agents and current DOT
                    forms/procedures; monitor C/TPA performance without
                    delegating away the carrier's compliance responsibility.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Complete required pre-employment and annual Clearinghouse
                    queries and required reporting.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Ensure random testing is scientifically valid,
                    unannounced, reasonably spread throughout the year, and
                    meets current FMCSA annual minimum rates.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Ensure supervisors making reasonable-suspicion
                    determinations receive the required 60 minutes alcohol +
                    60 minutes controlled-substances training.
                </p>

                <p style="margin:0 0 8px 0;">
                    • Immediately remove prohibited drivers from DOT
                    safety-sensitive functions and provide SAP information
                    when required.
                </p>

                <p style="margin:0;">
                    • Maintain records, confidentiality, and required
                    documentation of missed/delayed post-accident tests and
                    other compliance events.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.24 Employment / Contract Consequences
            </h2>


            <div style="
                margin:0 0 8px 0;
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    A violation of this policy may result in corrective or
                    disciplinary action, up to and including termination of
                    employment or the contractual relationship, subject to
                    applicable law and the adopting Company's written
                    policies. The Company will not describe a discretionary
                    employment consequence as though it were a mandatory DOT
                    consequence. The mandatory federal consequence of a DOT
                    violation is removal from covered safety-sensitive
                    functions until the applicable return-to-duty requirements
                    are satisfied.
                </p>

            </div>
        </section>

    </div>
</div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">

        
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.24 Employment / Contract Consequences
            </h2>

            <div style="
                margin:0 0 8px 0;
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    A violation of this policy may result in corrective or
                    disciplinary action, up to and including termination of
                    employment or the contractual relationship, subject to
                    applicable law and the adopting Company's written
                    policies. The Company will not describe a discretionary
                    employment consequence as though it were a mandatory DOT
                    consequence. The mandatory federal consequence of a DOT
                    violation is removal from covered safety-sensitive
                    functions until the applicable return-to-duty
                    requirements are satisfied.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.26 Certificate of Receipt and Driver Acknowledgment
            </h2>

            <div style="
                margin:0 0 8px 0;
                font-size:13px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    I certify that I received a copy of the Company FMCSA/DOT
                    Drug &amp; Alcohol Policy and the educational materials
                    provided under the Company's Part 382 program. I
                    understand that the policy explains the categories of
                    covered drivers, safety-sensitive functions, prohibited
                    conduct, testing circumstances and procedures, refusal
                    rules, consequences, Clearinghouse requirements,
                    SAP/return-to-duty process, and the person designated to
                    answer questions. I understand that my signature confirms
                    receipt and acknowledgment; it does not waive any rights
                    provided by law.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <table style="
                width:100%;
                max-width:100%;
                table-layout:fixed;
                border-collapse:collapse;
                font-size:12.7px;
            ">

                <thead>
                    <tr>

                        <th style="
                            width:50%;
                            text-align:left;
                            border:1px solid #1b3e5c;
                            background:#1F355A;
                            color:#fff;
                            padding:8px 6px;
                            font-size:12.7px;
                            font-weight:bold;
                            line-height:1.2;
                            box-sizing:border-box;
                        ">
                            Driver Printed Name
                        </th>

                        <th style="
                            width:50%;
                            text-align:left;
                            border:1px solid #1b3e5c;
                            background:#1F355A;
                            color:#fff;
                            padding:8px 6px;
                            font-size:12.7px;
                            font-weight:bold;
                            line-height:1.2;
                            box-sizing:border-box;
                        ">
                            CDL Number / State
                        </th>

                    </tr>
                </thead>


                <tbody>

                   
                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            box-sizing:border-box;
                        ">
                            <input
                                type="text"
                                value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                style="
                                    width:95%;
                                    max-width:95%;
                                    height:28px;
                                    box-sizing:border-box;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    font-size:12px;
                                    font-family:'Tinos',serif;
                                "
                            >
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            box-sizing:border-box;
                        ">
                            <input
                                type="text"
                                value="{{ ($driver->currentcdllicenseno ?? '') . ' / ' . ($driver->currentcdlstate ?? '') }}"
                                style="
                                    width:95%;
                                    max-width:95%;
                                    height:28px;
                                    box-sizing:border-box;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    font-size:12px;
                                    font-family:'Tinos',serif;
                                "
                            >
                        </td>

                    </tr>


                  
                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            font-size:12.7px;
                            box-sizing:border-box;
                        ">
                            Driver Signature
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            box-sizing:border-box;
                        ">

                                   <img
        src="{{$signatureUrl}}"
        style="height:40px;width:100%;object-fit:contain;border:1px solid #000;"
    >

                        </td>

                    </tr>


                   
                    <tr>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:top;
                            font-size:12.7px;
                            box-sizing:border-box;
                        ">
                            Company / DER Representative
                        </td>

                        <td style="
                            width:50%;
                            border:1px solid #555;
                            padding:7px 6px;
                            vertical-align:middle;
                            box-sizing:border-box;
                        ">

                            <input
                                type="text"
                                value="{{ $company->owner ?? '' }}"
                                style="
                                    width:95%;
                                    max-width:95%;
                                    height:28px;
                                    box-sizing:border-box;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    font-size:12px;
                                    font-family:'Tinos',serif;
                                "
                            >

                        </td>

                    </tr>

                </tbody>
            </table>

        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                29.27 Carrier Adoption / Compliance Checklist
            </h2>


            <div style="
                margin:0 0 8px 0;
                font-size:13.4px;
                line-height:1.35;
            ">

                <p style="margin:0 0 8px 0;">
                     <input
                     @checked(($driver->esigndata['p35check1'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Carrier legal name, USDOT number, effective date and DER
                    completed.
                </p>

                <p style="margin:0 0 8px 0;">
                    <input
                     @checked(($driver->esigndata['p35check2'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    C/TPA, MRO, collection network and SAP resource information
                    verified.
                </p>

                <p style="margin:0 0 8px 0;">
                     <input
                     @checked(($driver->esigndata['p35check3'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Current calendar-year FMCSA random testing rates verified
                    and communicated to program administrator.
                </p>

                <p style="margin:0 0 8px 0;">
<input
                     @checked(($driver->esigndata['p35check4'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Clearinghouse account/roles, query plan and reporting
                    procedures verified.
                </p>

                <p style="margin:0 0 8px 0;">
                     <input
                     @checked(($driver->esigndata['p35check5'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Pre-employment negative-test and Clearinghouse controls
                    integrated into dispatch/hiring process.
                </p>

                <p style="margin:0 0 8px 0;">
                    <input
                     @checked(($driver->esigndata['p35check6'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Supervisor reasonable-suspicion training records verified.
                </p>

                <p style="margin:0 0 8px 0;">
                     <input
                     @checked(($driver->esigndata['p35check7'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Post-accident decision procedure and after-hours DER contact
                    established.
                </p>

                <p style="margin:0 0 8px 0;">
                    <input
                     @checked(($driver->esigndata['p35check8'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    DOT and any Company-authority/non-DOT testing policies
                    clearly separated.
                </p>

                <p style="margin:0 0 8px 0;">
                    <input
                     @checked(($driver->esigndata['p35check9'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Certificate of receipt obtained from every covered driver
                    before safety-sensitive use.
                </p>

                <p style="margin:0 0 8px 0;">
                    <input
                     @checked(($driver->esigndata['p35check10'] ?? null) === 'on')
                        type="checkbox"
                        style="
                            width:13px;
                            height:13px;
                            margin:0 5px 0 0;
                            vertical-align:middle;
                        "
                    >
                    Policy reviewed for applicable state/local employment
                    requirements and any collective bargaining obligations.
                </p>

                <p style="margin:0;">
                    Regulatory note: This template is intended to support
                    motor-carrier compliance administration. The adopting
                    motor carrier remains responsible for tailoring and
                    implementing its program under the regulations in effect
                    at the time of use.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <h2 style="
                margin:0 0 8px 0;
                font-size:17.4px;
                font-weight:bold;
                line-height:1.2;
                color:#1F355A;
            ">
                30 STATEMENT OF ON-DUTY HOURS - PRECEDING 7 DAYS
            </h2>

            <div style="
                margin:0 0 8px 0;
                font-size:13.4px;
                line-height:1.35;
            ">

                <p style="margin:0;">
                    Complete on or before the first day the driver begins
                    covered driving when the Company requires this statement
                    to establish prior on-duty time. Include compensated work
                    for motor carriers and other employers as required by the
                    applicable HOS rules.
                </p>

            </div>
        </section>


       
        <section style="margin-top:12px;">

            <table style="
                width:100%;
                max-width:100%;
                border-collapse:collapse;
                table-layout:fixed;
                font-size:14px;
            ">

                <tbody>

                    <tr>

                        <td style="
                            width:30%;
                            height:25px;
                            border-bottom:1px solid #aebdcc;
                            background:#e5e7eb;
                            padding:5px 7px;
                            font-weight:bold;
                            font-size:12px;
                            color:#173f69;
                            box-sizing:border-box;
                        ">
                            Driver Name
                        </td>

                        <td style="
                            width:70%;
                            height:25px;
                            border-bottom:1px solid #aebdcc;
                            padding:0;
                            box-sizing:border-box;
                        ">

                            <input
                                type="text"
                                value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                style="
                                    width:100%;
                                    max-width:100%;
                                    height:28px;
                                    border:1px solid #000;
                                    padding:4px 6px;
                                    box-sizing:border-box;
                                    font-size:12px;
                                    font-family:'Tinos',serif;
                                "
                            >

                        </td>

                    </tr>

                </tbody>

            </table>

        </section>

    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">
        <div style="width:100%;">

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>
                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Date / Time Last Relieved From Duty
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36lastduty'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

          
            <section style="margin-top:12px;">
                <table style="
                    width:100%;
                    max-width:100%;
                    table-layout:fixed;
                    border-collapse:collapse;
                    font-size:13.5px;
                ">
                    <thead>
                        <tr>
                            <th style="
                                width:33.33%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Day / Date
                            </th>

                            <th style="
                                width:33.33%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Total On-Duty Hours
                            </th>

                            <th style="
                                width:33.34%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Employer / Work Performed
                            </th>
                        </tr>
                    </thead>

                    <tbody style="font-size:12px;">

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 1:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day1'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36hours1'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                  value="{{ $driver->esigndata['p36permormance1'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 2:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day2'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                 value="{{ $driver->esigndata['p36hours2'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36permormance2'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                      
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 3:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day3'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36hours3'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36permormance3'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 4:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day4'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36hours4'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36permormance4'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 5:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day5'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36hours5'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36permormance5'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 6:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day6'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36hours6'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36permormance6'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                box-sizing:border-box;
                            ">
                                <div style="
                                    width:100%;
                                    display:table;
                                    table-layout:fixed;
                                ">
                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        vertical-align:middle;
                                    ">
                                        Day 7:
                                    </div>

                                    <div style="
                                        display:table-cell;
                                        width:50%;
                                        text-align:right;
                                        vertical-align:middle;
                                    ">
                                        <input
                                        value="{{ $driver->esigndata['p36day7'] ?? '' }}"
                                            type="date"
                                            style="
                                                max-width:100%;
                                                height:24px;
                                                border:1px solid #000;
                                                box-sizing:border-box;
                                            "
                                        >
                                    </div>
                                </div>
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36hours7'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                 value="{{ $driver->esigndata['p36permormance7'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>
                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Total Hours - 7 Days
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36totalhours'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Certification / Signature / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36cerdate'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

           
            <section style="margin-top:12px;">
                <h2 style="
                    margin:0 0 8px 0;
                    font-size:17.4px;
                    font-weight:bold;
                    line-height:1.2;
                    color:#1F355A;
                ">
                    31 DRIVER LICENSE COMPLIANCE &amp; STATUS NOTIFICATION
                </h2>

                <div style="
                    margin-bottom:8px;
                    font-size:13px;
                    line-height:1.35;
                ">
                    <p style="margin:0;">
                        The driver certifies that the current commercial driver
                        license identified below is the only license the driver
                        presently possesses, except as otherwise lawfully
                        permitted, and agrees to promptly notify the Company of
                        any suspension, revocation, cancellation,
                        disqualification, downgrade, restriction, expiration, or
                        other change affecting driving privileges. The driver
                        must also provide required notice of traffic convictions
                        as required by applicable law and Company policy.
                    </p>
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Name
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                CDL Number / State / Class
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ ($driver->currentcdllicenseno ?? '') . ' / ' . ($driver->currentcdlstate ?? '') }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Expiration / Endorsements / Restriction
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                  value="{{ $driver->esigndata['p36restriction'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Signature / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                @if(!empty($signatureBase64))
                                    <img
                                        src="{{ $signatureBase64 }}"
                                        alt="Driver Signature"
                                        style="
                                            display:block;
                                            width:100%;
                                            max-width:100%;
                                            height:30px;
                                            object-fit:contain;
                                        "
                                    >
                                @else
                                    <div style="
                                        width:100%;
                                        height:28px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "></div>
                                @endif
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

           
            <section style="margin-top:12px;">
                <h2 style="
                    margin:0 0 8px 0;
                    font-size:17.4px;
                    font-weight:bold;
                    line-height:1.2;
                    color:#1F355A;
                ">
                    32 PASSENGER AUTHORIZATION (USE ONLY WHEN COMPANY APPROVES)
                </h2>

                <div style="
                    background:#d8e9f6;
                    padding:9px 10px;
                    font-size:12.7px;
                    line-height:1.35;
                    color:#173f69;
                    box-sizing:border-box;
                ">
                    This form does not itself authorize a passenger. It becomes
                    effective only when signed by an authorized Company official
                    and only for the dates/conditions stated below.
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Approved Passenger
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36approvedpassenger'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Relationship
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p36relation'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

        </div>
    </div>
</div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">
        <div style="width:100%;">

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Authorized Dates / Trip
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37trip'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Conditions / Required Documents
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37condition'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Authorized Company Official / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                 value="{{ $driver->esigndata['p37authorized'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:11.4px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Acknowledgment / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37aknowledge'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

           
            <section style="margin-top:12px;">
                <div style="
                    margin-bottom:8px;
                    font-size:13px;
                    line-height:1.35;
                ">
                    <p style="margin:0;">
                        The passenger may not operate Company equipment or
                        perform Company work unless separately authorized and
                        qualified. The driver remains responsible for compliance
                        with seat-belt, site-access, and Company safety rules.
                        Any separate release/insurance language should be
                        reviewed for the applicable jurisdiction before use.
                    </p>
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <h2 style="
                    margin:0 0 8px 0;
                    font-size:17.4px;
                    font-weight:bold;
                    line-height:1.2;
                    color:#1F355A;
                ">
                    33 PRE-TRIP / EQUIPMENT INSPECTION TRAINING ACKNOWLEDGMENT
                </h2>

                <div style="
                    margin-bottom:8px;
                    font-size:13px;
                    line-height:1.35;
                ">
                    <p style="margin:0;">
                        I acknowledge that I received instruction on the Company
                        pre-trip, post-trip, defect-reporting, out-of-service,
                        trailer-interchange, roadside-inspection, and
                        equipment-care procedures. I understand that I must not
                        knowingly operate unsafe or out-of-service equipment and
                        must immediately report defects that could affect safe
                        operation.
                    </p>
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Name
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Trainer / Company Representative
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ $company->owner ?? '' }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Equipment Type(s)
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="Van"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Training Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                  value="{{ $driver->esigndata['p37trainingdate'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Signature / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border:1px solid #000;
                                box-sizing:border-box;
                            ">
                                @if(!empty($signatureBase64))
                                    <img
                                        src="{{ $signatureBase64 }}"
                                        alt="Driver Signature"
                                        style="
                                            display:block;
                                            width:100%;
                                            max-width:100%;
                                            height:30px;
                                            object-fit:contain;
                                        "
                                    >
                                @else
                                    <div style="
                                        width:100%;
                                        height:28px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "></div>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Trainer Signature / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

          
            <section style="margin-top:12px;">
                <h2 style="
                    margin:0 0 8px 0;
                    font-size:17.4px;
                    font-weight:bold;
                    line-height:1.2;
                    color:#1F355A;
                ">
                    34 FINAL DRIVER POLICY RECEIPT &amp; INITIALS
                </h2>

                <table style="
                    width:100%;
                    max-width:100%;
                    table-layout:fixed;
                    border-collapse:collapse;
                    font-size:13.5px;
                ">
                    <thead>
                        <tr>
                            <th style="
                                width:33.33%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Policy
                            </th>

                            <th style="
                                width:33.33%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Driver Initials
                            </th>

                            <th style="
                                width:33.34%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Date
                            </th>
                        </tr>
                    </thead>

                    <tbody style="font-size:12px;">

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                ELD &amp; Hours-of-Service
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section1'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate1'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Pre-Trip/Post-Trip &amp; Equipment Inspection
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section2'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate2'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Camera/Dash-Cam Non-Tampering
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section3'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate3'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Seat-Belt &amp; Occupant Restraint
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section4'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate4'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                No Hand-Held Device / Distracted Driving
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section5'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate5'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Truck Abandonment &amp; Return of Equipment
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section6'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate6'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Unauthorized Passenger &amp; Pet
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section7'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate7'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Accident/Citation/Inspection/Violation Reporting
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section8'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate8'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Driver-Caused Damage / Equipment Responsibility
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34section9'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p37part34sectiondate9'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

        </div>
    </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <div style="
        width:100%;
        max-width:100%;
        margin:0 auto;
        box-sizing:border-box;
    ">
        <div style="width:100%;">

           
            <section style="margin-top:12px;">
                <table style="
                    width:100%;
                    max-width:100%;
                    table-layout:fixed;
                    border-collapse:collapse;
                    font-size:13.5px;
                ">
                    <thead>
                        <tr>
                            <th style="
                                width:33.33%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Policy
                            </th>

                            <th style="
                                width:33.33%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Driver Initials
                            </th>

                            <th style="
                                width:33.34%;
                                border:1px solid #1b3e5c;
                                background:#24557f;
                                padding:8px 6px;
                                text-align:center;
                                vertical-align:middle;
                                font-size:12px;
                                font-weight:bold;
                                color:#fff;
                                box-sizing:border-box;
                            ">
                                Date
                            </th>
                        </tr>
                    </thead>

                    <tbody style="font-size:12px;">

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Maintenance / Defect / Roadside Repair
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                 value="{{ $driver->esigndata['p38section1'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                 value="{{ $driver->esigndata['p38sectiondate1'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Safe Driving / Fatigue / General Conduct
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p38section2'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p38sectiondate2'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                      
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                FMCSA/DOT Drug &amp; Alcohol Policy
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p38section3'] ?? '' }}"
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                value="{{ $driver->esigndata['p38sectiondate3'] ?? '' }}"
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                       
                        <tr>
                            <td style="
                                border:1px solid #555;
                                padding:7px 6px;
                                vertical-align:top;
                                line-height:1.22;
                                box-sizing:border-box;
                            ">
                                Clearinghouse Consent &amp; Query Requirements
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>

                            <td style="
                                border:1px solid #555;
                                padding:0 6px;
                                vertical-align:middle;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="date"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:20px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

           
            <section style="margin-top:12px;">
                <div style="
                    margin-bottom:8px;
                    font-size:13px;
                    line-height:1.35;
                ">
                    <p style="margin:0;">
                        I acknowledge receipt of the policies identified above
                        and understand that I am responsible for following
                        applicable law and lawful Company safety procedures. I
                        had an opportunity to ask questions. I understand that
                        policy acknowledgment does not waive rights that cannot
                        lawfully be waived and does not authorize an unlawful
                        wage deduction or transfer a legal duty that belongs to
                        the motor carrier.
                    </p>
                </div>
            </section>

           
            <section style="margin-top:12px;">
                <table style="
                    margin-top:8px;
                    width:100%;
                    max-width:100%;
                    border-collapse:collapse;
                    table-layout:fixed;
                    font-size:14px;
                ">
                    <tbody>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Printed Name
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Driver Signature / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border:1px solid #000;
                                box-sizing:border-box;
                            ">
                                @if(!empty($signatureBase64))
                                    <img
                                        src="{{ $signatureBase64 }}"
                                        alt="Driver Signature"
                                        style="
                                            display:block;
                                            width:100%;
                                            max-width:100%;
                                            height:30px;
                                            object-fit:contain;
                                        "
                                    >
                                @else
                                    <div style="
                                        width:100%;
                                        height:28px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "></div>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="
                                width:40%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                background:#e5e7eb;
                                padding:5px 7px;
                                font-size:12px;
                                font-weight:bold;
                                color:#173f69;
                                box-sizing:border-box;
                            ">
                                Company Representative / Date
                            </td>

                            <td style="
                                width:60%;
                                height:25px;
                                border-bottom:1px solid #aebdcc;
                                box-sizing:border-box;
                            ">
                                <input
                                    type="text"
                                    value="{{ $company->owner ?? '' }}"
                                    style="
                                        display:block;
                                        width:100%;
                                        max-width:100%;
                                        height:28px;
                                        padding:8px;
                                        border:1px solid #000;
                                        box-sizing:border-box;
                                    "
                                >
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

           
            <section style="margin-top:12px;">

                <div style="
                    background:#d8e9f6;
                    padding:9px 10px;
                    font-size:12.7px;
                    line-height:1.35;
                    color:#173f69;
                    box-sizing:border-box;
                ">
                    WEBSITE / CLIENT USE: Before providing this packet to a
                    motor-carrier client, complete the carrier-specific fields,
                    insert current official government forms where needed, and
                    review state-specific employment/privacy/wage/camera
                    requirements. The official PSP disclosure/authorization
                    must remain a stand-alone document and its required
                    language must not be combined with other consent language.
                </div>

                <div style="
                    background:#EFF6FB;
                    margin-top:13px;
                    padding:9px 10px;
                    font-size:11.7px;
                    line-height:1.35;
                    color:#173f69;
                    box-sizing:border-box;
                ">
                    <b>IMPORTANT</b> This packet is designed as an employment
                    and driver-qualification application. Form I-9 is a
                    separate post-offer employment-eligibility form and should
                    be completed at the legally appropriate time using the
                    current USCIS edition.
                </div>

            </section>

        </div>
    </div>
</div>

<br />



    <div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
          <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;box-sizing:border-box;">
            <div style="width:100%;">
              <section style="margin-top:12px;">
                <div style="text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:700;color:#fff;box-sizing:border-box;padding:2px 4px;">
                  1 EMPLOYER / POSITION INFORMATION
                </div>

                <p style="font-size:11.4px;margin:8px 0;display:flex;align-items:flex-start;">
                  <span>
                    <i>
                      To be completed by the applicant unless prefilled by the
                      motor carrier.
                    </i>
                  </span>
                </p>

                <div style="overflow-x:auto;">
                  <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody style="font-size:10px;">
                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              COMPANY NAME:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">USDOT #:</span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              COMPANY ADDRESS:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              CITY / STATE / ZIP:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              POSITION APPLIED FOR:
                            </span>
                            <input value="Driver" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              APPLICATION DATE:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="date"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              REFERRED BY:
                            </span>
                            <input
                              value="Friend" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              DESIRED START DATE:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="date"
                            >
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br />
                  <div style="display:flex;font-size:12px;">
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>Company Driver</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>Owner-Operator</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>Lease Driver</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>Local</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>Regional</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>OTR</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:4px;margin-right:12px;">
                      <input type="checkbox" style="width:12px;height:12px;" >
                      <span>Team</span>
                    </div>
                  </div>
                </div>
              </section>

              <section style="margin-top:12px;">
                <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #000;border-color:#1b3e5c;background:#1F355A;font-size:16px;font-weight:700;color:#fff;">
                  2 APPLICANT INFORMATION
                </div>

                <div style="overflow-x:auto;">
                  <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody style="font-size:10px;">
                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              FIRST NAME:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              MIDDLE NAME:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              LAST NAME:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">SUFFIX:</span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              DATE OF BIRTH:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="date"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              SOCIAL SECURITY NUMBER:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              PRIMARY PHONE:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              ALTERNATE PHONE:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">EMAIL:</span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="email"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              CURRENT ADDRESS:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td
                          colspan="2" style="font-weight:700;vertical-align:top;line-height:1.22;"
                        >
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              CITY / STATE / ZIP:
                            </span>
                            <input value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              HOW LONG AT CURRENT ADDRESS?:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              PREFERRED CONTACT:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br />

                  <div style="font-size:12px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                    <input type="checkbox" style="width:12px;height:12px;" >
                    <span>
                       
                      Are you legally eligible to work in the United States? Yes
                      / No
                    </span> 
                    <input type="checkbox" style="width:12px;height:12px;" >
                    <span>
                       
                      Are you at least 21 years of age? Yes / No
                    </span> 
                    <input type="checkbox" style="width:12px;height:12px;" >
                    <span> Do you have a TWIC card? Yes / No</span> 
                    <input type="checkbox" style="width:12px;height:12px;" >
                    <span> Do you have a passport? Yes / No</span> 
                    <input type="checkbox" style="width:12px;height:12px;" >
                    <span>
                       
                      Have you previously worked for this company? Yes / No
                    </span>
                  </div>

                  <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody style="font-size:10px;">
                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              IF PREVIOUSLY EMPLOYED, WHEN?:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              EMPLOYEE / DRIVER ID (IF KNOWN):
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </section>

              <section style="margin-top:20px;">
                <div style="text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:700;color:#fff;box-sizing:border-box;padding:2px 4px;">
                  3 RESIDENCE HISTORY - PREVIOUS 3 YEARS
                </div>

                <p style="font-size:11.4px;margin:8px 0;display:flex;align-items:flex-start;">
                  <span>
                    <i>
                      List enough prior residences to cover the full three years
                      immediately preceding this application if your current
                      residence is less than three years.
                    </i>
                  </span>
                </p>

                <div style="overflow-x:auto;">
                  <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>
                      <p style="font-size:11.4px;margin-bottom:8px;align-items:flex-start;font-weight:700;">
                        <span>PRIOR RESIDENCE 1</span>
                      </p>
                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              STREET ADDRESS:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">CITY:</span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              STATE / PROVINCE:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>

                      <tr style="border-bottom:1px solid #000;">
                        <td style="font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              ZIP / POSTAL CODE:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">COUNTRY:</span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>

                        <td style="font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;">
                          <div style="display:flex;align-items:center;width:100%;">
                            <span style="white-space:nowrap;">
                              missing_salman:
                            </span>
                            <input style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;box-sizing:border-box;"
                              type="text"
                            >
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </section>
            </div>
          </div>
        </div>
<br />



<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
          <div style="width:100%;margin-left:auto;margin-right:auto;">
            <div style="width:100%;">
              <section style="margin-top:12px;">
                <div style="text-align:left;width:100%;border:1px solid #000;border-color:#1b3e5c;background:#1F355A;font-size:16px;font-weight:700;color:#fff;">
                  4 DRIVER LICENSE / PERMIT HISTORY
                </div>

                <p style="font-size:11.4px;margin-top:8px;margin-bottom:8px;display:flex;align-items:flex-start;">
                  <span>
                    <i>
                      List every motor vehicle operator license or permit held
                      during the preceding 3 years. Enter your name exactly as
                      shown on the license.
                    </i>
                  </span>
                </p>

                <div style="overflow-x:auto;">
                  <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:10px;">
                    <thead style="border:1px solid #000;background:#1F355A;color:#fff;border-color:#000;">
                      <tr>
                        <th>State</th>
                        <th>License / Permit Number </th>
                        <th>Class</th>
                        <th>Endorsements</th>
                        <th>Issued</th>
                        <th>Expires</th>
                        <th>Restrictions</th>
                      </tr>
                    </thead>
                    <tbody style="height:60px;">
                      <tr style="border:1px solid #000;border-color:#000;">
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                        <td style="border:1px solid #000;border-color:#000;font-weight:700;font-size:10px;vertical-align:top;line-height:1.22;"></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>

                  <div style="font-size:12px;align-items:center;gap:4px;margin-right:12px;">
                    <input type="checkbox" style="width:12px;height:12px;">
                    <span>Is your current license a CDL? Yes / No</span>

                    <span> CDL State:</span>
                    <input
                      type="text" style="border:1px solid #000;border-color:#000;width:150px;height:12px;">
                    <span> CDL Number: </span>
                    <input
                      type="text" style="border:1px solid #000;border-color:#000;width:150px;height:12px;">
                    <span> Issue Date: </span>
                    <input
                      type="text" style="border:1px solid #000;border-color:#000;width:150px;height:12px;">
                    <span> Expiry Date: </span>
                    <input
                      type="text" style="border:1px solid #000;border-color:#000;width:150px;height:12px;">
                  </div>

                  <div style="font-size:12px;align-items:center;gap:8px;margin-right:12px;">
                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">Current CDL</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">Class A</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">Class B</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">Class C</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">CLP</span>
                  </div>

                  <div style="font-size:12px;align-items:center;gap:8px;margin-right:12px;">
                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">Endorsements: H</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">N</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">P</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">S</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">T</span>

                    <input type="checkbox" style="width:12px;height:12px;">
                    <span style="margin-right:8px;">X</span>

                    <span> Other: </span>
                    <input
                      type="text" style="border:1px solid #000;border-color:#000;width:75px;height:12px;">
                  </div>
                </div>
              </section>

              <section style="margin-top:12px;">
                <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #000;border-color:#1b3e5c;background:#1F355A;font-size:16px;font-weight:700;color:#fff;">
                  5 LICENSE DENIALS, SUSPENSIONS & REVOCATIONS
                </div>

                <div style="font-size:12px;align-items:center;gap:8px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span style="margin-right:8px;">
                    Have you ever been denied a license, permit, or privilege to
                    operate a motor vehicle? Yes / No
                  </span>
                </div>

                <div style="font-size:12px;align-items:center;gap:8px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span style="margin-right:8px;">
                    Has any license, permit, or driving privilege ever been
                    suspended or revoked? Yes / No
                  </span>
                </div>

                <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
                  <span style="margin-right:8px;font-weight:700;font-size:10px;">
                    If YES to either question, explain the date, state, reason,
                    circumstances, and final disposition:
                  </span>
                </div>

                <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
                  <input
                    type="text" style="border:1px solid #000;border-color:#000;width:60%;height:12px;">
                </div>
                <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
                  <input
                    type="text" style="border:1px solid #000;border-color:#000;width:60%;height:12px;">
                </div>
                <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
                  <input
                    type="text" style="border:1px solid #000;border-color:#000;width:60%;height:12px;">
                </div>
                <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
                  <input
                    type="text" style="border:1px solid #000;border-color:#000;width:60%;height:12px;">
                </div>
              </section>

              <section style="margin-top:10px;">
                <div style="margin-bottom:12px;text-align:left;width:100%;border:1px solid #000;border-color:#1b3e5c;background:#1F355A;font-size:16px;font-weight:700;color:#fff;">
                  6 MEDICAL QUALIFICATION & CREDENTIALS
                </div>

                <table style="width:100%;table-layout:fixed;border-collapse:collapse;">
                  <tbody>
                    <tr style="border-color:#d1d5db;">
                      <td style="font-weight:700;font-size:9.4px;width:37%;vertical-align:top;line-height:1.22;">
                        <div style="align-items:center;width:100%;">
                          MEDICAL EXAMINER CERTIFICATE EXPIRATION:
                          <br>
                          <span style="color:#9ca3af;font-size:12px;">
                            MM/DD/YYYY
                          </span>
                        </div>
                      </td>

                      <td style="font-weight:700;font-size:9.4px;vertical-align:top;line-height:1.22;">
                        <div style="display:flex;align-items:center;width:100%;">
                          <input style="width:100%;border:1px solid #000;border-color:#000;height:20px;"
                            type="text">
                        </div>
                      </td>
                    </tr>

                    <tr style="border-color:#d1d5db;">
                      <td style="font-weight:700;font-size:9.4px;vertical-align:top;line-height:1.22;">
                        <div style="display:flex;align-items:center;width:100%;">
                          <span style="">
                            TWIC EXPIRATION:
                          </span>
                          <input style="border:1px solid #000;border-color:#000;height:20px;flex:1;margin-left:8px;min-width:0;"
                            type="text"
                            placeholder="MM/DD/YYYY or N/A ">
                        </div>
                      </td>

                      <td style="font-weight:700;font-size:9.4px;vertical-align:top;line-height:1.22;">
                        <div style="display:flex;align-items:center;width:100%;">
                          <span style="">
                            PASSPORT EXPIRATION:
                          </span>
                          <input style="border:1px solid #000;border-color:#000;height:20px;flex:1;margin-left:8px;min-width:0;"
                            type="text"
                            placeholder="MM/DD/YYYY or N/A ">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <div style="font-size:12px;align-items:center;gap:8px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span style="margin-right:8px;">
                    Medical certificate is electronically linked to CDL / MVR,
                    if applicable: Yes / No / N/A
                  </span>
                </div>
              </section>
            </div>
          </div>
        </div>

<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">
        <div style="text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          7 COMMERCIAL DRIVING EXPERIENCE
        </div>

        <p style="font-size:11.4px;margin-top:8px;margin-bottom:8px;display:flex;align-items:flex-start;color:#6b7280;">
          <span>
            <i>
              For each equipment type, show total experience,
              approximate dates, and approximate miles.
            </i>
          </span>
        </p>

        <div style="width:100%;overflow-x:auto;border-radius:2px;">
          <table style="width:100%;min-width:900px;table-layout:fixed;border-collapse:collapse;font-size:10px;">
            <thead style="border:1px solid #000;background:#1F355A;color:#fff;">
              <tr>
                <th style="width:18%;border:1px solid #000;padding:8px;text-align:left;">
                  Equipment Type
                </th>
                <th style="width:10%;border:1px solid #000;padding:8px;text-align:center;">
                  Yes/No
                </th>
                <th style="width:14%;border:1px solid #000;padding:8px;text-align:center;">
                  From
                </th>
                <th style="width:14%;border:1px solid #000;padding:8px;text-align:center;">
                  To
                </th>
                <th style="width:16%;border:1px solid #000;padding:8px;text-align:center;">
                  Approx. Miles
                </th>
                <th style="width:28%;border:1px solid #000;padding:8px;text-align:left;">
                  Description / Size
                </th>
              </tr>
            </thead>

            <tbody style="font-size:11px;">
              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;white-space:nowrap;">
                  Straight Truck
                </td>
                <td style="border:1px solid #000;padding:8px;">
                  <select style="width:100%;min-width:65px;border-radius:0;border:1px solid #000;background:#fff;padding:4px;font-size:11px;">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </td>
                <td style="border:1px solid #000;padding:8px;">
                  <input type="date" style="width:100%;min-width:125px;border-radius:0;border:1px solid #000;background:#fff;padding:4px;font-size:11px;">
                </td>
                <td style="border:1px solid #000;padding:8px;">
                  <input type="date" style="width:100%;min-width:125px;border-radius:0;border:1px solid #000;background:#fff;padding:4px;font-size:11px;">
                </td>
                <td style="border:1px solid #000;padding:8px;">
                  <input type="text" style="width:100%;min-width:100px;border-radius:0;border:1px solid #000;background:#fff;padding:4px;font-size:11px;">
                </td>
                <td style="border:1px solid #000;padding:8px;">
                  <input type="text" style="width:100%;min-width:200px;border-radius:0;border:1px solid #000;background:#fff;padding:4px;font-size:11px;">
                </td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;white-space:nowrap;">Truck-Tractor</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;min-width:65px;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;min-width:125px;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;min-width:125px;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;min-width:100px;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;min-width:200px;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Semi-Trailer</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Doubles / Triples</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Flatbed</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Tank Vehicle</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Bus / Passenger</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Reefer</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Dry Van</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>

              <tr>
                <td style="border:1px solid #000;padding:8px;font-weight:bold;">Other</td>
                <td style="border:1px solid #000;padding:8px;"><select style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"><option>Yes</option><option>No</option></select></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="date" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
                <td style="border:1px solid #000;padding:8px;"><input type="text" style="width:100%;border:1px solid #000;padding:4px;font-size:11px;"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          8 ACCIDENT / CRASH HISTORY - PREVIOUS 3 YEARS
        </div>

        <p style="font-size:11.4px;margin-top:8px;margin-bottom:8px;display:flex;align-items:flex-start;color:#6b7280;">
          <span>
            <i>
              List all motor vehicle accidents/crashes during the preceding 3 years.
              Include preventable and non-preventable events, whether or not cited.
            </i>
          </span>
        </p>

        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:9.4px;">
          <thead style="border:1px solid #000;background:#1F355A;color:#fff;">
            <tr>
              <th style="border:1px solid #000;padding:6px;">Date</th>
              <th style="border:1px solid #000;padding:6px;">Location</th>
              <th style="border:1px solid #000;padding:6px;">Nature of Accident</th>
              <th style="border:1px solid #000;padding:6px;">Fatalities</th>
              <th style="border:1px solid #000;padding:6px;">Injuries</th>
              <th style="border:1px solid #000;padding:6px;">Hazmat Spill</th>
              <th style="border:1px solid #000;padding:6px;">Preventable?</th>
            </tr>
          </thead>

          <tbody style="height:60px;"></tbody>
        </table>

        <br>

        <div style="font-size:12px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-left:4px;margin-right:8px;">
            No accidents/crashes during the previous 3 years
          </span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-left:4px;margin-right:8px;">
            Yes — accidents/crashes in the previous 3 years
          </span>
        </div>
      </section>

    </div>
  </div>
</div>
<br />

<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          9 TRAFFIC CONVICTIONS / FORFEITURES - PREVIOUS 3 YEARS
        </div>

        <p style="font-size:11.4px;margin-top:8px;margin-bottom:8px;display:flex;align-items:flex-start;color:#6b7280;">
          <span>
            <i>
              List all motor vehicle traffic convictions and forfeitures
              during the preceding 3 years, other than parking violations.
            </i>
          </span>
        </p>

        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:9.4px;">
          <thead style="border:1px solid #000;background:#1F355A;color:#fff;">
            <tr>
              <th style="border:1px solid #000;padding:6px;">Date</th>
              <th style="border:1px solid #000;padding:6px;">State</th>
              <th style="border:1px solid #000;padding:6px;">Violation / Offense</th>
              <th style="border:1px solid #000;padding:6px;">Location</th>
              <th style="border:1px solid #000;padding:6px;">Vehicle Type</th>
              <th style="border:1px solid #000;padding:6px;">Penalty / Disposition</th>
            </tr>
          </thead>
          <tbody style="height:60px;"></tbody>
        </table>

        <br>

        <div style="font-size:12px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-left:4px;margin-right:8px;">
            No traffic convictions during the previous 3 years
          </span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-left:4px;margin-right:8px;">
            Yes - traffic convictions during the previous 3 years
          </span>
        </div>
      </section>

      <section style="margin-top:12px;">
        <div style="text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          10 EMPLOYMENT HISTORY - REQUIRED 3 YEARS / CDL CMV HISTORY UP TO 10 YEARS
        </div>

        <p style="font-size:11.4px;margin-top:8px;margin-bottom:8px;display:flex;align-items:flex-start;color:#6b7280;">
          <span>
            <i>
              List ALL employers for the preceding 3 years. If you operated a CMV
              requiring a CDL, also provide additional CMV-driving employers needed
              to cover the preceding 10 years. Explain all gaps in employment.
            </i>
          </span>
        </p>

        <div style="background:#EFF6FB;margin-top:13px;padding:9px 10px;font-size:11.4px;line-height:1.35;color:#173f69;">
          <b>COMPLETE HISTORY </b>
          Do not omit part-time, temporary, self-employment, owner-operator work,
          military service, unemployment, school, or other periods necessary to
          account for the required history.
        </div>

        <br>

        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>

            <tr>
              <td colspan="2">
                <p style="font-size:12px;margin-top:0;margin-bottom:8px;font-weight:bold;">
                  EMPLOYER 1
                </p>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYER NAME:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PHONE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">STREET ADDRESS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CITY / STATE / ZIP:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">POSITION HELD:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">SUPERVISOR / CONTACT:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">FROM</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TO:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">REASON FOR LEAVING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMAIL / FAX:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="padding:4px;">
                <div style="font-size:11.4px;margin-top:16px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Subject to FMCSRs while employed? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Safety-sensitive DOT drug/alcohol testing position? Yes / No / N/A</span>
                </div>

                <div style="font-size:11.4px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Did you operate a CMV? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Was a CDL required? Yes / No</span>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="font-weight:bold;font-size:11.4px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">Equipment operated / duties:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

          </tbody>
        </table>

        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>

            <tr>
              <td colspan="2">
                <p style="font-size:12px;margin-top:8px;margin-bottom:8px;font-weight:bold;">
                  EMPLOYER 2
                </p>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYER NAME:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PHONE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">STREET ADDRESS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CITY / STATE / ZIP:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">POSITION HELD:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">SUPERVISOR / CONTACT:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">FROM</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TO:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">REASON FOR LEAVING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMAIL / FAX:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="padding:4px;">
                <div style="font-size:11.4px;margin-top:16px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Subject to FMCSRs while employed? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Safety-sensitive DOT drug/alcohol testing position? Yes / No / N/A</span>
                </div>

                <div style="font-size:11.4px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Did you operate a CMV? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Was a CDL required? Yes / No</span>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="font-weight:bold;font-size:11.4px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">Equipment operated / duties:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

          </tbody>
        </table>

      </section>
    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">

       
        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr>
              <td colspan="2">
                <p style="font-size:12px;margin:0 0 8px 0;font-weight:bold;">
                  EMPLOYER 3
                </p>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYER NAME:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PHONE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">STREET ADDRESS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CITY / STATE / ZIP:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">POSITION HELD:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">SUPERVISOR / CONTACT:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">FROM</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TO:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">REASON FOR LEAVING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMAIL / FAX:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="padding:4px;">
                <div style="font-size:11.4px;margin-top:16px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Subject to FMCSRs while employed? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Safety-sensitive DOT drug/alcohol testing position? Yes / No / N/A</span>
                </div>

                <div style="font-size:11.4px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Did you operate a CMV? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Was a CDL required? Yes / No</span>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="font-weight:bold;font-size:11.4px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">Equipment operated / duties:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>


       
        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr>
              <td colspan="2">
                <p style="font-size:12px;margin:8px 0;font-weight:bold;">
                  EMPLOYER 4
                </p>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYER NAME:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PHONE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">STREET ADDRESS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CITY / STATE / ZIP:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">POSITION HELD:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">SUPERVISOR / CONTACT:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">FROM</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TO:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">REASON FOR LEAVING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMAIL / FAX:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="padding:4px;">
                <div style="font-size:11.4px;margin-top:16px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Subject to FMCSRs while employed? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Safety-sensitive DOT drug/alcohol testing position? Yes / No / N/A</span>
                </div>

                <div style="font-size:11.4px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Did you operate a CMV? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Was a CDL required? Yes / No</span>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="font-weight:bold;font-size:11.4px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">Equipment operated / duties:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>


       
        <table style="width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr>
              <td colspan="2">
                <p style="font-size:12px;margin:8px 0;font-weight:bold;">
                  EMPLOYER 5
                </p>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYER NAME:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PHONE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">STREET ADDRESS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CITY / STATE / ZIP:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">POSITION HELD:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">SUPERVISOR / CONTACT:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">FROM</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TO:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">REASON FOR LEAVING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMAIL / FAX:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="padding:4px;">
                <div style="font-size:11.4px;margin-top:16px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Subject to FMCSRs while employed? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Safety-sensitive DOT drug/alcohol testing position? Yes / No / N/A</span>
                </div>

                <div style="font-size:11.4px;display:flex;align-items:center;gap:4px;margin-right:12px;">
                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Did you operate a CMV? Yes / No</span>

                  <input type="checkbox" style="width:12px;height:12px;">
                  <span>Was a CDL required? Yes / No</span>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="font-weight:bold;font-size:11.4px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">Equipment operated / duties:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

          </tbody>
        </table>

      </section>

    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">
      <section style="margin-top:12px;">

        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          11 EMPLOYMENT GAPS / ADDITIONAL 10-YEAR CMV HISTORY
        </div>

        <table style="width:100%;table-layout:fixed;font-size:10px;border-collapse:collapse;">
          <thead style="text-align:left;border:1px solid #000;background:#1F355A;color:#fff;">
            <tr>
              <th>From</th>
              <th>To</th>
              <th>Status / Employer / School</th>
              <th>City &amp; State</th>
              <th>Explanation / CMV Duties</th>
            </tr>
          </thead>
          <tbody style="height:60px;"></tbody>
        </table>

      </section>

      <section style="margin-top:12px;">

        <div style="text-align:left;width:100%;margin-bottom:8px;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          12 MILITARY DRIVING EXPERIENCE (IF APPLICABLE)
        </div>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">BRANCH:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">DATES OF SERVICE:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">MOS / RATING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TYPE OF VEHICLE(S):</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">APPROX. MILES / HOURS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">DISCHARGE STATUS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>

      </section>

      <section style="margin-top:12px;">

        <div style="text-align:left;width:100%;margin-bottom:8px;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          13 ADDITIONAL QUALIFICATIONS
        </div>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">BRANCH:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">DATES OF SERVICE:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">MOS / RATING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TYPE OF VEHICLE(S):</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">APPROX. MILES / HOURS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">DISCHARGE STATUS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>

      </section>

      <section style="margin-top:12px;">

        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          5 LICENSE DENIALS, SUSPENSIONS &amp; REVOCATIONS
        </div>

        <div style="font-size:12px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Hazmat Experience</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Tanker Experience</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Doubles/Triples</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Reefer</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Flatbed</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Port / TWIC</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Mountain</span>

          <input type="checkbox" style="width:12px;height:12px;">
          <span style="margin-right:8px;">Snow / Ice</span>
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <span style="margin-right:8px;font-weight:bold;font-size:10px;">
            Special training, certificates, safety awards, schools, or other qualifications:
          </span>
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="text" style="border:1px solid #000;width:60%;height:12px;">
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="text" style="border:1px solid #000;width:60%;height:12px;">
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="text" style="border:1px solid #000;width:60%;height:12px;">
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input type="text" style="border:1px solid #000;width:60%;height:12px;">
        </div>

      </section>
    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          14 APPLICANT CERTIFICATION &amp; AUTHORIZATION
        </div>

        <p style="font-size:12px;margin-top:8px;margin-bottom:4px;display:flex;align-items:flex-start;">
          I certify that this application was completed by me and that
          all entries and information provided are true, complete, and
          accurate to the best of my knowledge. I understand that
          material omissions, misrepresentations, or false statements
          may result in disqualification from consideration or
          termination of employment, subject to applicable law.
        </p>

        <p style="font-size:12px;margin-bottom:4px;display:flex;align-items:flex-start;">
          I authorize the prospective motor carrier and its authorized
          agents to contact employers, schools, licensing agencies,
          government agencies, and other lawful sources to verify
          information relevant to my qualifications for employment and
          operation of commercial motor vehicles, subject to applicable
          federal and state law.
        </p>

        <p style="font-size:12px;margin-bottom:4px;display:flex;align-items:flex-start;">
          I understand that this application does not constitute a
          contract of employment and that any employment relationship is
          subject to the employer’s policies and applicable law.
        </p>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Applicant Signature:
                  </span>

                  <input
                    type="text"
                    style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Printed Name:
                  </span>

                  <input
                    type="text"
                    value=""
                    style="height:20px;flex:1;margin-left:8px;min-width:0;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Date:
                  </span>

                  <input
                    type="date"
                    style="height:20px;flex:1;margin-left:8px;min-width:0;"
                  >
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          15 FAIR CREDIT REPORTING ACT / BACKGROUND REPORT AUTHORIZATION
        </div>

        <p style="font-size:11.4px;margin-top:8px;margin-bottom:4px;display:flex;align-items:flex-start;color:#6b7280;">
          <i>
            Use this section only if the employer’s screening process
            and applicable law permit it. A standalone disclosure may be
            required; the employer should provide any legally required
            separate disclosure and notices.
          </i>
        </p>

        <p style="font-size:12px;margin-bottom:4px;display:flex;align-items:flex-start;">
          I authorize the prospective employer and its designated
          consumer reporting agency or authorized representative to
          obtain reports for lawful employment purposes, which may
          include verification of identity, employment history,
          education, motor vehicle records, criminal history where
          permitted by law, and other public records relevant to
          employment. I understand that additional disclosures,
          authorizations, and pre- adverse/adverse action notices may
          apply.
        </p>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Applicant Signature:
                  </span>

                  <input
                    type="text"
                    style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Date:
                  </span>

                  <input
                    type="date"
                    style="height:20px;flex:1;margin-left:8px;min-width:0;"
                  >
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>

    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:15.4px;font-weight:bold;color:#fff;">
          16 FMCSA DRUG &amp; ALCOHOL CLEARINGHOUSE - GENERAL CONSENT FOR
          LIMITED QUERIES
        </div>

        <p style="font-size:12px;margin-top:8px;display:flex;align-items:flex-start;">
          I,
          <input type="text" style="width:30%;border:1px solid #000;height:15px;margin:0 4px;">
          provide consent to
          <input type="text" style="width:30%;border:1px solid #000;height:15px;margin:0 4px;">
          (Employer) to conduct limited queries of the FMCSA Commercial
          Driver’s License Drug and Alcohol Clearinghouse to determine
          whether drug or alcohol violation information about me exists
          in the Clearinghouse.
        </p>

        <p style="font-size:12px;display:flex;align-items:center;gap:4px;">
          <input type="checkbox">
          One limited query only

          <input type="checkbox">
          Multiple limited queries during the stated consent period

          <input type="checkbox">
          Annual and other lawful limited queries during employment
        </p>

        <p style="font-size:12px;margin-bottom:4px;display:flex;align-items:flex-start;">
          I understand that a limited query does not disclose specific
          violation information. If a limited query indicates that
          information exists, the employer must obtain the additional
          specific electronic consent required for a full query before
          detailed information can be released. I further understand
          that refusal to provide required consent may prohibit me from
          performing safety-sensitive functions for that employer as
          required by FMCSA regulations.
        </p>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Applicant Signature:
                  </span>
                  <input
                    type="text"
                    style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Printed Name:
                  </span>
                  <input
                    type="text"
                    value=""
                    style="height:20px;flex:1;margin-left:8px;min-width:0;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Date:
                  </span>
                  <input
                    type="date"
                    style="height:20px;flex:1;margin-left:8px;min-width:0;"
                  >
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          17 PRE-EMPLOYMENT DRUG &amp; ALCOHOL INFORMATION
        </div>

        <p style="font-size:12px;margin-top:8px;display:flex;align-items:flex-start;">
          <input type="checkbox">
          Have you tested positive, or refused to test, on any
          pre-employment DOT drug or alcohol test during the past 3
          years for an employer that did not hire you? Yes / No
        </p>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <span style="margin-right:8px;font-weight:bold;font-size:10px;">
            If YES, provide the information requested by the employer
            and documentation of successful completion of the
            return-to-duty process, if applicable:
          </span>
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input
            type="text"
            style="border:1px solid #000;width:60%;height:12px;"
          >
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input
            type="text"
            style="border:1px solid #000;width:60%;height:12px;"
          >
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input
            type="text"
            style="border:1px solid #000;width:60%;height:12px;"
          >
        </div>

        <div style="font-size:11.4px;display:flex;align-items:center;gap:8px;margin-right:12px;">
          <input
            type="text"
            style="border:1px solid #000;width:60%;height:12px;"
          >
        </div>

        <br>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Applicant Signature:
                  </span>
                  <input
                    type="text"
                    style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Date:
                  </span>
                  <input
                    type="date"
                    style="height:20px;flex:1;margin-left:8px;min-width:0;"
                  >
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>

    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:15.4px;font-weight:bold;color:#fff;">
          18 SAFETY PERFORMANCE HISTORY RECORDS REQUEST - APPLICANT
          AUTHORIZATION
        </div>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">APPLICANT / DRIVER NAME:</span>
                  <input type="text" value="" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">SSN - LAST 4:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PREVIOUS EMPLOYER:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PREVIOUS EMPLOYER ADDRESS:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CITY / STATE / ZIP:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PREVIOUS EMPLOYER PHONE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMAIL / FAX:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYMENT FROM:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">EMPLOYMENT TO:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <p style="font-size:11px;margin-bottom:4px;display:flex;align-items:flex-start;">
          I authorize the previous employer identified above to release
          to the prospective motor carrier the information lawfully
          requested concerning my employment and safety performance
          history, including applicable accident history and
          DOT-regulated drug and alcohol information.
        </p>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Driver Signature:
                  </span>
                  <input
                    type="text"
                    style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;"
                  >
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Date:
                  </span>
                  <input type="date" style="height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;font-size:12px;font-weight:bold;">
          TO BE COMPLETED BY PREVIOUS EMPLOYER
        </div>

        <p style="font-size:12px;margin-top:8px;display:flex;align-items:flex-start;">
          <input type="checkbox">
          Applicant was employed by this company: Yes / No
          <input type="checkbox" style="margin-left:8px;">
          Dates confirmed: From To
        </p>

        <p style="font-size:12px;display:flex;align-items:flex-start;">
          <input type="checkbox">
          Operated CMV: Yes / No
          <input type="checkbox" style="margin-left:8px;">
          Equipment: Straight Truck / Tractor-Semitrailer / Bus / Tank /
          Doubles-Triples / Other
        </p>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">AREASON FOR LEAVING:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">ELIGIBLE FOR REHIRE?:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PERSON COMPLETING FORM:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TITLE:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PHONE / EMAIL:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <div style="margin-bottom:16px;text-align:left;width:100%;font-size:12px;font-weight:bold;">
          ACCIDENT HISTORY
        </div>

        <table style="width:100%;text-align:left;font-size:9.4px;border-collapse:collapse;">
          <thead style="border:1px solid #000;background:#1F355A;color:#fff;">
            <tr>
              <th>Date</th>
              <th>Location</th>
              <th>Injuries</th>
              <th>Fatalities</th>
              <th>Hazmat Spill</th>
              <th>Brief Description</th>
            </tr>
          </thead>
          <tbody style="height:60px;"></tbody>
        </table>
      </section>

    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">
      
      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:15.4px;font-weight:bold;color:#fff;">
          21 MOTOR CARRIER DRIVER QUALIFICATION FILE - INTERNAL
          CHECKLIST
        </div>

        <p style="font-size:11.4px;margin-top:8px;margin-bottom:8px;display:flex;align-items:flex-start;color:#6b7280;">
          <span>
            <i>
              Employer use only. This checklist is provided as an
              organizational aid and does not replace the motor
              carrier’s responsibility to determine all documents
              required for the driver and operation.
            </i>
          </span>
        </p>
      </section>

      <section style="margin-top:12px;">
        <table style="width:100%;text-align:left;font-size:12px;border-collapse:collapse;">
          <thead style="border:1px solid #000;background:#1F355A;color:#fff;">
            <tr>
              <th style="padding:4px;">Document / Requirement</th>
              <th style="padding:4px;">Received</th>
              <th style="padding:4px;">Reviewed</th>
              <th style="padding:4px;">Date / Notes</th>
            </tr>
          </thead>

          <tbody style="font-size:12px;">

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Signed Commercial Driver Employment Application
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ 391.21
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Copy of current Driver License / CDL - front and back
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Company / qualification record Verify class,
                endorsements, restrictions and expiration
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Work authorization / Form I-9 acceptable document(s)
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Employment eligibility - maintain I-9 separately
                Employee chooses acceptable List A OR List B + List C
                documents; do not require a specific document
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Employment Authorization Document (work permit), if
                    presented/required by the employee's status
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                I-9 supporting document, when applicable Do not require
                an EAD if the employee presents other acceptable I-9
                documentation
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Social Security card, if presented for Form I-9 or
                    needed for lawful payroll/onboarding purposes
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Employment / payroll, when applicable Do not require SS
                card as the specific I-9 document if other acceptable
                documents are presented
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Medical Examiner's Certificate / current CDLIS
                    medical certification status
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ 391.43 / 391.51
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Medical Examination Report Form MCSA-5875 (long
                    form, commonly 5 pages), if voluntarily obtained
                    with driver consent
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Confidential medical record - NOT a standard DQ-file
                requirement Store with restricted medical records; FMCSA
                requires the Medical Examiner to retain the original
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Medical certification verification / CDLIS MVR
                    showing medical status
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ for CDL/CLP drivers Obtain current
                licensing-state CDLIS MVR and verify medical status
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Medical variance / exemption / SPE documentation, if
                    applicable
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ Maintain when applicable
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Iitial MVR / driving record from each required State
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ 391.23
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Signed DMV / MVR / CDLIS Records Authorization and
                    Consent
                  </div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Screening authorization Authorizes lawful driving-record
                and CDLIS-related record retrieval
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>Annual MVR and documented annual review</div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ - recurring 391.25
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>Safety Performance History</div>
                </div>
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>

              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ
              </td>
            </tr>

          </tbody>
        </table>
      </section>

    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">
      <section style="margin-top:12px;"></section>

      <section style="margin-top:12px;">
        <table style="width:100%;text-align:left;font-size:12px;border-collapse:collapse;">
          <tbody style="font-size:12px;">

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    request(s), responses, and documented good-faith attempts
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                391.21
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>Road Test Certificate or lawful equivalent</div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                FMCSA DQ 391.31 / 391.33
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    FMCSA Clearinghouse pre- employment full query
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Drug &amp; alcohol compliance Specific electronic consent
                occurs in the Clearinghouse
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    FMCSA Clearinghouse limited- query general consent
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Drug &amp; alcohol compliance Retain consent evidence for
                required period
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Pre-employment controlled substances test result /
                    CCF documentation, when required
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Drug &amp; alcohol compliance Part 382 / Part 40
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Pre-employment drug &amp; alcohol questionnaire / prior
                    testing information, when applicable
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Drug &amp; alcohol compliance Part 40 / company process
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Standalone Background / Consumer Report Disclosure
                    and Authorization
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Employment screening FCRA / applicable state law
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Criminal background report, if obtained and lawful
                    for the position/location
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Confidential screening record Follow FCRA and applicable
                state/local restrictions
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    PSP report, if ordered with driver authorization
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Optional pre-employment safety screening Not a
                substitute for required MVR / SPH inquiries
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    CDLIS / license status information obtained through
                    authorized source
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Driver qualification screening Use for CDL status /
                medical certification verification as applicable
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Drug &amp; Alcohol Policy acknowledgment / receipt
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Company compliance Signed acknowledgment
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>
                    Driver policy / handbook / safety policy
                    acknowledgments
                  </div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Company record As applicable
              </td>
            </tr>

            <tr>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:top;">
                <div style="display:flex;width:100%;align-items:center;justify-content:space-between;">
                  <div>I-9 Form</div>
                </div>
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;">
                <input type="checkbox" style="border:3px solid #000;width:100%;padding:8px;">
              </td>
              <td style="border:1px solid #000;padding:7px 6px;vertical-align:middle;text-align:left;">
                Employment eligibility Keep separately from DQ file as
                company practice
              </td>
            </tr>

          </tbody>
        </table>
      </section>
    </div>
  </div>
</div>
<br />
<div style="background:#fff;padding:10mm;height:277mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <div style="width:100%;max-width:900px;margin:0 auto;padding:0 8px;">
    <div style="width:100%;">

      <section style="margin-top:12px;">
        <div style="margin-bottom:16px;text-align:left;width:100%;border:1px solid #1b3e5c;background:#1F355A;font-size:16px;font-weight:bold;color:#fff;">
          25 EMPLOYER REVIEW / FINAL DISPOSITION
        </div>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">APPLICATION REVIEWED BY:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">
                    DATE: <span style="color:#6b7280;">MM/DD/YYYY</span>
                  </span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">MVR REVIEWED BY:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">TYPE OF TRAILER(S):</span>
                  <input type="text" value="Van" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">PREVIOUS EMPLOYER CHECKS BY:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">DATE:</span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">CLEARINGHOUSE QUERY BY:</span>
                  <input type="text" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;">
                    DATE: <span style="color:#6b7280;">MM/DD/YYYY</span>
                  </span>
                  <input type="date" style="border:1px solid #000;height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>

      <section style="margin-top:12px;">
        <p style="font-size:12px;margin-top:8px;align-items:flex-start;">
          <input type="checkbox" checked>
          Approved for Hire
          <input type="checkbox">
          Conditional / Pending Documents
          <input type="checkbox">
          Not Approved
          <input type="checkbox">
          Withdrawn
        </p>

        <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
          <span style="margin-right:8px;font-weight:bold;font-size:10px;">
            Comments / outstanding items:
          </span>
        </div>

        <div style="font-size:11.4px;align-items:center;gap:8px;margin-right:12px;">
          <textarea style="border:1px solid #000;width:100%;height:50px;"></textarea>
        </div>

        <br>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Authorized Representative Signature
                  </span>
                  <input type="text" style="height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">Title</span>
                  <input type="text" style="height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">Date:</span>
                  <input type="date" style="height:20px;flex:1;margin-left:8px;min-width:0;">
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <p style="font-size:13.4px;margin-top:8px;text-align:center;">
          WEBSITE VERSION - REV. SEPTEMBER 2026 | EXPANDED DRIVER
          DOCUMENT &amp; CONSENT PACKAGE
        </p>

        <p style="color:#6b7280;font-size:10px;text-align:center;">
          Prepared for use by motor carriers with administrative support
          from DOT Compliance Solutions LLC.
        </p>

        <br>
        <br>

        <table style="margin-bottom:16px;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
          <tbody>
          

      

            <tr style="border-bottom:1px solid #d1d5db;">
              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <span style="white-space:nowrap;color:#9ca3af;">
                  Driver Photo
                </span>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Ip Address
                  </span>
                </div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;">
                  <span style="white-space:nowrap;color:#9ca3af;">
                    Location
                  </span>
                </div>
              </td>
            </tr>

            <tr>
              <td style="padding:4px;"></td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;"></div>
              </td>

              <td style="font-weight:bold;font-size:10px;vertical-align:top;line-height:1.22;padding:4px;">
                <div style="display:flex;align-items:center;width:100%;"></div>
              </td>
            </tr>

          </tbody>
        </table>
      </section>

    </div>
  </div>
</div>






</div>

    </div>

  




  </body>
</html>


