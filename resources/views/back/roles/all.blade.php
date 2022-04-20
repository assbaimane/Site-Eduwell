@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1 class='py-5'>Roles</h1>
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
        <a class='btn m-1 btn-create' href='{{ route('role.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th scope='row'>{{ $role->id }}</th>
                        <td>{{ $role->nom }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('role.destroy', $role->id) }}' method='post'>
                                    @csrf
                                    <button class='btn m-1 btn-delete' type='submit'>Delete</button>
                                </form>
                                <a class='btn m-1 btn-edit' href='{{ route('role.edit', $role->id) }}' role='button'>Edit</a>
                                <a class='btn m-1 btn-read' href='{{ route('role.read', $role->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
