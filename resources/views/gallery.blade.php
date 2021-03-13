@extends('layouts.app')

@section('content')
    @include('extra.nav')
    <div class="row">
        <div class="col-sm-4">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">Active item</button>
                <button type="button" class="list-group-item list-group-item-action">Item</button>
                <button type="button" class="list-group-item list-group-item-action disabled">Disabled item</button>
            </div>
        </div>
        <div dir="ltr" class="col-sm-8 mx-auto my-3">
            @foreach ($imgs as $image)
            <a href="{{ asset('gallery/' . $image->image ) }}" data-lightbox="lightbox" data-title="My caption">
                <img class="img-thumbnail" width="100" src="{{ asset('gallery/' . $image->image ) }}" alt="">
            </a>
            @endforeach
        </div>
    </div>
    
@endsection

@section('stylee')
<link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
<script src="{{ asset('js/lightbox.js') }}" defer></script>
@endsection