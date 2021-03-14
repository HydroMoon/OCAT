@extends('layouts.app')

@section('content')
    @include('extra.nav')
    <div class="row mt-3">
        <div class="col-sm-3 border-left">
            <h4 class="h4 mt-2 text-muted fw-bold">البوم الصور</h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a class="link-dark" href="{{ route('gallery', 'test') }}">تخريج الدفعة 15</a></li>
                <li class="list-group-item"><a class="link-dark" href="{{ route('gallery', 'test2') }}">تخريج الدفعة 14</a></li>
            </ul>
        </div>
        <div dir="ltr" class="col-sm-9 mx-auto my-3">

            @foreach($imgs->chunk(2) as $images)
                <div class="row m-2">
                    @foreach ($images as $image)
                        <div class="col-sm">
                            <a href="{{ asset('gallery/' . $image->image ) }}" data-lightbox="lightbox"
                               data-title="My caption">
                                <img class="img-thumbnail" width="400" src="{{ asset('gallery/' . $image->image ) }}"
                                     alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('stylee')
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lightbox.js') }}" defer></script>
@endsection
