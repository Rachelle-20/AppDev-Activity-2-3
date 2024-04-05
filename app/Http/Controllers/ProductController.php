<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        'product1',
        'product2',
        'product3',
        'product4',
        'product5',
        'product6',
        'product7',
        'product8',
        'product9',
        'product10'
    ];

    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
        "message"=> "Product created successfully"
     ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return response()->json([
        "message"=> "Display product with ID: " . $id
     ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          return response()->json([
        "message"=> "Product with ID: " . $id . " was successfully"
     ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          return response()->json([
        "message"=> "Product with ID: " . $id . " was successfully deleted"
     ]);
    }
}
