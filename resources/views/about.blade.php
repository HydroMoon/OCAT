@extends('layouts.app')

@section('content')
<div dir="rtl">
    <div class="row mx-1 border" style="background: #f9f9f9;">
        <div class="col-sm-6">
            <div class="mx-2 mt-4 px-5">
                <h4 class="h4">نبذة تعريفية عن الجامعة</h4>
                <p class="mt-3">تأسست كلية أمدرمان للطيران والتكنولوجيا في عام 2019 بقرار وزاري بالرقم (212) وهي إحدى
                    مؤسسات وزارة التعليم العالي والبحث العلمي.</p>
                <p class="mt-2">تحتوي الكلية على العديد من البرامج المتاحة للطلاب للاختيار منها:</p>
                <ul class="list-unstyled ms-3 fw-bold text-muted">
                    <li>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        بكالوريوس الجمارك والتجارة الدولية
                    </li>
                    <li>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        بكالوريوس الاقتصاد والعلوم المالية
                    </li>
                    <li>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        بكالوريوس العمليات الجوية
                    </li>
                    <li>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        بكالوريوس العلوم الإدارية (محاسبة وإدارة أعمال)
                    </li>
                    <li>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        بكالوريوس تقانة المعلومات
                    </li>
                </ul>
                <hr class="mx-5">
                <h4 class="h4">الرؤية</h4>
                <p class="mt-3">الوصول الى أعلى درجات التميز العلمي والتقني واستخدامه في مجالات البحث والتدريس والتدريب
                    وتطوير المجتمع وتنميته.</p>
                <hr class="mx-5">
                <h4 class="h4">الرسالة</h4>
                <p class="mt-3">المشاركة في تحقيق التميز في المجالات الاقتصادية والاجتماعية للمجتمع السوداني بصورة عامة
                    والتميز في مجال الطيران بصورة خاصة.</p>
                <p class="mt-1">تأهيل وتخريج كادر بشري مؤهل على مستوى الدبلوم والبكالوريوس والدراسات العليا.</p>
                <hr class="mx-5">
                <h4 class="h4">الأهداف</h4>
                <p class="mt-3">ترقية وتطوير مجال الطيران في السودان.</p>
                <p class="mt-1">العمل على نشر الوعي في كافة مجالات العلوم التطبيقية والإنسانية.</p>
                <p class="mt-1">تأهيل الطالب بالمعرفة العلمية والمهارات الضرورية التي تمكنه من التميز في خدمة المجتمع في
                    كافة المجالات.</p>
                <p class="mt-1">الإسهام في رفع مستوى كفاءة الطالب في البرامج التعليمية.</p>
                <p class="mt-1">توفير بيئة تعليمية ملائمة تسهم بالارتقاء ونجاح الطالب في مجالات العلوم المختلفة.</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="media mx-2 mt-4 px-5">
                <h3 class="h3 d-inline">كلمة رئيس مجلس الأمناء</h3>
                <img class="rounded-circle img-thumbnail float-end d-inline" src="{{ asset('images/dean.jpeg') }}"
                    alt="" width="75">
                <div class="media-body ms-3 mt-2">
                    <blockquote class="blockquote border-0 p-0">
                        <p class="font-italic lead"><i class="fa fa-quote-right mx-3 text-success"></i>
                            يطيب لي مخاطبتكم في هذا اليوم بمناسبة استقبال طلابنا الجدد الذين انضموا لنا هذا العام وهم
                            بلا شك دماءً جديدة تم ضخها في أوصال هذه الكلية الفتية لمواصلة الركب مع أخوة ً لهم سابقين
                            سطروا تفوقهم وتميزهم بحروف من ذهب.
                            <br>
                            انبعثت الفكرة من شركة العسال التي تعمل في مجال التعليم والتدريب وبناء القدرات ورصيدها في
                            التدريب:
                            <ul class="list-unstyled">
                                <li>أكاديمية جلف بريدج للطيران</li>
                                <li>مركز قلف بريدج للتدريب وبناء القدرات</li>
                                <li>مركز قلف للتدريب المهن الطبية (الصيدلة - المختبرات الطبية - التمريض)</li>
                                <li>مركز قلف للتدريب المهني والتلمذة الصناعية</li>
                            </ul><br>
                            <img class="rounded-circle img-thumbnail float-start d-inline m-2"
                                src="{{ asset('images/dean2.jpg') }}" alt="" width="75">
                            المؤسس: الاستاذ حسن خلف الله
                            رائد في مجال التدريب والتعليم وفي مجال الطيران والجمارك والإدارة
                            وهو رائد في مجال التعليم الأهلي خبرة ٣٣ سنة داخلية وخارجية.
                            <br><br>
                            انبنت الكلية حسب الخبرات السابقة ونطمح في هذه المسيرة المليئة بالانجازات منذ ان كنا أكاديمية
                            والآن كلية وفي المستقبل سوف نصبح جامعة رائدة في هذه المجالات في سوق العمل على الصعيد المحلي
                            والدولي
                            <br><br>
                            التخريج:
                            خرجت اكاديمية قلف بريدج للطيران حقبة من الطلاب في مجالات العمليات الجوية والضيافة الجوية
                            ووكالات السفر وعدد الخريجين ١١ دفعة حوالي ١١٠٠ طالب بالاضافة الى عدد كبير من المتدربين في
                            مجال الجمارك والتمريض والصيدلة والمختبرات الطبية
                            <br><br>
                            كلمة شكر:
                            نشكر مجلس الأمناء والبروف طاهر الفادني عميد الكلية والاساتذة واللجان المتخصصة بالشؤون
                            العلمية المالية وممثلين البرامج وكل من وقف معنا ودعمنا في هذه المسيرة نتقدم له بالشكر
                            والعرفان

                        </p>
                        <footer class="blockquote-footer mt-3">حسن خلف الله محمود
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row p-3">
      <hr>
      <div id="carouselExampleFade" class="carousel slide border" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p class="d-block w-100">تأهيل الطالب بالمعرفة العلمية والمهارات الضرورية التي تمكنه من التميز في خدمة المجتمع في
                  كافة المجالات.</p>
            </div>
            <div class="carousel-item">
              <p class="d-block w-100">توفير بيئة تعليمية ملائمة تسهم بالارتقاء ونجاح الطالب في مجالات العلوم المختلفة.</p>
            </div>
            <div class="carousel-item">
              <p class="d-block w-100">تأهيل الطالب بالمعرفة العلمية والمهارات الضرورية التي تمكنه من التميز في خدمة المجتمع في
                كافة المجالات.</p>
            </div>
        </div>
        <button class="carousel-control-prev" data-mdb-target="#carouselExampleFade" type="button"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-mdb-target="#carouselExampleFade" type="button"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div> --}}

</div>
@endsection
