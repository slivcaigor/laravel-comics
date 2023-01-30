@extends('layouts.main')

@section('content')
    
    <div class="container-fluid ms_main-area">
        <div class="hero-jumbo"></div>
        <div class="container position-relative mb-4">
            <h1 class="text-light pt-3 ms_title">
                <span class="fw-bold fs-1 px-5 py-2 bg-primary">CURRENT SERIES</span>
            </h1>
        </div>        
        <div class="container d-flex flex-wrap justify-content-between pt-5">
            <div class="col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class=" col-2 mb-4">
                <img src="{{ Vite::asset('resources/img/imgs.jpg') }}" alt="">
                <a href="comic">  
                    <span class="text-center text-light pt-3 pb-2">COMIC #000</span>
                </a>
            </div>
            <div class="ms_btn mb-4 d-flex justify-content-center w-100">
                <span class="text-light px-5 py-2 bg-primary fw-bold">LOAD MORE</span>
            </div>
        </div>

        <div class="bg-primary">
            <div class="ms_features container py-5 d-flex">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <h5 class="text-light">Digital Comics</h5>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <h5 class="text-light">Digital Comics</h5>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <h5 class="text-light">Digital Comics</h5>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <h5 class="text-light">Digital Comics</h5>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <h5 class="text-light">Digital Comics</h5>
                </div>
            </div>
        </div>
    </div>

@endsection