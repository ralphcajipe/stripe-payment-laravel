<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path fill='%23000000' stroke='%23FFFFFF' stroke-width='10' d='M528.1 301.3l47.3-208C578.8 78.3 567.4 64 552 64H159.2l-9.2-44.8C147.8 8 137.9 0 126.5 0H24C10.7 0 0 10.7 0 24v16c0 13.3 10.7 24 24 24h69.9l70.2 343.4C147.3 417.1 136 435.2 136 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-15.7-6.4-29.8-16.8-40h209.6C430.4 426.2 424 440.3 424 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-22.2-12.9-41.3-31.6-50.4l5.5-24.3c3.4-15-8-29.3-23.4-29.3H218.1l-6.5-32h293.1c11.2 0 20.9-7.8 23.4-18.7z'/></svg>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://assets.edlin.app/bootstrap/v5.2/bootstrap.css">

    <!-- Title -->
    <title>Stripe Laravel</title>
</head>
<body class="bg-light text-dark">
    <div class="container text-center py-5">
        <header class="mb-5">
            <h1 class="display-4 font-weight-bold">Stripe Payment</h1>
            <nav class="mt-4">
                <a href="#" class="text-dark mx-3">Home</a>
                <a href="#" class="text-dark mx-3">Products</a>
                <a href="#" class="text-dark mx-3">Support</a>
                <a href="#" class="text-dark mx-3">Contact</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="mt-5">
            <!-- Footer content can go here if needed -->
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>