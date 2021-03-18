<!-- Footer -->
<div class="container">
    <footer class="page-footer font-small text-white pt-4 footer" style="background-color:  #bb375f">
        <!-- Footer Links -->
        <div class="container-fluid text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 my-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">{{ __('main.location') }}</h5>
                    <p>{{ __('main.loc1') }}</p>
                    <p>{{ __('main.loc2') }}</p>
                    <hr>
                    <p class="fs-5 text-white">{{ __('main.social') }}</p>
                    <a class="btn btn-lg btn-primary btn-floating" style="background-color: #3b5998" target="_blank" href="https://www.facebook.com/Omdurman-Aviation-and-Technology-104282398163623/" role="button"><i
                            class="fab fa-facebook-f me-2"></i></a>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">{{ __('main.links') }}</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/" class="nav-link text-white">{{ __('main.main') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="nav-link text-white">{{ __('main.about') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}" class="nav-link text-white">{{ __('main.news') }}</a>
                        </li>
                        <li>
                            <a href="{{ route("programs") }}" class="nav-link text-white">{{ __('main.programs') }}</a>
                        </li>
                        <li>
                            <a href="{{ route("calender") }}" class="nav-link text-white">{{ __('main.calender') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}" class="nav-link text-white">{{ __('main.gallery') }}</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright pt-3 px-3 d-flex text-center" style="background-color: #912a49">
            <p class="nav-link mx-auto">{{ __('main.copyright') }}</p>
            <a class="nav-link mx-auto text-white" href="{{ route('contact') }}" class="mx-auto">{{ __('main.contact') }}</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>
<!-- Footer -->
