@extends('layouts.dashboard.auth')

@section('head')
@endsection

@section('content')
<div id="vueAuth">
    <Auth src_logo="{{ asset('storage/img/logo.png') }}" />
</div>

@endsection

@section('script')
<script src="{{ asset('js/dashboard/auth.js') }}" defer></script>
@endsection