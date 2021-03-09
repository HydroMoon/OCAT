@extends('layouts.app')

@section('content')
@include('extra.nav')
<div class="card mt-3 mb-3 px-3">
    <div class="card-header">لوحة التحكم</div>
    <div class="card-body">
      <div class="card-title">الأخبار</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-primary" href="{{ route('posts.index') }}">الأخبار</a>
          <a class="btn btn-primary" href="{{ route('posts.create') }}">إضافة خبر</a>
        </div>
      </ul>
      <div class="card-title">الصور والفيديو</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-primary" href="#">صورة الغلاف</a>
          <a class="btn btn-primary" href="#">الصور والفيديو</a>
        </div>
      </ul>
      <div class="card-title">الرسائل</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-primary" href="#">رؤية الرسائل</a>
        </div>
      </ul>
    </div>
  </div>
@endsection