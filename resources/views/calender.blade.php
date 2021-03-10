@extends('layouts.app')

@section('content')
<div>
    @include('extra.nav')
    <div div class="row p-2 mx-2 border" style="background: #f9f9f9;">
        <h4 class="h4 text-center m-3">التقويم</h4>
        <div class="row">
            <div class="col-sm">
                <button type="button" class="btn btn-sm btn-success" data-mdb-toggle="modal" data-mdb-target="#addEvent">
                  اضف حث جديد
                </button>
            </div>
        </div>
        <div id='calendar'></div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="addEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">إضافة حث جديد</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="event-form" action="{{ route('addEvent') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="">عنوان الحدث</label>
                  <input type="text" class="form-control" name="title" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">تاريخ البداية</label>
                  <input type="date" class="form-control" name="start" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">تاريخ النهاية</label>
                  <input type="date" class="form-control" name="end" placeholder="">
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="event.preventDefault();
                document.getElementById('event-form').submit();">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('stylee')
<link href='css/main.css' rel='stylesheet' />
<script src='js/main.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'listDay,listWeek'
            },

            views: {
                listDay: {
                    buttonText: 'list day'
                },
                listWeek: {
                    buttonText: 'list week'
                }
            },

            navLinks: true, // can click day/week names to navigate views
            editable: true,

            initialView: 'dayGridMonth',
            editable: true,
        });
        calendar.render();
    });

</script>
@endsection
