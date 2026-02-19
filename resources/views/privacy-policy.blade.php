
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQSA GROUP – Legal & Privacy Policy</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('resources/css/main.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f4f7fb;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.7;
            color: #1e2b3c;
        }

        /* ===== FULL WIDTH WRAPPER ===== */
        .policy-container {
            width: 100%;
            background: #ffffff;
            box-shadow: 0 20px 40px -10px rgba(0,20,40,0.15);
        }

        /* ===== CONTENT WIDTH CONTROL ===== */
        .policy-inner {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2.5rem;
        }

        /* ===== HEADER ===== */
        .policy-header {
            background: #0a2540;
            color: white;
            padding: 3rem 0;
        }

        .policy-header h1 {
            font-size: 2.4rem;
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        .policy-header span {
            font-weight: 300;
            font-size: 1.2rem;
            color: #b6cbe5;
        }

        .effective-date {
            margin-top: 1rem;
            font-size: 0.95rem;
            color: #bdd3f0;
            background: rgba(255,255,255,0.08);
            display: inline-block;
            padding: 0.35rem 1.2rem;
            border-radius: 40px;
            border: 1px solid rgba(255,255,255,0.15);
        }

        /* ===== BODY ===== */
        .policy-body {
            padding: 3rem 0 4rem;
        }

        h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #0a2540;
            margin-top: 2.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e5ecf3;
        }

        h2:first-of-type {
            margin-top: 0;
        }

        h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f3a5f;
            margin-top: 1.6rem;
            margin-bottom: 0.6rem;
        }

        p {
            margin-bottom: 1.2rem;
            color: #2c3f55;
        }

        ul {
            margin: 0.8rem 0 1.6rem 1.6rem;
        }

        li {
            margin-bottom: 0.4rem;
        }

        .badge {
            background: #e5ecf3;
            color: #0a2540;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.2rem 0.8rem;
            border-radius: 20px;
            margin-right: 0.4rem;
        }

        a {
            color: #0a2540;
            text-decoration: none;
            border-bottom: 1px dotted #7b9bc2;
        }

        a:hover {
            border-bottom: 2px solid #0a2540;
        }

        .small-print {
            font-size: 0.9rem;
            color: #5e7180;
            background: #f9fcff;
            padding: 1rem 1.5rem;
            border-radius: 14px;
            border: 1px solid #e2eaf2;
        }

        .contact-block {
            background: #f0f5fc;
            padding: 2rem;
            border-radius: 20px;
            margin-top: 2rem;
            border-left: 5px solid #0a2540;
        }

        hr {
            border: none;
            border-top: 2px dashed #d9e2ec;
            margin: 2.5rem 0;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .policy-inner {
                padding: 0 1.3rem;
            }

            .policy-header h1 {
                font-size: 1.9rem;
            }
        }
    </style>
</head>
<body>

@include('layouts.Navbar')

<div class="policy-container">

    <!-- HEADER -->
    <div class="policy-header mt-10">
        <div class="policy-inner">
            <h1>
                AQSA GROUP <span>· ICT & Digital Solutions</span>
            </h1>
            <div class="effective-date">Effective: 19 February 2026</div>
        </div>
    </div>

    <!-- BODY -->
    <div class="policy-body">
        <div class="policy-inner">

            <h2>1. About AQSA GROUP</h2>
            <p>AQSA GROUP is an Information and Communication Technology (ICT) company providing:</p>
            <ul>
                <li>Software Development</li>
                <li>Web & Mobile Application Development</li>
                <li>Database Systems</li>
                <li>IT Infrastructure</li>
                <li>Custom Business Systems (Sarafi, Market & Management)</li>
                <li>Digital Consulting & Technology Solutions</li>
            </ul>

            <p>
                <span class="badge">Website</span>
                <a href="https://aqsagroup.af" target="_blank">https://aqsagroup.af</a>
                &nbsp;&nbsp;
                <span class="badge">Email</span>
                <a href="mailto:info@aqsagroup.af">info@aqsagroup.af</a>
                &nbsp;&nbsp;
                <span class="badge">Phone</span>
                <a href="tel:0790506000">0790506000</a>
            </p>

            <h2>2. Privacy Policy</h2>

            <h3>2.1 Information We Collect</h3>
            <ul>
                <li>Name</li>
                <li>Phone number</li>
                <li>Email address</li>
                <li>Company details</li>
                <li>Technical data (IP address, browser, device)</li>
                <li>Client business system data</li>
            </ul>

            <h3>2.2 How We Use Information</h3>
            <ul>
                <li>Provide and maintain services</li>
                <li>Process transactions</li>
                <li>Send system notifications</li>
                <li>Technical support</li>
                <li>Security & performance improvements</li>
                <li>Legal compliance</li>
            </ul>

            <p><strong>We do not sell or rent personal data.</strong></p>

            <h2>3. Data Processing for Clients</h2>
            <ul>
                <li>Clients own all business data</li>
                <li>AQSA GROUP acts only as a data processor</li>
                <li>Processing follows client instructions only</li>
            </ul>

            <h2>4. WhatsApp Data Usage Policy</h2>

            <h3>4.1 Purpose</h3>
            <ul>
                <li>Transaction confirmations</li>
                <li>Account notifications</li>
                <li>OTP verification</li>
                <li>Customer support</li>
            </ul>

            <h3>4.2 User Consent</h3>
            <ul>
                <li>User has provided phone number</li>
                <li>User has given explicit consent</li>
            </ul>

            <h3>4.3 No Spam Policy</h3>
            <ul>
                <li>No unsolicited messages</li>
                <li>No selling WhatsApp data</li>
                <li>No advertising misuse</li>
            </ul>

            <h3>4.4 Compliance</h3>
            <p>We fully comply with WhatsApp Business Platform & Meta policies.</p>

            <h2>5. Data Security</h2>
            <ul>
                <li>Secure hosting</li>
                <li>SSL / HTTPS encryption</li>
                <li>Access control</li>
                <li>Database protection</li>
            </ul>
            <div class="small-print">
                While strong security practices are applied, no system guarantees absolute security.
            </div>

            <h2>6. Cookies</h2>
            <ul>
                <li>Improve functionality</li>
                <li>Analyze performance</li>
                <li>Enhance user experience</li>
            </ul>

            <h2>7. Payments & Refunds</h2>
            <ul>
                <li>Payments are non-refundable once development starts</li>
                <li>Refunds possible before project initiation</li>
                <li>Custom work is non-refundable after milestone approval</li>
            </ul>

            <h2>8. Limitation of Liability</h2>
            <ul>
                <li>Indirect or incidental damages</li>
                <li>Third-party service failures</li>
                <li>Events beyond reasonable control</li>
            </ul>

            <h2>9. Contact Information</h2>
            <div class="contact-block">
                <p><strong>AQSA GROUP</strong></p>
                <p>🌐 <a href="https://aqsagroup.af" target="_blank">https://aqsagroup.af</a></p>
                <p>📧 <a href="mailto:info@aqsagroup.af">info@aqsagroup.af</a></p>
                <p>📞 <a href="tel:0790506000">0790506000</a></p>
                <p style="margin-top:0.8rem;"><strong>Contact Person:</strong> Besmallah Arya</p>
            </div>

            <hr>

            <p style="font-size:0.9rem; color:#5e738a;">
                AQSA GROUP – Your trusted ICT partner. This policy is reviewed regularly.
            </p>

        </div>
    </div>
</div>

@include('layouts.Footer')

</body>
</html>
