<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $details['title'] ?? 'Welcome Email' }}</title>
</head>
<body>
    <h1>Dear {{ $details['email'] ?? 'Subscriber' }},</h1>
    <p>Thank you for subscribing!</p>
    <p>We will send updates to your email: {{ $details['email'] ?? 'your.email@example.com' }}</p>

    <div class="footer">
        <p>© {{ now()->year }} Your Company Name. All rights reserved.</p>
    </div>
</body>
</html>