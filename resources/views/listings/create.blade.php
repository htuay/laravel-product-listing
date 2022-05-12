@extends('components.layout')

@section('content')


<h1>Create New Product</h1>
<div class="form-container">
    <form method="POST" action="/listing">
        @csrf
        <table class="form">
            <tr>
                <td class="form" id="col1">Code*: </td>
                <td class="form"><input class="inputfield" type="text" name="Code" id="codeinput" value="{{old("Code")}}"></td>
            </tr>
            @error('Code')
            <tr>
                <td class="form"></td>
                <td class="form error-message">{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <td class="form" id="col1">Name*: </td>
                <td class="form"><input class="inputfield" type="text" name="Name" id="nameinput" value="{{old("Name")}}"></td>
            </tr>
            @error('Name')
            <tr>
                <td class="form"></td>
                <td class="form error-message">{{$message}}</td>
            </tr>
            @enderror
            <tr >
                <td class="form" id="col1">Category*: </td>
                <td class="form"><input class="inputfield" type="text" name="Category" id="catinput" value="{{old("Category")}}"></td>
            </tr>
            @error('Category')
            <tr>
                <td class="form"></td>
                <td class="form error-message">{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <td class="form" id="col1">Brand: </td>
                <td class="form"><input class="inputfield" type="text" name="Brand" id="brandinput" value="{{old("Brand")}}"></td>
            </tr>
            <tr>
                <td class="form" id="col1">Type: </td>
                <td class="form"><input class="inputfield" type="text" name="Type" id="typeinput" value="{{old("Type")}}"></td>
            </tr>
            <tr>
                <td class="form" id="col1">Description: </td>
                <td class="form"><textarea name="Description" id="Description">{{old('Description') }}</textarea></td>
            </tr>
            <tr>
                <td class="form" id="col1"colspan="2" style="text-align: center">
                    <input class="backbtn" id="btn" type="button" onclick="location.href='{{ url()->previous() }}'" value="Back">
                    <input class="submitbtn" id="btn" type="submit" value="Save">
                </td>
            </tr>
        </table>

        
    </form>
</div>


@endsection