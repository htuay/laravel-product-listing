@extends('components.layout')

@section('content')

<h1>
    {{$products->name}}
</h1>
<table class="form show">
    <tr>
        <td class="form" id="col1">Code: </td>
        <td class="form">{{$products->code}}</td>
    </tr>
    <tr>
        <td class="form" id="col1">Category: </td>
        <td class="form">{{$products->category}}</td>
    </tr>
    <tr>
        <td class="form" id="col1">Brand: </td>
        <td class="form">{{$products->brand}}</td>
    </tr>
    <tr>
        <td class="form" id="col1">Type: </td>
        <td class="form">{{$products->type}}</td>
    </tr>
    <tr>
        <td class="form" id="col1">Description: </td>
        <td class="form">{{$products->description}}</td>
    </tr>
    <tr>
        <td class="form" id="col1">Created At: </td>
        <td class="form">{{$products->created_at}}</td>
    </tr>
    <tr>
        <td class="form" id="col1">Last Update: </td>
        <td class="form">{{$products->updated_at}}</td>
    </tr>
    <tr>
        <td class="form" id="col1"colspan="2" style="text-align: center">
            
            <form class="delete-form" method="POST" action="/listing/{{$products->id}}">
                @csrf
                @method('DELETE')
                <input class="del-btn" id="btn" type="submit" value="Delete">
            </form>
            

            <input class="edit-btn" id="btn" type="button" onclick="location.href='{{$products->id}}/edit'" value="Edit">
        </td>
        
    </tr>
</table>

@endsection