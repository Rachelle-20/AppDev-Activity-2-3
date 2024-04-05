<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 19.99,
            'description' => 'This is the first product.'
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 29.99,
            'description' => 'This is the second product.'
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 39.99,
            'description' => 'This is the third product.'
        ]
    ];

    return response()->json($data); 
        
    }

    public function store(Request $request)
    {
       
    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {
       return response()->json($request);
    }

    public function destroy($id)
    {
        // Implement your logic to delete the product
      
    }
}
