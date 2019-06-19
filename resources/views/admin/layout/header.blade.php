<?php
?>
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{route('home')}}">
                    <img src="{{asset('images/logo2.png')}}" alt="Iko Commerce" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('category.index')}}">
                        <i class="fas fa-chart-bar"></i>Categories</a>
                </li>
                <li>
                    <a href="{{route('product.create')}}">
                        <i class="fas fa-table"></i>Products</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-trophy"></i>Orders
                        <span class="arrow"><i class="fas fa-angle-down"></i></span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: none;">
                        <li>
                            <a href="{{url('admin/orders/pending')}}">Pending Orders</a>
                        </li>
                        <li>
                            <a href="{{url('admin/orders/delivered')}}">Delivered Orders</a>
                        </li>
                        <li>
                            <a href="{{url('admin/orders')}}">All Orders</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('images/logo2.png')}}" alt="IKO ADMIN" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>
                <li>
                    <a href="{{route('category.index')}}">
                        <i class="fas fa-chart-bar"></i>Categories</a>
                </li>
                <li>
                    <a href="{{route('product.create')}}">
                        <i class="fas fa-table"></i>Products</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-trophy"></i>Orders
                        <span class="arrow"><i class="fas fa-angle-down"></i></span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: none;">
                        <li>
                            <a href="{{url('admin/orders/pending')}}">Pending Orders</a>
                        </li>
                        <li>
                            <a href="{{url('admin/orders/delivered')}}">Delivered Orders</a>
                        </li>
                        <li>
                            <a href="{{url('admin/orders')}}">All Orders</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">

                    <div class="header-button">

                        <div class="account-wrap" style="margin-left:1000px;">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{asset('images/icons/avatar-01.png')}}" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{route('home')}}">
                                            <i class="zmdi zmdi-power"></i>Customer side</a>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{route('logout')}}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->
