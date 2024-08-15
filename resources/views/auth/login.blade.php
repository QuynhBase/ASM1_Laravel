@extends('client.layouts.master')

@section('content')
    <section class="pb-lg-20 pb-16">
        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body"
                            href="{{ route('client.home') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Đăng nhập
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class=" text-center pt-13 mb-12 mb-lg-15">
                <div class="text-center">
                    <h2 class="fs-36px mb-11 mb-lg-14">Tài khoản của tôi</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-10 mx-auto">
                    <div class="row no-gutters">
                        <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
                            <h3 class="fs-4 mb-10">Đăng nhập</h3>
                            <form class action="{{ route('client.login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-6">
                                    <label for="user_login_email" class="visually-hidden">Địa chỉ Email</label>
                                    <input type="email" class="form-control" id="user_login_email" name="email"
                                        placeholder="Địa chỉ Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-6">
                                    <label for="user_login_password" class="visually-hidden">Mật khẩu</label>
                                    <input type="password" class="form-control" id="user_login_password"
                                        placeholder="Mật khẩu" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <a href="#" class="d-inline-block fs-15 lh-12 mb-7">Quên mật khẩu?</a>
                                <button type="submit" class="btn btn-primary w-100 mb-7">Đăng nhập</button>
                                <div class="form-check mb-7 d-flex">
                                    <input type="checkbox" class="form-check-input rounded-0" id="customCheck1"
                                        name="remember">
                                    <label class="form-check-label fs-15 ps-4 text-body-emphasis" for="customCheck1">Lưu
                                        đăng nhập.</label>
                                </div>
                                <div class="row no-gutters mx-n5">
                                    <div class="col-sm-6 mb-4 mb-sm-0 px-5">
                                        <a href="#" class="btn btn-outline-primary w-100 px-2 fw-500">
                                            <span class="d-inline-block me-4"><i class="fab fa-facebook-f"></i></span>Đăng
                                            nhập với Facebook</a>
                                    </div>
                                    <div class="col-sm-6 mb-4 mb-sm-0 px-5">
                                        <a href="#" class="btn btn-outline-primary w-100 px-2 fw-500">
                                            <span class="d-inline-block me-4">
                                                <i class="fab fa-google"></i>
                                            </span>Đăng nhập với Google</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 ps-lg-6 ps-xl-12">
                            <h3 class="fs-4 mb-8">Tạo tài khoản mới</h3>
                            <p class="mb-8">Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện
                                quy trình thanh toán
                                nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn hàng trong tài khoản của
                                mình cùng nhiều tính năng khác.</p>
                            <a href="{{ route('client.register') }}" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
