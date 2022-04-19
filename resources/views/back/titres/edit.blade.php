@extends('components.sidebar')
@section('content')
    <div class='container'>
        <h1>Titres</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('titre.update' , $titre->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Titre</label>
                <input type='text' name='titre' value='{{ $titre->titre }}'>
            </div>
            <div>
                <label for=''>Soustitre</label>
                <input type='text' name='soustitre' value='{{ $titre->soustitre }}'>
            </div>
            <div>
                <label for=''>Description</label>
                <input type='text' name='description' value='{{ $titre->description }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
