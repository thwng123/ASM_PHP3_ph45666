<header id="header">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="main-logo">
                    <a href="{{ route('client.index') }}">
                        <img src="{{ asset('client/images/main-logo.png') }}" alt="logo">
                    </a>
                </div>



            </div>

            <div class="col-md-10">

                <nav id="navbar">
                    <div class="main-menu stellarnav">
                        <ul class="menu-list">
                         
                            <li class="menu-item has-sub">
                                <a href="#pages" class="nav-link">Pages</a>

                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="index.html">About</a></li>
                                    <li><a href="index.html">Styles</a></li>
                                    <li><a href="index.html">Blog</a></li>
                                    <li><a href="index.html">Post Single</a></li>
                                    <li><a href="index.html">Our Store</a></li>
                                    <li><a href="index.html">Product Single</a></li>
                                    <li><a href="index.html">Contact</a></li>
                                    <li><a href="index.html">Thank You</a></li>
                                </ul>

                            </li>
                            
                            @foreach ($categories as $cate)
                                <li class="menu-item"><a href="{{ route('client.popular-book', $cate->id) }}"
                                        class="nav-link">{{ $cate->name }}</a></li>
                            @endforeach
                        </ul>

                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>

                    </div>
                </nav>

            </div>

        </div>
    </div>
</header>
