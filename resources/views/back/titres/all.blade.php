@extends('components.sidebar')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Titres</h1>
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
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Titre</th>
                    <th scope='col'>Soustitre</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($titres as $titre)
                    <tr>
                        <th scope='row'>{{ $titre->id }}</th>
                        <td>{{ $titre->titre }}</td>
                        <td>{{ $titre->soustitre }}</td>
                        <td>{{ $titre->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('titre.edit', $titre->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
