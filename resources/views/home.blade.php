
<!DOCTYPE html>
<html>
<head>
    <title>ModeCulture - Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #222;
        }

        /* Navigation */
        nav {
            background-color: #111;
            padding: 22px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        .logo span {
            color: #aaa;
        }

        .logo-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 2px solid white;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            margin-right: 8px;
            font-size: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #999;
            border-bottom: 1px solid white;
            padding-bottom: 5px;
        }

        /* Hero Section */
        .content {
            text-align: center;
            padding: 120px 20px;
            background-color: #e8e8e8;
        }

        .content h4 {
            letter-spacing: 5px;
            font-size: 13px;
            margin-bottom: 20px;
            color: #555;
        }

        .content h1 {
            font-size: 65px;
            letter-spacing: 8px;
            margin-bottom: 20px;
            color: #111;
        }

        .content h2 {
            font-size: 23px;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .content p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        /* Button */
        .btn {
            display: inline-block;
            margin-top: 30px;
            background-color: #111;
            color: white;
            padding: 16px 40px;
            text-decoration: none;
            letter-spacing: 2px;
            font-size: 13px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: white;
            color: black;
            border: 1px solid black;
        }

        /* Features */
        .features {
            display: flex;
            justify-content: center;
            gap: 80px;
            padding: 50px 20px;
            background-color: white;
            text-align: center;
        }

        .feature h3 {
            margin-bottom: 10px;
            font-size: 17px;
        }

        .feature p {
            color: #777;
            font-size: 13px;
        }

        .feature-icon {
            font-size: 30px;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background-color: #111;
            color: white;
            text-align: center;
            padding: 30px;
        }

        footer h3 {
            letter-spacing: 4px;
            margin-bottom: 10px;
        }

        footer p {
            color: #aaa;
            font-size: 13px;
        }

        /* Responsive */
        @media (max-width: 700px) {
            nav {
                flex-direction: column;
                gap: 20px;
                padding: 20px;
            }

            nav a {
                margin: 7px;
            }

            .content h1 {
                font-size: 38px;
                letter-spacing: 4px;
            }

            .features {
                flex-direction: column;
                gap: 35px;
            }
        }

    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>

        <div class="logo">
            <span class="logo-icon">M</span>
            MODE<span>CULTURE</span>
        </div>

        <div>
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('about') }}">ABOUT US</a>
            <a href="{{ route('products') }}">PRODUCTS</a>
            <a href="{{ route('contact') }}">CONTACT US</a>
        </div>

    </nav>

    <!-- Main Content -->
    <div class="content">

        <h4>WELCOME TO THE WORLD OF FASHION</h4>

        <h1>MODECULTURE</h1>

        <h2>WEAR YOUR STYLE. DEFINE YOUR CULTURE.</h2>

        <a href="{{ route('products') }}" class="btn">
            SHOP NOW →
        </a>

    </div>

    <!-- Features -->
    <div class="features">

        <div class="feature">
            <h3>QUALITY FASHION</h3>
        </div>

        <div class="feature">
            <h3>MODERN STYLE</h3>
        </div>

        <div class="feature">
            <h3>MADE FOR YOU</h3>
        </div>

    </div>

    <!-- Footer -->
    <footer>

        <h3>MODECULTURE</h3>

        <p>
            &copy; 2026 ModeCulture. All Rights Reserved.
        </p>

    </footer>

</body>
</html>
