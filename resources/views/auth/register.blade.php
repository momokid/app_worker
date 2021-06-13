@extends('layouts.app')

@section('content')

    <div class="col-sm-9 pt-2 d-flex justify-content-center">
        <div class="col-8 pt-2">
            <div class="">
                <h3 class="text-white text-center">New User Registration</h3>
            </div>
            
            <form action="{{ route('signup') }}" method="post"  autocomplete="off">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Full Name</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control p-4 rounded-0 @error('name') border border-danger @enderror" placeholder="Full Name">

                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" name="username" value="{{old('username')}}" class="form-control p-4 rounded-0 @error('username') border border-danger @enderror" placeholder="Username">

                    @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" id="email" name="email" value="{{ old('email')}}" class="form-control p-4 rounded-0 @error('email') border border-danger @enderror" placeholder="Email Address">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="admin" class="sr-only">Account Type</label>
                    <select id="admin" name="acctype" class="form-select p-3 rounded-0 @error('acctype') border border-danger @enderror" >
                        <option value="{{ old('acctype') }}" disabled selected >Select Account Type</option>
                        <option value="admin">Administrative</option>
                        <option value="patrol">Patrol</option>
                        <option value="fuel_escort">Fuel Escort</option>
                    </select>
                    @error('acctype')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control p-4 rounded-0 @error('password') border border-danger @enderror" placeholder="Password minimum must be 8 characters">

                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Conmfirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control p-4 rounded-0" placeholder="Confirm Password">
                </div>
                <div>
                    <button class="btn btn-outline-warning btn-lg rounded-0 mb-2">Register</button>
                </div>
            </form>

        </div>
    </div>
    
@endsection
