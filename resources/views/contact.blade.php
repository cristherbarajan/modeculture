
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact ModeCulture</h1>

    <a href="{{ route('home') }}">home</a>
    <a href="{{ route('contact') }}">contact us</a>
    <a href="{{ route('about') }}">about us</a>
    <a href="{{ route('products') }}">products</a>

    <p>Business Name: ModeCulture</p>
    <p>Address: Punta, Caraga, Philippines</p>
    <p>Contact Number: 09XX-XXX-XXXX</p>
    <p>Email: modeculture@gmail.com</p>
    <p>Facebook: ModeCulture</p>
    <p>Instagram: @modeculture</p>

    <h2>Send Us a Message</h2>

    <form>
        <label>Customer Name:</label>
        <input type="text" placeholder="Enter your name">
        <br><br>

        <label>Email Address:</label>
        <input type="email" placeholder="Enter your email">
        <br><br>

        <label>Message:</label>
        <textarea placeholder="Write your message"></textarea>
        <br><br>

        <button type="button">Submit</button>
    </form>

</body>
</html>
