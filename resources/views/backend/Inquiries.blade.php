@extends('backend.layouts.app')

@section('title', content: 'Inquiries')

@push('styles')
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col justify-content-center ">Details</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="align-content-center"></th>
                                    <td class="align-content-center"></td>
                                    <td class="align-content-center"></td>
                                    <td class="align-content-center"></td>
                                    <td class="align-content-center" title=""></td>
                                    <td class="align-content-center">
                                        <a href="" class="text-white justify-content-center d-flex"
                                            title="View Profile">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>

                                    <td class="align-content-center"> <a href="" class="btn btn-warning btn-sm"
                                            title="Edit Profile">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td class="align-content-center">
                                        <form action="" method="POST" class="d-inline">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-sm btn-primary" title=""><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->


@endsection


@push('scripts')
@endpush
