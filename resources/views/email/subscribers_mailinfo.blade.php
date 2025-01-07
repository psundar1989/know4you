<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $details['title'] ?? 'Welcome Email' }}</title>
</head>
<body>
    {{-- <h1>Dear {{ $details['email'] ?? 'Subscriber' }},</h1> --}}
    <h1>Hello Team,</h1>
    <p>A new subscriber has joined our newsletter.</p>
    <p>We will be sending updates to the following email: <spna style="font-size: 18px;"><strong>{{ $details['email'] ?? 'your.email@example.com' }}</strong></span></p>

    {{-- <p><strong>Email:</strong> {{ $details['email'] }}</p> --}}
    <p><strong>Subscription Time:</strong> {{ now() }}</p>

    <div class="footer">
        <p>© {{ now()->year }} Know4you. All rights reserved.</p>
    </div>
    
</body>
</html>