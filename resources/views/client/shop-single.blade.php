@extends('client.layouts.master')

@section('content')
    <section id="billboard">

        <div class="container">
            <div class="row">


                <div class="col-md-6 mt-3">
                    <img src="{{ Storage::url($book->thumbnail) }}" alt="Image" width="443px" height="632px"
                        class="img-fluid">
                </div>

                <div class="col-md-6 mt-3">
                    <h2 class="text-black">{{ $book->title }}</h2>
                    <p>By {{ $book->author }}</p>
                    <p class="mb-4">{{ $book->content }}</p>
                    <p><strong class="text-primary h4">${{ $book->price }}</strong></p>

                    <form action="{{ route('client.addToCart') }}" method="post">
                        @csrf
                        <div class="mb-5">
                            <input type="number" name="quantity" class="form-control w-25" value="1" min="1"
                                max="{{ $book->quantity }}" width="100px">
                        </div>
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <p>
                            <button type="submit" name="addToCart" href="cart.html" class="buy-now btn btn-sm btn-primary"
                                style="height: 60px">Add To Cart</button>

                            {{-- <a href="cart.html" class="buy-now btn btn-sm btn-primary">Buy Now</a> --}}
                        </p>

                    </form>



                </div>

            </div>
        </div>

    </section>



    @include('client.components.featured-book')

    <section id="special-offer" class="bookshelf pb-5 mb-5">

        <div class="section-header align-center">
            <div class="title">
                <span>Grab your opportunity</span>
            </div>
            <h2 class="section-title">Related Books</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="inner-content">
                    <div class="product-list" data-aos="fade-up">
                        <div class="grid product-grid">


                            @foreach ($relatedBooks as $book)
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="{{ Storage::url($book->thumbnail) }}" alt="Books" class="product-item">
                                        <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                            Cart</button>
                                    </figure>
                                    <figcaption>
                                        <h3>{{ $book->title }}</h3>
                                        <span>{{ $book->author }}</span>
                                        <div class="item-price">$ {{ $book->price }}</div>
                                    </figcaption>
                                </div>
                            @endforeach
                        </div><!--grid-->
                    </div>
                </div><!--inner-content-->
            </div>
        </div>
    </section>

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
@endsection
