@extends('layouts.dashboard.dashboard')

@section('head')
@endsection

@section('content')
<div id="vueCalendar">
    <Calendar />
</div>

@endsection

@section('script')
<script src="{{ asset('js/dashboard/calendar.js') }}" defer></script>
@endsection