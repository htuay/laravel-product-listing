<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Pagination\Paginator;

class ListingController extends Controller
{
    //show all product
    public function index()
    {

        return view('listings.index', [
            'products' => Product::paginate(10)
        ]);
    }


    //show single product
    public function show(Product $product)
    {
        return view('listings.show', [
            'products' => $product
        ]);
    }


    //show create form
    public function create(Product $product)
    {
        return view('listings.create');
    }


    //store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate([

            'Code' => ['required', Rule::unique('products', 'code')],
            'Name'  => 'required',
            'Category'  => 'required',
            'Brand'  => 'nullable',
            'Type'  => 'nullable',
            'Description'  => 'nullable',
        ]);

        Product::create($formFields);

        return redirect('/')->with('message', 'Product added Successfully!');
    }


    //edit listing data
    public function edit(Product $product)
    {

        return view('listings.edit', ['products' => $product]);
    }


    //update listing data
    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([

            'Name'  => 'required',
            'Category'  => 'required',
            'Brand'  => 'nullable',
            'Type'  => 'nullable',
            'Description'  => 'nullable',
        ]);

        $product->update($formFields);

        return back()->with('message', 'Product updated successfully!');
    }

    //delete listing data
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/')->with('message', 'Product deleted successfully!');
    }
}
