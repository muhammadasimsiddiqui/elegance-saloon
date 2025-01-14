@extends('backend.layouts.app')

@section('title', 'Edit Inquiry')

@section('dashboardcontent')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Edit Inquiry</h6>
                    <form action="{{ route('inquiries.update', $inquiry->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="inqName" class="form-label">Name</label>
                            <input type="text" name="inqName" id="inqName" class="form-control" value="{{ $inquiry->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="inqEmail" class="form-label">Email</label>
                            <input type="email" name="inqEmail" id="inqEmail" class="form-control" value="{{ $inquiry->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="inqSubject" class="form-label">Subject</label>
                            <input type="text" name="inqSubject" id="inqSubject" class="form-control" value="{{ $inquiry->subject }}">
                        </div>
                        <div class="mb-3">
                            <label for="inqMessage" class="form-label">Message</label>
                            <textarea name="inqMessage" id="inqMessage" class="form-control">{{ $inquiry->message }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
