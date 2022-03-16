@extends('layouts.menu_composition')

@section('head')
@endsection

@section('content')
<div id="vueMenuComposition">
  <Menucomposition src_logo="{{ asset('storage/img/logo-dark.png') }}" />
</div>

@endsection

@section('script')
<script src="{{ asset('js/menu-composition.js') }}" defer></script>
@endsection