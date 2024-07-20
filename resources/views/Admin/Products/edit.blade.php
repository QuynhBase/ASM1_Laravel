@extends('Admin.Layouts.master')

@section('content')
<div class="row mb-9 align-items-center">
    <form action="{{route('admin.products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="col-xxl-6">
    <div class="row">
    <div class="col-sm-6 mb-8 mb-sm-0">
    <h2 class="fs-4 mb-0">Cập nhật sản phẩm</h2>
    </div>

    <div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
    <a href="{{route('admin.products.index')}}" class="btn btn-outline-primary me-4">Danh mục</a>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
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
    <input type="text" placeholder="79" class="form-control" id="product-title" value="{{$product->id}}" disabled>
    </div>

    <div class="mb-7">
        <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase">Ảnh sản phẩm</label>
        <input class="form-control" type="file" name="image">
        @if (!empty($product->image))
            <div style="width: 60px; height: 80px;">
                <img src="{{Storage::url($product->image)}}" style="max-width: 60px; max-height: 80px;"  alt="">
            </div>
            
        @endif
    </div>

    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Tên sản phẩm</label>
    <input type="text" placeholder="Nhập tên sản phẩm" class="form-control" id="product-title" name="name" value="{{$product->name}}">
    </div>
    </div>
    </div>

    <hr class="mb-7 mt-0">

    <div class="row">
    <div class="col-md-3">
    <h6 class="fs-6 fw-500">2. Giá cả</h6>
    </div>
    <div class="col-md-9">
    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="cost">Giá sản phẩm</label>
    <input type="text" placeholder=".000 ₫" class="form-control" id="cost" name="price" value="{{$product->price}}">
    </div>
    </div>
    </div>

    <hr class="mb-7 mt-0">

    <div class="row">
    <div class="col-md-3">
    <h6 class="fs-6 fw-500">3. Danh mục</h6>
    </div>
    <div class="col-md-9">
    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="brand-name">Danh mục sản phẩm</label>
    <select class="form-select" id="category_id" name="category_id">
        @foreach ($categories as $id => $name)
            <option value="{{$id}}" @selected($id == $product->category_id)>{{$name}}</option>
        @endforeach
    </select>
    </div>
    </div>
    </div>

    <hr class="mb-7 mt-0">

    <div class="row">
    <div class="col-md-3">
    <h6 class="fs-6 fw-500">4. Mô tả</h6>
    </div>
    <div class="col-md-9">
    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="description">Mô tả sản phẩm</label>
    <textarea placeholder="Mô tả" class="form-control" rows="4" id="description" name="description">{{$product->description}}</textarea>
    </div>
    </div>
    </div>

    <hr class="mb-7 mt-0">

    <div class="row">
    <div class="col-md-3">
    <h6 class="fs-6 fw-500">5. Số lượng</h6>
    </div>
    <div class="col-md-9">
    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="description">Số lượng sản phẩm</label>
    <input type="text" placeholder="Nhập số lượng" class="form-control" id="cost" name="quantity" value="{{$product->quantity}}">
    </div>
    </div>
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
@endsection