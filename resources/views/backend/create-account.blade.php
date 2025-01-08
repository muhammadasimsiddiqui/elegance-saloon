


@extends('backend.layouts.app')

@section('title', content: 'blank')

@push('styles')
<style>
    /* Set the dimensions of the FilePond container */
.filepond--root {
    width: 150px !important; /* Force the width */
    height: 150px !important; /* Force the height */
}

/* Adjust the preview size */
.filepond--item-panel {
    width: 150px !important; /* Match the width */
    height: 150px !important; /* Match the height */
}

/* Ensure the preview image scales properly */
.filepond--image-preview-wrapper {
    width: 100% !important;
    height: 100% !important;
}
.filepond--credits{
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
                            <form>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" 
                                        id="filepond"
                                        name="filepond"
                                        accept="image/png, image/jpeg, image/gif"/>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="name">
                                            <label for="floatingInput">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="name">
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="phone number">
                                            <label for="floatingInput">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput"
                                                placeholder="phone number">
                                            <label for="floatingInput">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Address">
                                            <label for="floatingInput">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="roleSelect" aria-label="Floating label select example">
                                                <option selected disabled>Role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Employee</option>
                                                <option value="3">Customer</option>
                                            </select>
                                            <label for="roleSelect">Please Select Role</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6" id="designationDiv" style="display: none;">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="designationSelect" aria-label="Floating label select example">
                                                <option selected disabled>Designation</option>
                                                <option value="4">Stylist</option>
                                                <option value="3">Receptionist</option>
                                                <option value="2">Other</option>
                                            </select>
                                            <label for="designationSelect">Please Select Designation</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Username">
                                            <label for="floatingInput">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                         
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>            
            <script>
                document.getElementById('roleSelect').addEventListener('change', function () {
                    const designationDiv = document.getElementById('designationDiv');
                    if (this.value == '2') { // Check if "Employee" is selected
                        designationDiv.style.display = 'block';
                    } else {
                        designationDiv.style.display = 'none';
                    }
                });
            </script>
       
       
    
    
       
@endsection

@push('scripts')
    <!-- Initialize FilePond -->
 <script>
   
    // Register FilePond plugins
    FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImageEdit
);

    const inputElement = document.querySelector('input#filepond');

if (inputElement) {
    // Create a FilePond instance with specified dimensions
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
    });
} else {
    console.error('Input element not found!');
}
</script>
@endpush