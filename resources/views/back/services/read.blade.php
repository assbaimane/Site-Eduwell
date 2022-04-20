@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1 class='py-5'>Service</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Icone</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
                    <td>{{ $service->icone }}</td>
                    <td>{{ $service->nom }}</td>
                    <td>{{ $service->description }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn m-1 btn-read' href='{{ route('service.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
