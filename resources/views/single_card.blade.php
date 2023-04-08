@extends('app')

@section('content')
<div class="py-5 color-blue">
    <div class="box-img-cover">
        <!-- <img class="image" src="{{ Vite::asset ('resources/img/buy-comics-digital-comics.png') }}" alt=""> -->
    </div>
</div>
<div class="container d-flex main-single-comics justify-content-around">
    <div class="col-6">
        <h2 class="font-color fs-3"><strong>ACTION COMICS #1000: THE DELUXE EDITION</strong></h2>
        <div class="d-flex bg-color justify-content-around">
            <div class="d-flex py-3 justify-content-between">
                <div class="col-6"> <span class="color-title">U.S. Price:</span> $19.99</div>
                <div class="col-6 color-title">AVAILABLE</div>
            </div>
            <div>Check Availability</div>
        </div>
        <div class="description-comic">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius et ipsam, sequi esse commodi eveniet praesentium, voluptatem, quo amet ullam nemo. Quia sed voluptas nostrum quis quasi totam nobis beatae soluta saepe neque, at assumenda maiores quisquam iusto animi nihil hic impedit laborum ex. Expedita officiis ad explicabo et corporis ducimus, voluptates voluptatibus ea? Illum adipisci reprehenderit facilis nulla beatae labore tenetur rerum quasi veritatis sunt tempora quam, eaque aut quos voluptas quaerat ratione inventore fuga tempore quisquam! Nobis inventore asperiores nemo labore hic? Voluptatibus culpa aperiam ducimus facilis labore reiciendis vel? Atque beatae neque, nesciunt est similique laudantium modi.
        </div>
    </div>
    <div class="image_contenitor col-3">
        <img class="image" src="{{ Vite::asset ('resources/img/adv.jpg') }}" alt="">
    </div>
</div>
<div class="container-bg font-color">
    <div  class=" d-flex justify-content-center gap-5 container_talent_specs">
        <div class="column">
            <h4 class="py-2">Talent</h4>
            <div class="d-flex gap-5 border-y">
                <div>Art by:</div>
                <div class="text-action fw-semibold">Jose Luis Garcia-Lopez, Clay Mann, Rafael Albuquerque, Patrik Gleason, Dan Jurgens, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit. Eveniet, consectetur, Jose Luis Garcia-Lopez, Jose Luis Garcia-Lopez</div>
            </div>
            <div class="d-flex gap-5 border-y border-bottom">
                <div>Written by:</div>
                <div class="text-action fw-semibold">Jose Luis Garcia-Lopez, Lorem ipsum, dolor sit, amet consectetur, adipisicing elit. Eveniet, consectetur</div>
            </div>
        </div>
        <div class="column">
            <h4 class="py-2">Specs</h4>
            <div class="d-flex gap-5 border-y">
                <div>Series:</div>
                <div class="text-action fw-semibold">ACTION COMICS</div>
            </div>
            <div class="d-flex gap-5 border-y">
                <div>US Price:</div>
                <div>$19.99</div>
            </div>
            <div class="d-flex gap-5 border-y border-bottom">
                <div>On Sales Date:</div>
                <div>Oct 02 2018</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center border-shop fw-semibold">
        <div class="d-flex justify-content-space-center gap-5 border-icon">
            <div>DIGITAL COMICS</div>
            <div class="box-icon">
                <img class="image" src="{{ Vite::asset ('resources/img/buy-comics-digital-comics.png') }}" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-space-center gap-5 border-icon">
            <div>SHOP DC</div>
            <div class="box-icon">
                <img class="image" src="{{ Vite::asset ('resources/img/buy-comics-subscriptions.png') }}" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-space-center gap-5 border-icon">
            <div>COMIC SHOP LOCATOR</div>
            <div class="box-icon">
                <img class="image" src="{{ Vite::asset ('resources/img/buy-comics-shop-locator.png') }}" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-space-center gap-5 border-icon icon-subscription">
            <div>SUBSCRIPTION </div>
            <div class="box-icon">
                <img class="image" src="{{ Vite::asset ('resources/img/buy-comics-merchandise.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
        