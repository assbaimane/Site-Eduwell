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
        <form action='{{ route('service.store') }}' method='post'>
            @csrf
            <div>
                <label for='icons'>Icone</label>
                <select name="icons" id="icons">
                    <option value="{{ asset('images/service-icon-01.png') }}">Icone 1</option>
                    <option value="{{ asset('images/service-icon-02.png') }}">Icone 2</option>
                    <option value="{{ asset('images/service-icon-03.png') }}">Icone 3</option>
                    <option value="{{ asset('images/service-icon-04.png') }}">Icone 4</option>
                </select>
            </div>
            <div>
                <label for=''>Nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>Description</label>
                <input type='text' name='description'>
            </div>
            <button class='m-1 btn btn-create' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
