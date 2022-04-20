@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1>Contact</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('contact.update' , $contact->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Map</label>
                <input type='text' name='map' value='{{ $contact->map }}'>
            </div>
            <div>
                <label for=''>Contact 1</label>
                <input type='text' name='contact1' value='{{ $contact->contact1 }}'>
            </div>
            <div>
                <label for=''>Valeur contact 1</label>
                <input type='text' name='valuecontact1' value='{{ $contact->valuecontact1 }}'>
            </div>
            <div>
                <label for=''>Icone 1</label>
                <input type='text' name='icone1' value='{{ $contact->icone1 }}'>
            </div>
            <div>
                <label for=''>Contact 2</label>
                <input type='text' name='contact2' value='{{ $contact->contact2 }}'>
            </div>
            <div>
                <label for=''>Valeur contact 2</label>
                <input type='text' name='valuecontact2' value='{{ $contact->valuecontact2 }}'>
            </div>
            <div>
                <label for=''>Icone 2</label>
                <input type='text' name='icone2' value='{{ $contact->icone2 }}'>
            </div>
            <button class='m-1 btn btn-edit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
