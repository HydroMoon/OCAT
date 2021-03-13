@extends('layouts.app')

@section('content')
@include('extra.nav')
<div class="card my-3">
    <div class="card-header">{{ __('courses.messages') }}</div>
    <div class="card-body" style="overflow-x:auto;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('courses.messname') }}</th>
                    <th scope="col">{{ __('words.uemail') }}</th>
                    <th scope="col">{{ __('courses.message') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mess as $key=>$message)
                <tr>
                    <td>{{ ($key+1) }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection