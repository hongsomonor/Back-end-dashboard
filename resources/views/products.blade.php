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
            display: flex; /* Make it a flex container */
            flex-direction: column; /* Stack children vertically */
        }
        .page{
            margin-top: auto; /* This pushes the pagination to the bottom */
            /* Remove margin-top: 40px; if it's still there */
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

        .btn-ss {
            background-color: gray;
            width: 9%;
            margin-bottom: 10px;
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
                        <td>{{ $loop->index + $products->firstItem() }}</td> <!-- count item pi ler mk vinh -->
                        <td class="p-3">
                            <img src={{ asset('uploads/' . $product->image) }} alt="image"
                                style="width: 70px; height: 70px;" />
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->category }}</td>
                        <td>
                            <a href={{ route('product-edit' , $product->id) }}><button class=" btn btn-primary mr-1">Edit</button></a>
                            <a href={{ route('product-delete' , $product->id ) }}><button onclick="return confirm('Are you sure?')" class=" btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="page">
            {{ $products->links() }}
        </div>
    </div>
@endsection
