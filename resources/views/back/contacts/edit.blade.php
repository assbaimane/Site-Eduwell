@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Contacts</h1>
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
                <label for=''>map</label>
                <input type='text' name='map' value='{{ $contact->map }}'>
            </div>
            <div>
                <label for=''>contact1</label>
                <input type='text' name='contact1' value='{{ $contact->contact1 }}'>
            </div>
            <div>
                <label for=''>value-contact1</label>
                <input type='text' name='value-contact1' value='{{ $contact->value-contact1 }}'>
            </div>
            <div>
                <label for=''>icone1</label>
                <input type='text' name='icone1' value='{{ $contact->icone1 }}'>
            </div>
            <div>
                <label for=''>contact2</label>
                <input type='text' name='contact2' value='{{ $contact->contact2 }}'>
            </div>
            <div>
                <label for=''>value-contact2</label>
                <input type='text' name='value-contact2' value='{{ $contact->value-contact2 }}'>
            </div>
            <div>
                <label for=''>icone2</label>
                <input type='text' name='icone2' value='{{ $contact->icone2 }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
