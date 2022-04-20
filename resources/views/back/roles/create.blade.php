@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1>Role</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('role.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>Nom</label>
                <input type='text' name='nom'>
            </div>
            <button class="m-1 btn-create" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
