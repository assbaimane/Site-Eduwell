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
        <form action='{{ route('testimonial.update' , $testimonial->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>avis</label>
                <input type='text' name='avis' value='{{ $testimonial->avis }}'>
            </div>
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $testimonial->nom }}'>
            </div>
            <div>
                <label for=''>position</label>
                <input type='text' name='position' value='{{ $testimonial->position }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
