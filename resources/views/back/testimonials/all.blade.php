@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1 class='py-5'>Testimonial</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn m-1 btn-create' href='{{ route('testimonial.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Avis</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Position</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope='row'>{{ $testimonial->id }}</th>
                        <td>{{ $testimonial->avis }}</td>
                        <td>{{ $testimonial->nom }}</td>
                        <td>{{ $testimonial->position }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                                    @csrf
                                    <button class='btn m-1 btn-delete' type='submit'>Delete</button>
                                </form>
                                <a class='btn m-1 btn-edit' href='{{ route('testimonial.edit', $testimonial->id) }}' role='button'>Edit</a>
                                <a class='btn m-1 btn-read' href='{{ route('testimonial.read', $testimonial->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
