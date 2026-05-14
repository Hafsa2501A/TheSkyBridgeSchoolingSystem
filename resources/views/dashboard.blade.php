@extends('layouts.admin') {{-- Sirf extends hona chahiye --}}

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card shadow-sm p-4 text-center">
            <h3>Total Students</h3>
            <h1>{{ $totalStudents ?? 0 }}</h1>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm p-4 text-center">
            <h3>Total Teachers</h3>
            <h1>{{ $totalTeachers ?? 0 }}</h1>
        </div>
    </div>
</div>
@endsection
