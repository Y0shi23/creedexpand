
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        @foreach ($items as $item)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ asset('/item/' . $item->id) }}">{{ $item->name }}</a>
                    </div>
                    <div class="card-body">
                        <img src="{{asset($item->photo_item)}}">
                        {{ $item->amount }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $items->appends(['keyword' => Request::get('keyword')])->links() }}
        </div>
    </div>
</div>
@endsection

