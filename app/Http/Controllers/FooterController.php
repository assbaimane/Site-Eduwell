<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role']);
    }

    public function index()
    {
        $footers = Footer::all();
        return view("/back/footers/all",compact("footers"));
    }
    public function edit($id)
    {
        $footer = Footer::find($id);
        return view("/back/footers/edit",compact("footer"));
    }
    public function update($id, Request $request)
    {
        $footer = Footer::find($id);
        $request->validate([
         'copyright'=> 'required',
         'designed'=> 'required',
        ]); // update_validated_anchor;
        $footer->copyright = $request->copyright;
        $footer->designed = $request->designed;
        $footer->save(); // update_anchor
        return redirect()->route("footer.index")->with('message', "Successful update !");
    }
}
