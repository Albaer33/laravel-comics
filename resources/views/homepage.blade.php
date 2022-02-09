@extends('layout.app')

@section('page_title')
homepage    
@endsection

@section('main_content')
<section class="bg-black">
    <div class="container">
        <div class="comics">
            @foreach ($comics_array as $comic)
                <div class="single-comic">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h4>{{$comic['series']}}</h4>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="bg-blue">
    <div class="container">
        <ul class="main-bottom">
            <li>
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </li>

            <li>
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </li>

            <li>
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </li>

            <li>
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </li>

            <li>
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </li>
        </ul>
    </div>
</section>
@endsection