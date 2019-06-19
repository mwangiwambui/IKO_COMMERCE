@extends('admin.layout.main')


@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">overview</h2>
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <a href="{{route('product.create')}}" style="text-decoration: none; color: white"> <i class="zmdi zmdi-plus"></i>Add item</a></button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row isotope-grid">
                            @forelse($products as $product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->category_id}}">
                                    <!-- Block2 -->
                                    <div class="block2" style="padding:10px 10px; margin-bottom:80px; ">
                                        @if($loop->last)
                                            <div class="block2-pic hov-img0 label-new" data-label="New">
                                                @else
                                                    <div class="block2-pic hov-img0">
                                                        @endif
                                                        <a href="{{route('productdetails',$product->id)}}" class="image">
                                                            <img src="{{url('uploads',$product->image)}}" width="150px" height="500px" alt="IMG-PRODUCT">
                                                        </a>

                                                    </div>

                                                    <div class="block2-txt flex-w flex-t p-t-14">
                                                        <div class="block2-txt-child1 flex-col-l ">
                                                            <a href="{{route('productdetails',$product->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                {{$product->name}}
                                                            </a>
                                                            @if($product->quantity>5)
                                                                <?php $stockLevel = 'In Stock'; ?>
                                                            @elseif($product->quantity<=5)
                                                                <?php $stockLevel = 'Limited Stock'; ?>
                                                            @else
                                                                <?php $stockLevel = 'Out of Stock'; ?>
                                                            @endif
                                                            <div>{{ $stockLevel }}</div>

                                                            <span class="stext-105 cl3">
									                            ${{$product->price}}
								                            </span>
                                                        </div>

                                                        <div class="block2-txt-child2 flex-r p-t-3">
                                                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                                <img class="icon-heart1 dis-block trans-04" src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
                                                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                    @empty
                                        <h3>No items</h3>
                                    @endforelse


                                </div>

                                <!-- Load more -->
                                <div class="flex-c-m flex-w w-full p-t-45">
                                    <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                                        Load More
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->

@endsection
