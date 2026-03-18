<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Donation</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .header {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 20px;
        }
        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        .content {
            background: white;
            padding: 40px 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .donation-details {
            background: #f8fafc;
            border-left: 4px solid #10b981;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e7eb;
        }
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .detail-label {
            font-weight: 600;
            color: #6b7280;
        }
        .detail-value {
            font-weight: 700;
            color: #1f2937;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-align: center;
            margin: 20px 0;
            transition: transform 0.2s;
        }
        .cta-button:hover {
            transform: translateY(-2px);
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 14px;
        }
        .social-links {
            margin: 20px 0;
        }
        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background: #f3f4f6;
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            margin: 0 5px;
            text-decoration: none;
            color: #6b7280;
            transition: all 0.2s;
        }
        .social-links a:hover {
            background: #10b981;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <div class="logo-icon">🌱</div>
            <h1 style="margin: 0; font-size: 28px; font-weight: 700;">FeedTan Charity</h1>
        </div>
        <h2 style="margin: 0; font-size: 20px; font-weight: 400; opacity: 0.9;">Growing Hope, Feeding Futures</h2>
    </div>

    <div class="content">
        <h2 style="color: #1f2937; margin-bottom: 20px;">Thank You, {{ $donorName }}!</h2>
        
        <p style="font-size: 16px; margin-bottom: 20px;">
            Your generous donation to FeedTan Charity will make a real difference in the lives of those we serve. 
            Together, we're cultivating sustainable communities and providing nutritious meals to families in need.
        </p>

        <div class="donation-details">
            <h3 style="margin-top: 0; margin-bottom: 15px; color: #1f2937;">Donation Details</h3>
            
            <div class="detail-row">
                <span class="detail-label">Donation Amount</span>
                <span class="detail-value">{{ $amount }}</span>
            </div>
            
            <div class="detail-row">
                <span class="detail-label">Donation Type</span>
                <span class="detail-value">{{ $donationType }}</span>
            </div>
            
            <div class="detail-row">
                <span class="detail-label">Payment Method</span>
                <span class="detail-value">{{ $paymentMethod }}</span>
            </div>
            
            <div class="detail-row">
                <span class="detail-label">Order Reference</span>
                <span class="detail-value">{{ $orderReference }}</span>
            </div>
            
            <div class="detail-row">
                <span class="detail-label">Date</span>
                <span class="detail-value">{{ $donation->created_at->format('M j, Y, g:i A') }}</span>
            </div>
        </div>

        <p style="font-size: 16px; margin-bottom: 20px;">
            Your contribution helps us continue our mission of providing sustainable food security solutions 
            and empowering communities to grow their own food. Every donation brings us closer to a world 
            where no one has to worry about their next meal.
        </p>

        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ url('/impact') }}" class="cta-button">
                See Your Impact
            </a>
        </div>

        <h3 style="color: #1f2937; margin-bottom: 15px;">What Your Donation Supports:</h3>
        <ul style="color: #4b5563; line-height: 1.8;">
            <li>Sustainable community gardens and farms</li>
            <li>Nutritious meals for children and families</li>
            <li>Agricultural education and training programs</li>
            <li>Emergency food assistance during crises</li>
            <li>Long-term food security initiatives</li>
        </ul>

        <div style="background: #ecfdf5; border: 1px solid #10b981; border-radius: 8px; padding: 20px; margin: 20px 0;">
            <h4 style="color: #059669; margin-top: 0; margin-bottom: 10px;">Tax Deductible</h4>
            <p style="margin: 0; color: #047857;">
                FeedTan Charity is a registered nonprofit organization. Your donation may be tax-deductible 
                in your jurisdiction. Please keep this email for your records.
            </p>
        </div>
    </div>

    <div class="footer">
        <p style="margin-bottom: 10px; font-weight: 600;">Stay Connected</p>
        
        <div class="social-links">
            <a href="#" title="Facebook">f</a>
            <a href="#" title="Twitter">𝕏</a>
            <a href="#" title="Instagram">📷</a>
            <a href="#" title="LinkedIn">in</a>
        </div>

        <p style="margin-bottom: 10px;">
            <strong>FeedTan Community Microfinance Group</strong><br>
            Celebrating 10 Years of Service
        </p>

        <p style="margin-bottom: 10px;">
            Questions? Contact us at<br>
            <a href="mailto:info@feedtancmg.org" style="color: #10b981; text-decoration: none;">info@feedtancmg.org</a>
        </p>

        <p style="font-size: 12px; color: #9ca3af;">
            © 2024 FeedTan Community Microfinance Group. All rights reserved.<br>
            You received this email because you made a donation to FeedTan Charity.
        </p>
    </div>
</body>
</html>
