@extends('master')
@section('code')
    <style>
        .forms-sample{
            width: 50%;
            margin: 150px auto;
            background-color: rgb(20, 23, 31);
            border-radius: 20px;
            padding: 40px;
        }
    </style>
    <div class="container-fluid">
        <form class="forms-sample" action={{ route('submit-register') }} method="POST">
            @csrf
            <h3 class="text-center mb-4">Register</h3>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value={{ old('name') }}>
                @error('name')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value={{ old('email') }}>
                @error('email')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value={{ old('password') }}>
                @error('password')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="retype_password">Retype Password</label>
                <input type="password" class="form-control" name="retype_password" id="retype_password" placeholder="Confim password" value={{ old('retype_password') }}>
                @error('retype_password')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2 mt-3">Register</button>
            <button class="btn btn-dark mt-3">Cancel</button>
        </form>
    </div>
@endsection
