<!--Website Header-->
@extends('layouts.website.header')
<!--Website Header Ends-->


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="background-color: #e9ecef">
                <div class="row">
                    <div class="col-12 bg-main-secondary">
                        <div class="cate">
                            <h3 class="text-center text-dark mt-2 font-weight-bold">CATEGORY</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{--Include Sidebar Here--}}
                        @include('layouts.website.sidebar')
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-12" style="padding: 0;">
                        <nav aria-label="breadcrumb" class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Category</a></li>
                                <li class="breadcrumb-item"><a href="#">Dry Goods</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rice</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <main class="p-5">
                    <div class="row pb-3">
                        <div class="col-12">
                            <img src="{{ asset('images/Rice_Page/Parliament-Gold-Rice__37939.1566787289.jpg') }}"
                                 class="categoryBannerImage img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row">
                        @foreach($getCategory as $category)
                            @foreach($category->product as $product)
                        <div class="col-md-3 mt-5 d-flex flex-column justify-centent-center align-items-center">
                            <div class="img-div bg-product-medium p-4 rounded-top-front rounded-bottom-front mx-auto">
                                <img src="{{ asset('images/Product_pngs/Layer 25.png') }}" width="150" alt="">
                            </div>
                            <h5 class="best_price pt-3 font-weight-bold text-main-danger">{{$product->price}}</h5>
                            <h5 class="best_name py-0 text-dark">{{$product->product_name}}</h5>
                            <h5 class="best_weight py-0 text-dark">500 gm</h5>
                            <button type="button"
                                    class="btn bg-main-primary rounded-top-front rounded-bottom-front border text-white px-5 mt-2 d-block">
                                Add to Cart
                            </button>
                        </div>
                                @endforeach
                       @endforeach
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <button class="btn btn-large bg-main-primary text-white px-3 py-2">More Items
                            </button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@stop


@section('footer')
    <!--Extend Footer-->
    @extends('layouts.website.footer')
    <!--Footer Ends-->

@stop
