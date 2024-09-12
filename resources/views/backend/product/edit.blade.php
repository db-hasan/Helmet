@extends('backend/layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Update Costing</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('costing.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    Costing</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('costing.update', $costing->id) }}" enctype="multipart/form-data"
                class="row g-3 p-3">
                @csrf
                @method('PUT')
            
                <!-- Brand Field -->
                <div class="col-md-12 pb-3">
                    <label for="brand_id" class="form-label">Brand<span class="text-danger">*</span></label>
                    <select id="brand_id" name="brand_id" class="form-select" required>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $costing->brand_id == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('brand_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Model Field -->
                <div class="col-md-12 pb-3">
                    <label for="modele_id" class="form-label">Model<span class="text-danger">*</span></label>
                    <select id="modele_id" name="modele_id" class="form-select" required>
                        @foreach ($modeles as $modele)
                            <option value="{{ $modele->id }}" {{ $costing->modele_id == $modele->id ? 'selected' : '' }}>
                                {{ $modele->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('modele_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Type Field -->
                <div class="col-md-12 pb-3">
                    <label for="type_id" class="form-label">Type<span class="text-danger">*</span></label>
                    <select id="type_id" name="type_id" class="form-select" required>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $costing->type_id == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Size Field -->
                <div class="col-md-12 pb-3">
                    <label for="size_id" class="form-label">Size<span class="text-danger">*</span></label>
                    <select id="size_id" name="size_id" class="form-select" required>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->id }}" {{ $costing->size_id == $size->id ? 'selected' : '' }}>
                                {{ $size->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('size_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Color Field -->
                <div class="col-md-12 pb-3">
                    <label for="color_id" class="form-label">Color<span class="text-danger">*</span></label>
                    <select id="color_id" name="color_id" class="form-select" required>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}" {{ $costing->color_id == $color->id ? 'selected' : '' }}>
                                {{ $color->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('color_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Certification Field -->
                <div class="col-md-12 pb-3">
                    <label for="certification_id" class="form-label">Certification<span class="text-danger">*</span></label>
                    <select id="certification_id" name="certification_id" class="form-select" required>
                        @foreach ($certifications as $certification)
                            <option value="{{ $certification->id }}" {{ $costing->certification_id == $certification->id ? 'selected' : '' }}>
                                {{ $certification->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('certification_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Status Field -->
                <div class="col-md-12">
                    <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                    <select class="form-select" name="status" id="status">
                        <option value="1" {{ $costing->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $costing->status == 2 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Submit Button -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
            
        </div>

    </main>
@endsection
