<img class="card-img-top mb-2" src="{{ asset('images/logo.png') }}" alt="">
<nav class="navbar navbar-expand-sm navbar-dark shadow-sm fw-bold fs4" style="background-color: #3E2723">
    <div class="container-fluid">
        <a class="navbar-brand d-sm-block d-md-none" href="/">OCAT</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/">HOME</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('about') }}">ABOUT US</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">PROGRAMS</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('contact') }}">CONTACT <i class="fa fa-usb" aria-hidden="true"></i></span></a>
            </li>
        </ul>
        <div class="inline my-2 my-lg-0 text-white">
            <span>+249 900 326 039</span>
        </div>
    </div>
    </div>
</nav>