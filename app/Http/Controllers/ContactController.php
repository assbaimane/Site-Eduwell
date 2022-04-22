<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view("/back/contacts/all",compact("contacts"));
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view("/back/contacts/edit",compact("contact"));
    }
    public function update($id, Request $request)
    {
        $contact = Contact::find($id);
        $request->validate([
         'map'=> 'required',
         'contact1'=> 'required',
         'valuecontact1'=> 'required',
         'icone1'=> 'required',
         'contact2'=> 'required',
         'valuecontact2'=> 'required',
         'icone2'=> 'required',
        ]); // update_validated_anchor;
        $contact->map = $request->map;
        $contact->contact1 = $request->contact1;
        $contact->valuecontact1 = $request->valuecontact1;
        $contact->icone1 = $request->icone1;
        $contact->contact2 = $request->contact2;
        $contact->valuecontact2 = $request->valuecontact2;
        $contact->icone2 = $request->icone2;
        $contact->save(); // update_anchor
        return redirect()->route("contact.index")->with('message', "Successful update !");
    }
}
