@extends('backend.layouts.app')

@section('title', content: 'table')

@push('styles')
    <style>
    </style>
@endpush

@section('dashboardcontent')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Accounts Details</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    {{-- <th scope="col">Username</th> --}}
                                    {{-- <th scope="col">Number</th> --}}
                                    {{-- <th scope="col">Address</th> --}}
                                    <th scope="col">Desigination</th>
                                    <th scope="col">Status</th>
                                    <th scope="col justify-content-center ">Details</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <th scope="row" class="align-content-center">{{ $index + 1 }}</th>
                                        <td>
                                            @if ($user->profile_image)
                                                <img src="{{ asset('storage/' . $user->profile_image) }}"
                                                    alt="Profile Image" width="50" height="50">
                                            @else
                                                <img src='https://via.placeholder.com/50' alt="Profile Image"
                                                    class="img-fluid">
                                            @endif

                                        </td>
                                        <td class="align-content-center"
                                            title="{{ $user->firstname }}&nbsp;{{ $user->lastname }}">
                                            {{ $user->firstname }}&nbsp;{{ $user->lastname }}
                                        </td>
                                        <td class="align-content-center" title="{{ $user->email }}">{{ $user->email }}
                                        </td>
                                        {{-- <td class="align-content-center">{{ $user->username }}</td> --}}
                                        {{-- <td class="align-content-center">{{ $user->phone_number }}</td> --}}
                                        {{-- <td class="align-content-center">{{ $user->address}}</td> --}}
                                        <td class="align-content-center"
                                            title="@if (strtolower($user->role) == 'employee') {{ $user->designation }}
                                            @else
                                                {{ $user->role }} @endif">
                                            @if (strtolower($user->role) == 'employee')
                                                {{ $user->designation }}
                                            @else
                                                {{ $user->role }}
                                            @endif

                                        </td>
                                        <td class="align-content-center">{{ $user->status }}</td>
                                        <td class="align-content-center">
                                            <a href="{{ url('/user/' . $user->id) }}"
                                                class="text-white justify-content-center d-flex" title="View Profile">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>

                                        <td class="align-content-center"> <a href="{{ url('/edit/' . $user->id) }}"
                                                class="btn btn-warning btn-sm" title="Edit Profile">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td class="align-content-center">
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-sm btn-primary"  title="Remove: {{ $user->firstname }}&nbsp;{{ $user->lastname }}"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->


@endsection
