<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$productId)
    {
         $request->validate([
            'bid_amount'=>'integer|required',
        ]);
        $product=Product::findOrFail($productId);
       $highest_bid= $product->bids()->max('bid_amount')?? $product->base_price;
        if($request->bid_amount<=$highest_bid){
            return back()->with('error','bid must be greater than current bid');

        }
        Bid::create([
            'product_id'=>$product->id,
            'user_id'=>auth()->id(),
            'bid_amount'=>$request->bid_amount
        ]);
        return back()->with('success','Bid palced successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
