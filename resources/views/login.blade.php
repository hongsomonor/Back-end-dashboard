@extends('master')
@section('code')
    <style>
        .forms-sample{
            width: 50%;
            margin: 220px auto;
            background-color: rgb(20, 23, 31);
            border-radius: 20px;
            padding: 40px;
        }
    </style>
    <div class="container-fluid">
        <form class="forms-sample" action={{ route('submit_login') }} method="POST">
            @csrf
            <h3 class="text-center mb-4">Login</h3>
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
            <button type="submit" class="btn btn-primary mr-2 mt-3">Login</button>
            <button class="btn btn-dark mt-3">Cancel</button>
        </form>
    </div>
@endsection
