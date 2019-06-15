<!-- Header -->
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="{{asset('images/logo2.png')}}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{route('home')}}">Home</a>

                        </li>

                        <li>
                            <a href="{{route('products')}}">Shop</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->

                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-r-25 bor6"  id="cart-wrap">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" id="cart_tag" data-notify="{{Cart::count()}}">
                            <a href="{{route('cart.index')}}">
                            <i class="zmdi zmdi-shopping-cart" id="cart_image"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex-c-m h-full p-lr-19">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('home')}}"><img src="{{asset('images/logo2.png')}}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->


        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">

            <li>
                <a href="{{route('home')}}">Home</a>

                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="{{route('products')}}">Shop</a>
            </li>

            <li>
                <a href="{{route('cart.index')}}" class="label1 rs1" data-label1="hot">Features</a>
            </li>


        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04">
            <i class="zmdi zmdi-close"></i>
        </button>

        <form class="container-search-header">
            <div class="wrap-search-header">
                <input class="plh0" type="text" name="search" placeholder="Search...">

                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </form>
    </div>
</header>

<!-- Sidebar -->
<aside class="wrap-sidebar js-sidebar">
    <div class="s-full js-hide-sidebar"></div>

    <div class="sidebar flex-col-l p-t-22 p-b-25">
        <div class="flex-r w-full p-b-30 p-r-27">
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
            <ul class="sidebar-link w-full">
                @if(Auth::check())
                    <span class="mtext-101 cl5">
						{{Auth::user()->name}}
					</span>
                <li class="p-b-13">
                    <a href="{{route('home')}}" class="stext-102 cl2 hov-cl1 trans-04">
                        Home
                    </a>
                </li>
                <li class="p-b-13">
                    <a href="{{route('logout')}}" class="stext-102 cl2 hov-cl1 trans-04">
                        Sign Out
                    </a>
                </li>
                @else
                <li class="p-b-13">
                    <a href="{{route('login')}}" class="stext-102 cl2 hov-cl1 trans-04">
                        Sign in
                    </a>
                </li>
                    <li class="p-b-13">
                        <a href="{{route('register')}}" class="stext-102 cl2 hov-cl1 trans-04">
                            Register
                        </a>
                    </li>

                @endif

            </ul>

            <div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						@ IkoCOMMERCE
					</span>


            </div>

            <div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						About Us
					</span>

            </div>
        </div>
    </div>
</aside>

        ,
