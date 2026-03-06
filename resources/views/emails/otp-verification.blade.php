<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; background-color: #f1f5f9; font-family: 'Segoe UI', Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f1f5f9; padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="560" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.06);">

                    {{-- Red accent bar --}}
                    <tr>
                        <td style="height: 5px; background: linear-gradient(90deg, #c00000, #e53e3e);"></td>
                    </tr>

                    {{-- Header --}}
                    <tr>
                        <td style="padding: 32px 40px 16px; text-align: center;">
                            <h1 style="margin: 0; font-size: 20px; font-weight: 800; color: #1e293b; letter-spacing: -0.3px;">
                                DepEd ZC Inventory System
                            </h1>
                            <p style="margin: 4px 0 0; font-size: 10px; color: #94a3b8; text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">
                                Email Verification
                            </p>
                        </td>
                    </tr>

                    {{-- Divider --}}
                    <tr>
                        <td style="padding: 0 40px;">
                            <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 0;">
                        </td>
                    </tr>

                    {{-- Body --}}
                    <tr>
                        <td style="padding: 28px 40px; text-align: center;">
                            <p style="margin: 0 0 20px; font-size: 15px; color: #475569; line-height: 1.6;">
                                Use the verification code below to complete your registration.
                            </p>

                            {{-- OTP code --}}
                            <div style="display: inline-block; padding: 16px 40px; background-color: #f8fafc; border: 2px solid #e2e8f0; border-radius: 12px; margin-bottom: 20px;">
                                <span style="font-size: 32px; font-weight: 800; color: #0f172a; letter-spacing: 8px;">
                                    {{ $otp }}
                                </span>
                            </div>

                            <p style="margin: 0; font-size: 13px; color: #94a3b8; line-height: 1.6;">
                                This code expires in 10 minutes. Do not share it with anyone.
                            </p>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="padding: 20px 40px; background-color: #f8fafc; border-top: 1px solid #e2e8f0; text-align: center;">
                            <p style="margin: 0; font-size: 11px; color: #94a3b8; font-weight: 600;">
                                Region IX — Division of Zamboanga City
                            </p>
                            <p style="margin: 4px 0 0; font-size: 10px; color: #cbd5e1;">
                                This is an automated notification. Do not reply to this email.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
