<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\confirm;

class RegisterController extends Controller
{
    //
    public function index(){
        // Hiển thị view trang đăng ký 

        // dd('Trang ');
        return view('auth.register');
    }

    public function register(Request $request){
        // Xử lý logic đằng ký

        // dd($request->all());

        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:100', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8', 'string' ]
        ]);

        // Tạo user mới
        $user = User::query()->create($data);
        // Login với user vừa tạo
        Auth::login($user);
        // gen lại token cho user vừa đang nhập
        $request->session()->regenerate();

        // quay lại trang phía trước
        return redirect()->intended('client');
    }

}
