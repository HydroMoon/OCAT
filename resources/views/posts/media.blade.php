@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h4 class="h4 mt-2 ms-2">إضافة البوم</h4>
        <form action="{{ route('storeMediaAlbum') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row m-2">
                <div class="col-sm-8">
                    <label>الألبوم</label>
                    <input type="text" class="form-control" name="album">
                </div>
            </div>
            <div class="form-group m-3">
                <button class="btn btn-primary" type="submit">إضافة</button>
            </div>
        </form>
        <hr>
        <h4 class="h4 mt-2 ms-2">إضافة الصور</h4>
        <form action="{{ route('storeMedia') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row m-2">
                <div class="col-sm-8">
                    <label>الألبوم</label>
                    <select name="album" class="form-select">
                        @foreach ($album as $item)
                            <option value="{{ $item->album }}">{{ $item->album }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row m-2">
                <div class="col-sm-8">
                    <label>نص الصورة</label>
                    <input class="form-control" type="text" name="caption">
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
    <div class="col-sm-6">
        @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      </div>
</div>
@endsection
