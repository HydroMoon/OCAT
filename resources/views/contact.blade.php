@extends('layouts.app')

@section('content')
    <div class="py-4">
        @include('extra.nav')
        <div class="row pr-2 pl-2 mt-2">
            <div class="col-sm-4">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                      <small id="emailHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label for="">Text</label>
                      <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Info</h4>
                        <p class="card-text">help@ocat.edu.sd</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">+249 900 326 039</li>
                        <li class="list-group-item">+249 925 426 241</li>
                        <li class="list-group-item">+249 922 257 773</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pr-2 pl-2 mt-2">
            <div class="col-sm embed-responsive embed-responsive-16by9 border m-3">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.5591617888253!2d32.57237375018052!3d15.561745689143152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e91ace4634c79%3A0xee09f3e236ccf897!2sKhartoum+College+of+Applied!5e0!3m2!1sen!2s!4v1521471111218"></iframe>
            </div>
        </div>
    </div>
@endsection