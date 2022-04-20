@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1>Bannière</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('banner.update' , $banner->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Bouton</label>
                <input type='text' name='bouton' value='{{ $banner->bouton }}'>
            </div>
            <div>
                <label for=''>Image</label>
                <input type='text' name='image' value='{{ $banner->image }}'>
            </div>
            <button class='m-1 btn-edit'> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
