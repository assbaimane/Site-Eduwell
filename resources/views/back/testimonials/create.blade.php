@extends('components.sidebar')
@section('content')
    <div class='container'>
        <h1>Testimonials</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('testimonial.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>avis</label>
                <input type='text' name='avis'>
            </div>
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>position</label>
                <input type='text' name='position'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
