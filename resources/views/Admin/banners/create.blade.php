@extends('Admin.Layouts.master')

@section('content')
    <div class="row mb-9 align-items-center">
        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-xxl-6">
                <div class="row">
                    <div class="col-sm-6 mb-8 mb-sm-0">
                        <h2 class="fs-4 mb-0">Thêm mới banner</h2>
                    </div>

                    <div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
                        <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-primary me-4">Danh sách</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>

                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-xxl-6">
            <div class="card mb-4">
                <div class="card-body p-7">

                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fs-6 fw-500">1. Thông tin chung</h6>
                        </div>
                        <div class="col-md-9">
                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Id</label>
                                <input type="text" placeholder="79" class="form-control" id="product-title" disabled>
                            </div>


                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Tiêu
                                    đề</label>
                                <input type="text" placeholder="Nhập tiêu đề" class="form-control" id="product-title"
                                    name="title">
                            </div>
                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase">Ảnh banner</label>
                                <input class="form-control" type="file" name="image_path">
                            </div>
                        </div>
                    </div>

                    <hr class="mb-7 mt-0">

                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fs-6 fw-500">2. Mô tả</h6>
                        </div>
                        <div class="col-md-9">
                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="description">Mô tả
                                    banner</label>
                                <textarea placeholder="Mô tả" class="form-control" rows="4" id="description" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-7 mt-0">

                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fs-6 fw-500">4. Ngày tạo</h6>
                        </div>
                        <div class="col-md-9">
                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="cost">Ngày Tạo Khuyến
                                    mãi</label>
                                <input type="date" placeholder=".000 ₫" class="form-control" id="cost"
                                    name="start_date">
                            </div>
                        </div>
                    </div>

                    <hr class="mb-7 mt-0">

                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fs-6 fw-500">5. Ngày kết thúc</h6>
                        </div>
                        <div class="col-md-9">
                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="brand-name">Ngày kết thúc
                                    khuyến mãi</label>
                                <input type="date" placeholder=".000 ₫" class="form-control" id="cost"
                                    name="end_date">
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
