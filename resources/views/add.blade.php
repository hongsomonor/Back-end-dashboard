@extends('dashboard')
@section('content')
    <style>
        .test {
            background-color: rgb(20, 23, 31);
            border-radius: 10px;
            padding: 30px;
            margin: 100px auto;
            width: 95%;
        }

        .forms-sample {
            margin: 0 auto
        }
    </style>
    <div class="test">
        <form class="forms-sample align-items-center w-75" method="POST" action={{ route('store') }}
            enctype="multipart/form-data">
            <h3 class=" text-center mb-10">Add new item</h3>
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                    value={{ old('name') }}>
                @error('name')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price" step="0.01"
                    value={{ old('price') }}>
                @error('price')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control form-control-sm" id="category" name="category">
                    <option value="">Select a category</option> {{-- Added a default empty option --}}
                    <option value="Pizza" {{ old('category') == 'Pizza' ? 'selected' : '' }}>Pizza</option>
                    <option value="Burger" {{ old('category') == 'Burger' ? 'selected' : '' }}>Burger</option>
                    <option value="Pasta" {{ old('category') == 'Pasta' ? 'selected' : '' }}>Pasta</option>
                    <option value="Salad" {{ old('category') == 'Salad' ? 'selected' : '' }}>Salad</option>
                </select>
                @error('category')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="2">{{ old('description') }}</textarea>
                @error('image')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class=" form-group">
                <label class="form-label" for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" />
                @error('image')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <br>
            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
    </div>
@endsection
