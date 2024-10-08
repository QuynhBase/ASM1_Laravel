@extends('Client.Layouts.master')

@section('content')
    <main id="content" class="wrapper layout-page">
            <section class="z-index-2 position-relative pb-2 mb-12">
                <div class="bg-body-secondary mb-3">
                    <div class="container">
                        <nav class="py-4 lh-30px" aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center py-1 mb-0">
                                <li class="breadcrumb-item"><a title="Home" href="../index-2.html">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Sản phẩm</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="container pt-6 pb-13 pb-lg-20">
                <div class="row ">
                    <div class="col-md-6 pe-lg-13 pb-12">
                        <div class="position-sticky top-0">
                            <div class="slick-slider g-0 "
                                data-slick-options="{&#34;arrows&#34;:false,&#34;imageSize&#34;:{&#34;img&#34;:{&#34;height&#34;:720,&#34;width&#34;:540}},&#34;items&#34;:[{&#34;img&#34;:&#34;/assets/images/shop/product-gallery-05.jpg&#34;},{&#34;img&#34;:&#34;/assets/images/shop/product-gallery-06.jpg&#34;},{&#34;img&#34;:&#34;/assets/images/shop/product-gallery-07.jpg&#34;},{&#34;img&#34;:&#34;/assets/images/shop/product-gallery-08.jpg&#34;}],&#34;slidesToShow&#34;:1}">
                                <a href="" data-gallery="gallery4" data-thumb-src=""><img
                                        src="{{ Storage::url($product->image) }}" data-src="" class="lazy-image"
                                        width="540" height="720" alt></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-10">
                        <p class="d-flex align-items-center mb-6">
                            <span class="text-decoration-line-through">39.00</span>
                            <span class="fs-18px text-body-emphasis ps-6 fw-bold">{{ $product->price }}₫</span>
                            <span class="badge text-bg-primary fs-6 fw-semibold ms-7 px-6 py-3">20%</span>
                        </p>
                        <h1 class="mb-4 pb-2 fs-4">{{ $product->name }}</h1>
                        <div class="d-flex align-items-center fs-15px mb-6">
                            <p class="mb-0 fw-semibold text-body-emphasis">4.86</p>
                            <div class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result">
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
                                    <div class="filled-stars" style="width: 100%">
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
                                </div>
                            </div>
                            <a href="#" class="border-start ps-6 text-body"> 2947 Đánh giá</a>
                        </div>
                        <p class="fs-15px">Niacinamide và Vitamin C là hai siêu phẩm chống lão hóa nhưng thường
                            không được kết hợp với nhau vì độ pH của chúng khác nhau.</p>
                        <form action=" {{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="row align-items-end">
                            {{-- <div class="col-sm-6 form-group">
                                <label class="text-body-emphasis fw-semibold py-5" for="size">Chọn kích cỡ: </label>
                                <select name="size" class="form-control w-100 product-info-2-quantity" id="size">
                                    <option value="50ml" selected>50ml</option>
                                    <option value="70ml">70ml</option>
                                    <option value="90ml">90ml</option>
                                    <option value="100ml">100ml</option>
                                </select>
                            </div> --}}
                            <div class="row align-items-end">
                                <div class="form-group col-sm-4">
                                    <label class=" text-body-emphasis fw-semibold fs-15px pb-6" for="number">Quantity:
                                    </label>
                                    <div class="input-group position-relative w-100 input-group-lg">
                                        <a href="#"
                                            class="shop-down position-absolute translate-middle-y top-50 start-0 ps-7 product-info-2-minus"><i
                                                class="far fa-minus"></i></a>
                                        <input name="quantity" type="number" id="number"
                                            class="product-info-2-quantity form-control w-100 px-6 text-center"
                                            value="1" required>
                                        <a href="#"
                                            class="shop-up position-absolute translate-middle-y top-50 end-0 pe-7 product-info-2-plus"><i
                                                class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#">
                                    <button type="submit"
                                        class="btn btn-lg btn-dark btn-block mb-7 mt-8 w-100 btn-hover-bg-primary btn-hover-border-primary">
                                        Thêm vào giỏ hàng
                                    </button>
                                </a>
                            </div>
                        </div>
                        </form>
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="compare.html"
                                class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                                <svg class="icon fs-5">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                                <span class="ms-4 ps-2">So sánh</span>
                            </a>
                            <a href="#"
                                class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                                <svg class="icon fs-5">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                                <span class="ms-4 ps-2">Thêm vào giỏ hàng</span>
                            </a>
                            <a href="#"
                                class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                                <svg class="icon fs-5">
                                    <use xlink:href="#icon-ShareNetwork"></use>
                                </svg>
                                <span class="ms-4 ps-2">Chia sẻ</span>
                            </a>
                        </div>
                        <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
                            <li class="d-flex mb-4 pb-2 align-items-center">
                                <span class="text-body-emphasis fw-semibold fs-14px">Mã sản phẩm:</span>
                                <span class="ps-4">SF09281</span>
                            </li>
                            <li class="d-flex mb-4 pb-2 align-items-center">
                                <span class="text-body-emphasis fw-semibold fs-14px">Danh mục:</span>
                                <span class="ps-4">{{ $product->category->name }}</span>
                            </li>
                        </ul>
                        <div class="mt-11">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item pb-4">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <a class="product-info-accordion text-decoration-none" href="#"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <span class="fs-4">Chi tiết sản phẩm</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="pt-8 pb-3">
                                        <p class="fw-semibold text-body-emphasis mb-2 pb-4">{{ $product->description }}
                                        </p>
                                        {{-- <p class="mb-2 pb-4">Complexion-perfecting natural foundation enriched with
                                        antioxidant-packed superfruits, vitamins, and other skin-nourishing
                                        nutrients. Creamy liquid formula sets with a pristine matte finish
                                        for soft, velvety smooth skin.</p>
                                    <p class="mb-7">Say hello to flawless, long-lasting foundation that
                                        comes in 7
                                        melt-into-your-skin shades. This lightweight, innovative formula
                                        creates a smooth, natural matte finish that won’t settle into lines.
                                        It’s the perfect fit for your skin. 1 fl. oz.</p>
                                    <p class="fw-semibold text-body-emphasis mb-2 pb-4">Benefits</p>
                                    <ul class="mb-5 ps-6">
                                        <li class="mb-1">Buildable medium-to-full coverage</li>
                                        <li class="mb-1">Weightless, airy feel—no caking!</li>
                                        <li class="mb-1">Long-wearing</li>
                                        <li class="mb-1">Evens skin tone</li>
                                        <li>Available in 07 shades (all exclusive to Makeaholic!)</li>
                                    </ul> --}}
                                        {{-- <div class="row">
                                        <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                            <img class="lazy-image light-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-3-1.png" width="66"
                                                height="77" alt>
                                            <img class="lazy-image dark-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-white-3-1.png" width="66"
                                                height="77" alt>
                                        </div>
                                        <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                            <img class="lazy-image light-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-3-2.png" width="66"
                                                height="77" alt>
                                            <img class="lazy-image dark-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-white-3-2.png" width="66"
                                                height="77" alt>
                                        </div>
                                        <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                            <img class="lazy-image light-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-3-3.png" width="66"
                                                height="77" alt>
                                            <img class="lazy-image dark-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-white-3-3.png" width="66"
                                                height="77" alt>
                                        </div>
                                        <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                            <img class="lazy-image light-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-3-4.png" width="66"
                                                height="77" alt>
                                            <img class="lazy-image dark-mode-img" src="#"
                                                data-src="../assets/images/shop/product-info-white-3-4.png" width="66"
                                                height="77" alt>
                                        </div>
                                    </div> --}}
                                    </div>
                                </div>
                                <div class="accordion-item pb-4 mt-7">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <a class="product-info-accordion collapsed text-decoration-none" href="#"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <span class="fs-4">Cách sử dụng</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="pt-8 pb-3">
                                        <p class="fw-semibold text-body-emphasis mb-2 pb-4">Thực hiện theo các hướng dẫn an
                                            toàn sau khi sử dụng bất kỳ loại mỹ phẩm nào:</p>
                                        <ul class="ps-6 mb-8">
                                            <li class="mb-3">Đọc nhãn. Thực hiện theo mọi hướng dẫn và chú ý mọi cảnh
                                                báo.
                                            </li>
                                            <li class="mb-3">Rửa tay trước khi sử dụng sản phẩm.</li>
                                            <li class="mb-3">Không dùng chung đồ trang điểm.</li>
                                            <li class="mb-3">Giữ hộp đựng sạch sẽ và đóng chặt khi không sử dụng, tránh
                                                xa
                                                nơi có nhiệt độ khắc nghiệt.
                                            </li>
                                            <li class="mb-3">Vứt bỏ mỹ phẩm nếu có sự thay đổi về màu sắc hoặc mùi.
                                            </li>
                                            <li>Sử dụng bình xịt hoặc bình xịt ở những nơi thông gió tốt. Không
                                                sử dụng khi bạn đang hút thuốc hoặc gần ngọn lửa. Nó có thể gây ra hỏa hoạn.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-item pb-4 mt-7">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <a class="product-info-accordion collapsed text-decoration-none" href="#"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <span class="fs-4">Thành phần</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="pt-8 pb-3">
                                        <div class="table-responsive mb-5">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">CAS</td>
                                                        <td class="text-end py-5 ps-5 pe-0">92128-82-0, 9057-02-7</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">INCI</td>
                                                        <td class="text-end py-5 ps-5 pe-0">Chiết xuất Nannochloropsis
                                                            Oculata
                                                            (tảo nhỏ), pullulan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">Thành phần</td>
                                                        <td class="text-end py-5 ps-5 pe-0">Chiết xuất Nannochloropsis
                                                            Oculata
                                                            (tảo nhỏ), pullulan, nước, ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">Vẻ bề ngoài</td>
                                                        <td class="text-end py-5 ps-5 pe-0">Chất lỏng nhớt màu vàng đến hổ
                                                            phách
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">Độ hòa tan</td>
                                                        <td class="text-end py-5 ps-5 pe-0">Hòa tan trong nước và etanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">Kho</td>
                                                        <td class="text-end py-5 ps-5 pe-0">Bảo quản lạnh (4-8oC / 39-46oF)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p>
                                            Hoàn hảo cho nhà ở Equestrian hoặc mọi người yêu ngựa. Hợp kim nhôm cao cấp có
                                            chữ ký của nhà thiết kế Arthur Court đều tuân thủ các quy định của FDA. Đồ dùng
                                            phục vụ bằng nhôm có thể được làm lạnh trong tủ đông hoặc tủ lạnh và hâm nóng
                                            trong lò nướng ở nhiệt độ 350. Rửa bằng tay với xà phòng rửa chén nhẹ và lau khô
                                            ngay lập tức - không cho vào máy rửa chén. Có hộp quà tặng hoàn hảo cho nhà ở
                                            Equestrian hoặc người yêu ngựa trong cuộc sống của bạn.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="border-top w-100 h-1px"></div>
            <section class="container pt-15 pb-15 pt-lg-17 pb-lg-20">
                <div class="text-center">
                    <h2 class="mb-12">Sản phẩm nổi bật</h2>
                </div>
                <div class="slick-slider"
                    data-slick-options="{&#34;arrows&#34;:true,&#34;centerMode&#34;:true,&#34;centerPadding&#34;:&#34;calc((100% - 1440px) / 2)&#34;,&#34;dots&#34;:true,&#34;infinite&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                    @foreach ($products as $item)
                        <div class="mb-6">
                            <div class="card card-product grid-2 bg-transparent border-0">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Shield Conditioner">
                                        <img src="{{ Storage::url($item->image) }}" data-src=""
                                            class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                            height="440">
                                    </a>
                                    <div class="position-absolute product-flash z-index-2 "><span
                                            class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                                    <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                            href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Quick View">
                                            <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg class="icon icon-eye-light">
                                                    <use xlink:href="#icon-eye-light"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                            href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Add To Wishlist">
                                            <svg class="icon icon-star-light">
                                                <use xlink:href="#icon-star-light"></use>
                                            </svg>
                                        </a>
                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                            href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Compare">
                                            <svg class="icon icon-arrows-left-right-light">
                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                            </svg>
                                        </a>
                                    </div><a href="#"
                                        class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap">Add
                                        To Cart</a>
                                </figure>
                                <div class="card-body text-center p-0">
                                    <span
                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                        <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                        <ins class="text-decoration-none">{{ $item->price }}₫</ins></span>
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="product-details-v1.html">{{ $item->name }}</a>
                                    </h4>
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

            </section>
            <div class="border-top w-100 h-1px"></div>
            <section class="container pt-15 pb-15 pt-lg-17 pb-lg-20">
                <div class="text-center">
                    <h2 class="mb-12">Phản hồi từ khách hàng</h2>
                </div>
                <div class="mb-11">
                    <div class=" d-md-flex justify-content-between align-items-center">
                        <div class=" d-flex align-items-center">
                            <h4 class="fs-1 me-9 mb-0">4.86</h4>
                            <div class="p-0">
                                <div class="d-flex align-items-center fs-6 ls-0 mb-4">
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
                                        <div class="filled-stars" style="width: 96%">
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
                                    </div>
                                </div>
                                <p class="mb-0">2947 đánh giá, 18 Q&amp;As</p>
                            </div>
                        </div>
                        <div class="text-md-end mt-md-0 mt-7">
                            <a href="#customer-review" class="btn btn-outline-dark" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="customer-review"><svg
                                    class="icon">
                                    <use xlink:href="#icon-Pencil"></use>
                                </svg>
                                Đánh giá
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-14" id="customer-review">
                    <form class="product-review-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-7">
                                    <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewName">Tên</label>
                                    <input id="reviewName" class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-4">
                                    <label class="mb-4 fs-6 fw-semibold text-body-emphasis"
                                        for="reviewEmail">Email</label>
                                    <input id="reviewEmail" type="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="mt-4 mb-5 fs-6 fw-semibold text-body-emphasis">Đánh giá của bạn*</p>
                            <div class="form-group mb-6 d-flex justify-content-start">
                                <div class="rate-input">
                                    <input type="radio" id="star5" name="rate" value="5" style>
                                    <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="far fa-star"></i>
                                    </label>
                                    <input type="radio" id="star4" name="rate" value="5" style>
                                    <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="far fa-star"></i>
                                    </label>
                                    <input type="radio" id="star3" name="rate" value="5" style>
                                    <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="far fa-star"></i>
                                    </label>
                                    <input type="radio" id="star2" name="rate" value="5" style>
                                    <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="far fa-star"></i>
                                    </label>
                                    <input type="radio" id="star1" name="rate" value="5" style>
                                    <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="far fa-star"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-7">
                            <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewTitle">Tiêu đề của bài đánh
                                giá:</label>
                            <input id="reviewTitle" type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group mb-10">
                            <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewMessage">Trải nghiệm chung
                                của
                                bạn thế nào?</label>
                            <textarea id="reviewMessage" class="form-control" name="message" rows="5"></textarea>
                        </div>
                        <div class="d-flex">
                            <div class="me-4">
                                <div class="input-group align-items-center">
                                    <input type="file" name="img" class="form-control border"
                                        id="reviewrAddPhoto">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="product-filter-review">
                    <h3 class="fs-5">Đánh giá bộ lọc</h3>
                    <ul class="list-inline mb-8 mx-n3 filter-review">
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Foundation
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Coverage
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Skin
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Color
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Shade
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Make up
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Face
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Ingredients
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Moisturizer
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Pure
                            </a>
                        </li>
                        <li class="list-inline-item spacing">
                            <a href="#"
                                class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                Nature
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                ...
                            </a>
                        </li>
                        <li class="collapse m-3 list-inline-item collapse" id="collapseExample">
                            <ul class="list-inline list-inline-item">
                                <li class="list-inline-item">
                                    <a href="#"
                                        class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                        Good Value
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline list-inline-item">
                                <li class="list-inline-item">
                                    <a href="#"
                                        class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                        Lightweight
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline list-inline-item">
                                <li class="list-inline-item">
                                    <a href="#"
                                        class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                        Smells Great
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline list-inline-item">
                                <li class="list-inline-item">
                                    <a href="#"
                                        class="btn btn-outline btn-hove-border-body-emphasis-color btn-border-1 py-4 px-6 fw-500">
                                        Easy To Use
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="row gy-15px align-items-center spacing-02">
                        <div class="col-auto search-review w-100 px-4">
                            <div class="form-group product-review-form">
                                <div class="input-group-prepend position-absolute z-index-10">
                                    <button class="btn btn-link text-secondary fs-15px px-7" type="submit"><i
                                            class="far fa-search"></i>
                                    </button>
                                </div>
                                <input type="text" id="search_reviews" name="search_reviews"
                                    class="form-control fs-15px pe-7 ps-13  rounded" placeholder="Search reviews">
                                <label for="search_reviews" class="visually-hidden">Search reviews</label>
                            </div>
                        </div>
                        <div class="col-auto dropdown skin-goal px-4">
                            <label for="skin_goal" class="visually-hidden">Skin goal</label>
                            <select name="skin_goal" id="skin_goal" class="form-select">
                                <option>Skin goal</option>
                                <option>Looking Pores</option>
                                <option>Clear Skin</option>
                                <option>Chicagon</option>
                                <option>Dewy-Looking Skin</option>
                                <option>Radiant</option>
                            </select>
                        </div>
                        <div class="col-auto dropdown skin-goal px-4">
                            <label for="image_video" class="visually-hidden">Image &amp; Video</label>
                            <select name="image_video" id="image_video" class="form-select">
                                <option>Image &amp; Video</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </div>
                        <div class="col-auto dropdown skin-goal px-4">
                            <label for="sort_by" class="visually-hidden">Sort by</label>
                            <select name="sort_by" id="sort_by" class="form-select">
                                <option>Sort by</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=" mt-12">
                    <h3 class="fs-5">2947 đánh giá</h3>
                    <div class="border-bottom pb-7 pt-10">
                        <div class="d-flex align-items-center mb-6">
                            <div class="d-flex align-items-center fs-15px ls-0">
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
                                    <div class="filled-stars" style="width: 100%">
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
                                </div>
                            </div>
                            <span class="fs-3px mx-5"><i class="fas fa-circle"></i></span>
                            <span class="fs-14">5 day ago</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center mb-5">
                            <img src="#" data-src="../assets/images/others/single-product-01.png"
                                class="me-6 lazy-image rounded-circle" width="60" height="60" alt="Avatar">
                            <div class>
                                <h5 class="mt-0 mb-4 fs-14px text-uppercase ls-1">JENNIFER C.</h5>
                                <p class="mb-0">/ Orlando, FL</p>
                            </div>
                        </div>
                        <p class="fw-semibold fs-6 text-body-emphasis mb-5">Favorite Foundation</p>
                        <p class="mb-10 fs-6">I order the samples so as not to make mistakes when choosing my color Is a
                            good
                            product as a light shade but the sample doesn&#39;t contain enough product to cover the skin and
                            decide clearly, around my eyes I used the “peach bisque”. I used with primer all mu face and
                            finished texture is good. At the end for my latin tan skin a choose “golden peach” But is out of
                            stock the primer I think is a good match.</p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#" class="fs-14px mb-0 text-secondary">Was This Review Helpful?</a>
                            <p class="mb-0 ms-7 text-body-emphasis">
                                <svg class="icon icon-like align-baseline">
                                    <use xlink:href="#icon-like"></use>
                                </svg>
                                10
                            </p>
                            <p class="mb-0 ms-6 text-body-emphasis">
                                <svg class="icon icon-unlike align-baseline">
                                    <use xlink:href="#icon-unlike"></use>
                                </svg>
                                1
                            </p>
                        </div>
                    </div>
                </div>
                <nav class="d-flex mt-13 pt-3 justify-content-center" aria-label="pagination">
                    <ul class="pagination m-0">
                        <li class="page-item">
                            <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                href="#" aria-label="Previous">
                                <svg class="icon">
                                    <use xlink:href="#icon-angle-double-left"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link rounded-circle d-flex align-items-center justify-content-center"
                                href="#" aria-label="Next">
                                <svg class="icon">
                                    <use xlink:href="#icon-angle-double-right"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>
    </main>
@endsection
