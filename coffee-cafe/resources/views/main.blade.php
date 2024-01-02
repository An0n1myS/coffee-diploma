
@extends('layout.app')

@section('content')


    <div class="info w-full">
        <!-- Slider main container -->
        <div class="swiper w-11/12 h-screen">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
1
                </div>
                <div class="swiper-slide">
2
                </div>
                <div class="swiper-slide">
3
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>

    <div class="">
        <!-- Slider main container -->
        <div class="swiper-products w-11/12 ">
            <!-- Additional required wrapper -->
            <div class="swiper-products-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide">
                        {{$product->name}}
                    </div>
                @endforeach
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-products-button-prev"></div>
            <div class="swiper-products-button-next"></div>

        </div>

    </div>
    <br>
    <hr>
    <br>
    <div class="">
        <!-- Slider main container -->
        <div class="swiper-new-products w-11/12 ">
            <!-- Additional required wrapper -->
            <div class="swiper-new-products-wrapper">
                @foreach($new_products as $new_product)
                    <div class="swiper-slide">
                        {{$product->name}}

                    </div>
                @endforeach
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-new-products-button-prev"></div>
            <div class="swiper-new-products-button-next"></div>

        </div>

    </div>



@endsection
