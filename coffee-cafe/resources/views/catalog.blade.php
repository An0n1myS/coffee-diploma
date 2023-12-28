
@extends('layout.app')

@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
    </style>

    <div class="info w-full" style="background-image: url('image/sublogo.jpg')">
        <br>
        <br>
        <br>
        <h2 class="text-white text-xl text-start mt-10 w-5/6 m-auto pb-10">Coffee</h2>

    </div>
    <div class="h-screen bg-neutral-800/95 flex flex-row basis-1/3">
        <aside>
            <h2 class="text-5xl text-orange-200/70" style="font-family: 'Caveat', cursive;">Categories</h2>

            <div class="product-category flex flex-col text-2xl text-white/70">
                <button class="tab-button active" data-product="all">Всі товари</button>
                @foreach($categories as $category)
                    <button class="tab-button" data-product="{{ $category->id }}">{{ $category->name}}</button>
                @endforeach
            </div>
        </aside>
        <div class="">
            <div class="">
                <div id="all-product" class="product-container active">
                    @foreach($products as $product)
                        <div class="product-item">
                            <form action="">
                                <input type="hidden" value="{{$product->id }}">
                                <input type="hidden" value="{{ session['username'] }}">
                                <button class="addToOrder-btn">+</button>
                            </form>
                            <div class="product-item_img">
                                <img src="data:image/jpeg;base64,{{ product[4] }}" alt="{{ $product->name }}">
                            </div>
                            <div class="product-item_title">{{ $product->name }}</div>
                            <div class="product-item_price"><i>{{ $product->price }} грн.</i></div>
                            <form class="btn-more" action="/product/{{ $product->id }}">
                                <button type="submit">Детальніше</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
