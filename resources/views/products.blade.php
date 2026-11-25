
<!DOCTYPE html>
<html>
<head>
    <title>ModeCulture - Products</title>

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

        /* Header */
        .header {
            text-align: center;
            padding: 65px 20px 35px;
        }

        .header h4 {
            letter-spacing: 5px;
            color: #777;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .header h1 {
            font-size: 45px;
            letter-spacing: 6px;
            margin-bottom: 15px;
        }

        .header p {
            color: #666;
            font-size: 16px;
        }

        /* Products */
        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            padding: 40px 20px 80px;
        }

        .product-card {
            background-color: white;
            width: 280px;
            padding: 35px 25px;
            text-align: center;
            border: 1px solid #ddd;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .product-icon {
            background-color: #111;
            color: white;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 25px;
            font-size: 38px;
        }

        .product-card h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .product-card p {
            color: #777;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .price {
            font-size: 21px;
            font-weight: bold;
            color: #111;
            margin-bottom: 20px;
        }

        .category {
            display: inline-block;
            background-color: #eee;
            padding: 7px 15px;
            font-size: 11px;
            letter-spacing: 2px;
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

            .header h1 {
                font-size: 32px;
            }

            .products {
                align-items: center;
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

    <!-- Page Header -->
    <div class="header">

        <h4>EXPRESS YOUR PERSONALITY</h4>

        <h1>PRODUCTS</h1>

    </div>

    <!-- Product Cards -->
    <div class="products">

        <!-- Product 1 -->
        <div class="product-card">

            <span class="category">CASUAL WEAR</span>

            <h2>Oversized T-Shirt</h2>

            <p>
                A comfortable and trendy oversized
                shirt perfect for everyday outfits.
            </p>

            <div class="price">₱399</div>

        </div>

        <!-- Product 2 -->
        <div class="product-card">

            <span class="category">STREETWEAR</span>

            <h2>Classic Hoodie</h2>

            <p>
                A stylish and comfortable hoodie
                perfect for casual occasions.
            </p>

            <div class="price">₱799</div>

        </div>

        <!-- Product 3 -->
        <div class="product-card">

            <span class="category">MODERN STYLE</span>

            <h2>Wide-Leg Pants</h2>

            <p>
                Relaxed and fashionable pants
                for a clean and modern look.
            </p>

            <div class="price">₱599</div>

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
