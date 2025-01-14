@extends('backend.layouts.app')

@section('title', 'Profile Details')

@push('styles')
    <style>
        .profile-img {
            border-radius: 50%;
        }
    </style>
@endpush

@section('dashboardcontent')
    <!-- Profile Details Section Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">User Profile Details</h6>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="text-center">
                                @if ($user->profile_image)
                                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="profile-img img-fluid" width="150" height="150">
                                @else
                                    <img src="https://via.placeholder.com/150" alt="Profile Image" class="profile-img img-fluid">
                                @endif
                            </div>
                        </div>

                        <div class="col-md-8">
                            <!-- User Info -->
                            <table class="table table-striped">
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $user->firstname }}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{ $user->lastname }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{ $user->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td>{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td>{{ $user->role == 'employee' ? $user->designation : $user->role }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $user->status }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ url('/edit/' . $user->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i> Edit Profile
                        </a>
                        
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-sm btn-primary m-2"><i class="fa fa-trash me-2"></i> Delete Profile</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Details Section End -->
@endsection
