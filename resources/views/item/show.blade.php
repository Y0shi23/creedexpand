@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">
                   <a href="/user/item/{{ $item->id }}">{{ $item->name }}</a>
               </div>

               <div class="card-body">
                   <img src="{{asset($item->photo_item)}}">
                   {{ $item->amount }}
               </div>
            </div>
        </div>
   </div>
</div>
@endsection
