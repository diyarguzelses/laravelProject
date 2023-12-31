@extends('front.layouts.master')
@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa')}}">Anasayfa </a></li>
            <li class="active">Arama Sonucu</li>
        </ol>

        <div class="products bg-content">
            <div class="row">
                @if(count($urunler)==0)
                    <div class="col-md-12 text-center">
                        Bir Ürün Bulunamadı!
                    </div>
                @endif
                @foreach($urunler as $urun)
                    <div class="col-md-3 product">
                        <a href="{{route('urun',$urun->slug)}}">
                            <img src="http://lorempixel.com/400/400/food/1" alt="{{$urun->urun_adi}}">
                        </a>
                        <p>
                            <a href="{{route('urun',$urun->slug)}}">
                                {{$urun->urun_adi}}
                            </a>
                        </p>
                        <p class="price">{{$urun->fiyati}} Tl</p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>


@endsection
