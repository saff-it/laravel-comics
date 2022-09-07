@extends('layouts.main')

@section('main-content')

<section class="ms_jumpo-img"></section>

<section class="container-fluid ms_main-sect">

    <div class="container ms_main-contents">

        @foreach ($comics as $comic)
            <div class="ms_dc-card">
                <div class="ms_card-img">
                    <img src="{{$comic -> image}}">
                </div>
                <h5>{{$comic -> title}}</h5>
            </div>
        @endforeach
    </div>

</section>

<section class="container-fluid ms_bottom-main">

    <div class="container">
        <div class="ms_bottom-main-bar">
                <div>
                    <img src="assets/img/buy-comics-subscriptions.png" alt="product img">
                </div>
                <h3> DIGITAL COMICS </h3>
        </div>
    </div>

</section>

@endsection