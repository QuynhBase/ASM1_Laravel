@extends('Admin.Layouts.master')

@section('content')
    <div class="row mb-9 align-items-center justify-content-between">
        <div class="col-sm-6 mb-8 mb-sm-0">
            <h2 class="fs-4 mb-0">Chi tiết đơn hàng</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="card rounded-4">
        <header class="card-header bg-transparent p-7">
            <div class="row align-items-center">
                <div class="col-md-6 mb-lg-0 mb-6">
                    <span class="d-inline-block"><i class="far fa-calendar me-3"></i>Wed, Aug 13, 2020, 4:34PM </span>
                    <br>
                    <small class="text-muted">Order ID: 3453012</small>
                </div>
                <div class="col-md-6 ml-auto d-flex justify-content-md-end flex-wrap">
                    <div class="mw-210 me-5 my-3">
                        <select class="form-select">
                            <option>Change status</option>
                            <option>Awaiting payment</option>
                            <option>Confirmed</option>
                            <option>Shipped</option>
                            <option>Delivered</option>
                        </select>
                    </div>
                    <a class="btn btn-primary my-3" href="#">Lưu</a>
                    <a class="btn btn-dark print ms-5 my-3" href="#"><i class="far fa-print"></i></a>
                </div>
            </div>
        </header>
        <div class="card-body p-7">
            <div class="row mb-8 mt-4 order-info-wrap">
                <div class="col-md-4 mb-md-0 mb-7">
                    <div class="d-flex flex-nowrap">
                        <div class="icon-wrap">
                            <span class="rounded-circle px-6 py-5 bg-green-light me-6 text-green d-inline-block">
                                <i class="fas fa-user px-1"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h6 class="mb-4">Khách hàng</h6>
                            <p class="mb-4">
                                John Alexander <br>
                                alex@example.com <br>
                                +998 99 22123456
                            </p>
                            <a href="#" class="btn-link-custom">Xem hồ sơ</a>
                        </div>
                    </div>
                </div>
                @foreach ($order as $item)          
                <div class="col-md-4 mb-md-0 mb-7">
                    <div class="d-flex flex-nowrap">
                        <div class="icon-wrap">
                            <span class="rounded-circle p-5 bg-green-light me-6 text-green d-inline-block">
                                <i class="fas fa-truck px-2"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h6 class="mb-4">Thông tin đặt hàng</h6>
                            <p class="mb-4">
                                {{-- Shipping: Fargo express <br> --}}
                                Phương thức thanh toán: {{$item->payment_status}} <br>
                                Trạng thái: {{$item->order_status}}
                            </p>
                            <a href="#" class="btn-link-custom">Tải thông tin</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-4">
                    <div class="d-flex flex-nowrap">
                        <div class="icon-wrap">
                            <span class="rounded-circle p-5 bg-green-light me-6 text-green d-inline-block">
                                <i class="fas fa-truck px-2"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h6 class="mb-4">Giao hàng đến</h6>
                            <p class="mb-4">
                                City: Tashkent, Uzbekistan <br>Block A, House 123, Floor 2 <br>
                                Po Box 10000
                            </p>
                            <a href="#" class="btn-link-custom">Xem hồ sơ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th class="text-end">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order_items as $items)                                                                  
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center flex-nowrap">
                                            <a href="../shop/product-details-v1.html" title="Flowers cotton dress">
                                                <img src="{{Storage::url($items->order_tem_product_image)}}"
                                                    data-src=""
                                                    alt="Flowers cotton dress" class="lazy-image" width="60"
                                                    height="80">
                                            </a>
                                            <a href="../shop/product-details-v1.html" title="Flowers cotton dress"
                                                class="ms-6">
                                                <p class="fw-semibold text-body-emphasis mb-0">Flowers cotton dress</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>$44.25</td>
                                    <td>2</td>
                                    <td class="text-end">$88.50</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">
                                        <div class="d-flex flex-column align-items-end justify-content-end">
                                            <div class="mw-40 w-40">
                                                <div class="d-flex w-100">
                                                    <span class="d-inline-block w-50">Subtotal:</span>
                                                    <span class="d-inline-block w-50 text-end fw-normal">$973.35</span>
                                                </div>
                                                <div class="d-flex w-100">
                                                    <span class="d-inline-block w-50">Shipping cost:</span>
                                                    <span class="d-inline-block w-50 text-end fw-normal">$10.00</span>
                                                </div>
                                                <div class="d-flex w-100 mb-5">
                                                    <span class="d-inline-block w-50">Grand total:</span>
                                                    <span
                                                        class="d-inline-block w-50 text-end fs-5 fw-semibold">$983.00</span>
                                                </div>
                                                <div class="d-flex w-100">
                                                    <span class="d-inline-block w-50 text-muted">Status:</span>
                                                    <span class="d-inline-block w-50 text-end fs-20 fw-semibold"><span
                                                            class="badge rounded-pill alert alert-success text-success fs-12px px-4 py-3">Payment
                                                            done</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="box shadow-sm bg-body-tertiary p-6">
                        <h6 class="mb-6">Thông tin thanh toán</h6>
                        <div>
                            <div class="d-flex">
                                <div class="me-4">
                                    <img src="../assets/images/dashboard/master-card.png" class="border" alt="Card"
                                        width="28">
                                </div>
                                <p class="mb-0"> Master Card **** ****4768</p>
                            </div>
                            <p class="mb-0">
                                Business name: Grand Market LLC <br>
                                Phone: +1 (800) 555-154-52
                            </p>
                        </div>
                    </div>
                    <div class="h-25 pt-8">
                        <div class="mb-6">
                            <label class="mb-5 fs-13px ls-1 fw-semibold text-uppercase">Ghi chú</label>
                            <textarea class="form-control" name="notes" id="notes" placeholder="Type some note"></textarea>
                        </div>
                        <button class="btn btn-primary">Lưu ghi chú</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
