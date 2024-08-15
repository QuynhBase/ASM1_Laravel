@extends('Client.Layouts.master')

@section('content')
    <main id="content" class="wrapper layout-page">
        <section class="z-index-2 position-relative pb-2 mb-12">
            <div class="bg-body-secondary mb-3">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1 mb-0">
                            <li class="breadcrumb-item"><a title="Home" href="../index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="shopping-cart">
                <h2 class="text-center fs-2 mt-12 mb-13">Giỏ hàng</h2>
                <form class="table-responsive-md pb-8 pb-lg-10">
                    <table class="table border">
                        <thead class="bg-body-secondary">
                            <tr class="fs-15px letter-spacing-01 fw-semibold text-uppercase text-body-emphasis">
                                <th scope="col" class="fw-semibold border-1 ps-11">Các sản phẩm</th>
                                <th scope="col" class="fw-semibold border-1">Số lượng</th>
                                <th colspan="2" class="fw-semibold border-1">Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr class="position-relative">
                                    <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input rounded-0" type="checkbox"
                                                    name="check-product" value="checkbox">
                                            </div>
                                            <div class="ms-6 me-7">
                                                <img src="{{ Storage::url($item->product_image) }}" data-src=""
                                                    class="lazy-image" width="75" height="100"
                                                    alt="Natural Coconut Cleansing Oil">
                                            </div>
                                            <div class>
                                                <p class="fw-500 mb-1 text-body-emphasis">{{ $item->product_name }}</p>
                                                <p class="card-text">
                                                    <span
                                                        class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>
                                                    <span
                                                        class="fs-15px fw-bold text-body-emphasis">{{ $item->product_price }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle">
                                        <div class="input-group position-relative shop-quantity">
                                            <a href="#" class="shop-down position-absolute z-index-2"><i
                                                    class="far fa-minus"></i></a>
                                            <input name="number[]" type="number"
                                                class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0"
                                                value="{{ $item->quantity }}" required>
                                            <a href="#" class="shop-up position-absolute z-index-2"><i
                                                    class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">{{ $item->product_price }}</p>
                                    </td>
                                    <td class="align-middle text-end pe-8">
                                        <a href="#" class="d-block text-secondary">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr class="position-relative">
                                <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-0" type="checkbox" name="check-product"
                                                value="checkbox">
                                        </div>
                                        <div class="ms-6 me-7">
                                            <img src="#" data-src="../assets/images/products/product-06-75x100.jpg"
                                                class="lazy-image" width="75" height="100"
                                                alt="Natural Coconut Cleansing Oil">
                                        </div>
                                        <div class>
                                            <p class="fw-500 mb-1 text-body-emphasis">Super Pure</p>
                                            <p class="card-text">
                                                <span class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>
                                                <span class="fs-15px fw-bold text-body-emphasis">$29.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle">
                                    <div class="input-group position-relative shop-quantity">
                                        <a href="#" class="shop-down position-absolute z-index-2"><i
                                                class="far fa-minus"></i></a>
                                        <input name="number[]" type="number"
                                            class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0"
                                            value="1" required>
                                        <a href="#" class="shop-up position-absolute z-index-2"><i
                                                class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">$48.00</p>
                                </td>
                                <td class="align-middle text-end pe-8">
                                    <a href="#" class="d-block text-secondary">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="position-relative opacity-50">
                                <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-0" type="checkbox"
                                                name="check-product" value="checkbox" disabled>
                                        </div>
                                        <div class="ms-6 me-7">
                                            <img src="#" data-src="../assets/images/products/product-04-75x100.jpg"
                                                class="lazy-image" width="75" height="100"
                                                alt="Natural Coconut Cleansing Oil">
                                        </div>
                                        <div class>
                                            <p class="fw-500 mb-1 text-body-emphasis">Cleansing Balm</p>
                                            <p class="card-text">
                                                <span
                                                    class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>
                                                <span class="fs-15px fw-bold text-body-emphasis">$29.00</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="position-absolute top-0 start-0">
                                        <span
                                            class="badge rounded-0 text-uppercase fs-14px px-5 py-4 product-stock ls-1 fw-semibold p-0">out
                                            of stock</span>
                                    </div>
                                </th>
                                <td class="align-middle">
                                    <div class="input-group position-relative shop-quantity">
                                        <a href="#" class="shop-down position-absolute z-index-2"><i
                                                class="far fa-minus"></i></a>
                                        <input name="number[]" type="number"
                                            class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0"
                                            value="1" required disabled>
                                        <a href="#" class="shop-up position-absolute z-index-2"><i
                                                class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">$48.00</p>
                                </td>
                                <td class="align-middle text-end pe-8">
                                    <a href="#" class="d-block text-secondary">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="position-relative">
                                <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-0" type="checkbox"
                                                name="check-product" value="checkbox">
                                        </div>
                                        <div class="ms-6 me-7">
                                            <img src="#" data-src="../assets/images/products/product-09-75x100.jpg"
                                                class="lazy-image" width="75" height="100"
                                                alt="Natural Coconut Cleansing Oil">
                                        </div>
                                        <div class>
                                            <p class="fw-500 mb-1 text-body-emphasis">Cleansing Balm</p>
                                            <p class="card-text">
                                                <span
                                                    class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>
                                                <span class="fs-15px fw-bold text-body-emphasis">$29.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle">
                                    <div class="input-group position-relative shop-quantity">
                                        <a href="#" class="shop-down position-absolute z-index-2"><i
                                                class="far fa-minus"></i></a>
                                        <input name="number[]" type="number"
                                            class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0"
                                            value="1" required>
                                        <a href="#" class="shop-up position-absolute z-index-2"><i
                                                class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">$48.00</p>
                                </td>
                                <td class="align-middle text-end pe-8">
                                    <a href="#" class="d-block text-secondary">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr> --}}
                            <tr>
                                <td class="pt-5 pb-10 position-relative bg-body ps-0 left">
                                    <a href="shop-layout-v1.html" title="Countinue Shopping"
                                        class="btn btn-outline-dark me-8 text-nowrap my-5">
                                        Tiếp tục mua sắm
                                    </a>
                                    <button type="submit" value="Clear Shopping Cart"
                                        class="btn btn-link p-0 border-0 border-bottom border-secondary text-decoration-none rounded-0 my-5 fw-semibold ">
                                        <i class="fa fa-times me-3"></i>
                                        Xóa giỏ hàng
                                    </button>
                                </td>
                                <td colspan="3" class="text-end pt-5 pb-10 position-relative bg-body right pe-0">
                                    <a href="{{route('order.list')}}" class="btn btn-outline-dark my-5">
                                        Thanh toán
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </section>
    </main>
@endsection
