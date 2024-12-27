<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} - Shop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f9f9f9;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }
            h1 {
                text-align: center;
                margin-bottom: 30px;
                color: #333;
            }
            .products {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
            }
            .product-card {
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                overflow: hidden;
                width: calc(33.333% - 20px);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
                text-align: center;
            }
            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            }
            .product-card img {
                width: 100%;
                height: auto;
            }
            .product-card h3 {
                margin: 15px 0;
                font-size: 1.2rem;
                color: #333;
            }
            .product-card p {
                color: #777;
                font-size: 0.9rem;
                margin: 10px 15px;
            }
            .product-card .price {
                color: #e91e63;
                font-weight: bold;
                margin: 10px 0;
                font-size: 1rem;
            }
            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin-bottom: 15px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 4px;
                text-decoration: none;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            .btn:hover {
                background-color: #0056b3;
            }
            @media (max-width: 768px) {
                .product-card {
                    width: calc(50% - 20px);
                }
            }
            @media (max-width: 480px) {
                .product-card {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Our Products</h1>
            <div class="products">
                <!-- Product 1 -->
                <div class="product-card">
                    <img src="https://cdn.oneesports.co.th/cdn-data/wp-content/uploads/sites/3/2020/04/fifa-online4.png" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>High-quality product for daily use.</p>
                    <div class="price">$19.99</div>
                    <a href="/checkout" class="btn">Buy Now</a> <!-- ลิงก์ไปหน้าจ่ายเงิน -->
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <img src="https://s.isanook.com/ga/0/ud/232/1162577/rov_garena_1200x720.jpg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Durable and affordable item.</p>
                    <div class="price">$29.99</div>
                    <a href="/checkout" class="btn">Buy Now</a> <!-- ลิงก์ไปหน้าจ่ายเงิน -->
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <img src="https://wstatic-prod-boc.krafton.com/common/content/news/20230509/AaEEyBgN.jpg" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>Top-notch product for professionals.</p>
                    <div class="price">$49.99</div>
                    <a href="/checkout" class="btn">Buy Now</a> <!-- ลิงก์ไปหน้าจ่ายเงิน -->
                </div>
            </div>
        </div>
    </body>
</html>
