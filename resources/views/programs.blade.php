@extends('layouts.app')

@section('content')
    <div>
        <div div class="row p-2 mx-2 border" style="background: #f9f9f9;">
          <h4 class="h4 mx-2 my-3 text-muted" >البرامج المتاحة في الجامعة</h4>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item border">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button fw-bold"
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
                      <strong class="text-muted">بكالوريوس الجمارك والتجارة الدولية</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يتيح للخريج العمل في مجالات الجمارك والتخليص الجمركي في السودان أو خارجه وايضاً مجالات عمل التجارة المختلفة.</li>
                      </ul>
                      <strong class="text-muted">بكالوريوس الاقتصاد والعلوم المالية</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في البنوك والقطاعات الاقتصادية داخلياً وخارجياً.</li>
                      </ul>
                      <strong class="text-muted">بكالوريويس العمليات الجوية</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في شركات الطيران المحلية والخارجية في أقسام العمليات الجوية في كل شركات الطيران.</li>
                      </ul>
                      <strong class="text-muted">بكالوريوس العلوم الإدارية (محاسبة وإدارة أعمال).</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال المحاسبة وإدارة الأعمال.</li>
                      </ul>
                      <strong class="text-muted">بكالوريوس تقانة المعلومات</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال تقانة المعلومات وأيضا شركات الطيران المختلفة.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <hr class="mx-5" style="color: #3E2723;">
                <div class="accordion-item border">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button fw-bold collapsed"
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
                      <strong class="text-muted">دبلوم الضيافة الجوية</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل شركات الطيران المختلفة في أقسام الضيافة الجوية.</li>
                      </ul>
                      <strong class="text-muted">دبلوم تقانة المعلومات</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال تقانة المعلومات وأيضا شركات الطيران المختلفة.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <hr class="mx-5" style="color: #3E2723;">
                <div class="accordion-item border">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button fw-bold collapsed"
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
                      <strong class="text-muted">الجمارك</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال التخليص الجمركي.</li>
                      </ul>
                      <strong class="text-muted">تقانة المعلومات</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال تقانة المعلومات وأيضا شركات الطيران المختلفة.</li>
                      </ul>
                      <strong class="text-muted">وكالات السفر والسياحة</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل شركات الطيران المختلفة ووكالات السفر والسياحة داخلياً وخارجياً.</li>
                      </ul>
                      <strong class="text-muted">المحاسبة الإلكترونية</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال المحاسبة.</li>
                      </ul>
                      <strong class="text-muted">التسويق والمبيعات</strong>
                      <ul class="list-unstyled ms-3 mt-2">
                        <li>يسمح للطالب الخريج العمل في كل المؤسسات الحكومية والشركات الخاصة في مجال التسويق.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
        </div>
          
    </div>
@endsection