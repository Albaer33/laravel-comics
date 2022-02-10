@extends('layout.app')

@section('page_title')
comic 
@endsection

@section('main_content')
<section class="blue-band">
    <div class="comic-container">

        <div class="thumb-container">
            <img src="{{$comic_info['thumb']}}" alt="">
        </div>

        <div class="overview">

            <div class="text">
                <h2>{{$comic_info['title']}}</h2>

                <div class="availability">
                    <div>U.S. price: {{$comic_info['price']}}</div>
                    <div>AVAILABLE</div>
                    <div>Check availability</div>
                </div>

                <p class="description">
                    {{$comic_info['description']}}
                </p>
            </div>

            <div class="advertisement">
                ADVERTISEMENT
                <img src="{{ asset('images/adv') }}" alt="immagine pubblicità">
            </div>

        </div>

        <div class="details">
            <div class="talent">
                <h4>TALENT</h3>

                <div class="artists">
                    Art by: 
                    @foreach ($comic_info['artists'] as $artist)
                        <span>{{$artist}}, </span>
                    @endforeach
                </div>

                <div class="writers">
                    Written by:
                    @foreach ($comic_info['writers'] as $writer)
                        <span>{{$writer}}, </span>
                    @endforeach
                </div>
            </div>

            <div class="specs">
                <h4>SPECS</h3>

                <div>Series: {{$comic_info['series']}}</div>
                <div>U.S. price: {{$comic_info['price']}}</div>
                <div>On sale date: {{$comic_info['sale_date']}}</div>
            </div>
        </div>

    </div>
</section>
@endsection