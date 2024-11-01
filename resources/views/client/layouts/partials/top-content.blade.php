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
                <div class="float-end" style="align-items: center; display:flex;">
                    <div class="cart ">
                        <a href="{{ route('client.cart') }}" class="cart for-buy"><i
                                class="icon icon-clipboard"></i><span>Cart</span></a>
                    </div>
                    {{-- <a href="{{ route('client.cart') }}" class="cart for-buy"><i
                            class="icon icon-clipboard"></i><span>Cart</span></a>
 --}}


                    @if (Auth::check())
                        <div class="dropdown">
                            <a class=" " href="#" role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"style="background: #f3f2ec;magrin-bottom:5px">
                                <img class="user-avatar rounded-circle" src="{{ Storage::url(Auth::user()->avatar) }}"
                                    alt="User Avatar" width="50px">
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="{{route('myOrders')}}">My Orders</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="user-account for-buy"><i
                                class="icon icon-user"></i><span>Account</span></a>
                    @endif




                    <div class="action-menu">


                        <div class="search-bar">
                            <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                <i class="icon icon-search" type="submit"></i>
                            </a>
                            <form role="search" action="{{ route('client.search') }}" method="get"
                                class="search-box">
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
