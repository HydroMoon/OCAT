@extends('layouts.app')

@section('content')
<div dir="rtl" class="pb-4">
    @include('extra.nav')

    <div class="row pr-2 pl-2 pt-2 mt-2">
        <div class="col-sm">
            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="card-title d-inline float-start">آخر الأخبار</h3>
                        <a class="btn btn-sm btn-secondary d-inline float-end" href="#">رؤية المزيد</a>
                    </div>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;">
                    <div class="row m-1">
                        <img class="col-sm-4" src="https://media.npr.org/assets/img/2017/09/12/securedrop_wide-472d6f4eac0cacba984ecddd185af7ba4e07ba35-s700-c85.png" alt="">
                        <div class="col-sm-8">
                            <h4 class="card-title news-title mt-2">Doha Institute holds seminar on Academic English in a Virtual Setting!</h4>
                            <p class="text-success">February 08 - 2021</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-1">
                        <img class="col-sm-4" src="https://media.npr.org/assets/img/2017/09/12/securedrop_wide-472d6f4eac0cacba984ecddd185af7ba4e07ba35-s700-c85.png    " alt="">
                        <div class="col-sm-8">
                            <h4 class="card-title news-title mt-2">Doha Institute will hold its annual seminar on teaching and learning English language</h4>
                            <p class="text-success">February 08 - 2021</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pr-2 pl-2 mt-1">
        <div class="col-sm mt-2">
            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                </div>
            </div>
        </div>
        <div class="col-sm mt-2">
            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Calender</h4>
                    <p class="card-text">Dates and time</p>
                </div>
            </div>
        </div>
    </div>
    <div dir="ltr" class="row pr-2 pl-2 mt-1">
        <!-- Carousel wrapper -->
<div
id="carouselBasicExample"
class="carousel slide carousel-fade"
data-mdb-ride="carousel"
>
<!-- Indicators -->
<div class="carousel-indicators">
  <button
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide-to="0"
    class="active"
    aria-current="true"
    aria-label="Slide 1"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide-to="1"
    aria-label="Slide 2"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide-to="2"
    aria-label="Slide 3"
  ></button>
</div>

<!-- Inner -->
<div class="carousel-inner">
  <!-- Single item -->
  <div class="carousel-item active">
    <img
      src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
      class="d-block w-100"
      alt="..."
    />
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <img
      src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
      class="d-block w-100"
      alt="..."
    />
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <img
      src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
      class="d-block w-100"
      alt="..."
    />
    <div class="carousel-caption d-none d-md-block">
      <h5>Third slide label</h5>
      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
    </div>
  </div>
</div>
<!-- Inner -->

<!-- Controls -->
<button
  class="carousel-control-prev"
  type="button"
  data-mdb-target="#carouselBasicExample"
  data-mdb-slide="prev"
>
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button
  class="carousel-control-next"
  type="button"
  data-mdb-target="#carouselBasicExample"
  data-mdb-slide="next"
>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<!-- Carousel wrapper -->
    </div>
</div>
@endsection
