
@extends('admin.layout')

@section('content')
@include('admin.navbar')
<div class="container">
    <a href="#">Create Products</a>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>

    </tr>
    <tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>
            
                <a class="btn btn-primary" href="#"> Edit </a> |  
                  
                    <button class="btn btn-danger" type="submit"> Delete </button>
            </td>

        </tr>
        @endforeach
    </tr>
    
</table>

</div>

@endsection