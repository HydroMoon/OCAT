@extends('layouts.app')

@section('content')
<div class="card mt-3 mb-3 px-3">
    <div class="card-header">لوحة التحكم</div>
    <div class="card-body">
      <div class="card-title">الأخبار</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-secondary" href="{{ route('posts.index') }}">الأخبار</a>
          <a class="btn btn-secondary" href="{{ route('posts.create') }}">إضافة خبر</a>
        </div>
      </ul>
      <div class="card-title">التقويم</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-secondary" href="{{ route('calender') }}">إضافة وحذف الاحداث</a>
        </div>
      </ul>
      <div class="card-title">الصور</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-secondary" href="{{ route('myMedia') }}">الصور</a>
          <a class="btn btn-secondary" href="{{ route('getMedia') }}">إضافة الصور</a>
        </div>
      </ul>
      <div class="card-title">الرسائل</div>
      <ul>
        <div class="form-group">
          <a class="btn btn-secondary" href="{{ route('message') }}">رؤية الرسائل</a>
        </div>
      </ul>
    </div>
  </div>
@endsection