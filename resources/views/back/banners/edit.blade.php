@extends('components.sidebar')
@section('content')
    <div class='container'>
        <h1>Banners</h1>
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
                <label for=''>bouton</label>
                <input type='text' name='bouton' value='{{ $banner->bouton }}'>
            </div>
            <div>
                <label for=''>image</label>
                <input type='text' name='image' value='{{ $banner->image }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
