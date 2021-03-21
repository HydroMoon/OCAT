@extends('layouts.app')

@section('content')
<div class="row p-3 mx-1 border" style="background: #f9f9f9;">
    <div class="col-sm">
        <h4 class="h4">الإدارات</h4>
        <ul class="list-unstyled ms-3 fw-bold text-muted">
            <li>الإدارة المالية</li>
            <li>إدارة العلاقات العامة</li>
            <li>إدارة الموارد البشرية</li>
            <li>إدارة الحاسوب والمعلومات</li>
            <li>إدارة التقويم الذاتي وضمان الجودة</li>
            <li>إدارة التدريب</li>
        </ul>
    </div>
    <div class="col-sm">
        <h4 class="h4">الامانات</h4>
        <ul class="list-unstyled ms-3 fw-bold text-muted">
            <li>امانة الشؤون العلمية</li>
            <li>امانة شؤون الطلاب</li>
        </ul>
    </div>
</div>
@endsection
