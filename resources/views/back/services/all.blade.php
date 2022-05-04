@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1 class='py-5'>Service</h1>
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
        @if (User::Class->role_id === 1 || User::Class->role_id === 3)
            <a class='btn m-1 btn-create' href='{{ route('service.create') }}' role='button'>Create</a>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Icone</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
                        <td>{{ $service->icone }}</td>
                        <td>{{ $service->nom }}</td>
                        <td>{{ $service->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    <button class='btn m-1 btn-delete' type='submit'>Delete</button>
                                </form>
                                <a class='btn m-1 btn-edit' href='{{ route('service.edit', $service->id) }}' role='button'>Edit</a>
                                <a class='btn m-1 btn-read' href='{{ route('service.read', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
