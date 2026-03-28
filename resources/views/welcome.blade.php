<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction App</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gradient-to-br from-black via-gray-900 to-black text-white min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <div class="flex justify-between items-center px-6 py-4">

        <h1 class="text-xl font-bold text-blue-500">AuctionX</h1>

        <div>
            <a href="/login" class="mr-4 hover:text-blue-400">Login</a>
            <a href="/signup" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-500 transition">Signup</a>
        </div>
    </div>

    <!-- HERO SECTION -->
    <div class="flex flex-1 flex-col justify-center items-center text-center px-4">

        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
            Bid Smart. <span class="text-blue-500">Win Big.</span>
        </h1>

        <p class="mt-4 text-gray-400 max-w-xl">
            Join the ultimate online auction platform where you can buy, sell, and compete in real-time.
        </p>

        <!-- BUTTONS -->
        <div class="mt-6 flex gap-4">
            <a href="/dashboard"
               class="bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-500 transition transform hover:scale-105">
               Explore Auctions
            </a>

            <a href="/sell"
               class="border border-gray-500 px-6 py-3 rounded-lg hover:bg-gray-800 transition">
               Sell Item
            </a>

        </div>

    </div>

    <!-- FEATURES -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 pb-10">

        <div class="bg-gray-900 p-5 rounded-xl text-center hover:scale-105 transition">
            <h2 class="text-lg font-semibold">⚡ Real-time Bidding</h2>
            <p class="text-gray-400 text-sm mt-2">Place bids instantly and compete live.</p>
        </div>

        <div class="bg-gray-900 p-5 rounded-xl text-center hover:scale-105 transition">
            <h2 class="text-lg font-semibold">💰 Sell Easily</h2>
            <p class="text-gray-400 text-sm mt-2">List your items in seconds.</p>
        </div>

        <div class="bg-gray-900 p-5 rounded-xl text-center hover:scale-105 transition">
            <h2 class="text-lg font-semibold">🔒 Secure</h2>
            <p class="text-gray-400 text-sm mt-2">Safe and reliable platform.</p>
        </div>

    </div>

</body>
</html>
