@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1>Testimonial</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('testimonial.update' , $testimonial->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Avis</label>
                <input type='text' name='avis' value='{{ $testimonial->avis }}'>
            </div>
            <div>
                <label for=''>Nom</label>
                <input type='text' name='nom' value='{{ $testimonial->nom }}'>
            </div>
            <div>
                <label for=''>Position</label>
                <input type='text' name='position' value='{{ $testimonial->position }}'>
            </div>
            <button class='m-1 btn btn-edit' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
