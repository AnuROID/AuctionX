@extends('layouts.app')

@section('content')

<h1 class="text-xl font-semibold mb-5 text-center">Auctions</h1>

@if($products->isEmpty())
    <p class="text-center text-gray-400">No products available</p>
@endif

<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 px-2">

    @foreach ($products as $product)
    <div class="bg-gray-900/70 backdrop-blur rounded-lg p-2
                hover:scale-[1.02] hover:shadow-md transition duration-200">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-1">
            <h2 class="text-sm font-semibold truncate">
                {{ $product->title }}
            </h2>

            <span class="text-[10px] text-gray-500 truncate max-w-[60px]">
                {{ $product->user->name ?? 'User' }}
            </span>
        </div>

        <!-- IMAGE -->
        <div class="overflow-hidden rounded-md">
            <img
                src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/200' }}"
                class="w-full h-28 object-cover hover:scale-105 transition"
            >
        </div>

        <!-- PRICE -->
        <div class="flex justify-between mt-2 text-[11px]">

            <div>
                <p class="text-gray-400">Base</p>
                <p class="font-medium">₹{{ $product->base_price }}</p>
            </div>

            <div class="text-right">
                <p class="text-gray-400">Bid</p>
                <p class="text-green-400 font-semibold">
                    ₹{{ $product->bids->max('bid_amount') ?? $product->base_price }}
                </p>
            </div>

        </div>

        <!-- BUTTON -->
        <a href="/products/{{ $product->id }}"
           class="block mt-2 bg-blue-600 hover:bg-blue-500 text-center py-1 rounded text-xs">
           Bid
        </a>

    </div>
    @endforeach

</div>

@endsection
