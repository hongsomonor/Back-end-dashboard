@extends('dashboard')
@section('content')
    <style>
        .table-responsive {
            margin-top: 90px;
            padding: 10px
        }

        .table-responsive button {
            margin-bottom: 10px
        }

        h1 {
            margin-bottom: 20px;
            color: gray
        }
    </style>
    <div class="table-responsive">
        <button type="button" class="btn btn-success btn-icon-text">+ Add product </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> Image </th>
                    <th> Name </th>
                    <th> Description </th>
                    <th> Price </th>
                    <th> Category </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuO21J6vIQCQbjUjooEOhHyXiUZb8zykz3cw&s"
                            alt="image" style="width: 70px; height: 70px;" />
                    </td>
                    <td> Cheese Pizza </td>
                    <td>
                        This food so delicous
                    </td>
                    <td> $ 77.99 </td>
                    <td> Pizza </td>
                    <td>
                        <button class=" btn btn-primary mr-1">Edit</button>
                        <button class=" btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
