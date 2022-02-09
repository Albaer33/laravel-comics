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
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection