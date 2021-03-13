@extends('layouts.app')

@section('content')
@include('extra.nav')
<div class="row">
    <div class="col-sm-6">
        <h4 class="h4 mt-2 ms-2">إضافة الصور</h4>
        <form action="{{ route('storeMedia') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row m-2">
                <div class="col-sm-8">
                    <label>الألبوم</label>
                    <input type="text" class="form-control" name="album">
                </div>
            </div>
            <div class="form-group row m-2">
                <div class="col-sm-8">
                    <label>الصورة</label>
                    <input class="form-control" type="file" name="img">
                </div>
            </div>
            <div class="form-group m-3">
                <button class="btn btn-primary" type="submit">إضافة</button>
            </div>
        </form>
    </div>
</div>
@endsection
