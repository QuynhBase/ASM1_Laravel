@extends('Client.Layouts.master')

@section('content')
    <main id="content" class="wrapper layout-page">
        <section class="page-title z-index-2 position-relative">
            <div class="bg-body-secondary">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1">
                            <li class="breadcrumb-item"><a href="../index-2.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="text-center py-13">
                <div class="container">
                    <h2 class="mb-0">Sản phẩm</h2>
                </div>
            </div>
        </section>
        <section class="container container-xxl">
            <div class="tool-bar mb-11 align-items-center justify-content-between d-lg-flex">
                <div class="tool-bar-left mb-6 mb-lg-0 fs-18px">We found <span
                        class="text-body-emphasis fw-semibold">95</span> products available for you</div>
                <div class="tool-bar-right align-items-center d-flex ">
                    <ul class="list-unstyled d-flex align-items-center list-inline me-lg-7 me-0 mb-0 ">
                        <li class="list-inline-item me-7">
                            <a class="fs-32px text-body-emphasis-hovertext-body-emphasis" href="#">
                                <svg class="icon icon-squares-four">
                                    <use xlink:href="#icon-squares-four"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item me-0">
                            <a class="fs-32px text-body-emphasis-hover  text-muted" href="shop-layout-v5.html">
                                <svg class="icon icon-list">
                                    <use xlink:href="#icon-list"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-unstyled d-flex align-items-center list-inline mb-0 ms-auto">
                        <li class="list-inline-item me-0">
                            <select class="form-select" name="orderby">
                                <option selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="container container-xxl pb-16 pb-lg-18">
            <div class="row">
                
                <div class="col-lg-9 order-lg-1">
                    <div class="row gy-11">@foreach ($products as $item) 
                        <div class="col-sm-6  col-lg-4 col-xl-3">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="{{route('client.product.detail', $item->id)}}" class="hover-zoom-in d-block"
                                        title="Shield Conditioner">
                                        <img src="{{Storage::url($item->image)}}" data-src=""
                                            class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                            height="440">
                                    </a>
                                    <div class="position-absolute product-flash z-index-2 "><span
                                            class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                                    <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                            href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Quick View">
                                            <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg class="icon icon-eye-light">
                                                    <use xlink:href="#icon-eye-light"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                            href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Add To Wishlist">
                                            <svg class="icon icon-star-light">
                                                <use xlink:href="#icon-star-light"></use>
                                            </svg>
                                        </a>
                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                            href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Compare">
                                            <svg class="icon icon-arrows-left-right-light">
                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                            </svg>
                                        </a>
                                    </div><a href="#"
                                        class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Thêm vào giỏ hàng</a>
                                </figure>
                                <div class="card-body text-center p-0">
                                    <span
                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                        <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                        <ins class="text-decoration-none">{{$item->price}}</ins></span>
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset" href="{{route('client.product.detail', $item->id)}}">{{$item->name}}</a></h4>
                                    <div class="d-flex align-items-center fs-12px justify-content-center">
                                        <div class="rating">
                                            <div class="empty-stars">
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filled-stars" style="width: 80%">
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <nav class="d-flex mt-13 pt-3 justify-content-center" aria-label="pagination"
                        data-animate="fadeInUp">
                        
                        <ul class="pagination m-0">
                            {{-- <li class="page-item">
                                <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                    href="#" aria-label="Previous">
                                    <svg class="icon">
                                        <use xlink:href="#icon-angle-double-left"></use>
                                    </svg>
                                </a>
                            </li> --}}
                            {{$products->links()}}
                            {{-- <li class="page-item">
                                <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                    href="#" aria-label="Next">
                                    <svg class="icon">
                                        <use xlink:href="#icon-angle-double-right"></use>
                                    </svg>
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                
                <div class="col-lg-3 d-lg-block d-none">
                     
                    <div class="position-sticky top-0">
                                              
                        <aside class="primary-sidebar pe-xl-9 me-xl-2 mt-12 pt-2 mt-lg-0 pt-lg-0">
                            <div class="widget widget-product-category">
                                <h4 class="widget-title fs-5 mb-6">Danh mục</h4>
                                
                                <ul class="navbar-nav navbar-nav-cate" id="widget_product_category">
                                    @foreach ($products as $item)
                                    <li class="nav-item">
                                        <a href="#" title="Body Care"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center text-uppercase fs-14px fw-semibold letter-spacing-5"><span
                                                class="text-hover-underline">{{$item->name}}</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget-product-hightlight">
                                <h4 class="widget-title fs-5 mb-6">Điểm nổi bật</h4>
                                <ul class="navbar-nav navbar-nav-cate" id="widget_product_hightlight">
                                    <li class="nav-item">
                                        <a href="#" title="Best Seller"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">Best Seller</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="New Arrivals"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">New Arrivals</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Sale"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">Sale</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Hot Items"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">Hot Items</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-product-price">
                                <h4 class="widget-title fs-5 mb-6">Giá</h4>
                                <ul class="navbar-nav navbar-nav-cate" id="widget_product_price">
                                    <li class="nav-item">
                                        <a href="#" title="All"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">All</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="$10 - $50"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">$10 - $50</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="$50 - $100"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">$50 - $100</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="$100 - $200"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">$100 - $200</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-product-size">
                                <h4 class="widget-title fs-5 mb-6">Kích cỡ</h4>
                                <ul class="navbar-nav navbar-nav-cate" id="widget_product_size">
                                    <li class="nav-item">
                                        <a href="#" title="Single"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">Single</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="5 Pack"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">5 Pack</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Full size"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">Full size</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Mini size"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="text-hover-underline">Mini size</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-product_colors">
                                <h4 class="widget-title fs-5 mb-6">Màu sắc</h4>
                                <ul class="navbar-nav navbar-nav-cate" id="widget_product_colors">
                                    <li class="nav-item">
                                        <a href="#" title="Black"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="square rounded-circle me-4"
                                                style="background-color: #000000"></span> <span
                                                class="text-hover-underline">Black</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="White"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="square rounded-circle me-4"
                                                style="background-color: #FFFFFF"></span> <span
                                                class="text-hover-underline">White</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Pink"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="square rounded-circle me-4"
                                                style="background-color: #0E328E"></span> <span
                                                class="text-hover-underline">Pink</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Maroon"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="square rounded-circle me-4"
                                                style="background-color: #672612"></span> <span
                                                class="text-hover-underline">Maroon</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Red"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="square rounded-circle me-4"
                                                style="background-color: #C71818"></span> <span
                                                class="text-hover-underline">Red</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" title="Dark Heathe"
                                            class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center"><span
                                                class="square rounded-circle me-4"
                                                style="background-color: #5E5E5E"></span> <span
                                                class="text-hover-underline">Dark Heathe</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-tags">
                                <h4 class="widget-title fs-5 mb-6">Thẻ</h4>
                                <ul class="w-100 mt-n4 list-unstyled d-flex flex-wrap mb-0">
                                    <li class="me-6 mt-4">
                                        <a href="#" title="Cleansing"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Cleansing</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="Make up"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Make
                                            up</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="eye cream"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">eye
                                            cream</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="nail"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">nail</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="shampoo"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">shampoo</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="coffee bean"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">coffee
                                            bean</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="healthy"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">healthy</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="skin care"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">skin
                                            care</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="sale"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">sale</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="Cosmetics"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Cosmetics</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="Natural cleansers"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Natural
                                            cleansers</a>
                                    </li>
                                    <li class="me-6 mt-4">
                                        <a href="#" title="Organic"
                                            class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline">Organic</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
@endsection
