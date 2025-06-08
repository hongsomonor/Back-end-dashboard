@extends('dashboard')
@section('content')
    <style>
        .table-responsive {
            padding: 20px;
            background-color: rgb(20, 23, 31);
            height: 85%;
            width: 95%;
            margin: 100px auto;
            border-radius: 10px;
        }

        .table-responsive tbody td:nth-child(4) {
            /* This targets the description column */
            white-space: normal;
            /* Allows text to wrap */
            word-wrap: break-word;
            /* Breaks long words if necessary */
            max-width: 200px;
        }

        .table-responsive button {
            margin-bottom: 10px
        }

        .btn-ss{
            background-color: gray;
        }

        h1 {
            margin-bottom: 20px;
            color: gray
        }
    </style>
    <div class="table-responsive">
        <button type="button" class="btn btn-ss btn-icon-text"> <a class=" text-decoration-none text-light"
                href={{ route('product-add') }}>+ Add item</a> </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th> Image </th>
                    <th> Name </th>
                    <th> Description </th>
                    <th> Price </th>
                    <th> Category </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td class="p-3">
                            <img src={{ asset('uploads/' . $product->image) }} alt="image"
                                style="width: 70px; height: 70px;" />
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category }}</td>
                        <td>
                            <button class=" btn btn-primary mr-1">Edit</button>
                            <button class=" btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
