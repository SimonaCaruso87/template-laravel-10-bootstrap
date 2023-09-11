@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<h1>
    Homepage
</h1>

<div class="gatto"></div>

<img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt="">
@endsection
