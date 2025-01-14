@extends('backend.layouts.app')

@section('title', 'Inquiry Details')

@section('dashboardcontent')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Inquiry Details</h6>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <td>{{ $inquiry->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $inquiry->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $inquiry->email }}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{ $inquiry->subject }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ $inquiry->message }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
