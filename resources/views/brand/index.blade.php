@extends('layout')

@section('content')
<table class="ui basic table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($brands as $brand)
     <tr>
        <td>{{$brand->id}}</td>
        <td>{{$brand->name}}</td>
        <td>
            <button class="ui icon button">
                <i class="edit icon"></i>
            </button>
            <button class="ui icon button">
                <i class="trash icon"></i>
            </button>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
@endsection