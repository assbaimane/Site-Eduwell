<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
         'bouton'=> 'required',
         'image'=> 'required',
        ]); // update_validated_anchor;
        $banner->bouton = $request->bouton;
        $banner->image = $request->image;
        $request -> file('image')->storePublicly('img','public');
        $banner->save(); // update_anchor
        return redirect()->route("banner.index")->with('message', "Successful update !");
    }
}
