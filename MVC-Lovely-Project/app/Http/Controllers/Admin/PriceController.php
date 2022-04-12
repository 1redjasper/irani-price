<?php

namespace App\Http\Controllers\Admin;

use App\Price;
use App\Picture;
use App\Http\Requests\Admin\PriceRequest;
use App\Http\Requests\Admin\PictureRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;



class PriceController extends AdminController
{

    public function index()
    {
        $objects = Price::all();
        return view('admin.price.index', compact('objects'));
    }

    public function create()
    {
        // $categories = Category::all();
        return view('admin.price.create');
    }

    public function store()
    {
        $request = new PriceRequest();
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $inputs['view'] = 0;
        $path = 'images/price/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 532);
        Price::create($inputs);
        return redirect("admin/price");
    }

    public function edit($id)
    {
        $object = Price::find($id);
        // $categories = Category::all();
        return view("admin.price.edit", compact('object'));
    }

    public function update($id)
    {
        $request = new PriceRequest();
        $inputs = $request->all();
        $inputs['id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $file = $request->file('image');
        if (!empty($file['tmp_name'])) {
            $path = 'images/ads/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 532);
        }
        Price::update($inputs);
        return redirect("admin/price");
    }

    public function destroy($id)
    {
        Price::delete($id);
        return back();
    }

    public function gallery($id)
    {
        $object = Price::find($id);
        $pictures = Picture::where('object_id', $id)->get();
        return view("admin.price.gallery", compact('object', 'pictures'));
    }

    public function storeGalleryImage($id)
    {
        $request = new PictureRequest();
        $inputs = [];
        $inputs['object_id'] = $id;
        $path = 'images/gallery/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 730, 400);
        Picture::create($inputs);
        return back();
    }

    public function deleteGalleryImage($pic_id)
    {
        Picture::delete($pic_id);
        return back();
    }
}