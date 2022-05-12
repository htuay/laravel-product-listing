@extends('components.layout')

@section('content')

<h1>Edit Product</h1>
<div class="form-container">
    <form method="POST" action="/listing/{{$products->id}}">
        @csrf
        @method('PUT')
        <table class="form">
            <tr>
                <td class="form" id="col1">Code*: </td>
                <td class="form"><input class="inputfield" type="text" name="Code" id="codeinput" value="{{$products->code}}" disabled></td>
            </tr>
            <tr>
                <td class="form"></td>
                <td class="form display-message">Please delete and add the product again if you wish to change the code</td>
            </tr>
            <tr>
                <td class="form" id="col1">Name*: </td>
                <td class="form"><input class="inputfield" type="text" name="Name" id="nameinput" value="{{$products->name}}"></td>
            </tr>
            @error('Name')
            <tr>
                <td class="form"></td>
                <td class="form error-message">{{$message}}</td>
            </tr>
            @enderror
            <tr >
                <td class="form" id="col1">Category*: </td>
                <td class="form"><input class="inputfield" type="text" name="Category" id="catinput" value="{{$products->category}}"></td>
            </tr>
            @error('Category')
            <tr>
                <td class="form"></td>
                <td class="form error-message">{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <td class="form" id="col1">Brand: </td>
                <td class="form"><input class="inputfield" type="text" name="Brand" id="brandinput" value="{{$products->brand}}"></td>
            </tr>
            <tr>
                <td class="form" id="col1">Type: </td>
                <td class="form"><input class="inputfield" type="text" name="Type" id="typeinput" value="{{$products->type}}"></td>
            </tr>
            <tr>
                <td class="form" id="col1">Description: </td>
                <td class="form">
                    <textarea name="Description" id="Description">{{$products->description}}</textarea>
                </td>
            </tr>
            <tr>
                <td class="form" id="col1"colspan="2" style="text-align: center">
                    <input class="backbtn" id="btn" type="button" onclick="location.href='/listing/{{$products->id}}'" value="Back">
                    <input class="submitbtn" id="btn" type="submit" value="Save">
                    
                </td>
            </tr>
        </table>

        
    </form>
</div>

@endsection