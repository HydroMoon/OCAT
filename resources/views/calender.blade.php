@extends('layouts.app')

@section('content')
    <div>
        @include('extra.nav')
        <div div class="row p-2 mx-2 border" style="background: #f9f9f9;">
          <h4 class="h4 text-center m-3">التقويم</h4>
          <div id='calendar'></div>
        </div>
          
    </div>
@endsection