@extends('layouts.app')

@section('content')
    <div>
        @include('extra.nav')
        <div class="row pr-2 pl-2 mt-2 p-2">
            <div class="col-sm-4">
                <form action="{{ route('contactus') }}" method="post">
                    @csrf
                    <h4 class="h4">للتواصل معنا</h4>
                    <div class="form-group ps-3">
                      <label for="">الأسم</label>
                      <input type="text" class="form-control mt-1" name="name"  placeholder="">
                    </div>
                    <div class="form-group ps-3">
                      <label for="">البريد الإلكتروني</label>
                      <input type="email" class="form-control  mt-1" name="email" aria-describedby="emailHelpId" placeholder="">
                    </div>
                    <div class="form-group ps-3">
                        <label for="">النص</label>
                        <textarea class="form-control  mt-1" name="message" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary ms-3 mt-2">تواصل</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-8">
                <div class="">
                    <div class="col-lg-5 col-md-12 mb-0 mb-md-0">
                        <h4 class="mb-3">معلومات التواصل</h4>
                        <hr>
                        <p class="mb-1"><strong>العنوان:</strong> </p>
                        <p class="mb-1">العمادة: الخرطوم -السوق العربي - شرق عمارة الفيحاء بنك فيصل الإسلامي</p>
                        <p class="mb-1">الفرع: امدرمان - غرب استاد المريخ</p>
                        <hr>
                        <p class="mb-1"><strong>أرقام التواصل:</strong> </p>
                        <ul class="list-unstyled h6">
                            <li class="mb-1" dir="ltr">+249 900 326 039</li>
                            <li class="mb-1" dir="ltr">+249 925 426 241</li>
                            <li class="mb-1" dir="ltr">+249 922 257 773</li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
        <hr class="mx-5">
        <div dir="ltr" class="row pr-2 pl-2 mt-2">
            <div class="col-sm embed-responsive embed-responsive-16by9 border m-3">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15368.199473618759!2d32.46044556977539!3d15.642332700000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8d1a9d242a3b%3A0x8c10384eff248f9b!2z2YPZhNmK2Kkg2KfZhSDYr9ix2YXYp9mGINmE2YTYt9mK2LHYp9mGINmI2KfZhNiq2YPZhtmI2YTZiNis2YrYpyBfINmB2LHYuSDYp9mFINiv2LHZhdin2YY!5e0!3m2!1sen!2sus!4v1614736124894!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection