@extends('Admin.Layouts.master')

@section('content')
    <div class="row mb-9 align-items-center">
        <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-xxl-6">
                <div class="row">
                    <div class="col-sm-6 mb-8 mb-sm-0">
                        <h2 class="fs-4 mb-0">Cập nhật banner</h2>
                    </div>
                    <div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
                        <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-primary me-4">Danh sách</a>
                        <button type="submit" class="btn btn-primary">C.nhật</button>
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
                                <input type="text" placeholder="79" class="form-control" id="product-title"
                                    value="{{ $banner->id }}" disabled>
                            </div>


                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Tiêu
                                    đề</label>
                                <input type="text" placeholder="Nhập tiêu đề" class="form-control" id="product-title"
                                    name="title" value="{{ $banner->title }}">
                            </div>
                            <div class="mb-7">
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase">Ảnh banner</label>
                                <input class="form-control" type="file" name="image_path">
                                @if (!empty($banner->image_path))
                                    <div style="width: 60px; height: 80px;">
                                        <img src="{{ Storage::url($banner->image_path) }}"
                                            style="max-width: 60px; max-height: 80px;" alt="">
                                    </div>
                                @endif
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
                                <textarea placeholder="Mô tả" class="form-control" rows="4" id="description" name="description">{{$banner->description}}</textarea>
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
                                <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="cost">Ngày Tạo banner</label>
                                <input type="date" placeholder="" class="form-control" id="cost"
                                    name="start_date" value="{{$banner->start_date}}">
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
                                    banner</label>
                                <input type="date" placeholder="" class="form-control" id="cost"
                                    name="end_date" value="{{$banner->end_date}}">
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
