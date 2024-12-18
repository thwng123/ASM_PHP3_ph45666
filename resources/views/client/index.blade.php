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

             @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
    <section id="client-holder" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="inner-content">
                    <div class="logo-wrap">
                        <div class="grid">
                            <a href="#"><img src="/client/images/client-image1.png" alt="client"></a>
                            <a href="#"><img src="/client/images/client-image2.png" alt="client"></a>
                            <a href="#"><img src="/client/images/client-image3.png" alt="client"></a>
                            <a href="#"><img src="/client/images/client-image4.png" alt="client"></a>
                            <a href="#"><img src="/client/images/client-image5.png" alt="client"></a>
                        </div>
                    </div><!--image-holder-->
                </div>
            </div>
        </div>
    </section>

    @include('client.components.featured-book')

    <section id="best-selling" class="leaf-pattern-overlay">
        <div class="corner-pattern-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="row">

                        <div class="col-md-6">
                            <figure class="products-thumb">
                                <img src="/client/images/single-image.jpg" alt="book" class="single-image">
                            </figure>
                        </div>

                        <div class="col-md-6">
                            <div class="product-entry">
                                <h2 class="section-title divider">Best Selling Book</h2>

                                <div class="products-content">
                                    <div class="author-name">By Timbur Hood</div>
                                    <h3 class="item-title">Birds gonna be happy</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
                                        libero ipsum enim pharetra hac.</p>
                                    <div class="item-price">$ 45.00</div>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-accent-arrow">shop it now <i
                                                class="icon icon-ns-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- / row -->

                </div>

            </div>
        </div>
    </section>

    

    <section id="quotation" class="align-center pb-5 mb-5">
        <div class="inner-content">
            <h2 class="section-title divider">Quote of the day</h2>
            <blockquote data-aos="fade-up">
                <q>“The more that you read, the more things you will know. The more that you learn, the more places
                    you’ll go.”</q>
                <div class="author-name">Dr. Seuss</div>
            </blockquote>
        </div>
    </section>

    <section id="special-offer" class="bookshelf pb-5 mb-5">

        <div class="section-header align-center">
            <div class="title">
                <span>Grab your opportunity</span>
            </div>
            <h2 class="section-title">Books with offer</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="inner-content">
                    <div class="product-list" data-aos="fade-up">
                        <div class="grid product-grid">


                            @foreach ($offerBooks as $offerBook)
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="{{Storage::url($offerBook->thumbnail)}}" alt="Books" class="product-item">
                                        {{-- <button type="button" class="add-to-cart"
                                        data-product-tile="add-to-cart">Add to
                                        Cart</button> --}}
                                    </figure>
                                    <figcaption>
                                        <h3>{{ $offerBook->title }}</h3>
                                        <span>{{ $offerBook->author }}</span>
                                        <div class="item-price">$ {{ $offerBook->price }}</div>
                                    </figcaption>
                                </div>
                            @endforeach
                        </div><!--grid-->
                    </div>
                </div><!--inner-content-->
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

    <section id="latest-blog" class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Read our articles</span>
                        </div>
                        <h2 class="section-title">Latest Articles</h2>
                    </div>

                    <div class="row">

                        <div class="col-md-4">

                            <article class="column" data-aos="fade-up">

                                <figure>
                                    <a href="#" class="image-hvr-effect">
                                        <img src="/client/images/post-img1.jpg" alt="post" class="post-image">
                                    </a>
                                </figure>

                                <div class="post-item">
                                    <div class="meta-date">Mar 30, 2021</div>
                                    <h3><a href="#">Reading books always makes the moments happy</a></h3>

                                    <div class="links-element">
                                        <div class="categories">inspiration</div>
                                        <div class="social-links">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon icon-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-behance-square"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--links-element-->

                                </div>
                            </article>

                        </div>
                        <div class="col-md-4">

                            <article class="column" data-aos="fade-up" data-aos-delay="200">
                                <figure>
                                    <a href="#" class="image-hvr-effect">
                                        <img src="/client/images/post-img2.jpg" alt="post" class="post-image">
                                    </a>
                                </figure>
                                <div class="post-item">
                                    <div class="meta-date">Mar 29, 2021</div>
                                    <h3><a href="#">Reading books always makes the moments happy</a></h3>

                                    <div class="links-element">
                                        <div class="categories">inspiration</div>
                                        <div class="social-links">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon icon-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-behance-square"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--links-element-->

                                </div>
                            </article>

                        </div>
                        <div class="col-md-4">

                            <article class="column" data-aos="fade-up" data-aos-delay="400">
                                <figure>
                                    <a href="#" class="image-hvr-effect">
                                        <img src="/client/images/post-img3.jpg" alt="post" class="post-image">
                                    </a>
                                </figure>
                                <div class="post-item">
                                    <div class="meta-date">Feb 27, 2021</div>
                                    <h3><a href="#">Reading books always makes the moments happy</a></h3>

                                    <div class="links-element">
                                        <div class="categories">inspiration</div>
                                        <div class="social-links">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon icon-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-behance-square"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--links-element-->

                                </div>
                            </article>

                        </div>

                    </div>

                    <div class="row">

                        <div class="btn-wrap align-center">
                            <a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Read All
                                Articles<i class="icon icon-ns-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @vite('resources/js/voucher.js')
@endsection
