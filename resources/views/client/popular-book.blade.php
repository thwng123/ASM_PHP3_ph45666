@extends('client.layouts.master')

@section('content')
    <section id="billboard">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <button class="prev slick-arrow">
                        <i class="icon icon-arrow-left"></i>
                    </button>

                    <div class="main-slider pattern-overlay">
                        <div class="slider-item">
                            <div class="banner-content">
                                <h2 class="banner-title">Life of the Wild</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                                    urna, a eu.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div><!--banner-content-->
                            <img src="/client/images/main-banner1.jpg" alt="banner" class="banner-image">
                        </div><!--slider-item-->

                        <div class="slider-item">
                            <div class="banner-content">
                                <h2 class="banner-title">Birds gonna be Happy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                                    urna, a eu.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div><!--banner-content-->
                            <img src="/client/images/main-banner2.jpg" alt="banner" class="banner-image">
                        </div><!--slider-item-->

                    </div><!--slider-->

                    <button class="next slick-arrow">
                        <i class="icon icon-arrow-right"></i>
                    </button>

                </div>
            </div>
        </div>

    </section>


    <section id="popular-books" class="bookshelf py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">{{ $category->name}}</h2>
                    </div>

                    

                    <div class="tab-content">

                        <div>
                            <div class="row">
             

                                @foreach ($books as $book)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <a href="{{route('client.shop-single', $book->id)}}"><img src="{{ Storage::url($book->thumbnail) }}" alt="Books" class="product-item"></a>
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $book->title }}</h3>
                                                <span>{{ $book->author }}</span>
                                                <div class="item-price">$ {{ $book->price }}</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        {{-- @foreach ($books as $book)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $book->thumbnail }}" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $book->title }}</h3>
                                                <span>{{ $book->author }}</span>
                                                <div class="item-price">$ {{ $book->price }}</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach --}}



                    </div>

                </div><!--inner-tabs-->

            </div>
        </div>
    </section>

    <section id="subscribe">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="title-element">
                                <h2 class="section-title divider">Subscribe to our newsletter</h2>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="subscribe-content" data-aos="fade-up">
                                <p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit
                                    adipiscing enim pharetra hac.</p>
                                <form id="form">
                                    <input type="text" name="email" placeholder="Enter your email addresss here">
                                    <button class="btn-subscribe">
                                        <span>send</span>
                                        <i class="icon icon-send"></i>
                                    </button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
