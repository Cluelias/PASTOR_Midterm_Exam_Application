<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #121212, #1e1e1e);
            color: white;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
            color: #f7c32e;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            font-size: 16px;
        }

        li:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.02);
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔥 Featured Products</h1>
        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>{{ $product['title'] }}</strong>  
                    <br> by {{ $product['author'] }}  
                    <br> 💰 ${{ number_format($product['price'], 2) }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
