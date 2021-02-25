<img class="card-img-top mb-2" src="{{ asset('images/logo.png') }}" alt="">
<nav dir="rtl" class="navbar navbar-expand-sm navbar-dark shadow-sm fw-bold fs4" style="background-color: #3E2723">
    <div class="container-fluid">
        <a class="navbar-brand d-sm-block d-md-none" href="/">كلية امدرمان</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/">الرئيسية</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('about') }}">من نحن</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('programs') }}">البرامج</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('programs') }}">التقويم</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('programs') }}">الصور والفديو</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('contact') }}">تواصل معنا</span></a>
            </li>
        </ul>
    </div>
    </div>
</nav>