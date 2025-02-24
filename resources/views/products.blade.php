<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product['title'] }}</strong> by {{ $product['author'] }} - ${{ $product['price'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
