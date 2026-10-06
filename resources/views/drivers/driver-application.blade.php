
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
    <div style="min-height: 100vh; background-color: #bdbdbd; font-family: 'Tinos';">
   
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:297mm;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <p style="font-size:12px;text-align:right;">
    <i>page 1</i>
  </p>

  <div style="text-align:center;">

    <h3 style="margin-bottom:10px;font-family:'Tinos',serif;font-size:17.4px;font-weight:bold;letter-spacing:0.2px;color:#133B63;">
      DOT COMPLIANCE SOLUTIONS LLC
    </h3>

    <h1 style="margin:0;color:#133B63;font-family:'Tinos',serif;font-size:29.4px;font-weight:bold;line-height:1.22;letter-spacing:0.3px;">
      COMMERCIAL DRIVER
      <br>
      APPLICATION &amp; QUALIFICATION PACKET
    </h1>

    <div style="margin-bottom:10px;margin-top:14px;font-size:18px;line-height:1.3;color:#133B63;font-family:'Tinos',serif;">
      Complete Driver Application, Qualification, Onboarding &amp; Safety Policy Packet
    </div>

  </div>

  <table style="margin-top:8px;width:100%;border-collapse:collapse;font-size:14px;">
    <tbody>

      <tr>
        <td style="height:25px;width:30%;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          MOTOR CARRIER / EMPLOYER
        </td>
        <td style="height:25px;border-bottom:1px solid #aebdcc;">
          <input
            name="p1motorcarrieremployer"
            type="text"
            style="border:3px solid #000;width:100%;height:28px;padding:8px;box-sizing:border-box;"
          >
        </td>
      </tr>

      <tr>
        <td style="height:25px;border-bottom:1px solid #aebdcc;background:#e7eef5;padding:5px 7px;font-weight:bold;color:#133B63;font-family:'Tinos',serif;font-size:12px;">
          USDOT NUMBER
        </td>
        <td style="height:25px;border:1px solid #000;">
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
          <input
            name="p1applicationdate"
            type="date"
            style="border:3px solid #000;width:100%;height:28px;padding:8px;box-sizing:border-box;"
          >
        </td>
      </tr>

    </tbody>
  </table>

  <section style="margin-top:10px;text-align:center;">

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

  <section style="margin-top:12px;">

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
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Work authorization / acceptable Form I-9 documentation - as applicable
            (employee chooses acceptable documents)
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Employment Authorization Document / Work Permit - if applicable and presented
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Social Security card - if presented for I-9 or required for lawful payroll/onboarding purposes
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Current Medical Examiner's Certificate (DOT medical card), if issued / available
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Medical Examination Report MCSA-5875 (long-form medical, commonly 5 pages)
            - only if requested with driver consent; treated as confidential medical information
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
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
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Medical variance / exemption / SPE certificate - if applicable
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-family:Arial,sans-serif;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            Signed DMV / MVR / CDLIS Records Consent Form
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:center;font-size:17px;">
            <input type="checkbox">
          </td>
        </tr>

      </tbody>
    </table>

  </section>

</div>

<br />




<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <p style="font-size:12px;text-align:right;">
    <i>page 2</i>
  </p>

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
              <input type="checkbox">
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input type="checkbox">
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
              <input type="checkbox">
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input type="checkbox">
            </div>
          </td>
        </tr>

        <tr>
          <td style="color:#133B63;font-size:12px;border:1px solid #555;padding:7px 6px;vertical-align:top;line-height:1.22;">
            FMCSA Clearinghouse limited-query consent
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input type="checkbox">
            </div>
          </td>

          <td style="border:1px solid #555;padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
              <input type="checkbox">
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
              <input type="checkbox">
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
              <input type="checkbox">
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
              <input type="checkbox">
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
              <input type="checkbox">
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


<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

  <p style="font-size:12px;text-align:right;">
    <i>page 3</i>
  </p>

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

          <!-- Driver Name -->
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

          <!-- DOB -->
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

          <!-- License / State -->
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Driver License / CDL Number
              </label>

              <input
                type="text"
                value="{{$driver->currentcdllicenseno}}"
                style="box-sizing:border-box;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>

            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                State:
              </label>

              <input
                type="text"
                value="{{$driver->currentcdlstate}}"
                style="box-sizing:border-box;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>
          </tr>

          <!-- Address -->
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
                style="box-sizing:border-box;width:100%;min-width:0;height:120px;resize:vertical;border:1px solid #555;padding:8px;font-size:14px;"
              >{{$driver->currentstreet}}, {{$driver->currentcity}}, {{$driver->currentstate}}, {{$driver->currentzip}}</textarea>

            </td>
          </tr>

          <!-- Driver Signature -->
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Driver Signature
              </label>
              <img style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;" src="{{$signatureUrl}}" />
             

            </td>

            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Date:
              </label>

              <input
                type="date"
                value="{{$cleHDate}}"
                style="box-sizing:border-box;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>
          </tr>

          <!-- Employer -->
          <tr>
            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Employer / Authorized Representative
              </label>

              <input
                type="text"
                value="{{$company->owner}}"
                style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>

            <td style="border:1px solid #555;padding:8px;vertical-align:top;">

              <label style="display:block;margin-bottom:4px;font-size:12px;">
                Date:
              </label>

              <input
                type="date"
                value=""
                style="box-sizing:border-box;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
              >

            </td>
          </tr>

        </tbody>
      </table>

    </div>

  </section>

</div>
<br/>


<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <p style="font-size:12px;text-align:right;">
        <i>page 4</i>
    </p>

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

                    <!-- Full Legal Name -->
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

                    <!-- Other / Former Names -->
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Other / Former Names Used
                            </span>
                        </td>

                        <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                            <div style="display:flex;align-items:center;justify-content:center;gap:12px;">
                                <input
                                    type="text"
                                    style="box-sizing:border-box;width:100%;height:30px;border:1px solid #000;padding:8px;"
                                >
                            </div>
                        </td>
                    </tr>

                    <!-- Date of Birth -->
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

                    <!-- Current Address -->
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
                                style="box-sizing:border-box;width:100%;min-width:0;height:120px;resize:vertical;border:1px solid #555;padding:8px;font-size:14px;"
                            >{{ collect([
                                $driver->currentstreet ?? null,
                                $driver->currentcity ?? null,
                                $driver->currentstate ?? null,
                                $driver->currentzip ?? null
                            ])->filter()->implode(', ') }}</textarea>
                        </td>
                    </tr>

                    <!-- Driver License / CDL -->
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Driver License / CDL Number
                            </span>
                            <br>

                            <input
                                type="text"
                                value="{{ $driver->currentcdllicenseno ?? '' }}"
                                style="box-sizing:border-box;width:100%;height:20px;border:1px solid #000;padding:8px;"
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
                                style="box-sizing:border-box;width:100%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>
                    </tr>

                    <!-- Applicant Signature -->
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Applicant Signature
                            </span>
                            <br>

                           <img style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;" src="{{$signatureUrl}}" />
                        </td>

                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Date:
                            </span>
                            <br>

                            <input
                                type="date"
                                value="{{ $cleHDate ?? '' }}"
                                style="box-sizing:border-box;width:100%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>
                    </tr>

                    <!-- Employer / Authorized Representative -->
                    <tr>
                        <td style="border:1px solid #555;padding:7px 6px;text-align:left;font-size:11px;">
                            <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                Employer / Authorized Representative
                            </span>
                            <br>

                            <input
                                type="text"
                                value="{{ $company->owner ?? '' }}"
                                style="box-sizing:border-box;width:100%;height:40px;border:1px solid #000;padding:8px;"
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
                                style="box-sizing:border-box;width:100%;height:20px;border:1px solid #000;padding:8px;"
                            >
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </section>
</div>
<br />



<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <p style="font-size:12px;text-align:right;">
        <i>page 5</i>
    </p>

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


        <!-- SECTION A -->
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                A. COMPANY / DRIVER INFORMATION
            </div>

            <div style="margin-top:20px;">

                <!-- Row 1 -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;gap:0;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Motor Carrier / Employer Name:
                    </label>

                    <input
                        type="text"
                        value="{{ $company->cname ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                    <label style="font-weight:bold;font-size:12px;padding-left:4px;white-space:nowrap;">
                        USDOT No.:
                    </label>

                    <input
                        type="text"
                        value="{{ $company->dot ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>


                <!-- Row 2 -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;gap:0;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Designated Employer Representative (DER):
                    </label>

                    <input
                        type="text"
                        value="{{ $company->owner ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                    <label style="font-weight:bold;font-size:12px;padding-left:4px;white-space:nowrap;">
                        DER Phone / Email:
                    </label>

                    <input
                        type="text"
                        value="{{ $company->phone ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>


                <!-- Row 3 -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;gap:0;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Driver Name:
                    </label>

                    <input
                        type="text"
                        value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                    <label style="font-weight:bold;font-size:12px;padding-left:4px;white-space:nowrap;">
                        CDL No. / State:
                    </label>

                    <input
                        type="text"
                        value="{{ ($driver->currentcdllicenseno ?? '') . ' / ' . ($driver->currentcdlstate ?? '') }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>


                <!-- Row 4 -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;gap:0;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Date of Hire / Use:
                    </label>

                    <input
                        type="date"
                        name="p5dateofhire"
                        value="{{ $cleHDate ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                    <label style="font-weight:bold;font-size:12px;padding-left:4px;white-space:nowrap;">
                        Policy Effective / Revision Date:
                    </label>

                    <input
                        type="date"
                        name="p5dateofrevision"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>

            </div>

        </section>


        <!-- SECTION B -->
        <section style="margin-top:33px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                B. DRIVER DRUG &amp; ALCOHOL PROGRAM REVIEW
            </div>

            <div style="margin-top:20px;">

                <p style="margin-bottom:12px;font-size:13.4px;line-height:1.28;">
                    The driver acknowledges that the Company has explained its DOT
                    controlled-substances and alcohol testing program, including
                    testing circumstances, prohibited conduct, testing procedures,
                    consequences, Clearinghouse obligations, and driver
                    responsibilities. The driver is encouraged to ask questions
                    before signing.
                </p>


                <div style="font-size:13.4px;line-height:1.15;">

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I understand whether my position is subject to 49 CFR Part 382 and DOT testing requirements.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        Participation in the Company DOT drug and alcohol testing
                        program is required to perform covered safety-sensitive
                        functions.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I reviewed prohibited drug and alcohol conduct and the circumstances for pre-employment,
                        random, reasonable-suspicion, post-accident, return-to-duty,
                        and follow-up testing.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I understand that a refusal to test
                        is a DOT violation when the applicable rules define the
                        conduct as a refusal.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I understand the consequences of a
                        verified positive drug test, an alcohol concentration of
                        0.04 or greater, or a refusal, including removal from
                        safety-sensitive functions and the SAP/return-to-duty
                        process.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I understand that an alcohol
                        concentration of 0.02 through 0.039 requires temporary
                        removal from safety-sensitive functions as required by
                        the regulations.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I understand my obligations
                        relating to required FMCSA Drug &amp; Alcohol Clearinghouse
                        queries.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I received information about the
                        effects and consequences of alcohol misuse and
                        controlled-substances use, signs and symptoms, and
                        intervention resources.
                    </label>

                    <label style="display:block;margin-bottom:7px;">
                        <input type="checkbox">
                        I understand that
                        Company-authority/non-DOT testing or discipline must be
                        identified separately from DOT requirements.
                    </label>

                </div>

            </div>

        </section>


        <!-- SECTION C -->
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <p style="font-size:12px;text-align:right;">
        <i>page 6</i>
    </p>

    <div>

        <!-- Driver / Company Signatures -->
        <section style="margin-top:4px;">

            <div style="margin-top:20px;">

                <!-- Driver Signature -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Driver signature:
                    </label>

                    @if(!empty($signature))
                        <span style="display:block;width:100%;height:40px;border:1px solid #000;box-sizing:border-box;">
                            <img
                                src="{{ $signature }}"
                                alt="Signature"
                                style="display:block;width:100%;height:40px;object-fit:contain;"
                            >
                        </span>
                    @else
                        <input
                            type="text"
                            style="box-sizing:border-box;width:100%;height:40px;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
                        >
                    @endif

                    <label style="font-weight:bold;font-size:12px;padding-left:8px;white-space:nowrap;">
                        Date:
                    </label>

                    <input
                        type="date"
                        value="{{ $cleHDate ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>


                <!-- Printed Name -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Printed Name:
                    </label>

                    <input
                        type="text"
                        value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                        style="box-sizing:border-box;width:100%;height:30px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                    <label style="font-weight:bold;font-size:12px;padding-left:8px;white-space:nowrap;">
                        CDL No. / State:
                    </label>

                    <input
                        type="text"
                        value="{{ $driver->currentcdllicenseno ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>


                <!-- Company Representative -->
                <div style="display:grid;grid-template-columns:auto 1fr auto 1fr;align-items:center;margin-bottom:25px;">

                    <label style="font-weight:bold;font-size:12px;white-space:nowrap;">
                        Company Representative:
                    </label>

                    <input
                        type="text"
                        value="{{ $company->owner ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:30px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                    <label style="font-weight:bold;font-size:12px;padding-left:8px;white-space:nowrap;">
                        Date:
                    </label>

                    <input
                        type="date"
                        value="{{ $cleHDate ?? '' }}"
                        style="box-sizing:border-box;width:100%;height:26px;border:1.5px solid #26364d;outline:none;padding:4px;"
                    >

                </div>

            </div>

        </section>


        <!-- SECTION D -->
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


        <!-- SECTION E -->
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


        <!-- SECTION F -->
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


        <!-- SECTION G -->
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                G. TESTING PROCEDURES, RESULTS &amp; CONFIDENTIALITY
            </div>

        </section>

    </div>

</div>

<br />
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">

    <p style="font-size:12px;text-align:right;">
        <i>page 7</i>
    </p>

    <div>

        <!-- G. TESTING PROCEDURES, RESULTS & CONFIDENTIALITY -->
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


        <!-- H. CONSEQUENCES -->
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


        <!-- I. CLEARINGHOUSE PROCEDURES -->
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


        <!-- J. DRIVER EDUCATION -->
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


        <!-- K. COMPANY-SPECIFIC PROVISIONS -->
        <section style="margin-top:4px;">

            <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
                K. COMPANY-SPECIFIC PROVISIONS - COMPLETE BEFORE ISSUING POLICY
            </div>

            <br><br>

            <div style="width:100%;overflow:hidden;">

                <table style="width:100%;table-layout:fixed;font-size:12px;border-collapse:collapse;">

                    <tbody style="font-weight:bold;">

                        <!-- DER Name / Title -->
                        <tr>
                            <td style="width:35%;padding:7px 6px;vertical-align:top;line-height:1.22;">
                                DER Name / Title
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    value="{{ $company->owner ?? '' }}"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                        <!-- DER Telephone / Email -->
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                DER Telephone / Email
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    value="{{ ($company->phone ?? '') . '/' . ($company->email ?? '') }}"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                        <!-- TPA / Consortium -->
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                TPA / Consortium
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7consortium"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                        <!-- MRO / Contact -->
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                MRO / Contact
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7mro"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                        <!-- CMRO / Contact -->
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                CMRO / Contact
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7cmro"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                        <!-- SAP Resource -->
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                SAP Resource / Referral Method
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7sap"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
                                >
                            </td>
                        </tr>


                        <!-- Company Disciplinary Action -->
                        <tr>
                            <td style="padding:7px 6px;vertical-align:top;line-height:1.22;">
                                Company disciplinary action beyond DOT minimum
                            </td>

                            <td colspan="2" style="padding:7px 6px;vertical-align:middle;text-align:left;font-size:17px;">
                                <input
                                    type="text"
                                    name="p7dotminimum"
                                    style="box-sizing:border-box;width:100%;border:1px solid #000;padding:4px;"
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<p style="font-size:12px;text-align:right;">
    <i>page 8</i>
</p>

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

                    <div style="display:flex;width:100%;margin-bottom:25px;">
                        <div style="width:50%;">
                            <label style="font-weight:bold;font-size:12px;">
                                Driver Printed Name:
                            </label>

                            <input
                                value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                type="text"
                                style="box-sizing:border-box;height:30px;width:60%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>

                        <div style="width:50%;text-align:right;">
                            <label style="font-weight:bold;font-size:12px;padding-left:4px;">
                                CDL No. / State:
                            </label>

                            <input
                                value="{{ ($driver->currentcdllicenseno ?? '') . '/ ' . ($driver->currentcdlstate ?? '') }}"
                                type="text"
                                style="box-sizing:border-box;height:26px;width:60%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>
                    </div>

                    <div style="display:flex;width:100%;margin-bottom:25px;">

                        <div style="width:50%;display:flex;align-items:center;">
                            <label style="font-weight:bold;font-size:12px;">
                                Driver Signature:
                            </label>

                            @if(!empty($signature))
                                <span style="width:66%;border:1px solid #000;">
                                    <img
                                        src="{{ $signature }}"
                                        alt="Signature"
                                        style="display:block;width:100%;height:40px;object-fit:contain;"
                                    >
                                </span>
                            @else
                                <input
                                    type="text"
                                    style="box-sizing:border-box;height:40px;width:66%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;"
                                >
                            @endif
                        </div>

                        <div style="width:50%;text-align:right;">
                            <label style="font-weight:bold;font-size:12px;padding-left:4px;">
                                Date:
                            </label>

                            <input
                                type="date"
                                value="{{ $cleHDate ?? '' }}"
                                style="box-sizing:border-box;height:26px;width:60%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>

                    </div>

                    <div style="display:flex;width:100%;margin-bottom:25px;">

                        <div style="width:50%;">
                            <label style="font-weight:bold;font-size:12px;">
                                Company Representative:
                            </label>

                            <input
                                value="{{ $company->owner ?? '' }}"
                                type="text"
                                style="box-sizing:border-box;height:30px;width:50%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>

                        <div style="width:50%;text-align:right;">
                            <label style="font-weight:bold;font-size:12px;padding-left:4px;">
                                Title:
                            </label>

                            <input
                                type="text"
                                value="Owner"
                                style="box-sizing:border-box;height:26px;width:60%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>

                    </div>

                    <div style="display:flex;width:100%;margin-bottom:25px;">

                        <div style="width:50%;">
                            <label style="font-weight:bold;font-size:12px;">
                                Representative Signature:
                            </label>

                            <input
                                type="text"
                                style="box-sizing:border-box;height:30px;width:50%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>

                        <div style="width:50%;text-align:right;">
                            <label style="font-weight:bold;font-size:12px;padding-left:4px;">
                                Date:
                            </label>

                            <input
                                type="date"
                                value="{{ $cleHDate ?? '' }}"
                                style="box-sizing:border-box;height:26px;width:60%;border:1.5px solid #26364d;outline:none;padding:4px;"
                            >
                        </div>

                    </div>

                    <br>

                </div>

            </section>

        </div>

    </section>

    <section style="margin-top:4px;">

        <div style="background:#1d3b61;color:#fff;font-weight:bold;text-transform:uppercase;font-size:14.7px;padding:3px 4px;">
            M. EMPLOYER DRUG & ALCOHOL COMPLIANCE CHECKLIST
        </div>

        <div style="margin-top:20px;font-size:13.4px;line-height:1.28;">

            <p style="margin-bottom:16px;">

                <input type="checkbox">
                Written Part 382 drug and alcohol policy completed with company-specific information.
                <br>

                <input type="checkbox">
                Driver received policy and educational materials.
                <br>

                <input type="checkbox">
                Signed certificate of receipt retained by employer.
                <br>

                <input type="checkbox">
                Pre-employment drug test or qualifying exception documented before first safety-sensitive function.
                <br>

                <input type="checkbox">
                Clearinghouse pre-employment query completed and driver not prohibited.
                <br>

                <input type="checkbox">
                Driver enrolled in random testing pool/consortium when required.
                <br>

                <input type="checkbox">
                Annual Clearinghouse query tracked and completed.
                <br>

                <input type="checkbox">
                Prior-employer DOT drug/alcohol information request completed when required.
                <br>

                <input type="checkbox">
                Supervisor reasonable-suspicion training documented (at least 60 minutes alcohol and 60 minutes controlled substances) for persons who make determinations.
                <br>

                <input type="checkbox">
                DOT drug/alcohol records maintained securely with appropriate access controls.
                <br>

                <input type="checkbox">
                DER and service-agent contact information current.
                <br>

                <input type="checkbox">
                Any non-DOT testing program separately documented and clearly distinguished from DOT testing.
                <br>

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

<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<p style="font-size:12px;text-align:right;">
    <i>page 9</i>
</p>

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

            <input
                value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                style="width:378px;margin-left:5px;height:24px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >

            <span style="margin-left:8px;white-space:nowrap;">
                <input
                    value="{{ $driver->socialsecurity ?? '' }}"
                    style="width:100px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
                >
            </span>

            <span style="margin-left:7px;white-space:nowrap;">
                Social Security Number
            </span>
        </div>

        <div style="display:flex;align-items:center;min-height:20px;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Date of Birth:</span>

            <input
                value="{{ $driver->dob ?? '' }}"
                style="width:190px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
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

            <input
                value="{{ $company->cname ?? '' }}"
                style="width:355px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
        </div>

        <div style="display:flex;align-items:center;margin-top:0;font-size:10.7px;">
            <span style="white-space:nowrap;">Attention:</span>

            <input
                value="{{ $company->owner ?? '' }}"
                style="width:380px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >

            <span style="margin-left:5px;white-space:nowrap;">
                Telephone:
            </span>

            <input
                type="text"
                value="{{ $company->phone ?? '' }}"
                style="width:120px;margin-left:4px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
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

            <input
                value="{{ $company->email ?? '' }}"
                style="width:285px;margin-left:5px;height:15px;border:1px solid #26364d;outline:none;box-sizing:border-box;"
            >
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

   <div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">


<p style="font-size:12px;text-align:right;">
    <i>page 10</i>
</p>

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

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>CDL Number / State / Class</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ ($driver->currentcdllicenseno ?? '') . '/ ' . ($driver->currentcdlstate ?? '') . '/ ' . ($driver->currentcdlclass ?? '') }}"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Motor Carrier Legal Name</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->cname ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>USDOT Number</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->dot ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Test Date / Start Time / End Time</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Test Location / Route</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->physicaladdress ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Power Unit Year / Make / Unit No.</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="Volvo"
                                        name="p10powerunit"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Trailer Type / Unit No.</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="Van"
                                        name="p10trailertype"
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Transmission</b>
                            </td>

                            <td style="border:1px solid #555;text-align:left;padding:0;">
                                <div style="display:flex;align-items:center;padding-left:8px;">
                                    <input
                                        name="p10transmission"
                                        value="1"
                                        type="checkbox"
                                        style="border:1px solid #000;"
                                    >
                                    &nbsp;Manual&nbsp;

                                    <input
                                        name="p10transmission"
                                        value="2"
                                        type="checkbox"
                                        style="border:1px solid #000;"
                                    >
                                    &nbsp;Automatic
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Approximate Road-Test Miles</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;padding:7px 6px;">
                                <b>Weather / Road Conditions</b>
                            </td>

                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;padding:0;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="text"
                                        style="box-sizing:border-box;height:15px;width:100%;border:1px solid #000;padding:8px;"
                                    >
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
                                <textarea style="box-sizing:border-box;width:100%;height:50px;border:1px solid #000;resize:none;outline:none;font-size:9.4px;padding:4px;"></textarea>
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
                                <textarea style="box-sizing:border-box;width:100%;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="box-sizing:border-box;width:100%;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="box-sizing:border-box;width:100%;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="box-sizing:border-box;width:100%;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
    <p style="font-size:12px;text-align:right;">
        <i>page 11</i>
    </p>


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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
    <p style="font-size:12px;text-align:right;">
        <i>page 12</i>
    </p>


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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <textarea style="width:100%;box-sizing:border-box;height:50px;border:1px solid #000;resize:none;outline:none;font-size:11px;padding:4px;"></textarea>
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
                                <input type="checkbox">
                                PASS - Driver demonstrated sufficient skill to safely operate the vehicle/equipment tested.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                                PASS WITH COACHING - Driver passed; non-critical coaching items are documented above.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                                FAIL / RETEST REQUIRED - Driver did not demonstrate sufficient skill. Driver may not be assigned based on this test until carrier requirements are satisfied.
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
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="text"
                                        value="{{ $company->owner ?? '' }}"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Title / Organization</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="text"
                                        value="{{ $company->cname ?? '' }}"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Signature</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    @if(!empty($signature))
                                        <img
                                            src="{{ $signature }}"
                                            alt="Signature"
                                            style="display:block;width:100%;height:40px;object-fit:contain;"
                                        >
                                    @else
                                        <input
                                            type="text"
                                            style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                        >
                                    @endif
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="date"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Driver Signature acknowledging results</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                @if(!empty($signature))
                                    <img
                                        src="{{ $signature }}"
                                        alt="Signature"
                                        style="display:block;width:100%;height:40px;object-fit:contain;"
                                    >
                                @else
                                    <input
                                        type="text"
                                        style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:14px;"
                                    >
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="date"
                                        value="{{ $cleHDate ?? '' }}"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
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

<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
    <p style="font-size:12px;text-align:right;">
        <i>page 13</i>
    </p>


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
            <div style="overflow-x:auto;">
                <table style="background:#e5e7eb;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Driver Full Name</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>CDL / Operator License Number</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $driver->currentcdllicenseno ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>State / Class / Endorsements</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $driver->currentcdlclass ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Motor Carrier Legal Name</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->cname ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>USDOT Number</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->dot ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Power Unit Type</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="Volvo"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Trailer(s) / Equipment Type</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="Van"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date of Road Test</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $cleHDate ?? '' }}"
                                        type="date"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:11.4px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Approximate Miles</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:11.4px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
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
            <div style="overflow-x:auto;">
                <table style="background:#e5e7eb;width:100%;table-layout:fixed;border-collapse:collapse;font-size:13.5px;">
                    <tbody>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Signature</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    @if(!empty($signature))
                                        <img
                                            src="{{ $signature }}"
                                            alt="Signature"
                                            style="display:block;width:100%;height:40px;object-fit:contain;"
                                        >
                                    @else
                                        <input
                                            type="text"
                                            style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                        >
                                    @endif
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Examiner Printed Name</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->owner ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Title / Organization</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->cname ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Business Address</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $company->physicaladdress ?? '' }}"
                                        type="text"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="border:1px solid #555;text-align:left;font-size:17px;">
                                <span style="padding:7px 6px;vertical-align:middle;font-size:12px;">
                                    <b>Date Certificate Issued</b>
                                </span>
                            </td>
                            <td style="border:1px solid #555;vertical-align:middle;text-align:left;font-size:17px;">
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <input
                                        value="{{ $cleHDate ?? '' }}"
                                        type="date"
                                        style="box-sizing:border-box;height:28px;width:100%;border:1px solid #000;padding:8px;"
                                    >
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
    <p style="font-size:12px;text-align:right;">
        <i>page 14</i>
    </p>


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
            <input
                value="{{ $company->cname ?? '' }}"
                type="text"
                style="border:1px solid #000;"
            >
            (“Prospective Employer”), Prospective Employer, its employees,
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
            <input
                value="{{ $company->cname ?? '' }}"
                type="text"
                style="border:1px solid #000;"
            >
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
                            <td style="vertical-align:top;">
                                Date:
                                <input
                                    value="{{ $cleHDate ?? '' }}"
                                    type="date"
                                    style="border:1px solid #000;"
                                >
                            </td>

                            <td style="vertical-align:top;display:flex;align-items:center;">
                                Signature:

                                @if(!empty($signature))
                                    <span style="display:inline-block;border:1px solid #000;width:100%;margin-left:4px;">
                                        <img
                                            src="{{ $signature }}"
                                            alt="Signature"
                                            style="display:block;width:100%;height:40px;object-fit:contain;"
                                        >
                                    </span>
                                @else
                                    <input
                                        type="text"
                                        style="box-sizing:border-box;height:40px;width:100%;min-width:0;border:1px solid #000;padding:8px;font-size:12px;margin-left:4px;"
                                    >
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="padding-top:8px;">
                                <input
                                    value="{{ trim(($driver->fname ?? '') . ' ' . ($driver->mname ?? '') . ' ' . ($driver->lname ?? '')) }}"
                                    type="text"
                                    style="border:1px solid #000;"
                                >
                                Name (Please Print)
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);">
    <p style="font-size:12px;text-align:right;">
        <i>page 15</i>
    </p>


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
                                <input
                                    type="text"
                                    style="border:1px solid #000;"
                                >
                            </td>

                            <td style="vertical-align:top;">
                                <span style="font-size:13.4px;">
                                    Policy Effective Date:
                                </span>
                                <input
                                    type="date"
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

<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);box-sizing:border-box;">

    <p class="pageseries cap" style="font-size:12px;text-align:right;margin:0;">
        <i>page 16</i>
    </p>

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

            <!-- B. CAMERA, DASH-CAM & SAFETY-EQUIPMENT NON-TAMPERING POLICY -->
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

            <!-- C. SEAT-BELT POLICY -->
            <section style="margin-top:12px;">
                <h2 style="margin-top:0;margin-bottom:8px;font-size:20px;font-weight:bold;line-height:1.2;color:#174875;">
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

            <!-- D. NO HAND-HELD DEVICE / DISTRACTED-DRIVING POLICY -->
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

<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);box-sizing:border-box;">

    <p class="pageseries cap" style="font-size:12px;text-align:right;margin:0;">
        <i>page 17</i>
    </p>

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

            <!-- E. VEHICLE / TRUCK ABANDONMENT & RETURN-OF-EQUIPMENT POLICY -->
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

            <!-- F. PASSENGER & PET POLICY -->
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

<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);box-sizing:border-box;">

    <p class="pageseries cap" style="font-size:12px;text-align:right;margin:0;">
        <i>page 18</i>
    </p>

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

            <!-- G. ACCIDENT, CITATION, INSPECTION & VIOLATION IMMEDIATE-REPORTING POLICY -->
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

            <!-- H. DAMAGE TO COMPANY / LEASED EQUIPMENT & PROPERTY -->
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
<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);box-sizing:border-box;">

    <p class="pageseries cap" style="font-size:12px;text-align:right;margin:0;">
        <i>page 19</i>
    </p>

    <div style="width:100%;max-width:900px;margin-left:auto;margin-right:auto;padding-left:8px;padding-right:8px;box-sizing:border-box;">

        <div style="width:100%;">

            <!-- I. VEHICLE CARE, INSPECTION, MAINTENANCE & SECURITY PROCEDURES -->
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

            <!-- J. SAFE DRIVING & GENERAL CONDUCT -->
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

            <!-- K. POLICY VIOLATIONS, INVESTIGATION & CORRECTIVE ACTION -->
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

<div style="margin-left:auto;margin-right:auto;width:100%;max-width:210mm;min-height:100vh;background:#fff;padding:17mm;box-shadow:0 2px 10px rgba(0,0,0,0.25);box-sizing:border-box;">

    <p class="pageseries cap" style="font-size:12px;text-align:right;margin:0;">
        <i>page 20</i>
    </p>

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
                                    <input type="checkbox">
                                    I received and reviewed: ELD &amp; Hours-of-Service Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Camera / Dash-Cam / Safety-Equipment Non-Tampering Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Seat-Belt Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: No Hand-Held Device / Distracted-Driving Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Vehicle / Truck Abandonment &amp; Return-of-Equipment Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Passenger &amp; Pet Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Accident, Citation, Inspection &amp; Violation Reporting Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Damage to Company / Leased Equipment &amp; Property Policy
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Vehicle Care, Inspection, Maintenance &amp; Security Procedures
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:4px 0;">
                                    <input type="checkbox">
                                    I received and reviewed: Safe Driving &amp; General Conduct
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

                                    @if(!empty($signature))
                                        <img
                                            src="{{ $signature }}"
                                            alt="Driver Signature"
                                            style="display:block;width:60%;height:40px;object-fit:contain;object-position:left center;"
                                        >
                                    @else
                                        <input
                                            style="box-sizing:border-box;width:100%;height:40px;border:1px solid #000;padding:8px;font-size:12px;"
                                            type="text"
                                        >
                                    @endif
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



    </div>

  




  </body>
</html>
