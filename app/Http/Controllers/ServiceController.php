<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }
    public function create()
    {
        return view("/back/services/create");
    }
    public function store(Request $request)
    {
        $this ->authorize('create');
        $service = new Service;
        $request->validate([
         'icone'=> 'required',
         'nom'=> 'required',
         'description'=> 'required',
        ]); // store_validated_anchor;
        $service->icone = $request->icone;
        $service->nom = $request->nom;
        $service->description = $request->description;
        $service->save(); // store_anchor
        return redirect()->route("service.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $service = Service::find($id);
        return view("/back/services/read",compact("service"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view("/back/services/edit",compact("service"));
    }
    public function update($id, Request $request)
    {
        $this ->authorize('update');
        $service = Service::find($id);
        $request->validate([
         'icone'=> 'required',
         'nom'=> 'required',
         'description'=> 'required',
        ]); // update_validated_anchor;
        $service->icone = $request->icone;
        $service->nom = $request->nom;
        $service->description = $request->description;
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $this->authorize('delete');
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
