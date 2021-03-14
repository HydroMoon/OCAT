@extends('layouts.app')

@section('content')
@include('extra.nav')
    <div class="row"><div class="col-sm" style="overflow-x:auto;">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('courses.imgname') }}</th>
                        <th scope="col">{{ __('courses.img') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imgs as $key=>$item)
                    <tr>
                        <td>{{ ($key+1) }}</td>
                        <td>{{ $item->image }}</td>
                        <td>
                            <img class="img-fluid" src="{{ asset('gallery/' . $item->image) }}" alt="" style="height: 50px; width: 50px;">
                        </td>
                        <td>
                            <form action="{{ route('image.delete') }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button class="btn btn-danger" type="submit">{{ __('courses.del') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div></div>
@endsection