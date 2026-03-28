<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction</title>
    @vite('resources/css/app.css')

</head>
@if(session('success'))
    <div class="fixed top-5 right-5 bg-green-600 text-white px-4 py-2 rounded">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="fixed top-5 right-5 bg-red-600 text-white px-4 py-2 rounded">
        {{ session('error') }}
    </div>
@endif
<body class="bg-gradient-to-br from-black via-gray-900 to-black text-white min-h-screen flex flex-col">
    @include('components.navbar')
    <div>
        @yield('content')
    </div>

</body>
</html>
