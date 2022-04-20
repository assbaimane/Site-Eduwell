@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1 class='py-5'>Testimonial</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Avis</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Position</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonial->id }}</th>
                    <td>{{ $testimonial->avis }}</td>
                    <td>{{ $testimonial->nom }}</td>
                    <td>{{ $testimonial->position }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn m-1 btn-read' href='{{ route('testimonial.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
