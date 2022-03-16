@extends('layouts.dashboard.dashboard')

@section('head')
@endsection

@section('content')
<div id="vueDishes">
    <Dishes />
</div>

@endsection

@section('script')
<script src="{{ asset('js/dashboard/dishes.js') }}" defer></script>
@endsection