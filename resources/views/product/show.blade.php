@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-gray-900 p-6 rounded-2xl shadow">

    <img
        src="{{ $product->image ? asset('storage/'.$product->image):'https://via.placeholder.com/200'}}"
        class="w-full h-60 object-cover rounded-xl mb-4"
    >


    <h1 class="text-2xl font-bold">
        {{ $product->title }}
    </h1>

    <p class="mt-2 text-gray-400">
        Base Price: ₹{{ $product->base_price }}
    </p>

    <p class="text-green-400 font-semibold mt-2">
        Current Bid:
        ₹{{ $product->bids->max('bid_amount') ?? $product->base_price }}
    </p>

    <!-- BID FORM -->
    <form method="POST" action="/bid/{{ $product->id }}" class="mt-4">
        @csrf

        <input type="number" name="bid_amount"
               placeholder="Enter your bid"
               class="w-full p-2 rounded text-white">

        <button type="submit"
            class="w-full mt-3 bg-blue-600 py-2 rounded">
            Place Bid
        </button>
    </form>

    <!-- MESSAGES -->
    @if(session('error'))
        <p class="text-red-500 mt-2">{{ session('error') }}</p>
    @endif

    @if(session('success'))
        <p class="text-green-500 mt-2">{{ session('success') }}</p>
    @endif

</div>

@endsection
