@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1>Footer</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('footer.update' , $footer->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Copyright</label>
                <input type='text' name='copyright' value='{{ $footer->copyright }}'>
            </div>
            <div>
                <label for=''>Designed by</label>
                <input type='text' name='designed' value='{{ $footer->designed }}'>
            </div>
            <button class='btn btn-edit' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
