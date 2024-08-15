@extends('client.layouts.master')

@section('content')
    <section class="pb-lg-20 pb-16">
        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body"
                            href="{{ route('client.home') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Đăng ký
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class=" text-center pt-13 mb-12 mb-lg-15">
                <div class="text-center">
                    <h2 class="fs-36px mb-11 mb-lg-14">Đăng ký</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 mx-auto">
                <form class action="{{ route('client.register') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="first_name" class="visually-hidden">name</label>
                        <input name="name" id="first_name" type="text" class="form-control"
                            placeholder="Tên đăng nhập" >
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="visually-hidden">Email address</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="Email của bạn"
                            >
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-7">
                        <label for="password" class="visually-hidden">password</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Mật khẩu"
                            >
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-7">
                        <label for="password" class="visually-hidden"> nhập lại password</label>
                        <input name="password_confirmation" id="password" type="password" class="form-control"
                            placeholder="Nhập lại mật khẩu" >
                    </div>

                    <div class="form-check mb-7">
                        <input name="agree" type="checkbox" class="form-check-input rounded-0" id="agree_terms">
                        <label class="form-check-label text-secondary" for="agree_terms">
                            Có, tôi đồng ý với <a href="#" class="text-decoration-underline">Chính sách bảo mật</a>
                            và <a href="#" class="text-decoration-underline">Điều khoản sử dụng của Grace</a>
                        </label>
                    </div>
                    <button type="submit" value="Login" class="btn btn-primary w-100">Đăng ký</button>
                    <div class="border-bottom mt-10"></div>
                    <div class="text-center mt-n4 lh-1 mb-7">
                        <span class="fs-14 bg-body lh-1 px-4">hoặc Đăng ký với</span>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-primary w-100 px-2 font-weight-500 me-5"><i
                                class="fab fa-facebook-f me-4" style="color: #2E58B2"></i>Facebook</a>
                        <a href="#" class="btn btn-outline-primary w-100 px-2 font-weight-500 mt-0"><i
                                class="fab fa-google me-4" style="color: #DD4B39"></i>Google</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
