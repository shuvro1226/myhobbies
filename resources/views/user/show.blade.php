@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bold">
                    <h3>{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <p>
                        <b>Motto:</b> {{ $user->motto }}
                    </p>
                    <p>
                        <b>About the user:</b> {{ $user->about_me }}
                    </p>
                </div>
            </div>

            <div class="mt-2">
                <a href="{{ URL::previous() }}" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-up"></i> Back to overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
