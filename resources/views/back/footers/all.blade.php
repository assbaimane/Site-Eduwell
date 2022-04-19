@extends('components.sidebar')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Footers</h1>
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
                    <th scope='col'>copyright</th>
                    <th scope='col'>designed</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($footers as $footer)
                    <tr>
                        <th scope='row'>{{ $footer->id }}</th>
                        <td>{{ $footer->copyright }}</td>
                        <td>{{ $footer->designed }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('footer.edit', $footer->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
