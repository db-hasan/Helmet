@extends('backend/layouts')
@section('content')
    <main id="main" class="main">
        <div class="row">
            <div class="col-md-4 pb-3">
                <input type="text" class="form-control" id="search" placeholder="Search here">
            </div>
            <div class="col-md-2 pb-3">
                <select id="type_id" name="type_id" class="form-select" required>
                    <option selected disabled>Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 pb-3">
                <select id="type_id" name="type_id" class="form-select" required>
                    <option selected disabled>Models</option>
                    @foreach ($modeles as $modele)
                        <option value="{{ $modele->id }}">{{ $modele->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 pb-3">
                <select id="type_id" name="type_id" class="form-select" required>
                    <option selected disabled>Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 pb-3">
                <select id="size_id" name="size_id" class="form-select" required>
                    <option selected disabled>Size</option>
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach
                </select>                    
            </div>
            <div class="col-md-2 pb-3">
                <select id="color_id" name="color_id" class="form-select" required>
                    <option selected disabled>Color</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach
                </select>                    
            </div>
            <div class="col-md-2 pb-3">
                <select id="certification_id" name="certification_id" class="form-select" required>
                    <option selected disabled>Certification</option>
                    @foreach ($certifications as $certification)
                        <option value="{{ $certification->id }}">{{ $certification->name }}</option>
                    @endforeach
                </select>                    
            </div>
        </div>
        
        <hr>
        <div class="custom-scrollbar-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $product->costtype->name}}</td>
                            <td>{{ $product->amount}}</td>
                            <td>{{ $product->note}}</td>
                            <td>
                                @if($product->status == 1)
                                    Active
                                @elseif($product->status == 2)
                                    Inactive
                                @endif
                            </td>
                            <td class="d-flex justify-content-end">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary mx-1"><i class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </main>
@endsection
