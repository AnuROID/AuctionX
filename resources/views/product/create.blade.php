@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto bg-gray-900 p-6 rounded-2xl shadow">

    <h1 class="text-2xl font-bold mb-4 text-center">Sell Product</h1>

    <form method="POST" action="/sell" enctype="multipart/form-data" class="text-white">
        @csrf

        <input type="text" name="title"
               placeholder="Product Title"
               class="w-full mb-3 p-2 rounded text-white">

        <input type="file" name="image"
               placeholder="Image URL"
               class="w-full mb-3 p-2 rounded text-white">

        <input type="number" name="base_price"
               placeholder="Base Price"
               class="w-full mb-3 p-2 rounded text-white">

        <button type="submit"
            class="w-full bg-green-600 py-2 rounded">
            Sell Product
        </button>
    </form>

</div>

@endsection
