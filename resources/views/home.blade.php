@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
                <div class="card-body text-center">
                    <div>
                        <img class="w-25 h-25" src="{{asset('backend/img/p-man.webp')}}" alt="">
                    </div>
                    <a href="edit/{{Auth::user()->id}}">Edit Profile</a>
                    <div class="mt-3">
                        <h5>Name: <span> {{Auth::user()->name}}</span></h5>
                        <h5>Email: <span> {{Auth::user()->email}}</span></h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
