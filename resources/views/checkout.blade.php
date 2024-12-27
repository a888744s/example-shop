<!-- resources/views/checkout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 80%;
                max-width: 1200px;
                margin: 30px auto;
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            .order-summary {
                margin-top: 20px;
            }
            .order-summary table {
                width: 100%;
                border-collapse: collapse;
            }
            .order-summary th, .order-summary td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .order-summary .total {
                font-weight: bold;
                font-size: 1.2rem;
            }
            .form-container {
                margin-top: 30px;
                display: flex;
                justify-content: space-between;
            }
            .form-container .form-section {
                width: 48%;
            }
            .form-section input,
            .form-section select {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .btn {
                padding: 10px 20px;
                background-color: #28a745;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s;
                font-size: 1rem;
            }
            .btn:hover {
                background-color: #218838;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Checkout Page</h1>
            <p>Please review your order and fill in your payment details to proceed.</p>

            <!-- Order Summary -->
            <div class="order-summary">
                <h3>Order Summary</h3>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Product 1</td>
                        <td>$19.99</td>
                        <td>1</td>
                        <td>$19.99</td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>$29.99</td>
                        <td>2</td>
                        <td>$59.98</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="total">Total</td>
                        <td class="total">$79.97</td>
                    </tr>
                </table>
            </div>

            <!-- Billing Information Form -->
            <div class="form-container">
                <!-- Left Section: Billing Details -->
                <div class="form-section">
                    <h3>Billing Information</h3>
                    <form action="/process-payment" method="POST">
                        @csrf
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                        <label for="address">Shipping Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter your shipping address" required>

                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>

                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>

                <!-- Right Section: Payment Method -->
                <div class="form-section">
                    <h3>Payment Method</h3>
                    <label for="payment-method">Choose Payment Method</label>
                    <select id="payment-method" name="payment_method" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>

                    <label for="card-number">Card Number (if Credit Card)</label>
                    <input type="text" id="card-number" name="card_number" placeholder="Enter your card number" required>

                    <label for="expiry-date">Expiry Date</label>
                    <input type="month" id="expiry-date" name="expiry_date" required>

                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="Enter your card CVV" required>

                    <button type="submit" class="btn">Complete Payment</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
