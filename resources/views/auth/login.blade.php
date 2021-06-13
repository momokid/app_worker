@extends('layouts.app')

@section('content')

    <div class="col-sm-12 pt-2 d-flex justify-content-center" style="max-height: 40vh;">
        <div class="col-6 pt-2">
            <div class="">
                <h3 class="text-white text-center">Login to {{ config('app.name','Laravel') }}</h3>
            </div>
            
            @if(session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                  </div>
            @endif
            
            <form action="{{ route('login') }}" method="post"  autocomplete="off">
                @csrf

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
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control p-4 rounded-0 @error('password') border border-danger @enderror" placeholder="Password ">

                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div>
                    <button class="btn btn-outline-warning btn-lg rounded-0 mb-2">Login</button>
                </div>
            </form>

        </div>
    </div>
    
@endsection
