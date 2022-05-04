<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function create()
    {
        $this ->authorize('create');
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $request->validate([
         'avis'=> 'required',
         'nom'=> 'required',
         'position'=> 'required',
        ]); // store_validated_anchor;
        $testimonial->avis = $request->avis;
        $testimonial->nom = $request->nom;
        $testimonial->position = $request->position;
        $testimonial->save(); // store_anchor
        return redirect()->route("testimonial.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/read",compact("testimonial"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $this ->authorize('update');
        $testimonial = Testimonial::find($id);
        $request->validate([
         'avis'=> 'required',
         'nom'=> 'required',
         'position'=> 'required',
        ]); // update_validated_anchor;
        $testimonial->avis = $request->avis;
        $testimonial->nom = $request->nom;
        $testimonial->position = $request->position;
        $testimonial->save(); // update_anchor
        return redirect()->route("testimonial.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $this ->authorize('delete');
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
