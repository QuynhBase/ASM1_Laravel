@extends('client.layouts.master')

@section('content')
    <section class="z-index-2 position-relative pb-2 mb-12">
        <div class="bg-body-secondary mb-3">
            <div class="container">
                <nav class="py-4 lh-30px" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center py-1 mb-0">
                        <li class="breadcrumb-item"><a title="Home" href="../index-2.html">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Sản phẩn</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thủ tục thanh toán</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container pb-14 pb-lg-19">
        <div class="text-center">
            <h2 class="mb-6">Thủ tục thanh toán</h2>
        </div>
        <form class="pt-12" action="{{route('order.add')}}" method="POST">
            @csrf
            <input type="hidden" name="product" value="{{$product}}">
            <input type="hidden" name="totalAmount" value="{{$totalAmount}}">
            <input type="hidden" name="userId" value="{{$userId}}">
            <div class="row">
                <div class="col-lg-4 pb-lg-0 pb-14 order-lg-last">
                    <div class="card border-0 rounded-0 shadow">
                        <div class="card-header px-0 mx-10 bg-transparent py-8">
                            <h4 class="fs-4 mb-8">Các sản phẩm</h4>
                            @foreach ($product as $item)
                                <div class="d-flex w-100 mb-7">

                                    <div class="me-6">
                                        <img src="{{ Storage::url($item->product_image) }}" data-src=""
                                            class="lazy-image" width="60" height="80"
                                            alt="Natural Coconut Cleansing Oil">
                                    </div>
                                    <div class="d-flex flex-grow-1">
                                        <div class="pe-6">
                                            <a href="#" class>{{ $item->product_name }}<span class="text-body"> x
                                                {{ $item->quantity }}</span></a>

                                        </div>
                                        <div class="ms-auto">
                                            <p class="fs-14px text-body-emphasis mb-0 fw-bold">{{ $item->product_price }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="card-body px-10 py-8">
                            <div class="d-flex align-items-center mb-2">
                                <span>Tổng cộng:</span>
                                <span class="d-block ms-auto text-body-emphasis fw-bold">{{$totalAmount}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span>Phí vận chuyển:</span>
                                <span class="d-block ms-auto text-body-emphasis fw-bold">$0</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent py-5 px-0 mx-10">
                            <div class="d-flex align-items-center fw-bold mb-6">
                                <span class="text-body-emphasis p-0">Tổng giá:</span>
                                <span class="d-block ms-auto text-body-emphasis fs-4 fw-bold">{{$totalAmount}}</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8 order-lg-first pe-xl-20 pe-lg-6">
                    <div class="checkout">
                        <p class="mb-5">Khách hàng quay lại?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal">Nhấp vào đây để đăng
                                nhập</a>
                        </p>
                        <p>Có phiếu giảm giá?
                            <a data-bs-toggle="collapse" href="#collapsecoupon" role="button" aria-expanded="false"
                                aria-controls="collapsecoupon">Nhấp vào đây để nhập mã của bạn</a>
                        </p>
                        <div class="collapse" id="collapsecoupon">
                            <div class="card mw-60 border-0">
                                <div class="card-body py-10 px-8 my-10 border">
                                    <p class="card-text text-body-emphasis mb-8">
                                        Nếu bạn có mã giảm giá, vui lòng áp dụng bên dưới.</p>
                                    <div class="input-group position-relative">
                                        <input type="email" class="form-control bg-body rounded-end"
                                            placeholder="Your Email*">
                                        <button type="submit"
                                            class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                                            Áp dụng phiếu giảm giá
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="fs-4 pt-4 mb-7">Thông tin vận chuyển</h4>
                        <div class="mb-7">
                            <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Họ và tên</label>
                            <input type="text" class="form-control" id="first-name" name="user_name"
                                placeholder="Tên đầy đủ" required>
                        </div>
                        <div class="mb-7">
                            <label for="street-address" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Số
                                điện thoại</label>
                            <input type="number" class="form-control" id="phone" name="user_phone"
                                placeholder="Phone number" required>
                        </div>
                        <div class="mb-7">
                            <label for="street-address"
                                class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Email</label>
                            <input type="email" class="form-control" id="email" name="user_email" placeholder="Email"
                                required>
                        </div>
                        <div class="mb-7">
                            <label for="street-address"
                                class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Địa
                                chỉ</label>
                            <input type="text" class="form-control" id="street-address" name="user_address"
                                placeholder="Địa chỉ cụ thể" required>
                        </div>
                        <div class="mt-6 mb-5 form-check">
                            <input type="checkbox" class="form-check-input rounded-0 me-4" name="customCheck6"
                                id="customCheck5">
                            <label class="text-body-emphasis" for="customCheck5">
                                <span class="text-body-emphasis">Địa chỉ thanh toán giống như địa chỉ giao hàng</span>
                            </label>
                        </div>
                    </div>
                    <div class="checkout mb-7">
                        <div class="mb-7">
                            <h4 class="fs-4 mb-8 mt-12 pt-lg-1">Phương thức thanh toán</h4>
                            <div class="nav nav-tabs border-0">
                                <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#credit-card-tab" name="payment">
                                    <svg class="icon icon-paylay fs-32px text-body-emphasis">
                                        <use xlink:href="#icon-card"></use>
                                    </svg>
                                    <span class="ms-3 text-body-emphasis fw-semibold fs-6">Thanh toán khi nhận hàng</span>
                                </a>
                            </div>
                        </div>
                        <button type="submit"
                            class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11 mt-md-7 mt-4">Đặt
                            hàng</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
