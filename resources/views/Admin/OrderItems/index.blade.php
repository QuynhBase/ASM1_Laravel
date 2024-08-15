@extends('Admin.Layouts.master')

@section('content')
        <div class="row mb-9 align-items-center justify-content-between">
            <div class="col-sm-6 mb-8 mb-sm-0">
                <h2 class="fs-4 mb-0">Danh sách đơn hàng</h2>
                <p class="mb-0">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-sm-6 col-md-3 d-flex flex-wrap justify-content-sm-end">
                <input class="form-control border-primary w-100" type="text" placeholder="Search Categories">
            </div>
        </div>
        <div class="card mb-4 rounded-4 p-7">
            <div class="card-header bg-transparent px-0 pt-0 pb-7">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4 col-12 mr-auto mb-md-0 mb-6">
                        <input type="text" placeholder="Search..." class="form-control bg-input border-0">
                    </div>
                    <div class="col-md-8">
                        <div class=" row justify-content-end flex-nowrap d-flex">
                            <div class="col-lg-3 col-md-6 col-6">
                                <select class="form-select">
                                    <option>Status</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                    <option>Show all</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <select class="form-select">
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-7 pb-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle table-nowrap mb-0 table-borderless">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle" scope="col">ID
                                </th>
                                <th class="align-middle" scope="col">Tên
                                </th>
                                <th class="align-middle" scope="col">Email
                                </th>
                                <th class="align-middle" scope="col">Tổng giá
                                </th>
                                <th class="align-middle" scope="col">Trạng thái
                                </th>
                                <th class="align-middle" scope="col">Ngày
                                </th>
                                <th class="align-middle text-center" scope="col">Hành động
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                
                            
                            <tr>
                                <td><a href="#">{{$item->id}}</a></td>
                                <td class="text-body-emphasis">{{$item->user_name}}</td>
                                <td>{{$item->user_email}}</td>
                                <td>{{$item->total_price}}</td>
                                <td>
                                    <span
                                        class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">{{$item->order_status}}</span>
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td class="text-center">
                                    <div class="d-flex flex-nowrap justify-content-center">
                                        <a href="{{route('admin.orderItems.show', $item)}}"
                                            class="btn btn-primary py-4 fs-13px btn-xs me-4">Chi tiết</a>
                                        {{-- <div class="dropdown no-caret">
                                            <a href="#" data-bs-toggle="dropdown"
                                                class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
                                                <i class="far fa-ellipsis-h"></i> </a>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a class="dropdown-item" href="order-detail.html">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> --}}
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
