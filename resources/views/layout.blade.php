<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="/products">Inventory System</a>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="/products" class="{{ request()->is('products*') ? 'active' : '' }}">Products</a>
                <a href="/stocks" class="{{ request()->is('stocks*') ? 'active' : '' }}">Stocks</a>
                <a href="/transactions" class="{{ request()->is('transactions*') ? 'active' : '' }}">Transactions</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>