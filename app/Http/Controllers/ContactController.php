<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
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
         'value-contact1'=> 'required',
         'icone1'=> 'required',
         'contact2'=> 'required',
         'value-contact2'=> 'required',
         'icone2'=> 'required',
        ]); // update_validated_anchor;
        $contact->map = $request->map;
        $contact->contact1 = $request->contact1;
        $contact->value-contact1 = $request->value-contact1;
        $contact->icone1 = $request->icone1;
        $contact->contact2 = $request->contact2;
        $contact->value-contact2 = $request->value-contact2;
        $contact->icone2 = $request->icone2;
        $contact->save(); // update_anchor
        return redirect()->route("contact.index")->with('message', "Successful update !");
    }
}
