@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<main>
    <div class="container-main">
        <div class="card-main">
            <div class="face face1">
                <div class="content">
                    <i class="fa-3x fa-solid fa-pencil text-center"></i>                    <h3>Design</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card-main">
            <div class="face face1">
                <div class="content">
                    <i class="fa-3x fa-solid fa-swatchbook text-center"></i>
                    <h3>Code</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card-main">
            <div class="face face1">
                <div class="content">
                    <i class="fa-3x fa-solid fa-rocket text-center"></i>                    <h3>Launch</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</main>

{{-- <h1>
    Homepage
</h1>

<div class="gatto"></div>

<img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt=""> --}}
@endsection
