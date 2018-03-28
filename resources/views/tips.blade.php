@extends('layout')
    
@section('content')
<h1 class="my-4">คำถามที่พบบ่อย</h1>
@foreach ($knowledge as $k)
    
@endforeach
<div class="ui cards w-full">
  <div class="card" style="width:100%;">
    <div class="content">
      <em>{!!  Markdown::convertToHtml($k->text) !!}</em>
    </div>
  </div>

  
</div>
@endsection