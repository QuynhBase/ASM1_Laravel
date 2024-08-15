<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Http\Requests\StorePromotionRequest;
use App\Http\Requests\UpdatePromotionRequest;

class PromotionController extends Controller
{
    const PATH_VIEW = 'Admin.Promotions.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Promotion::query()->paginate(10);
        return view(self::PATH_VIEW. __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(self::PATH_VIEW. __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromotionRequest $request)
    {
        //
        $data = $request->all();
        Promotion::query()->create($data);
        return redirect()->route('admin.promotions.index')->with('message', "Thêm mới thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        //
        return view(self::PATH_VIEW. __FUNCTION__, compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromotionRequest $request, Promotion $promotion)
    {
        //
        $promotion->update($request->all());
        return redirect()->route('admin.promotions.index')->with('message', "Cập nhật sản phẩm thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        //
        $promotion->delete();
        return back()->with('message', "Xóa khuyến mãi thành công");
    }
}
