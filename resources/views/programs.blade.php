@extends('layouts.app')

@section('content')
    <div class="pb-4">
        @include('extra.nav')
        <h4 class="h4 mx-2 my-3 text-muted">البرامج المتاحة في الجامعة</h4>
        <div div class="row m-1">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-mdb-toggle="collapse"
                      data-mdb-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                    برامج البكالوريوسات
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-mdb-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is hidden by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. These classes control the overall appearance, as well as the showing and
                      hiding via CSS transitions. You can modify any of this with custom CSS or
                      overriding our default variables. It's also worth noting that just about any HTML
                      can go within the <strong>.accordion-body</strong>, though the transition does limit
                      overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-mdb-toggle="collapse"
                      data-mdb-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                    برامج الدبلومات
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-mdb-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by
                      default, until the collapse plugin adds the appropriate classes that we use to
                      style each element. These classes control the overall appearance, as well as the
                      showing and hiding via CSS transitions. You can modify any of this with custom CSS
                      or overriding our default variables. It's also worth noting that just about any
                      HTML can go within the <strong>.accordion-body</strong>, though the transition does
                      limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-mdb-toggle="collapse"
                      data-mdb-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                    برامج الدراسات المستمرة
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-mdb-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. These classes control the overall appearance, as well as the showing and
                      hiding via CSS transitions. You can modify any of this with custom CSS or
                      overriding our default variables. It's also worth noting that just about any HTML
                      can go within the <strong>.accordion-body</strong>, though the transition does limit
                      overflow.
                    </div>
                  </div>
                </div>
              </div>
        </div>
          
    </div>
@endsection