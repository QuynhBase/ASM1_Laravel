@extends('Admin.Layouts.master')

@section('content')
<div class="row mb-9 align-items-center justify-content-between">
    <div class="col-md-6 mb-8 mb-md-0">
    <h2 class="fs-4 mb-0">Danh sách sản phẩm</h2>
    <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="col-md-6 d-flex flex-wrap justify-content-md-end">
    {{-- <a href="#" class="btn btn-outline-primary btn-hover-bg-primary me-4">
    Export
    </a>
    <a href="#" class="btn btn-outline-primary btn-hover-bg-primary me-4">
    Import
    </a> --}}
    <a href="{{route('admin.products.create')}}" class="btn btn-primary">
    Thêm mới
    </a>
    </div>
    </div>
    <div class="card mb-4 rounded-4 p-7">
    <div class="card-header bg-transparent px-0 pt-0 pb-7">
    <div class="row align-items-center justify-content-between">
    <div class="col-md-4 col-12 mr-auto mb-md-0 mb-6">
    <select class="form-select">
    <option selected data-select2-id="3">All Categories</option>
    <option>Women's Clothing</option>
    <option>Men's Clothing</option>
    <option>Cellphones</option>
    <option>Computer &amp; Office</option>
    <option>Consumer Electronics</option>
    <option>Jewelry &amp; Accessories</option>
    <option>Home &amp; Garden</option>
    <option>Luggage &amp; Bags</option>
    <option>Shoes</option>
    <option>Mother &amp; Kids</option>
    </select>
    </div>
    <div class="col-md-8">
    <div class="row justify-content-end flex-nowrap d-flex">
    <div class="col-lg-4 col-md-6 col-6">
    <input type="date" class="form-control bg-input border-0">
    </div>
    <div class="col-lg-4 col-md-6 col-6">
    <select class="form-select">
    <option>Status</option>
    <option>All</option>
    <option>Paid</option>
    <option>Chargeback</option>
    <option>Refund</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card-body px-0 pt-7 pb-0">
    <div class="table-responsive">

    <table class="table table-hover align-middle table-nowrap mb-0">
    <tbody>

        @if (session('message'))
        <p>{{session('message')}}</p>
        @endif

        @foreach ($data as $item)    
    <tr>
    <td class="text-center">
    <div class="form-check">
    <input class="form-check-input rounded-0 ms-0" type="checkbox" id="transactionCheck-0">
    <label class="form-check-label" for="transactionCheck-0"></label>
    </div>
    </td>

    <td>{{$item->id}}</td>

    <td>
    <div class="d-flex align-items-center flex-nowrap">
    <a href="../shop/product-details-v1.html" title="Flowers cotton dress">
    <img src="{{Storage::url($item->image)}}" data-src="" alt="Flowers cotton dress" class="lazy-image" width="60px" height="80px">
    </a>

    <a href="../shop/product-details-v1.html" title="Flowers cotton dress" class="ms-6">
    <p class="fw-semibold text-body-emphasis mb-0">{{$item->name}}</p>
    </a>
    </div>
    </td>

    <td>{{$item->price}}</td>

    <td>{{$item->category->name}}</td>

    <td style="width: 20%;">{{$item->description}}</td>

    <td>{{$item->quantity}}</td>

    <td class="text-center">
    <div class="d-flex flex-nowrap justify-content-center">
    <a href="{{route('admin.products.show', $item)}}" class="btn btn-primary py-4 px-5 btn-xs fs-13px me-4"><i class="far fa-pen me-2"></i> Xem</a>
    <a href="{{route('admin.products.edit', $item)}}" class="btn btn-primary py-4 px-5 btn-xs fs-13px me-4"><i class="far fa-pen me-2"></i> Sửa</a>
    <form action="{{route('admin.products.destroy', $item)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')" class="btn btn-outline-primary btn-hover-bg-danger btn-hover-border-danger btn-hover-text-light py-4 px-5 fs-13px btn-xs me-4"><i class="far fa-trash me-2"></i>Xóa</button>
    </form>
    </div>
    </td>

    </tr>
    @endforeach
    </tbody>
    </table>

    </div>
    </div>
    </div>
    {{$data->links()}}
@endsection