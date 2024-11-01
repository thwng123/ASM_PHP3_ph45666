<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Featured Books</h2>
                </div>

                <div class="product-list" data-aos="fade-up">
                    <div class="row">

                        


                        @foreach ($featuredBooks as $featuredBook)
                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <a href="{{route('client.shop-single', $featuredBook->id)}}"><img src="{{ Storage::url($featuredBook->thumbnail) }}" alt="Books" class="product-item"></a>
                                        {{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add
                                            to
                                            Cart</button> --}}
                                    </figure>
                                    <figcaption>
                                        <h3>{{ $featuredBook->title }}</h3>
                                        <span>{{ $featuredBook->author }}</span>
                                        <div class="item-price">$ {{ $featuredBook->price }}</div>
                                    </figcaption>
                                </div>
                            </div>
                        @endforeach
                    </div><!--ft-books-slider-->
                </div><!--grid-->


            </div><!--inner-content-->
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="btn-wrap align-right">
                    <a href="#" class="btn-accent-arrow">View all products <i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>
