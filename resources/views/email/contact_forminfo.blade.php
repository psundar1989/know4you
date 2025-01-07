<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p><strong>First Name:</strong> {{ $contact->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $contact->last_name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>
</body>
</html>
