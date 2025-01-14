@extends('backend.layouts.app')

@section('title', 'Inquiries')

@push('styles')
@endpush

@section('dashboardcontent')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Inquiry Details</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inquiries as $inquiry)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $inquiry->name }}</td>
                                <td>{{ $inquiry->email }}</td>
                                <td>{{ $inquiry->subject }}</td>
                                <td>{{ $inquiry->message }}</td>
                                <td class="text-center">
                                                                           <a href="{{ route('inquiries.show', $inquiry->id) }}" class="btn btn-info btn-sm">View</a>

                                                                           <a href="{{ route('inquiries.edit', $inquiry->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                     <form action="{{ route('inquiries.destroy', $inquiry->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

@push('scripts')
@endpush
