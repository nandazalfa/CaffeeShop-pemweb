<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .receipt-container {
            max-width: 400px;
            background: white;
            margin: 20px auto;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 18px;
        }
        .header p {
            margin: 0;
            font-size: 12px;
            color: #555;
        }
        .details {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .details strong {
            font-weight: bold;
        }
        .divider {
            border-top: 1px dashed #ccc;
            margin: 15px 0;
        }
        .total {
            text-align: right;
            font-size: 16px;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="header">
            <h1>Nestara Coffee</h1>
            <p>Phone: (+62) 877-8266-5046</p>
        </div>
        <div class="details">
            <p><strong>Transaction ID:</strong> {{ $transaction->id }}</p>
            <p><strong>Customer Name:</strong> {{ $transaction->customer_name }}</p>
            <p><strong>Customer Phone:</strong> {{ $transaction->customer_phone }}</p>
            <p><strong>Payment Method:</strong> {{ $transaction->payment_method }}</p>
        </div>
        <div class="divider"></div>
        <div class="details">
            <p><strong>Date:</strong> {{ $transaction->created_at }}</p>
            <p class="total">Total: Rp. {{ number_format($transaction->total_amount, 2) }}</p>
        </div>
        <div class="divider"></div>
        <div class="footer">
            <p>Thank you for your purchase!</p>
            <p>Visit us again soon.</p>
        </div>
    </div>
</body>
</html>