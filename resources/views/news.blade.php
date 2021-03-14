@extends('layouts.app')

@section('content')
    <div class="row pr-2 pl-2 pt-2 mt-2">
        <div class="col-sm">
            <div class="card text-left">
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="card-title d-inline float-start">كل الأخبار</h3>
                    </div>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;">
                    @forelse ($posts as $post)
                    <a class="row m-1" href="{{ route('blog.single', $post->slug) }}" style="color: #4f4f4f;">
                        <img class="col-sm-4" src="{{ asset('images/' . $post->image) }}" alt="">
                        <div class="col-sm-8">
                            <h4 class="card-title news-title mt-2">{{ $post->title }}</h4>
                            <p class="text-success">&#x200E({{ date_format($post->created_at, 'd/m/Y g:i A') }})</p>
                            <p>{{ mb_substr(strip_tags($post->body, '<br>'), 0, 300) }}{{ strlen(strip_tags($post->body))
                              > 300 ? "..." : "" }}</p>
                        </div>
                    </a>
                    @if($loop->last)
                    @else
                    <hr>
                    @endif
                    @empty
                        <p>لا يوجد أخبار جديدة.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection