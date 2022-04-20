@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1>Service</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('service.update' , $service->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Icone</label>
                <select name="icons" id="icons">
                    <option value='{{ $service->icone }}'>-</option>
                    <option value="{{ asset('images/service-icon-01.png') }}">Icone 1</option>
                    <option value="{{ asset('images/service-icon-02.png') }}">Icone 2</option>
                    <option value="{{ asset('images/service-icon-03.png') }}">Icone 3</option>
                    <option value="{{ asset('images/service-icon-04.png') }}">Icone 4</option>
                </select>
            </div>
            <div>
                <label for=''>Nom</label>
                <input type='text' name='nom' value='{{ $service->nom }}'>
            </div>
            <div>
                <label for=''>Description</label>
                <input type='text' name='description' value='{{ $service->description }}'>
            </div>
            <button class='m-1 btn btn-edit' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
