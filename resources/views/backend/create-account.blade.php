@extends('backend.layouts.app')

@section('title', content: 'Create Account')

@push('styles')
    <style>
        /* Set the dimensions of the FilePond container */
        .filepond--root {
            width: 150px !important;
            /* Force the width */
            height: 150px !important;
            /* Force the height */
        }

        /* Adjust the preview size */
        .filepond--item-panel {
            width: 150px !important;
            /* Match the width */
            height: 150px !important;
            /* Match the height */
        }

        /* Ensure the preview image scales properly */
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

    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Create a Account</h6>
                <form action="/registerUser" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/gif" />
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="First Name" id="firstname"
                                    name="firstname" required>
                                <label for="firstname">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="name" id="lastname" name="lastname"
                                    required>
                                <label for="lastname">Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="phone number" id="phoneNumber"
                                    name="phoneNumber" required>
                                <label for="phoneNumber">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" placeholder="phone number" id="email"
                                    name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Address" id="address"
                                    name="address">
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="role" id="role" name="role" required>
                                    <option value="" selected disabled>Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Employee</option>
                                    <option value="3">Customer</option>
                                </select>
                                <label for="role">Please Select Role</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6" id="designationDiv" style="display: none;">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="designation" name="designation" aria-label="designation">
                                    <option value="" selected disabled>Designation</option>
                                    <option value="stylist">Stylist</option>
                                    <option value="receptionist">Receptionist</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="designation">Please Select Designation</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Username" id="username"
                                    name="username" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" placeholder="Password" id="password"
                                    name="password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>






@endsection

@push('scripts')
    <script>
        document.getElementById('role').addEventListener('change', function() {
            const designationDiv = document.getElementById('designationDiv');
            const designationSelect = document.getElementById('designation');

            if (this.value == '2') {
                designationDiv.style.display = 'block'; // Show Designation dropdown
                designationSelect.setAttribute('required', ''); // Make designation required
            } else {
                designationDiv.style.display = 'none'; // Hide Designation dropdown
                designationSelect.removeAttribute('required'); // Remove required validation
            }
        });
    </script>
    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            const select = document.getElementById("role");
            if (!select.value) {
                event.preventDefault(); // Prevent form submission
                alert("Please select a role.");
            }
        });
    </script>
    <!-- Initialize FilePond -->

    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImageEdit
        );

        const inputElement = document.querySelector('input#image');
        if (inputElement) {
            FilePond.create(inputElement, {
                labelIdle: `<span class="filepond--label-action">Upload Profile Picture</span>`,
                imagePreviewHeight: 200,
                imageCropAspectRatio: '1:1',
                imageResizeTargetWidth: 200,
                imageResizeTargetHeight: 200,
                stylePanelLayout: 'compact circle',
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'center bottom',
                styleButtonProcessItemPosition: 'left bottom',
                server: {
                    process: {
                        url: '/registerUser', // The URL where the file will be uploaded
                        method: 'POST',
                        onload: (response) => {
                            // Handle success response
                            console.log('File uploaded successfully');
                        },
                        onerror: (response) => {
                            // Handle error
                            console.log('Error uploading file');
                        },
                    },
                    revert: '/revert', // URL to handle file revert (delete)
                },
            });
        }
    </script>
@endpush
