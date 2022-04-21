@extends('components.sidebar')
@section('content')
<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <div class='container'>
        <h1 class='py-5'>Bannière</h1>
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
                    <th scope='col'>Bouton</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
                        <td>{{ $banner->bouton }}</td>
                        <td><img height="60px" src={{ $banner->image }}></image></td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn m-1 btn-edit' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
