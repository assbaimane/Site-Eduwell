@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Footers</h1>
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
                <label for=''>copyright</label>
                <input type='text' name='copyright' value='{{ $footer->copyright }}'>
            </div>
            <div>
                <label for=''>designed</label>
                <input type='text' name='designed' value='{{ $footer->designed }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
