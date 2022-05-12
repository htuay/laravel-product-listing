@extends('components.layout')

@section('content')

    <h1>Products</h1>

    @unless(count($products) == 0)
    <table>
        <tr>
            <th class="id">ID</th>
            <th class="code">Code</th>
            <th class="name">Name</th>
            <th class="category">Category</th>
            <th class="brand">Brand</th>
            <th class="type">Type</th>
            <th class="description">Description</th>
        </tr>
    
    @foreach ($products as $product)
        <tr>
            <td class="show">{{$product->id}}</td>
            <td class="show"><a href="/listing/{{$product->id}}">{{$product->code}}</a></td>
            <td class="show">{{$product->name}}</td>
            <td class="show">{{$product->category}}</td>
            <td class="show">{{$product->brand}}</td>
            <td class="show">{{$product->type}}</td>
            <td class="show">{{$product->description}}</td>

        </tr>
    @endforeach
    <tr>
        <td colspan="7" style=text-align:center>
        <a href="/">First</a> |
        <a href="{{$products->previousPageUrl()}}">Previous</a> |
        <a href="/?page={{$products->currentPage()}}">Current</a> |
        <a href="{{$products->nextPageUrl()}}">Next</a> |
        <a href="/?page={{$products->lastPage()}}">Last</a>
        </td>
    </tr>
    </table>   
    @else
        <p>No Listing</p>
    @endunless
@endsection
