<img class="card-img-top mb-2" src="{{ asset('images/logo.png') }}" alt="">
<nav dir="rtl" class="navbar navbar-expand-sm navbar-dark shadow-sm fw-bold fs4" style="background-color: #bb375f">
    <div class="container-fluid">
        <a class="navbar-brand d-sm-block d-md-none" href="/">كلية امدرمان</a>
    <button class="navbar-toggler d-lg-none d-sm-block" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
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
                <a class="nav-link" href="{{ route('news') }}">كل الأخبار</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('programs') }}">البرامج</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('calender') }}">التقويم</span></a>
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