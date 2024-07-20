@extends('Admin.Layouts.master')

@section('content')
    <div class="row mb-9 align-items-center">
    <div class="col-xxl-6">
    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-sm-6 mb-8 mb-sm-0">
    <h2 class="fs-4 mb-0">Thêm mới danh mục</h2>
    </div>
    <div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
    <a href="{{route('admin.categories.index')}}" class="btn btn-outline-primary me-4">Danh sách</a>
    <button class="btn btn-primary">Thêm</button>

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
    <h6 class="fs-6 fw-500">1. Danh mục</h6>
    </div>
    <div class="col-md-9">
    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Id</label>
    <input type="text" name="id" placeholder="ID" class="form-control" id="product-title" disabled>
    </div>
    <div class="mb-7">
    <label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="description">Tên</label>
    <input class="form-control" name="name" placeholder="Nhập tên danh mục">
    </div>
    </div>
    </div>
    <hr class="mb-7 mt-0">
    </div>
    </div>
    </div>
    </div>
    </form>
    
@endsection