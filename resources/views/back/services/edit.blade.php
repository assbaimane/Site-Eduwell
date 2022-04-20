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
                <input type='text' name='icone' value='{{ $service->icone }}'>
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
