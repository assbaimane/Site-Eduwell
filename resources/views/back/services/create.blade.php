@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container pt-5'>
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
        <div class="pt-4 pb-4">
            <h2>Les icônes disponibles</h2>
            <div class="row justify-content-center align-items-center mx-auto my-auto">
                <div class="col-3">Icône 1 <img src="{{ asset('images/service-icon-01.png') }}"/></div>
                <div class="col-3">Icône 2 <img src="{{ asset('images/service-icon-02.png') }}"/></div>
                <div class="col-3">Icône 3 <img src="{{ asset('images/service-icon-03.png') }}"/></div>
                <div class="col-3">Icône 4 <img src="{{ asset('images/service-icon-04.png') }}"/></div>
            </div>
        </div>
        <form action='{{ route('service.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>Nom</label>
                <input type='text' name='nom'>
            </div>
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
                <label for=''>Description</label>
                <input type='text' name='description'>
            </div>
            <button class='m-1 btn btn-create' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
