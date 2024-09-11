@extends('backend/layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Update Certification</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('certification.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    Certification</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('certification.update', $certification->id) }}" enccertification="multipart/form-data"
                class="row g-3 p-3">
                @csrf
                @method('PUT')
                <div class="col-md-12 pb-3">
                    <label for="name" class="form-label">Certification Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $certification->name }}"
                        required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                        <option value="1" {{ $certification->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $certification->status == 2 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-12">
                    <button certification="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </main>
@endsection
