
<div class="top-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="#"><i class="icon icon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon icon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon icon-youtube-play"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon icon-behance-square"></i></a>
                        </li>
                    </ul>
                </div><!--social-links-->
            </div>
            <div class="col-md-6">
                <div class="right-element">
                    <a href="#" class="user-account for-buy"><i
                            class="icon icon-user"></i><span>Account</span></a>
                    <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
                            $)</span></a>

                    <div class="action-menu">

                        
								<div class="search-bar">
                                    <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                        <i class="icon icon-search" type="submit"></i>
                                    </a>
									<form role="search" action="{{route('client.search')}}" method="get" class="search-box">
                                        @csrf
										<input class="search-field text search-input" placeholder="Search" name="keyword"
											type="search">

                                            {{-- <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                                <i class="icon icon-search" type="submit"></i>
                                            </a> --}}
									</form>
								</div>
                    </div>

                </div><!--top-right-->
            </div>

        </div>
    </div>
</div><!--top-content-->