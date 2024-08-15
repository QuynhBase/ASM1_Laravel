<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    const PATH_VIEW = 'admin.banners.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Banner::query()->latest('id')->paginate(10);
        return view(self::PATH_VIEW.__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(self::PATH_VIEW.__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        //
        $data = $request->except('image_path');
        if($request->hasFile('image_path')){
            $data['image_path'] = Storage::put('banners', $request->file('image_path'));
        }
        Banner::query()->create($data);
        return redirect()->route('admin.banners.index')->with('message', "Thêm mới banner thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
        return view(self::PATH_VIEW.__FUNCTION__, compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        //
        $data = $request->except('image_path');
        if($request->hasFile('image_path')){
            $data['image_path'] = Storage::put('banners', $request->file('image_path'));
        }
        $banner->create($data);
        return redirect()->route('admin.banners.index')->with('message', "Cập nhật banner thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        return back()->with('message', "Xóa banner thành công");
    
    }
}
