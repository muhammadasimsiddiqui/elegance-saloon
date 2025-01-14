@extends('backend.layouts.app')

@section('title', 'Edit User')

@push('styles')
    <style>
        /* FilePond styles */
        .filepond--root {
            width: 150px !important;
            height: 150px !important;
        }

        .filepond--item-panel {
            width: 150px !important;
            height: 150px !important;
        }

        .filepond--image-preview-wrapper {
            width: 100% !important;
            height: 100% !important;
        }

        .filepond--credits {
            display: none !important;
        }
    </style>
@endpush

@section('dashboardcontent')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit User</h6>
                <form action="{{ route('update.user', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/gif" />
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    value="{{ $user->firstname }}" required>
                                <label for="firstname">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    value="{{ $user->lastname }}" required>
                                <label for="lastname">Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber"
                                    value="{{ $user->phone_number }}" required>
                                <label for="phoneNumber">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email }}" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $user->address }}"/>
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="role" name="role" required>
                                    <option value="" disabled>Role</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="employee" {{ $user->role == 'employee' ? 'selected' : '' }}>Employee</option>
                                    <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Customer</option>
                                </select>
                                <label for="role">Role</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6" id="designationfield">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="designation" name="designation">
                                    <option value="" disabled>Designation</option>
                                    <option value="stylist" {{ $user->designation == 'stylist' ? 'selected' : '' }}>Stylist</option>
                                    <option value="receptionist" {{ $user->designation == 'receptionist' ? 'selected' : '' }}>Receptionist</option>
                                    <option value="other" {{ $user->designation == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <label for="designation">Designation</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ $user->username }}" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="password">Password (Leave blank to keep current password)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Show/hide designation field based on role selection
        document.getElementById('role').addEventListener('change', function() {
            const designationDiv = document.getElementById('designationfield');
            const role = this.value;
            const designationSelect = document.getElementById('designation');

            // Show or hide the designation field based on the selected role
            if (role === 'employee') {
                designationDiv.style.display = 'block';
                designationSelect.setAttribute('required', 'required');
            } else {
                designationDiv.style.display = 'none';
                designationSelect.removeAttribute('required');
            }
        });

        // Ensure the correct designation field is shown when the page loads based on the user role
        window.onload = function() {
            const roleSelect = document.getElementById('role');
            roleSelect.dispatchEvent(new Event('change'));  // Trigger change to show/hide designation
        }
    </script>
@endpush
