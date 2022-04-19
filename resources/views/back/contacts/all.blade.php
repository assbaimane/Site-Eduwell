@extends('components.sidebar')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Contacts</h1>
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
                    <th scope='col'>map</th>
                    <th scope='col'>contact1</th>
                    <th scope='col'>valuecontact1</th>
                    <th scope='col'>icone1</th>
                    <th scope='col'>contact2</th>
                    <th scope='col'>valuecontact2</th>
                    <th scope='col'>icone2</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope='row'>{{ $contact->id }}</th>
                        <td>{{ $contact->map }}</td>
                        <td>{{ $contact->contact1 }}</td>
                        <td>{{ $contact->valuecontact1 }}</td>
                        <td>{{ $contact->icone1 }}</td>
                        <td>{{ $contact->contact2 }}</td>
                        <td>{{ $contact->valuecontact2 }}</td>
                        <td>{{ $contact->icone2 }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('contact.edit', $contact->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
