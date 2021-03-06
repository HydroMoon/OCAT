@extends('layouts.app')

@section('content')
<div dir="rtl" class="pb-4">

    <div class="row pr-2 pl-2 pt-2 mt-2">
        <div class="col-sm">
            <div class="card text-left shadow-sm">
                {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="card-title d-inline float-start">آخر الأخبار</h3>
                        <a class="btn btn-sm btn-secondary d-inline float-end" href="{{ route('news') }}">رؤية
                            المزيد</a>
                    </div>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;">
                    @forelse ($posts as $post)
                    <div class="row m-1">
                        <img class="col-sm-4" src="{{ asset('images/' . $post->image) }}" alt="">
                        <div class="col-sm-8">
                            <h4 class="card-title news-title mt-2"><a href="{{ route('blog.single', $post->slug) }}" style="color: #4f4f4f;">{{ $post->title }}</a></h4>
                            <p class="text-success">&#x200E({{ date_format($post->created_at, 'd/m/Y g:i A') }})</p>
                            <p>{{ mb_substr(strip_tags($post->body, '<br>'), 0, 300) }}{{ strlen(strip_tags($post->body))
                              > 300 ? "..." : "" }}</p>
                        </div>
                    </div>
                    @if($loop->last)
                    @else
                    <hr>
                    @endif
                    @empty
                        <p>لا يوجد أخبار جديدة.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="row pr-2 pl-2 mt-1">
        <div class="col-sm mt-2">
            <div class="shadow-sm p-4">
                <div class="media">
                    <h3 class="h3 d-inline">كلمة رئيس مجلس الأمناء</h3>
                    <img class="rounded-circle img-thumbnail float-end d-inline"
                        src="{{ asset('images/dean.jpeg') }}" alt=""
                        width="75">
                    <div class="media-body ms-3 mt-2">
                        <blockquote class="blockquote border-0 p-0">
                            <p class="font-italic lead"><i class="fa fa-quote-right mx-3 text-success"></i>
                                يطيب لي مخاطبتكم في هذا اليوم بمناسبة استقبال طلابنا الجدد الذين انضموا لنا هذا العام وهم بلا شك دماءً جديدة تم ضخها في أوصال هذه الكلية الفتية لمواصلة الركب مع أخوة ً لهم سابقين سطروا تفوقهم وتميزهم بحروف من ذهب.
                                <br>
                                انبعثت الفكرة من شركة العسال التي تعمل في مجال التعليم والتدريب وبناء القدرات ورصيدها في التدريب:
                                <ul class="list-unstyled">
                                    <li>أكاديمية جلف بريدج للطيران</li>
                                    <li>مركز قلف بريدج للتدريب وبناء القدرات</li>
                                    <li>مركز قلف للتدريب المهن الطبية (الصيدلة - المختبرات الطبية - التمريض)</li>
                                    <li>مركز قلف للتدريب المهني والتلمذة الصناعية</li>
                                </ul><br>
                            </p>
                            <footer class="blockquote-footer mt-3">حسن خلف الله محمود
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm mt-2">
            <div class="card shadow-sm text-left p-3">
                <div class="card-body">
                    <h4 class="card-title d-inline">التقويم - احداث الاسبوع</h4>
                    <a class="text-muted d-inline float-end" href="{{ route('calender') }}">الذهاب للتقويم</a>
                </div>
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('stylee')
<link href='css/main.css' rel='stylesheet' />
<script src='js/main.js'></script>
<script src='js/locale/ar.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

            headerToolbar: {
                left: 'listWeek',
                center: 'title',
            },
            
            locale: 'ar',

            navLinks: true, // can click day/week names to navigate views
            editable: true,

            initialView: 'listWeek',
            dayMaxEvents: true, // allow "more" link when too many events
            events: {!! $events !!}
        });
        calendar.render();
    });

</script>
@endsection