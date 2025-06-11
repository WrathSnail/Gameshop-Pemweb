<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header class="bg-dark text-white text-center py-4">
    <h1 class="mb-0">Checkout</h1>
</header>

<div class="container mt-4">
    <form action="process_order.php" method="post">
        <div class="form-group">
            <label for="item_name">Item Name:</label>
            <input type="text" id="item_name" name="item_name" value="Product Name" readonly class="form-control">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="$29.99" readonly class="form-control">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" required class="form-control">
        </div>

        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" placeholder="John Doe" required class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="john.doe@example.com" required class="form-control">
        </div>

        <div class="form-group">
            <label for="address">Shipping Address:</label>
            <textarea id="address" name="address" rows="4" required class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Proceed to Checkout</button>
    </form>
</div>

</body>
</html>
